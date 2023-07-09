<html>
    <head>
        <style>
            body{
                  background-image: linear-gradient(160deg,#c1c1c1, #c7902c,rgb(247, 53, 19),rgb(228, 28, 71));
            }
            form{
                text-align: center;
                margin: auto;
            }
            div{
                margin: auto;
            }
            </style>
    </head>
<body>
<?php
$ano=$_GET['reg'];
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
<div>
<form action="saveremark.php" method="post">
<table border="1">
<tr> <td> Application No </td> <td> <?php echo $row[0];?> </td> </tr>
<tr> <td> Name </td> <td> <?php echo $row[2];?> </td> </tr>
   <tr>      <td> Address</td><td> <?php echo $row[3];?> </td> </tr>
<tr>      <td> House Number</td><td><?php echo $row[4];?> </td> </tr>
    <tr>    <td>Mobile </td><td> <?php echo $row[5];?> </td> </tr>
    <tr>     <td>Adhar</td><td> <?php echo $row[6];?> </td> </tr>
    <tr>     <td>District</td><td> <?php echo $row[10];?> </td> </tr>

<?php 
$sql="select * from status where appno=$ano";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
$row=mysqli_fetch_row($res);

?>
  <tr>    <td>Status </td><td> <?php echo $row[1];?> </td> </tr>
    <tr>     <td>Remark</td><td> <?php echo $row[2];?> </td> </tr>
    <tr>     <td>Date</td><td> <?php echo $row[3];?> </td> </tr>
<?php
}
else {?>
<tr>     <td>Status</td><td> Pending </td> </tr>
<?php } ?>


</table>
</form>
</div>
</body>
</html>

