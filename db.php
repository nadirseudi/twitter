<?php

class DB
{
    protected $connect;
    public function __construct($host, $user, $password, $database) 
    {
        try 
        {
            $this -> connect = new PDO("mysql:host=$host;dbname=$database", $user, $password);
            $this -> connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) 
        {
            die("La connexion à la base de données a échoué : " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this -> connect;
    }
}