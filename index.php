
<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Final project</title>
  <link rel="stylesheet" href="Final.css">
    <script src="Final.js" defer></script> 
	
	
	
</head>
<body>
<!-- *****************************************************************************************  1блок     -->

<header>
    <div id="logo">
      <span>OverView</span>
    </div>
    <div id="about">
      <a href="Movies.html" title="Возможности" onclick="slowScroll">Movies</a>
      <a href="Series.html" onclick="slowScroll" >Series</a>
      <a href="films.php" onclick="slowScroll">films</a>
	  <a href="Cartoons.html" onclick="slowScroll">cartoons</a>
	  <a href="#" onclick="slowScroll('#faq')">News</a>
	   <a href="#" onclick="slowScroll('#contacts')" >Contact</a>
      
    </div>
  </header>
  <div id="top">
    <h1>Film</h1>
    <h3>everything you need to relax!!</h3>
  </div>
<!--*****************************************************************************************  2блок       -->
 <div id="main">
    <div class="intro">
      <h2 id="ss">We will help!</h2>
	  
      <span>Help you choose movies, series or cartoons and recommend the best</span>
    </div>
    <div class="text">
      <span>Our site will help you determine which movie to choose or serriials, cartoons. And also show the latest released films. And you can watch the latest news about films, episodes, and actors</span>
    </div>
  </div>
 
  <!-- *****************************************************************************************   3блок     -->
  <div id="overview">
    <h2>Top today</h2>
    <h4>Recommend for viewing</h4>
	<div class="photo">
    <div class="img">
      <a href="https://kinogo.zone/comedy/5091-otpusk.html"><img src="https://kinogo.zone/uploads/posts/2021-02/thumbs/1612369287_otpusk-kinogo_zone.jpg" alt="">
      <span>Отпуск</span></a>
    </div>
	\</div>
	<div class="photo">
	  <div class="img">
      <a href="https://kinogo.zone/drama/4333-2020-4333-365-dney-film.html"><img src="https://www.kino-teatr.ru/movie/posters/big/9/138169.jpg" alt="">
      <span>365 day</span></a>
    </div>
	</div>
	<div class="photo">
	  <div class="img">
      <a href="https://www.kinopoisk.ru/film/1236063/"><img src="https://www.film.ru/sites/default/files/styles/thumb_260x400/public/movies/posters/44053048-1215231.jpg" alt="">
      <span>Довод </span></a>
    </div>
	</div>
	<div class="photo">
	  <div class="img">
      <a href="https://www.kinopoisk.ru/film/1190387/"><img src="https://www.film.ru/sites/default/files/styles/thumb_260x400/public/movies/posters/41803700-1210909.jpg" alt="">
      <span>Тайлер Рейк</span></a>
    </div>
	</div>

	
	
   
  </div>
<!-- *****************************************************************************************    4блок    -->
  <div id="contacts">
    <center><h5>Обратная связь</h5></center>
    <form id="form_input">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name">
	  <br>
	  
	  <h2>Welcome to our site <span id="name2"> </span>!<h2>
	  
	  <br>
      <label for="email">Ваша почта <span>*</span></label><br>
			<input type="email" placeholder="Введите email" name="email" id="email"><br>
			<label for="message">Сообщение <span>*</span></label><br>
			<textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
			<div id="mess_send" class="btn">Отправить</div>
    </form>
  </div>
  
  <!-- *****************************************************************************************   5блок     -->
   <div id="overview">
   <div id="faq">
  <h2>News</h2>
 
    <div class="img">
      <img src="https://www.film.ru/sites/default/files/styles/epsa_400x450/public/filefield_paths/40157723-1176341.jpg" alt="">
      <span class = "n">«Тихое место 2» выйдет на три месяца раньше запланированного</span>
    
	</div>
	  <div class="img">
      <img src="https://www.film.ru/sites/default/files/styles/epsa_400x450/public/filefield_paths/netflix-streamfest-header.jpg" alt="">
      <span class = "n2">В мобильной версии Netflix появился аналог TikTok</span>
    </div>
	  <div class="img">
      <img src="https://www.film.ru/sites/default/files/styles/epsa_400x450/public/filefield_paths/1563027536_0_0_817_460_1920x0_80_0_0_f9edc8b444d1fcca986949043a3b703f.jpg" alt="">
      <span class = "n3">Глава WarnerMedia намекнул на продолжение «Гарри Поттера» </span>
    </div>
  </div>
  </div>
  
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>