<?php


include "inc/init.inc.php";


if (isset($_POST['mail'])) {

  if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
  } else {

    $requeteInsertion = $pdo->prepare('INSERT INTO artiste (mail) VALUES (:mail)');
    $requeteInsertion->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);
    $requeteInsertion->execute();


  }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LUGH</title>
  <meta name="description"
        content="Lugh permet aux entreprises de promouvoir la culture, avec des projets personnalisés, à moindre frais">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
  <meta name="author" content="Horizon">
  <meta name="copyright" content="Horizon">
  <link rel="icon" type="image/png" href="favicon-lugh.png"/>
</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVZ239R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--<div id="loader" class="dots-loader"></div>-->

<header>
  <div class="logo-lugh-ml">
    <svg width="122px" id="logo" height="46px" viewBox="0 0 122 46" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
      <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
      <title>logo</title>
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
         font-family="Montserrat-Bold, Montserrat" font-size="48" font-weight="bold">
        <g id="artiste---desktop" transform="translate(-43.000000, -49.000000)" fill="#000000">
          <g id="HEADER" transform="translate(40.000000, 39.000000)">
            <g id="logo">
              <text id="Lugh">
                <tspan x="0" y="46">Lugh</tspan>
              </text>
            </g>
          </g>
        </g>
      </g>
    </svg>
  </div>
  <div class="logo-lugh-mob"><a href="index.php"><img src="img/SVG/logo%20lugh.svg" alt="logo"></a></div>
</header>
<section id="section-ml">
  <h1 id="title-ml">Mentions légales</h1>
  <p id="text-ml">Conformément aux dispositions de l’article 6 III-1 de la loi n° 2004-575 du 21 juin 2004 pour
    la confiance dans l’économie numérique, nous vous informons que : </br></br>

    Le présent site est édité par : </br></br>

    LUGH </br>
    IESA Multimedia </br>
    5 rue Saint-Augustin </br>
    75002 PARIS </br>
    Numéro de téléphone : 01 57 19 94 11 </br>
    E-mail : lugh.entreprise@gmail.com </br>
    Numéro de SIRET : 77408201000038743 </br></br>

    L’hébergeur du site assurant le stockage direct et permanent est : 1&1 Internet SARL 7, place de la Gare BP
    70109 57201 Sarreguemines Cedex. </br></br>

    Conformément à la loi Informatique et libertés du 6 janvier 1978 modifiée en 2004, les données
    à caractère personnel sont destinées à l’exploitant du site et leur usage conforme aux finalités
    déclarées à la Cnil. </br></br>

    Les données sont destinées à la société LUGH.
  </p>

</section>

<footer>
  <div id="copyright">
    <ul>
      <li><a href="index.php">© Lugh</a></li>
    </ul>
  </div>
  <div id="link-rs">
    <ul>
      <li><a target="_blank" href="https://twitter.com/Hello_lugh">twitter</a></li>
      <li><a target="_blank" href="https://www.facebook.com/Lugh-art-sur-commande-en-entreprise-567883830278473/">facebook</a></li>
      <li><a target="_blank" href="https://www.instagram.com/lugh_france/">instagram</a></li>
      <li><a target="_blank" href="https://www.linkedin.com/company/lugh-entreprise/">linkedin</a></li>
      <li><a target="_blank" href="https://medium.com/@lugh.entreprise">medium</a></li>
    </ul>
  </div>
</footer>



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KVZ239R');</script>
<!-- End Google Tag Manager -->

</body>

</html>
