<?php
	$host = '*';
	$user = '*';
	$pass = '*';
	$database='picture_upload';

	$conn=mysql_connect($host, $user, $pass);

	if($conn){
		$db_selected = mysql_select_db($databasename, $conn);
		if (!$db_selected) {
    		die ('Can\'t use foo : ' . mysql_error());
		}
		echo("Connection Successful");
	}
	else{
    	die('Not connected : ' . mysql_error());
	}
?>

<!-- <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?> -->