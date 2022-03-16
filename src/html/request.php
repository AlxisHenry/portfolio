<?php

$get_data = $_GET['filtre'];

$dbhost = "localhost";
$dbuser = "c1798400c_portfolio";
$dbpass = "root";
$db = 'c1798400c_scrapping';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n"
	. $conn->error);
$mysqli->set_charset('utf8');

$sql_request = 'SELECT *
FROM `Articles`
INNER JOIN `Dates` ON `Articles`.identifier = `Dates`.identifier
INNER JOIN `Images` ON `Dates`.identifier = `Images`.identifier
INNER JOIN `Themes` ON `Images`.identifier = `Themes`.identifier
WHERE `title` LIKE "%' . $get_data . '%";
';

$DynamicQuery = $mysqli->query($sql_request);

while ($result = $DynamicQuery->fetch_assoc()) {
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	if (strpos($result['UploadDate'], ':')) {
		$timestamp = strtotime($result['UploadDate']);
		$formatDate = strftime("%d %B %Y", $timestamp);
	} else {
		$formatDate = $result['UploadDate'];
	}
	echo '
	<div class="article-card"> 
	<img class="content-article-card image-article" src="' . $result['LinkImage'] . '" alt="' . $result['AltImage'] . '"/>
	<h1 class="content-article-card title-article"> ' . $result['title'] . ' </h1>
	<h2 class="content-article-card date-publication"> Publié le ' . utf8_encode($formatDate) . '</h2>
	<h3 class="content-article-card author-article"> ' . $result['author'] . ' </h3>
	</div>
	';
}

$mysqli->close();
