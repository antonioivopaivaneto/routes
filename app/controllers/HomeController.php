<?php

namespace App\Controllers;

class HomeController {
    public function index(){

        $title = "Bem vindo, Amigo";
        extract(compact('title'));
       include '../views/home.php';
        
    }
    public function about(){
        echo 'about';

    }
}
