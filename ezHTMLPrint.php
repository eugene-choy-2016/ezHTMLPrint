<?php

/**
 * Main Class to call when printing HTMLcodes
 * @author eugene-choy-2016
 */

class ezHTMLPrint
{
    
    public static $htmlTagBalance = 0;
    public static $headTagBalance = 0;
    public static $bodyTagBalance = 0;


    /**
     * Start of HTML tag <html>
     * Adds 1 to HTML tag balance
     */
    public static function html_s()
    {
        echo "<html>\n\n";
        self::$htmlTagBalance += 1;
    }

    /**
     * End of HTML Tag </html>
     * Minus 1 to HTML Tag balance
     */
    public static function html_e()
    {
        echo "\n\n</html>";
        self::$htmlTagBalance -= 1;
    }

    /**
     * Start of head Tag
     * Plus 1 to Head Tag balance
     */
    public static function head_s(){
        echo "<head>\n";
        self::$headTagBalance += 1;
    }

    /**
     * End of Head Tag
     * Minus 1 to Head Tag balance
     */
    public static function head_e(){
        echo "\n</head>";
        self::$headTagBalance -= 1;
    }

    /**
     * Start of Body Tag
     * Plus 1 to Body Tag Balance
     */
    public static function body_s(){
        echo "<body>\n";
        self::$bodyTagBalance += 1;
    }

    /**
     * End of Body Tag
     * Minus 1 to Body Tag Balance
     */
    public static function body_e(){
        echo "\n</body>";
        self::$bodyTagBalance -= 1;
    }

    /**
     * Check if a HTML Tag is balanced if it is not balance echo out a error message and return false
     */
    public static function htmlTagBalanced()
    {
        if (self::$htmlTagBalance == 0) {
            return true;
        }

        self::printEzHtmlPrintErrorMessage("HTML Tag not balanced. Please check and add in closing tag");
        return false; 
    }

    /**
     * Check if a head Tag is balanced if it is not balance echo out a error message and return false
     */
    public static function headTagBalanced(){
        if(self::$headTagBalance == 0){
            return true;
        }
        self::printEzHtmlPrintErrorMessage("Head Tag not balanced. Please check and add in closing tag");
    }

    /**
     * Check if a body Tag is balanced if it is not balance echo out a error message and return false
     */
    public static function bodyTagBalanced(){
        if(self::$bodyTagBalance == 0){
            return true;
        }
        self::printEzHtmlPrintErrorMessage("Body Tag not balanced. Please check and add in closing tag");
    }

    /**
     * Print Header
     * Pass in header number and text
     */
    public static function header($headerNumber, $text)
    {
        echo "<h$headerNumber>$text</h$headerNumber>\n";
    }

    /**
     * Print Paragraph with text
     * Parameter(s) :
     * $text - Pass in the text to be displayed in the paragraph
     */
    public static function para($text)
    {
        echo "<p>$text</p>\n";
    }

    /**
     * Break line <br>
     */
    public static function br()
    {
        echo "<br/>\n";
    }

    /**
     * Print title wit text.
     * Parameter(s) :
     * $text - Pass in the text to be displayed in the title
     */
    public static function title($text)
    {
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
    public static function ahref($url, $text)
    {
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
    public static function img()
    {
        $arguments = func_num_args();
        if ($arguments == 1) { //If only source is entered
            $src = func_get_arg(0);
            echo "<img src=\"$src\">\n";
        } else if ($arguments == 3) { //If width and height is entered as well
            $src = func_get_arg(0);
            $width = func_get_arg(1);
            $height = func_get_arg(2);
            echo "<img src=\"$src\" width=\"$width\" height= \"$height\">\n";
        } else {
            self::printEzHtmlPrintErrorMessage('At least 1 argument($src) required for img method.');
        }

    }

    /**
     * Print image tab with the source of image
     * Alternate text is allowed to be display if image cannot be displayed
     *
     */
    public static function img_alt()
    {
        $arguments = func_num_args();
        if ($arguments == 2) {
            $src = func_get_arg(0);
            $alt = func_get_arg(1);
            echo "<img src=\"$src\" alt=\"$alt\">\n";
        } else if ($arguments == 4) {
            $src = func_get_arg(0);
            $alt = func_get_arg(1);
            $width = func_get_arg(2);
            $height = func_get_arg(3);
            echo "<img src=\"$src\" alt=\"$alt\" width=\"$width\" height= \"$height\">\n";
        }else{
            self::printEzHtmlPrintErrorMessage('At least two arguments($src,$alt) needs to be passed into img_alt');
        }
    }
    /**
     * Print font in selected color
     */
    public static function coloredText($color,$text){
        echo "<font color=\"$color\">$text</font>";
    }

    /**
     * Used for printing error message generated from EzHTMLPrint
     */
    private static function printEzHtmlPrintErrorMessage($message)
    {
        trigger_error("ezHTMLPrint::$message");
        debug_print_backtrace();
    }

}
