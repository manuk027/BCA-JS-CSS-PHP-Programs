<html>
  <body>
    <?php
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("ph");
      $r = $_POST['ph'];
      $query = "delete from account where accountno = '$r';
      $result = mysql_query($query);
      if(mysql_affected()==1) {
        echo "The specified row has been updated";
      } else {
        echo "Invalid entry";
      }
    ?>
  </body>
</html>
