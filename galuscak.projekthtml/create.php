<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = " INSERT INTO `crud100`(`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>


 <link href="style1.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/a043b200e7.js"
      crossorigin="anonymous"
    ></script>



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"
          ><i class="fa-brands fa-fort-awesome"></i>Nitriansky hrad</a
        >
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.php" class="navbar__links">Domov</a>
          </li>
          <li class="navbar__item">
            <a href="informacie.php" class="navbar__links">Informácie</a>
          </li>
          <li class="navbar__item">
            <a href="fotogaleria.php" class="navbar__links">Fotogaléria</a>
          </li>
          <li class="navbar__btn">
            <a href="kontakt.php" class="button">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Zaregistrujte sa na prehliadku</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">

 <form method="post">

 <br><br><div class="card">

 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Zaregistrujte sa na prehliadku </h1>
 </div><br>

 <label> Vaše meno: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> Telefón: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit" href="xxx.php"> Ok </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="xxx.php"> Zrušiť </a><br>

 </div>
 </form>
 </div>


 <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>O nás</h2>
            <a href="informacie.php">Informácie</a>
          </div>
          <div class="footer__link--items">
            <h2>Kontaktujte nás</h2>
            <a href="kontakt.php">Kontakt</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Sledujte nás</h2>
            <a href="/">Facebook</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo"
              ><i class="fa-brands fa-fort-awesome"></i>Nitriansky hrad</a
            >
          </div>
          <p class="website__rights">© Pavol Galuščák 2023</p>
          <div class="social__icons">
            <a
              class="social__icon--link"
              href="https://www.facebook.com/nitrianskyhrad"
              target="_blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="app.js"></script>




</body>
</html>