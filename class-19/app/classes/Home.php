<?php


namespace App\classes;


use http\Params;

class Home
{
    public function index(){
        header("Location:action.php?page=home");
    }
}