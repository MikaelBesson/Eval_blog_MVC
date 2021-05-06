<?php

class InscriptionController extends Controller {

    public function displayInscription() {
        // Est ce que on formulaire est envoyé ????

        $this->render('inscription/inscription', 'inscription');
    }


}
