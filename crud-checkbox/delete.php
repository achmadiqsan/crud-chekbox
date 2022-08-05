<?php
  include "koneksi.php";
  $siswaID=$_GET['id'];
  // $query=mysql_query("DELETE FROM siswa WHERE SiswaID='$siswaID'");
  $query=mysqli_query($con,"DELETE FROM siswa WHERE SiswaID='$siswaID'");
  if ($query) {
   header("location:index.php");
  } 
?>