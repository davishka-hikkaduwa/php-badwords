<?php
/* Descrizione:
- Creare una variabile con un paragrafo di testo a vostra scelta.
- Stampare a schermo il paragrafo e la sua lunghezza.
- Una parola da censurare viene passata dall'utente tramite parametro GET.
- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con 
  tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

    $paragrafo = "Ogni operazione eseguita sul Web coinvolge un client ed un server. 
            Un client è un dispositivo (ad esempio un browser) che effettua una richiesta ad 
            un server remoto. Il server remoto attraverso un linguaggio di scripting 
            (come per esempio PHP) interpreta la richiesta del client ed invia una risposta 
            (ad esempio una pagina HTML, un oggetto JSON o un XML) al client. A questo punto 
            il client è in grado di interpretare, a sua volta, la risposta ricevuta e fornirla 
            all'utente; nel caso del browser riceverà una pagina HTML che mostrerà all'utente.";


    $replace = "***";

    $nuovoParagrafo = str_replace($_GET["search"], $replace, $paragrafo);
?>

<h1> Parola da cercare nel paragrafo --> <?= $_GET["search"] ?> </h1>

<div>
    <h2>Prima</h2>
    <p> <?= $paragrafo ?> </p>
    <p> Lunghezza --> <?= strlen($paragrafo); ?> </p>
</div>

<div>
    <h2>Dopo</h2>
    <p> <?= $nuovoParagrafo ?> </p>
    <p> Lunghezza --> <?= strlen($nuovoParagrafo); ?> </p>
</div>


