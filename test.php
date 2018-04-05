
<?php
    require_once "ezHTMLPrint.php";
    ezHTMLPrint::html_s();
    ezHTMLPrint::header(1,"Header 1 test");
    ezHTMLPrint::header(2,"Header 2 test");
    ezHTMLPrint::header(3,"header 3 test");

    ezHTMLPrint::ahref("http://www.google.com","Google");


    ezHTMLPrint::img("picture1.png",100,100);


    ezHTMLPrint::coloredText("red","Hello testing the coloredText");

?>
