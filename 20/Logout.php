<?php
  session_start90;
  unset($_SESSION['txtname']);
  unset($_SESSION['txtpassword']);
  echo "you have cleared your session";
  echo "Redirecting in 5 seconds....";
  header("refresh:4:url=Loginsession.html");
?>
