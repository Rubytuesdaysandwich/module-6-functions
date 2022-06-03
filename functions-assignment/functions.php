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

        part 3:
        <?php
        function str_var($str1,$str2,$str3,$str4){//declaring string variables

        }
        
        
        ?>


  </body>
</html>
