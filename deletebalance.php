<?php

//Recieve the incoming raw POST request from the Javascript end
$content=file_get_contents("php://input");

//Decode the content
$decodedContent=json_decode($content);

//The database connection credentials
$con = new mysqli("localhost","root", "", "ypan");

$sqlquery = "DELETE FROM bankbalance WHERE id = '$decodedContent->id'";

$result = mysqli_query($con, $sqlquery);

//Create a new PHP object (i called it $response) from the standard stdClass 
$response = new stdClass();

if($result){
    $response->status = 1;

    $response->msg = "success";

    echo json_encode($response);
}else{
    $response->status = 0;

    $response->msg = "failure";

    echo json_encode($response);
    //echo json_encode($con->error);
}

