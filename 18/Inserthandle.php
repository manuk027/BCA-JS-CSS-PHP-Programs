<html>
  <body>
    <?php
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("inv");
      $id = $_POST['txtid'];
      $item = $_POST['txtitem'];
      $price = $_POST['txtprice'];
      $query = "insert into product values('$id', '$item', '$price')";
      $result = mysql_query($query);
      if(mysql_affected_rows()==1){
        echo"<h3>Product information has been successfully updated</h3>";
      }
      else{
        echo "<h3>Data cannot be added</h3>";
      }
    ?>
    <input type="submit" name="back" value="Go Back" onclick = "window.location.href = 'Inventory.html';">
  </body>
</html>
