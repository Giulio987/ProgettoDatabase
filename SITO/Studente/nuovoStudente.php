<?php
    $connection = mysqli_connect("127.0.0.1","root","");

    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }

    if(isset($_POST['matricola']) && isset($_POST['nome']) && isset($_POST['cognome'])){

    $matricola=get_post($connection, 'matricola');
    $nome=get_post($connection, 'nome');
    $cognome=get_post($connection, 'cognome');
    $telefono=get_post($connection, 'telefono');
    $via=get_post($connection, 'via');
    $civico=get_post($connection, 'civico');
    $cap=get_post($connection, 'cap');
    $citta=get_post($connection, 'citta');

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

    $ins_studente="INSERT INTO STUDENTE VALUES('$matricola','$nome','$cognome','$telefono','$via','$civico','$cap','$citta')";
    $result = mysqli_query($connection, $ins_studente);
    if(!$result){
        echo "Inserimento Fallito".$result."<br>".$connection->error."<br>";
    }
    echo "Inserimento ok";
    }
    
    mysqli_close($connection);



    function get_post($connection, $var){
      return $connection->real_escape_string($_POST[$var]);
    }
?>
