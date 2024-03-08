<?php
/*
PHP Strong Password Generator
nome repo: php-strong-password-generator
Descrizione:
-creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 

L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/

// var_dump('FUNZIONO')
session_start();
require_once __DIR__ . '/functions.php';

$newPassword = "";

if (isset($_GET['inputNumber'])) {
    $inputNumber = $_GET['inputNumber'];
    $newPassword = generatePassword($inputNumber);
    $_SESSION['password'] = $newPassword;
    header("Location: ./display_password.php");
}

require_once __DIR__ . '/html_head.php';
?>

<body class="bg-secondary">
    <div class="container m-auto pt-5 text-center">
        <h1 class="text-light">Strong Password Generator</h1>
        <form action="" method="get" class="d-flex flex-column align-items-center gap-2 pt-5 ">
            <label for="inputNumber">Choose the length of your new password (4 to 8 characters)</label>
            <input style="width: 50px;" type="number" id="inputNumber" name="inputNumber" min="4" max="8">

            <span class="mt-2">Include in my password (select at least one option)</span>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" name="includeNumbers" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-success text-light" for="btncheck1">Numbers</label>

                <input type="checkbox" class="btn-check" name="includeWords" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-success text-light" for="btncheck2">Words</label>

                <input type="checkbox" class="btn-check" name="includeSymbols" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-success text-light" for="btncheck3">Symbols</label>
            </div>

            <div class="form-check pt-2">
                <input class="form-check-input" type="checkbox" name="doNotIdenticalCharacters" id="doNotIdenticalCharacters" />
                <label class="form-check-label text-light " for="doNotIdenticalCharacters"> Do not repeat identical characters </label>
            </div>


            <button class="btn btn-dark mt-4 " type="submit">Generate password</button>
        </form>

        <!-- <?php if (isset($_GET['inputNumber'])) : ?> -->
        <!-- <?php endif ?> -->
    </div>


</body>

</html>