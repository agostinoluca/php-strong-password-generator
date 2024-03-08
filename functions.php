<?php
function generatePassword($inputNumber, $includeNumbers, $includeLetters, $includeSymbols, $doNotIdenticalCharacters)
{
    $characters = '';
    if ($includeNumbers) {
        $characters .= '0123456789';
    }
    if ($includeLetters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($includeSymbols) {
        $characters .= '!#$%&*+,-.:;<>?[@]^_~';
    }

    if ($doNotIdenticalCharacters) {
        // logic?
    }

    $newPassword = "";
    for ($i = 0; $i < $inputNumber; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $randomCharacter = $characters[$randomIndex];
        $newPassword .= $randomCharacter;
    }
    return $newPassword;
}
