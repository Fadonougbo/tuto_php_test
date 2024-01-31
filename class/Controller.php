<?php 

namespace AppTest;

use App\Route;

class Controller {

    #[Route('home','/home')]
    public function home() {
        echo 'okok';
    }
}

?>