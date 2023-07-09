<?php
$a1 = $_POST['con_na'];
$a2= $_POST['add'];
$a3=$_POST['hou_no'];
$a4=$_POST['adh_num'];
$a5=$_POST['phn_num'];
$a6=$_POST['dis_na'];
$a7=$_POST['dis_add'];
$a8=$_POST['cit_tow'];
$a9=$_POST['dis'];
$a10=$_POST['state'];
$a11=$_POST['pin_co'];
$a12=$_POST['dob'];
$a12 = date("Y-m-d", strtotime($a12) );
$sq="insert into gas values( NULL,'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12')";
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
?>