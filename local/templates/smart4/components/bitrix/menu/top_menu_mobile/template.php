<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="page_menu_nav menu_mm">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["PARAMS"]['IS_PARENT']):?>
		<li class="page_menu_item has-children menu_mm">
            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?><i class="fa fa-angle-down"></i></a>
            <ul class="page_menu_selection menu_mm">
                <?php foreach($arItem["PARAMS"]['ITEMS'] as $arSection): ?>
                <li class="page_menu_item menu_mm"><a href="<?= $arSection['1'] ?>"><?= $arSection['0'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
	<?else:?>
		<li class="page_menu_item menu_mm"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>