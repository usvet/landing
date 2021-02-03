<?php 
  session_start();
  if (!isset($_SESSION['id'])) {
    header("Location: auth.php");
  }
  $title = "Личный кабинет";
  $links = "";
  $scripts = "";
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $links ?>
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
    <link href="style/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lk.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  </head>
  <body>
    <nav>
      <ul class="navigation">
        <li><a href="syte.php">Выйти</a></li>
        <?php if(isset($_SESSION['id']) && $_SESSION['is_admin'] == 1): ?>
           <li><a href="admin.php">Панель администратора</a></li>
          <?php endif; ?>
      </ul>
    </nav>
    <div class="top-left">
      <?$hour=date(H);
        if ($hour >= 6 && $hour < 12) {$welcome = 'Доброе утро, ';}
        	elseif ($hour >= 12 && $hour < 18) {$welcome = 'Добрый день, ';}
           elseif ($hour >= 18 && $hour < 23) {$welcome = 'Добрый вечер, ';}
          	else 	{$welcome = 'Доброй ночи, ';}
        echo($welcome . $_SESSION['name'] . "!");
    	?>
    </div>
    <div class="container">
        <img src="https://thumbs.gfycat.com/EnormousAridBlackandtancoonhound-small.gif" class="cloud" alt="">
        <img src="https://thumbs.gfycat.com/EnormousAridBlackandtancoonhound-small.gif" class="cloud" alt="">       
        <img src="https://thumbs.gfycat.com/EnormousAridBlackandtancoonhound-small.gif" class="cloud_3" alt="">
    </div>
      <div class="row ">
        <div class="col-12">
          <h1 class="text-center my-3">Личный кабинет</h1>
        </div>
        <div class="col-8">
          <p><span>ID: </span><span><?php echo $_SESSION['id']?></span></p>
          <p><span>Login: </span><span><?php echo $_SESSION['login']?></span></p>
          <p><span>Имя: </span><span><?php echo $_SESSION['name']?></span></p>
          <form action="lk_obr.php" method="POST" class="lk-form">
            <input type="text" name="name" value="<?= $_SESSION['name']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
          </form>
          <p><span>Фамилия: </span><span><?= $_SESSION['lastname']?></span></p>
          <form action="lk_obr.php" method="POST" class="lklast-form">
            <input type="text" name="lastname" value="<?= $_SESSION['lastname']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
          </form>
          <p><span>Дата рождения: </span><span><?= $_SESSION['birthday']?></span></p>
          <form action="lk_obr.php" method="POST" class="lkb-form">
            <input type="date" name="birthday" value="<?= $_SESSION['birthday']?>">
            <input type="submit" value="Изменить" class="btn btn-primary">
            <p class ="error-text"></p>
          </form>
        </div>
      </div>
  <script src="js/lk.js"></script>    
  <?php require_once("components/footer.php"); ?>