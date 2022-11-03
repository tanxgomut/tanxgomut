<?php

    $conn = new mysqli('mysql_db', 'root', 'root', 'test_docker_db');

    if($conn){
        echo "connectd !!";
    }

?>