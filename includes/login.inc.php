<?php
session_start();
include '../db.php';
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 
 $sql="select * from  user where uid='$uid' AND pwd='$pwd'";
 $result=$conn->query($sql);
 if(!$row=$result->fetch_assoc())
 {
 	echo "Your Username and Password are Incorrect";
 }
 else
 { 
 	$_SESSION['id']=$row['id'];
  }
 header("Location:../index.php");
?>
