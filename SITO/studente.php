<?php

    $connection = mysqli_connect("127.0.0.1","root","");

    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }


    $matricola=$_POST['matricola'];
    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $telefono=$_POST['telefono'];
    $via=$_POST['via'];
    $civico=$_POST['civico'];
    $cap=$_POST['cap'];
    $citta=$_POST['citta'];


    if(!is_numeric($matricola)){
      echo "Inserire Una Matricola Valida";
      exit(-1);
    }
    //a prescindere che inizi con zero o meno è sempre un numero
    if(!is_numeric($telefono)){
      echo "Inserire un numero di telefono Valido";
      exit(-1);
    }
    if(strlen($matricola) < 10){
      $insertZero = "";
      for($i = 0; $i < (10- strlen($matricola)); $i++){
        $insertZero = "0".$insertZero;
      }
      $matricola = $insertZero.$matricola;
    }
    echo $matricola;
    //$ins_studente="INSERT INTO STUDENTE VALUES('$matricola','$nome','$cognome','$telefono','$via','$civico','$cap','$citta')";
    //if(!$result) echo "Inserimento Fallito" $ins_studente<br>".$connection->error."<br>";

    mysqli_close($connection);
    ?>
