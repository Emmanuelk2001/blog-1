<?php
require_once('src/controllers/front/homepage.php');
require_once('src/controllers/front/inscription.php');
require_once('src/controllers/front/session.php');
require_once('src/controllers/front/dashbord.php');
require_once('src/controllers/back/add_user.php');


    if (isset($_GET['action']) && $_GET['action'] !== '') {
      switch ($_GET['action']) {
        case 'inscription':
          inscription();
          break;
        case 'dashbord':
          dashbord();
          break;
        case 'session':
          session();
          break;
          case 'add_user':
            addUser($_POST,$_FILES);
            break;
        case 'logout':
          if(session_destroy()){
           header('location:index.php');
          }else{
            session();
          }
          break;
        default:
        echo "Erreur 404 : la page que vous recherchez n'existe pas.";
          break;
      } 
    }else{
      homepage();
    }
