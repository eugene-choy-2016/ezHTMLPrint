

<html>

<body>
<?php
    require_once "ezHTMLPrint.php";

    ezHTMLPrint::header(1,"Header 1 test");
    ezHTMLPrint::header(2,"Header 2 test");
    ezHTMLPrint::header(3,"header 3 test");

    ezHTMLPrint::html_s();
    ezHtmlPrint::html_e();
    ezHTMLPrint::htmlTagBalanced();

    ezHTMLPrint::printH(1,"Header 1 test");
    ezHTMLPrint::printH(2,"Header 2 test");
    ezHTMLPrint::printH(3,"header 3 test");


?>

</body>
</html>