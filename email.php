<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thank You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background=".\images\2.jpg" style="width:100% height:auto;">
    <div class="modal fade" id="thankyouModal" tabindex="-3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">"Thank you for contacting us!"</h4>
            </div>
            <div class="modal-body">
                <p>Thanks for getting in touch!</p>                     
            </div>    
        </div>
    </div>
</div>
</body>


<?php
// include "conn.php";
 require_once "/home/bbe91ar8hjkn/php/Mail.php";
   
   if($_POST['page']=="contact")
   {
    $name=$_POST['name'];
	$email=$_POST['email'];
  	$contact=$_POST['contact'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
    $loc=$_POST['page'];
   	$from = "Sender <info@makemytravelplan.com>";
    $to = "Receiver <sales@makemytravelplan.com>,<prakash@makemytravelplan.com>,<info@makemytravelplan.com>";
    $subject = "Enquiry From: ".$loc;
    $body = "Name:". $name."\n".
   "E-Mail: ".$email."\n".
   "Contact No.".$contact."\n".
   "Subject ".$sub."\n".
   "Message:".$msg."\n";
      }
   else
   {
    $name=$_POST['name'];
	$email=$_POST['email'];
  	$contact=$_POST['contact'];
    $datefrm=$_POST['datefrm'];
	$dateto=$_POST['dateto'];
	$guests=$_POST['guests'];
	$child=$_POST['child']; 
	$loc=$_POST['page'];
	$from = "Sender <info@makemytravelplan.com>";
    $to = "Receiver <sales@makemytravelplan.com>,<prakash@makemytravelplan.com>,<info@makemytravelplan.com>";
    $subject = "Enquiry For: ".$loc;
    $body = "Name:". $name."\n".
   "E-Mail: ".$email."\n".
   "Contact No.".$contact."\n".
   "Date From:".$datefrm."\n".
   "Tour Date:".$dateto."\n"."Guests:".$guests."\n".
    "Childs:".$child;
   }
	


$out = "mail.makemytravelplan.com";
$port = "587";
$username = "info@makemytravelplan.com";
$password = "Info@2019";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject,'X-Mailer: PHP/'=>phpversion());

$smtp = Mail::factory('smtp',
array ('port' => $port,
'auth' => false,
 'username' => $username,
'password' => $password,
'smtp' => $out));

$mail = $smtp->send($to, $headers, $body);

if(!$mail)
{
    echo "Error in Mail";
}
else{
 echo "<script>$('#thankyouModal').modal('show')</script>";
          
 header( "refresh:0.1;url=index.php" );
} 

   
   
?>

</html>
					
					