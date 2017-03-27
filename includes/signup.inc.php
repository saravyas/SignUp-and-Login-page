<?php
session_start();
include '../db.php';
$first = $_POST['first'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 
 $sql="insert into user(first,uid,pwd) values ('$first','$uid','$pwd')";
 $result=$conn->query($sql);
 header("Location:../index.php");
?>