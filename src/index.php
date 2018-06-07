<?php


include "inc/init.inc.php";
if(isset($_POST['mailent'])){

if(!filter_var($_POST['mailent'],FILTER_VALIDATE_EMAIL))
{ echo "<script>$('#error_message-ent').html('Votre mail est invalide');</script>";
}else {

    $requeteInsertion = $pdo->prepare('INSERT INTO entmail (mailent) VALUES (:mailent)');
    $requeteInsertion->bindValue('mailent', $_POST['mailent'], PDO::PARAM_STR);
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
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
  <meta name="author" content="Horizon">
  <meta name="copyright" content="Horizon">
  <link rel="icon" type="image/png" href="img/logo_bananart_blanc.png" />
</head>

<body onload="loader()">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W39H2H7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="loader" class="dots-loader"></div>
<section id="section-first">
  <header>
    <div class="logo-bananart"><img src="img/logo_bananart_blanc.png" alt="logo"></div>
    <div class="titre"><h1><span class="span-titre">Banan'Art,</span></br> des matériaux de qualité<br/>pour créer à moindre coût ! </h1></div>
  </header>
  <div id="cont-intro-text">
    <p>Banan’art récupère les rebuts d’entreprises et les revalorise pour en faire des matériaux utilisables par les créatifs. Amateurs comme professionnels, vous y trouverez votre bonheur !</p>
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
      <h2>Cherchez l’inspiration, on s’occupe du reste</h2>
      <div class="div-description">
        <p>Artistes et artisans, les prix ne devrait pas freiner votre créativité!<br/> Notre plateforme propose tous types de matériaux revalorisés, à moindre coût, pour vous permettre de créer sans vous ruiner. En bonus ? Livraison rapide !<br/><br/><br/>
        Tenez-vous au courant en vous inscrivant à la Newsletter !</p>
      </div>
      <form method="post" action="" class="formulaire">
        <input type="text" class="input-text" id="nameInput-art" placeholder="nom" name="name">
        <input type="text" class="input-text" id="mailInput-art" placeholder="Adresse email" name="mail"><br>
        <span id="error_message" class="text-danger"></span>
        <span id="success_message" class="text-success"></span>

        <input id="submit" class="submit" type="button" name="envoyer" value="ENVOYER">

      </form>

      <?php include 'inc/rs.inc.php'; ?>
      <div>
        <p class="little-text">Banan'Art est seule destinataire des informations saisies, qui ne seront pas commercialisées à des tiers. Conformément au RGPD, vous disposez d’un droit d’accès, de modification, de rectification et de suppression de ces données. Pour l’exercer, vous pouvez envoyer un e-mail à l’adresse suivante : bananart.entreprise@gmail.com</p></div>
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
      <h2>Réduisez vos coûts</h2>
      <div class="div-description">
        <p>Votre entreprise génère des rebuts ? Banan’art les récupère ! Plus de prestataires à payer, et des artistes comblés.<br/><br/><br/>
        Tenez-vous au courant en vous inscrivant à la Newsletter !</p>
      </div>
      <form method="post" action="" class="formulaire">

        <input type="text" class="input-text" id="mailInput-ent" placeholder="Adresse email" name="mailent"> <br>
        <span id="error_message-ent" class="text-danger"></span>
        <span id="success_message-ent" class="text-success"></span>

        <input id="submit-ent" class="submit" type="button" name="ent-envoyer" value="ENVOYER">

      </form>

      <?php include 'inc/rs.inc.php'; ?>
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
      var mailent = $('#mailInput-ent').val();
      var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
      if(mailent == '')
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
          data:{mailent:mailent},
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
