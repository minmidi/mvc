<?php
/* FILE CONFIG */
/* 1. Tạo var_dump <=> dd*/
    function dd($var)
    {
        echo '<pre>';
        var_dump($var);
        die;
    }
?>