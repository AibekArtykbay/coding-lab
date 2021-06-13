<!doctype html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <li class="active"><a href="index2.html">Home</a></li>
  <li><a href="Series.html">Series</a></li>
  <li><a href="Cartoons.html"> Cartoons</a></li>
  <li><a href="Final_WEB.html">Contact</a></li>
  <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>

  <div class="container mt-4">
    <?php
     if($_COOKIE['user'] == ''):
      ?>
      <div class="row">
         <div class="col">
           <h1>Форма регистрации</h1>
           <form  action="php/check.php" method="post">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

             <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя"><br>

             <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Регистрация</button>
           </form>
         </div>

         <div class="col">
           <h1>Форма авторизации</h1>
           <form  action="php/auth.php" method="post">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

             <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Авторизация</button>
           </form>
         </div>
           <?php else: ?>
             <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="php/exit.php">здесь</a> </p>
         <?php endif;?>

      </div>
  </div>

</body>
</html>
