<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


 $servername="localhost";
$username="root";
$password="";
$database="student";
//create connection
$conn=new mysqli($servername,$username,$password,$database);
//check connection
if($conn->connect_error){
    die("connection failded:".
    $conn->connect_error);
}

mysqli_connect("localhost","root","");


$sql="select * from incomeadmin where uid='$uid' and pwd='$pwd'";

$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
session_start();
$_SESSION['uid']="admin";
header ('Location: adminhome.php');
}
else
{
header ('Location: invalidadminlogin.php');
}
?>