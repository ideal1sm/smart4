<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ремонт");
?>

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/contact.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Главное</a></li>
                                        <li>Ремонт</li>
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
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-8 contact_col">
                    <div class="get_in_touch">
                        <div class="section_title">Ремонт</div>
                        <div class="section_subtitle">Оставить запрос</div>
                        <div class="contact_form_container">
                            <form action="#" id="contact_form" class="contact_form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Name -->
                                        <label for="contact_name">Имя</label>
                                        <input type="text" id="contact_name" class="contact_input" required="required">
                                    </div>
                                    <div class="col-xl-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="contact_last_name">Номер</label>
                                        <input type="text" id="contact_last_name" class="contact_input" required="required">
                                    </div>
                                </div>
                                <div>
                                    <!-- Subject -->
                                    <label for="contact_company">Модель устройства</label>
                                    <input type="text" id="contact_company" class="contact_input">
                                </div>
                                <div>
                                    <!-- Subject -->
                                    <label for="contact_company">В чем проблема?</label>
                                    <input type="text" id="contact_company" class="contact_input">
                                </div>
                                <div>
                                    <label for="contact_textarea">Комментарий</label>
                                    <textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                                </div>
                                <button class="button contact_button"><span>Отправить сообщение</span></button>
                            </form>
                        </div>
                    </div>
                </div>

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
                                <li><img src="/images/location.svg"<span>    г.Краснодар Красная4</span></li>
                                <li><img src="/images/location.svg"<span>    г.Краснодар Мира24</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>