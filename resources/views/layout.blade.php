<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Ostapenko A.V.</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Main Stylesheet File -->
  <link href="css/general-style.css" rel="stylesheet">
</head>

<body class="bg-white">
  <nav class="navbar fixed-top navbar-white bg-dark navbar-expand-lg ">
    <a class="navbar-brand" href="aboutme">Ostapenko A.V.</a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutme">Обо мне</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="summary">Резюме</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="review">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post">Блог</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class=" text-white">
    @yield('main_content')
  </div>
  <div class="triangle-wrapper js-page-to-top">
    <div class="triangle-up"></div>
  </div>
  <div class="portfolio">
    <div class="container">
      <p>
        Портфолио Остапенко Андрей Владимирович
      </p>
      <div class="credits">
        Mail:<a href='mailto:AnOst3@gmail.com'>AnOst3@gmail.com</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>