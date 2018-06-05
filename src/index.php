<?php


include "inc/init.inc.php";
if(isset($_POST['nameent'])){

if(!filter_var($_POST['mailent'],FILTER_VALIDATE_EMAIL))
{ echo "<script>$('#error_message-ent').html('Votre mail est invalide');</script>";
}else {

    $requeteInsertion = $pdo->prepare('INSERT INTO entmail (nameent, mailent) VALUES (:nameent, :mailent)');
    $requeteInsertion->bindValue('mailent', $_POST['mailent'], PDO::PARAM_STR);
    $requeteInsertion->bindValue('nameent', $_POST['nameent'], PDO::PARAM_STR);
    $requeteInsertion->execute();


  }
}

if(isset($_POST['name'])){

if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
{
}else {

    $requeteInsertion = $pdo->prepare('INSERT INTO mail (name, mail) VALUES (:name, :mail)');
    $requeteInsertion->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);
    $requeteInsertion->bindValue('name', $_POST['name'], PDO::PARAM_STR);
    $requeteInsertion->execute();



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
  <link rel="icon" type="image/png" href="img/logo_bananart_blanc.png" />
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W39H2H7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
        <input type="text" class="input-text" id="nameInput-art" placeholder="nom" name="name">
        <input type="text" class="input-text" id="mailInput-art" placeholder="Adresse email" name="mail"><br>
        <span id="error_message" class="text-danger"></span>
        <span id="success_message" class="text-success"></span>

        <input id="submit" class="submit" type="button" name="envoyer" value="ENVOYER">

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
        <input type="text" class="input-text" id="nameInput-ent" placeholder="nom" name="nameent">
        <input type="text" class="input-text" id="mailInput-ent" placeholder="Adresse email" name="mailent"> <br>
        <span id="error_message-ent" class="text-danger"></span>
        <span id="success_message-ent" class="text-success"></span>

        <input id="submit-ent" class="submit" type="button" name="ent-envoyer" value="ENVOYER">

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script>$(document).ready(function(){
    $('#submit').click(function(){
      var name = $('#nameInput-art').val();
      var mail = $('#mailInput-art').val();
      var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
      if(name == '' || mail == '')
      {
        $('#error_message').html("Vous devez remplir l'ensemble des champs");
      }
      if(!myRegex.test(mail)){
        $('#error_message').html("Votre mail est invalide");
      }
      else
      {
        $('#error_message').html('');
        $.ajax({
          url:"index.php",
          method:"POST",
          data:{name:name, mail:mail},
          success:function(data){
            $("form").trigger("reset");
            setTimeout(function(){
              $('#success_message').html("Merci, votre mail a bien été enregistré");;
            }, 0);
          }
        });
      }

    });
  });

</script>
<script> $(document).ready(function(){
    $('#submit-ent').click(function(){
      var nameent = $('#nameInput-ent').val();
      var mailent = $('#mailInput-ent').val();
      var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
      if(nameent == '' || mailent == '')
      {
        $('#error_message-ent').html("Vous devez remplir l'ensemble des champs");
      }
      if(!myRegex.test(mailent)){
        $('#error_message-ent').html("Votre mail est invalide");
      }
      else
      {
        $('#error_message-ent').html('');
        $.ajax({
          url:"index.php",
          method:"POST",
          data:{nameent:nameent, mailent:mailent},
          success:function(data){
            $("form").trigger("reset");
            setTimeout(function(){
              $('#success_message-ent').html("Merci, votre mail a bien été enregistré");
            }, 0);
          }
        });
      }
    });
  });</script>


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W39H2H7');</script>
<!-- End Google Tag Manager -->

</body>

</html>
