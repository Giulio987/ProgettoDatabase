<html>
    <head>
        <script src='https://code.jquery.com/jquery-3.5.1.min.js'>
        </script>
    </head>
    <body>
        <form action="Studente/nuovoStudente.php" method="POST" id='form'>

            <fieldset>
            <label>Matricola: <input id ='matricola' type='text' name='matricola'></label><br>
            </fieldset>

            <fieldset>
            <label>Nome: <input id ='nome' type='text' name='nome'></label><br>
            </fieldset>

            <fieldset>
            <label>Cognome: <input id ='cognome' type='text' name='cognome'></label><br>
            </fieldset>

            <fieldset>
            <label>Numero di telefono: <input id ='telefono' type='tel' name='telefono'></label><br>
            </fieldset>

            <fieldset>
            <label>Via: <input id ='via' type='text' name='via'></label><br>
            </fieldset>

            <fieldset>
            <label>Civico: <input id ='civico' type='text' name='civico'></label><br>
            </fieldset>

            <fieldset>
            <label>CAP: <input id ='cap' type='text' name='cap'></label><br>
            </fieldset>

            <fieldset>
            <label>Città: <input id ='citta' type='text' name='citta'></label><br>
            </fieldset>


            <input type='submit' value="Invia">
        </form>
        <script>
            $('#form').submit(function(){
                if($('#nome').val() == '' || $('#cognome').val() == '' || $('#matricola').val() == '' || $('#telefono').val() == ''){
                    alert('Inserire I campi obbligatori: Matricola, Nome, Cognome, Telefono')
                    return false
                }
            })
        </script>
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
    </body>
</html>
