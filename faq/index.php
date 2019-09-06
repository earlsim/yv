<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("FAQ");
?>
    <script>
        $(function () {
            faqLoder.init();
        });
    </script> <!-- container -->
    <div class="container subPage ctx_faq">
        <!-- sub visual -->
        <div class="sub_visual">
            <div class="visual_content">
                <div class="inner">
                    <h2>FAQ</h2>
                    <h3>Frequently Asked Questions.</h3>
                    <span class="page_navi left"><a href="/news_list/"><img alt="LEFT PAGE"
                                                                            src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span>
                    <span class="page_navi right"><a href="/lggroup/"><img alt="RIGHT PAGE"
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
                            <li class="home"><img alt="home" src="/local/templates/yvoire/images/icon/location.png">
                            </li>
                            <li>
                                <p>
                                    FAQ
                                </p>
                            </li>
                            <li class="step">
                                <p>
                                    &gt;
                                </p>
                            </li>
                            <li>
                                <p>
                                    FAQ
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="inner">
                <div class="question_list">
                    <ul>
                        <? $APPLICATION->IncludeComponent(
                            "yvoire:faq.yv",
                            ".default",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "N",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "3",
                                "IBLOCK_TYPE" => "faq",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "20",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "ANSWER",
                                    1 => "QUESTION",
                                    2 => "",
                                ),
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        ); ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //contents -->
    </div>
    <!-- //container --><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>