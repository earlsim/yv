<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<section class="event__visit">
    <div class="block-title al-center">Посетите также</div>
    <div class="events-grid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="events-item events-item--1-4">
                <div class="item-top">
                    <div class="item-date"><?echo $arItem["PROPERTIES"]["DATE"]["VALUE"]?></div>
                    <div class="item-title"><a href="<?echo($arItem["DETAIL_PAGE_URL"])?>"><?echo($arItem["NAME"]);?></a></div>
                    <div class="item-loc"><?echo($arItem["PROPERTIES"]["CITY"]["VALUE"])?></div>
                </div>
                <div class="item-bottom">
                    <?echo($arItem["PROPERTIES"]["TIME"]["NAME"]);?>&#32;<?echo($arItem["PROPERTIES"]["TIME"]["VALUE"])?>
                </div>
            </div>
        <?endforeach;?>
    </div>
</section>
