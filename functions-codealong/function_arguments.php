<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Functions: Arguments </title>
  </head>
  <body>
    <?php
    function say_hello_to($word){
        echo "Hello {$word}!<br/>";//define say_hello_to
    }
    $name="John Doe";//taking place of $word in the say_hello_to function
    say_hello_to($name);
    ?>

    <?php
    function better_hello($greeting, $target, $punct){
        echo $greeting . " " . $target . $punct . "<br />";
    }
    
    better_hello("Hello",$name,"!");
    better_hello("Greetings",$name,"!");
    ?>
  </body>
</html>
