<?php 

class dbConnection
{
	protected function connectDB()
	{
    $host ='localhost';
    $name='fofo2';
    $user="root";
    $pass='';

    $DB = new PDO('mysql:host='.$host.';dbname='.$name, $user,$pass,array(
                    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ));
    return $DB;
	}
}