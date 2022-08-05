<?php
  // mysql_connect("localhost","root","");
  // mysql_select_db("akademik");
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "akademik";
  $con = mysqli_connect($host,$user,$password,$db) or die(mysqli_error());
 ?>