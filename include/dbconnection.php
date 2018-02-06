<?php

 
  $dbconn = mysqli_connect("localhost", "root", "", "ostrepo");
                if (!$dbconn){
                    die("Connection Failed: ".mysqli_connect_error);
                }else{
                    //echo 'Connected Succesfully';
                }


?>