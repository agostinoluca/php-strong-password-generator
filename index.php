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
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-secondary">
    <div class="container m-auto pt-5 text-center">
        <h1 class="text-light">Strong Password Generator</h1>
        <form action="" method="get" class="d-flex flex-column align-items-center gap-2 pt-5 ">
            <label for="inputNumber">Choose the length of your new password (4 to 8 characters)</label>
            <input style="width: 50px;" type="number" id="inputNumber" name="inputNumber" min="4" max="8">
            <button class="btn btn-dark" type="submit">Generate password</button>
        </form>
        <?php if (isset($_GET['inputNumber'])) : ?>

            <div class="d-flex justify-content-center mt-5">
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header text-dark fw-bolder">Your new strong password:</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $newPassword ?></h5>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>


</body>

</html>