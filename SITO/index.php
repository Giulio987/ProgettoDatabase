<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- META TAG -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">

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
                    <a class="nav-link" href="#" id='home'>
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
                    <a class="dropdown-item" href="Studente/nuovoStudente.php" id='nuovoStudente'>Registra Nuovo Studente</a>
                    <a class="dropdown-item" href="Studente/modificaStudente.php" id = 'modificaStudente'>Modifica Informazioni Studente</a>
                    <a class="dropdown-item" href="Studente/restituzione.php">Elimina Informazioni Studente</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prestiti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Prestito/nuovoPrestito" id='nuovoPrestito'>Registra Nuovo Prestito</a>
                    <a class="dropdown-item" href="Prestito/modificaPrestito" id = 'modificaPrestito'>Modifica Prestito</a>
                    <a class="dropdown-item" href="Prestito/eliminaPrestito" id='eliminaPrestito'>Restituzione</a>
                    <a class="dropdown-item" href="Prestito/situazionePrestiti.php" id='situazionePrestiti'>Situazione prestiti</a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
            <div class="input-group">
        </div>
    </div>
    </div>



    <!--Container per tutte le pagine esterne
        <div id="ContainerBody"></div>
         Necessario inserirlo qui  questo javascript
        CON QUESTO VA
        <script type="text/jscript">
        if(window.location.hash === "#NewStud"){
          $('#ContainerBody').load('Studente/nuovoStudente.php')
        }
        if(window.location.hash === "#ModifStud"){
          $('#ContainerBody').load('Studente/modificaStudente.php')
        }
        if(window.location.hash === "#DeletStu"){
          $('#ContainerBody').load('Studente/eliminaStudente.php')
        }
      </script>-->
    </div>


  </body>

</html>
<?php
    $connection = mysqli_connect("127.0.0.1","root","");

    if(!$connection){
        echo "Non si connette".PHP_EOL;
        echo "Codice errore: ".mysqli_connect_errno().PHP_EOL;
        echo "Messaggio errore: ".mysqli_connect_error().PHP_EOL;
        exit(-1);
    }

    mysqli_close($connection);

?>
