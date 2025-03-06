<html>
  <body>
    <head>
      <title>Update Account</title>
    </head>
    <?php
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("ph");
      $r=$_POST[ 'accno' ];
      $query = "UPDATE account SET amount = amount + 240 WHERE accno = '$r'";
      $result=mysql_query($query);
      if(mysql_query_rows() == 1){
        echo "The specified row has been updated."
      }
      else
      {
        echo "Invalid entry!";
      }
    ?>
  </body>
</html>
