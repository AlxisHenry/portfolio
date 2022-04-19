<!DOCTYPE html>
<html lang="en">
<?php include('../php/configs/database.login.php'); ?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Veille Technologique - Alexis Henry</title>
  <script src="https://kit.fontawesome.com/ac4dc0897b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/index.css" />
  <!-- <link rel="stylesheet" href="../css/responsive/index.css" /> -->
</head>

<body class="body-veille">
  <header>
    <div class="header-menu_header-buttons">
      <nav class="header-nav veille-nav-responsive">
        <ul id="nav" class="drop">
          <li class="menuhover">
            <i class="menuhover fas fa-chevron-circle-down" title="Menu"></i>
            <ul id="responsive">
              <li>
                <a href="./inprogress.html" title="Présentation" id="href-presentation">PRÉSENTATION</a>
              </li>
              <li>
                <a href="./projets.html" id="href-projets" title="Projets">MES PROJETS</a>
              </li>
              <li>
                <a href="./comprendre.html" id="href-comprendre" title="Comprendre">COMPRENDRE MON SITE</a>
              </li>
              <li>
                <a href="./veille.html" id="href-comprendre" title="Comprendre">VEILLE TECHNO & JURIDIQUE</a>
              </li>
              <li></li>
              <li>
                <a href="https://discordapp.com/users/432241817975521282" id="href-discord" title="Join Me On Discord" target="_blank">JOIN MY DISCORD</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="bt-retour-accueil">
        <a href="../../index.html"><i id="btn-rac" class="fas fa-home" title="Retour à l'accueil"></i></a>
      </div>
      <div class="bt-retour-arriere">
        <i id="btn-rar" class="fas fa-backward" title="Retour en arrière"></i>
      </div>
    </div>
  </header>

  <div class="contain-cards">

      <div class="favorites-title"><h1 class="_favorites">Articles qui pourraient vous intéresser...</h1></div>

      <div class="favorites-cards">
          <?php
          $Favorites_Request = 'SELECT *
          FROM `Articles`
          INNER JOIN `Dates` ON `Articles`.identifier = `Dates`.identifier
          INNER JOIN `Images` ON `Dates`.identifier = `Images`.identifier
          INNER JOIN `Themes` ON `Images`.identifier = `Themes`.identifier
          ORDER BY `Articles`.identifier DESC LIMIT 10';
          $GET_Favorites = Connection()->prepare($Favorites_Request);
          $GET_Favorites->execute();
          while ($result = $GET_Favorites->fetch()) {
              date_default_timezone_set('Europe/Paris');
              setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
              if (strpos($result['UploadDate'], ':')) {
                  $formatDate = str_replace('-', "/", substr($result['UploadDate'], 0, strpos($result['UploadDate'], 'T')));
                  $datetime = $result['UploadDate'];
              } else {
                  $formatDate = $result['UploadDate'];
                  $datetime = $result['UploadDate'];
              }
              echo '
            <div class="article-card article-nb-' . $result['identifier'] . ' card-nb-' . $i++ . '"> 
            <img class="content-article-card image-article" src="' . $result['LinkImage'] . '" alt="' . $result['AltImage'] . '"/>
            <div class="content-article-card under-image">
            <h1 class="content-article-card title-article"> ' . $result['title'] . '... </h1>
            <h2 class="content-article-card date-publication"> Publié le <time datetime="' . $datetime . '">' . $formatDate . '</time></h2>
              <a class="content-artcile-card href-to-article-page" href="' . $result['UrlArticle'] . '">
            <div class="content-article-card button-href-article ' . $result['identifier'] . '"> Voir ' . "l'article" . ' </div>
            </a>
            </div>
            </div>
            ';
          }
          ?>
      </div>
      <div class="contain-research-veille-technologique">
          <input type="text" placeholder="Rechercher un article..." name="" id="" class="research-veille-technologique" />
      </div>
    <div class="cards">

      <?php
      $GET_ALL_Articles = 'SELECT *
          FROM `Articles`
          INNER JOIN `Dates` ON `Articles`.identifier = `Dates`.identifier
          INNER JOIN `Images` ON `Dates`.identifier = `Images`.identifier
          INNER JOIN `Themes` ON `Images`.identifier = `Themes`.identifier
          ORDER BY `Articles`.identifier DESC LIMIT 4, 300';
      $DynamicQuery = Connection()->query($GET_ALL_Articles);
      $i = 0;
      while ($result = $DynamicQuery->fetch()) {
        date_default_timezone_set('Europe/Paris');
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        if (strpos($result['UploadDate'], ':')) {
          $formatDate = str_replace('-', "/", substr($result['UploadDate'], 0, strpos($result['UploadDate'], 'T')));
          $datetime = $result['UploadDate'];
        } else {
          $formatDate = $result['UploadDate'];
          $datetime = $result['UploadDate'];
        }
        echo '
            <div class="article-card article-nb-' . $result['identifier'] . ' card-nb-' . $i++ . '"> 
            <img class="content-article-card image-article" src="' . $result['LinkImage'] . '" alt="' . $result['AltImage'] . '"/>
            <div class="content-article-card under-image">
            <h1 class="content-article-card title-article"> ' . $result['title'] . '... </h1>
            <h2 class="content-article-card date-publication"> Publié le <time datetime="' . $datetime . '">' . $formatDate . '</time></h2>
              <a class="content-artcile-card href-to-article-page" href="' . $result['UrlArticle'] . '">
            <div class="content-article-card button-href-article ' . $result['identifier'] . '"> Voir ' . "l'article" . ' </div>
            </a>
            </div>
            </div>
            ';
      }
      ?>

    </div>
  </div>

  <footer>
    <div id="foot"></div>
  </footer>

  <script type="module" src="../js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/veilles.js"></script>
</body>
</html>