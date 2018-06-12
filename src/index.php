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
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LUGH</title>
    <meta name="description" content="Lugh permet aux entreprises de promouvoir la culture, avec des projets personnalisés, à moindre frais">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <meta name="author" content="Horizon">
    <meta name="copyright" content="Horizon">
    <link rel="icon" type="image/png" href="img/logo-lugh.svg"/>
</head>

<body onload="loader()">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W39H2H7"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--<div id="loader" class="dots-loader"></div>-->
<div>
    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080">
        <defs>
            <style>.cls-1 {
                    fill: #b07719;
                }

                .cls-2 {
                    fill: #c6861c;
                }

                .cls-3 {
                    fill: #f4a523;
                }

                .cls-4 {
                    fill: #bc7f1a;
                }

                .cls-5 {
                    fill: #c2831b;
                }</style>
        </defs>
        <title>Plan de travail 4</title>
        <path class="cls-1"
              d="M620.07,154.4c.52-.74,1.4-1.44,1.53-2.25,2.68-16.6,13.16-28.39,25.12-38.71C687.71,78,735.57,57.6,789,49.84c21.62-3.14,43-2.48,64.2,3.69,15.26,4.46,28.21,12.68,40.26,22.75,33.49,28,63.61,59.46,93.68,91,59.6,62.45,117.15,126.8,174.25,191.54q67.28,76.29,133.49,153.5c45.84,53.49,91.24,107.36,136.91,161,2,2.3,2.25,4.27,1.65,7.11-9.8,46.31-24.24,91-47.72,132.3-12.85,22.62-28.39,43.07-49.34,59-10,7.61-21.17,12.94-32.8,17.44-6.41,5.3-14.29,5.31-21.94,6-22.16,2.06-42.8-4.13-63.14-11.83-42-15.93-83-34.38-124.08-52.64s-82-36.77-124.11-52.55c-25.51-9.56-51.49-17.64-78.57-21.54-15.19-2.19-30.35-2.53-45.25,2.18A47.79,47.79,0,0,0,826.6,770.5c-14.57,14.61-31.92,17.57-51.16,11.87-19.81-5.87-36.46-17.23-51.77-30.68a286.88,286.88,0,0,1-63.49-80.46c-9.51-17.65-17-36-20.41-55.8-.56-3.22-.34-6.53-1.16-9.72a79,79,0,0,1,0-10.88c4.36-39.47,14.27-77.92,21.48-116.87,6.79-36.67,13.59-73.34,18.05-110.39,1.87-15.57,3.58-31.16,4.29-46.85.26-5.73,1-11.45.82-17.2.21-8.28.29-16.56,0-24.84-.21-23-3-45.51-12.13-66.82-6.12-14.22-15.64-25.2-30.56-30.81A38.69,38.69,0,0,1,626.57,172C621.75,167.12,618.88,161.5,620.07,154.4Z"/>
        <path class="cls-2"
              d="M641.63,606.24c.33,16.36,5.69,31.47,12.1,46.19,12.28,28.19,29.44,53.19,49.88,76.13,14.29,16,30.29,29.92,48.68,41,10.46,6.27,21.61,11.08,33.86,12.62,14.05,1.77,26.91-1.46,36.9-11.67,12.18-12.46,27.2-16.89,43.82-17.63,22.38-1,43.85,4.13,65.17,10.13,34.69,9.76,67.76,23.82,100.79,37.94,59.47,25.42,117.82,53.47,178.16,76.84,15.79,6.11,31.56,12.5,48.62,14.42a111.67,111.67,0,0,0,38-1.84c2-.45,4-.8,5.94-1.19-7.3,12.09-14.66,24.11-24,34.82-9.09,10.42-18.51,20.42-30.07,28.18a9.62,9.62,0,0,0-1.87,2.5c-13.15,11.82-29.27,15.92-46.24,18.1-19.9,2.56-38.61-2.12-57-8.76-48.32-17.43-94.91-39-141.84-59.72-44.37-19.61-88.53-39.79-134.63-55.13-20.19-6.73-40.7-12.53-62-15.14-14-1.73-27.87-1.72-41.56,2.33a52,52,0,0,0-21.22,12.27c-15.89,15.1-34.17,17.14-54.08,10.33-19.16-6.57-35.32-18-50.27-31.44a287.72,287.72,0,0,1-59.85-75.75c-10.75-19.44-19.4-39.69-22.13-62-1.79-14.68.1-29.14,2.79-43.55,8-42.94,17.39-85.63,25-128.66,5.48-31.09,10.33-62.26,13.44-93.67,2.14-21.64,3.91-43.37,3-65.14-1-23.18-2.94-46.28-12.21-68-6.23-14.58-15.85-25.8-31-31.9-7.89-3.19-14.86-7.73-18.8-15.86-2.16-4.46-2.88-8.71-.07-13.09.35-9.83,5.71-17.49,11.49-24.65,15.07-18.7,34.58-32,55.3-43.55,4.67-2.61,9.06-5.84,14.35-7.25a4,4,0,0,1,1.9,3.06c1.23,10.61,8.36,16.9,17.29,20.22,21.73,8.09,32.47,25,38.77,45.75a186.45,186.45,0,0,1,7.59,54.25,181.14,181.14,0,0,1,0,26.15c-.77,30.94-4.4,61.61-8.89,92.19-7.67,52.3-18.69,104-28.84,155.82-2.6,13.24-5.77,26.42-6.37,40a17,17,0,0,1-.74,3.16C641.92,598.69,640.46,602.56,641.63,606.24Z"/>
        <path class="cls-3"
              d="M538.93,229.85c-.57,14.53,8.25,22.08,20.34,26.93a53.92,53.92,0,0,1,26.43,22.65c8,13.1,11.95,27.63,14.34,42.62,4.41,27.65,4,55.41,1.92,83.23-5.56,75.15-21.76,148.54-36.24,222.22-2.76,14-5.91,28-7,42.32-1.77,23.69,5.09,45.57,15.09,66.59a286.59,286.59,0,0,0,48.93,71.81c16.61,17.95,34.76,33.86,57.09,44.35,12.42,5.83,25.36,9.59,39.3,6.52,7.24-1.6,14.16-4.33,19.4-9.66,16.37-16.64,36.74-20.42,58.8-18.68,37.07,2.92,71.63,15.35,105.9,28.6,40.63,15.7,80.22,33.86,120,51.51,40.94,18.15,81.78,36.56,124,51.59,19.88,7.07,40.15,10.89,61.35,6.89A110.52,110.52,0,0,0,1243,956.43c1.45-.82,2.69-2.24,4.63-1.8-11.33,19.7-25,37.5-42.68,52-31.52,25.78-66.75,31.35-105.06,18.45s-75.37-29.62-112.46-45.89C936.39,956.77,886,933,833.6,913.79c-26-9.5-52.3-17.94-79.9-21.41-14.41-1.81-28.82-2.06-43,2.23a49.76,49.76,0,0,0-21.19,12.18c-15.06,15-32.64,17.12-52.08,10.74-18.08-5.93-33.38-16.46-47.47-28.84-31.9-28-56.17-61.66-73.35-100.48-12.16-27.48-13.42-55.51-7.38-84.78,10.53-51.11,21.22-102.2,29.34-153.77,6.61-42,12-84.06,11.44-126.65-.31-23.07-2.2-46-10.27-67.89-4.76-12.92-11.62-24.4-23.31-32.36A60.57,60.57,0,0,0,504.79,317c-13.45-5.43-20.37-15.3-18.93-27.23.78-6.43,3.54-12.17,7.06-17.57,10.78-16.52,26.19-28.08,42-39.23C536.28,232,537.59,230.89,538.93,229.85Z"/>
        <path class="cls-4" d="M497.09,305V277A90.66,90.66,0,0,1,497.09,305Z"/>
        <path class="cls-5" d="M641.63,606.24c-1.49-3.66-.7-7.48-.84-11.24C642.21,598.66,641.45,602.49,641.63,606.24Z"/>
    </svg>
