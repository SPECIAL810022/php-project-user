<?php

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbase = "asif";

  $joint = mysqli_connect($server, $username, $password, $dbase);

  if ($joint) {
    # code...
    echo "data base connected successful";
  }
  else{
     die("data base connection is failed" .mysqli_connect_error());
  }

?>