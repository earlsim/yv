<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><? $APPLICATION->SetTitle("Семинары"); ?><? /* */ ?>
    <div class="container subPage ctx_seminar">
        <div class="sub_visual">
            <div class="visual_content">
                <div class="inner">
                    <h2 class="seminar-title">Курсы косметологии</h2>
                    <h3 class="sub-title">Lorem ipsum</h3>
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

                <? $APPLICATION->IncludeComponent(
                            "yvoir:news",
                            "flat",
                            Array(
                                "ADD_ELEMENT_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "BROWSER_TITLE" => "-",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "N",
                                "CHECK_DATES" => "Y",
                                "COLOR_NEW" => "3E74E6",
                                "COLOR_OLD" => "C0C0C0",
                                "DETAIL_ACTIVE_DATE_FORMAT" => "d-F-Y",
                                "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                "DETAIL_FIELD_CODE" => array("", ""),
                                "DETAIL_PAGER_SHOW_ALL" => "N",
                                "DETAIL_PAGER_TEMPLATE" => "",
                                "DETAIL_PAGER_TITLE" => "Страница",
                                "DETAIL_PROPERTY_CODE" => array("CITY", "DATE", "TOPIC", "DESCRIPTION", "DOCTOR_NAME", "LOCATION"),
                                "DETAIL_SET_CANONICAL_URL" => "N",
                                "DISPLAY_AS_RATING" => "rating",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FILTER_FIELD_CODE" => array("PREVIEW_TEXT", "PREVIEW_PICTURE", "IBLOCK_TYPE_ID", "IBLOCK_ID", ""),
                                "FILTER_NAME" => "",
                                "FILTER_PROPERTY_CODE" => array("CITY", "DATE", "TOPIC", ""),
                                "FONT_MAX" => "50",
                                "FONT_MIN" => "10",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "4",
                                "IBLOCK_TYPE" => "EVENTS",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "LIST_ACTIVE_DATE_FORMAT" => "j F Y",
                                "LIST_FIELD_CODE" => array("", ""),
                                "LIST_PROPERTY_CODE" => array("CITY", ""),
                                "MEDIA_PROPERTY" => "",
                                "MESSAGE_404" => "",
                                "META_DESCRIPTION" => "-",
                                "META_KEYWORDS" => "-",
                                "NEWS_COUNT" => "20",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "Y",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PERIOD_NEW_TAGS" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "SEF_MODE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SLIDER_PROPERTY" => "",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N",
                                "TAGS_CLOUD_ELEMENTS" => "150",
                                "TAGS_CLOUD_WIDTH" => "100%",
                                "TEMPLATE_THEME" => "blue",
                                "USE_CATEGORIES" => "N",
                                "USE_FILTER" => "Y",
                                "USE_PERMISSIONS" => "N",
                                "USE_RATING" => "N",
                                "USE_RSS" => "N",
                                "USE_SEARCH" => "N",
                                "USE_SHARE" => "N",
                                "VARIABLE_ALIASES" => Array("ELEMENT_ID" => "news_item", "SECTION_ID" => "SECTION_ID")
                            )
                        ); ?>

            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>