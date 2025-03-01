<html>
  <body>
    <?php
      mysql_connect("localhost", "rooot", "tiger");
      mysql_select__db("inv");
      $query="select * from products";
      echo "<center>"
      while($row=,mysql_fetch_array($result)){
        echo "$row[0]";
        echo "$row[1]";
        echo "$row[2]";
      }
      echo "</center>";
      <input type="submit" name="stock" value="Back to Home" onclick = "window.location.href = 'Inventory.html';">
    ?>
  </body>
</html>
