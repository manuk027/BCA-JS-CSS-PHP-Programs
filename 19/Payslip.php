<html>
  <body>
    <?php
      $n=$_POST['txtname'];
      $d=$_POST['txtdesig'];
      $bs=$_POST['txtbasalay'];
      switch($d){
        case manager: 
          $ca = 100;
          $extra = 500;
          break;
        case supervisor: 
          $ca = 750;
          $extra = 200;
          break;
        case peon:
          $ca = 250;
          $extra = 0;
          break;
      }
      $hra = $bs * (25/100);
      $gross = $bs + $hra + $ca + $extra;
      if($gross <= 2000){
        $intax = 0;
      }
      elseif($gross > 2500 || $gross <= 4000){
        intax = $bs * (3/100);
      }
      elseif($gross > 4000 || $gross <= 5000){
        intax = $bs * (5/100);
      }
      else{
        $intax = $bs * (8/100);
      }
      $net = $gross - $intax;
      echo "<center>";
      echo "Payslip<br><br>";
      echo "Name: $n <br>";
      echo "Designation: $d <br>";
      echo "Basic Salary: $bs <br>";
      echo "Conveyance Allowance: $ca <br>";
      echo "Extra Allowance: $extra <br>";
      echo "HRA: $hra <br>";
      echo "InGross: $gross <br>";
      echo "Incom-tax: $intax <br>";
      echo "Netpay: $net <br>";
    ?>
  </body>
</html>
