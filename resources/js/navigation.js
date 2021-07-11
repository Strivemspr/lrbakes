export const navigation = () => {
    const closeButton = document.querySelector('.navigation-close');
    const openButton = document.querySelectorAll('.navigation-open');
    const navigation = document.querySelector('.navigation');
    const navigationModal = document.querySelector('.navigation-modal');

    
    navigationModal.addEventListener('click', closeNavigation);
    closeButton.addEventListener('click', closeNavigation);
    openButton.forEach((button) => {
        button.addEventListener('click', openNavigation);
    })

    function openNavigation() {
        if(!navigation.classList.contains('active')) {
            navigation.classList.add('active');
        }
    }

    function closeNavigation() {
        console.log(closeButton)
        if(navigation.classList.contains('active')) {
            navigation.classList.remove('active');
        }
    }
}