<?php

    $a = "programmer.uz";

    echo $a;

    $str = 'programmer.uz';

    echo $str;

    $name = "Bill Gates";

    echo "Hello, $name";

    echo strtoupper("programmer.uz");

    print_r( explode(" " ,  "Welcome to Uzbekistan"));

    $username = "admin";

    $password = "123";

    if ($username == "admin" && $password == "123") {
        echo "Welcome";
    }
    else{
        echo "username or password is incorrect";
    }

    for ($i=0; $i < 5; $i++) { 
        echo $i . "<br/>";
    }
    echo "i ning oxirgi qiymati:" . $i;


?>