<?php
function generatePassword($inputNumber, $includeNumbers)
{
    $characters = '';
    if ($includeNumbers) {
        $characters .= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&*+,-.:;<>?[@]^_~';
    }
    $newPassword = "";
    for ($i = 0; $i < $inputNumber; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $randomCharacter = $characters[$randomIndex];
        $newPassword .= $randomCharacter;
    }
    return $newPassword;
}
