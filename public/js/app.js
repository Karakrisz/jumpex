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

/********************  Slide start **********************/

const splide = new Splide('.splide', {
    type: 'loop',
    autoplay: 'true',
    interval: '5000',
});

splide.mount();

/********************  Slide end **********************/