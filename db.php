<?php
    // create db connection
    $conn = mysqli_connect('localhost', 'root', 'linchegary_27', 'php blog');

    // check connection
    if (mysqli_connect_errno()) {
        // conection failed
        echo 'Failed to connect to MySQL'.mysqli_connect_errno();
    }
?>