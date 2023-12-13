// ********************  Menu start **********************

class MenuManager {
    constructor(hamburgerId, menuId, navbarSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu = document.getElementById(menuId);
        this.navbar = document.querySelector(navbarSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));
    }

    toggle = () => {

        if (this.isOpen) {
            // Zárás animáció
            this.menu.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu.style.opacity = 1;
            this.menu.style.transform = "translateX(0)";
        }

        this.menu.classList.toggle('active');
        this.navbar.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

// TODO ezt át kell írni szebben úgy, hogy css-bol jöjjenek az adatok 

const menuManager = new MenuManager('hamburger', 'menu', '.navbar');

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


const promotionsImg = document.querySelectorAll('.promotions-content__img-text-box__div');
const pageLinkBox = document.querySelectorAll('.promotions-content__link-box');
const aboutImg = document.querySelectorAll('.about-content__img-text-box__img-box__one-img-box');
const gallerySlies = document.querySelectorAll('.gallery-content__sildes');
const products = document.querySelectorAll('.products-content__flex-box__div');

promotionsImg.forEach(element => {
    new ScrollBottomAnimation(element);
});

pageLinkBox.forEach(element => {
    new ScrollBottomAnimation(element);
});

aboutImg.forEach(element => {
    new ScrollBottomAnimation(element);
});

gallerySlies.forEach(element => {
    new ScrollBottomAnimation(element);
});

products.forEach(element => {
    new ScrollBottomAnimation(element);
});



// ********************  Bottom Animation end **********************

// ********************  Slider start **********************


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

// ********************  Slider end **********************