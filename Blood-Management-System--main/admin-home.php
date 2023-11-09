<?php
include('connection.php');
// session for security purpose?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Management</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">

        <div class="inner-container">
        <!-- ****************************************
        Heading
        ************************************************* -->
        <section class="header">
        <h2>Welcome Admin</h2>
        </section>
        <br><br>
        <!-- *******************************************
        body 
        ************************************** -->
        <section class="admin-control">
        <?php
        echo $un=$_SESSION['un'];
        if(!$un){
            header("Location:index.php");
        }
        ?>
            <ul>
                <li><a href="donor-reg.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="exchange-blood.php">Exchange Blood Registration</a></li>
                <li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
                <li><a href="stock-blood.php">Stock Blood</a></li>
                <!-- <li><a href="out-stock-blood.php">Out Stock Blood</a></li> -->
                <li><a href="ngo.php">NGO</a></li>
            </ul>
        </section>
        <br><br><br>
        
        <!--***************************** ***********
        footer
        ********************************************* -->
        <section class="footer">
            
            <div>
            <span>Copyright@</span><strong> team_undefined</strong>
            </div><div class="logout">
            <p><a href="logout.php">Logout</a></p>
            </div>
        </section>
        </div>
    </div>
</body>
</html>