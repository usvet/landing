<?php session_start() ?>
<?php
  $title = "Аутентификация";
  $links = "";
  $scripts = "";
 ?>

    <div class="container">
      <span><p class="errormsg" style="color: red; font-weight: bold;" ></p></span>
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center">Аутентификация</h1>
        </div>
        <div class="col-6">
          <form action="auth_obr.php" method="POST" class="auth-form">
             <div><span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span></div>
            
             <input type="text" class="form-controll" placeholder="Введите логин" name="login" required>
             <input type="password" class="form-controll" placeholder="Введите пароль" name="password" required >
             <div><input type="submit" value="Войти" class="btn btn-primary btn-block"></div>
          </form>
        </div>
      </div>
    </div>
    <script>
    let authForm = document.querySelector(".auth-form");
    authForm.onsubmit = function(event) {
      event.preventDefault();
      sendForm(authForm);
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
              error("Ошибка HTTP: " + response.status);
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
        let errormsg = document.querySelector(".errormsg");
        errormsg.innerHTML = text;
      }
    </script>
<? require_once("components/footer.php");?>