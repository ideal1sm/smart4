<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" width="180" class="mb-3">
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">МЫ</h6>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(0 => "",),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "Y",
                        )
                    ); ?>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Каталог</h6>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(0 => "",),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom2",
                            "USE_EXT" => "Y",
                        )
                    ); ?>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Доп.сервисы</h6>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(0 => "",),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom3",
                            "USE_EXT" => "Y",
                        )
                    ); ?>
            </div>

        </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">Сеть магазинов цифровой техники
                г.Краснодар © 2022 Smart4
        </div>
    </div>
</footer>
<!-- End -->


</body>

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/styles/bootstrap4/popper.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/easing/easing.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/custom.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/slider-main.js"></script>
</body>
</html>
