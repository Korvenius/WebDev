<?php
include 'conn.php';
//Select data from database


$getData = "select * from ass5";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

$msg[] = array("name" => $r['name'], "URL" => $r['description']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>