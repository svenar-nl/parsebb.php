# parsebb.php
Parse BBCode to HTML
## Usage:
```
<?php
include('parsebb.php');
$markup = new markup();
$stringToParse = '[quote=someuser][b]I am in bold![/b][/quote]';
$markup->parseBB($stringToParse);
?>
```
