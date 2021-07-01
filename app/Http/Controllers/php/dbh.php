<?php
class dbconnection extends PDO
{
    private $servername = "localhost";
    private $dBUsername = "root";
    private $dBPassword = "";
    private $dBName = "forum";

    public function __construct()
    {
    parent::__construct("mysql:host=" . $this->servername . ";dbname=" . $this->dBName . "; charset=utf8", $this->dBUsername, $this->dBPassword);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function loginUser($pass)
    {
        $status = null;
        $dbconnect = new dbconnection();
        //$sql = "SELECT COUNT(*) FROM users WHERE email=:email AND password=:pass";
        $sql = "SELECT password FROM users WHERE password=:pass";
        $query = $dbconnect->prepare($sql);
        //$query->bindParam(":email", $email);
        $query->bindParam(":pass", $pass);
        $query->execute();
        $status = $query->fetchAll();
        return $query;
    }
}
