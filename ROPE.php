<?php

// Voorbeeldje van OOP denken: een OOP rekenmachine

require_once("Pagina.php"); # blauwdruk voor een gewone pagina.
require_once("Som.php"); #hierin staan de blauwdrukken van de objecten SOM en rekenmachine    
require_once("Rekenmachine.php"); # bevat normaal en hor

// Pagina start
$pagina = new Pagina("OOP Rekenmachine","rmstijl.css");
$pagina->head();

// Pagina specifiek stukje opmaak. Niet in object rekenmachine stoppen.
print "<div id=\"container\">";
print "<h1 align=\"center\">OOP rekenmachine</h1>";

/* 
	Maak een instantie van de blauwdruk Rekenmachine.
	Dit is de plek om de varianten van de Rekenmachine neer te zetten.
	Het beste is het om de keuze voor een soort rekenmachine op de een of andere manier te automatiseren.
	Dat is hier nog niet gedaan.
*/

//$rm = new Rekenmachine_hor();
$rm = new Rekenmachine;

/* 
	De basisgedachte is dat de code hieronder niet meer afhangt van welke variant van Rekenmachine
	gestart gaat worden. 
*/

	
// Roep de methode toon_machine daarvan op om de rekenmachine te tonen.
$rm->toon_machine();

// Zet de verschillende methoden aan het werk:
if (isset($_POST['bewerking'])) {
    $rm->invoer_ophalen();
    $rm->invoer_controle();
   
    if ($rm->ok) {
        $rm->berekening_uitvoeren();
        $rm->toon_resultaat();
        //$rm->toon_melding();
    } else {
        $rm->toon_melding();
    }
}

print "</div>"; 

// pagina einde
$pagina->voet();
?>