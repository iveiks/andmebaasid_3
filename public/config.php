<?php

// *** Protseduuriline *** //
// Sinu andmed
$db_server = 'db'; // Kuna kasutan Dockerit, siis muutsin selle 'db' (yaml failis andmebaasi konteineri hostname), enne oli 'localhost'
$db_andmebaas = 'autorent';
$db_kasutaja = 'admin'; // Vaikimisi 'root', kuid lisasin phpMyadminis 'admin' kasutaja, piiratud õigustega, nagu tunniski
$db_salasona = 'Passw0rd';


// Ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);


// Ühenduse kontroll
if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}
?>