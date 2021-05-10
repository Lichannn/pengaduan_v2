<?php

class database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'pengaduan';
    protected $connect;

    public function __construct()
    {
        $this->connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
    }
}

?>