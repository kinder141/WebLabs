<?php 
  echo '<br><textarea readonly style="width: 400px; height:75px; display:block; margin:0 auto;">$_POST: ';
  foreach($_POST as $key=>$value)
  {
      echo $key.'->'.$value;
  }
  echo '</textarea>';
  echo '<br><textarea readonly style="width:  400px; height:150px; display:block; margin:0 auto;">$_GET: ';
  foreach($_GET as $key=>$value)
  {
      echo $key.'->'.$value;
  }
  echo '</textarea>';
  echo '<br><textarea readonly style="width:  400px; height:150px; display:block; margin:0 auto;">$_SERVER: ';
  foreach($_SERVER as $key=>$value)
  {
      echo $key.'->'.$value.'&#10';
  }
  echo '</textarea><br>';
?>
  