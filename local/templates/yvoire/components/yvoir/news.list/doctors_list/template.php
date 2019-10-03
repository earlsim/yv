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
        <?$counter = 1;?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="speakers-block__card speakers-card">
                <div class="speakers-card__pic">
                    <img src="<?echo($arItem["DISPLAY_PROPERTIES"]["DOCTOR_PIC"]["FILE_VALUE"]["SRC"])?>" alt="<?echo($arItem["NAME"])?>">

                </div>
                <div class="speakers-card__content <?if ($counter % 5 == 0){ echo('speakers-card__content--r'); };?>">
                    <div class="card-content__title">
                        <?echo($arItem["NAME"])?>
                    </div>
                    <div class="card-content__text text">
                        <?echo($arItem["PROPERTIES"]["DOCTOR_INFO"]["VALUE"]["TEXT"]);?>
                    </div>
                </div>
            </div>
        <?$counter++;?>
        <?endforeach;?>

