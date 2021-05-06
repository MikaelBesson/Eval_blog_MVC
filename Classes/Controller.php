<?php


class Controller {
    /**
     * Rend une vue.
     * @param string $view La vue à rendre
     */
    public function render(string $view) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/' . $view . '.view.php';
    }
}