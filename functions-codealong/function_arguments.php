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
    $name="John Doe";//taking place of $word in the say_hello_to function defining variable $name to John Doe
    say_hello_to($name);
    ?>

    <?php
    function better_hello($greeting, $target, $punct){//Defining better hello function with 3 arguments
        echo $greeting . " " . $target . $punct . "<br />";
    }
    
    better_hello("Hello",$name,"!");//call better hello function
    better_hello("Greetings",$name,"!!!");//call better hello function

    better_hello("Greetings",$name, null);//call better hello function
    ?>
    <?php
    //!using function arguments we can create our own arguments similar to what php has pre defined and give them our own rules to accomplish tasks in a block of code.
    ?>
  </body>
</html>
