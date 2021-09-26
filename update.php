<?php
    require_once 'connection.php';
    $data = json_decode(file_get_contents("php://input"));
    $name = $data->name;
    $age = $data->age;
    $phone = $data->phone;
    $email = $data->email;
    $id = $data->id;

    $query = "CALL st_updateUser('$name',$age,'$phone','$email',$id)";
    if(mysqli_query($connect,$query))
    {
        $response["msg"] = "User Updated Successfully";
    }
    else
    {
        $response["msg"] = "Failed to Update Record";
    }
    echo json_encode($response);
?>