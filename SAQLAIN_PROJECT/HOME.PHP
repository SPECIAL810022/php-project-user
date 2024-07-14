<?php
session_start();
if (!isset($_SESSION['name'])) {
    
    echo "log out";
    header('location:INDEX.PHP');
} else {
    
    echo "<button><a href=LOG_OUT.PHP>logout</a></button>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
     #d1{
        text-decoration: underline;
        width: 40%;
        height: 60%;
        border: 2px solid black;
        text-align: justify;
        padding-left: 50px;
        background-color: aqua;



     }
   </style>

</head>
<body>
  <center><form id="d1">
      <h2>WELCOME MR...<?php echo $_SESSION['name'] ?></h2>
      <h2>your number is :: <?php echo $_SESSION['number'] ?></h2>
      <h2>your e-mail is :: <?php echo $_SESSION['email'] ?></h2>
      <h2>your age is :: <?php echo $_SESSION['age'] ?></h2>
      <h2>FAV_PROGRAMING is :: <?php echo $_SESSION['p_language'] ?></h2>
      <h2>your password is :: <?php echo $_SESSION['password'] ?></h2>
</center></form>

<div><a href="display.php"</a>GET FULL DEATAIL'S</div>
</body>
</html>