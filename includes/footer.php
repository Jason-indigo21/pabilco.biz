<!-- Start Footer Area  -->
<footer class="tmp-footer footer-style-default variation-two position-relative mt--80">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="tmp-footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                                <img class="logo-dark" src="assets/img/logo.png" alt="Pabilco, S.A. Logo">
                            </a>
                        </div>
                        <p class="subtitle mt--30">
                            <?= $isEn ? "We drive your business growth with strategy, data, and technology" : "Impulsamos el crecimiento de tu negocio con estrategia, datos y tecnología" ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="tmp-footer-widget">
                        <h4 class="title"><?= $isEn ? "Quick Links" : "Enlaces Rápidos" ?></h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <?php foreach ($lang['menu'] as $key => $value) {
                                    if (!is_array($value)) { ?>
                                        <li><a
                                                href="?<?= $isEn ? 'lang=en&page=' . $key : 'página=' . $key; ?>"><?= $value; ?></a>
                                        </li>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="tmp-footer-widget">
                        <h4 class="title"><?= $isEn ? "What We Do" : "Lo Qué Hacemos" ?></h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <?php foreach ($lang['menu'] as $key => $value) {
                                    if (is_array($value)) { ?>
                                        <?php foreach ($value as $subkey => $subvalue) { ?>
                                            <li><a
                                                    href="?<?= $isEn ? 'lang=en&page=' . $subkey : 'página=' . $subkey; ?>"><?= $subvalue; ?></a>
                                            </li>
                                        <?php } ?>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="tmp-footer-widget">
                        <h4 class="title"><?= $isEn ? "Contact Details" : "Detalles de contacto" ?></h4>
                        <div class="inner">
                            <ul class="justify-content-start footer-contact">
                                <li><a target="_blank" href="mailto:support@pabilco.biz">
                                        <i class="feather-mail"></i> support@pabilco.biz
                                    </a>
                                </li>
                                <li><a target="_blank" href="">
                                        <i class="feather-map-pin"></i> Montevideo, Uruguay
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="jumping-text">
                <h2 class="title end">
                    Contact Us
                </h2>
            </div> -->

    <!-- Start Copy Right Area  -->
    <div class="copyright-area copyright-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                    <div class="copyright-left">
                        <ul class="ft-menu link-hover">
                            <li>
                                <a
                                    href="?<?= $isEn ? "lang=en&page=cookies-policy" : "página=política-de-cookies" ?>"><?= $isEn ? "Cookies Policy" : "Política de Cookies" ?></a>
                            </li>
                            <li>
                                <a
                                    href="?<?= $isEn ? "lang=en&page=privacy-policy" : "página=política-de-privacidad" ?>"><?= $isEn ? "Privacy Policy" : "Política de Privacidad" ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                    <div class="copyright-right text-center text-lg-end">
                        <p class="copyright-text">Copyright © <?= date('Y') ?> PABILCO, S.A. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area  -->
</footer>
<!-- End Footer Area  -->

</main>





<!-- pre loader start -->

<div id="inverweb-load">
    <span class="loader"></span>
</div>

<!-- pre loader end -->

<div id="anywhere-home" class="">
</div>

<div class="scrollbar-v show-on-scroll"></div>
<div class="float-text show-on-scroll">
    <span><a href="#">Scroll to top</a></span>
</div>



<!-- JS
    ============================================ -->
<script src="assets/js/vendor/jquery.min.js" defer=""></script>
<script src="assets/js/vendor/bootstrap.min.js" defer=""></script>
<script src="assets/js/vendor/waypoint.min.js" defer=""></script>
<script src="assets/js/vendor/wow.min.js" defer=""></script>

<script src="assets/js/vendor/feather.min.js" defer=""></script>
<script src="assets/js/vendor/sal.min.js" defer=""></script>


<!-- gsap animation start -->
<script src="assets/js/plugins/gsap.js" defer=""></script>
<script src="assets/js/plugins/scrolltigger.js" defer=""></script>
<script src="assets/js/plugins/splittext.js" defer=""></script>
<!-- gsap animation end -->


<script src="assets/js/vendor/masonry.js" defer=""></script>
<script src="assets/js/vendor/imageloaded.js" defer=""></script>
<script src="assets/js/vendor/magnify.min.js" defer=""></script>
<script src="assets/js/vendor/lightbox.js" defer=""></script>
<script src="assets/js/vendor/slick.min.js" defer=""></script>
<script src="assets/js/vendor/easypie.js" defer=""></script>
<script src="assets/js/vendor/text-type.js" defer=""></script>
<script src="assets/js/vendor/jquery-one-page-nav.js" defer=""></script>

<script src="assets/js/plugins/smoothscroll.js" defer=""></script>

<script src="assets/js/plugins/odometer.js" defer=""></script>

<script src="assets/js/plugins/jaralax.js" defer=""></script>
<script src="assets/js/plugins/scroll-elements.js" defer=""></script>

<!-- Main JS -->
<script src="assets/js/main.js" defer=""></script>
</body>

</html>