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
        $characters .= '!#$%&*+,-.:;?[@]^_~';
    }

    $newPassword = "";
    if (strlen($characters) >= $inputNumber) {
        while (strlen($newPassword) <= $inputNumber) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $randomCharacter = $characters[$randomIndex];
            if (!$doNotIdenticalCharacters || ($doNotIdenticalCharacters && !str_contains($newPassword, $randomCharacter))) {
                $newPassword .= $randomCharacter;
            }
        }
    }

    return $newPassword;
}
