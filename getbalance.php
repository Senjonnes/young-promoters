<?php
$con = new mysqli("localhost","root", "", "ypan");

$sqlquery = "SELECT * FROM bankbalance";
$result = mysqli_query($con, $sqlquery);

$json_array = array();

while($row=mysqli_fetch_assoc($result)){
	$json_array[] = $row;
}	

echo json_encode($json_array);