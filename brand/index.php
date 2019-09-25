<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "YVOIRE - Brand Story");
$APPLICATION->SetTitle("YVOIRE - Brand Story");
?><!-- container -->
<div class="container subPage ctx_brand">
	 <!-- sub visual -->
	<div class="sub_visual">
		<div class="visual_content">
			<div class="inner">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/slide-title.php"
	)
);?> <span class="page_navi left"><a href="/lgchem/" title="lg chem"><img alt="ЛЕВАЯ СТРАНИЦА" src="/local/templates/yvoire/images/icon/page_navigator_left.png"></a></span> <span class="page_navi right"><a href="/whyyvoire/" title="why yvoire"><img alt="ПРАВАЯ СТРАНИЦА" src="/local/templates/yvoire/images/icon/page_navigator_right.png"></a></span>
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
                                История бренда
                            </p>
                        </li>
                    </ul>
                </div>
			</div>
		</div>
		 <!-- //location -->
		<div class="brand_view">
			<div class="inner">
				<div class="txt_area">
					<p class="tit">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/brand/section-1-title.php"
                            )
                        ); ?>
					</p>
					<div class="notice">
						<ul>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-1-text-1.php"
	)
);?>
							</p>
 </li>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-1-text-2.php"
	)
);?>
							</p>
 </li>
						</ul>
					</div>
				</div>
				<div class="movie_box">
 <img src="/local/templates/yvoire/images/sub/brand/brand_img01.png" alt="" class="pc"> <img src="/local/templates/yvoire/images/sub/brand/brand_mimg01.png" alt="" class="mobile">
					<div class="movie_story0">
						 <iframe src="https://www.youtube.com/embed/thVyUWlYqDg?rel=0&autoplay=1" frameborder="0"
                                    scrolling="no" allowfullscreen></iframe>
					</div>
				</div>
				<div class="txt_area second">
					<p class="tit">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-2-title.php"
	)
);?>
					</p>
					<div class="notice">
						<ul>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-2-text-1.php"
	)
);?>
							</p>
 </li>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-2-text-2.php"
	)
);?>
							</p>
 </li>
						</ul>
					</div>
				</div>
				<div class="txt_area third">
					<p class="tit">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/brand/section-3-title.php"
                            )
                        ); ?>
					</p>
					<div class="notice">
						<ul>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-3-text-1.php"
	)
);?>
							</p>
 </li>
							<li>
							<p>
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/brand/section-3-text-2.php"
	)
);?>
							</p>
 </li>
						</ul>
					</div>
				</div>
				<div class="movie_box">
 <img src="/local/templates/yvoire/images/sub/brand/brand_img02.png" alt="" class="pc"> <img src="/local/templates/yvoire/images/sub/brand/brand_mimg02.png" alt="" class="mobile">
					<div class="movie_story1">
						 <iframe src="https://www.youtube.com/embed/YNYhCyQnOqc?rel=0&autoplay=1" frameborder="0"
                                    scrolling="no" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- //contents -->
</div>
    <!-- //container -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>