<?php 

class dbConnect
{
	protected function dbconnect()
	{
    private $host ='localhost';
    private $name='fofo2';
    private $user="root";
    private $pass='';
    private $connexion;

    $DB = new PDO('mysql:host='.$this->host.';dbname='.$this->name,
            $this->user,$this->pass,array(
                    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ));
    return $DB;
	}
}