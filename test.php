<?php
    $string = file_get_contents("employees.json");
    $json_a = json_decode($string, true);  

    foreach ($json_a['employees'] as $employee) {
        echo ($employee['id']);
    }