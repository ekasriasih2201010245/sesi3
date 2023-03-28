<?php
    //model 1
   // $age = array("peter"=>"35","ben"=>"37","joy"=>"43");

    //model 2
    $age["agus"] = "35";
    $age["agnes"] = "65";
    $age["nadya"] = "19";
    $age["sintha"] = "20";
    $age["dina"] = "18";


    header ("content-type: application/json");
    echo json_encode($age);