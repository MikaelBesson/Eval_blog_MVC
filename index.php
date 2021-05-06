<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Controller/AcceuilController.php';




if(isset($_GET['ctrl'])) {
    echo "MON utilisateur a besoin d'un controller";
}
else {
    (new AcceuilController())->displayAcceuil();
}
