
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";
$strReturn = '';
$strReturn .= '<div class="breadcrumb-block">
          <ol class="breadcrumb">';
$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        if ($arResult[$index]['LINK'] === '/personal/'){
            $strReturn .= '<li class="breadcrumb-item"><a href="' . $arResult[$index]["LINK"] . '" itemprop="item" style="pointer-events:none;">' . $title . '</a></li>';
        }
        else{
            $strReturn .= '<li class="breadcrumb-item"><a href="' . $arResult[$index]["LINK"] . '" itemprop="item">' . $title . '</a></li>';
        }
    }
    else {
        $strReturn .= '<li class="breadcrumb-item active">' . $title . '</li> ';
    }
}
$strReturn .= '</ol>
      </div>';
return $strReturn;