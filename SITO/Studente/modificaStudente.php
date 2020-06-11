<!DOCTYPE HTML><!--DA RIGUARDARE TUTTI GLI HREF-->
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
                    <a class="nav-link" href="../index.html" id='home'>
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
                    <a class="dropdown-item" href="#" id = 'modificaStudente.php'>Modifica Informazioni Studente</a>
                    <a class="dropdown-item" href="eliminaStudente.php">Elimina Informazioni Studente</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prestiti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" id='nuovoPrestito'>Registra Nuovo Prestito</a>
                    <a class="dropdown-item" href="#" id = 'modificaPrestito'>Modifica Prestito</a>
                    <a class="dropdown-item" href="#" id='eliminaPrestito'>Restituzione</a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
            <div class="input-group">
        </div>
    </div>
    </div>
    <form action="modificaStudente.php" id = 'form' method = 'POST'>
        Inserire La Matricola da Ricercare:<br>
        <fieldset>
        <label id = 'labelMatricola'>Matricola: <input id ='matricola' type='text' name='matricola'></label><br>
      </fieldset>
        <input type='submit' value="Invia" id='submit'>
    </form>

    <script>
    $(document).ready(function(){
        $('#form').submit(function(){
            if($('#matricola').val() == ''){
                alert('Inserire La Matricola dello studente da Ricercare')
                return false
            }
        })
    })
    </script>
    <form action="modificaStudente.php" id = 'formUpdate' method = 'POST'>
        <?php

        $connection = mysqli_connect("127.0.0.1","root","", "Biblioteca");

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
          $query = "SELECT * FROM STUDENTE WHERE MATRICOLA=$matricola";
          $result = mysqli_query($connection, $query);
          if(!$result){
              echo "Ricerca Fallita".$result."<br>".$connection->error."<br>";
            }
          $row = mysqli_fetch_array($result);
          echo  "<input type=\"text\" name=\"matricola\" id='savedMatricola' value=".$row['MATRICOLA']."><br>";
          echo  "<script>$('#savedMatricola').hide()</script>";
          echo  "<input type=\"text\" name=\"matricola2\" value=".$row['MATRICOLA']."><br>";
          echo  "<input type=\"text\" name=\"nome\" value=".$row['NOME']."><br>";
          echo  "<input type=\"text\" name=\"cognome\" value=".$row['COGNOME']."><br>";
          echo  "<input type=\"text\" name=\"telefono\" value=".$row['NUMERO_TELEFONO']."><br>";
          echo  "<input type=\"text\" name=\"via\" value=".$row['VIA']."><br>";         //PROBLEMA CON VISUALIZZAZIONE DELLA VIA
          echo  "<input type=\"text\" name=\"civico\" value=".$row['CIVICO']."><br>";
          echo  "<input type=\"text\" name=\"cap\" value=".$row['CAP']."><br>";
          echo  "<input type=\"text\" name=\"citta\" value=".$row['CITTA']."><br>";
        }
          if(isset($_POST['Agg'])){
            if(isset($_POST['matricola2']) && isset($_POST['nome']) && isset($_POST['cognome'])){
              $matricola=get_post($connection, 'matricola');
              $matricola2=get_post($connection, 'matricola2');
              $nome=get_post($connection, 'nome');
              $cognome=get_post($connection, 'cognome');
              $telefono=get_post($connection, 'telefono');
              $via=get_post($connection, 'via');
              $civico=get_post($connection, 'civico');
              $cap=get_post($connection, 'cap');
              $citta=get_post($connection, 'citta');

            $query = "UPDATE STUDENTE SET MATRICOLA=$matricola2 NOME=$nome COGNOME=$cognome NUMERO_TELEFONO=$telefono VIA=$via CIVICO=$civico CAP=$cap CITTA=$citta WHERE MATRICOLA=$matricola";
              $result = mysqli_query($connection, $query);
              if(!$result){
                echo "Aggiornamento Fallito".$result."<br>".$connection->error."<br>";
              }
              else{
                echo "Aggiornamento OK";
              }
            }
          }




        mysqli_close($connection);



        function get_post($connection, $var){
          return $connection->real_escape_string($_POST[$var]);
        }
        ?>
        <input type='submit' value="Aggiorna" id='Aggiorna' name='Agg'>
      </form>
      </div>  <!-- FINE DIV INDENTAZIONE -->
    </body>
</html>
