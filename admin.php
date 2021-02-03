<?php 
  session_start();
  if( !isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
    header("Location: lk.php");
  } 
  $title = "Панель администратора";
  $links = "<link rel=\"stylesheet\" href=\"css/admin.css\">";
  $scripts = "";
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $links ?>
    <title><?= $title ?></title>
  </head>
<body>
  <nav>
    <ul class="navigation">
      <li><a href="lk.php">Личный кабинет</a></li>
      <li><a href="syte.php">Главная</a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="text-center my-3">Панель администратора</h1>
      </div>
      <div class="col-8 d-flex justify-content-center">
        <table border="1" class="users-table">
          <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>Управление</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
    <script>
      getAllUsers();
      function getAllUsers() {
        fetch("getAllUsers.php") 
          .then((response) => {
            if (response.ok) {
              return response.json(); 
            } else {
              console.error("Ошибка HTTP: " + response.status);
            }
          })
          .then((result) => {
            if(result.status == "fail") {
              alert(result.message);
            } else {
              createRows(result);
            }
          });
      }
      function createRows(users) {
        let table = document.querySelector(".users-table");
        for(let user of users) {
          let row = document.createElement("tr");
          row.setAttribute("sql-id", user.id);
          row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.login}</td>
            <td>${user.name}</td>
            <td>${user.lastname}</td>
            <td>${user.birthday}</td>
            <td>
              <button href="admin_obr.php?id=${user.id}" class="btn btn-danger btn-block delete-button">Удалить</button>
            </td>
          `;
          table.append(row);
          let deleteButton = row.querySelector(".delete-button");
          deleteButton.onclick = function() {
            deleteUser(user.id);
          }
        }
      }
      
      function deleteUser(userID) {
        fetch(`admin_obr.php?id=${userID}`)
          .then((response) => {
            if (response.ok) {
              return response.text();
            } else {
              console.error("Ошибка HTTP: " + response.status);
            }
          })
          .then((result) => {
            if (result == "ok") {
              let deleteRow = document.querySelector(`tr[sql-id='${userID}']`);
              deleteRow.remove();
            } else {
                alert(result);
              }
          });
      }
    </script>
<? require_once("components/footer.php") ?>