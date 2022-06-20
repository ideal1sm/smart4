<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var CMain $APPLICATION
 * @var CUser $USER
 * @var SaleOrderAjax $component
 * @var string $templateFolder
 */

$this->addExternalCss(SITE_TEMPLATE_PATH . '/assets/styles/checkout.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/assets/styles/checkout_responsive.css');

$context = Main\Application::getInstance()->getContext();
$signer = new Bitrix\Main\Security\Sign\Signer;

$request = $context->getRequest();
$signedParams = $signer->sign(base64_encode(serialize($arParams)), 'sale.order.ajax');

if ($request->get('ORDER_ID') <> '') {
    include(Main\Application::getDocumentRoot() . $templateFolder . '/confirm.php');
} else {
?>

<!-- Checkout -->
<div class="checkout" id="mainBlockOrder">
    <div class="container">
        <div class="row">
            <form action="#" id="orderForm">
                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">Оформление заказа</div>
                        <div class="section_subtitle">Введите информацию</div>
                        <div class="checkout_form">
                            <?
                            echo bitrix_sessid_post();

                            if ($arResult['PREPAY_ADIT_FIELDS'] <> '') {
                                echo $arResult['PREPAY_ADIT_FIELDS'];
                            }
                            ?>
                            <input type="hidden" name="SITE_ID" value="s1">
                            <input type="hidden" id="ID_DELIVERY_ID_2" name="DELIVERY_ID" value="2">
                            <input type="hidden" name="PERSON_TYPE" value="1">
                            <input type="hidden" name="PERSON_TYPE_OLD" value="1">
                            <input type="hidden" name="location_type" value="code">
                            <input type="hidden" name="SIGN" value="<?= $signedParams ?>">
                            <div class="checkout_form_container">
                                <div>
                                    <!-- City / Town -->
                                    <label for="checkout_city">Пункт выдачи*</label>
                                    <select name="BUYER_STORE" id="checkout_city"
                                            class="dropdown_item_select checkout_input" require="required">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Name -->
                                        <label for="checkout_name">Имя*</label>
                                        <input type="text" id="checkout_name" name="ORDER_PROP_1" class="checkout_input"
                                               required="required">
                                    </div>
                                    <div class="col-xl-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="checkout_last_name">Фамилия*</label>
                                        <input type="text" id="checkout_last_name" name="ORDER_PROP_2"
                                               class="checkout_input"
                                               required="required">
                                    </div>
                                </div>
                                <div>
                                    <!-- Phone no -->
                                    <label for="checkout_phone">Мобильный телефон*</label>
                                    <input type="phone" id="checkout_phone" name="ORDER_PROP_3" class="checkout_input"
                                           required="required">
                                </div>
                                <div>
                                    <!-- Email -->
                                    <label for="checkout_email">Почта*</label>
                                    <input type="phone" id="checkout_email" name="ORDER_PROP_4" class="checkout_input"
                                           required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Info -->

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Оплата</div>
                        <div class="section_subtitle">Информация для
                            заказа
                        </div>

                        <!-- Order details -->
                        <ul class="order_list">
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title"></div>
                                <div class="order_list_value ml-auto">Стоимость:</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Стоимость заказа</div>
                                <div class="order_list_value ml-auto" id="orderCost"></div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Доставка</div>
                                <div class="order_list_value ml-auto" id="deliveryCost"></div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Итого</div>
                                <div class="order_list_value ml-auto" id="orderSum"></div>
                            </li>
                        </ul>
                    </div>

                    <!-- Payment Options -->
                    <div class="payment">
                        <div class="form-group js_paysystem_block">
                            <label class="payment_option clearfix">Наличный расчет
                                <input type="radio" name="PAY_SYSTEM_ID" value="2">
                                <span class="checkmark"></span>
                            </label>
                            <label class="payment_option clearfix">Безналичный расчет
                                <input type="radio" checked="checked" name="PAY_SYSTEM_ID" value="3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Order Text -->
                <button href="javascript:void(0)" type="submit">Подтвердить заказ</button>
<!--                <div class="button order_button">-->
<!--                    <button href="javascript:void(0)" type="submit">Подтвердить заказ</button>-->
<!--                </div>-->
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php } ?>