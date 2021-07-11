export const stickyHeader = () => {
    const header = document.querySelector('.header');
    const logo = document.querySelector('.header-logo');

    document.addEventListener('scroll', run);
    
    let initial = 650;

    function run() {
        let scrollTop = window.scrollY;
        if(scrollTop > initial) {
            header.classList.add('active');
        } else {
            header.classList.remove('active');
        } 
        
    }
}

