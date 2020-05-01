<?php

namespace App;

use Src\Classes\ClassRoutes;


class Dispatch extends ClassRoutes
{

    #Atributos 
    private $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod()
    {
        $this->Method = $Method;
    }

    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam()
    {
        $this->Param = $Param;
    }

    #método constutor
    public function __construct()
    {
        self::addController();
    }
    #método  de adição do controller 
    private function addController()
    {
        $RotaController = $this->getRota();
        $NameSpace = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameSpace;

        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }
    #método de adição do método do controller
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        } else {
            echo "não";
        }
    }
    #método de adição de parametros de controller
    private function addParam()
    {
        $ContArray = count($this - parseUrl());

        if ($ContArray > 2) {
            foreach ($this->parseUrl() as $Key => $value) {
                if ($key > 1) {
                    $this->setParam($this->Param += [$Key => $value]);
                }
            }
        }
    }
}
