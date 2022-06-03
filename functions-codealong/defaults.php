<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Default Argument Values</title>
  </head>
  <body>

<?php
//*no value assigned can make it mandatory and that will make it not work properly
function paint($room="office",$color="red") {
return " the color of the room is {$color}.<br/>";
}
echo paint();
//if it does not receive a color it will use the default which has been assigned to $color in the parameters
echo paint ("bredroom","blue");
echo paint ("bedroom",null);
echo paint ("bedroom",null)
echo paint ("bedroom");
echo paint ("blue");
//defaults only take place if there is nothing not even null in the designated spot.
//* make sure to put most important value first leaving them out will not work
?>



  </body>
</html>
