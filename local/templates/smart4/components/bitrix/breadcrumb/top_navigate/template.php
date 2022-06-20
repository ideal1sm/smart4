
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
$strReturn .= '<div class="breadcrumbs">
          <ul>';
$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<li><a href="' . $arResult[$index]["LINK"] . '" itemprop="item">' . $title . '</a></li>';
    }
    else {
        $strReturn .= '<li>' . $title . '</li> ';
    }
}
$strReturn .= '</ol>
      </div>';
return $strReturn;