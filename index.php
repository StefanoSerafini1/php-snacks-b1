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
       <h1>Risultato controllo per accesso</h1>
    <?php
        $mail=false;
        $nome= false;
        $eta=  false;  
    ?> 
    <!-- controlla inserimento mail -->
     <?php
     //controllo prima che ci sia scritto qualcosa e poi che siano presenri contemporaneamente entrambe le casistiche
        if(empty ( $_GET['email'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per mail';
        }else if( strpos($_GET['email'] , '@' )=== false || strpos($_GET['email'] , '.' ) === false) {
            echo 'Email errata <br>';
            $mail=false;
        }else{
            $mail=true;
        }
    ?>
     <!--controllo inserimento nome  -->
    <?php
    //controllo prima che ci sia scritto qualcosa e poi se la stringa è più lunga di 3 caratteri
        if(empty ( $_GET['nome'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per nome';
        }else if(strlen($_GET['nome']) > 3 ){
            $nome=true;
        }else{
            echo 'nome non valido <br>';
            $nome=false;
        }
    ?> 
    <!-- controllo numero -->
    <?php
    //controllo prima che ci sia scritto qualcosa poi che sia un numero
        if(empty ( $_GET['eta'] ) ) {
            echo 'ERRORE Non è stato inserito nessun valore per eta';
        }else if(is_numeric($_GET['eta'])){
            $eta=true;
        }else{
            echo 'non hai inserito un numero <br>';
            $eta=false;
        }
    ?>
    <!-- stampa se tutto corretto -->
    <?php
    //stampo accesso riuscito solo se tutte e tre le condizioni sono vere
        if($mail=true && $nome=true && $eta=true){
            echo 'ACCESSO RIUSCITO';
        }else{
            echo 'ACCESSO NEGATO';
        }
    ?>
</body>
</html>