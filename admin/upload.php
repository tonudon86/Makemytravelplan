<?php
include ("controllers/db.php");
include ("controllers/controller.php");

//$uploaddir = '/var/www/uploads/';
$dr=getcwd(); 
$uploaddir="$dr/images";
$uploadfile = $uploaddir .'/'. basename($_FILES['userfile']['name']);
$fname=basename($_FILES['userfile']['name']);
$location= mysql_real_escape_string('images/'.$fname);	

if ($_FILES['userfile']['tmp_name']!=='') {
	move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile);
	if($q->num_rows>0)
	{
		$ins="update images SET imgName='$fname', location='$location' where placement='header'";
	}
	else{
	$ins="insert into images (imgName,location,placement) values('$fname','$location','header')";
	}
	if($conn->query($ins)==true)
	{
  echo "File is valid, and was successfully uploaded.\n";
	}

} else {
   echo "Upload failed".$conn->error;
}
  

?> 