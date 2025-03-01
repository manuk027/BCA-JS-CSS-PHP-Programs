<html>
  <body>
    <?php
      mysql_connect("localhost", "root", "tiger");
      mysql_select_db("ph");
      $r = $_POST['accno'];
      $query = "delete from account where accountno = '$r';
      $result = mysql_query($query);
        if(mysql_affected()==1)
      {
        echo "The specified row has been updated";
      } 
      else 
      {
        echo "Invalid entry";
      }
    ?>
  </body>
</html>


<!-- 
use database ph;
create table account(accno varchar(20), name varchar(20), amount varchar(10));
insert into account values('01', 'Manu', '20000'), ('02', 'Sibin', '5000'), ('03', 'Vishnu', '10000'));
-->
