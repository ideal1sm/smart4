<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">
    <div class="col-lg-4">
        <div class="coupon">
            <div class="section_title">Промокод</div>
            <div class="section_subtitle">Введите свой промокод</div>
            <div class="coupon_form_container">
                <form action="#" id="coupon_form" class="coupon_form">
                    <input type="text" class="coupon_input" required data-entity="basket-coupon-input">
                    <button class="button coupon_button" type="button"><span>Проверить</span></button>
                </form>
            </div>
        </div>
        <div class="basket-coupon-alert-section">
            <div class="basket-coupon-alert-inner">
                {{#COUPON_LIST}}
                <div class="basket-coupon-alert text-{{CLASS}}">
    						<span class="basket-coupon-text">
    							<strong>{{COUPON}}</strong> - <?=Loc::getMessage('SBB_COUPON')?> {{JS_CHECK_CODE}}
    							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
    						</span>
                    <span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
    							<?=Loc::getMessage('SBB_DELETE')?>
    						</span>
                </div>
                {{/COUPON_LIST}}
            </div>
        </div>
    </div>
    <div class="col-lg-6 offset-lg-2">
        <div class="cart_total" data-entity="basket-checkout-aligner">
            <div class="section_title">Всего в корзине</div>
            <div class="section_subtitle">Окончательная информация</div>
            <div class="cart_total_container">
                <ul>
                    <!--            <li class="d-flex flex-row align-items-center justify-content-start">-->
                    <!--                <div class="cart_total_title">К оплате</div>-->
                    <!--                <div class="cart_total_value ml-auto">₽7900.00</div>-->
                    <!--            </li>-->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_total_title">Всего</div>
                        <div class="cart_total_value ml-auto" data-entity="basket-total-price">
                            {{{PRICE_FORMATED}}}
                        </div>
                    </li>
                </ul>
            </div>
            <div class="button checkout_button">
                <a href="javascript:void(0)"
                   data-entity="basket-checkout-button"><?= Loc::getMessage('SBB_ORDER') ?></a>
            </div>
        </div>
    </div>

    <!--	<div class="cart-in__all-inner" data-entity="basket-checkout-aligner">-->
    <!--		--><? //
//    		if ($arParams['HIDE_COUPON'] !== 'Y')
//    		{
//    			?>
<!--    			<div class="cart-in__all-promo">-->
<!--    							<input type="text" class="" id="" placeholder="Ваш промокод" data-entity="basket-coupon-input">-->
<!--    							<span class="button button-primary">применить</span>-->
<!--    			</div>-->
<!--    			--><?// //
//    		}
//    		?>
    <!--		<div class="basket-checkout-section">-->
    <!--			<div class="cart-in__all-price">-->
    <!--				<div class="basket-checkout-block basket-checkout-block-total">-->
    <!--					<div class="basket-checkout-block-total-inner">-->
    <!--						<div class="cart-in__all-price-title">Итоговая сумма:</div>-->
    <!--						<div class="basket-checkout-block-total-description">-->
    <!--							{{#WEIGHT_FORMATED}}-->
    <!--								--><? //=Loc::getMessage('SBB_WEIGHT')?><!--: {{{WEIGHT_FORMATED}}}-->
    <!--								{{#SHOW_VAT}}<br>{{/SHOW_VAT}}-->
    <!--							{{/WEIGHT_FORMATED}}-->
    <!--							{{#SHOW_VAT}}-->
    <!--								--><? //=Loc::getMessage('SBB_VAT')?><!--: {{{VAT_SUM_FORMATED}}}-->
    <!--							{{/SHOW_VAT}}-->
    <!--						</div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!---->
    <!--				<div class="basket-checkout-block basket-checkout-block-total-price">-->
    <!--					<div class="basket-checkout-block-total-price-inner">-->
    <!--						{{#DISCOUNT_PRICE_FORMATED}}-->
    <!--							<div class="cart-in__all-price-old">-->
    <!--								{{{PRICE_WITHOUT_DISCOUNT_FORMATED}}}-->
    <!--							</div>-->
    <!--						{{/DISCOUNT_PRICE_FORMATED}}-->
    <!---->
    <!--						<div class="cart-in__all-price-now" data-entity="basket-total-price">-->
    <!--							{{{PRICE_FORMATED}}}-->
    <!--						</div>-->
    <!---->
    <!--						{{#DISCOUNT_PRICE_FORMATED}}-->
    <!--							<div class="basket-coupon-block-total-price-difference">-->
    <!--								--><? //=Loc::getMessage('SBB_BASKET_ITEM_ECONOMY')?>
    <!--								<span style="white-space: nowrap;">{{{DISCOUNT_PRICE_FORMATED}}}</span>-->
    <!--							</div>-->
    <!--						{{/DISCOUNT_PRICE_FORMATED}}-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--            <div class="basket-checkout-block basket-checkout-block-btn">-->
    <!--                <button class="button button-primary"-->
    <!--                        data-entity="basket-checkout-button">-->
    <!--                    --><? //=Loc::getMessage('SBB_ORDER')?>
    <!--                </button>-->
    <!--            </div>-->
    <!--		</div>-->
    <!---->
<!--    		--><?// //
//    		if ($arParams['HIDE_COUPON'] !== 'Y')
//    		{
//    		?>
<!--    			<div class="basket-coupon-alert-section">-->
<!--    				<div class="basket-coupon-alert-inner">-->
<!--    					{{#COUPON_LIST}}-->
<!--    					<div class="basket-coupon-alert text-{{CLASS}}">-->
<!--    						<span class="basket-coupon-text">-->
<!--    							<strong>{{COUPON}}</strong> - --><?// //=Loc::getMessage('SBB_COUPON')?><!-- {{JS_CHECK_CODE}}-->
<!--    							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}-->
<!--    						</span>-->
<!--    						<span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">-->
<!--    							--><?// //=Loc::getMessage('SBB_DELETE')?>
<!--    						</span>-->
<!--    					</div>-->
<!--    					{{/COUPON_LIST}}-->
<!--    				</div>-->
<!--    			</div>-->
<!--    			--><?// //
//    		}
//    		?>
    <!--	</div>-->
</script>