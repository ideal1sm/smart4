function declOfNum(number, titles) {
    var cases = [2, 0, 1, 1, 1, 2];
    return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
}

function in_array(needle, haystack, strict) {
    var found = false, key, strict = !!strict;
    for (key in haystack) {
        if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
            found = true;
            break;
        }
    }
    return found;
}

/*
 * Упрощенный класс для работы с битриксовой корзиной
 * */
var CustomBitrixCart = function (params) {
};
CustomBitrixCart.prototype.serialize = function (selector, noContainer) {
    var preparedData = $(selector).serializeArray(), i, arRequest = [],
        notInOrderContainer = [
            'sessid',
            'SITE_ID',
            'SIGN'
        ];
    for (i in preparedData) {
        if (preparedData.hasOwnProperty(i)) {
            if (in_array(preparedData[i].name, notInOrderContainer) || noContainer == true) {
                arRequest.push(
                    {
                        name: preparedData[i].name,
                        value: preparedData[i].value,
                    }
                );
            } else {
                arRequest.push(
                    {
                        name: 'order[' + preparedData[i].name + ']',
                        value: preparedData[i].value,
                    }
                );
            }
        }
    }
    var sign = $('input[name=SIGN]')
    arRequest.push({name: 'signedParamsString', value: sign.val()});
    return arRequest;
};

CustomBitrixCart.prototype.updatePage = function (result) {
//  Стоимость заказа
    $('#orderCost').html(result.order.TOTAL.ORDER_PRICE_FORMATED)
    $('#deliveryCost').html(result.order.TOTAL.DELIVERY_PRICE_FORMATED)
    $('#orderSum').html(result.order.TOTAL.ORDER_TOTAL_PRICE_FORMATED)
//  Пункты самовывоза
    console.log(result.order)
    $("select[name='BUYER_STORE'] option").each(function (index, value)
    {
        index += 1
        console.log(value)
        value.value = result.order.STORE_LIST[index].ID
        value.innerText = result.order.STORE_LIST[index].ADDRESS
    });
}

CustomBitrixCart.prototype.validation = function () {
    return true;
}
CustomBitrixCart.prototype.updateAjaxData = function () {
    $('#mainBlockOrder').addClass('preloaderOn');
    var arRequest = this.serialize('#orderForm');
    arRequest.push({name: 'soa-action', value: 'refreshOrderAjax'});
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '/bitrix/components/bitrix/sale.order.ajax/ajax.php',
        data: arRequest,
        success: function (data) {
            cart.updatePage(data);
        }
    });
};
CustomBitrixCart.prototype.createOrder = function () {
    if (this.validation()) {
        $('#mainBlockOrder').addClass('preloaderOn');
        var arRequest = this.serialize('#orderForm', true);
        arRequest.push({name: 'soa-action', value: 'saveOrderAjax'});
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/personal/order/make/index.php',
            data: arRequest,
            success: function (data) {
                console.log(data)
                if (data.order.REDIRECT_URL) {
                    window.location.href = data.order.REDIRECT_URL;
                } else {
                    var text = '';
                    $.each(data.order.ERROR.PROPERTY, function (index, value) {
                        text += value + '<br>';
                    });
                    $('#error_text').show().html('Проверьте правильность полей!<br>' + text);
                    $('.preloaderOn').each(
                        function () {
                            $(this).addClass("preAnimation").delay(1000).queue(function (next) {
                                $(this).removeClass("preAnimation").removeClass('preloaderOn');
                                next();
                            });
                        }
                    );
                }
            }
        });
    }
}

var cart = new CustomBitrixCart();

$(function () {
    $('.js-client-order').on('click', function () {
        $(this).parent().toggleClass('open');
    });

    $(document).on('change', "input[name$='DELIVERY_ID']", function () {
        cart.updateAjaxData();
    });

    $(document).on('change', "input[name$='PAY_SYSTEM_ID']", function () {
        cart.updateAjaxData();
    });

    $(document).on('submit', '#orderForm', function (e) {
        e.preventDefault();
        cart.createOrder();
        return false;
    });

    cart.updateAjaxData();
});