
<?php
$a1=$_POST['ano'];
$a2="ACCEPT";


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
echo "remark saved successfully";
mysqli_connect("localhost","root","");


if(isset($_POST['b2']))
{
    $a2="REJECT";

}
$a3=$_POST['remark'];
$a4=date("Y-m-d");

$sq="insert into status values('$a1','$a2','$a3','$a4')";
mysqli_connect("localhost","root","");

mysqli_query($conn,$sq);
?>
<html>
    <head>
        <style>
            body{
                        background-image: linear-gradient(160deg,#c1c1c1, #c7902c,rgb(247, 53, 19),rgb(228, 28, 71));
                text-align: center;
                color: white;
                font-size: 30pt;
                padding-top: 20%;
            }
            #aa{
                color: white;
                background-color: black;
                text-decoration: none;
                font-size: 20pt;
            }
            </style>
    </head>
    <body>
        <br> <a id="aa" href="adminhome.php">BACK</a><br>
    </body>
</html>