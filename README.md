# parsebb.php
Parse BBCode to HTML by Sven Arends
## Usage:
```
<?php
  include('parsebb.php');
  $markup = new markup();
  $stringToParse = '[quote=someuser][b]I am in bold![/b][/quote]';
  $markup->parseBB($stringToParse);
  echo $markup->getBB();
  // See 'example.php' For the commented version
?>
```
