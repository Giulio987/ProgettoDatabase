$(document).ready(function(){
    $('#ContainerBody').load('home.html');
    //Home
    $('#home').click(function(){
        $('#ContainerBody').load('home.html')
    });
    
    
    //Inserimento Studente
    $('#nuovoStudente').click(function(){
        $('#ContainerBody').load('Studente/nuovoStudente.php')
    })
    //Modifica Studente
    $('#modificaStudente').click(function(){
        $('#ContainerBody').load('Studente/modificaStudente.html')
    });
    //Eliminazione Studente
    $('#eliminaStudente').click(function(){
        $('#ContainerBody').load('Studente/eliminaStudente.html')
    });
    
    //InserimentoPrestito
    $('#nuovoPrestito').click(function(){
        $('#ContainerBody').load('Prestito/nuovoPrestito.html')
    });
    //modificaPrestito
    $('#modificaPrestito').click(function(){
        $('#ContainerBody').load('Prestito/modificaPrestito.html')
    });
    //eliminazionePrestito
    $('#eliminaPrestito').click(function(){
        $('#ContainerBody').load('Prestito/restituzione.html')
    });
})