<?php
$conn=new mysqli("localhost","root","","traveller");
if($conn-> connect_error)
{
	die("connection failed".$conn->connect_error);
	
}
?>