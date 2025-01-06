function initSlideshow() {
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.bottom-4 button');
  let slideInterval;

  function showSlide(index) {
      // Remove active class from all slides and dots
      slides.forEach(slide => {
          slide.classList.remove('active');
      });
      dots.forEach(dot => {
          dot.classList.remove('bg-white');
          dot.classList.add('bg-white/50');
      });

      // Show the current slide and dot
      currentSlide = (index + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
      dots[currentSlide].classList.remove('bg-white/50');
      dots[currentSlide].classList.add('bg-white');
  }

  function changeSlide(direction) {
      showSlide(currentSlide + direction);
      resetInterval();
  }

  function goToSlide(index) {
      showSlide(index);
      resetInterval();
  }

  function resetInterval() {
      clearInterval(slideInterval);
      slideInterval = setInterval(() => {
          changeSlide(1);
      }, 5000);
  }

  // Initialize slideshow
  showSlide(0);
  resetInterval();

  // Add event listeners
  const slidesContainer = document.querySelector('.slides-container');
  slidesContainer.addEventListener('mouseenter', () => {
      clearInterval(slideInterval);
  });

  slidesContainer.addEventListener('mouseleave', () => {
      resetInterval();
  });

  // Add click handlers to navigation buttons
  document.querySelectorAll('[data-slide-nav]').forEach(button => {
      button.addEventListener('click', (e) => {
          const direction = parseInt(button.dataset.slideNav);
          changeSlide(direction);
      });
  });

  // Add click handlers to dot navigation
  document.querySelectorAll('[data-slide-index]').forEach(dot => {
      dot.addEventListener('click', (e) => {
          const index = parseInt(dot.dataset.slideIndex);
          goToSlide(index);
      });
  });
}


document.addEventListener('DOMContentLoaded', function() {
    initSlideshow();
});