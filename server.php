<?php
$_POST = json_decode( file_get_contents("php://input"), true ); // works with JSON file
echo var_dump($_POST); // works with FormData