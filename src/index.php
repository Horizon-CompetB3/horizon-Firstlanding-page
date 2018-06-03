<?php


include "inc/init.inc.php";
if(isset($_POST['ent-envoyer'])){

if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
{
  echo '<script>var element = document.getElementById("modale-ent");
  element.classList.add("modale-ent-visible");
</script>';
}else {

    $requeteInsertion = $pdo->prepare('INSERT INTO entmail (name, mail) VALUES (:name, :mail)');
    $requeteInsertion->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);
    $requeteInsertion->bindValue('name', $_POST['name'], PDO::PARAM_STR);
    $requeteInsertion->execute();
    echo '<div class="mod-confirme"><h3>Votre Email a bien été enregistré</h3></div>';


  }
}

if(isset($_POST['envoyer'])){

if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
{
  echo '<script>function modal(){var element = document.getElementById("modale-ent");
  element.classList.add("modale-ent-visible")};
</script>';
}else {

    $requeteInsertion = $pdo->prepare('INSERT INTO mail (name, mail) VALUES (:name, :mail)');
    $requeteInsertion->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);
    $requeteInsertion->bindValue('name', $_POST['name'], PDO::PARAM_STR);
    $requeteInsertion->execute();
    echo '<div class="mod-confirme"> <h3>Votre Email a bien été enregistré</h3></div>';


  }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Banan'Art</title>
  <meta name="description" content="Banna'Art permet aux entreprises de recycler leurs rebuts tout en permettant aux artistes de se fournir en matières premières">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="author" content="Horizon">
  <meta name="copyright" content="Horizon">
</head>

<body>
<section id="section-first">
  <header>
    <div class="logo-bananart"><img src="img/logo_bananart_blanc.png" alt="logo"></div>
      <div class="titre"><h1><span>Banan'Art</span>, soutenir l'art <br/>sans gaspillage</h1></div>
  </header>
  <div id="cont-intro-text">
    <p>Banna'Art permet aux entreprises de recycler leurs rebuts tout en permettant aux artistes de se fournir en matières premières à moindre coût.</p>
  </div>
  <div id="cont-btn">
    <button id="btn-artiste" class="btn-first" onclick="scrollArt()">Artiste</button>
    <button id="btn-entreprise" class="btn-first" onclick="scrollEnt()">Entreprise</button>
  </div>
</section>
<section id="artiste" class="artiste">

  <div class="div-photo">
    <img src="img/artiste.jpg">
  </div>
  <div class="div-content">
    <button class="close" onclick="closeArtEnt()">X</button>
    <div class="div-text">
      <h2>Cherchez l’inspiration, on cherche les matériaux</h2>
      <div class="div-description">
        <p>Artiste, vous fournir en matières premières vous coûtent
        cher et vous prend du temps ?<br/>
        En récupérant des matériaux auprès des entreprises, Banan'Art  vous fournit en matières premières de toutes sortes, rapidement et à moindre coût.<br/><br/><br/>
        Tenez-vous au courant en vous inscrivant à la Newsletter !</p>
      </div>
      <form method="post" action="" class="formulaire">
        <input type="text" class="input-text" id="nameInput" placeholder="nom" name="name">
        <input type="text" class="input-text" id="mailInput" placeholder="Adresse email" name="mail"><br>

        <input class="submit" type="submit" name="envoyer" value="ENVOYER">

      </form>

      <div class="reseaux">
        <a href=""><img src="img/rs/twitter.png" alt="twitter" class="icon-reseaux"></a>
        <a href="https://www.facebook.com/bananartetco/"><img src="img/rs/facebook.png" alt="facebook" class="icon-reseaux"></a>
        <a href=""><img src="img/rs/instagram.png" alt="instagram" class="icon-reseaux"></a>
        <a href=""><img src="img/rs/linkedin.png" alt="linkedin" class="icon-reseaux"></a>

      </div>
      <div>
        <p class="little-text">Banna'Art est seule destinataire des informations saisies, qui ne seront pas commercialisées à des tiers. Conformément au RGPD, vous disposez d’un droit d’accès, de modification, de rectification et de suppression de ces données. Pour l’exercer, vous pouvez envoyer un e-mail à l’adresse suivante : bananart.entreprise@gmail.com</p></div>
    </div>
  </div>

</section>
<section id="entreprise" class="entreprise">

  <div class="div-photo">
    <img src="img/entreprise.png">
  </div>
  <div class="div-content">
    <button class="close" onclick="closeArtEnt()">X</button>
    <div class="div-text">
      <h2>Devenez mécène sans même dépenser </h2>
      <div class="div-description">
        <p>Votre entreprise génère des rebuts ?
        Leurs gestions représentent un coût et une perte de temps ?
        Faites du recyclage ou encore mieux : de l’upcyclage !<br/>
        En cédant vos rebuts vous faciliterez ainsi le travail des artistes tout en vous débarrassant de vos rebuts et surplus.<br/><br/><br/>
        Tenez-vous au courant en vous inscrivant à la Newsletter !</p>
      </div>
      <form method="post" action="" class="formulaire">
        <input type="text" class="input-text" id="nameInput" placeholder="nom" name="name">
        <input type="text" class="input-text" id="mailInput" placeholder="Adresse email" name="mail"> <br>

        <input class="submit" type="submit" name="ent-envoyer" value="ENVOYER">

      </form>

      <div class="reseaux">
        <a href=""><img src="img/rs/twitter.png" alt="twitter" class="icon-reseaux"></a>
        <a href="https://www.facebook.com/bananartetco/"><img src="img/rs/facebook.png" alt="facebook" class="icon-reseaux"></a>
        <a href=""><img src="img/rs/instagram.png" alt="instagram" class="icon-reseaux"></a>
        <a href=""><img src="img/rs/linkedin.png" alt="linkedin" class="icon-reseaux"></a>

      </div>
      <div>
        <p class="little-text">Banan'Art est seule destinataire des informations saisies, qui ne seront pas commercialisées à des tiers. Conformément au RGPD, vous disposez d’un droit d’accès, de modification, de rectification et de suppression de ces données. Pour l’exercer, vous pouvez envoyer un e-mail à l’adresse suivante : bananart.entreprise@gmail.com</p></div>
    </div>
  </div>

</section>
<div id="modale-ent" class="modale-ent">
  <h3>Adresse incorrecte Mail incorrect</h3>
</div>
<script src="js/main.js"></script>

</body>

</html>
