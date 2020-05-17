<!DOCTYPE html>
<html>
    <head>
        <title> Prova Titolo Pagina </title>
    </head>
    <body>
        <h1> Prova Intestazione</h1>
        <ol>
            <li>Elemento 1 </li>
            <li>Elemento 2 </li>
            <li>Elemento 3 </li>
        </ol>
<?php 
    $provaAssociativo = array('chiave' => "elemento",'chiave2' => "elemento2" );
    print_r($provaAssociativo);
    print "<br>".$provaAssociativo['chiave'];
    
?>
        
    </body>
</html>