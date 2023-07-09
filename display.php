<html>
    <head>
        <link rel="stylesheet" href="display.css">
        <style>
        body{
            
            
            text-align: center;
        }
        #aa{
            margin-top: 50px;
            bottom: 0;
            width: 150px;
            height: 60px;
            background-color: black;
            color: white;
            text-decoration: none;
        }
        </style>
</head>
    <body>
        
       <table border="1" id="income">
        
           <tr>
            <th> Name </th>
           <th> Address </th>
           <th> Mobile </th>
           <th> District </th>
            <th> View </th>
</tr>


<?php
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

 //display the registration
    $sql="select * from income where appnum not in(select appno from status)";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    for($i=0;$i<$num;$i++)
    {
        $row=mysqli_fetch_row($res);
        $ano=$row[2];
        ?>
        <tr>

         <td>   <?php echo $row[3];?></td>
          <td>  <?php echo $row[6];?></td>
          <td>  <?php echo $row[3];?></td>
          <td>  <?php echo $row[13];?></td>
          <td>  <a href="viewdetails.php?ano=<?php echo $ano;?>">View</a></td>
    </tr>
            <?php } ?>
    
    </table>
    <br> <a id="aa" href="adminhome.php">BACK</a><br>
</body>
</html>


