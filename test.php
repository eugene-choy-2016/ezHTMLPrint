
<?php
    require_once "ezHTMLPrint.php";
    ezHTMLPrint::html_s();
    ezHTMLPrint::header(1,"Header 1 test");
    ezHTMLPrint::header(2,"Header 2 test");
    ezHTMLPrint::header(3,"header 3 test");

    
    ezHtmlPrint::html_e();
    ezHTMLPrint::htmlTagBalanced();
    ezHTMLPrint::ahref("http://www.google.com","Google");
    ezHtmlPrint::br();

    ezHTMLPrint::img("picture1.png");
    ezHtmlPrint::br();
    ezHTMLPrint::img("picture1.png",100,100);
?>
