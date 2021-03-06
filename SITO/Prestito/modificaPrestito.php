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
      <form action="<?=$_SERVER['PHP_SELF'];?>" id = 'form' method = 'POST'>

        <br><b>INSERIRE LE INFORMAZIONI DA RICERCARE:<br><br>
          <div class="container ">
          <div class="row">

          <div class="col-md-6 text-right " style="line-height:28px;">
          <br>
          <b>ISBN:
          <br>NUMERO COPIA:
          <br>MATRICOLA:

          </div>
          <br>
          <div class="col-md-6 text-left">
          <fieldset>
             <input id ='isbn' type='text' name='isbn'><br>
            </fieldset>

            <fieldset>
          <input id ='nCopia' type='text' name='nCopia'><br>
              </fieldset>

              <fieldset>
                <input id ='matricola' type='text' name='matricola'><br>
                </fieldset>
              </div>
              </div>
              </div>
                <br>
                <input type='submit' value="Invia" id='submit' name="Inv">
              </form>
              <form action="<?=$_SERVER['PHP_SELF'];?>" id = 'formUpdate' method = 'POST'>
                <?php
                $submit_value = 0;
                require('../connect.php');

                if(isset($_POST['matricola'])  && isset($_POST['nCopia']) && isset($_POST['isbn'])) {
                  $submit_value = 1;
                  $matricola=get_post($connection, 'matricola');
                  $isbn=get_post($connection, 'isbn');
                  $nCopia=get_post($connection, 'nCopia');

                  if(!is_numeric($matricola)){
                    echo "<br><b>Inserire Una Matricola Valida";
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

                  $queryAll = "SELECT * FROM PRESTITO WHERE MATRICOLA='$matricola' AND ISBN='$isbn' AND NUMERO_COPIA=$nCopia;";
                  $resAll = mysqli_query($connection, $queryAll);
                  if(!$resAll){
                    echo "<br><b>recupero Informazioni Fallito<br>";
                    exit(-1);

                  }
                  $row = mysqli_fetch_array($resAll);

                  //CONTROLLO PER VERIFICARE VALIDITà DEI DATI
                  if(is_null($row['MATRICOLA'])){
                    echo "<br><b>Prestito Non Trovato";
                    return;
                  }


                  $data_uscita=date('Y-m-d', strtotime($row['DATA_USCITA']));
                  echo "<br><b>DATA INIZIO PRESTITO ".$data_uscita."<br>";
                  $data_rientro = date('Y-m-d', strtotime($data_uscita.' + 30 days'));


                  //Ammettendo che una proroga sia di 15 giorni
                  //Ammettendo che ci siano massimo due PROROGHE
                  //e che l'unica informazione modificabile sia appuntola proroga
                  //che essa andrà ad aggiornare automaticamente la data prevista di rientro
                  //NEL MOMENTO IN CUI RIENTRA LA COPIA il prestito viene eliminato quindi non serve
                  //un attributo data di rientro effettiva

                  if(intval($row['N_PROROGHE']) == 1){
                    $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 15 days'));
                  }
                  else if(intval($row['N_PROROGHE']) == 2){
                    $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 30 days'));
                  }
                  echo "<br><b>DATA LIMITE PRESTITO ".$data_rientro;
                  //PER MANTENERE INPUT NEL MOMENTO  IN CUI SI VA AD AGGIORNARE
                  echo  "<input type=\"text\" name=\"matricola1\" id='matricola1' value='".get_post($connection, 'matricola')."'>";
                  echo  "<script>$('#matricola1').hide()</script>";
                  echo  "<input type=\"text\" name=\"isbn1\" id='isbn1' value='".get_post($connection, 'isbn')."'>";
                  echo  "<script>$('#isbn1').hide()</script>";
                  echo  "<input type=\"text\" name=\"nCopia1\" id='nCopia1' value='".get_post($connection, 'nCopia')."'>";
                  echo  "<script>$('#nCopia1').hide()</script>";

                }
                if(isset($_POST['Pror'])){
                  $matricola = get_post($connection, 'matricola1');
                  $isbn = get_post($connection, 'isbn1');
                  $nCopia=  get_post($connection, 'nCopia1');
                  if(strlen($matricola) < 10){
                    $insertZero = "";
                    for($i = 0; $i < (10- strlen($matricola)); $i++){
                      $insertZero = "0".$insertZero;
                    }
                    $matricola = $insertZero.$matricola;
                  }

                  $query = "SELECT N_PROROGHE FROM PRESTITO WHERE ISBN='$isbn' AND MATRICOLA='$matricola' AND NUMERO_COPIA=$nCopia;";
                  $res= mysqli_query($connection, $query);
                  if(!$res){
                    echo "<br><b>Recupero Proroghe Fallito".$res."<br>".$connection->error."<br>";
                    exit(-1);
                  }
                  $row = mysqli_fetch_array($res);
                  if(($nProroghe=intval($row['N_PROROGHE'])) < 2){
                    ++$nProroghe;
                    $query1 = "UPDATE PRESTITO SET N_PROROGHE=$nProroghe WHERE ISBN='$isbn' AND MATRICOLA='$matricola' AND NUMERO_COPIA=$nCopia;";
                    $res1= mysqli_query($connection, $query1);
                    if(!$res1){
                      echo "<br><b>Aggiornamento Fallito".$res1."<br>".$connection->error."<br>";
                      exit(-1);
                    }
                    echo "<br><b>PROROGA COMPLETATA<br>";
                  }
                  else{
                    echo "<br><b>Impossibile Prorogare Ulteriormente il Prestito<br>";
                    exit(-1);
                  }
                }
                mysqli_close($connection);
                ?>
                <br><br>
                <center><input type='submit' value="Proroga" id='Proroga' name='Pror'></center>
              </form>
              <script>
              $(document).ready(function(){
                $('#Proroga').hide();
                <?php
                if($submit_value == 1){ ?>
                  document.getElementById('Proroga').style.display = "block";
                  <?php } ?>
                  $('#form').submit(function(){
                    if($('#matricola').val() == '' || $('#nCopia').val() == '' || $('#isbn').val() == ''){
                      alert('Inserire Tutti i campi per la ricerca')
                      return false
                    }

                  })
                })
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
                <br>
                <br>
                <br>
                <br>
          </div>  <!-- FINE DIV INDENTAZIONE -->
      </div>
    </body>
</html>
