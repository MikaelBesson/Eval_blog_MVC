<?php


class DB extends PDO
{
    private string $host = 'localhost';
    private string $db ='blog_mvc';
    private string $user = 'root';
    private string $password ='';

    public function __construct() {
        try {
            parent::__construct("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception){
            echo $exception->getMessage();
        }
    }
}