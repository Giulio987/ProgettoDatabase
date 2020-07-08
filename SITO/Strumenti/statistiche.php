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
        <br>
        <b>LINGUE PIU FREQUENTI:<br>
          <br>
          <?php
          require('../connect.php');
          $queryLingue = "SELECT E_SCRITTO.NOME_LINGUA,COUNT(E_SCRITTO.NOME_LINGUA) AS NUMERO_LIBRI
          FROM E_SCRITTO
          GROUP BY E_SCRITTO.NOME_LINGUA
          ORDER BY NUMERO_LIBRI  DESC
          LIMIT 5;";
          $result = mysqli_query($connection,$queryLingue);
          if(!$result){
            echo "Ricerca Prestiti Fallita".$result."<br>".$connection->error."<br>";
          }
          echo "<table border=\"1\" class=\"table\">
          <thead class='thead-dark'>
          <tr>
          <th scope=\"col\">LINGUA</th>
          <th scope=\"col\">NUMERO LIBRI</th>
          </tr>
          </thead>";
          while($row = mysqli_fetch_array($result)){
            echo"<tbody>
            <tr>
            <td scope=\"row\">".$row['NOME_LINGUA']."</th>
            <td scope=\"row\">".$row['NUMERO_LIBRI']."</th>
            </tr>
            </tbody>";
          }

          echo "</table>";
          ?>
          <br>


          <b>AUTORE CHE HA SCRITTO PIU LIBRI:<br>
            <br>
            <?php
            $queryAutore = "SELECT A.ID_AUT,A.NOME_A,COGNOME_A,COUNT(S.ID_AUT) AS LIBRI_SCRITTI
            FROM AUTORE A,SCRIVE S
            WHERE A.ID_AUT=S.ID_AUT
            GROUP BY A.ID_AUT
            HAVING LIBRI_SCRITTI=(SELECT MAX(T.LIBRI_SCRITTI)
            FROM(SELECT A.ID_AUT,A.NOME_A,COGNOME_A,COUNT(S.ID_AUT) AS LIBRI_SCRITTI
            FROM AUTORE A,SCRIVE S
            WHERE A.ID_AUT=S.ID_AUT
            GROUP BY A.ID_AUT
            ORDER BY LIBRI_SCRITTI DESC) AS T)
            ORDER BY LIBRI_SCRITTI DESC;";
            $result = mysqli_query($connection,$queryAutore);
            if(!$result){
              echo "Ricerca Prestiti Fallita".$result."<br>".$connection->error."<br>";
            }
            echo "<table border=\"1\" class=\"table\">
            <thead class='thead-dark'>
            <tr>
            <th scope=\"col\">ID AUTORE</th>
            <th scope=\"col\">NOME AUTORE</th>
            <th scope=\"col\">COGNOME AUTORE</th>
            <th scope=\"col\">LIBRI SCRITTI</th>
            </tr>
            </thead>";
            while($row = mysqli_fetch_array($result)){
              echo"<tbody>
              <tr>
              <td scope=\"row\">".$row['ID_AUT']."</th>
              <td scope=\"row\">".$row['NOME_A']."</th>
              <td scope=\"row\">".$row['COGNOME_A']."</th>
              <td scope=\"row\">".$row['LIBRI_SCRITTI']."</th>
              </tr>
              </tbody>";
            }

            echo "</table>";
            ?>
            <br>

            <b>EDITORE CHE HA PUBBLICATO PIU LIBRI:<br>
              <br>
              <?php
              $queryEditore = "SELECT E.NOME_ED,COUNT(L.COD_ED) AS LIBRI_PUBBLICATI
              FROM EDITORE E,LIBRO L
              WHERE E.CODICE=L.COD_ED
              GROUP BY L.COD_ED
              HAVING LIBRI_PUBBLICATI=(SELECT MAX(T.LIBRI_PUBBLICATI)
              FROM(SELECT E.NOME_ED,COUNT(L.COD_ED) AS LIBRI_PUBBLICATI
              FROM EDITORE E,LIBRO L
              WHERE E.CODICE=L.COD_ED
              GROUP BY L.COD_ED
              ORDER BY LIBRI_PUBBLICATI DESC) AS T)
              ORDER BY LIBRI_PUBBLICATI DESC;";
              $result = mysqli_query($connection,$queryEditore);
              if(!$result){
                echo "Ricerca Prestiti Fallita".$result."<br>".$connection->error."<br>";
              }
              echo "<table border=\"1\" class=\"table\">
              <thead class='thead-dark'>
              <tr>
              <th scope=\"col\">NOME EDITORE</th>
              <th scope=\"col\">LIBRI PUBBLICATI</th>
              </tr>
              </thead>";
              while($row = mysqli_fetch_array($result)){
                echo"<tbody>
                <tr>
                <td scope=\"row\">".$row['NOME_ED']."</th>
                <td scope=\"row\">".$row['LIBRI_PUBBLICATI']."</th>
                </tr>
                </tbody>";
              }

              echo "</table>";


              mysqli_close($connection);
              ?>
        </div>
      </div>  <!-- FINE DIV INDENTAZIONE -->
    </body>
  </html>
