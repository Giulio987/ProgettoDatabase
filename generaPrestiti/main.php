<?php
    $connection = mysqli_connect("127.0.0.1","root","", "Biblioteca");
    
    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }
    
    $sql1="SELECT COUNT(*) FROM STUDENTE";
    $result1=mysqli_query($connection,$sql1);
    while ($row=$result1->fetch_row()) {
        $count = $row[0];
    }
    
    $sql3="SELECT COUNT(*) FROM COPIA";
    $result3=mysqli_query($connection,$sql1);
    while ($row=$result3->fetch_row()) {
        $count = $row[0];
    }
    
    
    
    
    
    
    for($i = 0; $i < 150; $i++) {
        $offset = rand(0, $count - 1);
        $sql2 = "SELECT MATRICOLA FROM STUDENTE LIMIT 1 OFFSET $offset";
        $result2 = mysqli_query($connection, $sql2);
        $studente = mysqli_fetch_array($result2);
        
        
        
        $offset1 = rand(0, $count - 1);
        $sql3 = "SELECT ISBN,NUMERO_COPIA FROM COPIA LIMIT 1 OFFSET $offset";
        $result3 = mysqli_query($connection, $sql3);
        $libro = mysqli_fetch_array($result3);
        
        
        
        
        echo "INSERT INTO COPIA VALUES(' ".$studente['MATRICOLA']."', '".$libro['ISBN']."', '".$libro['NUMERO_COPIA']."');"."<br>";
    }
    mysqli_close($connection);
    ?>