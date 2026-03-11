<?php
if (isset($_REQUEST["lang"]) && $_REQUEST["lang"] == "en") {
    if (isset($_REQUEST['page'])) {
        switch ($_REQUEST['page']) {
            case 'home':
                include("views/home.php");
                break;
            case 'about':
                include("views/about.php");
                break;
            case 'contact':
                include("views/contact.php");
                break;
            default:
                include("views/home.php");
        }
    } else {
        include("views/home.php");
    }
} else {
    if (isset($_REQUEST['página'])) {
        switch ($_REQUEST['página']) {
            case 'home':
                include("views/home.php");
                break;
            case 'about':
                include("views/about.php");
                break;
            case 'contact':
                include("views/contact.php");
                break;
            default:
                include("views/home.php");
        }
    } else {
        include("views/home.php");
    }
}

?>