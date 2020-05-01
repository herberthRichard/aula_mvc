<?php
namespace Src\Classes;
use Src\Traits\TraitUrlParser;
require_once("../src/traits/TraitUrlParser.php");
class ClassRoutes{
    use TraitUrlParser;

    private $Rota;

    #Método de retorno da rota
    public function getRota(){
        $url=$this->parseUrl();
        $I = $url[0];

        $this->Rota=array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSitemap"
        );
        if(array_key_exists($I,$this->Rota)) {
            if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){
                return $this->Rota[$I];
            }else{
                return "ControllerHome";
            }
        }else{
            return "ControllerHome";
        }
    }
}