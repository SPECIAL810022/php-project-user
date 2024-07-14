 <?php
 session_start();
 if (isset($_SESSION['name'])) {
     # code...
    echo "you are alredy loged in";
    header("location:HOME.PHP");
 };

 
 include"CONNECTION.PHP";

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password =$_POST['pass'];

    $datasearch = "SELECT * FROM `practice` WHERE  email='$mail' AND password='$password' ";

    $query = mysqli_query($joint,  $datasearch);
    $return =mysqli_fetch_array( $query);
 

    //this is the main part of session query
    $_SESSION['name'] = $return['name'];
    $_SESSION['number'] = $return['number'];
    $_SESSION['email'] = $return['email'];
    $_SESSION['age'] = $return['age'];
    $_SESSION['p_language'] = $return['p_language'];
    $_SESSION['password'] = $return['password'];

    $row = mysqli_num_rows($query);

    if ($row > 0) {
        # code...
        echo "log in successful";
        header("location:HOME.PHP");
    } else {
        # code...
        // echo "log in failed";
        die(mysqli_connect_error());
    }
}
    

?> 