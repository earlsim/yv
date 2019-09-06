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
<div class="container subPage ctx_newsview">
    <!-- sub visual -->
    <div class="sub_visual">
        <div class="visual_content">
            <div class="inner">
                <h2>News &amp; Notice</h2>
                <h3>Official news YVOIRE</h3>
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
                        <input type="hidden" name="lang" value="ko"> <input type="hidden" name="page" id="page" value="1"> <input type="hidden" name="bt"
                                                                                                                                  value="1">
                    </form>


                    <div class="newsview_conbody">
                        <div class="newsview_detail">
                            <div class="inner">
                                <div class="tit_box">
                                    <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                                        <h4><?= $arResult["NAME"] ?></h4>
                                    <? endif; ?>
                                    <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                                        <p class="date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></p>
                                    <? endif; ?>
                                    <!--
                                    <div class="share_box">
                                        <a href="javascript:;"><img src="/local/templates/yvoire/images/icon/share_off.png" class="SHARE" /></a>
                                        <div class="share_plus">
                                            <ul>
                                                <li><a href="javascript:;"><img src="/local/templates/yvoire/images/icon/share_twitter.png" class="SHARE TWITTER" /></a></li>
                                                <li><a href="javascript:;"><img src="/local/templates/yvoire/images/icon/share_facebook.png" class="SHARE FACEBOOK" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="notice">


                                    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
                                        <div class="notice_thumb">
                                            <img
                                                    src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                                                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                                                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                                            />
                                        </div>
                                    <? endif ?>

                                    <p><br/>
                                        <img alt="" src="" style="width: 800px; height: auto; "/>
                                    </p>
                                    <p>
                                        <? $pictureArr = ($arResult['DISPLAY_PROPERTIES']["CONTENT_PICTURE"]["DISPLAY_VALUE"]);

                                        foreach ($pictureArr as $value) {
                                            $src = explode('"', $value);
                                            $src = $src[1];
                                        }
                                        ?>

                                    </p>

                                </div>
                            </div>
                            <!-- MOVE LIST -->
                            <div class="move_list">
                                <div class="inner">
                                    <a href="/news_list/"><span>list</span></a>
                                </div>
                            </div>
                            <!-- //MOVE LIST -->
                        </div>
                    </div>
                </div>
                <!-- //contents -->
            </div>
            <!-- //container -->