<?php
include "db.php";
$i="select location from images where placement='header'";
$q=$conn->query($i);
if ($q->num_rows > 0){
   $row = $q->fetch_assoc(); 
   $img=$row['location'];
   
} 
 else {
    echo "0 results";
}
$l="select usr,pass from admin";
$ad=$conn->query($l);
if($ad->num_rows>0)
{
	$cd=$ad->fetch_assoc();
	$u=$cd['usr'];
    $pwd=$cd['pass'];
}
else
{
  echo "No user Found!!";
}





?>
