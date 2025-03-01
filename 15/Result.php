<html>
  <body>
    <?php
      $r = $_POST['no'];
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("marklist");
      $query = "select * from students where regno='$r'";
      $result = mysql_query($query);
      echo "<center>";
      echo "<h1>Marklist</h1>";
      echo "<p>Reg no: " . $row['regno'] . "</p>";
      echo "<p>Name: " . $row['name'] . "</p>";
      echo "<p>Marks</p>";
      echo "<p>ASP: " . $row['asp'] . "</p>";
      echo "<p>OS: " . $row['os'] . "</p>";
      echo "<p>GRADE: " . $row['grade'] . "</p>";
      echo "</center>";
    ?>
  </body>
</html>
