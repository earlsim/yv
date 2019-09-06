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
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<!-- PAGING -->
<div class="paging">
    <div class="inner">
        <div class="text">

<?if($arResult["bDescPageNumbering"] === true):?>


	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
            <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
            <span class="navi_prev"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
		<?else:?>
            <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
			<?else:?>
                <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
			<?endif?>
		<?endif?>
	<?else:?>
        <span class="navi_front"><a href=""><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<b><?=$NavRecordGroupPrint?></b>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
            <ol><li class="active"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li></ol>
		<?else:?>
            <ol><li class="active"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li></ol>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
        <span class="navi_next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img alt="NEXT PAGE" src="/local/templates/yvoire/images/icon/navi_next.png"></a></span>
        <span class="navi_last"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><img alt="LAST PAGE" src="/local/templates/yvoire/images/icon/navi_last.png"></a></span>
	<?else:?>
        <span class="navi_next"><a href=""><img alt="NEXT PAGE" src="/local/templates/yvoire/images/icon/navi_next.png"></a></span>
        <span class="navi_last"><a href=""><img alt="LAST PAGE" src="/local/templates/yvoire/images/icon/navi_last.png"></a></span>
	<?endif?>

<?else:?>

    </div>

	<div class="text">

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
            <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
            <span class="navi_prev"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
		<?else:?>
            <span class="navi_front"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
			<?if ($arResult["NavPageNomer"] > 2):?>
                <span class="navi_prev"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
			<?else:?>
                <span class="navi_prev"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
			<?endif?>
		<?endif?>

	<?else:?>
        <span class="navi_front"><a href=""><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span>
        <span class="navi_prev"><a href=""><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <ol><li class="active"><a href="javascript:void(0)"><?=$arResult["nStartPage"]?></a></li></ol>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <ol><li class=""><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li></ol>
		<?else:?>
            <ol><li class=""><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li></ol>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <span class="navi_next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img alt="NEXT PAGE" src="/local/templates/yvoire/images/icon/navi_next.png"></a></span>
        <span class="navi_last"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><img alt="LAST PAGE" src="/local/templates/yvoire/images/icon/navi_last.png"></a></span>
	<?else:?>
        <span class="navi_next"><a href="javascript:void(0);"><img alt="NEXT PAGE" src="/local/templates/yvoire/images/icon/navi_next.png"></a></span>
        <span class="navi_last"><a href="javascript:void(0);"><img alt="LAST PAGE" src="/local/templates/yvoire/images/icon/navi_last.png"></a></span>
	<?endif?>

<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow">по стр.</a>
	<?else:?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow">все</a>
	<?endif?>
</noindex>
<?endif?>
    </div>
</div>
<!-- //PAGING -->
