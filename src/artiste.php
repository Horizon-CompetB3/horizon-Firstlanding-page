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
        content="Lugh permet aux artistes de créer et d'exposer sans rien dépenser pour des entreprises">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
  <meta name="author" content="Horizon">
  <meta name="copyright" content="Horizon">
  <link rel="icon" type="image/svg" href="img/logo-lugh.svg"/>
</head>

<body>
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
          fill: #a32b4d;
        }

        .cls-2 {
          fill: #c0315b;
        }

        .cls-3 {
          fill: #db3b6a;
        }</style>
    </defs>
    <title>Plan de travail 1</title>
    <path class="cls-1"
          d="M695.87,150.08c-2.39-17.47,7.08-29.62,18.63-40.56,21.15-20,46.5-33.2,73.31-43.83A267.56,267.56,0,0,1,858.53,48c28.33-3,56-1.16,82,12.16,12,6.14,21.81,15,31.33,24.27,29.46,28.61,56.45,59.49,83.07,90.7,82.74,97,161.65,197,240,297.61Q1379,580.83,1461.56,690.15c1.52,2,3,3.7,2.19,6.88-12.46,46.3-29.31,90.72-55.79,131-14.54,22.14-31.7,41.75-54.67,55.62-3.39,2-6.91,3.86-10.36,5.78-2.1,1.33-2.77,4.11-5.18,5.11-1,0-1.72-.74-2.89-.21-19.14,8.53-38.77,7.6-58.67,3.19-15.19-3.36-29-10.17-43.07-16.42-33.3-14.81-65.89-31.13-98.28-47.82q-41.28-21.26-82.94-41.71c-31.09-15.22-62.58-29.58-95.74-39.9-17.83-5.55-35.93-9.47-54.77-9.16-14,.23-26.58,3.85-37.43,13.35-16,14-34.18,14.36-53.13,7-14.24-5.57-26.61-14.19-38-24.26-28-24.84-49.28-54.72-65.56-88.23a193.58,193.58,0,0,1-16.13-47.52c-3.57-18.21-1.34-36,3-53.8,8.18-33.31,17-66.46,25.15-99.79,10.45-42.81,19.94-85.83,25.85-129.54a507.77,507.77,0,0,0,4.36-51.88c.64-19.78-.62-39.25-5.56-58.42-4.84-18.73-14.43-33.75-33-41.88-5.59-2.45-10.55-6.08-13.83-11.57A8.57,8.57,0,0,1,695.87,150.08Z"/>
    <path class="cls-2"
          d="M695.87,150.08c5.3,9.34,14,14.4,23.22,19.11,11.4,5.8,18.3,15.89,23.13,27.4,6.29,15,8.62,30.77,9.44,46.85,2.42,47.65-5.83,94.17-15.07,140.57-10.69,53.73-25.44,106.49-38.5,159.65-2.58,10.51-5.09,21-6,31.88-1.28,15.34,1.43,30.09,5.95,44.58,9.34,29.92,24.68,56.69,43.71,81.4,16.28,21.15,34.7,40.14,58.18,53.5,8.66,4.92,17.82,8.64,27.87,9.79,13.53,1.54,25.38-2.2,35.42-11.36s22-12.66,35.18-13.21c20.1-.84,39.42,3.17,58.45,9.11,32.42,10.13,63.32,24,93.7,38.94,42.26,20.83,84.19,42.33,126.32,63.44,27.41,13.73,55,27.24,83.52,38.4,23.14,9,47,11.65,71.16,3.53,1.87-.63,3.83-1,5.75-1.47,2.74,1.19,1.35,2.85.49,4.43A184.61,184.61,0,0,1,1318.58,925c-12.87,15.77-27,30.25-44.82,40.63-23.33,13.6-48.18,17.17-74.53,11.72-15.69-3.25-30-10-44.53-16.47-32.89-14.63-65.11-30.67-97.07-47.21-24.11-12.47-48.36-24.66-72.64-36.77-32.47-16.2-65.4-31.48-99.8-43.3-17.67-6.07-35.71-10.68-54.35-12-17.14-1.18-33.36,1.65-47,13.62-15,13.1-32.05,14.2-50.15,7.69-17.57-6.31-32.22-17.19-45.6-29.85-28.77-27.23-50.35-59.48-65.84-95.83-7.35-17.24-12.35-35.17-12.64-54-.15-10.18,1.56-20.31,3.9-30.3,9.12-38.9,19.81-77.41,29.06-116.27,9.35-39.32,17.94-78.8,23.12-118.92,2.16-16.76,3.74-33.58,4.27-50.53a232.82,232.82,0,0,0-4.05-52.67,85.11,85.11,0,0,0-8.85-24.43c-5.2-9.48-12.29-17-22.23-21.62a47.78,47.78,0,0,1-13.93-9.42c-7.33-7.3-8.74-16-5.9-25.31,3.78-12.35,11.51-22,22.34-29.14.82-.54,1.88-.84,2.36-1.84,13.59-8.89,26.67-18.6,41.32-25.77C685.93,154.63,690.92,152.39,695.87,150.08Z"/>
    <path class="cls-3"
          d="M639.7,182.8c-.25,2.06-2,3-3.28,4.23-6.12,5.8-11.7,12-15.85,19.42-8.66,15.44-5,30.25,11.07,37.51,20.18,9.11,30.33,25.25,35.54,45.42,4.88,18.87,5.8,38.17,5.13,57.61C670.06,412.54,655,475.88,639.5,539.16c-7.43,30.37-14.77,60.76-22.9,91-8.09,30-3.94,58.62,8,86.6,15.24,35.61,36.4,67.26,64.48,94,13.31,12.71,27.93,23.69,45.54,29.94,12.16,4.31,24.36,5.33,36.56-.06a39.71,39.71,0,0,0,10.71-6.93c14.86-13.54,32.83-16,51.75-14.25,33.45,3,64.23,15.3,94.67,28.42,46,19.81,90.15,43.29,134.76,65.91C1100,932.48,1136.89,951,1175,967c28.76,12.09,57.72,14.75,87,1.91a112.15,112.15,0,0,0,28.45-18.14,201.75,201.75,0,0,0,46.82-58.62,16.56,16.56,0,0,1,5.62-2.72c-17.08,47.24-38.61,91.92-75.18,127.59-20.44,20-44.56,32.81-73.63,34.74-16.72,1.1-32.82-2.07-48.25-8.25-39.91-16-78.21-35.4-116.53-54.79C976.49,962,924.23,934.08,869.51,911.23c-25.48-10.64-51.4-20-78.86-24.08-16-2.38-31.91-2.81-47.32,3.28a40.25,40.25,0,0,0-13.6,8.24c-15.68,15.21-33.83,16.62-53.39,9.5-17.66-6.43-32.49-17.42-45.9-30.21a289.66,289.66,0,0,1-74-113.89c-9.59-27-9.16-53.72-2.13-81.27,13.32-52.21,27.33-104.26,38.55-157,8.59-40.42,16.09-81,18.43-122.35,1.52-27,1.59-54-6.93-80.17-5.2-16-13.56-29.67-29.24-37.49-3.81-1.91-7.72-3.54-11.18-6.12-11.36-8.47-14.34-19.73-8.37-32.66,4.56-9.88,11.63-17.85,19.67-25C594.34,205.1,616.24,192.66,639.7,182.8Z"/>
  </svg>

