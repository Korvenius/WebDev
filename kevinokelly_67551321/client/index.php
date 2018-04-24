<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Assignment 5</title>
</head>
<body>


<div id="insert">
<h1>Add Data</h1>

	<form action="../service/insert.php" method="post">

		Name:<br>
		<input type="text" name="name"><br>
		URL:<br>
		<input type="text" name="URL"><br>
		Description:<br>
		<input type="text" name="description"><br>

		<input type="submit">

	</form>
</div>


<div id="delete">
<h1>Delete Data</h1>

	<form action="../service/delete.php" method="post">

		Input ID of row to be deleted:<br>
		<input type="text" name="id"><br>

		<input type="submit">

	</form>
</div>

<div id="update">
<h1>Update Data</h1>

	<form action="../service/update.php" method="post">

		Input ID of row to be updated:<br>
		<input type="text" name="id"><br>
		Input column to be changed:<br>
		<select name="column">
			<option value="name">Name</option>
			<option value="URL">URL</option>
			<option value="description">Description</option>
  		</select><br>
		Input new data:<br>
		<input type="text" name="input"><br>

		<input type="submit">

	</form>
</div>

<table style="width:100%">

	<tr>
	<th class="id">ID</th>
    <th class="date">Date</th>
    <th class="name">Name</th>
    <th class="URL">URL</th>
    <th class="description">Description</th>  
	</tr>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, date, name, URL, description FROM ass5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo

'
	<tr>		
		<td>'.$row["id"].'</td>
		<td>'.$row["date"].'</td>
		<td>'.$row["name"].'</td>
		<td>'.$row["URL"].'</td>
		<td>'.$row["description"].'</td>
	</tr>';


    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>


</body>
</html>
