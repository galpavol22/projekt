<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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


    <section class="hrada">
      <h1>Informácie</h1>
      <p>Informácie o hrade a aktuálny cenník.</p>

      <div class="row">
        <div class="hrada-col">
          <h3>Informácie o Nitrianskom hrade</h3>
          <p>
            Nitriansky hrad sa nachádza na hradnom vrchu v centre mesta Nitra vo výške 220 m n. m. Vytvára výraznú dominantu mesta pod južnými výbežkami pohoria Tribeč. Pôvodne zaberal celú oblasť hradného kopca aj horného mesta, približne osem a pol hektára. Dominantou hradného areálu je Katedrála svätého Emeráma, biskupský palác a mohutné opevnenie s vystupujúcimi bastiónmi. Dnes na hrade sídli biskupský úrad. Nitiransky hrad je zachovalý a prístupný verejnosti.
            Najväčšiu rozlohu mal v stredoveku Nitriansky hrad. Zistili to archeológovia na základe dlhoročných výskumov. Do úvahy brali pôvodnú rozlohu hradísk v čase ich najväčšieho rozmachu a na základe výsledkov zostavili rebríček najväčších hradov na Slovensku. Spišskému hradu patrí až šieste miesto.
          </p>
        </div>
        <div class="hrada-col">
          <h3>História</h3>
          <p>
            Hradný vrch bol svedkom najstarších slovanských dejín, keď sa tu koncom 8. storočia začalo formovať Nitrianske kniežatstvo. Výhodná poloha lokality, z troch strán chránenej riekou Nitrou, sa stala vhodným miestom na vybudovanie opevneného hradiska. Práve tu s veľkou pravdepodobnosťou stál Pribinov kostol, spojený s najstaršou písomnou zmienkou o meste, no i celom kniežatstve. Po začlenení Nitrianskeho kniežatstva do Veľkej Moravy sa mesto stalo sídelným centrom kniežaťa, ktorý hradisko ďalej rozširoval a opevňoval. Potvrdené písomné správy o hradisku pochádzajú z roku 871 a záznamy v Maurovej kronike z polovice 11. storočia už spomínajú baziliku svätého Emeráma, ktorá dodnes tvorí súčasť hradného komplexu. Ten sa z hradiska vyvinul pravdepodobne v čase formovania Uhorského kráľovstva, kedy bola Nitra dôležitým správnym centrom rovnomenného kniežatstva. Počas pustošivého vpádu Mongolov v roku 1241 stál na hradnom vrchu už opevnený hrad, ktorý odolal nájazdom útočníkov. K výraznému poškodeniu však došlo pri požiari počas obliehania hradu Přemyslom Otakarom II. v roku 1271, po ktorom bola nevyhnutná obnova kostola i opevnenia. Hrad sa stal stredom záujmu panovníkov ako Matúš Čák Trenčiansky, Žigmund Luxemburský alebo Matej Korvín, ktorého vojsko hrad v roku 1465 spustošilo. Opevnenie bolo opäť zosilnené počas tureckých nájazdov na územie južného Slovenska v 16. storočí, kedy bol vybudovaný aj renesančný hradný palác a nová vnútorná hradná brána. Napriek dobrému obrannému systému sa v roku 1663 na krátky čas Turkom podarilo hrad ovládnuť a následne sa pristúpilo k prebudovaniu celého obranného systému. Na začiatku 18. storočia bol prestavaný aj tzv. horný kostol a pribudol biskupský palác.
          </p>
        </div>
        <div class="hrada-col">
          <h3>cenník</h3>
          <p>
            Aktuálny cenník pre rok 2023. V prípade skupinovej návštevy nás prosím kontaktujte.
          </p>
          <article class="informacie1">
            <div class="wrapper1">
              <div class="infor">
                <table class="content-table">
                  <thead>
                    <tr>
                      <th>Rozdelenie</th>
                      <th>Kategória</th>
                      <th>Cena vstupného na deň</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dieťa</td>
                      <td>zadarmo</td>
                    </tr>
                    <tr class="active-row">
                      <td>2</td>
                      <td>Dospelý</td>
                      <td>2€</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dôchodca</td>
                      <td>1€</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
      
          </article>
        </div>
      </div>
    </section>


    <section>
      <div class="accordion">
        <div class="question">Kedy je hrad otvorený?</div>
        <div class="answer">Hrad je otvorený každý deň od 8:00 do 20:00.</div>
      </div>
      <div class="accordion">
        <div class="question">Kde je možné zaparkovať?</div>
        <div class="answer">Zaparkovať je možné na Župnom námestí.</div>
      </div>
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
  </body>
</html>
