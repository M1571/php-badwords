<!-- ----------------------------- -->
<!-- PHP -->

<?php

// testo
$text= 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus officiis beatae nihil tempora repudiandae perferendis ea facilis eligendi nostrum culpa.';
// censura
$cens= '***';
// lunghezza testo
$text_lenght= strlen($text);

// -----------------------------

$bad_word= $_GET['bad_word']; 
$cens_bad_word= str_replace($bad_word, $cens, $text);
// lunghezza censura
$cens_lenght= strlen($cens_bad_word);

?>

<!-- ----------------------------- -->
<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1>TITOLONE</h1>
    <h3> <?php echo $text; ?> </h3>
    <p>Lunghezza testo: <?php echo $text_lenght; ?> parole</p>
    <h3> <?php echo $cens_bad_word; ?> </h3>
    <p>Lunghezza testo censurato: <?php echo $cens_lenght; ?> parole</p>
    
</body>
</html>