export const contactForm = () => {
    const contactFormButton = document.querySelector('.contactFormButton');
    const contactForm = document.querySelector('#contactForm');

    if(contactForm) {
        contactForm.addEventListener('submit', function() {
            console.log('This is a submission');
            contactFormButton.classList.add('active');
            contactFormButton.disabled = true;
        })
    }
}