<?php
    include("index.html");
    function username($username){
        if($username == "ali"){
            echo true;
        }
    }
    function password($password){
        if(empty($password)){
            echo "something is missing";
        }
    }
?>