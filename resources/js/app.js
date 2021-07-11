const axios = require('axios');
import { FAQ } from './FAQ'
import { contactForm } from './contactForm'
import { closeSection } from './closeSection'
import { stickyHeader } from './stickyHeader'
import { navigation } from './navigation'
const instagramFeed = document.querySelector('#instagramFeed');
const loadMoreButton = document.querySelector('#loadMoreButton');
import lightbox from 'lightbox2/dist/js/lightbox';

// Lightbox options
lightbox.option({
    'disableScrolling': true,
    'wrapAround': true,
})

// Run transition after page has been loaded
const loadingTransitions = () => {
    document.body.classList.remove('preload');
}

window.onload = loadingTransitions;

// POST CLASS Model ---------------------------------------------------------------------------------------------------------
class Post {
    constructor(limit) {
        this.limit = limit;
        this.query = `https://graph.instagram.com/me/media?limit=${this.limit}&fields=id,media_type,media_url,caption,username,timestamp&access_token=${process.env.MIX_INSTAGRAM_TOKEN}`;
        this.posts;
        this.next;
        this.currentLimit = limit;
    }

    async getPosts(query) {
        // Read data from local storage
        let posts = JSON.parse(localStorage.getItem('posts')); // this
        const newPostsRaw = await axios.get(query);

        let hasMatch = true;
        const testApiPosts = this.filteredPosts(newPostsRaw.data.data);
        const testLocalStoragePosts = posts?.posts.slice(0, testApiPosts.length) || undefined;

        if(testApiPosts && testLocalStoragePosts) hasMatch = testApiPosts.every((ApiPost, i) => ApiPost.id === testLocalStoragePosts[i].id);
        console.log("🚀 ~ file: app.js ~ line 40 ~ Post ~ getPosts ~ result", hasMatch)

        if(posts && !hasMatch) {
            posts = localStorage.removeItem('posts');
        }
        
        if(!posts) {
            // Sets variables when getting data from API Call
            this.posts = newPostsRaw;
            this.next = this.posts.data.paging.next; // next url
            this.posts = this.filteredPosts(this.posts.data.data); // array posts
            localStorage.setItem('posts', JSON.stringify(this)); // set local storage to this
            console.log('From API');
        } else {
            // Sets variables when getting data from Local Storage
            // if(newposts)

            this.posts = posts.posts;
            this.next = posts.next;
            console.log('From Local');
        }
    }

    async loadMorePosts() {
        if(!this.next) return; // if no `next URL` then return 

        const morePosts = await axios.get(this.next);
        this.posts = [...this.posts, ...this.filteredPosts(morePosts.data.data)];
        this.next = morePosts.data.paging.next;
        localStorage.setItem('posts', JSON.stringify(this)); // set local storage to this

        if(!morePosts.data.paging.next) this.next = null; // set next url to null when more posts to fetch

        return this.filteredPosts(morePosts.data.data); //returns posts
    }

    setLimit(limit) {
        if(this.next) this.next = this.next.replace(/limit=[0-9]*/, `limit=${limit}`); // sets url limit
        this.currentLimit = limit;
        localStorage.setItem('posts', JSON.stringify(this)); // set local storage to this
    }

    initialPosts() {
        let filteredPosts = [];
        if(JSON.parse(localStorage.getItem('posts'))) filteredPosts = this.posts.filter((post, index) => index < this.limit);
        return filteredPosts;
    }

    filteredPosts(posts) {
        const filteredPosts = posts.filter(post => post.media_type != "VIDEO");

        return filteredPosts;
    }
}

// VIEW CLASS Model ---------------------------------------------------------------------------------------------------------
class View {
    displayPosts(data) { // Display posts
        if(!data) return;
        const html = data.map((post) => {
            return `<a href="${post.media_url}" data-lightbox="gallery" data-title="${new Date(post.timestamp).toDateString()}" class="contained-image transition duration-200 overflow-hidden">
                <img loading="lazy" class="w-full h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="${post.media_url}" alt="Gallery Image">
            </a>`;
        }).join('');
        instagramFeed.insertAdjacentHTML('beforeend', html);
    }
    
    hideButton() {
        loadMoreButton.style.display = 'none';
    }
}

// Load more posts on button click
const loadMorePosts = (view, posts) => {
    loadMoreButton.addEventListener('click', async function(e) {
        try {
            e.preventDefault();

            // Add loader
            loadMoreButton.classList.add('active');

            //Set Variables 
            const currentlyDisplayed = Array.from(instagramFeed.children).length;
            let newPostCount = currentlyDisplayed;
            const currentLimit = posts.currentLimit;
    
            // loads more posts from api
            if(posts.posts.length === currentlyDisplayed) {
                const morePosts = await posts.loadMorePosts();
                view.displayPosts(morePosts);
                if(!posts.next) view.hideButton();
            } else { // loads more posts from local storage
                // debugger;
                newPostCount += currentLimit; 
                const restPosts = posts.posts.filter((post, index) => {
                    if(index > currentlyDisplayed - 1 && index < newPostCount) return post;
                })
    
                view.displayPosts(restPosts);
                if(!posts.next && posts.posts.length - currentLimit <= currentlyDisplayed) view.hideButton();
            }
    
            // Remove loader
            loadMoreButton.classList.remove('active');
        } catch(err) {
            console.log(err);
        }
    })
}

// Init function -----------------------------------------------------------------------------------------------------------------
// let view;
// let posts;

(async function() {
    if(instagramFeed) {
        // Add Loader
        loadMoreButton.classList.add('active');

        // Initializes Objects
        let view = new View();
        let posts = new Post(20);

        // console.log(posts)
        
        // passes data to the load more posts
        loadMorePosts(view, posts);

        // Fetches Data
        await posts.getPosts(posts.query);
        
        // Sets new limit for the load more button fetching
        posts.setLimit(20);
        
        // Passes initial posts onload depending on the posts limit
        view.displayPosts(posts.initialPosts());

        // Remove Loader
        loadMoreButton.classList.remove('active');
    }
})();

// Functions

FAQ();
contactForm();
closeSection();
stickyHeader();
navigation();


// package config

// "dev": "npm run development",
// "development": "mix",
// "watch": "mix watch",
// "watch-poll": "mix watch -- --watch-options-poll=1000",
// "hot": "mix watch --hot",
// "prod": "npm run production",
// "production": "mix --production"
