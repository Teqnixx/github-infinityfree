<?php

    $conn = mysqli_connect('localhost', 'root', '', 'internnet_database');

    $getUsers = 'SELECT * FROM users';

    $users = mysqli_fetch_assoc(mysqli_query($conn, $getUsers));

    echo json_encode($users['username']);