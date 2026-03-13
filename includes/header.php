<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <meta name="description"
        content="<?= $isEn ? 'PABILCO, S.A. - We drive your business growth with strategy, data, and technology' : 'PABILCO, S.A. - Impulsamos el crecimiento de tu negocio con estrategia, datos y tecnología' ?>">

    <title>Pabilco, S.A.</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS ============================================ -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- google fonts end-->

    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins/animation.css" rel="stylesheet">
    <link href="assets/css/plugins/feature.css" rel="stylesheet">
    <link href="assets/css/plugins/magnify.min.css" rel="stylesheet">
    <link href="assets/css/plugins/slick.css" rel="stylesheet">
    <link href="assets/css/plugins/slick-theme.css" rel="stylesheet">
    <link href="assets/css/plugins/lightbox.css" rel="stylesheet">
    <link href="assets/css/plugins/odometer.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=4.3.1">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="demo-construction active-light-mode">
    <main class="page-wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6">
                        <div class="topbar-left d-flex align-items-center">
                            <ul class="contact-info list-unstyled d-flex align-items-center mb-0">
                                <li><i class="feather-mail"></i><a
                                        href="mailto:support@pabilco.biz">support@pabilco.biz</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6">
                        <div class="topbar-right d-flex align-items-center justify-content-end">
                            <?php
                                $language = $_GET['lang'] ?? 'es';
                                $page     = $_GET['page'] ?? '';
                                $pagina   = $_GET['página'] ?? '';

                                $enUrl = '';
                                $esUrl = '';

                                if ($language === 'en') {
                                    $esSlug = $slugMap[$page] ?? '';

                                    $enUrl = '?lang=en' . ($page ? "&page=$page" : '');
                                    $esUrl = $esSlug ? "?página=$esSlug" : './';

                                } else {
                                    $enSlug = $reverseSlugMap[$pagina] ?? '';

                                    $enUrl = '?lang=en' . ($enSlug ? "&page=$enSlug" : '');
                                    $esUrl = $pagina ? "?página=$pagina" : './';
                                }
                            ?>
                            <ul class="language list-unstyled d-flex align-items-center mb-0">
                                <li><a href="<?= htmlspecialchars($enUrl) ?>"><img src="assets/img/en.jpg" alt="English"
                                            style="width: 40px;"></a></li>
                                <li>|</li>
                                <li><a href="<?= htmlspecialchars($esUrl) ?>"><img src="assets/img/es.jpg" alt="Spanish"
                                            style="width: 40px;height: 25px;"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6"></div>
                </div>
            </div>
        </div>
        <header class="tmp-header header-default header-left-   align header-sticky-smooth header-sticky">
            <div class="container position-relative">

                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-6 col-11 position-static">
                        <div class="header-left d-flex align-items-center">
                            <div class="logo">
                                <a href="<?= $isEn ? "?lang=en" : "./" ?>">
                                    <img class="logo-light" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                                    <img class="logo-dark" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                                </a>
                            </div>
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <?php foreach ($lang['menu'] as $key => $value) {
                                        if (is_array($value)) { ?>
                                            <li class="has-droupdown has-menu-child-item"><a
                                                    href="#"><?= ucwords(str_replace('-', ' ', $key)); ?></a>
                                                <ul class="submenu">
                                                    <?php foreach ($value as $subkey => $subvalue) { ?>
                                                        <li><a
                                                                href="?<?= $isEn ? 'lang=en&page=what-we-do&service=' . $subkey : 'página=lo-qué-hacemos&servicio=' . $subkey; ?>"><?= $subvalue; ?></a>
                                                        </li>
                                                    <?php } ?>  
                                                </ul>
                                            </li>
                                        <?php } else { ?>
                                            <li><a
                                                    href="?<?= $isEn ? 'lang=en&page=' . $key : 'página=' . $key; ?>"><?= $value; ?></a>
                                            </li>
                                        <?php }
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-0 col-md-6 col-1">
                        <div class="header-right with-search">
                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="<?= $isEn ? "?lang=en" : "./" ?>">
                            <img class="logo-light" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                            <img class="logo-dark" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu onepagenav">
                    <?php foreach ($lang['menu'] as $key => $value) {
                        if (is_array($value)) { ?>
                            <li class="has-droupdown has-menu-child-item">
                                <a data-bs-toggle="collapse" data-bs-target="#submenu-<?= str_replace(' ', '-', $key); ?>"
                                    aria-expanded="false"
                                    aria-controls="submenu-<?= str_replace(' ', '-', $key); ?>"><?= $key; ?></a>
                                <ul class="submenu collapse" id="submenu-<?= str_replace(' ', '-', $key); ?>">
                                    <?php foreach ($value as $subkey => $subvalue) { ?>
                                        <li><a
                                                href="?<?= $isEn ? 'lang=en&page=' . $subkey : 'página=' . $subkey; ?>"><?= $subvalue; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="with-megamenu"><a
                                    href="?<?= $isEn ? 'lang=en&page=' . $key : 'página=' . $key; ?>"><?= $value; ?></a></li>
                        <?php }
                    }
                    ?>
                </ul>
            </div>
        </div>