<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Define functions</title>
  </head>
  <body>
<?php
function say_hello(){//define say_hello
  echo "Hello World! <br/>";
}
say_hello();//calling say hello function

function say_hello_to($word){
  echo "Hello {$word}!<br/>";//define say_hello_to
}
say_hello_to("World");//calling say_hello_to function
say_hello_to("Everyone");//calling say_hello_to function

say_hello_loudly();

function say_hello_loudly(){
  echo "HELLO WORLD!<br/>";
}

// say_hello_loudly(){
//   echo "We can't redefine a function.";
// }
?>

  </body>
</html>
