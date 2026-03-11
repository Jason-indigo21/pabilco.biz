<?php $services = array_values($lang['home_services']); ?>
<!-- demo banner area start -->
<div class="demo-banner-area-start-solar tmp-section-gap height-650 bg_image bg_image--27">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12">
                <div class="inner no-radious text-center">
                    <h1 class="title w-800">
                        <?= $isEn ? "We drive your <span class='theme-gradient'>business growth</span> with strategy, data, and technology" : "Impulsamos el <span class='theme-gradient'>crecimiento de tu negocio</span> con estrategia, datos y tecnología" ?>

                    </h1>

                    <div cla ss="tmp-personal-portfolio-content">
                        <div cla ss="view-more-project">
                            <a c lass="btn-read-more"
                                href="?<?= $isEn ? "lang=en&page=online-agenda" : "página=agenda-online" ?>">
                                <span><?= $isEn ? "Let's Talk About Your Business" : "Hablemos Sobre Tu Negocio" ?><i
                                        class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- demo banner area end -->





<!-- auto slider service -->
<div class="auto-slider-service tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-layout-presentation-box tmponhover">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 order-2 order-lg-1">


                            <div class="tmp-section-title-border mb--40 text-start">
                                <h3 class="title w-700 tmp-title-split">
                                    <?= $isEn ? "Management, Digital Marketing, and Digital Transformation Consulting in Uruguay" : "Consultoría en Gestión, Marketing Digital y Transformación Digital en Uruguay" ?>
                                </h3>
                            </div>
                            <?= $isEn ? "<p>We help companies and organizations grow sustainably by combining business strategy, digital marketing, technology, and data analysis. We work together with leaders and teams to organize, optimize, and scale their businesses in increasingly dynamic and competitive environments.</p>
                            <p>We do not offer generic solutions; we design tailor-made strategies aligned with each organization's fundamental objectives.</p>" : "<p>Ayudamos a empresas y organizaciones a crecer de forma sostenible, combinando estrategia empresarial, marketing digital, tecnología y análisis de datos. Trabajamos junto a líderes y equipos para ordenar, optimizar y escalar sus negocios en entornos cada vez más dinámicos y competitivos.</p>
                            <p>No ofrecemos soluciones genéricas: diseñamos estrategias a medida, alineadas con los objetivos reales de cada organización.</p>" ?>
                            <div class="read-more-btn mt--30">
                                <a class="tmp-btn icon-hover text-center"
                                    href="?<?= $isEn ? "lang=en&page=online-agenda" : "página=agenda-online" ?>">
                                    <span
                                        class="btn-text"><?= $isEn ? "Let's Talk About Your Business" : "Hablemos Sobre Tu Negocio" ?></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12 col-12 order-1 order-lg-2">
                            <div class="thumbnail invers-anime home-img-1">
                                <img src="assets/images/about/29.webp" alt="residential-construction">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- auto slider service end -->

