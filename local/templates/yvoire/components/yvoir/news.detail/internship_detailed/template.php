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
<div class="container subPage ctx_seminar">
    <div class="sub_visual">
        <div class="visual_content">
            <div class="inner">
                <h2 class="seminar-title">Курсы косметологии</h2>
                <h3 class="sub-title"></h3>
                <span class="page_navi left"><a href="/lgchem/" title="lgchem page"><img alt="ЛЕВАЯ СТРАНИЦА"
                                                                                         src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span>
                <span class="page_navi right"><a href="/whyyvoire/" title="why yvoire"><img alt="ПРАВАЯ СТРАНИЦА"
                                                                                            src="/local/templates/yvoire/images/icon/page_navigator_right.png"></a></span>
            </div>
        </div>
    </div>
    <div class="contents">
        <div class="location">
            <div class="inner">
                <div>
                    <ul>
                        <li class="home"><img alt="На главную" src="/local/templates/yvoire/images/icon/location.png"></li>
                        <li>
                            <p>
                                YVOIRE
                            </p>
                        </li>
                        <li class="step">
                            <p>
                                &gt;
                            </p>
                        </li>
                        <li>
                            <p>
                                Курсы косметологии
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="seminar-container">
            <?if($arResult["NAME"]):?>
                <div class="section-text__title section-text__title--m64 js-event-title"><?echo($arResult['NAME'])?></div>
            <?endif;?>
            <div class="event">
                <div class="event__info">
                    <div class="event-inner__left">
                        <div class="event-info__date">
                            <div class="event-date__name text"><?echo($arResult["DISPLAY_PROPERTIES"]["DATE"]["NAME"])?></div>
                            <div class="event-date__value"><?echo($arResult["DISPLAY_PROPERTIES"]["DATE"]["VALUE"])?></div>
                        </div>
                        <div class="event-info__loc">
                            <div class="event-loc__name text"><?echo($arResult["DISPLAY_PROPERTIES"]["CITY"]["NAME"])?></div>
                            <div class="event-loc__value"><?echo($arResult["DISPLAY_PROPERTIES"]["CITY"]["VALUE"])?></div>
                        </div>
                    </div>
                    <?if($arResult["DISPLAY_PROPERTIES"]["BUTTON"]["VALUE"] !== 0):?>
                        <div class="event-inner__right">
                        <div class="event-info__register">
                            <div class="btn_type01">
                                <span class="hEffect"></span>
                                <a href="#" class="btn-1 popup">Записаться</a>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                </div>
                <div class="event__description">
                    <div class="block-title"><?echo($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["NAME"])?></div>
                    <div class="event-description__text">
                        <?echo(htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]))?>
                    </div>
                    <?if($arResult["DISPLAY_PROPERTIES"]["DOCTOR_NAME"]):?>
                        <div class="block-title al-left"><?echo($arResult["DISPLAY_PROPERTIES"]["DOCTOR_NAME"]["NAME"])?></div>
                        <section class="specialist-section specialist-section--pb64">
                            <?if($arResult["DOCTOR_PIC"]):?>
                                <div class="section-image section-image--pa section-image--left-sqr">
                                    <div class="pic-wrap">
                                        <img src="<?echo($arResult['DOCTOR_PIC']);?>" alt="<?echo($arResult["DOCTOR_INFO"]["PROPERTY_DOCTOR_INFO_VALUE"]["NAME"])?>">
                                    </div>
                                </div>
                            <?endif;?>
                            <div class="section-text">
                                <div class="section-text__title"><?echo($arResult["DOCTOR_INFO"]["NAME"])?></div>
                                <div class="section-text__text">
                                    <p class="text"><?echo($arResult['DOCTOR_INFO']["PROPERTY_DOCTOR_INFO_VALUE"]['TEXT']);?></p>
                                </div>
                            </div>
                        </section>
                    <?endif;?>
                    <section class="event__location">
<!--                        <div class="block-title al-center">Место проведения</div>-->
                        <?if($arResult["PREVIEW_PICTURE"]):?>
                            <div class="event-location__pic">
                                <img src="<?echo($arResult["PREVIEW_PICTURE"]["SRC"])?>" alt="<?echo($arResult["PREVIEW_PICTURE"]["ALT"])?>">
                            </div>
                        <?endif;?>
<!--                        <div class="event-location__title">-->
<!--                            <h3 class="sub-title sub-title--mb64">--><?//echo($arResult["NAME"])?><!--</h3>-->
<!--                            <div class="btn_type02">-->
<!--                                <span class="hEffect"></span>-->
<!--                                <a href="--><?//echo($arResult['LOC_INFO']['LOC_LINK'])?><!--" class="btn-1">Подробнее</a>-->

<!--                            </div>-->
<!--                        </div>-->
                    </section>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "yvoire_also_visit",
                        Array(
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "NEWS_COUNT" => "4",
                            "SORT_BY1" => $arParams["SORT_BY1"],
                            "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                            "SORT_BY2" => $arParams["SORT_BY2"],
                            "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                            "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                            "PROPERTY_CODE" => Array("NAME","CITY","LOCATION","DATE","TIME"),
                            "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                            "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                            "SET_TITLE" => $arParams["SET_TITLE"],
                            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                            "MESSAGE_404" => $arParams["MESSAGE_404"],
                            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                            "SHOW_404" => $arParams["SHOW_404"],
                            "FILE_404" => $arParams["FILE_404"],
                            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                            "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                            "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                            "CHECK_DATES" => "N",
                        ),
                        $component
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>