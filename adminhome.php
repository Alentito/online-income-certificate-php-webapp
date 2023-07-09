<?php
session_start();
if($_SESSION['uid'] != "admin")
{
header ('Location: adminlogin.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div id="frm">
        <div class="btn">
<a href="display.php">Pending List</a><br>
<a href="disacceptlist.php">Accept List</a><br>
<a href="disrejectlist.php">Reject List</a><br>
<a href="getappdetails.php">Search</a><br>
<a href="logout.php">Logout</a><br>
</div>
</div>
</body>
</html>