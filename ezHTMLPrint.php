<?php

/**
 * Main Class to call when printing HTMLcodes
 * @author eugene-choy-2016
 */

class ezHTMLPrint{
    public static function printH($headerNumber,$text){
        echo "<h$headerNumber>$text</h$headerNumber>";
    }
}

?>