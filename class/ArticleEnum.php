<?php 
namespace AppTest;

Enum ArticleEnum:string {

    case name='doe';
    case data='okok';
    case price='12';

    public function getStatus() {    

        dump(self::data->value);
    }
}


?>