</div>
<div>
    <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080">
        <defs>
            <style>.cls-4 {
                    fill: #5e4a8a;
                }

                .cls-5 {
                    fill: #7454bb;
                }

                .cls-6 {
                    fill: #8864de;
                }</style>
        </defs>
        <title>Plan de travail 2</title>
        <path class="cls-4"
              d="M1351.09,899.08c0,22.69-12.21,39.89-26.38,55.57-40.33,44.65-89.53,75.27-148.1,89.89-34.3,8.57-67.31,5.4-98.48-12.7-35.66-20.7-69.2-44.53-102.44-68.77-75.41-55-148.75-112.68-221.78-170.76Q634.78,697.54,517.55,600.45c-39.71-32.78-79.2-65.81-118.83-98.69-1.79-1.48-2.82-3-2.73-5.45,2.13-58.14,10.14-115.16,33.43-169.07,10.41-24.08,24.38-45.88,44.76-63a127.34,127.34,0,0,1,16.43-11.35,11,11,0,0,0,4.24-4c12.57-9.1,27.27-11.16,42.1-12.3,25.13-1.92,49.35,4.29,73.61,9.37,54.49,11.38,108.26,25.81,162.34,38.95,40.64,9.86,81.37,19.39,122.88,25,20.35,2.75,40.76,4.5,61.28,3.46a123.13,123.13,0,0,0,36.19-7.05,56.51,56.51,0,0,0,26.94-19.86c9.09-12.39,21-20.36,36.63-21.78,11.43-1,22.55.79,33.52,4.1,27.63,8.33,51.44,23.49,73.56,41.45,25.52,20.71,47.81,44.44,65.35,72.41,11.08,17.68,19.63,36.33,21.86,57.4.21,2,.34,4,.39,6,.73,29.66-.35,59.31-1.25,88.93-1.23,40-1.21,80-.46,119.93.8,42.11,3.92,84.18,12.78,125.55,3.39,15.83,7.67,31.4,14,46.35a116.79,116.79,0,0,0,14.94,25.92c8.2,10.64,18.77,17.83,32.08,20.69,9.5,2,18,5.9,24.41,13.58C1351,890.58,1352.84,894.33,1351.09,899.08Z"/>
        <path class="cls-5"
              d="M1351.09,899.08c-3.48-12.37-12.08-19.66-24.19-22-23.14-4.38-37.45-19.09-47.77-38.86-11.86-22.74-17.76-47.35-22.11-72.38-5.49-31.57-7.83-63.45-9.17-95.44-1.74-41.49-1-83-.6-124.45.31-29.15,1.25-58.29,1.91-87.43.63-27.42-7.42-51.9-22.12-74.5-28.35-43.62-65.18-78.18-111.4-102.29-16.65-8.68-34.29-14.91-53.47-14.71-15.76.17-29.17,6-38.34,19.06-11,15.65-26.52,23.3-44.57,26.93-25.34,5.1-50.77,3.51-76.14.43-51.07-6.19-100.88-18.65-150.72-30.9-53.89-13.23-107.52-27.54-162.06-37.95-14.06-2.68-28.05-5.7-42.52-5.77-16.58-.09-32.51,2.53-47.73,9.18-1.67.73-3.32,1.66-5.24.82,9.22-26.9,22.23-51.63,41.8-72.57l4.09-4.34c12.13-18.08,31-25.19,50.7-30.37,21.63-5.7,43.22-2.86,64.85,1.34,63,12.22,125,28.69,187.36,43.91,40.14,9.81,80.39,19.21,121.36,25,18.47,2.63,37,4.8,55.72,4.56a160.47,160.47,0,0,0,39-5.43c13.5-3.57,24.8-10.53,33.12-21.88,8.79-12,20.12-20.05,35.14-21.46,15.31-1.43,30.14,1.06,44.58,6.63,25.2,9.72,47.6,24,67.92,41.5,23.19,19.94,44.39,41.79,60.81,67.88,11.29,17.95,20.28,36.75,22.76,58.13.29,2.5.37,5,.43,7.48.74,29.16-.35,58.31-1.25,87.43-1.25,40.16-1.28,80.33-.45,120.44,1,46.8,4.35,93.53,15.86,139.2,4.74,18.8,10.94,37,21.92,53.36,9.14,13.58,20.91,23,37.21,26.58,8.52,1.87,16.67,5,22.49,12.07,3.26,4,6,8.19,3.88,13.74-.21,18.52-9.13,33.38-20,47.34C1389,868.72,1371.08,885,1351.09,899.08Z"/>
        <path class="cls-6"
              d="M1424.16,802.09c-3.11-12.56-11.6-20-23.76-22.28-27-5-41.56-23.57-52-46.62-11-24.19-16.37-50-20.21-76.1-4.05-27.55-6.13-55.27-7.31-83.1-1.74-41.32-1-82.64-.65-124,.23-29.31,1.19-58.63,2-87.93.76-28.17-7.49-53.22-22.7-76.33-28.3-43-64.7-77.34-110.42-101.27-17.7-9.26-36.39-15.82-57-14.58-13.28.81-25.47,5.07-33.07,16.08-15.46,22.4-37.93,29.66-63.21,32-30.51,2.85-60.55-1.46-90.46-6.54-49.5-8.4-98.1-20.91-146.77-33.06C747,165.55,695.45,152.65,643.08,143.29c-34.23-6.12-65.63-.16-93.53,21.3-3,2.33-5.87,4.91-8.81,7.37,10.86-30.2,26-57.7,50.88-78.75C613,75.12,638,66.89,665.9,67.69c26.14.75,51.36,7.37,76.69,12.87,55.27,12,109.87,26.79,164.88,39.88,35.3,8.4,70.71,16.25,106.71,21,27.31,3.61,54.69,6,82.06.53,17.6-3.52,33.28-10.41,44.06-25.79,12.45-17.76,30.3-22.52,50.61-19.67,25.46,3.57,47.75,15.1,68.62,29.49,38.11,26.27,69.92,58.5,92.36,99.33,9.18,16.72,14.41,34.56,14.59,53.87.36,37.67-1.18,75.3-1.88,113-.95,50.67-.77,101.31,3.6,151.84,3.11,36,7.94,71.82,20.85,105.94,6,15.7,13.55,30.43,26.27,41.9,6.65,6,14.15,10.41,23,12.34a91.55,91.55,0,0,1,11.5,3.31c14.67,5.31,21.1,17.13,17.72,32.43a73,73,0,0,1-9.75,22.84C1448.57,777.55,1437.06,790.42,1424.16,802.09Z"/>
    </svg>
