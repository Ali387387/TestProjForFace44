<?php
    require_once 'connection.php';
    $data = json_decode(file_get_contents("php://input"));
    $name = $data->name;
    $age = $data->age;
    $phone = $data->phone;
    $email = $data->email;

    $query = "CALL st_insertUser('$name',$age,'$phone','$email')";
    if(mysqli_query($connect,$query))
    {
        $response["msg"] = "User Successfully Added";
    }
    else
    {
        $response["msg"] = "Failed to Add User";
    }
    echo json_encode($response);
?>