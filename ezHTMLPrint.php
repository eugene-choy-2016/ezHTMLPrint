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
        echo "<html>\n\n";
        self::$htmlTagBalance += 1;
    }

    /**
     * End of HTML Tag </html>
     * Minus 1 to HTML Tag balance
     */
    public static function html_e(){
        echo "\n\n</html>";
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
        echo "<h$headerNumber>$text</h$headerNumber>\n";
    }

    /**
     * Print Paragraph with text
     * Parameter(s) :
     * $text - Pass in the text to be displayed in the paragraph
     */
    public static function para($text){
        echo "<p>$text</p>\n";
    }

    /**
     * Break line <br>
     */
    public static function br(){
        echo "<br/>\n";
    }

    /**
     * Print title wit text.
     * Parameter(s) :
     * $text - Pass in the text to be displayed in the title
     */
    public static function title($text){
        echo "<title>$text</title>\n";
    }

    /**
     * Print ahref with text for HTML Link <ahref>.
     * Parameter(s):
     * 
     * $url - The string of the url to be directed to.
     * 
     * $text - Text to display.
     * @param $url - The URL to be directed to.
     * @param $text - The text to be displayed.
     */
    public static function ahref($url,$text){
        echo "<a href=\"$url\">$text</a>\n";
    }

    /**
     * Print image tab with source of image. <img src=xx width=xx height=xx>.
     * At least $src must be passed in for this method to work
     * Parameter(s):
     * 
     * $src - The location of the image
     * 
     * $width,$height - The width and height of the image
     */
    public static function img(){
        $arguments = func_num_args();
        if( $arguments == 1){ //If only source is entered
            $src = func_get_arg(0);
            echo "<img src=\"$src\">\n";
        }else if ($arguments == 3){ //If width and height is entered as well
            $src = func_get_arg(0);
            $width = func_get_arg(1);
            $height = func_get_arg(2);
            echo "<img src=\"$src\" width=\"$width\" height= \"$height\">\n";
        }else{
            self::printEzHtmlPrintErrorMessage("At least 1 argument required for img method.");
        }
       
    }

    /**
     * Print image tab with the source of image
     * Alternate text is allowed to be display if image cannot be displayed
     * 
     */
    public static function img_alt($src,$alt,$width,$height){
        $arguments = func_num_args();
        if($arguments == 2){

        }
    }

    private static function printEzHtmlPrintErrorMessage($message){
        echo "ezHTMLPrint::$message";
    }


}

?>