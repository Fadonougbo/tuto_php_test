<?php 

namespace App;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION|Attribute::TARGET_CLASS|Attribute::TARGET_METHOD)]
class Route {
    

    public function __construct(
        private string $name,
        private string $path='',
        private string $method='GET',
    ) {
        
        
    }


}





?>