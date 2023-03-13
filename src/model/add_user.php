<?php
include_once('src/model.php');
function add_user(string $id_image, array $user){
    $database = connexion_database();
    $statement = $database->prepare("INSERT INTO users(id_image,fist_name,lastName,nikname,upassword,mail,sign_in_date)
    VALUE(?,?,?,?,?,?,NOW())");
    $numberLine =$statement->execute([$id_image,$user['name'],$user['first_name'],$user['Username'],$user['password'],$user['email']]);
    if ($numberLine >0) {
       return true;
    }else {
        return false;
    }
   

}
function add_image(string $imageName){
    $database = connexion_database();
    $statment = $database->prepare("INSERT INTO images(image_url) VALUE(?)");
    $numberLine = $statment->execute([$imageName]);

    if ($numberLine>0) {
        return true;
     }else{
        return false;
     }
}
function getIdImage(string $image){
    $database = connexion_database();
    $statment = $database->prepare("SELECT id_image FROM images WHERE image_url =?");
    $statment->execute([$image]);
    $rows = $statment->fetch();
    return $rows['id_image'];
}
function getIdUser($nikname){
    $database = connexion_database();
    $statment = $database->prepare("SELECT id_user FROM users WHERE nikname = ?");
    $statment->execute([$nikname]);
    $rows = $statment->fetch();
    return $rows['id_user'];
}
function userExist(string $nikname, string $email){
    $database = connexion_database();
    $statment = $database->prepare("SELECT * FROM users WHERE nikname = ? OR mail = ?");
    $statment->execute([$nikname,$email]);
    $rows = $statment->fetch();

    if (empty($rows)) {
        echo "existe pas SELECT * FROM users WHERE nikname = '$nikname' OR mail = '$email' ";
       return false;
    }else{
        echo "existe deja";
        return true;
    }
}
