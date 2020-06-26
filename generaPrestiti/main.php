<?php
    $connection = mysqli_connect("127.0.0.1","root","", "Biblioteca");

    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }

    //Vengono contati tutti gli studenti pesenti nel database
    //da cui verranno poi creati gli indici

    $sqlStudente = "SELECT COUNT(*) FROM STUDENTE";
    $resultStudente=mysqli_query($connection,$sqlStudente);
    while ($row=$resultStudente->fetch_row()) {
        $count = $row[0];
    }

    //Contate le copie
    $sqlCopia="SELECT COUNT(*) FROM COPIA";
    $resultCopia=mysqli_query($connection,$sqlCopia);
    while ($row1=$resultCopia->fetch_row()) {
        $count1 = $row1[0];
    }


    //Data di inizio generazione
    $start = strtotime("5 May 2020");

    //Data di fine generazione
    $end = strtotime("5 June 2020");



    //inizio generazione dei prestiti
    //Si assume che se un libro ritorna allora il prestito
    //viene eliminato dal database

    for($i = 0; $i < 150; $i++) {
        //tramite l'offset vengono generati gli studenti casualmente
        $offset = rand(0, $count - 1);
        $sql2 = "SELECT MATRICOLA FROM STUDENTE LIMIT 1 OFFSET $offset";
        $result2 = mysqli_query($connection, $sql2);
        $studente = mysqli_fetch_array($result2);



        $offset1 = rand(0, $count1 - 1);
        $sql3 = "SELECT ISBN,NUMERO_COPIA FROM COPIA LIMIT 1 OFFSET $offset1";
        $result3 = mysqli_query($connection, $sql3);
        $libro = mysqli_fetch_array($result3);

        $controllo = false;

        //generazione data nel range di data
        $timestamp = mt_rand($start, $end);

        //query che prende isbn e numero copia dei libri gia in prestito
        $sqlControllo = "SELECT ISBN,NUMERO_COPIA FROM PRESTITO";
        $resultControllo = mysqli_query($connection, $sqlControllo);

        //Scorrendo tutto il ciclo si verificano i libri gia in prestito così da evitare la generazione di duplicati

        while($prestiti = mysqli_fetch_array($resultControllo)){
            if(strcmp($prestiti['ISBN'], $libro['ISBN']) == 0 && strcmp($prestiti['NUMERO_COPIA'], $libro['NUMERO_COPIA']) == 0){
                $controllo = true;
                //echo $prestiti['ISBN']." è uguale a ".$libro['ISBN'];
                // echo $prestiti['NUMERO_COPIA']." è uguale a ".$libro['NUMERO_COPIA'];
            }
        }
        //controllo per verificare se sono gia in prestito il libro
        //e il numero della copia appena generati
        if ($controllo == true){
            continue;
        }

        //output finale
        echo "INSERT INTO PRESTITO VALUES('".$libro['ISBN']."', ".$libro['NUMERO_COPIA'].", '".$studente['MATRICOLA']."', '".date("Y-m-d", $timestamp)."');"."<br>";

    }

    mysqli_close($connection);
?>
