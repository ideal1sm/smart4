<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Предзаказ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact_responsive.css");
?>
    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <?
                $APPLICATION->IncludeComponent(
                    "custom:form",
                    "preorder_form",
                    array(
                        'IBLOCK_ID' => '2',
                        'MAIL_EVENT' => 'FORM_SENDED',
                        'RECAPTCHA_ENABLED' => 'N',
                        'RECAPTCHA_PUBLIC_KEY' => '6LcqwJwdAAAAAGFfWMfSsziyrRMTV0kUARrgOCts',
                        'RECAPTCHA_PRIVATE_KEY' => '6LcqwJwdAAAAAATrf2Qqm8-KSw_vyhwCuPdTnqN8',
                        'ACTIVE' => 'Y',
                        'TOKEN' => 'preorder_form001',
                        'FORM_NAME' => 'Предзаказ',
                        'PROPS' => array(
                            'NAME', // type - string
                            'LASTNAME', // type - string
                            'PRODUCT', // type - string
                            'COMMENT', // type - string
                        ),
                    )
                );
                ?>
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
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>