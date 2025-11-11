<?php
session_start();
  $_SESSION["nama"] = $_POST["txtNama"];
  $_SESSION["email"] = $_POST["txtEmail"];
  $_SESSION["pesan"] = $_POST["txtPesan"];
  header(     "Location: post.php");
  echo $_SESSION["nama"] . $_SESSION["email"] . $_SESSION["pesan"];
?>