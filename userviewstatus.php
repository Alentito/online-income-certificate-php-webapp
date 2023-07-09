<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


$sql="select * from income where appnum='$uid' and ratnam='$pwd'";


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






$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
?>
<html>
    <head>
        <link rel="stylesheet" href="display.css">
        
        <style>
        body{
            text-align: center;
        }
        #aa{
            display: block;
            margin: auto;
            width: 150px;
            height: 30px;
            background-color: black;
            text-decoration: none;
            color: white;
            text-align: center;
        }
        </style>
    </head>
<body>
<?php
$ano=$_POST['uid'];
$sql="select * from income where appnum=$ano";



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

 
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
$row=mysqli_fetch_row($res);
?>
<form  action="saveremark.php" method="post">
<table id="income" border="1">
<tr> <th> Application No </th> <td> <?php echo $row[0];?> </td> </tr>
<tr> <th> Name </th> <td> <?php echo $row[2];?> </td> </tr>
   <tr>      <th> Address</th><td> <?php echo $row[3];?> </td> </tr>
<tr>      <th> House Number</th><td><?php echo $row[4];?> </td> </tr>
    <tr>    <th>Mobile </th><td> <?php echo $row[5];?> </td> </tr>
    <tr>     <th>Adhar</th><td> <?php echo $row[6];?> </td> </tr>
    <tr>     <th>District</th><td> <?php echo $row[10];?> </td> </tr>

<?php 
$sql="select * from status where appno=$ano";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
$row=mysqli_fetch_row($res);

?>
  <tr>    <th>Status </th><td> <?php echo $row[1];?> </td> </tr>
    <tr>     <th>Remark</th><td> <?php echo $row[2];?> </td> </tr>
    <tr>     <th>Date</th><td> <?php echo $row[3];?> </td> </tr>
<?php
}
else {?>
<tr>     <td>Status</td><td> Pending </td> </tr>
<?php } ?>


</table>
</form>

<br> <a id="aa" href="logout.php">HOME</a><br>
</body>
</html>

<?php
}
else{
header('Location: invaliduserlogin.php');
  } ?>

