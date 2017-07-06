<?php

class HomeController {

    //variavel para conter o title da pagina
    public $page_title;

    public function __construct(){
        $this->page_title = "";

        //echo "HomeController Carregado! <br>";
    }

    public function indexAction(){
        $this->page_title = "Home";
        $modelUser = new UserModel();

        return "Conteúdo da view";
        //echo "index action carregada! <br>";
    }

    public function outraAction(){
        
        //echo "outra action carregada! <br>";
    }

}
