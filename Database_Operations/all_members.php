<?php

    include '../Database_Operations/Connection.php';
    $connection = new Connection();
    $connect = $connection->Connect();

    $sql = "SELECT * FROM members";

    $result = mysqli_query($connect, $sql);

    if (!$result)
    {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }

?>