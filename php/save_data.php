<?php
    // Description: Stores user data in a json file.

    // Get username and password by post method
    $json_data = file_get_contents('php://input');
    $new_user = json_decode($json_data, true);

    // Get the users from the 'users.json' file
    $json_users = file_get_contents('../data/users.json');
    $users = json_decode($json_users, true);

    // We add the new user
    array_push($users, $new_user);
    file_put_contents('../data/users.json', json_encode($users));
?>