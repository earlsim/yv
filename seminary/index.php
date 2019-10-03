<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><? $APPLICATION->SetTitle("Семинары"); ?><? /* */ ?>


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
                            <li class="home"><a href="/"><img alt="На главную" src="/local/templates/yvoire/images/icon/location.png"></a></li>
                            <li>
                                <a href="/">
                                    <p>
                                    YVOIRE
                                    </p>
                                </a>
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
                        "AJAX_OPTION_HISTORY" => "Y",
                        "AJAX_OPTION_JUMP" => "Y",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "N",
                        "CHECK_DATES" => "N",
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
                        "LIST_PROPERTY_CODE" => array("CITY", "DATE"),
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
                        "SEF_FOLDER" => "",
                        "SEF_MODE" => "N",
                        "SEF_URL_TEMPLATES" => array(
                            "news" => "",
                            "section" => "",
                            "detail" => "#CODE#",
                        ),
                        "SET_LAST_MODIFIED" => "N",
                        "SECTION_ID" => "ID",
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
                        "VARIABLE_ALIASES" => Array("ELEMENT_ID" => "ELEMENT_ID", "SECTION_ID" => "SECTION_ID","ELEMENT_CODE" => "ELEMENT_CODE","CODE" => "CODE")
                    )
                ); ?>
                <article class="intern">
                    <div class="block-title al-center">
                        Стажировки
                    </div>
                    <section class="manager-section">
                        <div class="section-text">
                            <div class="section-text__title">
                                Управляющим
                            </div>
                            <div class="section-text__text">
                                <p class="text">
                                    Все, кто работают в индустрии красоты, хорошо знают, что опыт и профессионализм управляющих салона красоты или клиники
                                    эстетической медицины напрямую определяют успех всей организации, а значит, и ее прибыльность.
                                </p>
                                <br>
                                <p class="text">
                                    Эксперты "Академии Научной Красоты" готовы поделиться с вами своими знаниями и профессиональными секретами. Мы приглашаем
                                    вас не только пройти курсы обучения, но и приятно провести свободное от учебы время, насладиться культурой и кухней других
                                    стран, посетить достопримечательности. Вы получите не только новые знания, но и заряд позитивной энергии.
                                </p>
                            </div>
                        </div>
                        <div class="section-image section-image--right-sqr">
                            <img src="/local/templates/yvoire/images/sub/seminar/specialist.png" alt="">
                        </div>
                    </section>
                    <section class="specialist-section">
                        <div class="section-image section-image--left-sqr">
                            <img src="/local/templates/yvoire/images/sub/seminar/cosmetolog.png" alt="">
                        </div>
                        <div class="section-text">
                            <div class="section-text__title">
                                Специалистам
                            </div>
                            <div class="section-text__text">
                                <p class="text">
                                    Работа косметического салона с "роскошным сервисом" требует высочайшего профессионализма. Мы берем на себя гарантии
                                    всестороннего обучения персонала салона красоты или клиники. Высококвалифицированные специалисты - врачи
                                    дерматологи-косметологи и физиотерапевты проведут тренинги по работе с оборудованием и особенностям применения косметики.
                                    Ежегодно более 500 специалистов проходят обучение и стажировку в учебно-методических центрах 20 представительских офисов
                                    Академии Научной Красоты по всей России, а также на базе исследовательских лабораторий и тренинг-центров Европы и США.
                                </p>
                            </div>
                        </div>
                    </section>
                </article>
                <article class="soon-events">
                    <div class="block-title al-center">
                        Скоро состоятся
                    </div>
                    <section class="soon-list">
                        <div class="grid-list">
                            <? $APPLICATION->IncludeComponent(
                                "yvoir:news.list",
                                "another_events",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "N",
                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                    "CACHE_TYPE" => "N",
                                    "CHECK_DATES" => "N",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("ID","DESCRIPTION", "TIME", "LOCATION"),
                                    "FILE_404" => $arParams["FILE_404"],
                                    "FILTER_NAME" => "$arFilter",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "7",
                                    "IBLOCK_TYPE" => "internship",
                                    "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MAX_VOTE" => $arParams["MAX_VOTE"],
                                    "MEDIA_PROPERTY" => $arParams["MEDIA_PROPERTY"],
                                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                                    "NEWS_COUNT" => 8,
                                    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                    "PROPERTY_CODE" => array("DATE", "CITY", "={$arParams["LIST_PROPERTY_CODE"]}", ""),
                                    "SEARCH_PAGE" => ($arParams["USE_SEARCH"] == "Y" ? $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"] : ''),
                                    "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                                    "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                                    "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                    "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                    "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                                    "SHOW_404" => "N",
                                    "SLIDER_PROPERTY" => $arParams["SLIDER_PROPERTY"],
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => $arParams["SORT_BY2"],
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                    "STRICT_SECTION_CHECK" => "N",
                                    "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
                                    "USE_RATING" => $arParams["USE_RATING"],
                                    "USE_SHARE" => $arParams["LIST_USE_SHARE"],
                                    "VOTE_NAMES" => $arParams["VOTE_NAMES"]
                                ),
                                $component
                            ); ?>
                        </div>
                    </section>
                </article>
                <article class="last-events">
                    <div class="block-title al-center">
                        Прошедшие стажировки
                    </div>
                    <section class="last-list">
                        <div class="grid-list">
                            <? $APPLICATION->IncludeComponent(
                                "yvoir:news.list",
                                "last_events",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "N",
                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                    "CACHE_TYPE" => "N",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("", "PROPERTY_DOCTOR_NAME.DOCTOR_INFO", ""),
                                    "FILE_404" => $arParams["FILE_404"],
                                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "7",
                                    "IBLOCK_TYPE" => "internship",
                                    "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MAX_VOTE" => $arParams["MAX_VOTE"],
                                    "MEDIA_PROPERTY" => $arParams["MEDIA_PROPERTY"],
                                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                                    "NEWS_COUNT" => 4,
                                    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                    "PROPERTY_CODE" => array("DATE", "CITY", "={$arParams["LIST_PROPERTY_CODE"]}", ""),
                                    "SEARCH_PAGE" => ($arParams["USE_SEARCH"] == "Y" ? $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"] : ''),
                                    "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                                    "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                                    "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                    "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                    "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                                    "SHOW_404" => "N",
                                    "SLIDER_PROPERTY" => $arParams["SLIDER_PROPERTY"],
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => $arParams["SORT_BY2"],
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                    "STRICT_SECTION_CHECK" => "N",
                                    "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
                                    "USE_RATING" => $arParams["USE_RATING"],
                                    "USE_SHARE" => $arParams["LIST_USE_SHARE"],
                                    "VOTE_NAMES" => $arParams["VOTE_NAMES"]
                                ),
                                $component
                            ); ?>
                        </div>
                    </section>
                </article>
                <article class="speakers">
                    <div class="block-title al-center block-title--mt0">
                        Семинары и стажировки проводят
                    </div>
                    <section class="speakers-block">
                        <?  $APPLICATION->IncludeComponent(
                                "yvoir:news.list",
                                "doctors_list",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "N",
                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                    "CACHE_TYPE" => "N",
                                    "CHECK_DATES" => "N",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_AS_RATING" => $arParams["DISPLAY_AS_RATING"],
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("PROPERTY_DOCTOR_PIC", "PROPERTY_DOCTOR_INFO"),
                                    "FILE_404" => $arParams["FILE_404"],
                                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "5",
                                    "IBLOCK_TYPE" => "DOCTORS",
                                    "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MAX_VOTE" => $arParams["MAX_VOTE"],
                                    "MEDIA_PROPERTY" => $arParams["MEDIA_PROPERTY"],
                                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                                    "NEWS_COUNT" => 4,
                                    "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                    "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                    "PROPERTY_CODE" => array("DOCTOR_INFO", "DOCTOR_PIC"),
                                    "SEARCH_PAGE" => ($arParams["USE_SEARCH"] == "Y" ? $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"] : ''),
                                    "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                                    "SET_BROWSER_TITLE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "Y",
                                    "SET_META_KEYWORDS" => "Y",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                                    "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                                    "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                    "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                    "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                                    "SHOW_404" => "N",
                                    "SLIDER_PROPERTY" => $arParams["SLIDER_PROPERTY"],
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => $arParams["SORT_BY2"],
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                    "STRICT_SECTION_CHECK" => "N",
                                    "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
                                    "USE_RATING" => $arParams["USE_RATING"],
                                    "USE_SHARE" => $arParams["LIST_USE_SHARE"],
                                    "VOTE_NAMES" => $arParams["VOTE_NAMES"]
                                ),
                                $component
                        );?>
                    </section>
                </article>
                <article class="legal">
                    <div class="block-title block-title--mb30 al-left">Правовая информация</div>
                    <div class="text">Обучение в г. Москве осуществляется Учебным Центром ООО «Академия научной красоты-Москва»<br>
                        Лицензия на образовательную деятельность №037916 от 29.09.2016 г.
                    </div>
                    <ul class="legal-docs">
                        <li class="legal-docs__item text">
                            <a href="#"><span></span></a>Устав образовательной организации
                        </li>
                        <li class="legal-docs__item text">
                            <a href="#"><span></span></a>Лицензия на осуществление образовательной деятельности
                        </li>
                        <li class="legal-docs__item text">
                            <a href="#"><span></span></a>Свидетельство о государственной регистрации
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>