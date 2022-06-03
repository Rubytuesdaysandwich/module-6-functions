<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Functions: assignment</title>
  </head>
  <body>
     part 1:
      <?php
        function hello(){
          echo "Hello, World!";
        }
        hello();
        ?>
        <br/>
        part 2:
        <?php
        function rect_area ($length , $width){//declaring function length and width
          $area =$length * $width;
          echo "A rectangle of length {$length} and width {$width} has an area of {$area}.";//outputting result to the browser
          return;
        }
      rect_area(5,6);//calling function  
        ?>
<br/>
        part 3:
        <?php
        function str_var($str1="Hello",$str2="Beautiful",$str3="world",$str4="!"){//declaring string variables
          echo "<table border =\"2\" style='border-collapse: collapse'>";//table
          echo  "<tr>";//table row
            echo  "<td>$str1</td>";//table data box
            echo  "<td>$str2</td>";//table data box
            echo  "<td>$str3</td>";//table data box
            echo  "<td>$str4</td>";//table data box
          echo  "</tr>" ;//table row
         echo "</table>";//table end
        }
        str_var();//calling function with default values
        str_var('Hello','how', 'are', 'you');//calling function with values passed to the function
        ?>
      <br/>
      part 4:
      <?php
       function hola($arg1){//declared hola function and gave it an argument
        echo "Hello, World!";
      }
      hola("hi");//calling hola function
      
      function area_of_rect ($l , $w){//declaring function length and width
        $a =$l * $w;
        echo "A rectangle of length {$l} and width {$w} has an area of {$a}.";//outputting result to the browser
        return;
      }
      area_of_rect(5,6);//calling function  
      
      ?>

  </body>
</html>
