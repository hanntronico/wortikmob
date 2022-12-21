<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->
	
 <style type="text/css">


.slider-container {
  position: relative;
  width: 100%;
  height: 300px;
  overflow: hidden;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 1px solid red;
}

/*.carousel {
  background: #EEE;
}

.carousel-cell {
  width: 30%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  border-radius: 5px;
  counter-increment: carousel-cell;
}

/* cell number */
.carousel-cell:before {
  display: block;
  text-align: center;
  content: counter(carousel-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}*/
  </style>

</head>
<body>
	
<div class="slider-container">
  <div class="slide">Slide 1</div>
  <div class="slide">Slide 2</div>
  <div class="slide">Slide 3</div>
</div>

<button id="prev-btn">Anterior</button>
<button id="next-btn">Siguiente</button>


<!-- <div style="box-sizing: border-box;">
  <div class="carousel" data-flickity='{ "wrapAround": true }'>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
    <div class="carousel-cell"></div>
  </div>
</div>   -->


</body>
<!-- <script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.js"></script> -->

 <script type="text/javascript">



const sliderContainer = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('#prev-btn');
const nextBtn = document.querySelector('#next-btn');

let currentSlide = 0;
let isEnabled = true;

function changeCurrentSlide(n) {
  currentSlide = (n + slides.length) % slides.length;
}

function hideSlide(direction) {
  isEnabled = false;
  slides[currentSlide].classList.add(direction);
  slides[currentSlide].addEventListener('animationend', function() {
    this.classList.remove('active', direction);
  });
}

function showSlide(direction) {
  slides[currentSlide].classList.add('next', direction);
  slides[currentSlide].addEventListener('animationend', function() {
    this.classList.remove('next', direction);
    this.classList.add('active');
    isEnabled = true;
  });
}

function previousSlide() {
  if (isEnabled) {
    hideSlide('to-right');
    changeCurrentSlide(currentSlide - 1);
    showSlide('from-left');
  }
}

function nextSlide() {
  if (isEnabled) {
    hideSlide('to-left');
    changeCurrentSlide(currentSlide + 1);
    showSlide('from-right');
  }
}

prevBtn.addEventListener('click', previousSlide);
nextBtn.addEventListener('click', nextSlide);






    </script>

</html>