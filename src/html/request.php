<?php

spl_autoload_register(function ($class_name) {
	include '../php/' . $class_name . '.classes.php';
});

$get_data = $_GET['user_research'];

include('../php/database.classes.php');

try {
	$pdo_connect = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db . ';charset=utf8', $dbuser, $dbpass);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

// todo: Améliorer la requête (avec l'alt de l'image et la date complète)
$sql_request = 'SELECT *
FROM `Articles`
INNER JOIN `Dates` ON `Articles`.identifier = `Dates`.identifier
INNER JOIN `Images` ON `Dates`.identifier = `Images`.identifier
INNER JOIN `Themes` ON `Images`.identifier = `Themes`.identifier
WHERE `title` LIKE "%' . $get_data . '%";
';

$DynamicQuery = $pdo_connect->query($sql_request);

$i = 0;

while ($result = $DynamicQuery->fetch()) {
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	if (strpos($result['UploadDate'], ':')) {
		$timestamp = strtotime($result['UploadDate']);
		$formatDate = utf8_encode(strftime("%d %B %Y", $timestamp));
		$datetime = $result['UploadDate'];
	} else {
		$formatDate = $result['UploadDate'];
		$datetime = $result['UploadDate'];
		// $datetime = 'a';
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

$DynamicQuery->closeCursor();
