<?php 
include "connect.php";
$usrnm=$_REQUEST['uname'];
$pass=$_REQUEST['psw'];
$salt=$pass."$)#4";
$password=sha1($salt,TRUE);
$q="select * from user where email='$usrnm'";
$r=mysqli_query($dc,$q);
if($s=mysqli_fetch_array($r))
{
    $rs=$s[2];
    //echo $rs."\n";
    //echo $salt."\n";
    if(strcmp($rs,$password)==0)
    {
        $_SESSION['Email']=$s[1];
	//header("location:footer.php");
        echo "login Successfully";
    }
    else echo "Error";
}
else{
?>
<font color=red>invalid user id or password</font>
    <?php
}
 mysqli_close($dc);
?>

//fgbhnjmk,l.;/'likyhgrfds