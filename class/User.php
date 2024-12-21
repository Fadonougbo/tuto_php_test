<?php 
namespace AppTest;

use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;

Class User {



    public function __construct(string $name) {
        
    }

    #[Deprecated("7.4","slslslslsls")]
    public function essai() {

    }

}



?>