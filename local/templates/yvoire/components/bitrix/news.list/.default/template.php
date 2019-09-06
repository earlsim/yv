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
?>
<ul class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<div class="thumbnail">
					<img alt="NEWS LIST" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"> <span class="more"></span>
				</div>
			<?else:?>
				<img alt="NEWS LIST" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"> <span class="more"></span>
			<?endif;?>
		<div class="thumbnail_txt">

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<p class="tit"><?echo $arItem["NAME"]?></p>
			<?else:?>
				<p class="tit"><?echo $arItem["NAME"]?></p>
			<?endif;?>
		<?endif;?>
		
			
			<div class="notice v-ellipsis">
				<p><br><img src="/fileupload/editor/AMWC newsletter final.jpg" alt="" style="width: 800px; height: auto; "></p>
			</div>

			<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<p class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
			<?endif?>
			
		</div>
		</a>
	</li>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</ul>
			 <!-- PAGING -->
			<div class="paging">
				<div class="inner">
 <span class="navi_front"><a href="javascript:goPage(1)"><img alt="FIRST PAGE" src="/local/templates/yvoire/images/icon/navi_front.png"></a></span> <span class="navi_prev"><a href="javascript:goPage(1)"><img alt="PREV PAGE" src="/local/templates/yvoire/images/icon/navi_prev.png"></a></span>
					<ol>
						<li class="active"><a href="javascript:goPage(1)">1</a></li>
					</ol>
 <span class="navi_next"><a href="javascript:goPage(1)"><img alt="NEXT PAGE" src="/local/templates/yvoire/images/icon/navi_next.png"></a></span> <span class="navi_last"><a href="javascript:goPage(1)"><img alt="LAST PAGE" src="/local/templates/yvoire/images/icon/navi_last.png"></a></span>
				</div>
			</div>
			 <!-- //PAGING -->
