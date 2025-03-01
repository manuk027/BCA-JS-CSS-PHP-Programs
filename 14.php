<html>
  <body>
    <h1>
      Fibonacci Series Generator  
    </h1>
    <form method="POST">
      <label for="terms">Enter number of terms</label>
      <input type="number" name="terms" min="1">
      <button type="submit">Generate</button>
    </form>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $terms = (int)$_POST['terms'];
        $fibonacci = array(0, 1);
        for ($i = 2; $i < $terms; $i++){
          $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }
        foreach($fibonacci as $i){
          echo $i . "<br>";
        }
      }
    ?>
  </body>
</html>
