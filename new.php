<?php
     $username = $_POST['username'];
     $password = $_POST['password'];

     $user = "localhost";
     $pass = "";
     $db = "snakegameprogress";

     $conn = mysqli_connect($user, $pass, $db);
     if ($conn) {
       echo "database connected successfully";
     } else {
       die "Error connecting database".mysqli_error();
     }


    $add_database = insert($username, $progress) values("prasanth", $score);  # inserting the game score dynamically by php

    if ($add_database) {
        echo "game progress saved successfully";
    } else {
      die "error saving progress".mysqli_error();
    }


?>