<div class="sticky-wrapper-about-fluid">
    <!-- about area fluid start -->
    <div class="tmp-about-area-fluid">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-thumbnail invers-anime">
                        <img src="assets/images/about/32.webp" alt="why">
                    </div>
                </div>
                <div class="col-lg-6 pl--40 pt_lg--40 pb_lg--40 pl_sm--0">
                    <div class="content" style="max-width: 95%;">
                        <div class="tmp-section-title-border text-start about-style-4 pt_md--60 pt_sm--40">
                            <h2 class="title w-700 mb--30 tmp-title-split">
                                <?= $isEn ? "Strategy first. Execution with a focus on results." : "Estrategia primero. Ejecución con foco en resultados." ?>
                            </h2>
                            <?= $isEn ? "<p>We believe that growth is not achieved with isolated actions, but with clear decisions, well-designed processes, and reliable data. That's why we accompany our customers from strategic definition to continuous implementation and optimization.</p><p>We work as strategic partners, integrating into teams to deliver real, measurable impact.</p>" : "<p>Estrategia primero. Ejecución con foco en resultados.</p>
                            <p>Trabajamos como socios estratégicos, integrándonos a los equipos para generar un impacto real y medible.</p>" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-flex-between">
                    <div class="tmp-section-title-border text-start">
                        <div class="pres-line-separator-wrapper text-start mb--10">
                            <span class="subtitle">
                                <span class="number">03</span>
                                <span class="subtitle-text"><?= $isEn ? "Our Services" : "Nuestros Servicios" ?></span>
                            </span>
                            <div class="line-separator line-right"></div>
                        </div>
                        <h2 class="title w-700 tmp-title-split"><?= $isEn ? "What we do for <span class='theme-gradient'>your business</span>" : "Lo que hacemos por <span class='theme-gradient'>tu negocio</span>" ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 mt--10">
            <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div class="tmp-card box-card-style-default bentostyle-left-blog tmponhover mb--30">
                        <div class="inner">
                            <div class="thumbnail invers-anime">
                                <a class="image" href="#">
                                    <img loading="lazy" class="w-100 home-service-1-2" src="assets/images/blog/09.webp"
                                        alt="<?= $services[$i]['title']; ?>">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#">
                                        <?= $services[$i]['title']; ?>
                                    </a>
                                </h4>
                                <p class="descriptiion">
                                    <?= $services[$i]['content']; ?>
                                </p>
                                <div class="read-more-btn">
                                    <a class="btn-read-more" href="#">
                                        <span>
                                            <?= $services[$i]['button']; ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="col-lg-7 d-flex flex-column align-items-center justify-content-center">
                <?php for ($i = 2; $i < count($services); $i++): ?>
                    <div class="tmp-card box-card-style-default card-list-view bentostyle tmponhover">
                        <div class="inner">
                            <div class="thumbnail invers-anime">
                                <a class="image" href="#">
                                    <img loading="lazy" src="assets/images/blog/10.webp"
                                        alt="<?= $services[$i]['title']; ?>">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#"><?= $services[$i]['title']; ?></a>
                                </h4>
                                <p class="descriptiion">
                                    <?= $services[$i]['content']; ?>
                                </p>
                                <div class="read-more-btn">
                                    <a class="btn-read-more" href="#">
                                        <span><?= $services[$i]['button']; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>

<!-- Start Service__Style--1 Area  -->
<div class="tmp-service-area tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">04</span>
                            <span class="subtitle-text">Services</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Our Popular Services.</h2>
                </div>
            </div>
        </div>

        <div class="row g-5 service-wrapper mt--10">
            <div class="col-lg-12">
                <div class="inversweb-service-main-wrapper-list">

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/10.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Home Construction</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/11.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Commercial Build</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/12.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Architecture Design</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/13.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Project Management</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/14.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Cost Estimation</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/15.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Renovation</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/10.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Maintenance</h5>
                        </div>
                    </a>

                    <a href="service-details.html" class="single-service-wrapper tmponhover">
                        <div class="thumbnail invers-anime">
                            <img src="assets/images/services/11.webp" alt="service">
                        </div>
                        <div class="content">
                            <h5 class="title">Interior Fit-Out</h5>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- End Service__Style--1 Area  -->



