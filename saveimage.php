
 <?php
include("mysqlconnect.php");
?>
<?
	$file_name = $_FILES["myimage"]["name"];
	$temp_name = $_FILES["myimage"]["tmp_name"];
	$imagename=$file_name;
	$target_path = "images/".$imagename;
	echo($target_path);
	if(move_uploaded_file($temp_name, $target_path)) {
    	$query_upload="INSERT into 'images_tbl' ('images_path','submission_date') VALUES
			('".$target_path."','".date("Y-m-d")."')";
    
    	/*mysql_query($query_upload) or die('error in $query_upload == .mysql_error()); */
	}
	else{
   		exit("Error While uploading image on the server");
	}

?>
<html>
<body>
Upload Success
</body>
</html>