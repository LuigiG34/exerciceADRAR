// NEWSLETTER MODAL
// NEWSLETTER MODAL
// NEWSLETTER MODAL
let mailBtn = document.querySelector('#email-btn');
let mailModal = document.querySelector('.mail-container');
let crossMail = document.querySelector('.x-mail');

mailBtn.addEventListener('click', () => {
    mailModal.classList.remove('d-none');
})
crossMail.addEventListener('click', () => {
    mailModal.classList.add('d-none');
})

// modify later
let validBtn = document.querySelector('.valid');
validBtn.addEventListener('click', () => {
    mailModal.classList.add('d-none');
})


// COOKIE MODAL
// COOKIE MODAL
// COOKIE MODAL
let cookieBtn = document.querySelector('#cookie-btn');
let cookieModal = document.querySelector('.cookie-container');
let crossCookie = document.querySelector('.x-cookies');

cookieBtn.addEventListener('click', () => {
    cookieModal.classList.remove('d-none');
})
crossCookie.addEventListener('click', () => {
    cookieModal.classList.add('d-none');
})

// modify later
let actionModal = document.querySelectorAll('.action-modal');
actionModal.forEach(action => {
    action.addEventListener('click', () => {
        cookieModal.classList.add('d-none');
    })
});


// SIGN IN/UP MODAL
// SIGN IN/UP MODAL
// SIGN IN/UP MODAL
let signBtn = document.querySelector('#sign-btn');
let signModal = document.querySelector('.sign-container');
let crossSign = document.querySelector('.x-sign');

signBtn.addEventListener('click', () => {
    signModal.classList.remove('d-none');
})

crossSign.addEventListener('click', () => {
    signModal.classList.add('d-none');
})