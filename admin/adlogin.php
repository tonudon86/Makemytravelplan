<?php
include("controllers/controller.php");
$usr=$_POST['usr'];
$pass=$_POST['password'];
if($u==$usr && $pwd==$pass)
{
header("Location:index.html");
	}
	else
	{
		Echo "Sorry No User Found";
		header("Location:login.html refresh:2; ");
	}

?>


