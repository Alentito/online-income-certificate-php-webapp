<html>
    <body>
        <head>
            <link rel="stylesheet" href="display.css">
            <style>
                body{
                      background-image: linear-gradient(160deg,#c1c1c1, #c7902c,rgb(247, 53, 19),rgb(228, 28, 71));
;
                }
                table{
                    background-color: white;
                }
                #in{
                    
                    background-color: green;
                    width: 100px;
                    height: 30px;
                    color: white;
                    border: none;
                    border-radius: 5px;
                }
                #out{
                    background-color: red;
                    width: 100px;
                    height: 30px;
                    color: white;
                    border: none;
                    border-radius: 5px;
                }
                </style>
        <?php
        $ano=$_GET['ano'];
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
    <form action="saveremark.php" method="post">
    <table border="1" id="display";
    <tr><td> Name of the person to whom certificate is issued </td> <td><?php echo $row[3];?></td></tr>
        <tr><td> Gender </td> <td><?php echo $row[4];?></td></tr>
        <tr><td> Age </td> <td><?php echo $row[5];?></td></tr>
        <tr><td> Name of Father </td> <td><?php echo $row[7];?></td></tr>
        <tr><td> Address </td> <td><?php echo $row[6];?></td></tr>
        <tr><td> Post Office with Pin-code </td> <td><?php echo  $row[8] , "," , $row[9];?></td></tr>
        <tr><td> Name of Localbody </td> <td><?php echo $row[10];?></td></tr>
        <tr><td> Village </td> <td><?php echo $row[11];?></td></tr>
        <tr><td> Taluk </td> <td><?php echo $row[12];?></td></tr>
        <tr><td> District </td> <td><?php echo $row[13];?></td></tr>

        <tr><td> Remark </td> <td><input type="text" name="remark">
        <input type="hidden" name="ano" value="<?php echo $ano;?>"></td>
        </tr>
        
        
        
        <tr><td> Certificate Issued Date </td> <td></td></tr>
        <tr><td> Designation of the issuing officer </td> <td></td></tr>

        <tr> <td> <input id="in" type="submit" value="ACCEPT" name="b1"></td>
         <td> <input id="out" type="submit" value="REJECT" name="b2"></td></tr>
</table>
</form>
</body>
</html>
        
