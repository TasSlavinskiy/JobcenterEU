<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- styles -->

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css">
	<!-- /styles -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<?php wp_head();

	global $sa_options;
	$sa_settings = get_option('sa_options', $sa_options); ?>
</head>

<body <?php body_class(); ?>>

<div class="bodyWrapper">

	<header>
		<div class="topBar">
			<div class="container">
				<nav class="topBar-language">
                    <ul>
                        <!-- GTranslate: https://gtranslate.io/ -->
                        <li><a href="#" onclick="doGTranslate('uk|pl');return false;" title="Polski" class="glink nturl notranslate">PL</a> </li>
                        <li><a href="#" onclick="doGTranslate('uk|uk');return false;" title="Українська" class="glink nturl notranslate">UA</a> </li>
                    </ul>
                    <style type="text/css">
                        #goog-gt-tt {display:none !important;}
                        .goog-te-banner-frame {display:none !important;}
                        .goog-te-menu-value:hover {text-decoration:none !important;}
                        .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
                        body {top:0 !important;}
                        #google_translate_element2 {display:none!important;}
                    </style>

                    <div id="google_translate_element2"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'uk',autoDisplay: false}, 'google_translate_element2');}
                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                    <script type="text/javascript">
                        function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
                        function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
                        function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;if(typeof ga!='undefined'){ga('send', 'event', 'GTranslate', lang, location.hostname+location.pathname+location.search);}else{if(typeof _gaq!='undefined')_gaq.push(['_trackEvent', 'GTranslate', lang, location.hostname+location.pathname+location.search]);}var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className=='goog-te-combo')teCombo=sel[i];if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
                    </script>

					<span class="address"><i class="fa fa-phone" aria-hidden="true"></i><span>(096)<span> 31</span>2 - 80 - 90</span></span>
				</nav>
				<div class="topBar-contacts">
					<span class="free">Усі консультації безкоштовні</span>
					<div class="topBar-social">
					<a target="_blank" href="https://www.facebook.com/Jobcentereu-279158989220894/"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://vk.com/public143703998"><i class="fa fa-vk"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<a href="#" class="menuAccordion">
				<span></span>
			</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jce/logo.png" width="140" height="35" alt="jce">
			</a>
			<a href="#popup1" class="logo2 fancyboxPopup">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jce/logo2.png" width="55" height="70" alt="jce">
			</a>
			<nav class="mainNav">
				<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => '' ) ); ?>
			</nav>
		</div>
	</header>