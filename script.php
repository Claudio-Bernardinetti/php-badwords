<?php
// Recupero i dati dal form
$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];

// Stampo il paragrafo e la sua lunghezza
echo "<p>Il paragrafo inserito è:</p>";
echo "<p>$paragrafo</p>";
echo "<p>La lunghezza del paragrafo è: " . strlen($paragrafo) . " caratteri.</p>";

// Sostituisco la parola da censurare con tre asterischi
$paragrafo_censurato = str_replace($parola, "***", $paragrafo);

// Stampo il paragrafo censurato e la sua lunghezza
echo "<p>Il paragrafo censurato è:</p>";
echo "<p>$paragrafo_censurato</p>";
echo "<p>La lunghezza del paragrafo censurato è: " . strlen($paragrafo_censurato) . " caratteri.</p>";
?>