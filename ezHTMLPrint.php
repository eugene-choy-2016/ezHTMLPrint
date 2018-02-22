<?php

/**
 * Main Class to call when printing HTMLcodes
 * @author eugene-choy-2016
 */

class ezHTMLPrint{

    public static $htmlTagBalance = 0;

    /**
     * Start of HTML tag <html>
     * Adds 1 to HTML tag balance
     */
    public static function html_s(){
        echo "<html>";
        self::$htmlTagBalance += 1;
    }

    /**
     * End of HTML Tag </html>
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

    /**
     * Break line
     */
    public static function br(){
        echo "<br/>";
    }

    /**
     * Print title wit text
     * Pass in text
     */
    public static function title($text){
        echo "<title>$text</title>";
    }

    /**
     * Print ahref with text for HTML Link
     * Pass in a URL and text
     */
    public static function ahref($url,$text){
        echo "<a href=\"$url\">$text</a>";
    }

    /**
     * Print image tab with source of image
     * Pass in the source of the image (URL/File path)
     */
    public static function img($src,$width,$height){
        $arguments = func_num_args();
        if( $arguments == 1){ //If only source is entered
            echo "<img src=\"$src\">";
        }else if ($arguments == 3){ //If width and height is entered as well
            echo "<img src=\"$src\" width=\"$width\"> height= \"$height\"";
        }
        
    }

    private static function printEzHtmlPrintErrorMessage($message){
        echo "ezHTMLPrint::$message";
    }


}

?>