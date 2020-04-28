<?php

require 'connect.php';

//include "config.php";

//$string='fname','mname','lname','uname','address','password','contact','experience','qualifications';


if(isset($_POST['fname'])&&isset($_POST['mname'])&&isset($_POST['lname'])&&isset($_POST['uname'])&&isset($_POST['address'])&&isset($_POST['password'])&&isset($_POST['contact'])&&isset($_POST['experience'])&&isset($_POST['qualifications']))
{
	$fname =$_POST['fname'];
$mname =$_POST['mname'];
$lname =$_POST['lname'];
$uname=$_POST['uname'];
$address=$_POST['address'];
$password=md5($_POST['password']);
$contact=$_POST['contact'];
$experience=$_POST['experience'];
$qualifications=$_POST['qualifications'];


if(empty($fname)&&empty($mname)&&empty($lname)&&empty($uname)&&empty($address)&&empty($password)&&empty($contact)&&empty($experience)&&empty($qualifications))
{

echo "fill in all fields";

}
else{

$query = 'INSERT into seeker(fname, mname, lname, uname, address, password, contact, experience, qualifications) VALUES("$fname","$mname","$lname","$uname","$address","$password","$contact","$experience","$qualifications")';


}
$query_run = mysql_query($query);

if($query_run=mysql_query($query))
{
echo "success";
}
else
{
echo  "unsuccess";
}}
?>