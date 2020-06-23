<?php
    namespace App\Controllers;
    // Thư viện view blade 
    use Jenssegers\Blade\Blade;

    class BaseController 
    {
        protected function render($var, $data = [])
        {
            $blade = new Blade('views', 'storage');
            echo $blade->make($var, $data)->render();
        }
    }
?>