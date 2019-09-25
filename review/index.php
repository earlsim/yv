<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Review");
?><script>
		$(function(){
		reviewLoader.init();
		});
	</script> <!-- container -->
<div class="container subPage ctx_review">
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
                        "PATH" => "/local/include/review/slide-title.php"
                    )
                ); ?>
                <span class="page_navi left"><a href="/yvoire/"><img alt="LEFT PAGE" src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span> <span class="page_navi right"><a href="/sns/"><img alt="RIGHT PAGE" src="/local/templates/yvoire/images/icon/page_navigator_right.png"></a></span>
			</div>
			<div class="inner blind">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/review/slide-title-2.php"
                    )
                ); ?>
                <span class="page_navi left"><a href="/yvoire/"><img alt="LEFT PAGE" src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span> <span class="page_navi right"><a href="/sns/"><img alt="RIGHT PAGE" src="/local/templates/yvoire/images/icon/page_navigator_right.png"></a></span>
			</div>
		</div>
	</div>
	 <!-- //sub visual --> <!-- contents -->
	<div class="contents">
		 <!-- location -->
		<div class="location">
			<div class="inner">
				<div class="cReview">
					<ul>
						<li class="home"><img alt="На главную" src="/local/templates/yvoire/images/icon/location.png"></li>
						<li>
						<p>
							ОБЗОР
						</p>
						</li>
						<li class="step">
						<p>
							&gt;
						</p>
						</li>
						<li>
						<p>
							ОБЗОР Продукции
						</p>
						</li>
					</ul>
				</div>
				<div class="cBefore blind">
					<ul>
						<li class="home"><img alt="home" src="/local/templates/yvoire/images/icon/location.png"></li>
						<li>
						<p>
							ОБЗОР
						</p>
						</li>
						<li class="step">
						<p>
							&gt;
						</p>
						</li>
						<li>
						<p>
                            До и после
						</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		 <!-- //location -->
		<div class="review_view">
			<div class="inner">
				<div class="tab_list">
					<ul>
						<li class="active"><a href="javascript:;">Обзор процедуры</a></li>
						<li><a href="javascript:;">До и после</a></li>
					</ul>
				</div>
                <div class="listbox procedure">
                    <img alt="TESTIMONIAL OF YVOIRE" src="/local/templates/yvoire/images/sub/review/procedure_img01.png" class="pc"> <img
                            alt="TESTIMONIAL OF YVOIRE" src="/local/templates/yvoire/images/sub/review/procedure_mimg01.png" class="mobile">
                    <div class="movie_procedure">
                        <iframe src="https://www.youtube.com/embed/YvH8QUei9sM?rel=0&autoplay=1" frameborder="0" scrolling="no" allowfullscreen></iframe>
                    </div>
                    <p class="tit">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/review/section-title-1.php"
                            )
                        ); ?>
					</p>
					<p class="notice">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/review/section-text-1.php"
                            )
                        ); ?>
					</p>
				</div>
				<div class="listbox beforeafter blind">
					<div class="change_tab">
						<div class="change_conbox">
							<div class="tabScroll">
                                <ul>
                                    <li class="active"><a href="javascript:;"> <img alt="Forehead Augmentation"
                                                                                    src="/local/templates/yvoire/images/sub/beforeafter/tab_list00.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Forehead<br>
                                                Augmentation
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Nose Augmentation"
                                                                     src="/local/templates/yvoire/images/sub/beforeafter/tab_list01.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Nose<br>
                                                Augmentation
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Tear Trough" src="/local/templates/yvoire/images/sub/beforeafter/tab_list02.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Tear<br>
                                                Trough
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Nasolabial Folds" src="/local/templates/yvoire/images/sub/beforeafter/tab_list03.png">
                                            <img alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Nasolabial<br>
                                                Folds
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Lip Contour" src="/local/templates/yvoire/images/sub/beforeafter/tab_list04.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Lip<br>
                                                Contour
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Chin Augmentation"
                                                                     src="/local/templates/yvoire/images/sub/beforeafter/tab_list05.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Chin<br>
                                                Augmentation
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Cheek" src="/local/templates/yvoire/images/sub/beforeafter/tab_list06.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Cheek
                                            </p>
                                        </a></li>
                                    <li><a href="javascript:;"> <img alt="Antero-Medial malar"
                                                                     src="/local/templates/yvoire/images/sub/beforeafter/tab_list07.png"> <img
                                                    alt="show this contents" src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston">
                                            <p>
                                                Antero-<br>
                                                Medial malar
                                            </p>
                                        </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="procedure_conbody blind">
				<div class="inner">
					<div class="imageBox">
						<ul>
							<li> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list00_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list00_01.jpg"> </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list00_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list00_01.jpg"> </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list02_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list02_01.jpg"> </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list03_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list03_01.jpg"> </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list04_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list04_01.jpg"> </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list05_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list05_01.jpg"> </li>
							<li class="blind">
							<div class="case0">
 <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list06_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list06_01.jpg">
							</div>
							<div class="case1 blind">
 <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list06_02.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list06_03.jpg">
							</div>
							<div class="case_line">
								<ul>
									<li class="active"><a href="javascript:;">Case1</a></li>
									<li><a href="javascript:;">Case2</a></li>
								</ul>
							</div>
 </li>
							<li class="blind"> <img alt="before" src="/local/templates/yvoire/images/sub/beforeafter/list06_00.jpg"> <img alt="after" src="/local/templates/yvoire/images/sub/beforeafter/list06_01.jpg"> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- //contents -->
</div>
	    <!-- //container --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>