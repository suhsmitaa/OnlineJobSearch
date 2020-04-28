<?php

include "ix.php";
class conn{

	public $hostname = 'localhost';
	public $username = 'root';
	public $password = '';
	public $database = 'ojs';
	public $con = 0;
	public function createConnection(){

		$con= mysqli_connect($this->hostname, $this->password, $this->username, $this->database);
		//print_r($con);
		if($this->con){

			$msg = "connection established";
			return $con;
		}
		else{
             if(mysqli_connect_errno()){
             	echo 'connection is not established'. mysqli_connect_error();
             }
             return false;
			}
	}
}


?>