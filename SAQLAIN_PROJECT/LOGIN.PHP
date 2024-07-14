<?php
 // session_start();
 // if (isset($_SESSION['name'])) {
 //     # code...
 //    echo "you are alredy loged in";
 //    header("location:HOME.PHP");
 // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <script>
        
         

    </script>
</head>
<body>
    <form action="LOGIN_BACK.PHP" method="post">
        <table>
            <label for="">E-MAIL::</label>
            <input type="text" name="mail" id="">
            <br><br>
            <label for="">PASSWORD::</label>
            <input type="password" name="pass" id="">
            <br><br>

            <button type="submit" name="submit" value="submit">LOG IN</button>
        </table>
    </form>

<!-- <?php
// include"CONNECTION.PHP";

// if (isset($_POST['submit'])) {
    // $mail = $_POST['mail'];
    // $password =$_POST['pass'];

    // $datasearch = "SELECT * FROM `practice` WHERE  email='$mail' AND password='$password' ";

    // $query = mysqli_query($joint,  $datasearch);
    // $return =mysqli_fetch_array($query);
 

    //this is the main part of session query
    // $_SESSION['name'] = $return['name'];
    // $_SESSION['number'] = $return['number'];
    // $_SESSION['email'] = $return['email'];
    // $_SESSION['age'] = $return['age'];
    // $_SESSION['p_language'] = $return['p_language'];
    // $_SESSION['password'] = $return['password'];

    // $row = mysqli_num_rows($query);

    // if ($row > 0) {
        # code...
        // echo "log in successful";
        // header("location:HOME.PHP");
    // } else {
        # code...
        // echo "log in failed";
        
    // }
// }
    

?> -->

</body>
</html>