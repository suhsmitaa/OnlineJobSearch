<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="admnji";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());



if(isset($_POST[uname])&&isset($_POST[password])){

	$uname=$_POST['uname'];
	$password=$_POST['password'];

	if(!empty($uname)&&!empty($password)){
		echo"ok";
	}
	else{
		echo "please fill all the fields";
	}
}

//$insert="INSERT into $table(aid,uname,password) VALUES(NULL,'sushmita','letmeenter')" or die(mysql_error());


	//mysql_query($insert);


//$result = mysql_query($insert);

	//if ($result = mysql_query($insert)){

				//header('Location: sucess.php');

			//}


//$query ="SELECT `uname` FROM `admnji` WHERE `uname`='sushmita' AND uname=='smriti' AND uname=='shiwangi' AND uname=='yaju' ";
	//mysql_query($insert);



//mysql_query($query);
//if(query_run=mysql_query($query))
//{
//echo"sucessfully loggedin";
//}
////else{
//echo "failed";
	//die(mysql_error());
	//}

//if(isset($_POST['uname']) && isset($_POST['password']))
////{
	//$uname=$_POST['uname'];
	//$password=$_POST['password'];

//if(!empty($uname)&&!empty($password)){

	//$query="SELECT `uname`,`password` WHERE `uname`='$uname' AND `password`='$password' ";

//$query_run = mysql_query($query);

//}
//
//	echo"empty field";
//}
//}
//else{
	//echo"failed";}

//else{

//echo "login failed";
//}
mysql_close();
?>