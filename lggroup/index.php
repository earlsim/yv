<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("LG GROUP");
?>

    <script>
        $(function () {
            lgGroup.init();
        });
    </script>

    <!-- container -->
    <div class="container subPage ctx_lggroup">
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
                            "PATH" => "/local/include/lggroup/lg_group.php"
                        )
                    ); ?>
                    <span class="page_navi left"><a href="/faq/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE"/></a></span>
                    <span class="page_navi right"><a href="/lgchem/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_right.png"
                                    alt="RIGHT PAGE"/></a></span>
                </div>
            </div>
        </div>
        <!-- //sub visual -->
        <!-- contents -->
        <div class="contents">
            <!-- location -->
            <div class="location">
                <div class="inner">
                    <div>
                        <ul>
                            <li class="home"><img src="/local/templates/yvoire/images/icon/location.png" alt="home"/>
                            </li>
                            <li><p>LG</p></li>
                            <li class="step"><p>></p></li>
                            <li><p>LG Group</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="lggroup_view">
                <div class="quarter">
                    <ul>
                        <li>
                            <div class="tit_box mobile">
                                <p class="tit">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lggroup/lg_group_section_1.php"
                                        )
                                    ); ?>
                                </p>
                                <p class="subtit">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lggroup/lg_group_section_2.php"
                                        )
                                    ); ?>
                                </p>
                            </div>
                            <img src="/local/templates/yvoire/images/sub/lggroup/group_img01.jpg" alt="LG TWIN TOWERS"
                                 class="pc"/>
                            <img src="/local/templates/yvoire/images/sub/lggroup/group_mimg01.jpg" alt="LG TWIN TOWERS"
                                 class="mobile"/>
                        </li>
                        <li>
                            <div class="tit_box pc">
                                <p class="tit">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lggroup/lg_group_section_1.php"
                                        )
                                    ); ?>
                                </p>
                                <p class="subtit">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lggroup/lg_group_section_2.php"
                                        )
                                    ); ?>
                                </p>
                            </div>
                            <div class="notice">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/local/include/lggroup/text.php"
                                    )
                                ); ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="science">
                    <div class="tit_box mobile">
                        <p class="tit pc">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/lggroup/section-2.php"
                                )
                            ); ?>
                            </p>
                    </div>
                    <img src="/local/templates/yvoire/images/sub/lggroup/group_img02.png" alt="LG SCIENCE PARK"
                         class="pc"/>
                    <div class="science_txt">
                        <div class="tit_box pc">
                            <p class="tit pc">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/local/include/lggroup/section-2.php"
                                    )
                                ); ?>
                                </p>
                        </div>
                        <div class="notice">
                            <ul>
                                <li>
                                    <p>
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/local/include/lggroup/text2-1.php"
                                            )
                                        ); ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/local/include/lggroup/text2-2.php"
                                            )
                                        ); ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="movie_science">
                        <iframe src="https://www.youtube.com/embed/w78B3nIwrGg?rel=0&autoplay=1" frameborder="0"
                                scrolling="no" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="lggroup_map">
                    <div id="google_map"></div>
                    <div class="map_tap">
                        <div class="tapbox">
                            <ul>
                                <li class="active"><a href="javascript:;">Head Office</a></li>
                                <li><a href="javascript:;">LG Science Park</a></li>
                            </ul>
                        </div>
                        <div class="office address">
                            <p>
                                LG Twin Towers, 128, Yeoui-daero, Yeongdeungpo-gu,
                                Seoul, Republic of Korea
                            </p>
                            <div class="btn_type01" style="opacity: 1; margin-top: 4%;">
                                <span class="hEffect" style="top: 50%; left: 50%; width: 0px; height: 0px;"></span>
                                <a href="http://www.lgcorp.com/main/main.dev" target="_blank" class="btn-1">view
                                    more</a>
                            </div>
                        </div>
                        <div class="park address blind">
                            <p>
                                LG Science Park, 30, Magokjungang 10-ro, Gangseo-gu,
                                Seoul, Korea
                            </p>
                            <div class="btn_type01" style="opacity: 1; margin-top: 4%;">
                                <span class="hEffect" style="top: 50%; left: 50%; width: 0px; height: 0px;"></span>
                                <a href="http://www.lgcorp.com/about/sciencePark1.dev" target="_blank" class="btn-1">view
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contents -->
    </div>
    <!-- //container -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>