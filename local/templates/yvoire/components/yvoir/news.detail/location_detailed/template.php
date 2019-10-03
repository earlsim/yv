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
            <div class="section-text__title section-text__title--m64"><?=$arResult["NAME"]?></div>
            <section class="event-description">
                <div class="event-description__text">
                    <?echo($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"])?>
                </div>
            </section>
            <section class="event-map">
                <div class="event-map__pic">
                    <img src="<?echo($arResult["PREVIEW_PICTURE"]["SRC"])?>" alt="<?=$arResult["NAME"]?>">
                </div>
                <?  $lon = $arResult["MAP"]["LON"];
                    $lat = $arResult["MAP"]["LAT"];
                    ?>
                <div class="event-map__google">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.view",
                        "",
                        Array(
                            "API_KEY" => "",
                            "CONTROLS" => array(),
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:{$lat};s:10:\"yandex_lon\";d:{$lon};s:12:\"yandex_scale\";i:18;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:{$lon};s:3:\"LAT\";d:{$lat};s:4:\"TEXT\";s:103:\"Центральный офис Корпорации «Академия Научной Красоты»\";}}}",
                            "MAP_HEIGHT" => "100%",
                            "MAP_ID" => "",
                            "MAP_WIDTH" => "100%",
                            "OPTIONS" => array("ENABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING")
                        )
                    );?>
                </div>
                <div class="event-map__title"><?echo($arResult["DISPLAY_PROPERTIES"]["address"]["VALUE"])?></div>
            </section>
        </div>
        <section class="event-slider">
            <div class="slide_box">
                <ul>
                    <li class="prev_slide">
                        <a href="javascript:;">
                            <img src="<?print_r($arResult["SLIDES"][0])?>" alt="<?=$arResult["NAME"]?>">
                            <div class="dimbox"></div>
                        </a>
                    </li>
                    <li class="main_slide">
                        <a href="javascript:;">
                            <img src="<?echo($arResult["SLIDES"][1])?>" alt="<?=$arResult["NAME"]?>">
                            <div class="dimbox"></div>
                        </a>
                    </li>
                    <li class="next_slide">
                        <a href="javascript:;">
                            <img src="<?echo($arResult["SLIDES"][2])?>" alt="<?=$arResult["NAME"]?>">
                            <div class="dimbox"></div>
                        </a>
                    </li>
                </ul>
                <div class="slide_navi">
                    <span><a href="javascript:;"><img src="/local/templates/yvoire/images/sub/lgchem/slide_arrow_prev.png" alt="Navigator Prev"></a></span>
                    <span><a href="javascript:;"><img src="/local/templates/yvoire/images/sub/lgchem/slide_arrow_next.png" alt="Navigator Next"></a></span>
                </div>
            </div>
        </section>
        <script type="text/javascript">
    $(function () {
        eventLoc.init();
    });
    var eventLoc = {
        slideImg:<?echo json_encode($arResult["SLIDES"]);?>,
        slideIdx:0,
        prevIdx:0,
        nextIdx:0,
        slideTime:250,
        slideMove:"",
        init:function(){
            this.prevIdx = this.slideImg.length-1;
            this.nextIdx = this.slideIdx+1;
            this.slideEvent();
        },
        slideEvent:function(){
            var _ = this;
            var srcPath = "";
            var maxIdx = this.slideImg.length - 1;
            $(".slide_box .slide_navi span a").on("click",function(){
                var curIdx = $(this).parent().index();
                switch(curIdx){
                    case 0:
                        _.slideMove = "-100%";
                        _.slideIdx--;
                        _.prevIdx--;
                        _.nextIdx--;
                        if(_.slideIdx < 0){
                            _.slideIdx = maxIdx;
                        }
                        if(_.prevIdx < 0){
                            _.prevIdx = maxIdx;
                        }
                        if(_.nextIdx < 0){
                            _.nextIdx = maxIdx;
                        }
                        break;
                    case 1:
                        _.slideMove = "100%";
                        _.slideIdx++;
                        _.prevIdx++;
                        _.nextIdx++;
                        if(_.slideIdx > maxIdx){
                            _.slideIdx = 0;
                        }
                        if(_.prevIdx > maxIdx){
                            _.prevIdx = 0;
                        }
                        if(_.nextIdx > maxIdx){
                            _.nextIdx = 0;
                        }
                        break;
                }

                var prevSlide = srcPath+_.slideImg[_.prevIdx];
                var nextSlide = srcPath+_.slideImg[_.nextIdx];
                $(".slide_box ul li.prev_slide a>img").attr("src",prevSlide);
                $(".slide_box ul li.next_slide a>img").attr("src",nextSlide);

                $(".slide_box ul li.main_slide a").stop().animate({ opacity:0 },_.slideTime,function(){
                    var curSlide = srcPath+_.slideImg[_.slideIdx];
                    $(".slide_box ul li.main_slide a>img").attr("src",curSlide);
                    $(this).stop().animate({opacity:1},_.slideTime);
                });
            });
        }
    };
</script>
    </div>
</div>