 <?php
//NB WE CAN USE include('db.php') wherever we want to use our database in the website - look up


//$conn_error="could not conect";


$host_server='localhost';
$username='root';
$password='';
$database_name="daniels";


//connecting to your database(option 1).
//@ removes in built error reporting and uses yours instead 

//@$conn=mysql_connect($server, $username,$password) or die($conn_error);
//@mysql_select_db($database_name) or die( $conn);



//connecting to database(option 2)
//$conn=mysql_connect($host_server, $username,$password);

//if($conn=mysql($host_server, $username,$password) && mysql_select_db($database_name) or die( $conn)){
//   echo "Connect to database";
//}
//else{
//	 die($conn_error);
//}
 

//option 3

// Create connection
$conn = mysqli_connect($host_server, $username, $password, $database_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//get values from forms   (where proble is)

if(isset($_POST["submit"])){

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$number=$_POST["number"];

echo "VALUES FROM FORM GOTTEN\n";
}

else{
	
	echo "\n NOT SET";
}


//insert data into database
//$sql = "SELECT * FROM `members`"; 
$sql = "INSERT INTO `members`(`FName`, `LName`, `Number`, `Email`) VALUES ('$fname','$lname','$number','$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>





