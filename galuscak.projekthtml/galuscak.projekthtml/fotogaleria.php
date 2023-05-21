<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="style1.css" rel="stylesheet" />
    <link rel="stylesheet" href="lightbox.css">
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


<div class="containerfoto">
  <div class="galeria">
    <a href="images/fotka8.jpg" data-lightbox="fotky" data-title="foto1">
      <img src="images/fotka8.jpg">
    </a>
    <a href="images/fotka2.jpg" data-lightbox="fotky" data-title="foto2">
      <img src="images/fotka2.jpg">
    </a>
    <a href="images/fotka7.jpg" data-lightbox="fotky" data-title="foto3">
      <img src="images/fotka7.jpg">
    </a>
    <a href="images/fotka4.jpg" data-lightbox="fotky" data-title="foto4">
      <img src="images/fotka4.jpg">
    </a>
    <a href="images/fotka3.jpg" data-lightbox="fotky" data-title="foto5">
      <img src="images/fotka3.jpg">
    </a>
    <a href="images/fotka6.jpg" data-lightbox="fotky" data-title="foto6">
      <img src="images/fotka6.jpg">
    </a>
    <a href="images/fotka5.jpg" data-lightbox="fotky" data-title="foto7">
      <img src="images/fotka5.jpg">
    </a>
    <a href="images/fotka1.jpg" data-lightbox="fotky" data-title="foto8">
      <img src="images/fotka1.jpg">
    </a>
  </div>
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
              target="blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="lightbox-plus-jquery.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>

