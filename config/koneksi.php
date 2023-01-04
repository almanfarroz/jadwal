<?php
    $conn = mysqli_connect("localhost","root","","mahasiswa");

    if(!$conn){
        echo "Connection Failed";
        die();
    }
    // else{
    //     echo "Connection Success";
    // }
?>