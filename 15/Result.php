<html>
  <body>
    <?php
      $r = $_POST['no'];
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("marklist");
      $query = "SELECT * FROM students WHERE regno='$r'";
      $result = mysql_query($query);
      echo "<center>";
      echo "<table>";
      while($row = mysql_fetch_row($result)){
        echo "<tr><td colspan="2" align="center"><b><u>Marklist</u></b></td></tr>";
        echo "<tr><td>RegNo:</td><td>{$row[0]}</td></tr>";
        echo "<tr><td>Name:</td><td>{$row[1]}</td></tr>";
        echo "<tr><td colspan="2" align="center"><b><u>Marks</u></b></td></tr>";
        echo "<tr><td>ASP:</td><td>{$row[2]}</td></tr>";
        echo "<tr><td>OS:</td><td>{$row[3]}</td></tr>";
        echo "<tr><td>Network:</td><td>{$row[4]}</td></tr>";
        echo "<tr><td>Grade:</td><td>{$row[5]}</td></tr>";
      }
      echo "</tables>";
      echo "</center>";
    ?>
  </body>
</html>
