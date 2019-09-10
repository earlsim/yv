<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("LG Chem");
?>

    <script>
        $(function () {
            lgChem.init();
        });
    </script>

    <!-- container -->
    <div class="container subPage ctx_lgchem">
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
                            "PATH" => "/local/include/lgchem/slide-title.php"
                        )
                    ); ?>
                    <span class="page_navi left"><a href="/lggroup/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE"/></a></span>
                    <span class="page_navi right"><a href="/brand/"><img
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
                            <li><p>LG CHEM</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="lgchem_conbody">
                <div class="lgchem_subject">
                    <div class="inner">
                        <ul>
                            <li>
                                <p class="tit">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lgchem/section-title.php"
                                        )
                                    ); ?>
                                    </p>
                                <p>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lgchem/section-text-1.php"
                                        )
                                    ); ?>
                                </p>
                            </li>
                            <li>
                                <p style="margin-bottom:2rem;">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lgchem/section-text-2.php"
                                        )
                                    ); ?>
                                </p>
                                <p>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/lgchem/section-text-3.php"
                                        )
                                    ); ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lgchem_movie">
                    <div class="inner">
                        <img src="/local/templates/yvoire/images/sub/lgchem/lgchem_img01.png" alt="sample"/>
                        <div class="movie_lgchem">
                            <iframe src="https://www.youtube.com/embed/OiUc-k4Q9z4?rel=0&autoplay=1" frameborder="0"
                                    scrolling="no" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="lgchem_business">
                    <p class="tit">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/lgchem/section-2-title.php"
                            )
                        ); ?>
                    </p>
                    <div class="inner">
                        <img src="/local/templates/yvoire/images/sub/lgchem/business_img01.png"
                             alt="LG Chem-Life Science’s Main Business" class="pc"/>
                        <img src="/local/templates/yvoire/images/sub/lgchem/business_mimg01.png"
                             alt="LG Chem-Life Science’s Main Business" class="mobile"/>
                    </div>
                    <div class="slide_box">
                        <ul>
                            <li class="prev_slide">
                                <a href="javascript:;">
                                    <img src="/local/templates/yvoire/images/sub/lgchem/slide04.jpg" alt="Slide Image"/>
                                    <div class="dimbox"></div>
                                </a>
                            </li>
                            <li class="main_slide">
                                <a href="javascript:;">
                                    <img src="/local/templates/yvoire/images/sub/lgchem/slide00.jpg" alt="Slide Image"/>
                                    <div class="dimbox"></div>
                                </a>
                            </li>
                            <li class="next_slide">
                                <a href="javascript:;">
                                    <img src="/local/templates/yvoire/images/sub/lgchem/slide01.jpg" alt="Slide Image"/>
                                    <div class="dimbox"></div>
                                </a>
                            </li>
                        </ul>
                        <div class="slide_navi">
                            <span><a href="javascript:;"><img
                                            src="/local/templates/yvoire/images/sub/lgchem/slide_arrow_prev.png"
                                            alt="Navigator Prev"/></a></span>
                            <span><a href="javascript:;"><img
                                            src="/local/templates/yvoire/images/sub/lgchem/slide_arrow_next.png"
                                            alt="Navigator Next"/></a></span>
                        </div>
                    </div>
                </div>
                <div class="lgchem_map">
                    <div id="google_map"></div>
                    <div class="map_tap">
                        <div class="tapbox">
                            <ul>
                                <li class="active"><a href="javascript:;">Office</a></li>
                                <li><a href="javascript:;">Plant</a></li>
                            </ul>
                        </div>
                        <div class="office address">
                            <p>
                                LG Science Park, 30, Magokjungang 10-ro, Gangseo-gu,
                                Seoul, Korea
                            </p>
                            <div class="btn_type01" style="opacity: 1; margin-top: 4%;">
                                <span class="hEffect" style="top: 50%; left: 50%; width: 0px; height: 0px;"></span>
                                <a href="http://bio.lgchem.com/en/main" target="_blank" class="btn-1">view more</a>
                            </div>
                        </div>
                        <div class="plant address blind">
                            <p>
                                129, Seogam-ro, Iksan-si, Jeollabuk-do,
                                Republic of Korea
                            </p>
                            <div class="btn_type01" style="opacity: 1; margin-top: 4%;">
                                <span class="hEffect" style="top: 50%; left: 50%; width: 0px; height: 0px;"></span>
                                <!--<a href="javascript:;" class="btn-1">view more</a>-->
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