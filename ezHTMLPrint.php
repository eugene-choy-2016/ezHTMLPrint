<?php

/**
 * Main Class to call when printing HTMLcodes
 * @author eugene-choy-2016
 */

class ezHTMLPrint{

    public static $htmlTagBalance = 0;

    /**
     * Start of HTML tag
     * Adds 1 to HTML tag balance
     */
    public static function html_s(){
        echo "<html>";
        self::$htmlTagBalance += 1;
    }

    /**
     * End of HTML Tag
     * Minus 1 to HTML Tag balance
     */
    public static function html_e(){
        echo "</html>";
        self::$htmlTagBalance -= 1;
    }

    /**
     * Check if a HTML Tag is balanced if it is not balance echo out a error message and return false
     */
    public static function htmlTagBalanced(){
        if(self::$htmlTagBalance == 0){
            return true;
        }

        self::printEzHtmlPrintErrorMessage("HTML Tag not balanced. Please check");
        return false; 
    }

    /**
     * Print Header
     * Pass in header number and text
     */
    public static function header($headerNumber,$text){
        echo "<h$headerNumber>$text</h$headerNumber>";
    }

    /**
     * Print Paragraph with text
     * Pass in text
     */
    public static function para($text){
        echo "<p>$text</p>";
    }

    private static function printEzHtmlPrintErrorMessage($message){
        echo "ezHTMLPrint::$message";
    }
}

?>