<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<!-- container -->
<div class="container subPage ctx_newslist">
    <!-- sub visual -->
    <div class="sub_visual">
        <div class="visual_content">
            <div class="inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/news-list/slide-title.php"
                    )
                ); ?>
                <span class="page_navi left"><a href="/sns/"><img alt="LEFT PAGE"
                                                                  src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span>
                <span class="page_navi right"><a href="/faq/"><img alt="RIGHT PAGE"
                                                                   src="/local/templates/yvoire/images/icon/page_navigator_right.png"></a></span>
            </div>
        </div>
    </div>
    <!-- //sub visual --> <!-- contents -->
    <div class="contents">
        <!-- location -->
        <div class="location">
            <div class="inner">
                <div>
                    <ul>
                        <li class="home"><img alt="home" src="/local/templates/yvoire/images/icon/location.png"></li>
                        <li>
                            <p>
                                SNS &amp; Notice
                            </p>
                        </li>
                        <li class="step">
                            <p>
                                &gt;
                            </p>
                        </li>
                        <li>
                            <p>
                                News &amp; Notice
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //location -->
        <div class="newslist_conbody">
            <div class="news_board">
                <div class="inner">
                    <form name="frmSearch" id="frmSearch" action="news_list/" method="post">
                        <input type="hidden" name="lang" value="ko">
                        <input type="hidden" name="page" id="page" value="1">
                        <input type="hidden" name="bt" value="1">
                    </form>
                    <ul class="news-list">
                        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                            <?= $arResult["NAV_STRING"] ?><br/>
                        <? endif; ?>
                        <? foreach ($arResult["ITEMS"] as $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <li>
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                        <? if ($arItem["PREVIEW_PICTURE"]!== NULL):?>
                                        <div class="thumbnail">
                                            <img alt="NEWS LIST" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"><span class="more"></span>
                                        </div>
                                        <? else: ?>
                                            <img alt="no_photo" src="/local/templates/yvoire/images/no_photo.png?>"> <span class="more"></span>
                                        <? endif; ?>
                                    <? endif; ?>
                                    <div class="thumbnail_txt">
                                        <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                                            <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                                <p class="tit"><? echo $arItem["NAME"] ?></p>
                                            <? else: ?>
                                                <p class="tit"><? echo $arItem["NAME"] ?></p>
                                            <? endif; ?>
                                        <? endif; ?>

                                        <div class="notice v-ellipsis">
                                            <p><br><img src="" alt="" style="width: 800px; height: auto;"></p>
                                        </div>

                                        <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                                            <p class="date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></p>
                                        <? endif ?>

                                    </div>
                                </a>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
                    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                        <br/><?= $arResult["NAV_STRING"] ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>