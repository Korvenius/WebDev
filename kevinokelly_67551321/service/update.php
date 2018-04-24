<?php
include 'conn.php';
//Update record in database

$id = $_POST['id'];
$column = $_POST['column'];
$input = $_POST['input'];


$query = "UPDATE `ass5` SET `$column`='$input' WHERE  `id`='$id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);