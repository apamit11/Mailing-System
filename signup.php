<?php
include "connect.php";
$email=$_REQUEST['email'];
$pass=$_REQUEST['psw'];
$rpass=$_REQUEST['psw-repeat'];
$sec=$_REQUEST['sec'];
$seca=$_REQUEST['seca'];
$nm=$_REQUEST['name'];
$passalt=$pass."$)#4";
$ssalt=$seca."09$%";
$password=sha1($passalt,TRUE);
$security=sha1($ssalt,TRUE);

$q="insert into user value('$nm','$email','$password','$sec','$security')";
if(!($s=mysqli_query($dc,$q))){
	echo mysqli_error($dc);
}
if($s>0){
	echo"<h3>Signup Successfully... Click on login</h3>"; ?>
	<meta http-equiv="refresh" content="2;url=index.php">
            <?php
}
mysqli_close($dc);
?>