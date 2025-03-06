<?php
  ob_start();
  session_start();
?>
<?php
  $u = $_POST[ 'txtname' ];
  $p = $_POST[ 'txtpassword' ];
  mysql_connect("localhost", "root", "tiger");
  mysql_selectdb("Inventory");
  $query = "SELECT * FROM members WHERE username = '$u' AND password = '$p'";
  $result = mysql_query($query);
  $nos = mysql_num_rows($result);
  if($nos == 1){
    echo "$u, you have successfully logged-in";
  }
  else{
    echo "Access denie";
  }
?>
