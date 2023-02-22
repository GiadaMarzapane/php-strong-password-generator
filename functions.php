<?php
function generatePassword($arg) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"#$%&(){|}*+,-./:;<=>?@[\]^_~';
    $password = [];
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $arg; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password);
};