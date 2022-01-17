<?php 

// 1. Creare una variabile con un paragrafo di testo a vostra scelta.
$text_with_badword = "E adesso sono cazzi miei!";

//3. Una parola da censurare viene passata dall'utente tramite parametro GET.
$text_with_censored = str_replace($_GET['censored'], '***' , $text_with_badword);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php BadWords</title>
</head>
<body>

<!-- 2. Stampare a schermo il paragrafo e la sua lunghezza. -->
<h2>Testo originale</h2>
<p><?php echo $text_with_badword ?></p>

<!-- 4. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<h2>Testo censurato</h2>
<p><?php echo $text_with_censored ?></p>
    
</body>
</html>