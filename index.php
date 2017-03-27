<?php   
include 'header.php';
?> 
<?php
if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else
{
	echo "you are not logged in";
}
?>
 
 