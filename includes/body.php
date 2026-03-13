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
            case 'faqs':
                include("views/faqs.php");
                break;
            case 'contact':
                include("views/contact.php");
                break;
            case 'services':
                include("views/services.php");
                break;
            case 'take-the-first-step':
                include("views/take-the-first-step.php");
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
            case 'faqs':
                include("views/faqs.php");
                break;
            case 'servicio':
                include("views/services.php");
                break;
            case 'da-el-primer-paso':
                include("views/take-the-first-step.php");
                break;
            default:
                include("views/home.php");
        }
    } else {
        include("views/home.php");
    }
}
