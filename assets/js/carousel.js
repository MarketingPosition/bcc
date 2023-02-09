const galleryContainer = document.querySelector('.slider__list');
const galleryControlsContainer = document.querySelector('.slider__controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.slider__item');

class Carousel {
  constructor(container, items, controls) {
    this.carouselContainer = container;
    this.carouselControls = controls;
    this.carouselArray = [...items];
  }

  // Assign initial css classes for gallery and nav items
  setInitialState() {
    this.carouselArray[0].classList.add('slider__item-first');
    this.carouselArray[1].classList.add('slider__item-previous');
    this.carouselArray[2].classList.add('slider__item-selected');
    this.carouselArray[3].classList.add('slider__item-next');
    this.carouselArray[4].classList.add('slider__item-last');

    document.querySelector('.slider__controls').childNodes[0].className = 'slider__controls-item slider__item-first';
    document.querySelector('.slider__controls').childNodes[1].className = 'slider__controls-item slider__item-previous';
    document.querySelector('.slider__controls').childNodes[2].className = 'slider__controls-item slider__item-selected';
    document.querySelector('.slider__controls').childNodes[3].className = 'slider__controls-item slider__item-next';
    document.querySelector('.slider__controls').childNodes[4].className = 'slider__controls-item slider__item-last';
  }

  // Update the order state of the carousel with css classes
  setCurrentState(target, selected, previous, next, first, last) {

    selected.forEach(el => {
      el.classList.remove('slider__item-selected');

      if (target.className == 'slider__controls-previous') {
        el.classList.add('slider__item-next');
      } else {
        el.classList.add('slider__item-previous');
      }
    });

    previous.forEach(el => {
      el.classList.remove('slider__item-previous');

      if (target.className == 'slider__controls-previous') {
        el.classList.add('slider__item-selected');
      } else {
        el.classList.add('slider__item-first');
      }
    });

    next.forEach(el => {
      el.classList.remove('slider__item-next');

      if (target.className == 'slider__controls-previous') {
        el.classList.add('slider__item-last');
      } else {
        el.classList.add('slider__item-selected');
      }
    });

    first.forEach(el => {
      el.classList.remove('slider__item-first');

      if (target.className == 'slider__controls-previous') {
        el.classList.add('slider__item-previous');
      } else {
        el.classList.add('slider__item-last');
      }
    });

    last.forEach(el => {
      el.classList.remove('slider__item-last');

      if (target.className == 'slider__controls-previous') {
        el.classList.add('slider__item-first');
      } else {
        el.classList.add('slider__item-next');
      }
    });
  }

  // Construct the carousel navigation
  setNav() {
    galleryContainer.appendChild(document.createElement('ul')).className = 'slider__controls';

    this.carouselArray.forEach(item => {
      const nav = galleryContainer.lastElementChild;
      nav.appendChild(document.createElement('li'));
    });
  }

  // Construct the carousel controls
  setControls() {
    this.carouselControls.forEach(control => {
      galleryControlsContainer.appendChild(document.createElement('button')).className = `slider__controls-${control}`;
    });

    !!galleryControlsContainer.childNodes[0] ? galleryControlsContainer.childNodes[0].innerHTML = this.carouselControls[0] : null;
    !!galleryControlsContainer.childNodes[1] ? galleryControlsContainer.childNodes[1].innerHTML = this.carouselControls[1] : null;
  }

  // Add a click event listener to trigger setCurrentState method to rearrange carousel
  useControls() {
    const triggers = [...galleryControlsContainer.childNodes];

    triggers.forEach(control => {
      control.addEventListener('click', () => {
        const target = control;
        const selectedItem = document.querySelectorAll('.slider__item-selected');
        const previousSelectedItem = document.querySelectorAll('.slider__item-previous');
        const nextSelectedItem = document.querySelectorAll('.slider__item-next');
        const firstCarouselItem = document.querySelectorAll('.slider__item-first');
        const lastCarouselItem = document.querySelectorAll('.slider__item-last');

        this.setCurrentState(target, selectedItem, previousSelectedItem, nextSelectedItem, firstCarouselItem, lastCarouselItem);
      });
    });
  }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.setNav();
exampleCarousel.setInitialState();
exampleCarousel.useControls();
