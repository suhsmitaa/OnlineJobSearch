<?php




if(isset($_POST['mname'])){
	$fname =$_POST['mname'];
if(!empty($mname)){

$insert='INSERT into seeker(mname) VALUES("$mname")';

if($query_run=mysql_query($insert))
{
echo "success";
}
else
{
echo "mysql_error()";
}
}

else
{
	echo mysql_error();
}
}
se{
	echo mysql_error();
}el


?>