# ERRORE NELLA LOGICA

La password generata risulta essere inputNumber + 1.
La logica tiene conto dell'index 0 nel ciclo while, dunque se il numero inserito è 4 ciclerà 01234.
Vorrei risolvere senza stravolgere la logica già inserita.

<!-- while (strlen($newPassword) <= $inputNumber) { -->

Rimuovendo il comparatore di uguaglianza (=) dal ciclo while, la pagina va in errore.

## RISOLTO

<!-- <?php if (strlen($newPassword) > 4) : ?> -->

Nel file display_password.php, all'interno della condizione per la visualizzazione della password creata o del messaggio di errore, mancava l'uguale all'operatore comparativo del length della newPassword. La pagina andava dunque in errore.

<!-- <?php if (strlen($newPassword) >= 4) : ?> -->

Con questa correzione alla logica, posso ora rimuovere il comparatore di uguaglianza dal ciclo while ed il codice funziona perfettamente.

<!-- while (strlen($newPassword) < $inputNumber) { -->
