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
                    <a class="dropdown-item" href="../Studente/nuovoStudente.php" id='nuovoStudente'>Registra Nuovo Studente</a>
                    <a class="dropdown-item" href="../Studente/modificaStudente.php" id = 'modificaStudente'>Modifica Informazioni Studente</a>
                    <a class="dropdown-item" href="../Studente/eliminaStudente.php">Elimina Informazioni Studente</a>
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
                    <a class="dropdown-item" href="elencoStudenti.php" id='punto1e2'>Elenco Studenti</a>
                    <a class="dropdown-item" href="elencoLibri.php" id='punto1e2'>Elenco Libri</a>
                    <a class="dropdown-item" href="statistiche.php" id = 'statistiche'>Tool Statistiche</a>
                  </div>
                </li>
                </ul>
            </div>
            </nav>
            <div class="input-group">
        </div>
    </div>
    </div>
    <div class="interno col md-12 text-center"  >
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form' class= 'loader'>

            <br><b>INSERIRE IL NOME DEL LIBRO</b><br><br>
            <fieldset>
            <label><input id ='Valore' type='text' name='Valore'></label><br>
            </fieldset>

        <script>
          $(document).ready(function(){
            $('#form').submit(function(){
                if($('#Valore').val() == ''){
                    alert('Inserire il campo scelto');
                    return false
                }
            })
          });
      </script>
      <input type='submit' value="VISUALIZZA" id='Visualizza' name='Vis'>
      <br>
          <?php
          $connection = mysqli_connect("127.0.0.1","root","","Biblioteca");

          if(!$connection){
          echo "Non si connette".PHP_EOL;
          echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
          echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
          exit(-1);
          }
          //Visto che i libri hanno tutti un titolo unico verificato con la query:
          //USE Biblioteca;SELECT TITOLO, COUNT(*) FROM LIBRO GROUP BY  TITOLO HAVING COUNT(*) > 1;
          //Non è necessario avvenga una verifica su quale libro si desideri recuperare
          if (isset($_POST['Valore'])){
              $NomeLibro=get_post($connection, 'Valore');
              strtoupper($NomeLibro[0]);
              $ricerca_libro="SELECT * FROM LIBRO WHERE TITOLO LIKE '%$NomeLibro%';";
              $resultLibro = mysqli_query($connection, $ricerca_libro);
              if(!$resultLibro){
                echo "<b>Ricerca Libro Fallita".$resultLibro."<br>".$connection->error."<br>";
              }
              $row = mysqli_fetch_array($resultLibro);
              if(is_null($row['ISBN'])){
                echo "<b>LIBRO NON TROVATO";
                return(-1);
              }
              echo "LIBRO:<br>ISBN:  ".$row['ISBN']."<br>TITOLO:  ".$row['TITOLO']."<br>ANNO PUBBLICAZIONE:   ".$row['ANNO_PUBBL']."<br>CODICE EDITORE:  ".$row['COD_ED'];
              $isbn = $row['ISBN'];
              $ricerca_prestito="SELECT * FROM PRESTITO WHERE ISBN='$isbn';";
              $result = mysqli_query($connection, $ricerca_prestito);
              if(!$result){
                echo "Ricerca Prestito Fallita".$result."<br>".$connection->error."<br>";
              }

              echo "<table border=\"1\" class=\"table\">
                    <thead class='thead-dark'>
                    <tr>
                      <th scope=\"col\">MATRICOLA</th>
                      <th scope=\"col\">N° COPIA</th>
                      <th scope=\"col\">DATA INIZIO PRESTITO</th>
                      <th scope=\"col\">DATA FINE PRESTITO</th>
                      <th scope=\"col\">PROROGA N°</th>
                      <th scope=\"col\">Dipartimento Provenienza Prestito</th>
                    </tr>
                  </thead>";
              while($row = mysqli_fetch_array($result)){
                $n_copia = $row['NUMERO_COPIA'];
                $isbn = $row['ISBN'];
                $queryDip = "SELECT NOME_DIP FROM COPIA WHERE NUMERO_COPIA=$n_copia AND ISBN='$isbn';";
                $resultDip = mysqli_query($connection, $queryDip);
                if(!$resultDip){
                  echo "<b>Ricerca Dipartimento Fallita".$resultDip."<br>".$connection->error."<br>";
                }
                $rowDip = mysqli_fetch_array($resultDip);
                $data_uscita=date('Y-m-d', strtotime($row['DATA_USCITA']));
                $data_rientro = date('Y-m-d', strtotime($data_uscita.' + 30 days'));
                if(intval($row['N_PROROGHE']) == 1){
                  $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 15 days'));
                }
                else if(intval($row['N_PROROGHE']) == 2){
                  $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 30 days'));
                }
                  echo"<tbody>
                    <tr>
                      <td scope=\"row\">".$row['MATRICOLA']."</th>
                      <td scope=\"row\">".$row['NUMERO_COPIA']."</th>
                      <td scope=\"row\">".$data_uscita."</th>
                      <td scope=\"row\">".$data_rientro."</th>
                      <td scope=\"row\">".$row['N_PROROGHE']."</th>
                      <td scope=\"row\">".$rowDip['NOME_DIP']."</th>
                    </tr>
                </tbody>";
              }

            echo "</table>";
            }
          mysqli_close($connection);



          function get_post($connection, $var){
            return $connection->real_escape_string($_POST[$var]);
          }
          ?>

        </form>
      </div>
      </div>  <!-- FINE DIV INDENTAZIONE -->
    </body>
</html>
