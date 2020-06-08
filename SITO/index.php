<?php
    $connection = mysqli_connect("127.0.0.1","root","");

    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }

    mysqli_close($connection);
    ?>
