TesT.blade

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/*
 * foreach ($articles as $article) {

    $url = $article->LinkImage;
    $contents = file_get_contents($url);
    $name = str($article->identifier) . '_' . substr($url, strrpos($url, '/') + 1);

    DB::table('Images')
        ->where('identifier', '=', $article->identifier)
        ->update(['LinkImage' => 'assets/images/article_image/' . str($name)]);

    Storage::disk('public-content')->put($name, $contents);


}

 *
 *
 * */

?>