<?php
    include("index.html");
    function username($username){
        if($username == "amir"){
            echo "welcome amir";
        }
        else {
            echo "welcome {$username}";
        }
    }
?>