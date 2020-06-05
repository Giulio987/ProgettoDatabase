<?php
    $connection = mysqli_connect("127.0.0.1","root","", "Biblioteca");
    
    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }
    
    $sql1="SELECT COUNT(*) FROM DIPARTIMENTO";
    $result1=mysqli_query($connection,$sql1);
    while ($row=$result1->fetch_row()) {
        $count = $row[0]; 
    }
    
    $sql3="SELECT ISBN FROM LIBRO";
    $result3=mysqli_query($connection,$sql3);
    
    while ($ISBN = mysqli_fetch_array($result3)) {
    $randomNumeroCopie = rand(1, 20);

    $offset = rand(0, $count - 1);
    $sql2 = "SELECT NOME_DIP FROM DIPARTIMENTO LIMIT 1 OFFSET $offset";
    $result2 = mysqli_query($connection, $sql2);
    $dip = mysqli_fetch_array($result2);


    for ($i = 1; $i <= $randomNumeroCopie; $i++) {
        echo "INSERT INTO COPIA VALUES(\"" . $i . "\", \"" . $ISBN['ISBN'] . "\",\"" . $dip['NOME_DIP'] . "\");" . "<br>";
    }
}
mysqli_close($connection);
?>