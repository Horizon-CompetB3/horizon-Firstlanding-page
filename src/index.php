<?php


include "inc/init.inc.php";
if (isset($_POST['mailent'])) {

  if (!filter_var($_POST['mailent'], FILTER_VALIDATE_EMAIL)) {

  } else {

    $requeteInsertion = $pdo->prepare('INSERT INTO entreprise (mailent) VALUES (:mailent)');
    $requeteInsertion->bindValue('mailent', $_POST['mailent'], PDO::PARAM_STR);
    $requeteInsertion->execute();

  }
}
?>
<!doctype html>
<html xmlns:og="http://ogp.me/ns#" class="no-js" lang="">

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
  <meta property="og:title" content="Lugh">
  <meta property="og:description" content="Lugh permet aux entreprises de promouvoir la culture, avec des projets personnalisés, à moindre frais">
  <meta property="og:url" content="http://lugh-france.fr/">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">

</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVZ239R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="svg-background" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 909 1204" style="enable-background:new 0 0 909 1204;" xml:space="preserve">
<style type="text/css">
  .st0{fill:url(#Polygon_1_);}
  .st1{fill:#FFFFFF;}
  .st2{fill:#EFF2F7;}
  .st3{fill:#5B61D3;}
  .st4{fill:#9092EC;}
  .st5{opacity:0.5;fill:url(#Shape_36_);enable-background:new    ;}
  .st6{fill:#5BB59B;}
  .st7{fill:#F4F4F4;}
  .st8{fill:#524F63;}
  .st9{fill:#63A590;}
  .st10{opacity:0.5;fill:url(#Shape_37_);enable-background:new    ;}
  .st11{fill:#EFEFEF;}
  .st12{opacity:0.5;fill:url(#Shape_38_);enable-background:new    ;}
  .st13{fill:#BEC1C6;}
  .st14{fill:#634A05;}
  .st15{fill:#F9F4B9;}
  .st16{fill:#494949;}
  .st17{fill:#E0E4ED;}
  .st18{fill:#BCBACE;}
  .st19{fill:url(#Shape_39_);}
  .st20{opacity:0.5;fill:url(#ombre_pied_bureau_1_);enable-background:new    ;}
  .st21{opacity:0.5;fill:url(#ombre_bureau_1_);enable-background:new    ;}
</style>
  <title>illustration de singe-entreprise3</title>
  <desc>Created with Sketch.</desc>
  <g id="desktop">
    <g id="entreprise---desktop" transform="translate(-1011.000000, 0.000000)">
      <g id="HOME" transform="translate(120.000000, -169.000000)">
        <g id="illustration-de-singe-entreprise3" transform="translate(891.000000, 0.000000)">

          <linearGradient id="Polygon_1_" gradientUnits="userSpaceOnUse" x1="157.3183" y1="1190.0209" x2="157.3183" y2="1190.942" gradientTransform="matrix(854.2562 0 0 -1372.9999 -133905.2344 1635271.5)">
            <stop  offset="0" style="stop-color:#FFC280"/>
            <stop  offset="1" style="stop-color:#FF4C49"/>
          </linearGradient>
          <path id="Polygon" class="st0" d="M647.4,0C852-32.1,861.8-25.5,909,11.9c10.9,8.6,0,156.1,0,157.1
					c-0.8,64.2,3.7,1070.2-0.7,1073.3c-211,150.5-385.7,171.1-524.2,61.6C148,1117.2-6.8,741.1,80.8,447.9
					C139.1,252.5,442.7,32.1,647.4,0z"/>
          <g id="fenêtre" transform="translate(216.000000, 373.000000)">
            <rect id="Rectangle-path" x="0.5" y="0" class="st1" width="923.4" height="404.8"/>
            <polygon id="Shape" class="st2" points="410.2,220.9 410.2,291.8 349.9,291.8 349.9,311.9 300.6,311.9 300.6,204 241.5,204
						241.5,338.1 184.7,338.1 184.7,221.2 140.2,221.2 140.2,317.6 129.1,317.6 129.1,297.5 71.3,297.5 71.3,337.6 49.7,337.6
						49.7,198 0.4,198 0.4,311.9 0.3,405 459.2,405 459.2,220.9 					"/>
          </g>
          <g id="fenêtre-2" transform="translate(674.000000, 570.000000)">
            <polygon id="Shape_1_" class="st2" points="459.9,23.6 410.9,23.6 410.9,94.4 350.5,94.4 350.5,114.4 301.2,114.4 301.2,6.6
						241.9,6.6 241.9,140.6 185.1,140.6 185.1,23.8 140.6,23.8 140.6,120.1 129.4,120.1 129.4,100.1 71.6,100.1 71.6,140.1
						49.9,140.1 49.9,0.6 0.6,0.6 0.6,114.4 0.5,114.4 0.5,207.5 459.9,207.5 					"/>
          </g>
          <g id="tableau" transform="translate(0.000000, 565.000000)">
            <rect id="Rectangle-path_1_" y="0" class="st1" width="174" height="217"/>
            <path id="Shape_2_" class="st3" d="M30,45.8c-1.9,11.2,1.5,3.3-2.9,26.1c-2.4,12.4,10.5,5.2,13.2,13.7
						c2.3,7.4-4.1,11.8-1.9,17.8c2.7,7.3,16,11.1,25.9,9.1c23.3-4.8,32.4-42.6,27.3-46.1c-4.1-2.8-6.3-7.2-11.5-10.7
						c-6.7-4.5,2.2-13.2-8.4-24.9c-6.4-7.1-22.6-5-24.5-0.1C44.9,36.1,31.5,37.4,30,45.8z"/>
            <path id="Shape_3_" class="st4" d="M46.5,67.8c-3,17.4,2.4,5.2-4.6,40.5c-3.8,19.2,16.3,8,20.4,21.2c3.6,11.5-6.4,18.4-3,27.7
						c4.2,11.3,24.8,17.3,40.3,14.1c36.2-7.5,50.3-66.1,42.4-71.7c-6.4-4.4-9.8-11.2-17.9-16.6c-10.4-6.9,3.5-20.5-13.1-38.7
						c-10-11-35.1-7.8-38.1-0.1C69.7,52.7,48.8,54.6,46.5,67.8z"/>
            <g id="cadre" transform="translate(1.000000, 0.000000)">
              <polygon id="Shape_4_" class="st4" points="0,216.9 0,0.1 173.4,0.1 167.5,8 8,8 8,209 						"/>
              <polygon id="Shape_5_" class="st3" points="173.4,0 173.4,216.8 0,216.8 7.9,208.9 165.4,208.9 165.4,7.9 						"/>
            </g>
          </g>
          <g id="plante" transform="translate(685.000000, 782.000000)">

            <linearGradient id="Shape_36_" gradientUnits="userSpaceOnUse" x1="-528.2936" y1="422.1615" x2="-529.9282" y2="414.3488" gradientTransform="matrix(116.0753 0 0 -16.2162 61445.1602 7109.3662)">
              <stop  offset="0" style="stop-color:#4A50C2;stop-opacity:2.000000e-02"/>
              <stop  offset="1" style="stop-color:#444BCC;stop-opacity:0.64"/>
            </linearGradient>
            <path id="Shape_6_" class="st5" d="M116.5,306.8c0,4.5-26,8.1-58,8.1s-58-3.6-58-8.1c0-4.5,26-8.1,58-8.1
						S116.5,302.4,116.5,306.8z"/>
            <path id="Shape_7_" class="st6" d="M9.7,22.5c0,0-20.4,90.3,12,151.7L54,235.5C54,235.5,62.5,82.1,9.7,22.5z"/>
            <path id="Shape_8_" class="st7" d="M11.1,258.3c2,11.1,4.5,22.2,10,32.1s14.3,18.3,25.3,20.9c5,1.2,10.1,1.2,15.2,1
						c5.6-0.2,11.4-0.5,16.3-3.3c6.3-3.7,9.6-10.8,12.1-17.7c4.3-11.6,7.6-23.5,9.8-35.7c1.3-7,2.1-14.6-1.2-20.9
						c-4.4-8.6-14.8-12-24.3-13.6c-15.8-2.6-37.6-3.9-52.8,2.5C8.2,229.3,8.9,246.2,11.1,258.3z"/>
            <path id="Shape_9_" class="st8" d="M47,235.8c12.6,0.7,26.2-1.2,34.1-5.4c1.6-0.9,3-1.9,2.2-3c-0.9-1.2-4.2-1.7-7.1-2
						c-15.1-1.6-31.8-2.3-46.6,0.2C7.9,229.3,35.5,235.2,47,235.8z"/>
            <path id="Shape_10_" class="st9" d="M40.4,0.3c0,0-10.2,172.1,13.6,235.2C54,235.5,69.4,82.1,40.4,0.3z"/>
            <path id="Shape_11_" class="st6" d="M51,234.3h5.5c8.1-34.1,32.5-144.5,19.6-196c0,0-40.9,144.9-30.7,177.2
						C48,224,49.8,230,51,234.3z"/>
          </g>
          <g id="plante-2" transform="translate(23.000000, 697.000000)">

            <linearGradient id="Shape_37_" gradientUnits="userSpaceOnUse" x1="109.8326" y1="-312.9851" x2="101.0885" y2="-612.4751" gradientTransform="matrix(173.2498 0 0 -24.153 -23057.9785 12496.6416)">
              <stop  offset="0" style="stop-color:#4A50C2;stop-opacity:2.000000e-02"/>
              <stop  offset="1" style="stop-color:#444BCC;stop-opacity:0.64"/>
            </linearGradient>
            <path id="Shape_12_" class="st10" d="M173.7,399.8c0,6.7-38.8,12.1-86.6,12.1s-86.6-5.4-86.6-12.1s38.8-12.1,86.6-12.1
						S173.7,393.1,173.7,399.8z"/>
            <path id="Shape_13_" class="st6" d="M23.7,29.6c0,0-26.9,118.5,15.7,199L82,309C82,309,93.2,107.9,23.7,29.6z"/>
            <path id="Shape_14_" class="st11" d="M25.5,338.9c2.6,14.5,5.9,29.2,13.1,42.1c7.2,12.9,18.8,23.9,33.2,27.4
						c6.5,1.6,13.3,1.5,20,1.4c7.4-0.2,15-0.7,21.4-4.4c8.3-4.9,12.6-14.2,16-23.2c5.7-15.2,10-30.8,12.9-46.8
						c1.7-9.2,2.7-19.2-1.6-27.5c-5.8-11.2-19.5-15.7-32-17.8c-20.8-3.4-49.5-5.1-69.4,3.3C21.7,300.9,22.7,323.1,25.5,338.9z"/>
            <path id="Shape_15_" class="st8" d="M72.7,309.4c16.5,1,34.4-1.6,44.8-7.2c2.1-1.1,3.9-2.6,2.9-3.9c-1.2-1.6-5.6-2.3-9.4-2.7
						c-19.8-2-41.8-3-61.3,0.3C21.4,300.8,57.6,308.5,72.7,309.4z"/>
            <path id="Shape_16_" class="st9" d="M64,0.5C64,0.5,50.6,226.3,82,309C82,309,102.1,107.9,64,0.5z"/>
            <path id="Shape_17_" class="st6" d="M78,307.4h7.3c10.7-44.7,42.7-189.5,25.8-257c0,0-53.8,190-40.3,232.5
						C74.1,294,76.4,301.8,78,307.4z"/>
          </g>
          <g id="homme" transform="translate(191.000000, 631.000000)">
            <g id="haut_bras" transform="translate(0.000000, 34.635135)">

              <linearGradient id="Shape_38_" gradientUnits="userSpaceOnUse" x1="-54.2627" y1="-164.2792" x2="-69.8181" y2="-696.7192" gradientTransform="matrix(307.9153 0 0 -42.935 10750.915 23119.6406)">
                <stop  offset="0" style="stop-color:#4A50C2;stop-opacity:2.000000e-02"/>
                <stop  offset="1" style="stop-color:#444BCC;stop-opacity:0.64"/>
              </linearGradient>
              <path id="Shape_18_" class="st12" d="M432.7,409.3c0,11.9-68.9,21.5-154,21.5s-154-9.6-154-21.5c0-11.8,68.9-21.5,154-21.5
							S432.7,397.5,432.7,409.3z"/>
              <path id="Shape_19_" class="st13" d="M213.4,67.1l52.9,8.6L243.8,39l12.1-13.4L299,80.2c2.9,3,3.7,7.5,2.1,11.3
							c-1.6,3.9-5.3,6.4-9.5,6.6l-64.2,2L213.4,67.1z"/>
              <path id="Shape_20_" class="st13" d="M213.4,67.1l-61.2-2.6c-6.3-0.3-12.4,2.4-16.5,7.2l17.9,139.7l83.6,1.7l-7.6-128.1
							C229.6,85.1,215.6,67.2,213.4,67.1z"/>
              <path id="Shape_21_" class="st1" d="M246.6,31c-2.4,1.9-5.5,3.7-5.9,6.7c-0.4,2.6,1.5,5.2,4,6.2s5.3,0.5,7.7-0.6
							c3.9-1.7,7.1-5.3,7.8-9.5c0.5-3.1-0.9-9-4.4-10.1C251.8,22.5,249.6,28.7,246.6,31z"/>
              <polygon id="Shape_22_" class="st13" points="143.2,111.9 77.5,133.1 29.8,81.2 41.7,71.4 85.7,107.4 135.7,71.7 144.2,86.6
													"/>
              <path id="Shape_23_" class="st14" d="M232.9,0.3l22.8,28c0,0-2,12-8.9,11.8c-2.3,0.9-21.9-32-21.9-32L232.9,0.3z"/>
              <path id="Shape_24_" class="st14" d="M39.1,71.4l-6.8-8.7c0,0,13.9-19.1,14.1-28.6s-11.4,8.9-11.4,8.9L14.7,10.2
							c-0.9-1.5-2.2-2.9-3.6-3.9C9,4.9,6.9,4.5,9.3,11.6c4.1,11.8,8.9,18.8,8.9,18.8s2.5,2.3-2.5-1.3s-4.1,5-4.1,5
							c-2.5-4.4-7.4-2.3-5.7,2.7c-7.5-5.3-6.4,7.9-2,13.9S22.5,68,22.5,68l8.1,9.7L39.1,71.4z"/>
            </g>
            <g id="tête" transform="translate(24.580786, 0.000000)">
              <path id="Shape_25_" class="st15" d="M195.6,17.3c0,9.4-10.5,23.8-17,17c-5.5-5.8-11.8-15.3-17-17c-9-2.9,7.6-17,17-17
							C188,0.3,195.6,7.9,195.6,17.3z"/>
              <polygon id="cravatte" class="st4" points="157.3,111.7 152.2,119.1 155.7,124.8 153.7,129.1 155.7,184.3 162.9,191.3
							169.3,184.6 162.6,128.9 158.9,124.4 163.5,118.7 						"/>
              <path id="col" class="st1" d="M134.6,99.5c0,0,2.7,5.3,2.5,6.1c-0.2,0.8,12,17.6,12,17.6l8.2-11.5l10.2,11.5L172,101l-7.1-0.6
							l-7.8,8.3l-13.8-9.6L134.6,99.5z"/>

              <rect id="Rectangle-path_2_" x="171.9" y="19.5" transform="matrix(0.1826 -0.9832 0.9832 0.1826 132.0704 217.0077)" class="st8" width="49.3" height="19.1"/>

              <rect id="Rectangle-path_3_" x="170.9" y="20.4" transform="matrix(0.1826 -0.9832 0.9832 0.1826 131.412 215.8304)" class="st8" width="49.3" height="17"/>
              <path id="Shape_26_" class="st14" d="M217.2,46.7l-1.2,0.7c-0.2-4.9-0.6-9.8-1.3-14.7c-0.2,0-0.3-0.1-0.4-0.3
							c-0.9-3.9-4.2-5-7.7-5.4c0,0.3,0,0.5-0.1,0.7c-0.1,0.6-0.4,1.1-0.9,1.4s-1.1,0.4-1.6,0.3c-5.1-1.6-19.5-3.5-20.2-2.4
							c-1.3,2,11.3,6.6,11.3,6.6s1.8,0.7-1.8,0.7c-22.3-3.9-9.8,2.7-0.9,5.7c0.2,0.1,0,0.5-0.2,0.4c-19.7-3-18.7,2.3,0.5,6.1
							c0.3,0.1,0.2,0.5,0,0.5c-19.7-1.9-21.2,1.9-0.2,5.7c2.8,0.5,16,3.5,18.4,4.6c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.1-0.2,0.1-0.3
							l-1-2.2c0-0.1,0-0.2,0-0.3L217.2,46.7z"/>
              <path id="Shape_27_" class="st14" d="M206.5,27.8c-0.1,0.9,0.1,3.5-0.7,3.7c0,1.1-0.7,0.3-0.7,1.4c0.1,0.1,0.1,0.2,0.1,0.2
							c0,6.8,4.6,12.2,10.3,15.5l1.7-1.9l-1.2,0.7c0,0-4.2-17-2.9-31.5c0.2-2-3.9-0.6-4.5-0.1L206.5,27.8"/>
              <path id="cou" class="st14" d="M141.8,60l1.7,44.7c0,5.2,3.8,9.6,8.9,10.4c2.8,0.4,5.7-0.3,8-2c2.3-1.7,3.8-4.3,4.1-7.1
							l2.3-38.6L141.8,60z"/>
              <path id="Shape_28_" class="st14" d="M111.5,22.3c0.6-0.6,1.2-1.1,1.7-1.7c3.5-3.7,17.1-16.2,39.5-16.2
							c11.5,0,19.2,6.6,24.4,14.1c6.4,9.6,9.1,21.1,7.6,32.5c-2,16.3-7.4,43.5-20.3,43.5c-18.5,0-31.4-6-39.1-19.3
							c-7.7-13.3-13.1-13.2-16.6-14.5C105.1,59.4,100.9,32.3,111.5,22.3z"/>
              <path id="Shape_29_" class="st15" d="M116.6,46.4c0,9.4,0.8,15.8-8.6,15.8c-9.4,0-17-7.6-17-17s7.6-17,17-17
							C117.4,28.2,116.6,37,116.6,46.4z"/>
              <path id="Shape_30_" class="st15" d="M174.6,26.7c-8.1-2-16.2,3-18.1,11.1c-2.1-2.2-4.9-3.7-7.9-4.4c-8.5-2-17,3.2-19.1,11.6
							c-2,8.4,1,15.4,9.5,17.4c8.6,2-10.7,16.4-5,23c3.1,3.6,16,8.8,26.2,9c2.8,0.1,5.3,0.5,7.5-0.2c2.4-0.9,4.5-2.5,6.1-4.5
							c2.5-2.6,4-7.1,4.6-8c2-3.3,2.7-7.7,3-8.6c3-12.1,4.6-20.7,4.6-28.5C185.9,36.4,182.7,28.6,174.6,26.7z"/>
              <path id="Shape_31_" class="st1" d="M19.7,107.9L5.6,118.7c-0.3,0.2-0.7,0.3-1.1,0.3s-0.7-0.3-1-0.6l-3-3.9
							c-0.2-0.3-0.3-0.7-0.3-1.1s0.3-0.7,0.6-1l14.1-10.8c0.6-0.5,1.6-0.4,2.1,0.3l3,3.9c0.2,0.3,0.3,0.7,0.3,1.1
							S20,107.7,19.7,107.9z"/>
            </g>
            <polygon id="jambe" class="st16" points="193.8,325.4 219.2,443.9 237.9,442.8 231.4,323.1 					"/>
            <polygon id="jambe-2" class="st16" points="288.4,311.6 260.6,429.4 243.3,427.8 253.4,308.3 					"/>
            <g id="pied" transform="translate(216.815138, 408.694595)">
              <polygon id="Shape_32_" class="st16" points="29,0.5 99,22.4 98.5,29.7 24.8,20.1 						"/>
              <polygon id="Shape_33_" class="st16" points="4.4,20.2 61.9,40.3 61.3,46.3 0.4,36.4 						"/>
            </g>
          </g>
          <g id="bureau" transform="translate(196.000000, 771.000000)">
            <g id="ordinateur" transform="translate(163.779528, 0.000000)">
              <path id="Rectangle-path_4_" class="st4" d="M48.5,0.2h98.4c6.6,0,12,5.4,12,12v64.9c0,6.6-5.4,12-12,12H48.5
							c-6.6,0-12-5.4-12-12V12.2C36.5,5.6,41.9,0.2,48.5,0.2z"/>
              <ellipse id="Oval" class="st1" cx="97.7" cy="44.5" rx="12.2" ry="12.1"/>
              <path id="Shape_34_" class="st4" d="M0.6,89.1l1.9-3.2c1.3-2.3,3.7-3.7,6.3-3.7h28.3l19.4,1.9l5.2,5L0.6,89.1z"/>
            </g>
            <g id="bureau-2" transform="translate(10.078740, 88.756972)">
              <rect id="Rectangle-path_5_" x="0.1" y="0.4" class="st17" width="460" height="17.9"/>
              <rect id="Rectangle-path_6_" x="13.7" y="18.3" class="st18" width="431.7" height="79.9"/>
              <rect id="Rectangle-path_7_" x="6.9" y="18.3" class="st8" width="6.8" height="200.9"/>
              <rect id="Rectangle-path_8_" x="445.3" y="18.3" class="st8" width="6.8" height="204.3"/>

              <linearGradient id="Shape_39_" gradientUnits="userSpaceOnUse" x1="-49.4425" y1="335.1402" x2="-48.4425" y2="335.1402" gradientTransform="matrix(431.6599 0 0 -39.9343 21355.9844 13421.8691)">
                <stop  offset="0" style="stop-color:#676475;stop-opacity:0"/>
                <stop  offset="1" style="stop-color:#524F63;stop-opacity:0.7"/>
              </linearGradient>
              <polygon id="Shape_35_" class="st19" points="13.7,18.3 445.3,58.2 445.3,18.3 						"/>
            </g>

            <linearGradient id="ombre_pied_bureau_1_" gradientUnits="userSpaceOnUse" x1="-67.1599" y1="-407.2617" x2="-69.3284" y2="-481.5617" gradientTransform="matrix(42.948 0 0 -5.9864 1832.345 2998.8091)">
              <stop  offset="0" style="stop-color:#4A50C2;stop-opacity:2.000000e-02"/>
              <stop  offset="1" style="stop-color:#444BCC;stop-opacity:0.64"/>
            </linearGradient>
            <path id="ombre_pied_bureau" class="st20" d="M43.3,308.2c0,1.6-9.6,3-21.5,3s-21.5-1.3-21.5-3c0-1.6,9.6-3,21.5-3
						S43.3,306.6,43.3,308.2z"/>

            <linearGradient id="ombre_bureau_1_" gradientUnits="userSpaceOnUse" x1="-67.3391" y1="-413.5932" x2="-69.5074" y2="-487.9032" gradientTransform="matrix(42.948 0 0 -5.9864 2268.9558 3003.0518)">
              <stop  offset="0" style="stop-color:#4A50C2;stop-opacity:2.000000e-02"/>
              <stop  offset="1" style="stop-color:#444BCC;stop-opacity:0.64"/>
            </linearGradient>
            <path id="ombre_bureau" class="st21" d="M479.9,312.4c0,1.7-9.6,3-21.5,3s-21.5-1.3-21.5-3s9.6-3,21.5-3
						S479.9,310.8,479.9,312.4z"/>
          </g>
        </g>
      </g>
    </g>
  </g>
</svg>


<header>
  <div class="logo-lugh">
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
  <div id="cont-btn">
    <a href="artiste.php">
      <button id="btn-entreprise" class="btn-first">Vous êtes un artiste ?</button>
    </a>
  </div>
  <div class="logo-lugh-mob"><img src="img/SVG/logo%20lugh.svg" alt="logo"></div>
</header>
<section id="section-landing">
  <h1>Choisissez l'art</br> pour être unique !</h1>
  <h3 id="text-1">Avec Lugh, trouvez le projet qui correspond à votre
    entreprise pour véhiculer vos valeurs et dynamiser
    votre image. Déposez un appel à projet en ligne et
    sélectionnez la meilleure proposition pour vos locaux.</h3>
  <div id="back-content">

    <form method="post" action="" class="formulaire" id="form-ent">

      <h3>Soyez les premiers à découvrir notre service en vous inscrivant à la newsletter</h3>
      <div class="input">
        <div class="div-input">
          <input type="text" class="input-text" id="mailInput-ent" placeholder="Email" name="mailent">
        </div>
        <div class="redirection"><a href="artiste.php">Je suis un artiste</a></div>
        <div class="div-submit">
          <input id="submit-ent" class="submit" type="button" name="envoyer" value="ENVOYER">
          <span id="error_message" class="text-danger"></span>
          <span id="success_message" class="text-success"></span>
        </div>
      </div>

    </form>
    <div id="RGPDRS">
      <?php include 'inc/rs.inc.php' ?>
      <p id="rgpd">Lugh est seule destinateur des informations saisies, qui ne seront pas commercialisées à des tiers.
        Conformément au RGPD, vous disposez d’un droit d’accès,
        de modification, de rectification et de suppression de ces données. Pour l’exercer, Vous pouvez envoyer un
        e-mail l’adresse suivante : <b>Lugh.entreprise@gmail.com</b>
        </br><a href="mentions-legales.php">Mentions légales</a></p>
      <img class="fond-degrade" src="img/mobile/Rectangle@2x.png" alt="fond-degradé">
    </div>
  </div>


</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script>
  animationToStar = document.getElementById("animation-to-star"),
    document.getElementById('burger-ctr').addEventListener('click', function () {
      animationToStar.beginElement();
    }, false);
</script>
<script> $(document).ready(function () {
    $('#submit-ent').click(function () {
      var mailent = $('#mailInput-ent').val();
      var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
      if (mailent == '') {
        $('#error_message').html("L'email est vide");
      }
      if (!myRegex.test(mailent)) {
        $('#error_message').html("Votre mail est invalide");
      }
      else {
        $('#error_message').html('');
        $.ajax({
          url: "index.php",
          method: "POST",
          data: {mailent: mailent},
          success: function (data) {
            $("form").trigger("reset");
            setTimeout(function () {
              $('#success_message').html("Merci, votre mail a bien été enregistré");
            }, 0);
          }
        });
      }
    });
  });</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KVZ239R');</script>
<!-- End Google Tag Manager -->

<!-- Hotjar Tracking Code for http://lugh-france.fr/ -->
<script>
  (function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:917466,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
  })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


</body>

</html>
