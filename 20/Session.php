<?php
  ob_start();
  session_start();
?>
<?php
  $u = $_POST['txtname'];
  $p = $_POST['txtpassword'];
  mysql_connect("localhost", "root", "tiger");
  mysql_selectdb("Inventory");
  $query = "selecct * from members where username='$u' & passwword = '$p';";
  $result= mysql_query($query);
  $nos = mysql_num_rows($result);
  if($nos == 1){
    echo "$u, you are successfully logged-in";
  }
  else{
    echo "Access denie";
  }
?>
