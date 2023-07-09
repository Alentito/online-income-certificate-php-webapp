<?php
session_start();
if($_SESSION['uid'] != "admin")
{
header ('Location: adminlogin.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="display.css">
        <style>
        body{
            text-align: center;
        }
        #aa{
            margin-top: 50px;
            width: 150px;
            height: 60px;
            background-color: black;
            color: white;
            text-decoration: none;
        }
        </style>
    </head>
<body>
<table id="income" border="1">
<tr> <th> Name </th> 
        <th> Address</th>
       <th>Mobile </th>
        <th>District</th>
       <th>View</th>
</tr>
<?php
$sql="select * from income where appnum in (select appno from status where status='REJECT')";


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
for($i=0;$i<$num;$i++)
{
$row=mysqli_fetch_row($res);
$ano=$row[0];
?>
<tr> <td> <?php echo $row[1]; ?> </td> 
        <td> <?php echo $row[2]; ?> </td>
       <td><?php echo $row[4]; ?> </td>
        <td><?php echo $row[9]; ?></td>
       <td><a href="viewstatus.php?reg=<?php echo $ano;?>">View </a></td>
</tr>

<?php } ?>



</table>
<br> <a id="aa" href="adminhome.php">BACK</a><br>
</body>
</html>