<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <style type="text/css">
        td{
            /* width:50%; */
            height:40px;
            overflow:hidden;
            /* overflow-y: scroll; */
            margin-bottom:10px;
            
        }
       
    .form tr {
    position: relative;
    top: -30px;
    display: grid;
    grid-template-columns: repeat(8,1fr);
    /* width: 100%; */
    column-gap: 15px;
}

    </style>
</head>
<body>
    <div class="container">

        <div class="inner-container">
        <!-- ****************************************
        Heading
        ************************************************* -->
        <section class="header">
        <a href="admin-home.php"><h2>Blood Bank Management</h2></a>
        </section>
        
        <!-- *******************************************
        body 
        ************************************** -->
        <section class="body">
        <!-- session add -->
        <?php
        echo $un=$_SESSION['un'];
        if(!$un){
            header("Location:index.php");
        }
        ?>
        <center><h3>Stock Blood List</h3></center>
        <center><div class="form">
            <table class='stock-blood'>
            
            <tr>
            <td><center><b>B_Group</center></td>
            <center><td><b>QTY</b></td></center>
            </tr>
            <tr>
            <center><td>O+</td></center>
            <center><td>
                <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='O+'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            
            </tr>
            <tr>
            <center><td>O-</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='O-'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            
            <tr>
            <center><td>A+</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='A+'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            <tr>
            <center><td>A-</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='A-'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            <tr>
            <center><td>B+</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='B+'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            <tr>
            <center><td>B-</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='B-'");
                echo $row=$q->rowcount();
                ?>
            </td></center> 
            </tr>
            <tr>
            <center><td>AB+</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='AB+'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            <tr>
            <center><td>AB-</td></center>
            <center><td>
            <?php
                $q=$db->query("SELECT * FROM donor_reg WHERE blood_group='AB-'");
                echo $row=$q->rowcount();
                ?>
            </td></center>
            </tr>
            </table>
        </div>
        </center>
        </section>

        
        <!--***************************** ***********
        footer
        ********************************************* -->
        <section class="footer">
            <div class="copyright">
            <span>Copyright@</span><strong> team_undefined</strong>
            </div>
            <!-- logout portion -->
            <div class="logout">
            <p><a href="logout.php">Logout</a></p>
            </div>
        </section>
        </div>
    </div>
</body>
</html>