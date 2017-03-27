<?php 
include 'header.php';
?> 
 <?php
if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
	echo "<br>";
}
else
{
	echo "you are not logged in";
}
?>
<?php
if(isset($_SESSION['id'])){
	echo "You already logged in";
}
else
{
	echo"<form action='includes/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='Firstname'><br>
	<input type='text' name='uid' placeholder='Username'><br>
	<input type='password' name='pwd' placeholder='Password'>	<br>
	<button type='submit'>SIGN UP</button>
</form>";

}
?>
 