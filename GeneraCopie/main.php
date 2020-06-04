<?php
    $connection = mysqli_connect("127.0.0.1","root","", "Biblioteca");
    
    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }
    
    $sql1="SELECT NOME_DIP FROM DIPARTIMENTO";
    $result1=mysqli_query($connection,$sql1);
    $dipartimenti =mysqli_fetch_array($result1);
    
    $sql2="SELECT ISBN FROM LIBRO";
    $result2=mysqli_query($connection,$sql2);
    
    while ($ISBN = mysqli_fetch_array($result2)){
        $randomNumeroCopie = rand(1,20);
        for($i = 1; $i <= $randomNumeroCopie; $i++){
            echo "INSERT INTO COPIA VALUES(\"".$i."\", \"".$ISBN['ISBN']."\",\"".array_rand($dipartimenti)."\");"."<br>";
        }
    }
    mysqli_close($connection);
    ?>