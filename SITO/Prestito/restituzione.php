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
                  <a class="dropdown-item" href="inserisciPrestito.php" id='nuovoPrestito'>Registra Nuovo Prestito</a>
                  <a class="dropdown-item" href="modificaPrestito.php" id = 'modificaPrestito'>Modifica Prestito</a>
                  <a class="dropdown-item" href="restituzione.php" id='eliminaPrestito'>Restituzione</a>
                  <a class="dropdown-item" href="situazionePrestiti.php" id='situazionePrestiti'>Situazione prestiti</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Strumenti Di Ricerca
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Strumenti/elencoStudenti.php" id='punto1'>Elenco Studenti</a>
                  <a class="dropdown-item" href="../Strumenti/elencoLibri.php" id='punto2'>Elenco Libri</a>
                  <a class="dropdown-item" href="../Strumenti/statistiche.php" id = 'statistiche'>Tool Statistiche</a>
                  <a class="dropdown-item" href="../Strumenti/statisticheAggiuntive.php" id = 'statistiche2'>Statistiche aggiuntive</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="input-group">
        </div>
      </div>
    </div>
    <div class="interno text-center col md-12"  >
      <br><b> INSERISCI LE INFO SUL LIBRO RESTITUITO:<br><br>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form' class= 'loader'>

          <fieldset>
            <label><b>Matricola: <input id ='matricola' type='text' name='matricola'></label><br>
            </fieldset>
            <fieldset>
              <label><b>ISBN: <input id ='isbn' type='text' name='isbn'></label><br>
              </fieldset>
              <fieldset>
                <label><b>Numero Copia: <input id ='nCopia' type='text' name='nCopia'></label><br>
                </fieldset>
                <br>
                <input type='submit' value="Invia" ><br>
              </form>

              <form action="<?=$_SERVER['PHP_SELF'];?>" id = 'formDelete' method = 'POST'>

                <?php
                $submit_value = 0;
                require('../connect.php');

                if(isset($_POST['matricola']) && isset($_POST['isbn']) && isset($_POST['nCopia'])) {
                  $submit_value = 1;
                  $matricola=get_post($connection, 'matricola');
                  $isbn=get_post($connection, 'isbn');
                  $nCopia=get_post($connection, 'nCopia');

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

                  $ricerca_prestito="SELECT * FROM PRESTITO WHERE MATRICOLA='$matricola' AND ISBN='$isbn' AND NUMERO_COPIA='$nCopia';";
                  $result = mysqli_query($connection, $ricerca_prestito);
                  if(!$result){
                    echo "Ricerca Fallita: ".$result."<br>".$connection->error."<br>";
                  }
                  $row = mysqli_fetch_array($result);
                  //PER MANTENERE L'INPUT
                  echo  "<input type=\"text\" name=\"matricola1\" id='savedMatricola' value='".$row['MATRICOLA']."'>";
                  echo  "<script>$('#savedMatricola').hide()</script>";
                  echo  "<input type=\"text\" name=\"isbn1\" id='isbnSaved' value='".$row['ISBN']."'>";
                  echo  "<script>$('#isbnSaved').hide()</script>";
                  echo  "<input type=\"text\" name=\"nCopia1\" id='nCopiaSaved' value='".$row['NUMERO_COPIA']."'>";
                  echo  "<script>$('#nCopiaSaved').hide()</script>";

                  echo "<table class=\"table\">
                  <thead class='thead-dark'>
                  <tr>
                  <th scope=\"col\">MATRICOLA</th>
                  <th scope=\"col\">ISBN</th>
                  <th scope=\"col\">N° COPIA</th>
                  <th scope=\"col\">DATA INIZIO PRESTITO</th>
                  <th scope=\"col\">PROROGA N°</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <th scope=\"row\">".$row['MATRICOLA']."</th>
                  <td scope=\"row\">".$row['ISBN']."</th>
                  <td scope=\"row\">".$row['NUMERO_COPIA']."</th>
                  <td scope=\"row\">".$row['DATA_USCITA']."</th>
                  <td scope=\"row\">".$row['N_PROROGHE']."</th>
                  </tr>
                  </tbody>
                  </table>";
                }
                if(isset($_POST['Del'])){
                  $matricola =get_post($connection,'matricola1');
                  $isbn =get_post($connection,'isbn1');
                  $nCopia =get_post($connection,'nCopia1');

                  $elimina = "DELETE FROM PRESTITO WHERE  MATRICOLA='$matricola' AND ISBN='$isbn' AND NUMERO_COPIA='$nCopia';";
                  $result = mysqli_query($connection, $elimina);

                  if(!$result){
                    echo "Eliminazione Fallita <br>";
                  }
                  else{
                    echo "Prestito eliminato dal Database<br>";
                  }
                }

                mysqli_close($connection);
                ?>
                <center><input type='submit' value="Restituisci" id='Delete' name='Del'></center>
              </form>

              <script>
              $(document).ready(function(){
                $('#Delete').hide();
                <?php
                if($submit_value == 1){ ?>
                  document.getElementById('Delete').style.display = "block";
                  <?php } ?>
                  $('#form').submit(function(){
                    if($('#matricola').val() == '' || $('#isbn').val() == '' || $('#nCopia').val() == ''){
                      alert('Inserire i campi obbligatori');
                      return false
                    }
                  })
                });
                </script>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>

          </div>  <!-- FINE DIV INDENTAZIONE -->
        </body>
        </html>
