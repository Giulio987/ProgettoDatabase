<?php
  $connection = mysqli_connect("127.0.0.1","root","","Biblioteca");

  if(!$connection){
    echo "<br><b>Non si connette".PHP_EOL;
    echo "<br><b>Codice errore: ".mysqli_connect_errno().PHP_EOL;
    echo "<br><b>Messaggio errore: ".mysqli_connect_error().PHP_EOL;
  exit(-1);
  }

  function get_post($connection, $var){
    return $connection->real_escape_string($_POST[$var]);
  }
?>
