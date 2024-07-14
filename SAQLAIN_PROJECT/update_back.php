
<?php
include "CONNECTION.PHP";

$uid = $_POST['modify'];
$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$p_language = $_POST['program'];
$password = $_POST['pass'];
$course = $_POST['course'];
$language =  implode(",", $_POST['lang']);

$image = $_FILES['img']['name'];
$upload_path = 'upload/'.$image;
$source_path = $_FILES['img']['tmp_name'];


if (move_uploaded_file($source_path, $upload_path)) {
	
$insertdata = mysqli_query($joint,"UPDATE `practice` SET `name`='$name',`number`='$number',`email`='$mail',`age`='$age',`p_language`='$p_language',`password`='$password',`course`='$course',`language`='$language',`image`='$upload_path' WHERE id = '$uid'") or die(mysqli_error($joint));
   

if ($insertdata) {
    
    header('location:display.php');
    
} else {
    # code...
    // echo "data not update";
    die( "data inserted failed" .mysqli_connect_error());
}
}




?>


