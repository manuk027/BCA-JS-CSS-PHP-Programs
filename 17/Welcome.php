<htmml>
  <body>
      <?php    
        $u = $_POST['txtname'];
        $p = $_POST['txtpassword'];
        mysql_connect("localhost", "root", "tiger");
        mysql_select_db("inventory");
        $query = "select * from users where username ='$u' & password = '$p'";
        $result = mysql_query($query);
        if(mysql_affected_rows()==1){
          $row == mysql_fetch_row($result);
          $n = row[0];
          session_start();
          $_session['name'] = $n;
          echo "Hello!";
          echo $session['name'];
          echo "<br>";
          session_destroy();
        }
        else{
          echo "Invalid login details";
        }
      ?>
  </body>
</html>
