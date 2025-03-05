<?php
  session_start();
  unset($_SESSION['txtname']);
  unset($_SESSION['txtpassword']);
  echo "You have cleared your session.";
  echo "Redirecting in 5 seconds....";
  header("refresh:4;url=Loginsession.html");
?>
