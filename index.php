<?php
    $alphabet = [
        'minusc' => 'abcdefghijklmnopqrstuvwxyz',
        'maiusc' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'numbers' => '1234567890',
        'symbols' => '!"#$%&(){|}*+,-./:;<=>?@[\]^_~'
    ];

    function generatePassword($arg, $allCharacters){
        $password = [];
        while (count($password) < $arg) {
            foreach($allCharacters as $element){
                $randNum = rand(0, strlen($element));
                $password[] = $element[$randNum];
            }
        }
        return implode($password);
    };
    
    $passlength = $_GET['pass-length'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <main>
        <h1>Strong Password Generator</h1>

        <form action="" method="get">
            <label for="pass-length">Lunghezza Password:</label>
            <input type="number" name="pass-length" id="pass-length" min="4" max="">
            <button type="submit">Genera</button>
        </form>
        <h3>La tua password generata è:</h3>
        <p>
            <?php
                echo generatePassword($passlength, $alphabet);
            ?>
        </p>
    </main>
</body>

</html>