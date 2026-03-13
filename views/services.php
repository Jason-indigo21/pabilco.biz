<?php
include("includes/services-content.php");

$langKey = (isset($isEn) && $isEn) ? "en" : "es";
$defaultService = $services[0] ?? [];
$requestedService = $_GET["service"] ?? "";

if ($requestedService === "") {
    $requestedService = $defaultService["link"][$langKey] ?? ($defaultService["link"]["en"] ?? "");
}

$selectedService = $defaultService;
foreach ($services as $service) {
    $linkEn = $service["link"]["en"] ?? "";
    $linkEs = $service["link"]["es"] ?? "";

    if ($requestedService === $linkEn || $requestedService === $linkEs) {
        $selectedService = $service;
        break;
    }
}
?>

<div class="tmp-service-details-area tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-service-details">
                    <div class="tmp-section-title-border text-center">
                        <div class="pres-line-separator-wrapper text-center mb--10">
                            <div class="line-separator line-left"></div>
                            <span class="subtitle">
                                <span class="subtitle-text"><?= $isEn ? "Service Details" : "Detalles del Servicio" ?></span>
                            </span>
                            <div class="line-separator line-right"></div>
                        </div>
                        <h1 class="title w-700 mb--30 tmp-title-split"><?= htmlspecialchars($selectedService["title"][$langKey] ?? "") ?></h1>
                    </div>

                    <div class="row g-5 mt--40 mt_md--20 mt_sm--20">
                        <div class="col-lg-8">
                            <div class="thumbnail thumbnail-large-details h-auto mb--30">
                                <img class="radius-10 w-100 jarallax-img" src="assets/img/services/<?= htmlspecialchars($selectedService["image"] ?? "") ?>" alt="Service Details">
                            </div>

                            <h2 class="title"><?= htmlspecialchars($selectedService["title"][$langKey] ?? "") ?></h2>

                            <div class="discription mt--30">
                                <?= trim($selectedService["content"][$langKey] ?? "") ?>
                            </div>

                            <div class="mt--30">
                                <a href="#" class="tmp-btn btn-primary"><?= htmlspecialchars($selectedService["button-message"][$langKey] ?? "") ?></a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt_md--30 mt_sm--30">
                            <div class="sticky-top-service">
                                <div class="tmp-single-wized services mb--30 tmponhover">
                                    <div class="wized-header">
                                        <h5 class="title"><?= $isEn ? "Services" : "Servicios" ?></h5>
                                    </div>
                                    <div class="wized-body">
                                        <ul class="single-categories">
                                            <?php foreach ($services as $service): ?>
                                                <?php
                                                $serviceLink = $service["link"][$langKey] ?? ($service["link"]["en"] ?? "");
                                                $queryParams = $_GET;
                                                $queryParams["service"] = $serviceLink;
                                                $url = "?" . http_build_query($queryParams);
                                                ?>
                                                <li class="tmponhover">
                                                    <a href="<?= htmlspecialchars($url) ?>">
                                                        <?= htmlspecialchars($service["title"][$langKey] ?? "") ?>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>