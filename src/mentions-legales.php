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
  <p id="text-ml">
    Vous êtes actuellement connecté(e) sur le site Internet officiel de lugh-france.fr.</br></br>

    Ce site web est édité par :</br>
    Lugh</br>
    IESA multimédia</br>
    5 avenue de l’Opéra 75001 Paris</br>
    Numéro de téléphone : 01 57 19 94 11</br>
    E-mail : lugh.entreprise@gmail.com</br>
    Numéro de SIRET : 77408201000038743</br>

    Déclaration CNIL N° 795360 "lugh-france.fr" du 8 mars 2002.</br>
    Déclaration "Service Internet" CSA "lugh-france.fr" du 8 décembre 1998.</br></br>

    1.1.      Propriété intellectuelle</br>
    Tous les contenus présents sur le site de lugh-france.fr sont couverts par le droit d'auteur. Toute reprise est dès lors conditionnée à l'accord de leur auteur.
    La reproduction ou la représentation de tout ou partie de ces sites, sur quelque support que ce soit, est formellement interdite sauf accord préalable écrit du directeur de la publication.

    Vous pouvez toutefois télécharger ou imprimer sur papier des pages et/ou des parties du site de lugh-france.fr , à des fins strictement personnelles, pour autant que vous ne supprimiez pas les mentions relatives au droit d'auteur ou autres mentions concernant les droits de propriété intellectuelle.

    Le téléchargement ou toute autre forme de copie d'informations présentes sur le site de lugh-france.fr ne vous confèrent aucun droit sur ceux-ci. Vous ne pouvez ni reproduire (en tout ou en partie) ni transmettre (électroniquement ou de quelque autre manière) ni modifier, ni utiliser le site de lugh-france.fr à des fins publiques ou commerciales.

    Le nom lugh-france.fr , ainsi que le logo correspondant à ce nom est une marque déposée. Vous ne pouvez reproduire, supprimer, réutiliser ou modifier en aucune manière ces signes distinctifs lorsqu'ils apparaissent sur les pages du site.
    </br></br>
    1.2.      Hébergement du site</br>
    L’hébergeur du site assurant le stockage direct et permanent est : 1&1 Internet SARL 7, place de la Gare BP
    70109 57201 Sarreguemines Cedex.</br></br>
    1.3.       Traitement des données personnelles
    Conformément à la loi "informatique et liberté" du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès, de rectification, de modification et de suppression concernant vos données personnelles collectées sur le site de lugh-france.fr . Vous pouvez exercer ce droit en envoyant un courriel à lugh.entreprise@gmail.com.
    </br>
    La collecte de données personnelles est effectuée en vue de permettre la transmission d’informations complémentaires ou personnalisées sur des programmes ou des offres commerciales de l'IESA multimédia et du réseau Studialis et/ou de permettre l’inscription en ligne à ces programmes.
    </br>
    Les informations collectées sont à l’usage exclusif de lugh-france.fr.

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
