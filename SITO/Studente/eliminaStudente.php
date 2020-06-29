<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- META TAG -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css">

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--Versione non Slim per load function-->
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
  </head>

  <body>
        <div class="container">
            <br>
            <div class="col md-3 titolo right row">
            <b><font face="arial" size="5">Biblioteca UNIFE</font></b>
            </div>

            <div class="row">

            <div class="col md-12">
            <br>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="../index.php" id='home'>
                        <svg class="bi bi-house" width="1em" height="1em" viewBox="1 2 14 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Studenti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="nuovoStudente.php" id='nuovoStudente'>Registra Nuovo Studente</a>
                    <a class="dropdown-item" href="modificaStudente.php" id = 'modificaStudente'>Modifica Informazioni Studente</a>
                    <a class="dropdown-item" href="eliminaStudente.php">Elimina Informazioni Studente</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prestiti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Prestito/inserisciPrestito.php" id='nuovoPrestito'>Registra Nuovo Prestito</a>
                    <a class="dropdown-item" href="../Prestito/modificaPrestito.php" id = 'modificaPrestito'>Modifica Prestito</a>
                    <a class="dropdown-item" href="../Prestito/restituzione.php" id='eliminaPrestito'>Restituzione</a>
                    <a class="dropdown-item" href="../Prestito/situazionePrestiti.php" id='situazionePrestiti'>Situazione prestiti</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Strumenti Di Ricerca
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Strumenti/elencoStudentiLibri.php" id='punto1e2'>Elenco Studenti e Libri</a>
                    <a class="dropdown-item" href="../Strumenti/statistiche.php" id = 'statistiche'>Tool Statistiche</a>
                  </div>
                </li>
                </ul>
            </div>
            </nav>
            <div class="input-group">
        </div>
    </div>
    </div>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form' class= 'loader'>

            <fieldset>
            <label>Matricola: <input id ='matricola' type='text' name='matricola'></label><br>
            </fieldset>

            <input type='submit' value="Invia" >
        </form>

        <script>
          $(document).ready(function(){
            $('#form').submit(function(){
                if($('#matricola').val() == ''){
                    alert('Inserire il campo obbligatorio: Matricola')
                    return false
                }
            })
          });
      </script>
      <form action="<?=$_SERVER['PHP_SELF'];?>" id = 'formDelete' method = 'POST'>
        <input type='submit' value="Elimina" id='Delete' name='Del'>
          <?php

          $connection = mysqli_connect("127.0.0.1","root","","Biblioteca");

          if(!$connection){
          echo "Non si connette".PHP_EOL;
          echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
          echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
          exit(-1);
          }

          if(isset($_POST['matricola'])) {
            $matricola=get_post($connection, 'matricola');

            if(!is_numeric($matricola)){
              echo "Inserire Una Matricola Valida";
              mysqli_close($connection);
              exit(-1);
            }
            if(strlen($matricola) < 10){
              $insertZero = "";
              for($i = 0; $i < (10- strlen($matricola)); $i++){
                $insertZero = "0".$insertZero;
              }
              $matricola = $insertZero.$matricola;
            }

            $ricerca_studente="SELECT * FROM STUDENTE WHERE MATRICOLA=$matricola";
            $result = mysqli_query($connection, $ricerca_studente);
            if(!$result){
              echo "Ricerca Fallita".$result."<br>".$connection->error."<br>";
            }
            $row = mysqli_fetch_array($result);
            echo  "<input type=\"text\" name=\"matricola\" id='savedMatricola' value='".$row['MATRICOLA']."'><br>";
            echo  "<script>$('#savedMatricola').hide()</script>";
            echo "<table class=\"table\">
                  <thead class='thead-dark'>
                  <tr>
                    <th scope=\"col\">MATRICOLA</th>
                    <th scope=\"col\">NOME</th>
                    <th scope=\"col\">COGNOME</th>
                    <th scope=\"col\">TELEFONO</th>
                    <th scope=\"col\">VIA</th>
                    <th scope=\"col\">CIVICO</th>
                    <th scope=\"col\">CAP</th>
                    <th scope=\"col\">CITTA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope=\"row\">".$row['MATRICOLA']."</th>
                    <td scope=\"row\">".$row['NOME']."</th>
                    <td scope=\"row\">".$row['COGNOME']."</th>
                    <td scope=\"row\">".$row['NUMERO_TELEFONO']."</th>
                    <td scope=\"row\">".$row['VIA']."</th>
                    <td scope=\"row\">".$row['CIVICO']."</th>
                    <td scope=\"row\">".$row['CAP']."</th>
                    <td scope=\"row\">".$row['CITTA']."</th>
                  </tr>
                </tbody>
              </table>";
          }
          if(isset($_POST['Del'])){

              $matricola =get_post($connection,'matricola');
              $elimina = "DELETE FROM STUDENTE WHERE MATRICOLA='$matricola'";
              $result = mysqli_query($connection, $elimina);
              //SI  ASSUME CHE L'unico motivo per cui ci sia un errore
              //sia che un vincolo nonsia stato rispettato
              //poichè gli altri possibilierrorisono gia stati gestiti prima
              if(!$result){
                echo "Eliminazione Fallita: Prestito Ancora In Corso <br>";
              }
              else{
                echo "Studente eliminato dal Database<br>";
                //echo  "<script>$('#Aggiorna').hide()</script>";
              }
            }


          //ALLA FINE SAREBBE MEGLIO VISUALIZZARE LE INFO INSERITE
          mysqli_close($connection);



          function get_post($connection, $var){
            return $connection->real_escape_string($_POST[$var]);
          }
          ?>

        </form>
      </div>  <!-- FINE DIV INDENTAZIONE -->
    </body>
</html>
