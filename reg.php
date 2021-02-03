<?php session_start() ?>
<?php
  $title = "Регистрация";
  $links = "";
  $scripts = "";
?>
    <div class="containerreg">
      <span><p class="errortext" style="color: red; font-weight: bold;></p></span>
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center">Регистрация</h1>
        </div>
        <div class="col-6">
          <form action="reg_obr.php" method="POST" class="reg-form">
              <div><span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span></div>
              <input type="text" class="form-controll" placeholder="Введите логин" name="login" required>
              <input type="password" class="form-controll" placeholder="Введите пароль" name="password" required>
              <input type="text" class="form-controll" placeholder="Введите имя" name="name" required >
              <input type="text" class="form-controll" placeholder="Введите фамилию" name="lastname" required>
              <p><span>Дата рождения</span></p>
              <input type="date" class="form-controll" name="birthday" required >
              <input type="submit" value="Зарегистрироваться" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
    <script>
      let regForm = document.querySelector(".reg-form");
      regForm.onsubmit = function(event) {
        event.preventDefault();
        sendForm(regForm);
      }
          
      function sendForm(form) {
        let formData = new FormData(form); 
         fetch("reg_obr.php", { 
          method: "POST",
          body: formData,
      })
          .then((response) => {
            if(response.ok) { 
              return response.text();
            } else {
               error("Ошибка HTTP: " + response.status);
              }
          }) 
          .then((result) => {
            if(result == "ok") {
              alert("Пользователь успешно зарегистрирован!");
            } else {
               showErrorText(result);
              }
          })
      }   
       function showErrorText(text) {
        let errortext = document.querySelector(".errortext");
        errortext.innerHTML = text;
       }
      
   </script>
<? require_once("components/footer.php");?>