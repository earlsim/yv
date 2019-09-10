<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("SNS");
?>
    <script>
        $(function () {
            snsLoader.init();
        });
    </script>
    <!-- container -->
    <div class="container subPage ctx_sns">
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
                            "PATH" => "/local/include/sns/slide-title.php"
                        )
                    ); ?>
                    <span class="page_navi left"><a href="/review/"><img
                                    src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE"/></a></span>
                    <span class="page_navi right"><a href="/news_list/"><img
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
                            <li><p>SNS & Notice</p></li>
                            <li class="step"><p>></p></li>
                            <li><p>SNS</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //location -->
            <div class="sns_conbody">
                <div class="sns_view">
                    <div class="inner">
                        <div class="tab_list">
                            <ul>
                                <li class="active"><a href="javascript:;"><img
                                                src="/local/templates/yvoire/images/sub/sns/tablist00_on.png"
                                                alt="FACEBOOK"/></a></li>
                                <li><a href="javascript:;"><img
                                                src="/local/templates/yvoire/images/sub/sns/tablist01_off.png"
                                                alt="INSTAGRAM"/></a></li>
                            </ul>
                        </div>
                        <div class="listbox facebookList">
                            <ul id="facebookfeed"></ul>
                            <div class="btn_type02">
                                <span class="hEffect"></span>
                                <a href="https://www.facebook.com/yvoire.official.global" target="_blank" class="btn-1">FACKBOOK</a>
                            </div>
                        </div>
                        <div class="listbox instaList">
                            <ul id="instafeed"></ul>
                            <div class="btn_type02">
                                <span class="hEffect"></span>
                                <a href="https://www.instagram.com/yvoire.official.global/" target="_blank"
                                   class="btn-1">INSTAGRAM</a>
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