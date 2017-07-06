<?php

class HomeController {

    public function __construct(){
        echo "HomeController Carregado! <br>";
    }

    public function indexAction(){
        $modelUser = new UserModel();

        echo "index action carregada! <br>";

    }

    public function outraAction(){

        echo "outra action carregada! <br>";

    }

}
