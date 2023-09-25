<?php

$message = $_GET['message'];
$censoredWord = $_GET['censoredWord'];
$result = strlen($message);
$resultUpdated = str_replace($censoredWord,'***',$message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il messaggio è:
        <?php echo($message)?>
         - Numero caratteri: 
        <?php echo($result) ?>
    </h1>
    <h2>
    <?php echo($resultUpdated) ?>
    - Numero caratteri: 
        <?php echo($result) ?>
    </h2>
</body>
</html>