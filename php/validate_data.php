<?php
    // Description: Validate that the name does not exist.

    // Get username by post method
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);
    $username = $data['user'];

    // We convert the 'users.json' file to an associative array
    $json_users = file_get_contents('../data/users.json');
    $users = json_decode($json_users, true);
    
    // We check if the user exists
    $response = 0;
    foreach ($users as $user) {
        if ($user['user'] == $username) {
            $response = 1;
        }
    }

    // Returns an object with the property userExists
    echo '{"userExists": '.$response.'}';
?>