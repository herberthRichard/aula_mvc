<?php

namespace App\Controller;

session_start();

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerContato extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        if (isset($_SESSION['login'])) {
            $this->setTitle("Contato");
            $this->setDescription("faça contato conosco");
            $this->setKeywords("contato,telefone,email");
            $this->setDir("contato/");
            $this->renderLayout();
        } else {
            echo "deu nao";
        }
    }
}
