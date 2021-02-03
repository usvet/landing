"use strict"
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

let ct_btn = document.getElementById('contact-button');
let ct_form = document.getElementById('contact-form');
let btn_holders = document.querySelectorAll('#contact-form .button-holders');
let inputs = document.querySelectorAll('#contact-form .form-control input');
let form = document.getElementById('form');
let success_msg = document.getElementById('success-msg');
let h1 = document.querySelectorAll('#form h1')[0];
let submit = document.getElementById('submit');

ct_btn.onclick = function() {
  this.innerHTML = '';
  this.className = 'grow';
}

ct_btn.addEventListener('transitionend', function(){
  this.style.display = 'none';
  ct_form.style.display = 'flex';
});

btn_holders.forEach(btn => {
  btn.addEventListener('click', function(){
    btn.style.width = '100px';
    btn.parentNode.childNodes[3].focus();
  })
});

form.addEventListener('submit', function(e){
  e.preventDefault();
  
  let allRight = true;
  
  inputs.forEach(input => {
   if(input.value === ''){
     allRight = false;
   }
  });
  
  if(allRight) {

    h1.style.display = 'none';
    submit.style.display = 'none';
    
    inputs.forEach(input => {
      input.style.display = 'none';
    });
    
    btn_holders.forEach(btn => {
      btn.innerHTML = '';
      btn.style.width = '40px';
      btn.className = 'loader';
    });
    
    setTimeout(function(){
      success_msg.className = 'grow';
      form.style.display = 'none';
    }, 6000);
    
  } else {
    alert('Не забудьте заполнить все поля!');
  }
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("order-button").style.display = "block";
    } else {
        document.getElementById("order-button").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
}

function ibg(){

let ibg=document.querySelectorAll(".ibg");
for (var i = 0; i < ibg.length; i++) {
  if(ibg[i].querySelector('img')){
    ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
  }
}
}
ibg