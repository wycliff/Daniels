<?php
include('./connect.php');
//var_dump(($_POST));
extract($_POST);

$sql = "SELECT * FROM `members` WHERE `Email`='".$Email."' AND `Number`='".$Number."'";
$result = mysql_query($sql);
$user = null ;

if($result)
{

	if(mysql_num_rows($result) > 0)
	{
		//echo "error";
		
	//}else if(mysql_num_rows($result)>0){

		$user = mysql_fetch_array($result);
   }

}



if($user)
{
	//Login succeeded
	$response = [
		'success' => 'true',
		'member' => $user 
	];
}
else
{
	//Login failed
	$response = [
		'success' => 'false',
		'error' => 'User not found'
	];
}

echo json_encode($response);
//echo json_encode($result);
?>