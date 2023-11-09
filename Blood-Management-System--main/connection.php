<?php
$db=new PDO('mysql:host=localhost;dbname=myproject_BBMS','root','');
if($db){
    echo("Database Connect");
}
else{
    echo("no connection");
}
?>