<?php
namespace App;

class teste extends ClassRoutes{
    public function __construct(){
        $v=$this->getRota();
        var_dump($v);
    }
}
 
$new = new Teste();