</div>
<div>
    <svg id="Calque_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 0 331.847 456.148">
        <defs>
            <style>
                .cls-9 {
                    fill: #f5a623;
                }

                .cls-10 {
                    fill: #d9931f;
                }

                .cls-11 {
                    fill: #ae7519;
                }

                .cls-12 {
                    filter: url(#Path_2);
                }
            </style>
            <filter id="Path_2" x="0" y="46.504" width="331.847" height="409.643" filterUnits="userSpaceOnUse">
                <feOffset dy="2" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="5.5" result="blur"/>
                <feFlood flood-opacity="0.502"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
            </filter>
        </defs>
        <g id="Groupe_1" data-name="Groupe 1" transform="translate(-123.128 242.912)">
            <g class="cls-12" transform="matrix(1, 0, 0, 1, 123.13, -242.91)">
                <path id="Path_2-2" data-name="Path 2" class="cls-9"
                      d="M19.554,24.4s75.1-48.8,98.024,0,38.99,119.776,67.1,119.776,21.162,66.108,0,81.553-113.145,61.909-100.37,91.4-76.054,9.1-82.854-29.492S19.554,24.4,19.554,24.4Z"
                      transform="translate(316.5 374.04) rotate(161)"/>
                </g>
            <path id="Path_2_Copy" data-name="Path 2 Copy" class="cls-10"
                  d="M18.642,23.261s71.6-46.522,93.453,0,37.172,114.19,63.975,114.19,20.175,63.025,0,77.75S68.2,274.223,80.38,302.34s-72.507,8.68-78.99-28.116S18.642,23.261,18.642,23.261Z"
                  transform="translate(434.634 91.523) rotate(161)"/>
            <path id="Path_2_Copy_2" data-name="Path 2 Copy 2" class="cls-11"
                  d="M18.642,23.261s71.6-46.522,93.453,0,37.172,114.19,63.975,114.19,20.175,63.025,0,77.75S68.2,274.223,80.38,302.34s-72.507,8.68-78.99-28.116S18.642,23.261,18.642,23.261Z"
                  transform="translate(434.634 55.523) rotate(161)"/>
        </g>
    </svg>


</div>
<div>

    <a id="a-menu" class="a-menu a-menu-artiste" href="artiste.php">Artiste</a>
    <a id="a-menu-2" class="a-menu a-menu-entreprise" href="index.php">Entreprise</a>


    <svg id="Calque_7" class="Calque_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 0 719.261 940.678">
        <defs>
            <style>
                .cls-45 {
                    fill: #f5a623;
                }

                .cls-38 {
                    fill: #d9931f;
                }

                .cls-34 {
                    fill: #ae7519;
                }

                .cls-46 {
                    filter: url(#Path_2);
                }
            </style>
            <filter id="Path_6" x="0" y="115.908" width="719.261" height="824.77" filterUnits="userSpaceOnUse">
                <feOffset dy="2" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="5.5" result="blur"/>
                <feFlood flood-opacity="0.502"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
            </filter>
        </defs>
        <g id="Groupe_6" data-name="Groupe 6" transform="translate(201.352 331.781)">
            <g class="cls-46" transform="matrix(1, 0, 0, 1, -201.35, -331.78)">
                <path id="Path_8-2" data-name="Path 8" class="cls-45"
                      d="M47.814,49.51s183.635-99.02,239.692,0,95.34,243.046,164.087,243.046,51.747,134.146,0,165.486S174.926,583.667,206.163,643.511s-185.97,18.475-202.6-59.844S47.814,49.51,47.814,49.51Z"
                      transform="translate(705.2 765.57) rotate(161)"/>
            </g>
            <path id="Path_8_Copy" data-name="Path 8 Copy" class="cls-38"
                  d="M45.794,47.3s175.876-94.6,229.564,0S366.67,279.5,432.511,279.5s49.56,128.157,0,158.1S167.534,557.611,197.452,614.783,19.34,632.433,3.416,557.611,45.794,47.3,45.794,47.3Z"
                  transform="translate(494.541 355.026) rotate(161)"/>
            <path id="Path_8_Copy_2" data-name="Path 8 Copy 2" class="cls-34"
                  d="M45.794,47.3s175.876-94.6,229.564,0S366.67,279.5,432.511,279.5s49.56,128.157,0,158.1S167.534,557.611,197.452,614.783,19.34,632.433,3.416,557.611,45.794,47.3,45.794,47.3Z"
                  transform="translate(490.541 275.026) rotate(161)"/>
        </g>
    </svg>
</div>
<header>
    <div class="logo-lugh"><img src="img/logo-lugh.svg" alt="logo"></div>
    <div id="cont-btn">
        <a href="artiste.php">
            <button id="btn-artiste" class="btn-first">Artiste</button>
        </a>
    </div>
    <button id="burger-button" onclick="openMenu()">
        <div id="burger-ctr">
            <div class="head"></div>
            <div class="bar top"></div>
            <div class="bar center"></div>
            <div class="bar bottom"></div>
        </div>
    </button>
    <div class="logo-lugh-mob"><img src="img/SVG/logo%20lugh.svg" alt="logo"></div>
</header>
<section id="section-landing">
    <h1>Choisissez l'art</br> pour être unique !</h1>
    <h3 id="text-1">Avec Lugh, trouvez le projet qui correspond à votre entreprise pour véhiculer vos valeurs et
        dynamiser votre image.</h3>
    <p class="text-p-landing">Déposez un appel à projet en ligne et séléctionnez la meilleure proposition pour vos
        locaux</p>
    <div id="back-content">
        <img src="img/Mask.svg">

        <form method="post" action="" class="formulaire" id="form-ent">

            <h3>Inscrivrez vous à notre newsletter hebdomadaire pour rester en contact !</h3>
            <div class="input">
                <div class="div-input">
                    <input type="text" class="input-text" id="mailInput-ent" placeholder="email" name="mailent">
                </div>
                <div class="div-submit">
                    <input id="submit-ent" class="submit" type="button" name="envoyer" value="ENVOYER">
                </div>
            </div>
            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>
            <a href="artiste.php" class="min-link">Je suis un artiste</a>

        </form>
    </div>
    <?php include 'inc/rs.inc.php' ?>
    <p id="rgpd">Lugh est seule destinateur des informations saisies, qui ne seront pas commercialisées à des tiers.
        Conformément au RGPD, vous disposez d’un droit d’accès,
        de modification, de rectification et de suppression de ces données. Pour l’exercer, Vous pouvez envoyer un
        e-mail l’adresse suivante : <b>Lugh.entreprise@gmail.com</b></p>

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
                $('#error_message-ent').html("Vous devez remplir l'ensemble des champs");
            }
            if (!myRegex.test(mailent)) {
                $('#error_message-ent').html("Votre mail est invalide");
            }
            else {
                $('#error_message-ent').html('');
                $.ajax({
                    url: "index.php",
                    method: "POST",
                    data: {mailent: mailent},
                    success: function (data) {
                        $("form").trigger("reset");
                        setTimeout(function () {
                            $('#success_message-ent').html("Merci, votre mail a bien été enregistré");
                        }, 0);
                    }
                });
            }
        });
    });</script>


<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W39H2H7');</script>
<!-- End Google Tag Manager -->


</body>

</html>
