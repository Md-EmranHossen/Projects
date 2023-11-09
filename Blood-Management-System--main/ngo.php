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
        <a href="admin-home.php"><h2>Blood Bank Management</h2></a>
        </section>
       
        <br><br>
        <!-- *******************************************
        body 
        ************************************** -->
        <ul>
            <li><a href="https://bdrcs.org/donate-blood/">Red Crescent</a></li>
            <li><a href="https://daktarbhai.com/health-directory/blood-bank">Daktar bhai(list of blood bank)</a></li>
            <li><a href="https://bloodcare.pathwaybd.org/">Pathway Blood</a></li>
            <li><a href="https://blood.quantummethod.org.bd/en">Quantum Voluntary Blood Donation Program</a></li>
            <li><a href="https://www.blfbd.org/page/54">Blood Bank (Ec)</a></li>
            <li><a href="https://hopes.org.bd/our-work/health/blood-donation-program/">HOPES Foundation</a></li>
            <li><a href="https://www.thals.org/">Bangladesh Thalassemia Foundation</a></li>
        </ul>
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