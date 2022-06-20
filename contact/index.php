<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Связаться");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact_responsive.css");
?>
    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <?
                $APPLICATION->IncludeComponent(
                    "custom:form",
                    "contact_form",
                    array(
                        'IBLOCK_ID' => '2',
                        'MAIL_EVENT' => 'FORM_SENDED',
                        'RECAPTCHA_ENABLED' => 'N',
                        'RECAPTCHA_PUBLIC_KEY' => '6LcqwJwdAAAAAGFfWMfSsziyrRMTV0kUARrgOCts',
                        'RECAPTCHA_PRIVATE_KEY' => '6LcqwJwdAAAAAATrf2Qqm8-KSw_vyhwCuPdTnqN8',
                        'ACTIVE' => 'Y',
                        'TOKEN' => 'contact_form001',
                        'FORM_NAME' => 'Связаться',
                        'PROPS' => array(
                            'NAME', // type - string
                            'LASTNAME', // type - string
                            'THEME', // type - string
                            'COMMENT', // type - string
                        ),
                    )
                );
                ?>

                <!-- Contact Info -->
                <div class="col-lg-3 offset-xl-1 contact_col">
                    <div class="contact_info">
                        <div class="contact_info_section">
                            <div class="contact_info_title">Контакты </div>
                            <ul>
                                <li>Телефон: <span>+79183330404</span></li>
                                <li>Почта: <span>smart4@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Сервисный центр</div>
                            <ul>
                                <li>Телефон: <span>+79183330404 </span></li>
                                <li>Почта: <span>smart4@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Где находимся?</div>
                            <ul>
                                <li><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/location.svg"<span>    г.Краснодар Красная 4</span></li>
                                <li><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/location.svg"<span>    г.Краснодар Мира 24</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row map_row">
                <div class="col">

                    <!-- Google Map -->
                    <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/contact.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>