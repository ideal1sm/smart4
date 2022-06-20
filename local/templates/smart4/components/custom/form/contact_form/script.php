<?php
/**
 * @global $APPLICATION
 * @global $arResult
 * @global $arParams
 */
?>

<script type="application/javascript">
    'use strict'
    //$('#form_<?//=$arParams['TOKEN']?>// *[name="phone"]').mask('+7 (999) 999-99-99')
    $(() => {
        $('#form_<?=$arParams['TOKEN']?> button').click(() => {
            let validate = true

            $('#form_<?=$arParams['TOKEN']?> *[required]').each((index, el) => {
                if ($(el).val() === '') {
                    $(el).css('border', '1px solid red')
                    validate = false
                } else if ($(el).is(':not(:checked)') && $(el).is(':checkbox')) {
                    $(el).parent().css('border', '1px solid red')
                    validate = false
                } else {
                    $(el).css('border', 'unset')
                }
            })

            if (validate) {
                let data = new FormData

                data.append('TOKEN', '<?=$arParams['TOKEN']?>')
                data.append('NAME', $('#form_<?=$arParams['TOKEN']?> *[name="name"]').val())
                data.append('LASTNAME', $('#form_<?=$arParams['TOKEN']?> *[name="lastname"]').val())
                data.append('THEME', $('#form_<?=$arParams['TOKEN']?> *[name="theme"]').val())
                data.append('COMMENT', $('#form_<?=$arParams['TOKEN']?> *[name="comment"]').val())

                $.ajax({
                    method: 'post',
                    url: '<?=$APPLICATION->GetCurDir()?>',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        data = JSON.parse(data)
                        if (data.status === true) {
                            location.reload()
                        }
                    }
                })
            }
        })
    })
</script>
