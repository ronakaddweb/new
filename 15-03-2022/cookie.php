<?php
            if($_COOKIE["user"] == ''){
              $name =1;
            setcookie("user" , $name, time() + (3600));
            echo $_COOKIE["user"];
            }
            else{
              
             $name =  $_COOKIE["user"]; 
              $name++;
              setcookie("user" , $name, time() +(3600));
              echo $_COOKIE["user"];

            }
             
           
        ?>

