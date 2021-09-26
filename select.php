<?php
    require_once 'connection.php';

    $query = "CALL st_getUsers()";
    $response = array();
    $res = mysqli_query($connect,$query);
    if(mysqli_num_rows($res))
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $response[] = $row;
        }
    }
    else
    {
        $response["msg"] = "No Record Found";
    }
    echo json_encode($response);
?>