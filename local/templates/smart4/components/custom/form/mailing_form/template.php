<?
/**
 * @var $APPLICATION
 * @var $templateFolder
 * @var $arParams
 * @var $arResult
 */
?>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Подпишитесь на нашу рассылку</div>
                        <div class="newsletter_text"><p>Узнавай о наших скидках одним из мервых!</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="form_<?= $arParams['TOKEN'] ?>" class="newsletter_form">
                                <input type="email" class="newsletter_input" name="email" required>
                                <button class="newsletter_button trans_200" type="button"><span>Подписывайся</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if ($arParams['RECAPTCHA_ENABLED'] === 'Y') {
    include('script.recaptcha.php');
} else {
    include('script.php');
}
