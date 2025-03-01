<html>
  <body>
    <?php
      $r=$_POST['no'];
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("marklist.db");
      $query="select * from students where regno='$r'";
      $result=mysql_query($query);
      echo "<center>";
      echo "<h1>Marklist</h1>";
      echo "<p>Reg no:$row[0]</p>";
      echo "<p>Name:$row[1]</p>";
      echo "<p>Marks</p>";
      echo "<p>ASP::$row[2]</p>";
      echo "<p>OS:$row[3]</p>";
      echo "<p>GRADE:$row[5]</p>";
      echo "</center>";
    ?>
  </body>
</html>
