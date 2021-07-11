export const closeSection = () => {
    const closeButton = document.querySelectorAll('.close-button');
    
    if(closeButton) {
        closeButton.forEach(button => {
            const closeSection = button.closest('.close-section');
            button.addEventListener('click', function(e) {
                if(closeSection.classList.contains('active')) {
                    closeSection.classList.remove('active');
                    setTimeout(() => {
                        closeSection.style.display = 'none';
                    }, 500);
                } 
            })
        })
    }
}