 "use strict"
 window.setInterval(() => {
                $(".cloud").css("position", "relative")
                           .animate({
                             "right" : "50%"
                           }, 15000)
                           .animate({
                             "right" : "-80%"
                           }, 0)
                })
  window.setInterval(() => {
                $(".cloud_3").css("position", "relative")
                           .animate({
                             "right" : "80%"
                           }, 15000)
                           .animate({
                             "right" : "-80%"
                           }, 0)
                })
       
let lkForm = document.querySelector(".lk-form");
lkForm.onsubmit = function(event) {
  event.preventDefault();
  sendForm(lkForm);
}
          
let lklastForm = document.querySelector(".lklast-form");
lklastForm.onsubmit = function(event) {
  event.preventDefault();
  sendForm(lklastForm);
}
          
let lkbForm = document.querySelector(".lkb-form");
lkbForm.onsubmit = function(event) {
  event.preventDefault();
  sendForm(lkbForm);
}
          
function sendForm(form) {
let formData = new FormData(form);
fetch(form.action, {
  method: form.method,
  body: formData,
})
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
          console.error("Ошибка HTTP: " + response.status);
        }
    })
    .then((result) => {
      if(result == "ok") {
        location.href = "lk.php";
      } else {
          showErrorText(result);
        }
    })
}
          
function showErrorText(text) {
let p = document.querySelector(".error-text");
p.innerHTML = text;
}