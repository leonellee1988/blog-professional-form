<?php

    $my_country = $_GET["countryList"];
    $my_age = $_GET["age"];
    $my_gender = $_GET["gender"];
    $my_education = $_GET["education"];
    $my_work = $_GET["work"];
    $my_rate = $_GET["rate"];

    $my_host = "localhost";
    $my_user = "root";
    $my_password = "";
    $my_db = "my_blog_form";

    $my_conection = mysqli_connect($my_host, $my_user, $my_password, $my_db);

    $my_query = "INSERT INTO my_visitors(COUNTRY, AGE, GENDER, EDUCATION, WORK, RATE) 
    VALUES ('$my_country', $my_age, '$my_gender', '$my_education', '$my_work', $my_rate)";

    $my_register = mysqli_query($my_conection, $my_query);

    if($my_register){
        echo "Information sent successfully";
    }else{
        echo "Error, the information was not sent";
    }

    mysqli_close($my_conection);

?>