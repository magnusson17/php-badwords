<!-- 

1) Creare una variabile con un paragrafo di testo a vostra scelta.

2) Stampare a schermo il paragrafo e la sua lunghezza.

3) Una parola da censurare viene passata dall'utente tramite parametro GET.

4) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

-->

<?php 
$phrase = 'ma che cazzo dici?';
$paramUri = ( isset($_GET['censura']) ) ? $_GET['censura'] : '';
$phraseCensured = str_replace($paramUri, '***', $phrase) 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php censura</title>
</head>

<body>
    <p>
        <?php echo $phrase ?>
    </p>
    <p> 
        (la lunghezza della frase è di 
        <?php echo strlen($phrase) ?>
        caratteri)
    </p>

    <form method="GET">
        <input type="text" name="censura" placeholder="censura una parola">
        <button type="submit">avanti</button>
    </form>

    <p>
        <?php echo $phraseCensured ?>
    </p>
    <p> 
        (la lunghezza della nuova frase è di 
        <?php echo strlen($phraseCensured) ?>
        caratteri)
    </p>
</body>
</html>