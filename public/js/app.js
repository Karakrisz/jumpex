// ********************  Menu start **********************

class MenuManager {
    constructor(hamburgerId, menu__listId, headerSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu__list = document.getElementById(menu__listId);
        this.header = document.querySelector(headerSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));

        const mediaQuery = window.matchMedia('(min-width: 577px)');

        mediaQuery.addEventListener('change', () => {
            if (mediaQuery.matches) {
                this.menu__list.style.transform = '';
                this.menu__list.style.opacity = '';
                this.menu__list.classList.remove('active');
                this.header.classList.remove('active');
                this.isOpen = false;
            }
        });
    }

    toggle = () => {
        if (this.isOpen) {
            // Zárás animáció
            this.menu__list.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu__list.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu__list.style.opacity = 1;
            this.menu__list.style.transform = "translateX(0)";
        }

        this.menu__list.classList.toggle('active');
        this.header.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

const menuManager = new MenuManager('hamburger', 'menu__list', '.header');

// ********************  Language selector start **********************

class FlagContainer {
    constructor() {
        this.flagContainer = document.querySelector('.flag-container');
        this.subFlags = document.querySelector('.sub-flags');
        this.flagArrow = document.querySelector('.flag-arrow');

        this.flagArrow.addEventListener('click', () => this.toggleSubFlags());
        document.addEventListener('click', (e) => this.hideSubFlags(e));
    }

    toggleSubFlags() {
        this.subFlags.style.display = (this.subFlags.style.display === 'block') ? 'none' : 'block';
    }

    hideSubFlags(e) {
        if (e.target !== this.flagArrow && e.target.parentNode !== this.flagArrow) {
            this.subFlags.style.display = 'none';
        }
    }
}

const flagContainer = new FlagContainer();

// ********************  Language selector end **********************

// ********************  Menu end **********************

// ********************  Bottom Animation start **********************

class ScrollBottomAnimation {
    constructor(element) {
        this.element = element;
        this.init();
    }

    init() {
        this.addScrollListener();
    }

    addScrollListener() {
        window.addEventListener('scroll', () => this.checkScroll());
    }

    checkScroll() {
        const boxTop = this.element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (boxTop < windowHeight) {
            this.element.classList.add('animate-in');
            window.removeEventListener('scroll', () => this.checkScroll);
        }
    }
}


const introContentArrowImg = document.querySelectorAll('.intro-content__arrow-img');
const introContentImgboxImg = document.querySelectorAll('.intro-content__img-box__img');
const aboutBodyiBoxImg = document.querySelectorAll('.about-body__iBox__img');
const partnersContentiBoximg = document.querySelectorAll('.partners-content__iBox__img');
const partnersContentLinkbox = document.querySelectorAll('.partners-content__link-box');
const blogContentCBox = document.querySelectorAll('.blog-content__cBox');
const footerContentiBoximg = document.querySelectorAll('.footer-content__iBox__img');
const footerContenttBoxFormBtnBox = document.querySelectorAll('.footer-content__tBox__form__btn-box');

introContentArrowImg.forEach(element => {
    new ScrollBottomAnimation(element);
});

introContentImgboxImg.forEach(element => {
    new ScrollBottomAnimation(element);
});

aboutBodyiBoxImg.forEach(element => {
    new ScrollBottomAnimation(element);
});

partnersContentiBoximg.forEach(element => {
    new ScrollBottomAnimation(element);
});

partnersContentLinkbox.forEach(element => {
    new ScrollBottomAnimation(element);
});

blogContentCBox.forEach(element => {
    new ScrollBottomAnimation(element);
});

footerContentiBoximg.forEach(element => {
    new ScrollBottomAnimation(element);
});

footerContenttBoxFormBtnBox.forEach(element => {
    new ScrollBottomAnimation(element);
});


// ********************  Bottom Animation end **********************

// ********************  Matrix start **********************


class MatrixTextAnimation {
    constructor(selector) {
        this.matrixText = document.querySelectorAll(selector);
    }

    animateLetters() {
        this.matrixText.forEach((letter, index) => {
            setTimeout(() => {
                letter.style.opacity = "1";
                letter.style.transform = "translateY(0)";
            }, index * 50);
        });
    }
}


const matrixTextAnimation = new MatrixTextAnimation(".matrix-text__span");
matrixTextAnimation.animateLetters();

// ********************  Matrix end **********************

/********************  Smooth scroll start **********************/

function smoothScrollTo(targetId, duration) {

    const target = document.querySelector(targetId);

    if (!target) return;

    const targetPosition = target.getBoundingClientRect().top + window.window.scrollY;
    const startPosition = window.window.scrollY;
    const distance = targetPosition - startPosition;
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const progress = timeElapsed / duration;
        window.scrollTo(0, startPosition + distance * progress);
        if (timeElapsed < duration) requestAnimationFrame(animation);
    }

    requestAnimationFrame(animation);
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.scroll').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            smoothScrollTo(targetId, 1000);
        });
    });
});


/********************  Smooth scroll end **********************/

/********************  Mail send start **********************/

class ContactFormHandler {
    constructor(formSelector) {
        this.form = document.querySelector(formSelector);
        this.submitButton = this.form.querySelector('button[type="submit"]');
        this.initEventListeners();
    }

    initEventListeners() {
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));
    }

    handleSubmit(event) {
        event.preventDefault();
        const formData = new FormData(this.form);

        fetch(this.form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('_token')
                }
            })
            .then(response => {
                if (response.ok && response.headers.get('Content-Type').includes('application/json')) {
                    return response.json();
                } else {
                    throw new Error('A szerver nem JSON választ küldött.');
                }
            })
            .then(data => this.handleResponse(data))
            .catch(error => this.displayErrorMessage(error.toString()));
    }

    handleResponse(data) {
        if (data.success) {
            this.displaySuccessMessage(data.message);
            this.submitButton.style.display = 'none';
        } else {
            this.displayErrorMessage(data.message || 'Hiba történt az üzenet küldése közben.');
        }
    }

    displaySuccessMessage(message) {
        const successCard = document.createElement('div');
        successCard.classList.add('form__success-box');
        successCard.innerHTML = `<p>${message}</p>`;
        this.form.appendChild(successCard);
    }


    displayErrorMessage(message) {
        alert(message);
    }
}

const contactForm = new ContactFormHandler('#contactForm');

/********************  Slide start **********************/

const splide = new Splide('.splide', {
    type: 'loop',
    autoplay: 'true',
    interval: '5000',
});

splide.mount();

/********************  Slide end **********************/