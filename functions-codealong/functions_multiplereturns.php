<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions:multiple returns</title>
  </head>
  <body>

  <?php
  Function add_subt($val1, $val2){
      $add = $val1 + $val2;
      $subt =$val1 - $val2;
      return array ($add,$subt); //but how can we return $subt too? //!functions will only allow us to pass back one item
//* we can however use an array to return both.
  }
  $result_array = add_subt (10,5);
  echo "Add: " . $result_array[0] . "<br/>";
  echo "subt: " . $result_array[1] . "<br/>";

  list($add_result, $subt_result) = add_subt(20,7);//better method to return multiple values out of your functions//more descriptive and easier to read
  echo "Add: " . $add_result . "<br/>";//adding 20 + 7
  echo "subt: " . $subt_result . "<br/>";//subt 20 - 7

  ?>



  </body>
</html>
