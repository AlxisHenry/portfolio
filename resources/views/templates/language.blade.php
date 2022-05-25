<?php

$url = "http://api.mediastack.com/v1/news?access_key=b0ee13d7bcfecd3f63fcc6296f4b4bf6&keywords=api-hacker-hack-javascript-php&countries=us,fr&limit=100";
$news = json_decode(file_get_contents($url));

foreach ($news as $item) {

    var_dump($item);
}


/*
    $LANGUAGE = ucfirst($LANGUAGE);

    if ($LANGUAGE === 'Nodejs') { $LANGUAGE = 'Node.js'; }
    if ($LANGUAGE === 'Bash') { $LANGUAGE = 'Bourne-Againshell'; }

    $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$LANGUAGE&prop=extracts&format=json&exintro=1";
    $content = json_decode(file_get_contents($url));
    $array = $content->query->pages;
    foreach ($array as $arr) {
        echo explode(' ', $arr->title)[0];
        echo $arr->pageid;
        echo $arr->extract;
    }
*/
?>