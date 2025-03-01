<html>
  <body>
    <?php
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("ph");
      $r=$_POST['accno'];
      $query = "update account set amount = amount + 240 where accno='$r'";
      $result=mysql_query($query);
      if(mysql_query_rows()==1){
      }
      else
      {
        
      }
    ?>
  </body>
</html>
