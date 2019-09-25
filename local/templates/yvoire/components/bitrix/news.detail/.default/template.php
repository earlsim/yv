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
    <?if($arResult["NAME"]):?>
        <div class="section-text__title section-text__title--m64"><?echo($arResult['NAME'])?></div>
    <?endif;?>
<!--<pre>--><?//print_r($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"])?><!--</pre>-->
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
                <div class="event-inner__right">
                    <div class="event-info__register">
                        <div class="btn_type01">
                            <span class="hEffect"></span>
                            <a href="#" class="btn-1">Записаться</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event__description">
                <div class="block-title"><?echo($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["NAME"])?></div>
                <div class="event-description__text">
                    <?echo(htmlspecialchars_decode($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]))?>
                </div>
                <div class="block-title al-left"><?echo($arResult["DISPLAY_PROPERTIES"]["DOCTOR_NAME"]["NAME"])?></div>
                <section class="specialist-section specialist-section--pb64">
                    <div class="section-image section-image--pa section-image--left-sqr">
                        <div class="pic-wrap">
                            <img src="<?echo($arResult['DOCTOR_PIC']);?>" alt="<?echo($arResult["DOCTOR_INFO"]["PROPERTY_DOCTOR_INFO_VALUE"]["NAME"])?>">

                        </div>
                    </div>
                    <div class="section-text">
                        <div class="section-text__title"><?echo($arResult["DOCTOR_INFO"]["NAME"])?></div>
                        <div class="section-text__text">
                            <p class="text"><?echo($arResult['DOCTOR_INFO']["PROPERTY_DOCTOR_INFO_VALUE"]['TEXT']);?></p>
                        </div>
                    </div>
                </section>
                <section class="event__location">
                    <div class="block-title al-center">Место проведения</div>
                    <div class="event-location__pic">
                        <img src="assets/img/location.jpg" alt="">
                    </div>
                    <div class="event-location__title">
                        <h3 class="sub-title sub-title--mb64"><?echo($arResult["DISPLAY_PROPERTIES"]["LOCATION"]["DISPLAY_VALUE"])?></h3>
                        <div class="btn_type02">
                            <span class="hEffect"></span>
                            <pre><?print_r($arResult['LOC_INFO'])?></pre>
                            <a href="location.html" class="btn-1">Подробнее</a>
                        </div>
                    </div>

                </section>
                <section class="event__visit">
                    <div class="block-title al-center">Посетите также</div>
                    <div class="events-grid">
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                        <div class="events-item events-item--1-4">
                            <div class="item-top">
                                <div class="item-date">24 сентября 2019</div>
                                <div class="item-title">Обзорный семинар по ТМ Yvoire</div>
                                <div class="item-loc">Москва</div>
                            </div>
                            <div class="item-bottom">
                                Начало обучения 10:00
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>


<!--	--><?//if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
<!--		<img-->
<!--			class="detail_picture"-->
<!--			border="0"-->
<!--			src="--><?//=$arResult["DETAIL_PICTURE"]["SRC"]?><!--"-->
<!--			width="--><?//=$arResult["DETAIL_PICTURE"]["WIDTH"]?><!--"-->
<!--			height="--><?//=$arResult["DETAIL_PICTURE"]["HEIGHT"]?><!--"-->
<!--			alt="--><?//=$arResult["DETAIL_PICTURE"]["ALT"]?><!--"-->
<!--			title="--><?//=$arResult["DETAIL_PICTURE"]["TITLE"]?><!--"-->
<!--			/>-->
<!--	--><?//endif?>
<!--	--><?//if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
<!--		<span class="news-date-time">--><?//=$arResult["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--	--><?//endif;?>

<!--	--><?//if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
<!--		<p>--><?//=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?><!--</p>-->
<!--	--><?//endif;?>
<!--	--><?//if($arResult["NAV_RESULT"]):?>
<!--		--><?//if($arParams["DISPLAY_TOP_PAGER"]):?><!----><?//=$arResult["NAV_STRING"]?><!--<br />--><?//endif;?>
<!--		--><?//echo $arResult["NAV_TEXT"];?>
<!--		--><?//if($arParams["DISPLAY_BOTTOM_PAGER"]):?><!--<br />--><?//=$arResult["NAV_STRING"]?><!----><?//endif;?>
<!--	--><?//elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
<!--		--><?//echo $arResult["DETAIL_TEXT"];?>
<!--	--><?//else:?>
<!--		--><?//echo $arResult["PREVIEW_TEXT"];?>
<!--	--><?//endif?>
<!--	<div style="clear:both"></div>-->
<!--	<br />-->
<!--	--><?//foreach($arResult["FIELDS"] as $code=>$value):
//		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
//		{
//			?><!----><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//
//			if (!empty($value) && is_array($value))
//			{
//				?><!--<img border="0" src="--><?//=$value["SRC"]?><!--" width="--><?//=$value["WIDTH"]?><!--" height="--><?//=$value["HEIGHT"]?><!--">--><?//
//			}
//		}
//		else
//		{
//			?><!----><?//=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?//=$value;?><!----><?//
//		}
//		?><!--<br />-->
<!--	--><?//endforeach;
//	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!---->
<!--		--><?//=$arProperty["NAME"]?><!--:&nbsp;-->
<!--		--><?//if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--			--><?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--		--><?//else:?>
<!--			--><?//=$arProperty["DISPLAY_VALUE"];?>
<!--		--><?//endif?>
<!--		<br />-->
<!--	--><?//endforeach;
//	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
//	{
//		?>
<!--		<div class="news-detail-share">-->
<!--			<noindex>-->
<!--			--><?//
//			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
//					"HANDLERS" => $arParams["SHARE_HANDLERS"],
//					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
//					"PAGE_TITLE" => $arResult["~NAME"],
//					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
//					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
//					"HIDE" => $arParams["SHARE_HIDE"],
//				),
//				$component,
//				array("HIDE_ICONS" => "Y")
//			);
//			?>
<!--			</noindex>-->
<!--		</div>-->
<!--		--><?//
//	}
//	?>
