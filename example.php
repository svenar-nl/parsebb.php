<?php
  // Include the library
  include('parsebb.php');
  
  // Define $markup for BBParsing
  $markup = new markup();
  
  // The input string
  $stringToParse = '[quote=someuser][b]I am in bold![/b][/quote]';
  
  // Some magic
  $markup->parseBB($stringToParse);
  
  // The output string
  echo $markup->getBB();
?>
