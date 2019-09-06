
<?$APPLICATION->ShowHead();?>
<?$APPLICATION->ShowPanel();?>
<? use Bitrix\Main\Page\Asset;?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <link rel="shortcut icon" href="/local/templates/yvoire/images/favicon.png">     
		<!-- css file load -->
		
		<?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/common.css");?>
		<?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/sub.css");?>
		<?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaQuery.css")?>
		
        <!-- js file load -->
        
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery-1.11.3.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery-ui-1.11.3.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery.easing.1.3.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery.swiper-2.1.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery.rotate.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/jquery.vEllipsis.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/instafeed.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib/social.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/yLoader.js");?>

        <?Asset::getInstance()->addJs("http://maps.googleapis.com/maps/api/js");?>
        <?Asset::getInstance()->addJs("http://connect.facebook.net/ko_KR/all.js");?>
        <?Asset::getInstance()->addJs("https://maps.googleapis.com/maps/api/js?key=AIzaSyBq7PGgqn6JCoh8Ug5kKJ-oJ3YItE5fnoU&callback=initMap&language=en");?>

        <title>YVOIRE</title>
    </head>
        <body>
    <!-- wrap -->
	<div class="wrap">
	    <!-- header -->
	    
<div class="header">
		<div class="gnb">
		    <div class="inner">
				<div class="home">
				    <h1>
					<a href="/">
					    <img src="/local/templates/yvoire/images/logo/logo.gif" alt="YVOIRE LOGO" />
					</a>
				    </h1>
				</div>
				<div class="menu">
				    <ul>
						<li><a href="javascript:;"><img src="/local/templates/yvoire/images/icon/m_menu.png" alt="mobile menu" /></a></li>
						<li><a href="/lggroup/">LG</a></li>
						<li><a href="/brand">YVOIRE</a></li>
						<li><a href="/review/">REVIEW</a></li>
						<li><a href="/sns/">SNS & NEWS</a></li>
						<li><a href="/faq/">FAQ</a></li>
				    </ul>
				    <div class="gnbDepth">
					<div class="depth_list">
					    <ul>
							<li>
						    <ul>
							<li><a href="/lggroup/">LG Group</a></li>
							<li><a href="/lgchem/">LG Chem</a></li>
						    </ul>
							</li>
							<li>
						    <ul>
							<li><a href="/brand/">Brand Story</a></li>
							<li><a href="/whyyvoire/">Why YVOIRE</a></li>
							<li><a href="/yvoire/">Product Information</a></li>
						    </ul>
							</li>
							<li>
						    <ul>
							<li><a href="/review/">Procedure Review</a></li>
							<li><a href="/review/">Before & After</a></li>
						    </ul>
							</li>
							<li>
						    <ul>
							<li><a href="/sns/">SNS</a></li>
							<li><a href="/news_list/">News & Notice</a></li>
						    </ul>
							</li>
					    </ul>
					</div>
				    </div>
				</div>
			<div class="m_menu">
			    <div class="m_menu_bg">
				<div class="m_top">
				    <ul>
					<li><a href="/"><img src="/local/templates/yvoire/images/icon/home.png" alt="home" /></a></li>
					<li><a href="javascript:;"><img src="/local/templates/yvoire/images/icon/close.png" alt="close" /></a></li>
				    </ul>
				</div>
				<div class="m_list">
				    <ul>
					<li>
					    <a href="javascript:;">LG<span class="more">+</span></a>
					    <div class="m_list02">
						<ul>
						    <li><a href="/lggroup/">LG Group</a></li>
						    <li><a href="/lgchem/">LG Chem</a></li>
						</ul>
					    </div>
					</li>
					<li>
					   <a href="javascript:;">YVOIRE<span class="more">+</span></a>
					    <div class="m_list02">
						<ul>
						    <li><a href="/brand/">Brand Story</a></li>
						    <li><a href="/whyyvoire/">Why YVOIRE</a></li>
						    <li><a href="/yvoire/">Product Information</a></li>
						</ul>
					    </div>
					</li>
					<li>
					    <a href="javascript:;">REVIEW<span class="more">+</span></a>
					    <div class="m_list02">
						<ul>
						    <li><a href="/review/">Procedure Review</a></li>
						    <li><a href="/review/">Before & After</a></li>
						</ul>
					    </div>
					</li>
					<li>
					    <a href="javascript:;">NEWS<span class="more">+</span></a>
					    <div class="m_list02">
						<ul>
						    <li><a href="/sns/">SNS</a></li>
						    <li><a href="/news_list/">News & Notice</a></li>
						</ul>
					    </div>
					</li>
					<li>
					    <a href="/faq/">FAQ<span class="more">+</span></a>
					</li>
				    </ul>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	    <!-- //header -->
