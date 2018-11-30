<?php

/*
Dit wordt een versie van de rekenmachine die er 'oud' moet gaan uitzien.
*/

/**
 * OOP-Calc
 * Rekenmachine op basis van Object Georienteerd PHP
 * Rekenmachine = de interface van de rekenmachine
 */

class RekenmachineOud
{
    function toon_machine(){
    		
        print "<form action=\"".$_SERVER['PHP_SELF']."\" name=\"blok\" method=\"post\">";
        ?>
        
        <table class="rekenmachine" style="font-family: Consolas">
        <tr>
        <td>Rekenmachine</td><td></td>";
        </tr><tr>
        <td>Getal 1:</td><td><input type="text" name="getal1" class="getal"></td>
        </tr><tr>
        <td>Getal 2:</td><td><input type="text" name="getal2" class="getal"></td>
        </tr><tr>
        <td>Bewerking</td><td>
        <input type="submit" name="bewerking" value="+">
        <input type="submit" name="bewerking" value="-">
        <input type="submit" name="bewerking" value="/">
        <input type="submit" name="bewerking" value="*">
        <br/>
        <input type="submit" name="bewerking" value="^">
        <input type="submit" name="bewerking" value="&radic;">
        <input type="submit" name="bewerking" value="%">
        <input type="submit" name="bewerking" value="1/x">
        </td>
        </tr></table>
        </form>
<?php
    }
    
    
}

