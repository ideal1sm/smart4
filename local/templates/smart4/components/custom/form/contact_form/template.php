<?
/**
 * @var $APPLICATION
 * @var $templateFolder
 * @var $arParams
 * @var $arResult
 */
?>
    <div class="col-lg-8 contact_col">
        <div class="get_in_touch">
            <div class="section_title">Связаться</div>
            <div class="section_subtitle">Оставить запрос</div>
            <div class="contact_form_container">
                <form action="#" id="form_<?= $arParams['TOKEN'] ?>" class="contact_form">
                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Name -->
                            <label for="contact_name">Имя</label>
                            <input type="text" id="contact_name" name="name" class="contact_input" required>
                        </div>
                        <div class="col-xl-6 last_name_col">
                            <!-- Last Name -->
                            <label for="contact_last_name">Фамилия</label>
                            <input type="text" id="contact_last_name" name="lastname" class="contact_input" required>
                        </div>
                    </div>
                    <div>
                        <!-- Subject -->
                        <label for="contact_company">Тема</label>
                        <input type="text" id="contact_company" name="theme" class="contact_input">
                    </div>
                    <div>
                        <label for="contact_textarea">Сообщение</label>
                        <textarea id="contact_textarea" name="comment" class="contact_input contact_textarea" required></textarea>
                    </div>
                    <button class="button contact_button" type="button"><span>Отправить сообщение</span></button>
                </form>
            </div>
        </div>
    </div>
<?php
if ($arParams['RECAPTCHA_ENABLED'] === 'Y') {
    include('script.recaptcha.php');
} else {
    include('script.php');
}
