<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Model/UserManager.php';

class UserController extends Controller {

    private UserManager $User;

    public function __construct() {
        $this->User = new UserManager();
    }

    public function addUser() {
        if($this->formIsSubmitted()) {
            if($this->allPostParamsOk('pseudo', 'password')) {
                $pseudo = strip_tags($_POST['pseudo']);
                $password =strip_tags($_POST['password']);
                $user = new UserManager();
                $this->User->addUser();
            }
        }
        $this->render('inscription/inscription', "formulaire d'inscription");
    }

}