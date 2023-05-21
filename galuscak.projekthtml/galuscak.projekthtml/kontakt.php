<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <link href="style1.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/a043b200e7.js"
      crossorigin="anonymous"
    ></script>
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
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Zaregistrujte sa na prehliadku</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Meno</th>
        <th>EMAIL</th>
        <th>Telefón</th>
        <th>Datum prihlásenia</th>
        <th>prihláste sa ku nám na prehliadku</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from crud100";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[join_date]</td>
        <td>
                  <a class='btn btn-success' href='edit.php?id=$row[id]'>Editovať</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Zmazať</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>    







    <section class="mapagoogle">
      <iframe
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7504.310523076372!2d18.09208823752631!3d48.31872741316334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3f20f2d22199%3A0x6adad051aa233318!2sNitriansky%20hrad!5e0!3m2!1ssk!2ssk!4v1669722767271!5m2!1ssk!2ssk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </section>


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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

