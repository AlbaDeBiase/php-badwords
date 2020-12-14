<?php
//leggo il parametro
$nome = $_GET['nome'];

// creo un paragrafo
$frase_paragrafo = "Io sono una persona malata… Sono una persona cattiva. Io sono uno che non ha niente di attraente. Credo d’avere una malattia al fegato. Anche se d’altra parte non ci capisco un’acca della mia malattia, e non so che cosa precisamente ci sia di malato in me. " ;

//  verifico la lunghezza originale del paragrafo
$paragrafo_originale = strlen($frase_paragrafo);

// sostituisco  all'interno del paragrafo tutte le occorrenze della "badword"
$frase_sostituita = str_replace($nome, '***', $frase_paragrafo);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>
            Parola censurata: <?php echo $nome ?>
        </h1>
        <pre>
            Lunghezza del paragrafo: <?php var_dump($paragrafo_originale); ?>
        </pre>
        <pre>
            <?php echo $frase_sostituita ?>
        </pre>

    </body>
</html>
