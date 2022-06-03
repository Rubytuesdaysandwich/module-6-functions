<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Return Values</title>
  </head>
  <body>

<?php
function add ($val1,$val2) {
    $sum= $val1 + $val2;
    return $sum;//returns it back to us allowing us to access the function from outside the function.
    //best practice is to have a return value in your functions even if it is null
    //return exits the function immediately.This is the item that needs to be passed outside the function.
}
$result1 = add (3,4);// 3+4 = 7
$result2 = add(5,$result1); // 5+7
echo $result2;
?>
<br/>
<?php
//chinese zodiac as a function
function chinese_zodiac($year){
switch(($year - 4 )%12){
    case 0: return 'Rat';
    case 1: return 'Ox';
    case 2: return 'Tiger';
    case 3: return 'Rabbit';
    case 4: return 'Dragon';
    case 5: return 'Snake';
    case 6: return 'Horse';
    case 7: return 'Goat';
    case 8: return 'Monkey';
    case 9: return 'Rooster';
    case 10: return 'Dog';
    case 11: return 'Pig';
}


}
$zodiac = chinese_zodiac(2013);//being applied to the $zodiac variable.//!the variable not required can be done like the one below. 
echo "2013 is the year of the {$zodiac}.<br/>";
echo "2027 is the year of the ". chinese_zodiac(2027)."<br/>";//this one is not using a variable it is using the function name and concatenating it.
?>



  </body>
</html>
