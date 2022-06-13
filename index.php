<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "slider_main",
                    array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "1",
                        "NEWS_COUNT" => "3",
                        "SORT_BY1" => "ID",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array("ID", 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT'),
                        "PROPERTY_CODE" => array('TITLE'),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "Y",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    )
                );
                ?>
    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/avds_small.jpg)"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/discount.png" alt="">
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Скидка</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">Успей купить!</div>
                        <div class="avds_link"><a href="product.html">Смотреть подробней</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/avds_large.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">Профессиональная камера</div>
                        <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
                        <div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div id="products" class="products__title">Популярное</div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- <div class="product_grid"> -->

                    <div class="swiper swiper-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар1</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар2</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар3</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар4</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар5</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар6</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар7</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/avds_xl.jpg)"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">Удивительное качество звука</div>
                            <div class="avds_text">Новые наушники уже доступны.</div>
                            <div class="avds_link avds_xl_link"><a href="categories.html">Узнать больше</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="products">
        <div  id="products1" class="products__title">Акции</div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- <div class="product_grid"> -->

                    <div class="swiper swiper-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар1</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар2</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар3</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар4</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар5</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар6</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар7</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>



    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/soon.jpg)"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">Предзаказ товаров</div>
                            <div class="avds_text">Оформи заказ сейчас и получи дополнительню выгоду</div>
                            <div class="avds_link avds_xl_link"><a href="soon.html">Узнать больше</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="products">
        <div  id="products2" class="products__title">Новинки</div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- <div class="product_grid"> -->

                    <div class="swiper swiper-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар1</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар2</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар3</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар4</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар5</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар6</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <div class="product_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/product_1.jpg" alt=""></div>
                                    <div class="product_extra product_new"><a href="categories.html">Новинка!</a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.html">Товар7</a></div>
                                        <div class="product_price">Р6700</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- Ad -->
    <!-- Newsletter -->
<?
$APPLICATION->IncludeComponent(
    "custom:form",
    "mailing_form",
    array(
        'IBLOCK_ID' => '3',
        'MAIL_EVENT' => 'FORM_SENDED',
        'RECAPTCHA_ENABLED' => 'N',
        'RECAPTCHA_PUBLIC_KEY' => '6LcqwJwdAAAAAGFfWMfSsziyrRMTV0kUARrgOCts',
        'RECAPTCHA_PRIVATE_KEY' => '6LcqwJwdAAAAAATrf2Qqm8-KSw_vyhwCuPdTnqN8',
        'ACTIVE' => 'Y',
        'TOKEN' => 'mailing_form001',
        'FORM_NAME' => 'Рассылка',
        'PROPS' => array(
            'EMAIL', // type - string
        ),
    )
);
?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>