<section class="industries-area tmp-section-gap">
    <div class="container">

        <div class="row mb--30">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="subtitle-text"><?= $isEn ? "Where We Add Value" : "Dónde Aportamos Valor" ?></span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">
                        <?= $isEn ? "Industries we work with" : "Industrias con las que trabajamos" ?>
                    </h2>
                    <p><?= $isEn ? "<b>Strategy, data, and technology adapted to each business reality</b><br>
                    We accompany organizations across sectors to organize their management, grow through strategy, and make better decisions. We understand that every industry has its own challenges; for this reason, we design tailor-made solutions aligned with each business's context, digital maturity, and objectives." : "<b>Estrategia, datos y tecnología adaptadas a cada realidad de negocio</b><br>
                    Acompañamos a organizaciones de distintos sectores para ordenar su gestión, crecer con estrategia y tomar mejores decisiones. Entendemos que cada industria tiene desafíos propios; por eso, diseñamos soluciones a medida, alineadas con el contexto, la madurez digital y los objetivos de cada negocio." ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <?php foreach($industries as $industry): ?>

            <div class="col-lg-4 col-md-6">
                <div class="industry-card">

                    <div class="industry-icon">
                        <i class="feather-<?= $industry['icon'] ?>"></i>
                    </div>

                    <h4><?= $industry['title'] ?></h4>

                    <?php if(isset($industry['subtitle'])): ?>
                        <div class="industry-subtitle"><?= $industry['subtitle'] ?></div>
                    <?php endif; ?>

                    <p><?= $industry['content'] ?></p>

                    <p><?= $industry['content2'] ?></p>

                     <a class="tmp-btn icon-hover text-center text-white"
                        href="?<?= $isEn ? "lang=en&page=online-agenda" : "página=agenda-online" ?>">
                        <span class="btn-text">
                            <?= $industry['button'] ?>
                        </span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>