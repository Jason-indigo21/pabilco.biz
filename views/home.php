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
                            <a class="btn-read-more text-white"
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
                                <img src="assets/img/home-2.jpg" alt="home-img-2">
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
                        <img src="assets/img/home-3.jpg" alt="why">
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
                        <h2 class="title w-700 tmp-title-split">
                            <?= $isEn ? "What we do for <span class='theme-gradient'>your business</span>" : "Lo que hacemos por <span class='theme-gradient'>tu negocio</span>" ?>
                        </h2>
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
                                <a class="image" href="<?= $services[$i]['link'] ?>">
                                    <img loading="lazy" class="w-100 home-service-1-2" src="assets/img/services/<?= $services[$i]['image']; ?>"
                                        alt="<?= $services[$i]['title']; ?>">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="<?= $services[$i]['link'] ?>">
                                        <?= $services[$i]['title']; ?>
                                    </a>
                                </h4>
                                <p class="descriptiion">
                                    <?= $services[$i]['content']; ?>
                                </p>
                                <div class="read-more-btn">
                                    <a class="btn-read-more" href="<?= $services[$i]['link'] ?>">
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
                                <a class="image" href="<?= $services[$i]['link'] ?>">
                                    <img loading="lazy" src="assets/img/services/<?= $services[$i]['image']; ?>"
                                        alt="<?= $services[$i]['title']; ?>">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="<?= $services[$i]['link'] ?>"><?= $services[$i]['title']; ?></a>
                                </h4>
                                <p class="descriptiion">
                                    <?= $services[$i]['content']; ?>
                                </p>
                                <div class="read-more-btn">
                                    <a class="btn-read-more" href="<?= $services[$i]['link'] ?>">
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
                            <span class="subtitle-text"><?= $isEn ? "How We Work" : "Cómo trabajamos" ?></span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">
                        <?= $isEn ? "Our approach combines strategic thinking, practical execution, and continuous analysis:" : "Nuestro enfoque combina pensamiento estratégico, ejecución práctica y análisis continuo:" ?>
                    </h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row g-5 service-wrapper mt--10">
            <div class="col-lg-12">
                <div class="inversweb-service-main-wrapper-list">
                    <?php foreach ($lang['how-we-work'] as $key => $value): ?>
                        <div class="single-service-wrapper tmponhover">
                            <div class="thumbnail invers-anime">
                                <img src="assets/img/icons/<?= $value['icon']; ?>" alt="service">
                            </div>
                            <div class="content">
                                <h5 class="title"><?= $value['text']; ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>

</div>






<section class="tmp-get-in-touch-area area-2 tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title w-700 tmp-title-split text-center mt--50">
                    <?= $isEn ? "We think like consultants. We act as part of your team." : "Pensamos como consultores. Actuamos como parte de tu equipo." ?>
                </h2>
                <p class="text-center mt--20">
                    <?= $isEn ? "We are actively involved in each project, providing an external perspective, experience, and methodology while working closely with internal teams. We believe in long-term relationships, based on trust, transparency, and results." : "Nos involucramos activamente en cada proyecto, aportando una mirada externa, experiencia y metodología, pero trabajando de forma cercana con los equipos internos. Creemos en relaciones de largo plazo, basadas en la confianza, la transparencia y los resultados" ?>
                </p>
            </div>
        </div>
        <div class="section-inner">
            <div class="left-image">
                <img src="assets/img/home-4.jpg" width="420" alt="home-img-4">
            </div>
            <div class="content">
                <div class="icon">
                    <a href=""><i class="feather-mail"></i></a>
                </div>
                <div class="text">
                    <h4 class="title"><?= $isEn ? "Ready to take the next step?" : "¿Listo para dar el próximo paso?" ?>
                    </h4>
                    <p class="desc">
                        <?= $isEn ? "If you are looking to organize your strategy, improve management, grow with data, and use
                        technology intelligently, we can help you." : "Si buscas ordenar tu estrategia, mejorar la gestión, crecer con datos y aprovechar la tecnología de forma inteligente, podemos ayudarte." ?>
                    </p>
                    <div class="read-more-btn mt--30">
                        <a class="tmp-btn icon-hover text-center text-white"
                            href="?<?= $isEn ? "lang=en&page=online-agenda" : "página=agenda-online" ?>">
                            <span class="btn-text">
                                <?= $isEn ? "Schedule a Conversation" : "Agenda una conversación" ?>
                            </span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="tmp-testimonial-area tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="subtitle-text"><?= $isEn ? "Testimonials" : "Testimonios" ?></span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split"><?= $isEn ? "The experience of those who have already taken the step" : "La experiencia de quienes ya dieron el paso" ?></h2>
                </div>
            </div>
        </div>
        <div class="tmp-slick-dot tmp-slick-arrow testimonial-activation-2 slick-gutter-15 mt--30 mb--60">
            <!-- Start Single card  -->
            <?php foreach ($lang['testimonials'] as $key => $value): ?>
            <div class="tmp-box-card card-style-default testimonial-style-one variation-2 tmponhover">
                <div class="inner">
                    <div class="content">
                        <div class="rating mb--15">
                            <a href="#"><img src="assets/images/icons/stars.svg" alt=""></a>
                            <a href="#"><img src="assets/images/icons/stars.svg" alt=""></a>
                            <a href="#"><img src="assets/images/icons/stars.svg" alt=""></a>
                            <a href="#"><img src="assets/images/icons/stars.svg" alt=""></a>
                            <a href="#"><img src="assets/images/icons/stars.svg" alt=""></a>
                        </div>
                        <p class="description"><?= $value['content'] ?></p>

                        <div class="content-bottom">
                            <div class="main-content">
                                <h2 class="title"><?= $value['position'] ?></h2>
                                <h6 class="subtitle"><?= $value['company'] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- End Single card  -->
        </div>
    </div>
</div>