<!-- tmp business case area start -->
<div class="tmp-business-case tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">03</span>
                            <span class="subtitle-text">Case Studies</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Our Construction Projects</h2>
                    <p class="description b1 tmp-title-split-p">
                        Explore some of our completed construction projects that showcase
                        <br>quality craftsmanship, smart planning, and durable results.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-5 mt--10">
            <div class="col-lg-6 col-md-6 col-sm-12 tmp-jump__item">
                <div class="single-project-style-three invers-anime">
                    <a href="portfolio-details.html" class="thumbnail">
                        <img loading="lazy" src="assets/images/portfolio/29.webp" alt="project">
                    </a>
                    <div class="inner-content tmponhover">
                        <a href="portfolio-details.html">
                            <h4 class="title">Residential Building</h4>
                        </a>
                        <span>Home Construction</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tmp-jump__item">
                <div class="single-project-style-three invers-anime">
                    <a href="portfolio-details.html" class="thumbnail">
                        <img loading="lazy" src="assets/images/portfolio/28.webp" alt="project">
                    </a>
                    <div class="inner-content tmponhover">
                        <a href="portfolio-details.html">
                            <h4 class="title">Commercial Complex</h4>
                        </a>
                        <span>Commercial Construction</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tmp-jump__item">
                <div class="single-project-style-three invers-anime">
                    <a href="portfolio-details.html" class="thumbnail">
                        <img loading="lazy" src="assets/images/portfolio/30.webp" alt="project">
                    </a>
                    <div class="inner-content tmponhover">
                        <a href="portfolio-details.html">
                            <h4 class="title">Modern Renovation</h4>
                        </a>
                        <span>Renovation Project</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tmp-jump__item">
                <div class="single-project-style-three invers-anime">
                    <a href="portfolio-details.html" class="thumbnail">
                        <img loading="lazy" src="assets/images/portfolio/31.webp" alt="project">
                    </a>
                    <div class="inner-content tmponhover">
                        <a href="portfolio-details.html">
                            <h4 class="title">Interior Fit-Out</h4>
                        </a>
                        <span>Interior Construction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- tmp business case area end -->





<section class="tmp-get-in-touch-area area-2 tmp-section-gapBottom">
    <div class="container">
        <div class="section-inner">
            <div class="left-image">
                <img src="assets/images/contact/get-bg.webp" width="420" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="call-to:+00449922097788"><i class="feather-phone"></i></a>
                </div>
                <div class="text">
                    <h4 class="title">Have Any Questions? Call Us Anytime</h4>
                    <a href="call-to:+00449922097788" class="phone">+00449922097788</a>
                    <p class="desc">
                        As a trusted construction service provider, we deliver quality workmanship, reliable project
                        management, solutions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>






<div class="sticky-wrapper-about-fluid">
    <!-- about area fluid start -->
    <div class="tmp-about-area-fluid">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-thumbnail invers-anime">
                        <img src="assets/images/about/32.webp" alt="why">
                    </div>
                </div>
                <div class="col-lg-6 pl--40 pt_lg--40 pb_lg--40 pl_sm--0">
                    <div class="content" style="max-width: 95%;">
                        <div class="tmp-section-title-border text-start about-style-4 pt_md--60 pt_sm--40">
                            <div class="pres-line-separator-wrapper mb--10">
                                <span class="subtitle">
                                    <span class="number">01</span>
                                    <span class="subtitle-text">Build Strong Foundations With Us</span>
                                </span>
                                <div class="line-separator"></div>
                            </div>
                            <h2 class="title w-700 mb--30 tmp-title-split">
                                Reliable Construction Solutions for Modern Living
                            </h2>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Customized construction planning</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Durable and safe building solutions</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="read-more-btn mt--30">
                                <a class="tmp-btn icon-hover text-center" href="contact.html">
                                    <span class="btn-text">Contact Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area fluid end -->

    <!-- about area fluid start -->
    <div class="tmp-about-area-fluid">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 pl--40 pt_lg--40 pb_lg--40 pl_sm--0">
                    <div class="content" style="max-width: 95%;">
                        <div
                            class="tmp-section-title-border text-start about-style-4 pt_md--60 pt_sm--40 pb_md--60 pb_sm--40">
                            <div class="pres-line-separator-wrapper mb--10">
                                <span class="subtitle">
                                    <span class="number">01</span>
                                    <span class="subtitle-text">Power Your Projects With Expertise</span>
                                </span>
                                <div class="line-separator"></div>
                            </div>
                            <h2 class="title w-700 mb--30 tmp-title-split">
                                End-to-End Construction for Homes and Businesses
                            </h2>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Client-focused project execution</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Optimized cost and time management</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="read-more-btn mt--30">
                                <a class="tmp-btn icon-hover text-center" href="contact.html">
                                    <span class="btn-text">Contact Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us-thumbnail invers-anime">
                        <img src="assets/images/about/33.webp" alt="why">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area fluid end -->

    <!-- about area fluid start -->
    <div class="tmp-about-area-fluid pt_md--60 pt_sm--40">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-thumbnail invers-anime">
                        <img src="assets/images/about/34.webp" alt="why">
                    </div>
                </div>
                <div class="col-lg-6 pl--40 pt_lg--40 pb_lg--40 pl_sm--0">
                    <div class="content" style="max-width: 95%;">
                        <div
                            class="tmp-section-title-border text-start about-style-4 pt_md--60 pt_sm--40 mb_md--60 pb_sm--40">
                            <div class="pres-line-separator-wrapper mb--10">
                                <span class="subtitle">
                                    <span class="number">01</span>
                                    <span class="subtitle-text">Create Lasting Structures With Confidence</span>
                                </span>
                                <div class="line-separator"></div>
                            </div>
                            <h2 class="title w-700 mb--30 tmp-title-split">
                                Smart Construction Designed for Long-Term Value
                            </h2>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Tailored building strategies</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Ongoing maintenance and support</h4>
                                        <p class="text">
                                            Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                            gravida rutrum
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="read-more-btn mt--30">
                                <a class="tmp-btn icon-hover text-center" href="contact.html">
                                    <span class="btn-text">Contact Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area fluid end -->
