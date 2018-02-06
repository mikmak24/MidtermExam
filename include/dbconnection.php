<?php

 
  $conn = mysqli_connect("localhost", "root", "", "ostrepo");
                if (!$conn){
                    die("Connection Failed: ".mysqli_connect_error);
                }else{
                    //echo 'Connected Succesfully';
                }


?>