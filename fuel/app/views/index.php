<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>

<ul>
<?php
    foreach ($articles as $a)
    {
        echo '<li>'.$a->title.'</li>';
    }
?>
</ul>
  </body>
</html>
