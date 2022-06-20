<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/contact_responsive.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/product-title.css");
?>
    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row" style="flex-direction: column; padding:0 20px">
                <div id="products" class="products__title">О компании</div>

                <div class="details_text">
                    <div class="style-text">
                        <p>Smart4 – это не просто магазин, куда люди приходят покупать такие необходимые вещи</p>
                        <img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about1.png" alt="">
                    </div>
                    <div class="style-text"> <img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about3png.png" alt=""> <p>Smart4 – это территория свободы. Территория, где нет правил и всё на грани. Территория, где можно стать самим собой. Хотя бы на 5 минут. Территория, где Вы можете забыть об условностях, статусе и фразе «а что подумают люди?». Да кому какая разница, кто что подумает! В iQmac можно не оглядываться на других.</p>

                    </div>
                    <div class="style-text"><p>В Smart4 никому не интересно, насколько крута машина, на которой Вы ездите, соответствует ли моде Ваш костюм, хорошо ли сидит школьная форма, уместны ли эти стоптанные кроссовки.</p>
                        <img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about2.jfif" alt="">
                    </div>
                    <div class="style-text"> <img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about4.jpg" alt="">	<p>В Smart4 Вы приходите к друзьям. Разве друзья берут с Вас деньги за советы, новости или тогда, когда делятся картинками, музыкой и программами? Вот и мы не берем!</p></div>
                    <div class="style-text"><p>В Smart4 всегда есть что-нибудь новенькое. Такое, чего нет больше нигде и ни у кого.</p>
                        <img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/about6.jpg" alt="">
                    </div>
                    <div class="style-text"><img style="max-height: 200px;" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/avds_large.jpg" alt="">	<p>В Smart4 можно позвонить по телефонам +7 918 444 44 44, +7 918 004 44 44 в любое время. Или прийти. Просто так. Когда весело или очень тоскливо.</p></div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>