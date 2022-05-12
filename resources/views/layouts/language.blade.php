{{ $LANGUAGE }}

<?php

    $LANGUAGE = ucfirst($LANGUAGE);

    if ($LANGUAGE === 'nodejs') { $LANGUAGE = 'Node.js'; }
    if ($LANGUAGE === 'bash') { $LANGUAGE = 'Bourne-Again_shell'; }

    $url = "https://en.wikipedia.org/w/api.php?action=query&titles=$LANGUAGE&prop=extracts&format=json&exintro=1";
    $content = json_decode(file_get_contents($url));
    $array = $content->query->pages;
    foreach ($array as $arr) {
        dd($arr);
    }
?>