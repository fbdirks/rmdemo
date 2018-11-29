<?php
date_default_timezone_set('Europe/Amsterdam');
include "Pagina.php";
require_once "Rekenmachine.php"; // voorkomt iets strakker dat dingen meer keren worden ingelezen.
$page = new Pagina("Mijn Rekenmachine","rm.css");
$rm = new Rekenmachine; // rekenmachine aanmaken

$page->head();

// Roep de methode toon_machine daarvan op om de rekenmachine te tonen.
$rm->toon_machine(); // rekenmachine op scherm zetten

// methodes in actie zetten als op een knop is geklikt.
if (isset($_POST['bewerking'])) {
    $rm->invoer_ophalen();
    $rm->invoer_controle();
   
    if ($rm->ok) {
        $rm->berekening_uitvoeren();
        $rm->toon_resultaat();
    } else {
        $rm->toon_melding();
    }
}



$page->voet();
?>
