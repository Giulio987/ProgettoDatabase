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
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
  </head>

  <body>

        <div class="container">
            <br>
            <div class="col-md-3 titolo right row">
            <b><font face="arial" size="5">Biblioteca UNIFE</font></b>
            </div>

            <div class="row">

            <div class="col-md-12">
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
  <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form' class= 'loader'>

    <div class="interno text-center col md-12">

          <br><b>INSERIRE DATI STUDENTE</b><br><br>

          <div class="container ">
          <div class="row">

          <div class="col-md-6 text-right " style="line-height:29px;">
          <br>
          <b>MATRICOLA:
          <br>NOME:
          <br>COGNOME:
          <br>NUMERO DI TELEFONO:
          <br>VIA:
          <br>CIVICO:
          <br>CAP:
          <br>CITTA:
          </div>
          <br>
          <div class="col-md-6 text-left">
            <fieldset>
            <input id ='matricola' type='text' name='matricola'><br>
            </fieldset>

            <fieldset>
            <input id ='nome' type='text' name='nome'><br>
            </fieldset>

            <fieldset>
            <input id ='cognome' type='text' name='cognome'><br>
            </fieldset>

            <fieldset>
            <input id ='telefono' type='tel' name='telefono'><br>
            </fieldset>

            <fieldset>
            <input id ='via' type='text' name='via'><br>
            </fieldset>

            <fieldset>
            <input id ='civico' type='text' name='civico'><br>
            </fieldset>

            <fieldset>
            <input id ='cap' type='text' name='cap'><br>
            </fieldset>

            <fieldset>
            <input id ='citta' type='text' name='citta'><br>
            </fieldset>
          </div>
        </div>
        <br>
            <input type='submit' value="Invia">

        </form>

        <script>
          $(document).ready(function(){
            $('#form').submit(function(){
              if($('#nome').val() == '' || $('#cognome').val() == '' || $('#matricola').val() == '' || $('#telefono').val() == ''){
                alert('Inserire I campi obbligatori: Matricola, Nome, Cognome, Telefono')
                return false
              }
            })
          });
        </script>
        <?php
          require('../connect.php');

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
              echo "<b>Inserire Una Matricola Valida";
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

            $ins_studente="INSERT INTO STUDENTE VALUES('$matricola','$nome','$cognome','$telefono','$via','$civico','$cap','$citta')";
            $result = mysqli_query($connection, $ins_studente);
            if(!$result){
              echo "<br>Inserimento Fallito".$result."<br>".$connection->error."<br>";
            }
            echo "<br>Inserimento ok";
          }
          mysqli_close($connection);
          ?>
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
