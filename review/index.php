<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Review");
?>
	<script>
		$(function(){
		reviewLoader.init();
		});
	</script>

	    <!-- container -->
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
                            <span class="page_navi left"><a href="/yvoire/"><img src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE" /></a></span>
                            <span class="page_navi right"><a href="/sns/"><img src="/local/templates/yvoire/images/icon/page_navigator_right.png" alt="RIGHT PAGE" /></a></span>
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

                            <span class="page_navi left"><a href="/yvoire/"><img src="/local/templates/yvoire/images/icon/page_navigator_left.png" alt="LEFT PAGE" /></a></span>
                            <span class="page_navi right"><a href="/sns/"><img src="/local/templates/yvoire/images/icon/page_navigator_right.png" alt="RIGHT PAGE" /></a></span>
                        </div>
                    </div>
                </div>
                <!-- //sub visual -->
		<!-- contents -->
		<div class="contents">
                    <!-- location -->
                    <div class="location">
                        <div class="inner">
                            <div class="cReview">
                                <ul>
                                    <li class="home"><img src="/local/templates/yvoire/images/icon/location.png" alt="home" /></li>
                                    <li><p>REVIEW</p></li>
                                    <li class="step"><p>></p></li>
                                    <li><p>Procedure Review</p></li>
                                </ul>
                            </div>
			    			<div class="cBefore blind">
                                <ul>
                                    <li class="home"><img src="/local/templates/yvoire/images/icon/location.png" alt="home" /></li>
                                    <li><p>REVIEW</p></li>
                                    <li class="step"><p>></p></li>
                                    <li><p>Before & After</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //location -->
                    <div class="review_view">
			<div class="inner">
			    <div class="tab_list">
				<ul>
				    <li class="active"><a href="javascript:;">Procedure Review</a></li>
				    <li><a href="javascript:;">Before & After</a></li>
				</ul>
			    </div>
			    <div class="listbox procedure">
				<img src="/local/templates/yvoire/images/sub/review/procedure_img01.png" alt="TESTIMONIAL OF YVOIRE" class="pc" />
				<img src="/local/templates/yvoire/images/sub/review/procedure_mimg01.png" alt="TESTIMONIAL OF YVOIRE" class="mobile" />
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
									<li class="active">
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list00.png" alt="Forehead Augmentation" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Forehead<br/>Augmentation</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list01.png" alt="Nose Augmentation" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Nose<br/>Augmentation</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list02.png" alt="Tear Trough" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Tear<br/>Trough</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list03.png" alt="Nasolabial Folds" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Nasolabial<br/>Folds</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list04.png" alt="Lip Contour" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Lip<br/>Contour</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list05.png" alt="Chin Augmentation" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Chin<br/>Augmentation</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list06.png" alt="Cheek" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Cheek</p>
									    </a>
									</li>
									<li>
									    <a href="javascript:;">
										<img src="/local/templates/yvoire/images/sub/beforeafter/tab_list07.png" alt="Antero-Medial malar" />
										<img src="/local/templates/yvoire/images/sub/beforeafter/list_on.png" class="liston" alt="show this contents" />
										<p>Antero-<br/>Medial malar</p>
									    </a>
									</li>
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
					<li>
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list00_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list00_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list00_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list00_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list02_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list02_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list03_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list03_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list04_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list04_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list05_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list05_01.jpg" alt="after" />
					</li>
					<li class="blind">
					    <div class="case0">
						<img src="/local/templates/yvoire/images/sub/beforeafter/list06_00.jpg" alt="before" />
						<img src="/local/templates/yvoire/images/sub/beforeafter/list06_01.jpg" alt="after" />
					    </div>
					    <div class="case1 blind">
						<img src="/local/templates/yvoire/images/sub/beforeafter/list06_02.jpg" alt="before" />
						<img src="/local/templates/yvoire/images/sub/beforeafter/list06_03.jpg" alt="after" />
					    </div>
					    <div class="case_line">
						<ul>
						    <li class="active"><a href="javascript:;">Case1</a><span></span></li>
						    <li><a href="javascript:;">Case2</a><span></span></li>
						</ul>
					    </div>
					</li>
					<li class="blind">
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list06_00.jpg" alt="before" />
					    <img src="/local/templates/yvoire/images/sub/beforeafter/list06_01.jpg" alt="after" />
					</li>
				    </ul>
				</div>
			    </div>
			</div>
                    </div>
		</div>
		<!-- //contents -->
	    </div>
	    <!-- //container -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>