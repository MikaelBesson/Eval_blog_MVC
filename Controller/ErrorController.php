<?php


class ErrorController extends Controller {
    /**
     * Display 404 not found page.
     */
    public function notFound() {
        $this->render('errors/404', 'NOFUND', [
            'page' => $_GET['ctrl']
        ]);
    }

    /**
     * Display a message in case of no action found.
     */
    public function actionNotFound() {
        $this->render('errors/no-action-found', 'No action', [
            'action' => $_GET['action']
        ]);
    }
}