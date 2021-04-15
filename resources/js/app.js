require('./bootstrap');
const axios = require('axios');
const instagramFeed = document.querySelector('#instagramFeed');
const loadMoreButton = document.querySelector('#loadMoreButton');

// Class Model
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
        const posts = JSON.parse(localStorage.getItem('posts')); // this
        
        if(!posts) {
            // Sets variables when getting data from API Call
            this.posts = await axios.get(query);
            this.next = this.posts.data.paging.next; // next url
            this.posts = this.posts.data.data; // array posts
            localStorage.setItem('posts', JSON.stringify(this)); // set local storage to this
            console.log('From API');
        } else {
            // Sets variables when getting data from Local Storage
            this.posts = posts.posts;
            this.next = posts.next;
            console.log('From Local');
        }
    }

    async loadMorePosts() {
        if(!this.next) return; // if no `next URL` then return 

        const morePosts = await axios.get(this.next);
        this.posts = [...this.posts, ...morePosts.data.data];
        this.next = morePosts.data.paging.next;
        localStorage.setItem('posts', JSON.stringify(this)); // set local storage to this

        if(!morePosts.data.paging.next) this.next = null; // set next url to null when more posts to fetch

        return morePosts.data.data; //returns posts
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
}

class View {
    displayPosts(data) { // Display posts
        if(!data) return;
        const html = data.map((post) => {
            return `<div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
                <img class="w-full h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="${post.media_url}" alt="Gallery Image">
            </div>`;
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
        e.preventDefault();

        //Set Variables 
        const currentlyDisplayed = Array.from(instagramFeed.children).length;
        let newPostCount = currentlyDisplayed;
        const currentLimit = posts.currentLimit;

        posts.getLimitPosts;

        if(posts.posts.length === currentlyDisplayed) {
            const morePosts = await posts.loadMorePosts();
            view.displayPosts(morePosts, 'onclick');
            if(!posts.next) view.hideButton();
        } else {
            newPostCount += currentLimit; 
            const restPosts = posts.posts.filter((post, index) => {
                if(index > currentlyDisplayed - 1 && index < newPostCount) return post;
            })

            view.displayPosts(restPosts, 'onclick');
            if(!posts.next && posts.posts.length - currentLimit === currentlyDisplayed) view.hideButton();
        }
    })
}

// Init function
// let view;
// let posts;

(async function() {
    if(instagramFeed) {
        // Initializes Objects
        let view = new View();
        let posts = new Post(20);
        
        loadMorePosts(view, posts);
        
        // Fetches Data
        await posts.getPosts(posts.query);
        
        console.log();
        // Sets new limit for the load more button fetching
        posts.setLimit(10);
        
        // Passes initial posts onload depending on the posts limit
        view.displayPosts(posts.initialPosts());
    }
})();

