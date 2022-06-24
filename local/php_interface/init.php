<?php
/**
 * @global $APPLICATION
 * @param $arFields
 */

use \Bitrix\Main\Loader,
    \Bitrix\Main\Application,
    \Ion\Settings,
    Bitrix\Iblock\IblockTable;
if (CModule::IncludeModule('iblock')) {
    $res = CIBlockElement::GetList(
        array('sort' => 'asc'),
        array('IBLOCK_ID' => 5),
        false,
        false,
        array('PROPERTY_TITLE', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PROPERTY_LINK')
    );
    global $bannerItems;
    while ($ob = $res->GetNextElement()) {
        $bannerItems[] = $ob->GetFields();
    }
    foreach ($bannerItems as &$item) {
        $item['PREVIEW_PICTURE'] = CFile::GetPath($item['PREVIEW_PICTURE']);
    }
    unset($res);
}