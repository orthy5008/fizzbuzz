<?php
for ($i = 1; $i <= 150; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz";
     echo PHP_EOL;
   }
  else if ( $i%3 == 0 ) 
  
  {
     echo $i. " Fizz";
     echo PHP_EOL;
  }
     else if ( $i%5 == 0 ) 
  {
     echo $i. " Buzz";
     echo PHP_EOL;
  }
     else
  {
     echo $i;
     echo PHP_EOL;
  }
  }
?>
