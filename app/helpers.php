<?php 

use App\Http\Response;

if(! function_exists('view')){
    function view($view){
        return new Response($view);
    }
}

if(! function_exists('viewPath')){
    function viewPath($view){
        return __DIR__ . "/../views/$view.php";
    }
}