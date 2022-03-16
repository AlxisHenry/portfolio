<?php

$get_data = $_GET['filtre'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = 'scrapping';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n"
	. $conn->error);
$mysqli->set_charset('utf8');

$sql_request = 'SELECT *
FROM `articles`
INNER JOIN `dates` ON `articles`.identifier = `dates`.identifier
INNER JOIN `images` ON `dates`.identifier = `images`.identifier
INNER JOIN `themes` ON `images`.identifier = `themes`.identifier
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
	<input> </input>
	</div>
	';
}

$mysqli->close();
