<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions:scope</title>
  </head>
  <body>
      <?php
      $bar = "outside"; //global scope
      
      function foo($bar){
          global $bar;//brings in the outside global variable into the function now the function has access to the global variable
          if(isset($bar)){//checking to see if $bar is a set variable
              echo "foo." . $bar . "<br/>";//if it is return foo
          }
          $bar = "inside";  //local scope 
           }
      echo "1:" .$bar . "<br/>"; //echoing the outside the variable 
      foo();
      echo "2:" .$bar . "<br/>";//echoing the inside variable
      //*A variable created within a function is only available in the function
      //* even though the variables have the same name they are different variables because of scope
      ?>
  </body>
</html>
