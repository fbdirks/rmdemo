<?php

/**
 * Pagina: 
 * Data & Functies die met een webpagina te maken hebben.
 *
 		Deze zeer simpele uitwerking heeft slechts de volgende methoden:
 		a. de constructor  ($voorbeeld = new Pagina("Mijn titel","mijncss.css")
 			 waarmee een nieuwe pagina 'gemaakt wordt'. De twee parameters zijn:
 			 - titel van de pagina
 			 - (volledige) naam van het stylesheet
 		b. head() -> zet de kopinformatie op de pagina.
 		c. bodystart() -> start het body gedeelte van de pagina
 		d. voet() -> zet de voet informatie op de pagina.
 
 		Uitbreidingen zouden kunnen zijn:
 		* een methode die controleert of iemand wel ingelogd is
 		* een methode die commentaren en discussies toestaat
 		* een methode die een navigatiesysteem neerzet
 		* een 'breadcrumb' methode
 */

class Pagina {
    
    private $titel;
    private $stylesheet;
    
    function __construct($title="Webpagina",$stylesheet="geen") {
    	$this->titel=$title;
    	$this->stylesheet=$stylesheet;
    }
    
    // In de volgende code regels komt vaak \n voor,
	// Dit zorgt voor een linebreak. Alleen nodig voor mensen!
	// De browser voert het ook prima uit zonder die \n\
	// Gebruik "" als je \n gebruikt, anders krijg je rare dingen..
	
    function head() {
    	// plaatst de kop met een verwijzing naar een stylesheet en een titel.
    	$p = "<!DOCTYPE html>\n";
    	$p .= "<html>\n";
    	$p .= "<head>\n";
    	$p .= "<title>".$this->titel."</title>\n";
    	// Dit moet eigenlijk anders, automatiseren?
    	$p .= "<link href=\"https://fonts.googleapis.com/css?family=Oxygen+Mono\" rel=\"stylesheet\">\n";
    	//------------
    	if ($this->stylesheet != "geen") {
    		$p .= "<link rel=\"stylesheet\" href=\"".$this->stylesheet."\" type=\"text/css\" media=\"all\">\n";
    	}
    	$p .= "</head>\n<body>";
		$p .= "Demo ".$this->titel."\n";
		$p .= "<hr>";
    	print "$p";
    }
    
    
    function voet() {
    	print "\n<hr>\n";
    	print "<h6 align=\"center\">&copy; ".date("Y")." Ogol industries</h6>\n";
    	print "</body>\n";
    	print "</html>\n";
    }
    
    function is_ingelogd() {
    	// todo
    }
    
    function broodkruimel() {
    	// todo
    	
    }
}

?>