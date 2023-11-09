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
        <center><h3>Donor Registration</h3></center>
        <center><div class="form">
            <form action=""method="POST">
            <table>
                <tr>
                    <!-- <td>Enter Name</td> -->
                    <td><input type="text" name="name" placeholder="Enter Name"></td>

                    <!-- <td>Enter Father's Name</td> -->
                    <td><input type="text" name="father_name" placeholder="Enter Father's Name"></td>

                    <!-- <td>Enter City</td> -->
                    <td><input type="text" name="city" placeholder="Enter City"></td>

                    <!-- <td>Enter Address</td> -->
                    <td ><textarea name="address" placeholder="Your Address"></textarea></td>
                    <!-- <td>Enter Age</td> -->
                    <td><input type="number" name="age" id="" placeholder="Enter Age"></td>

                 
                    <td><input type="email" name="email" id="" placeholder="Enter Your Email"></td>
                    <td><input type="number" name="phone_num" id="" placeholder="Enter Your Mobile Number"></td> 
                <!-- <td>Select Blood Group</td> -->
                    <td>
                        <select name="blood_group" id="">
                        <option>Blood Group</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        
                    </select>
                    </td>
                <td><button name="sub" id="save-btn" type="submit" value="Save">Submit</button>
                </td>
            </tr>
            </table>
        </div></center>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            $name=$_POST['name'];
            $father_name=$_POST['father_name'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $age=$_POST['age'];
            $email=$_POST['email'];
            $phone_num=$_POST['phone_num'];
            $blood_group=$_POST['blood_group']; 
            // insert donor details
            // prepare statement using for secure query from hacking (sql .......attack) direct value pass hobena//
            $q=$db->prepare("INSERT INTO donor_reg (name,father_name,city,address,age,email,phone_num,blood_group) VALUES(:name,:father_name,:city,:address,:age,:email,:phone_num,:blood_group)");

            $q->bindValue('name',$name);
            $q->bindValue('father_name',$father_name);
            $q->bindValue('city',$city);
            $q->bindValue('address',$address);
            $q->bindValue('age',$age);
            $q->bindValue('email',$email);
            $q->bindValue('phone_num',$phone_num);
            $q->bindValue('blood_group',$blood_group);
            if($q->execute())
            {
                echo "<script>alert('Donor Registration Successful')</script>";
            }
            else{
                echo "<script>alert('Donor Registration Failed')</script>";
            }

            
        }
       
        ?>
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