</div>




<!-- Start Pricing Style-1  -->
<div class="tmp-pricing-area tmp-section-gap position-relative bg-card">
    <div class="container">
        <div class="row mb--40 mb_sm--0">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">03</span>
                            <span class="subtitle-text">Pricing</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Construction Plans for Every Need.</h2>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Basic Plan -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="tmp-pricing tmponhover">
                    <div class="pricing-table-inner">
                        <div class="pricing-header">
                            <h4 class="title tmp-badge-2">Starter</h4>
                            <div class="pricing">
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="price">00</span>
                                </div>
                                <span class="subtitle">Consultation Plan</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-style--1">
                                <li><i class="feather-check"></i> Site inspection support</li>
                                <li><i class="feather-check"></i> Basic project assessment</li>
                                <li><i class="feather-check"></i> Construction feasibility report</li>
                                <li><i class="feather-check"></i> Material guidance</li>
                                <li><i class="feather-check"></i> Budget estimation</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="tmp-btn icon-hover text-center btn-border" href="#">
                                <span class="btn-text">Get Free Review</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="tmp-pricing tmponhover active with-gradient-bg">
                    <div class="pricing-table-inner">
                        <div class="pricing-header">
                            <h4 class="title tmp-badge-2">Standard</h4>
                            <div class="pricing">
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="price">50</span>
                                </div>
                                <span class="subtitle">Residential Package</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-style--1">
                                <li><i class="feather-check"></i> Full home construction</li>
                                <li><i class="feather-check"></i> Quality material usage</li>
                                <li><i class="feather-check"></i> Skilled labor support</li>
                                <li><i class="feather-check"></i> Project supervision</li>
                                <li><i class="feather-check"></i> One year service warranty</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="tmp-btn icon-hover text-center" href="#">
                                <span class="btn-text">Start Project</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="popular-tag">Popular</div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="tmp-pricing tmponhover">
                    <div class="pricing-table-inner">
                        <div class="pricing-header">
                            <h4 class="title tmp-badge-2">Premium</h4>
                            <div class="pricing">
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="price">100</span>
                                </div>
                                <span class="subtitle">Commercial Solution</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-style--1">
                                <li><i class="feather-check"></i> Large scale construction</li>
                                <li><i class="feather-check"></i> Advanced project planning</li>
                                <li><i class="feather-check"></i> Dedicated project manager</li>
                                <li><i class="feather-check"></i> Timeline optimization</li>
                                <li><i class="feather-check"></i> Priority maintenance support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="tmp-btn icon-hover text-center btn-border" href="#">
                                <span class="btn-text">Request a Quote</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing Style-1  -->


