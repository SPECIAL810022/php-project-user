
<?php
include "CONNECTION.PHP";


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
	
$insertdata = "INSERT INTO `practice`(`name`, `number`, `email`, `age`, `p_language`, `password`, `course`, `language`, `image`) VALUES ('$name','$number','$mail','$age','$p_language','$password','$course','$language','$upload_path')" or die(mysqli_error());
   

   $result = mysqli_query($joint, $insertdata);



if ($result) {
    # code...
    echo "data is inserted into the data base";
    header('location:INDEX.PHP');
} else {
    # code...
    echo "data is not insert";
    // die( "data inserted failed" .mysqli_connect_error());
}
}



?>