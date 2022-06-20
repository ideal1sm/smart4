<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->addExternalCss(SITE_TEMPLATE_PATH . '/assets/styles/checkout.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/assets/styles/checkout_responsive.css');
?>
<!-- Home -->

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
                                    <li><a href="cart.html">Корзина</a></li>
                                    <li>Оформление заказа</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Checkout -->

<div class="checkout">
    <div class="container">
        <div class="row">

            <!-- Billing Info -->
            <div class="col-lg-6">
                <div class="billing checkout_section">
                    <div class="section_title">Оформление заказа</div>
                    <div class="section_subtitle">Введите информацию</div>
                    <div class="checkout_form_container">
                        <form action="#" id="checkout_form" class="checkout_form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- Name -->
                                    <label for="checkout_name">Имя*</label>
                                    <input type="text" id="checkout_name" class="checkout_input" required="required">
                                </div>
                                <div class="col-xl-6 last_name_col">
                                    <!-- Last Name -->
                                    <label for="checkout_last_name">Фамилия*</label>
                                    <input type="text" id="checkout_last_name" class="checkout_input"
                                           required="required">
                                </div>
                            </div>

                            <div>
                                <!-- City / Town -->
                                <label for="checkout_city">Пункт выдачи*</label>
                                <select name="checkout_city" id="checkout_city"
                                        class="dropdown_item_select checkout_input" require="required">
                                    <option></option>
                                    <option>Краснодар красная4</option>
                                    <option>Краснодар Мира12</option>
                                </select>
                            </div>

                            <div>
                                <!-- Phone no -->
                                <label for="checkout_phone">Мобильный телефон*</label>
                                <input type="phone" id="checkout_phone" class="checkout_input" required="required">
                            </div>
                            <div>
                                <!-- Email -->
                                <label for="checkout_email">Почта*</label>
                                <input type="phone" id="checkout_email" class="checkout_input" required="required">
                            </div>

                        </form>
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
                            <div class="order_list_value ml-auto">Р5900.90</div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="order_list_title">Доставка</div>
                            <div class="order_list_value ml-auto">Бесплатно</div>
                        </li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="order_list_title">Итого</div>
                            <div class="order_list_value ml-auto">Р5900.90</div>
                        </li>
                    </ul>
                </div>

                <!-- Payment Options -->
                <div class="payment">
                    <label class="payment_option clearfix">Картой
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="payment_option clearfix">Наличными
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <!-- Order Text -->
            <div class="button order_button"><a href="#">Подтвердить заказ</a></div>
        </div>
    </div>
</div>
</div>
</div>