<?php
session_start();
include_once('src/model/add_user.php');
function addUser(array $input,array $file){
    if(isset($input['send'])){
        if(!empty($input['name']) AND !empty($input['FirstName']) AND !empty($input['email']) AND !empty($input['Username']) AND
           !empty($input['passeword']) AND !empty($input['passewordChecked']) AND !empty($file['image'])){

           if (!userExist($input['Username'],$input['email'])) {
            if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
                $message = "mail non valide";
                header("location:index.php?action=inscription&id=$message");
            }else {
                $dataSingUp = [
                    'name' => htmlspecialchars($input['name']),
                    'first_name' => htmlspecialchars($input['first_name']),
                    'email' => htmlspecialchars($input['email']),
                    'Username'=> htmlspecialchars($input['Username']),
                    'password' =>password_hash($input['passeword'],PASSWORD_ARGON2ID),
                    'passewordChecked'=>password_hash($input['passewordChecked'],PASSWORD_ARGON2ID)
                ];
                    
                    $imag_name = $file['image']['name'];
                    $temp_name = $file['image']['tmp_name'];
                    $time = time();
                    $newNameImage = $time."_".$dataSingUp['email']."_".$imag_name;
                    
                    $deplacerImage = move_uploaded_file($temp_name,'images/'.$newNameImage);
                    if ($deplacerImage) {
                    
                        if ( add_image($newNameImage)) {
                        $idIcone = getIdImage($newNameImage);
                        if( add_user($idIcone,$dataSingUp)){
                            $_SESSION['name'] =$dataSingUp['name'];
                            $_SESSION['FirstName']= $dataSingUp['FirstName'];
                            $_SESSION['email'] =$dataSingUp['email'];
                            $_SESSION['Username']= $dataSingUp['Username'];
                            $_SESSION['idIcone']= $idIcone;
                            $_SESSION['Icone']= $newNameImage;
                            $_SESSION['idUser'] =getIdUser($dataSingUp['Username']) ;
                            if ($_SESSION['idUser'] == false) {
                            echo "Error ------->";
                            }else{
                                header("location:index.php?action=session");
                            }               
                        } 
                        }
            }else{
                $message = "image invalide";
                header("location:index.php?action=inscription&id=$message");
            }
                
            }
            
            
           }else {
            $message = "l'utilisateur existe deja";
            header("location:index.php?action=inscription&id=$message");
            
            
           } 
           
    
        }else{
            echo "vide";
            $message = "Veuiller rempliser champ";
        }
    }else{
        $message = "Veuiller rempliser champ";
        echo $message;
    }
    
}