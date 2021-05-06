<?php


class Controller {
    /**
     * Rend une vue.
     * @param string $view La vue à rendre
     */
    public function render(string $view, string $title, array $vars = []) {
        // On rend le partial header.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/_partials/header.php';

        // On rend la vue demandée.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/' . $view . '.view.php';

        // On rend le partial footer.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/_partials/footer.php';
    }

    /**
     * Nous aide à savoir si le formulaire a été envoyé.
     */
    public function formIsSubmitted(): bool {
        return isset($_POST['submit']);
    }
    /**
     * Return true si toutes les clés données sont présentes dans le tableau POST.
     * @param ...$keys
     */
    public function issetPost(...$keys): bool {
        foreach($keys as $key) {
            if(!isset($_POST[$key])) {
                return false;
            }
        }
        return true;
    }

    /**
     * Retourne false si un seul des paramètres POST est vide.
     * @param ...$keys
     * @return bool
     */
    public function isNotEmpty(...$keys): bool {
        foreach($keys as $key) {
            if(empty($_POST[$key])) {
                return false;
            }
        }
        return true;
    }

    /**
     * Retourn true si tous les params post sont présents ET non vides.
     * @param ...$keys
     * @return bool
     */
    public function allPostParamsOk(...$keys): bool {
        return $this->issetPost($keys) && $this->isNotEmpty($keys);
    }
}