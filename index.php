<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- DESCRIZIONE:
       Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
       conosciamo nella documentazione) che:
       1. name sia più lungo di 3 caratteri,
       2. che mail contenga un punto e una chiocciola
       3. e che age sia un numero.
       Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->
    <?php
        $mail=  $_GET['email'];
        $nome=  $_GET['nome'];
        $eta=   $_GET['eta'];  
    ?> 
    <!-- controlla inserimento mail -->
     <?php
        if(empty ( $_GET['email'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per mail';
        }else if( strpos($_GET['email'] , '@' )=== false || strpos($_GET['email'] , '.' ) === false) {
            echo 'Email errata';
        }else{
            echo 'Email corretta';
        }
    ?>
     <!--controllo inserimento nome  -->
    <?php
        if(empty ( $_GET['nome'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per nome';
        }else if(strlen($_GET['nome']) > 3 ){
            echo 'nome valido';
        }else{
            echo 'nome non valido';
        }
    ?> 
    <!-- controllo numero -->
    <?php
        if(empty ( $_GET['eta'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per eta';
        }else if(is_int($_GET['eta'])){
            echo 'numero corretto';
        }else{
            echo 'non hai inserito un numero';
        }
    ?> 
</body>
</html>