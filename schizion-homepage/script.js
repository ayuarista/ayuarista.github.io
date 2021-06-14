// NAVBAR
const menuToggle = document.querySelector('.nav-toggle input');
const nav = document.querySelector('nav ul');
const navLink =document.querySelector('.nav-link');

menuToggle.addEventListener('click', function(){
    console.log('done');
nav.classList.toggle('slide');
navLink.classList.toggle('slide');
});



//  FEATURES SELECT
var news = document.getElementById('news');
var schizo = document.getElementById('schizo');
var diagnose = document.getElementById('diagnose');
var treatment = document.getElementById('treatment');
const btn1 = document.querySelector('#btn1');
const btn2 = document.querySelector('#btn2');
const btn3 = document.querySelector('#btn3');
const btn4 = document.querySelector('#btn4');

btn1.addEventListener('click', function(){
    news.style.display="block";
    schizo.style.display="none";
    diagnose.style.display="none";
    treatment.style.display="none";
});

btn2.addEventListener('click', function(){
    news.style.display="none";
    schizo.style.display="block";
    diagnose.style.display="none";
    treatment.style.display="none";
});

btn3.addEventListener('click', function(){
    news.style.display="none";
    schizo.style.display="none";
    diagnose.style.display="block";
    treatment.style.display="none";
});

btn4.addEventListener('click', function(){
    news.style.display="none";
    schizo.style.display="none";
    diagnose.style.display="none";
    treatment.style.display="block";
});


// REVIEW SLIDER
const slider = document.querySelectorAll('.slider');
const dot = document.querySelectorAll('.dot');

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
