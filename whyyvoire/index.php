<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "YVOIRE - Why Yvoire");
$APPLICATION->SetTitle("Why YVOIRE");
?>
    <!-- container -->
    <div class="container subPage ctx_ha">
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
                            "PATH" => "/local/include/why_yv/slide-title.php"
                        )
                    ); ?>
                    <span class="page_navi left"><a href="/brand/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE"/></a></span>
                    <span class="page_navi right"><a href="/yvoire/"><img
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
                            <li><p>YVOIRE</p></li>
                            <li class="step"><p>></p></li>
                            <li><p>WHY YVOIRE</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="ha_view">
                <div class="section">
                    <div class="inner">
                        <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_img01.png"
                             alt="YVOIRE INTRODUCTION" class="pc"/>
                        <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_mimg01.png"
                             alt="YVOIRE INTRODUCTION" class="mobile"/>
                        <div class="movie_intro">
                            <iframe src="https://www.youtube.com/embed/46WIb-cdYaM?rel=0&autoplay=1" frameborder="0"
                                    scrolling="no" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="inner">
                        <div>
                            <p class="tit">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/local/include/why_yv/section-1-title.php"
                                    )
                                ); ?>
                            </p>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/why_yv/section-1-text-1.php"
                                )
                            ); ?>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_img02.jpg"
                                         alt="YVOIRE MATERIALS" class="pc"/>
                                    <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_mimg02.png"
                                         alt="YVOIRE MATERIALS" class="mobile"/>
                                </li>
                                <li>
                                    <p class="subtit">
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/local/include/why_yv/section-1-subtitle.php"
                                            )
                                        ); ?>
                                        </p>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/local/include/why_yv/section-1-text-2.php"
                                        )
                                    ); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="inner">
                        <div>
                            <p class="tit">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/local/include/why_yv/section-2-title.php"
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
                                        "PATH" => "/local/include/why_yv/section-2-text-1.php"
                                    )
                                ); ?>
                            </p>
                            <div style="margin-top:1rem;">
                                <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_img03.png"
                                     alt="HICE Cross-linking Technology" class="pc"/>
                                <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_mimg03.png"
                                     alt="HICE Cross-linking Technology" class="mobile"/>
                            </div>
                        </div>
                        <!-- <div>
                            <p>High Cross-linking Ratio means Efficient Cross-linking <b>3)</b></p>
                            <div style="margin-top:1rem;">
                            <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_img04.png" alt="HICE Cross-linking Technology" class="pc" />
                            <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_mimg04.png" alt="HICE Cross-linking Technology" class="mobile" />
                            </div>
                        </div> -->
                        <div>
                            <p>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/local/include/why_yv/section-2-text-2.php"
                                    )
                                ); ?>
                            </p>
                            <div style="margin-top:1rem;">
                                <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_img05.png"
                                     alt="HICE Cross-linking Technology" class="pc"/>
                                <img src="/local/templates/yvoire/images/sub/haofyvoire/yvoire_mimg05.png"
                                     alt="HICE Cross-linking Technology" class="mobile"/>
                            </div>
                        </div>
                        <div>
                            <ol>
                                <li><p>1. Drug master file No. 17416, FDA</p></li>
                                <li><p>2. Certification of Suitability of monographs of the European Pharmacopoeia,
                                        EDQM</p></li>
                                <li><p>3. Galderma’s patent, WO 2014/206701 A1</p></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contents -->
    </div>
    <!-- //container -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>