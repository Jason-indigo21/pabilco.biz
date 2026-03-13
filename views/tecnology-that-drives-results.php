<section class="solutions-area tmp-section-gap">
    <div class="container">
        <div class="row mb--30">
            <div class="col-lg-12">
                <div class="tmp-section-title-border text-center">
                    <div class="pres-line-separator-wrapper text-center mb--10">
                        <div class="line-separator line-left"></div>
                        <span class="subtitle">
                            <span class="subtitle-text"><?= $isEn ? "Technology That Drives Results" : "Tecnología Que Impulsa Resultados" ?></span>
                        </span>
                        <div class="line-separator line-right"></div>
                    </div>
                    <h2 class="title w-700 tmp-title-split">
                        <?= $isEn ? "Technologies we implement and optimize" : "Tecnologías que implementamos y optimizamos" ?>
                    </h2>
                    <p><?= $isEn ? "<b>Technology consulting focused on management, data, and growth</b><br>
                    We work with leading technologies to help companies improve their management, scale operations, and make data-driven decisions. We don't just implement tools; we integrate them into business processes to ensure adoption, efficiency, and measurable results" : "<b>Consultoría tecnológica enfocada en gestión, datos y crecimiento</b><br>
                    Trabajamos con tecnologías líderes para ayudar a las empresas a mejorar su gestión, escalar sus operaciones y tomar decisiones basadas en datos. No solo implementamos herramientas: las integramos en los procesos del negocio, asegurando la adopción, la eficiencia y resultados medibles." ?></p>
                </div>
            </div>
        </div>
        <?php $i = 0;
        foreach ($solutions as $solution):
            $i++; ?>

            <div class="solution-row <?= $i % 2 == 0 ? 'reverse' : '' ?>">

                <div class="solution-image">
                    <img src="assets/img/technology/<?= $solution['image'] ?>" alt="<?= $solution['title'] ?>">
                </div>

                <div class="solution-content">

                    <span class="solution-category">
                        <?= $solution['category'] ?>
                    </span>

                    <h3><?= $solution['title'] ?></h3>

                    <p><?= $solution['content1'] ?></p>
                    <p><?= $solution['content2'] ?></p>
                    <p><?= $solution['content3'] ?></p>

                    <a class="tmp-btn icon-hover text-center text-white"
                        href="?<?= $isEn ? "lang=en&page=online-agenda" : "página=agenda-online" ?>">
                        <span class="btn-text">
                            <?= $solution['button'] ?>
                        </span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>

            </div>

        <?php endforeach; ?>

    </div>
</section>