<?php 
require './vendor/autoload.php';
[$_POST, $_FILES] = request_parse_body();
dump(request_parse_body())

?>