<?php

    $conn = mysqli_connect('sql113.infinityfree.com', 'if0_36745334', '2hvGOZS0Nj8l5sq', 'if0_36745334_internnet_database');

    $getUsers = 'SELECT * FROM users';

    $users = mysqli_fetch_assoc(mysqli_query($conn, $getUsers));

    echo json_encode($users['username']);
