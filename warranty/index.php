<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гарантия");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact_responsive.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/product-title.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/about-html.css");
?>

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/cart.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Главное</a></li>
                                        <li><a href="contact.html">Контакты</a></li>
                                        <li>Гарантии</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row" style="flex-direction: column; padding:0 20px">
                <div id="products" class="products__title">Гарантии</div>

                <div class="details_text">
                    <div class="style-text">
                        <p class="about-text">Условия бесплатного гарантийного обслуживания
                            Прием и получение товара на гарантийное обслуживание(диагностику) осуществляется по адресу г. Краснодар, ул. Стасова, 178, ТК "Медиа Плаза" Прием товара на гарантийное обслуживание осуществляется при наличии гарантийного талона.

                            Гарантийный срок на изделие устанавливается в соответствии с п. 7 ст. 5 Закона «О Защите прав потребителей».
                        </p>
                        <img class="about-img" src="<?= SITE_TEMPLATE_PATH ?>/assets//images/about1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>