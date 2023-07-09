<html>
    <head>
        <link rel="stylesheet" href="display.css">

        <style>
        body{
            color: white;
            padding-top: 20%;
            text-align: center;
              background-image: linear-gradient(160deg,#c1c1c1, #c7902c,rgb(247, 53, 19),rgb(228, 28, 71));
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
     
        
<?php
$ratnam=$_POST['ratnam'];
$appnum=$_POST['appnum'];
$appnam=$_POST['appnam'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$address=$_POST['address'];
$nof=$_POST['nof'];
$pstofc=$_POST['pstofc'];
$pin=$_POST['pin'];
$nol=$_POST['nol'];
$village=$_POST['village'];
$thaluk=$_POST['thaluk'];
$district=$_POST['district'];
$purpose=$_POST['purpose'];
//$dob=$_POST['dob'];

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
echo "Application submitted successfully";

mysqli_connect("localhost","root","");


    $sq="INSERT INTO income (ratnam,appnum,appnam,sex,age,address,nof,pstofc,pin,nol,village,thaluk,district,purpose) VALUES('$ratnam','$appnum','$appnam','$sex','$age','$address','$nof','$pstofc','$pin','$nol','$village','$thaluk','$district','$purpose');";
    mysqli_query($conn,$sq);
    echo "";
    ?>
    
   <br> <a id="aa" href="logout.php">HOME</a><br>
</body>
</html>

