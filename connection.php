<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'zaq12wsx';
         $db     = 'prana';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

         if($mysqli->connect_errno ) {
            echo "Connect failed: .$mysqli->connect_error.<br />";
            exit();
         }
         // echo "connected";
         $mysqli->close();
?>