</div>
<div>
  <svg id="Calque_3" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><defs><style>.cls-4{fill:#385e7e;}.cls-5{fill:#457498;}</style></defs><title>Plan de travail 3</title><path class="cls-4" d="M833.32,585.37c-1.35,8.47-.37,16.92.46,25.33,4.56,46.38,16.8,91,30.75,135.28,2.52,8,5.22,15.9,8,23.8a4.8,4.8,0,0,1-.46,4.67c-3.44,5.38-6.76,10.83-10.11,16.26-.65,1.06-1.51,2-1.61,3.36a16.79,16.79,0,0,1-3.06,7.31c-19.66,30.44-39.76,60.59-62.55,88.82-10.66,13.19-21.7,26.09-35.07,36.72-4.62,3.67-9.47,6.88-15.21,8.62-7.57,2.3-13.49-.3-16.72-7.55a43.24,43.24,0,0,1-3.31-13.36,181.65,181.65,0,0,1-.69-20.07c.07-6.6,0-13.2,0-19.79,0-16.44,1.06-32.83,1.72-49.23q.66-16.62,1.54-33.23c.64-12.32,1.21-24.65,1.54-37,.43-15.79.61-31.6-.25-47.41a283,283,0,0,0-3.38-32.76c-1.88-10.88-4.71-21.47-10.39-31.11a35.7,35.7,0,0,0-16.21-14.77c-6.82-3.12-11.73-8.28-15.28-14.83a72.14,72.14,0,0,1-8.2-27.85c-3.07-32.82,1.65-64.35,16.83-93.89,5.45-10.61,12.43-20.12,22.76-26.71a28.88,28.88,0,0,1,7.11-3,7.59,7.59,0,0,0,3.05.11c12-3.67,22.91-.74,33.13,5.66,4.68,2.93,9,6.39,13.56,9.55A52.1,52.1,0,0,0,785,485.63c2.28.73,4.62,1.49,6.87-.2a23.27,23.27,0,0,0,10.64-7.94c4.85-6.54,8.07-13.94,11.12-21.41,9.14-22.4,16.65-45.41,25.43-67.95,9-23,15.26-46.74,21.67-70.5,6.19-22.9,12.38-45.81,19.44-68.47,5.15-16.55,10.35-33.09,18.4-48.53,7.45-14.27,16.21-27.62,27.85-38.91A95.3,95.3,0,0,1,986,134.44c25.81-2.3,50.52,2.69,74.26,12.31,15.86,6.43,27.18,18.52,36.13,32.86,10.39,16.63,16.42,35,21.33,53.81,5.33,20.38,8.8,41.14,12.61,61.84,3.18,17.22,7.11,34.23,13.81,50.5,5.34,12.94,12.56,24.83,19.91,36.67,3.86,6.24,7.56,12.58,9.65,19.68,6.54,22.24-.14,44.6-19.6,59.09-10.22,7.61-21.57,12.85-33.44,17.07-19.71,7-40.15,11-60.72,14.45-25.2,4.2-50.59,7-75.93,10.1-30.12,3.71-60.32,7-89.84,14.49a173.29,173.29,0,0,0-30.75,10.82c-14.41,6.69-23.2,17.58-26.27,33A224.6,224.6,0,0,0,833.32,585.37Z"/><path class="cls-5" d="M833.32,585.37c-1.15-3.64-.23-7.28.06-10.91a90.11,90.11,0,0,1,4.09-20.59c3.69-11.37,11-19.53,21.39-25.19,12.63-6.88,26.23-11,40.13-14.28,27.88-6.61,56.31-9.73,84.68-13.22,33.15-4.08,66.39-7.57,99.13-14.4,17.66-3.68,35.09-8.19,51.54-15.85,11-5.13,21.34-11.29,29-20.93,12-15.05,13.81-31.85,7.92-49.78-2.28-6.93-6-13.17-10-19.15-18.13-26.84-27.87-56.75-33.16-88.42-3.79-22.62-7.91-45.2-14.28-67.27-4.5-15.64-10.09-30.84-18.71-44.79-11.5-18.61-27.33-31.39-48.67-37.18-15.71-4.27-31.5-7.84-47.88-7.95-36-.24-64.23,14.72-85.09,43.92-12.05,16.86-20.41,35.55-27.43,54.91-9.18,25.35-15.93,51.41-22.18,77.59A743.73,743.73,0,0,1,833.55,408c-6.89,17.77-12.73,35.94-20.33,53.43-2.58,5.95-5.33,11.85-9.3,17.06a21.29,21.29,0,0,1-6.66,6.12c-1.67.9-3.39,1.76-5.36.86,7.2-8.25,11.64-18.08,15.8-28,10.75-25.68,19.27-52.21,29.47-78.09C855,334.18,868,287.53,881.79,241.12c7.6-25.58,16.06-50.88,27.66-75,8.16-17,17.75-33,31-46.55,20.57-21,45.46-30.29,74.74-27.65a160.91,160.91,0,0,1,65.4,20.45c21.64,12.25,35.81,30.72,44.4,53.82,6.09,16.43,10.07,33.44,14.37,50.36,5.35,21,11.45,41.75,20,61.72a219.56,219.56,0,0,0,43.92,66.41c9.37,9.72,19,19.21,27,30.14,10.76,14.63,15.87,31.16,17.17,49.09.69,9.43,1,18.8-1.75,28-4.73,16.23-15.46,27.5-29.64,35.86-17.56,10.34-36.88,15.69-56.67,19.63-26.85,5.36-54.06,7.77-81.34,9.45s-54.58,2.86-81.85,4.5c-25.92,1.55-51.83,3.27-77.49,7.43-17.28,2.8-34.27,6.63-50.45,13.64-18.43,8-30,21.54-34.49,41.1C833.72,584.18,833.5,584.77,833.32,585.37Z"/><path class="cls-5" d="M721.53,463c0,1-.77,1.42-1.54,1.8-12.76,6.26-20.75,17-27.12,29.17-9.52,18.14-14.47,37.69-16.5,58-1.47,14.73-1.48,29.49,1.75,44.07,1.85,8.34,4.68,16.3,10,23.18a25.48,25.48,0,0,0,10.16,8.21c9.62,4.08,15.89,11.36,20.26,20.53,6,12.67,8.33,26.27,9.94,40,2.63,22.33,2.16,44.75,1.74,67.13-.37,19.24-1.42,38.48-2.47,57.7-1.55,28.33-2.79,56.65-2.45,85,.09,8,.21,15.93,2.08,23.72,3.17,13.28,10.91,16.65,22.77,9.86,10.3-5.9,18.69-14.11,26.58-22.82,30.8-34,55.88-72.1,80.64-110.47.91-1.4,2-2.68,3-4,5.74,19,11.45,38.06,18,56.81.62,1.75-.25,2.8-1,4q-19,31.61-39.37,62.4c-20.87,31.65-42.47,62.77-66.64,92-11.48,13.9-23.46,27.36-37.61,38.65-6.14,4.9-12.54,9.53-20.61,10.8-6.45,1-11.17-1.32-14.38-7.07s-4.34-12.19-4.88-18.68c-1.65-19.77-.94-39.56-.32-59.34,1.54-49.3,5.51-98.48,7-147.77.79-26.38,1.05-52.78-1.72-79.09-1.71-16.27-4.38-32.35-10.86-47.55-5.57-13.07-13.91-23.35-27.45-29.12-8.15-3.48-13-10.64-16.82-18.4-5.84-11.94-8.43-24.76-9.34-37.87a216.54,216.54,0,0,1,17.47-102.66c6.39-14.73,14.63-28.31,27.22-38.68S705.57,458.17,721.53,463Z"/></svg>
</div>
<div>
    <svg id="Calque_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 0 331.847 456.148">
        <defs>
            <style>
                .cls-9 {
                    fill: #DC3B6A;
                }

                .cls-10 {
                    fill: #C1315B;
                }

                .cls-11 {
                    fill: #A42B4E;
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
                <animate id="animationToStar" attributeName="d" begin="shape.click" dur="500ms"
                         to="M45.794,47.3s175.876-94.6,229.564,0S366.67,279.5,432.511,279.5s49.56,128.157,0,158.1S167.534,557.611,197.452,614.783,19.34,632.433,3.416,557.611,45.794,47.3,45.794,47.3Z"/>
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

<a id="a-menu-2" class="a-menu a-menu-entreprise" href="index.php">Entreprise</a>
<a id="a-menu" class="a-menu a-menu-artiste" href="artiste.php">Artiste</a>
<div><svg id="Calque_7" class="Calque_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 719.261 940.678">
        <defs>
            <style>
                .cls-45 {
                    fill: #DC3B6A;
                }

                .cls-38 {
                    fill: #C1315B;
                }

                .cls-34 {
                    fill: #DC3B6A;
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
    </svg></div>
<header>
  <div class="logo-lugh"><img src="img/logo-lugh.svg" alt="logo"></div>
  <div id="cont-btn">

   <a href="index.php"><button id="btn-artiste" class="btn-first">Entreprise</button></a>

  </div>
    <button id="burger-button" onclick="openMenu()">
        <div id="burger-ctr">
            <div class="head"></div>
            <div class="bar top"></div>
            <div class="bar center"></div>
            <div class="bar bottom"></div>
        </div>
    </button>
</header>
<section id="section-landing">
  <h1>Créez et exposez
    <br>sans rien dépenser ! </h1>
  <h3 id="text-1">Avec Lugh, bénéficiez d’appel d’offres privilégiées.</h3>
  <p class="text-p-landing">Proposez vos oeuvres à des entreprises qui souhaitent exposer dans leur locaux.<br> Profitez ainsi d’un coup de projecteur sur votre talent et d’une opportunité de<br> vendre votre création.</p>
    <div id="back-content">
        <img src="img/Mask.svg">
    <form method="post" action="" class="formulaire" id="form" class="form-ent">
    <h3>Inscrivrez vous à notre newsletter hebdomadaire pour rester en contact !</h3>
    <div class="input">
      <div class="div-input">
        <input type="text" class="input-text" id="mailInput-art" placeholder="email" name="mail">
      </div>
      <div class="div-submit">
        <input id="submit" class="submit" type="button" name="envoyer" value="ENVOYER">
      </div>
    </div>
    <span id="error_message" class="text-danger"></span>
    <span id="success_message" class="text-success"></span>
      <a href="index.php" class="min-link">Je suis une entreprise</a>


  </form>
    </div>
    <?php include 'inc/rs.inc.php' ?>
    <p id="rgpd">Lugh est seule destinateur des informations saisies, qui ne seront pas commercialisées à des tiers. Conformément au RGPD, vous disposez d’un droit d’accès,<br>
        de modification, de rectification et de suppression de ces données. Pour l’exercer, Vous pouvez envoyer un e-mail  l’adresse suivante : <b>Lugh.entreprise@gmail.com</b></p>

</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>

<script>$(document).ready(function () {
        $('#submit').click(function () {
            var mail = $('#mailInput-art').val();
            var myRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
            if (mail == '') {
                $('#error_message').html("L'email est vide");
            }
            if (!myRegex.test(mail)) {
                $('#error_message').html("Votre mail est invalide");
            }
            else {
                $('#error_message').html('');
                $.ajax({
                    url: "artiste.php",
                    method: "POST",
                    data: {mail: mail},
                    success: function (data) {
                        $("form").trigger("reset");
                        setTimeout(function () {
                            $('#success_message').html("Merci, votre mail a bien été enregistré");
                        }, 0);
                    }
                });
            }
        });
    });

</script>


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
