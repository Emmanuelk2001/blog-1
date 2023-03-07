<?php
function connexion_database(){
    $database = mysqli_connect("localhost","root","");
    if (!$database){
        die("Eurreur : ".mysqli_connect_error());
    }
}
?>