<?php 
    $users = array("ali","erfan","reza","mahdi");

    $usersobject = (object) $users;
    print_r($usersobject);

    echo "<hr>";

    $userstoarray = (array) $usersobject;

    print_r($userstoarray);

    echo "<hr>";

    $car = new stdClass;
    $car -> name = "audi";
    $car -> model = 2020;
    $car -> gear = "auto";
    print_r($car);
    echo $car -> model;
    foreach($car as $cars){
        echo $cars . "<br>";
    }
    print_r($car -> gear);

    echo "<hr>";

    $car3 = clone $car;
    $car3 -> name = "BMW";
    echo $car3 -> name . "<br>";
    echo $car -> name;
?>