<!-- Start Main Counter up-5 Area  -->
<div class="tmp-counterup-area tmp-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">+15000</span>
                            <span class="subtitle-text">Trusted</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Our Fun Facts</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="count-box counter-style-4 tmp-card text-center without-border tmponhover">
                    <div>
                        <div class="count-number"><span class="odometer" data-count="199">000</span>K</div>
                    </div>
                    <h5 class="counter-title">Happy Clients.</h5>
                    <div class="left-hover-counter"></div>
                    <div class="right-hover-counter"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="100">
                <div class="count-box counter-style-4 tmp-card text-center without-border tmponhover">
                    <div>
                        <div class="count-number"><span class="odometer" data-count="575">000</span>+</div>
                    </div>
                    <h5 class="counter-title">Employees</h5>
                    <div class="left-hover-counter"></div>
                    <div class="right-hover-counter"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="200">
                <div class="count-box counter-style-4 tmp-card text-center without-border tmponhover">
                    <div>
                        <div class="count-number"><span class="odometer" data-count="69">00</span>M</div>
                    </div>
                    <h5 class="counter-title">Useful Programs</h5>
                    <div class="left-hover-counter"></div>
                    <div class="right-hover-counter"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="300">
                <div class="count-box counter-style-4 tmp-card text-center without-border tmponhover">
                    <div>
                        <div class="count-number"><span class="odometer" data-count="500">000</span>+</div>
                    </div>
                    <h5 class="counter-title">Useful Programs</h5>
                    <div class="left-hover-counter"></div>
                    <div class="right-hover-counter"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Counter up-5 Area  -->


<!-- tmp contact area start -->
<div class="contact-area-agency tmp-section-gap">
    <div class="container">
        <div class="row mb--40 mb_sm--0">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">03</span>
                            <span class="subtitle-text">Appoinment</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Place An Appoinment.</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="thumbnail invers-anime" data-sal="slide-right" data-sal-duration="800">
                    <img class="w-100 radius" loading="lazy" src="assets/images/about/35.webp" alt="About Images">
                </div>
            </div>
            <div class="col-lg-7">
                <form class="contact-form-1 tmp-dynamic-form" id="contact-form" method="POST" action="mail.php">
                    <div class="form-group tmponhover">
                        <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                    </div>
                    <div class="form-group tmponhover">
                        <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group tmponhover">
                        <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                    </div>

                    <div class="form-group tmponhover">
                        <input type="text" id="subject" name="subject" placeholder="Your Subject">
                    </div>

                    <div class="form-group tmponhover">
                        <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="form-group tmponhover">
                        <button name="submit" type="submit" id="submit" class=" btn-default btn-large tmp-btn w-100">
                            <span>Submit Now</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tmp contact area end -->

<!-- large bg-iamge area -->
<div class="large-bg-area bg-finance-video-thumb bg_image jarallax">
    <a class="tmp-btn rounded-player popup-video" href="https://www.youtube.com/watch?v=4jnzf1yj48M">
        <span><i class="feather-play"></i></span>
    </a>
</div>
<!-- large bg-iamge area end -->





<!-- Start Brand Style-1  -->
<div class="tmp-brand-area tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="number">4</span>
                            <span class="subtitle-text">Our Awesome Client</span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">Our Awesome Clients.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt--40">
                <ul class="brand-list brand-style-1">
                    <li><a href="#"><img src="assets/images/brand/brand-01.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-02.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-03.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-04.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-05.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-06.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-07.png" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="assets/images/brand/brand-08.png" alt="Brand Image"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Style-1  -->