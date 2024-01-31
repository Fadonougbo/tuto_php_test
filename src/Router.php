<?php 

namespace App;

use Exception;
use TypeError;

class Router {
    
    private array $functions=[];
    private array $class=[];

    public function __construct(
       
    ) {
        
        
    }

    public function load(array $args) {

    }

    public function loadFunction(array $args):bool|self {


        if(empty($args)) {
            return false;
        }

        foreach($args as $arg) {
            if(function_exists($arg)) {
                $this->functions[]=$arg;
            }
        }

        return $this;

    }

    public function loadClass(array $args):bool|self {


        if(empty($args)) {
            return false;
        }

        foreach($args as $arg) {
            if(class_exists($arg)) {
                $this->class[]=$arg;
            }

        }
        return $this;

    }

    public function debug() {
        dump('functions',$this->functions);

        dump('class',$this->class);
    }


}


?>