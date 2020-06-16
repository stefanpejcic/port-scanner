<?php

function dbConncet($host,$user,$pass,$database){
	$con = mysqli_connect($host,$user,$pass,$database);
	if (mysqli_connect_errno())
	{
	die("Greska iz app fajla -povezivanje s bazom: " . mysqli_connect_errno());
	}
	return $con; 
}


function RealIpAddress()
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
$ipadd=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
$ipadd=$_SERVER['HTTP_X_FORWARDED_FOR'];

}

else
{
$ipadd=$_SERVER['REMOTE_ADDR'];
}
return $ipadd;
}
?>