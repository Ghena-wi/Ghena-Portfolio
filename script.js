const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.transform = `translateY(-${100 * (index - i)}vh)`;
  });

  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });
}

window.addEventListener('wheel', (event) => {
  if (event.deltaY > 0) {
    currentSlide++;
  } else {
    currentSlide--;
  }

  if (currentSlide < 0) {
    currentSlide = 0;
  } else if (currentSlide >= slides.length) {
    currentSlide = slides.length - 1;
  }

  showSlide(currentSlide);
});

showSlide(currentSlide);
