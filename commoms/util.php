<?php
/* FILE CONFIG */
define('BASE_URL', 'http://localhost/mvc/');
/* 1. Tạo var_dump <=> dd*/
    function dd($var)
    {
        echo '<pre>';
        var_dump($var);
        die;
    }

    function getAssetUrl($assetUrl){
        return BASE_URL . "public/" . $assetUrl;
      }

?>