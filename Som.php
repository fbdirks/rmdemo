<?php

/**
 * SOM: de wiskundige uitwerking van een berekening
 * Alle interface elementen en controles zitten in Rekenmachine!
 * Deze klasse kan zich volledig concentreren op het rekenwerk.
 */

class Som {
    private $g1;
    private $g2;
    private $bewerking;
    private $resultaat;
	private $res;
    
    function __construct($b,$g1,$g2) {
    	$this->bewerking = $b;
    	$this->g1 = $g1;
    	$this->g2 = $g2;
    }
    
    function get_bewerking($b) {
        $this->bewerking = $b;
    }
    
    function get_getallen($a,$b) {
        $this->g1 = $a;
        $this->g2 = $b;    
    }
    
    function rekenuit() {
        
        switch($this->bewerking) {
            case "+": 
                $this->resultaat = $this->g1 + $this->g2;    
                break;
            case "-":
                $this->resultaat = $this->g1 - $this->g2;    
                break;
            case "*": 
                $this->resultaat = $this->g1 * $this->g2;    
                break;
            case "/": 
                $this->resultaat = $this->g1 / $this->g2;    
                break;
           	case "^": 
                $this->resultaat = pow($this->g1,$this->g2);    
                break;
            case ord($this->bewerking)==226: 
            	$this->resultaat = sqrt($this->g1);  
							$this->g2="";
                break;
            case "%": 
                $this->resultaat = $this->g1 * ($this->g2/100);    
                break;
            case "1/x": 
              	$this->resultaat = 1/$this->g1;    
                break;
        }
    }
    
    function result() {
		$this->res = array(	"resultaat"=>$this->resultaat,
							"g1"=>$this->g1,
							"g2"=>$this->g2);
			//print_r($this->res);
		return $this->res;
    }
	
	// alleen voor testdoeleinden.
	function toon_resultaat() {
		$this->rekenuit();
		$uitkomst = $this->result();
		print "-- $uitkomst[g1] $this->bewerking $uitkomst[g2] = {$uitkomst['resultaat']}<br>";
	}
	
}



if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) 	{   
	
	
	$s = new Som("+",1,2);
	$s->toon_resultaat();
	
	$s = new Som("-",15,32);
	$s->toon_resultaat();
	
	$s = new Som("*",8,12.5);
	$s->toon_resultaat();
	
	$s = new Som("/",14,4);
	$s->toon_resultaat();
	
	$s = new Som(chr(38),16,4);
	$s->toon_resultaat();
	
	
	
	
} 

?>