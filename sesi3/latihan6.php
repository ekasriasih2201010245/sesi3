<?php
    $mhs = array(
        array("ardika","2233445512","denpasar"),
        array("wahyu hidayat","1212311223","magelang"),
        array("eka","2201010245","karangasem"),
        array("nadya","2201010253","gianyar"),
    );
    header("content-type: application/json");
    echo json_encode($mhs);