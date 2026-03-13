<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
if (isset($_REQUEST["lang"]) && $_REQUEST["lang"] == "en") {
    $isEn = true;
    include("lang/en.php");
} else {
    $isEn = false;
    include("lang/es.php");
}
include("includes/header.php");
include("includes/body.php");
include("includes/footer.php");
