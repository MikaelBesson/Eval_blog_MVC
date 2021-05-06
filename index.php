<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Controller/AcceuilController.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Controller/ErrorController.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Controller/InscriptionController.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Controller/UserController.php';


if(isset($_GET['ctrl'])) {
    switch ($_GET['ctrl']) {
        case 'inscription':
            (new InscriptionController())->displayInscription();
            break;
        case 'addInscription':
            (new UserController())->addUser();
            break;
        default:
            (new ErrorController())->notFound();
    }
}
else {
    (new AcceuilController())->displayAcceuil();
}
