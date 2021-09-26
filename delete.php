<?php
    require_once 'connection.php';
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;

    $query = "CALL st_deleteUser($id)";
    if(mysqli_query($connect,$query))
    {
        $response["msg"] = "User  Successfully Deleted";
    }
    else
    {
        $response["msg"] = "Failed to Delete User Record";
    }
    echo json_encode($response);
?>