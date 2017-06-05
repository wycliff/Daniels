<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "daniels";

//creating a connection  and check it 

$conn = mysql_connect($server, $username, $password) //or die("Could not connect to database");
mysql_select_db($dbname);

echo "Connection Successful";

//check connection

if(!$conn) {
	die("Connection failed" .mysql_error());
	
}


//get values from form

if(isset($_POST["fname"])){

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$number=$_POST["number"];
}

else{
	
	echo "NOT SET";
}
//insert data into database
//$sql = "SELECT * FROM `members`"; 
$sql = "INSERT INTO `members`(`FName`, `LName`, `Number`, `Email`) VALUES (\"fname\",\"lname\",\"email\",\"number\")";

if(mysqli_query($conn,$sql)) {
	echo "New Member has been added !";
} 

else {
	echo "Error:" .$sql ."</br>".mysql_error($conn);
}

mysql_close($conn);

?>

