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
                      <a class="dropdown-item" href="elencoStudenti.php" id='punto1'>Elenco Studenti</a>
                      <a class="dropdown-item" href="elencoLibri.php" id='punto2'>Elenco Libri</a>
                      <a class="dropdown-item" href="statistiche.php" id = 'statistiche'>Tool Statistiche</a>
                      <a class="dropdown-item" href="statisticheAggiuntive.php" id = 'statistiche2'>Statistiche aggiuntive</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="interno col md-12 text-center" >
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form' class= 'loader'>
          <br><b>RICERCA I LIBRI DISPONIBILI NEI RELATIVI DIPARTIMENTI</b><br>


                <fieldset>
                <label><br><b>INSERIRE IL TITOLO DEL LIBRO:</b><br> <br><input id ='Valore' type='text' name='Valore'></label><br>
                </fieldset>

          <br>
          <input type='submit' value="VISUALIZZA" id='Visualizza' name='Vis'>
          <br>

        <br>
        <?php
        //PROMEMORIA:
        //
        //SAREBBE PIU ELEGANTE METTERE COME LIBRERIA ESTERNA IL CONNECT IN MODO
        //DA POTERLA RICHIAMARE QUANDO SI VUOLE
        //E ANCHE LA FUNZIONE GET_POST
          $connection = mysqli_connect("127.0.0.1","root","","Biblioteca");
          if(!$connection){
            echo "<br>Non si connette".PHP_EOL;
            echo "<br>Codice errore: ".mysqli_connect_errno().PHP_EOL;
            echo "<br>Messaggio errore: ".mysqli_connect_error().PHP_EOL;
            exit(-1);
          }

          //PROMEMORIA:
          //
          //SAREBBE PIU ELEGANTE METTERE COME LIBRERIA ESTERNA IL CONNECT IN MODO
          //DA POTERLA RICHIAMARE QUANDO SI VUOLE
          //E ANCHE LA FUNZIONE GET_POST

          if(isset($_POST['Valore'])){
            $titolo = get_post($connection, 'Valore');

                      //MENO SIMULATA CON LA LEFT JOIN
            $queryC = "SELECT  C.NOME_DIP, COUNT(C.NUMERO_COPIA) AS COPIE_DISPONIBILI
            FROM (SELECT X.ISBN, X.NUMERO_COPIA, X.NOME_DIP FROM(SELECT ISBN,NUMERO_COPIA, NOME_DIP
            FROM COPIA) X
            LEFT JOIN
             (
            SELECT P.ISBN,P.NUMERO_COPIA
            FROM PRESTITO P
            )  T
            	ON X.ISBN = T.ISBN AND X.NUMERO_COPIA=T.NUMERO_COPIA
            	WHERE
            	T.ISBN IS NULL AND T.NUMERO_COPIA IS NULL)AS C, LIBRO L
            WHERE C.ISBN = L.ISBN AND L.TITOLO = '$titolo'
            GROUP BY  L.TITOLO, C.NOME_DIP;";
            $resultC = mysqli_query($connection,$queryC);


            if(!$resultC){
              echo "Ricerca Fallita".$resultC."<br>".$connection->error."<br>";
            }

            echo "<table class=\"table\">
                  <thead class='thead-dark'>
                  <tr>
                    <th scope=\"col\">DIPARTIMENTO</th>
                    <th scope=\"col\">COPIE DISPONIBILI</th>
                  </tr>
                </thead>";
            while($row = mysqli_fetch_array($resultC)){
                  echo"<tbody>
                      <tr>
                        <td scope=\"row\">".$row['NOME_DIP']."</th>
                        <td scope=\"row\">".$row['COPIE_DISPONIBILI']."</th>
                      </tr>
                  </tbody>";
                }

              echo "</table>";
            }
            ?>
            <br>
          </form>
          <script type="text/javascript">
            var coll = document.getElementsByClassName("collapsible");
            var i;
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
          </script>
            <br>
            <p>
            <a class="btn btn-primary bg-dark text-white" data-toggle="collapse" href="#prestitiStudenti" role="button" aria-expanded="false" aria-controls="collapseExample">
              PRIMI 15 STUDENTI CON PIU PRESTITI ATTIVI
            </a>
            <a class="btn btn-primary bg-dark text-white" data-toggle="collapse" href="#libridip" role="button" aria-expanded="false" aria-controls="collapseExample">
              DIPARTIMENTI CON PIU LIBRI
            </a>
            <a class="btn btn-primary bg-dark text-white" data-toggle="collapse" href="#scadenze" role="button" aria-expanded="false" aria-controls="collapseExample">
              PRESTITI IN SCADENZA
            </a>
            </p>


            <div class="collapse" id="prestitiStudenti">
              <div class="card card-body">
            <?php
            //PROMEMORIA:
            //
            //SAREBBE PIU ELEGANTE METTERE COME LIBRERIA ESTERNA IL CONNECT IN MODO
            //DA POTERLA RICHIAMARE QUANDO SI VUOLE
            //E ANCHE LA FUNZIONE GET_POST

              $queryNPrestiti = "SELECT S.MATRICOLA,S.NOME,S.COGNOME,COUNT(P.MATRICOLA) AS NUMERO_PRESTITI
              FROM PRESTITO P,STUDENTE S
              WHERE P.MATRICOLA=S.MATRICOLA
              GROUP BY MATRICOLA
              ORDER BY NUMERO_PRESTITI DESC
              LIMIT 15;";
              $result = mysqli_query($connection,$queryNPrestiti);
              if(!$result){
                echo "Ricerca Prestiti Fallita".$result."<br>".$connection->error."<br>";
              }
              echo "

                <table class=\"table\">
                    <thead class='thead-dark'>
                    <tr>
                      <th scope=\"col\">MATRICOLA</th>
                      <th scope=\"col\">NOME</th>
                      <th scope=\"col\">COGNOME</th>
                      <th scope=\"col\">NUMERO DI PRESTITI IN CORSO</th>
                    </tr>
                  </thead>";
              while($row = mysqli_fetch_array($result)){
                    echo"<tbody>
                        <tr>
                          <td scope=\"row\">".$row['MATRICOLA']."</th>
                          <td scope=\"row\">".$row['NOME']."</th>
                          <td scope=\"row\">".$row['COGNOME']."</th>
                          <td scope=\"row\">".$row['NUMERO_PRESTITI']."</th>
                        </tr>
                    </tbody>";
                  }
              echo "</table>";

              function get_post($connection, $var){
                return $connection->real_escape_string($_POST[$var]);
              }
              ?>

              </div>
            </div><!-- FINE DIV COLLAPSIBLE-->
            <div class="collapse" id="libridip">
              <div class="card card-body">
                <?php
                //PROMEMORIA:
                //
                //SAREBBE PIU ELEGANTE METTERE COME LIBRERIA ESTERNA IL CONNECT IN MODO
                //DA POTERLA RICHIAMARE QUANDO SI VUOLE
                //E ANCHE LA FUNZIONE GET_POST

                  $queryDip = "SELECT D.NOME_DIP,COUNT(C.NOME_DIP) AS NUMERO_LIBRI
                                     FROM  DIPARTIMENTO D,COPIA C
                                     WHERE D.NOME_DIP=C.NOME_DIP
                                     GROUP BY NOME_DIP
                                     ORDER BY NUMERO_LIBRI DESC;";
                  $result = mysqli_query($connection,$queryDip);
                  if(!$result){
                    echo "Ricerca Libri per dipartimenti Fallita".$result."<br>".$connection->error."<br>";
                  }
                  echo "

                    <table class=\"table\">
                        <thead class='thead-dark'>
                        <tr>
                          <th scope=\"col\">NOME DIPARTIMENTO</th>
                          <th scope=\"col\">NUMERO DI LIBRI PRESENTI</th>
                        </tr>
                      </thead>";
                  while($row = mysqli_fetch_array($result)){
                        echo"<tbody>
                            <tr>
                              <td scope=\"row\">".$row['NOME_DIP']."</th>
                              <td scope=\"row\">".$row['NUMERO_LIBRI']."</th>
                            </tr>
                        </tbody>";
                      }
                  echo "</table>";
                  ?>
              </div>
           </div><!-- FINE DIV COLLAPSIBLE-->
           <div class="collapse" id="scadenze">
             <div class="card card-body">
               <?php
               //PROMEMORIA:
               //DARE AL PROF LE DATE AGGIORNATE

                 $queryScadenze = "SELECT S.MATRICOLA,S.NOME,S.COGNOME,P.ISBN,L.TITOLO,P.NUMERO_COPIA,P.DATA_USCITA, P.N_PROROGHE
                                   FROM  PRESTITO P,COPIA C,STUDENTE S,LIBRO L
                                   WHERE P.ISBN=C.ISBN AND P.NUMERO_COPIA = C.NUMERO_COPIA AND P.MATRICOLA = S.MATRICOLA AND P.ISBN = L.ISBN;";
                 $result = mysqli_query($connection,$queryScadenze);
                 if(!$result){
                   echo "Ricerca Scadenze Imminenti Fallita".$result."<br>".$connection->error."<br>";
                 }

                 echo "

                   <table class=\"table\">
                       <thead class='thead-dark'>
                       <tr>
                         <th scope=\"col\">MATRICOLA</th>
                         <th scope=\"col\">NOME</th>
                         <th scope=\"col\">COGNOME</th>
                         <th scope=\"col\">ISBN</th>
                         <th scope=\"col\">TITOLO</th>
                         <th scope=\"col\">NUMERO COPIA</th>
                         <th scope=\"col\">DATA PREVISTA PER IL RIENTRO</th>
                       </tr>
                     </thead>";
                 while($row = mysqli_fetch_array($result)){
                     $data_uscita=date('Y-m-d', strtotime($row['DATA_USCITA']));
                     $data_rientro = date('Y-m-d', strtotime($data_uscita.' + 30 days'));
                     if(intval($row['N_PROROGHE']) == 1){
                       $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 15 days'));
                     }
                     else if(intval($row['N_PROROGHE']) == 2){
                       $data_rientro = date('Y-m-d', strtotime($data_rientro.' + 30 days'));
                     }
                     $data_confronto = date('Y-m-d', strtotime($data_rientro.' - 3 days'));
                     $data_oggi=date('Y-m-d');



                     $datetime1 = new DateTime($data_oggi);
                     $datetime2 = new DateTime($data_confronto);
                     $interval = $datetime2->diff($datetime1);

                     if($interval->format('%a ') <= 3){
                     echo"<tbody>
                           <tr>
                             <td scope=\"row\">".$row['MATRICOLA']."</th>
                             <td scope=\"row\">".$row['NOME']."</th>
                             <td scope=\"row\">".$row['COGNOME']."</th>
                             <td scope=\"row\">".$row['ISBN']."</th>
                             <td scope=\"row\">".$row['TITOLO']."</th>
                             <td scope=\"row\">".$row['NUMERO_COPIA']."</th>
                             <td scope=\"row\">".$data_rientro."</th>
                           </tr>
                       </tbody>";
                     }
                }
                echo "</table>";

                 ?>
             </div>
          </div><!-- FINE DIV COLLAPSIBLE-->
          <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id='form2' class= 'loader'>
            <br><b>INSERISCI UNA DATA E TROVA I PRESTITI EFFETTUATI IN QUELLA DATA</b><br>
                  <fieldset>
                  <label><br><b>INSERIRE LA DATA</b><br> <br><input id ='Data' type='date' name='Data'></label><br>
                  </fieldset>

                  <br>
                  <input type='submit' value="RICERCA" id='Ricerca' name='Ric'>
                  <br>
            <?php
              if(isset($_POST['Data'])){
                $dataRicerca = get_post($connection, 'Data');
                $queryData = "SELECT P.ISBN,L.TITOLO,P.NUMERO_COPIA,P.MATRICOLA,P.DATA_USCITA,C.NOME_DIP
                                FROM  PRESTITO P,COPIA C,LIBRO L
                                WHERE P.ISBN=C.ISBN AND P.NUMERO_COPIA=C.NUMERO_COPIA AND C.ISBN=L.ISBN AND P.DATA_USCITA='$dataRicerca';";
                $resultData = mysqli_query($connection,$queryData);
                if(!$resultData){
                  echo "Ricerca Fallita".$resultC."<br>".$connection->error."<br>";
                }

                echo "<table class=\"table\">
                      <thead class='thead-dark'>
                      <tr>
                        <th scope=\"col\">ISBN</th>
                        <th scope=\"col\">TITOLO </th>
                        <th scope=\"col\">NUMERO_COPIA</th>
                        <th scope=\"col\">MATRICOLA</th>
                        <th scope=\"col\">DIPARTIMENTO DI PROVENIENZA</th>
                      </tr>
                    </thead>";
                while($row = mysqli_fetch_array($resultData)){
                      echo"<tbody>
                          <tr>
                            <td scope=\"row\">".$row['ISBN']."</th>
                            <td scope=\"row\">".$row['TITOLO']."</th>
                            <td scope=\"row\">".$row['NUMERO_COPIA']."</th>
                            <td scope=\"row\">".$row['MATRICOLA']."</th>
                            <td scope=\"row\">".$row['NOME_DIP']."</th>
                          </tr>
                      </tbody>";
                    }

                  echo "</table>";
                }
                ?>
          </form>
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
          <br>
          </div>
      </div>  <!-- FINE DIV INDENTAZIONE -->
    </body>
  </html>
