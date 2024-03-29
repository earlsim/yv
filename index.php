<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "YVOIRE ");?>
<!-- <?$APPLICATION->SetTitle("YVOIRE");?> -->

<script>
		    $(function(){
			mainPage.init();
		    });
		    
		    $(window).scroll(function(){
			var curTop = $(window).scrollTop();
			mainPage.visualScroll(curTop);
			mainPage.storyScrollEvent(curTop);
		    });

		    $(window).resize(function(){
	                var windowWidth = $(window).width();
			lineBg.init();
			mainPage.resizeList();
	                if(windowWidth <= 768){
	                    $(".main_visual .keyVisual>img").eq(0).attr("src","/local/templates/yvoire/images/main/main_mvisual0"+mainPage.slideIdx+".png");
	                    $(".main_visual .keyVisual>img").eq(1).attr("src","/local/templates/yvoire/images/main/main_mvisual0"+mainPage.slideIdx+"_model.png");
	                }else{
	                    $(".main_visual .keyVisual>img").eq(0).attr("src","/local/templates/yvoire/images/main/main_visual0"+mainPage.slideIdx+".png");
	                    $(".main_visual .keyVisual>img").eq(1).attr("src","/local/templates/yvoire/images/main/main_visual0"+mainPage.slideIdx+"_model.png");
	                }
		    });
</script>
	    <!-- container -->
	    <div class="container">
		<!-- contents -->
		<div class="contents">
		    <!-- main visual -->
		    <div class="main_visual">
			<div class="keyVisual">
			    <img src="/local/templates/yvoire/images/main/main_visual00.png" alt="Ключевое визуальное изображение" class="pc" />
			    <img src="/local/templates/yvoire/images/main/main_visual00_model.png" alt="Ключевая визуальная модель" class="pc" />
			    <div class="keyContent">
				<div class="inner">
				    <h2><img src="/local/templates/yvoire/images/main/visual_tit00.png" alt="Credible Beauty" /></h2>
				    <h3><p></p></h3>
				    <div class="btn_type01">
					<span class="hEffect"></span>
					<a href="/brand/" class="btn-1">далее</a>
				    </div>
				</div>
			    </div>
			    <div class="slideBtn">
				<div class="inner">
				    <ul>
					<li><a href="javascript:;"></a></li>
					<li class="active"><a href="javascript:;"></a></li>
				    </ul>
				</div>
			    </div>
			</div>
		    </div>
		    <!-- yvoire story -->
		    <div class="yvoire_story">
			<!-- title area -->
			<div class="story_tit">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/index/title_sns.php"
                    )
                ); ?>
			    <div class="iconBox aCenter">
				<ul>
				    <li><img src="/local/templates/yvoire/images/icon/txt_facebook.png" alt="Иконка facebook" /></li>
				    <li><img src="/local/templates/yvoire/images/icon/txt_insta.png" alt="Иконка Instagram" /></li>
				    <li><img src="/local/templates/yvoire/images/icon/txt_naver.png" alt="Иконка naver" /></li>
				</ul>
			    </div>
			</div>
			<!-- story contents -->
			<div class="story_contents" id="instafeed">
			    <div class="inner">
				<ul>
				    <li class="showlist">
<!--						<h3>NEWS</h3>-->
<!--						<h4>Be Awesome, the newgame rule in the Digital world.</h4>-->
<!--						<p>Create award -winning brands and strategically driven world.</p>-->
				    </li>
				    <li class="showlist">
						<div>
						    <img src="/local/templates/yvoire/images/footer/insta-bg.jpg" alt="story list bg one" />
						    <div class="hNotice">
							<p class="v-ellipsis"></p>
						    </div>
						    <i class="insta"></i>
						</div>
				    </li>
				    <li class="empty" style="min-height: 320px; max-height: 320px;"></li>
				    <li class="empty" style="min-height: 320px; max-height: 320px;"></li>
				    <li class="showlist" style="min-height: 320px; max-height: 320px;">
						<div>
						    <img src="" />
						    <div class="hNotice">
							<p class="v-ellipsis"></p>
						    </div>
						    <i class="fbook"></i>
					</div>
				    </li>
				    <li class="showlist">
						<div>
						    <img src="/local/templates/yvoire/images/main/story_list02.png" alt="story list bg three" />
						    <div class="hNotice">
							<p class="v-ellipsis">Создание завоевывающих признание брендов и стратегически точного производства.</p>
						    </div>
						</div>
				    </li>
                    <li class="showlist mobile">
                    	<!--
						<h3>NEWS</h3>
						<h4>When fighting in Syria drew close to Aleppo, agronomists.</h4>
						<p>Create award -winning brands and strategically driven world.</p>
						-->
				    </li>
				    <li class="showlist">
					<div>
					    <img src="/local/templates/yvoire/images/footer/abc-bg.jpg" alt="story list bg two" alt="story list bg four" />
					    <div class="hNotice">
						<p class="v-ellipsis"></p>
					    </div>
					    <i class="insta"></i>
					</div>
				    </li>
				    <li class="showlist">
					<div>
					    <img src="" alt="story list bg five" />
					    <div class="hNotice">
						<p class="v-ellipsis"></p>
					    </div>
					    <i class="fbook"></i>
					</div>
				    </li>
				    <li class="showlist pc">
<!--<h3>NEWS</h3>-->
<!--<h4>When fighting in Syria drew close to Aleppo, agronomists.</h4>-->
<!--<p>Create award -winning brands and strategically driven world.</p>-->
				    </li>
				    <li class="showlist">
					<div>
					    <img src="" alt="story list bg six" />
					    <div class="hNotice">
						<p class="v-ellipsis"></p>
					    </div>
					    <i class="fbook"></i>
					</div>
				    </li>
				</ul>
			    </div>
			</div>
		    </div>
		</div>
		<!-- //contents -->
	    </div>
	    <!-- //container -->

	    <div class="lineBg">
                <div class="inner">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
	    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>