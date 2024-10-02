<?php
    $con = new mysqli('localhost', 'root', '161903', 'customcars');
    if(!$con){
        die(mysqli_error($con));
    }
    
?>