<?php
$error = null;

if ((isset($_GET['pass-length'])) && (is_numeric($_GET['pass-length']))) {
    $passlength = intval($_GET['pass-length']);

    if (($passlength < 8) || ($passlength > 32)) {
        $error = 'La password deve avere minimo 8 caratteri e massimo 32';
    } else {
        function generatePassword($arg)
        {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"#$%&(){|}*+,-./:;<=>?@[\]^_~';
            $password = [];
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < $arg; $i++) {
                $n = rand(0, $alphaLength);
                $password[] = $alphabet[$n];
            }
            return implode($password);
        };
    }
}

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
            <input type="number" name="pass-length" id="pass-length" min="8" max="32">
            <button type="submit">Genera</button>
        </form>
        <p>
            <strong>
                <?php
                if ($error != null) {
                    echo $error;
                }
                ?>
            </strong>
        </p>
        <h3>La tua password generata è:</h3>
        <p>
            <?php
            echo generatePassword($passlength);
            ?>
        </p>
    </main>
</body>

</html>