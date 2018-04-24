<?php
include 'conn.php';

$name = $_POST['name'];
$URL = $_POST['URL'];
$description = $_POST['description'];

$sql = "INSERT INTO `assignment5`.`ass5` (`name`, `URL`, `description`) VALUES ('$name', '$URL', '$description');";

if ($connection->query($sql)) {
$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);

header("location: ../client/index.php");

?>