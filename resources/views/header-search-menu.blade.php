<?php 


		 	function remove_accent($str)
			{
			  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
			  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
			  return str_replace($a, $b, $str);
			}

			function post_slug($str)
			{
			  return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),array('', '-', ''), remove_accent($str)));
			}

 ?> 
<?php 

    	$menu =  array('option0' => 'Noticias TI','option1' => 'suscribase' , 'option2' => 'Negocios & Mercadeo' , 'option4' => 'Big data'  , 'option6' => 'Contactenos' );

?>


<html lang="es" prefix="og: https://ogp.me/ns#" class=" td-md-is-android td-md-is-chrome js_active  vc_mobile  vc_transform  vc_transform "><!--<![endif]--><head>
    <title>Caracas Digital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="https://www.itwarelatam.com/xmlrpc.php">



    <script src="https://www.itwarelatam.com/wp-includes/js/wp-emoji-release.min.js?ver=5.5.1" type="text/javascript" defer=""></script>
   

<link rel="icon" type="image/png" href="https://www.itwarelatam.com/wp-content/uploads/2017/06/favicon-01.png"><link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<link rel="apple-touch-icon-precomposed" sizes="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<link rel="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<link rel="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<!-- All In One SEO Pack 3.7.1ob_start_detected [-1,-1] -->
<meta name="description" content="Caracas Digital es un sitio sobre tecnología de la innovación (IT) aplicada a negocios del sector.">
<meta name="keywords" content="Caracas Digital, Enfasys, CIO , Latin America Magazine, Revista de Tecnología, innovacion.">
<meta name="google-site-verification" content="xnR0zF3asxIH_529HxOTUzcS6sGHGZDW-tJlv0ujJCo">


<link rel="canonical" href="http://www.caracasdigital.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Caracas Digital| Noticias del Sector IT en Latinoamérica.">
<meta property="og:description" content="Caracas Digital es un sitio sobre tecnología de la innovación (IT) aplicada a negocios del sector.">
<meta property="og:url" content="http://www.caracasdigital.com/">
<meta property="og:site_name" content="Caracas Digital">
<meta property="og:image" content="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<meta property="fb:admins" content="http://www.caracasdigital.com/images/caracasdigital-nm.png">
<meta property="og:image:secure_url" content="">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@itwarelatam">
<meta name="twitter:domain" content="http://www.caracasdigital.com/">
<meta name="twitter:title" content="Caracas Digital | Noticias del Sector IT en Latinoamérica.">
<meta name="twitter:description" content="Caracas Digital es un sitio sobre tecnología de la innovación (IT) aplicada a negocios del sector.">
<meta name="twitter:image" content="https://www.itwarelatam.com/wp-content/uploads/2017/06/logo_ITW_grey.jpg">


<link rel="alternate" type="application/rss+xml" title="ITware Latam » Feed" href="https://www.itwarelatam.com/feed/">
<link rel="alternate" type="application/rss+xml" title="ITware Latam » Feed de los comentarios" href="https://www.itwarelatam.com/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="ITware Latam » Comentario Home del feed" href="https://www.itwarelatam.com/home/feed/">
	
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>


 {!!Html::style('assets/css/theme.css?ver=3.69.3')!!}

 {!!Html::style('assets/css/style.css?ver=72ece2de773553959e5098a544851753')!!}
 

<link crossorigin="anonymous" rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CNova+Slim%3A400%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=9.0.1" type="text/css" media="all">
<!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='https://www.itwarelatam.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.5' type='text/css' media='screen' />
<![endif]-->


<link rel="stylesheet" id="js_composer_front-css" href="https://www.itwarelatam.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.0.5" type="text/css" media="all">
{!!Html::style('assets/themes/Newspaper/style.css?ver=9.0.1')!!}
{!!Html::style('assets/css/jetpack.css')!!}



{!!Html::script('assets/js/jquery.js')!!}
{!!Html::style('assets/css/jetpack.css')!!}


{!!Html::script('assets/js/Popup.js?ver=3.69.3')!!}
{!!Html::script('assets/js/PopupConfig.js?ver=3.69.3')!!}


{!!Html::script('assets/js/PopupBuilder.js?ver=3.69.3')!!}


<script>
	

</script>
			<script type="text/javascript">
				var _hsq = _hsq || [];
				_hsq.push(["setContentType", "standard-page"]);
			</script>
			<!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->
						<script>
				(function() {
					var hbspt = window.hbspt = window.hbspt || {};
					hbspt.forms = hbspt.forms || {};
					hbspt._wpFormsQueue = [];
					hbspt.enqueueForm = function(formDef) {
						if (hbspt.forms && hbspt.forms.create) {
							hbspt.forms.create(formDef);
						} else {
							hbspt._wpFormsQueue.push(formDef);
						}
					}
					Object.defineProperty(window.hbspt.forms, 'create', {
						configurable: true,
						get: function() {
							return hbspt._wpCreateForm;
						},
						set: function(value) {
							hbspt._wpCreateForm = value;
							for (var i = 0; i < hbspt._wpFormsQueue.length; i++) {
								var formDef = hbspt._wpFormsQueue[i];
								hbspt._wpCreateForm.call(hbspt.forms, formDef);
							}
						},
					})
				})();
			</script>
		<style type="text/css">img#wpstats{display:none}</style>			<script>
				window.tdwGlobal = {"adminUrl":"https:\/\/www.itwarelatam.com\/wp-admin\/","wpRestNonce":"573bdab015","wpRestUrl":"https:\/\/www.itwarelatam.com\/wp-json\/","permalinkStructure":"\/%year%\/%monthnum%\/%day%\/%postname%\/"};
			</script>
	



<script>
    
    

	    var tdBlocksArray = []; //here we store all the items for the current page

	    //td_block class - each ajax block uses a object of this class for requests
	    function tdBlock() {
		    this.id = '';
		    this.block_type = 1; //block type id (1-234 etc)
		    this.atts = '';
		    this.td_column_number = '';
		    this.td_current_page = 1; //
		    this.post_count = 0; //from wp
		    this.found_posts = 0; //from wp
		    this.max_num_pages = 0; //from wp
		    this.td_filter_value = ''; //current live filter value
		    this.is_ajax_running = false;
		    this.td_user_action = ''; // load more or infinite loader (used by the animation)
		    this.header_color = '';
		    this.ajax_pagination_infinite_stop = ''; //show load more at page x
	    }


        // td_js_generator - mini detector
        (function(){
            var htmlTag = document.getElementsByTagName("html")[0];

	        if ( navigator.userAgent.indexOf("MSIE 10.0") > -1 ) {
                htmlTag.className += ' ie10';
            }

            if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
                htmlTag.className += ' ie11';
            }

	        if ( navigator.userAgent.indexOf("Edge") > -1 ) {
                htmlTag.className += ' ieEdge';
            }

            if ( /(iPad|iPhone|iPod)/g.test(navigator.userAgent) ) {
                htmlTag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if ( user_agent.indexOf("android") > -1 ) {
                htmlTag.className += ' td-md-is-android';
            }

            if ( -1 !== navigator.userAgent.indexOf('Mac OS X')  ) {
                htmlTag.className += ' td-md-is-os-x';
            }

            if ( /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) ) {
               htmlTag.className += ' td-md-is-chrome';
            }

            if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
                htmlTag.className += ' td-md-is-firefox';
            }

            if ( -1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome') ) {
                htmlTag.className += ' td-md-is-safari';
            }

            if( -1 !== navigator.userAgent.indexOf('IEMobile') ){
                htmlTag.className += ' td-md-is-iemobile';
            }

        })();




        var tdLocalCache = {};

        ( function () {
            "use strict";

            tdLocalCache = {
                data: {},
                remove: function (resource_id) {
                    delete tdLocalCache.data[resource_id];
                },
                exist: function (resource_id) {
                    return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
                },
                get: function (resource_id) {
                    return tdLocalCache.data[resource_id];
                },
                set: function (resource_id, cachedData) {
                    tdLocalCache.remove(resource_id);
                    tdLocalCache.data[resource_id] = cachedData;
                }
            };
        })();

    
    
var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];
var td_animation_stack_effect="type0";
var tds_animation_stack=true;
var td_animation_stack_specific_selectors=".entry-thumb, img";
var td_animation_stack_general_selectors=".td-animation-stack img, .td-animation-stack .entry-thumb, .post img";
var td_ajax_url="https:\/\/www.itwarelatam.com\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=9.0.1";
var td_get_template_directory_uri="https:\/\/www.itwarelatam.com\/wp-content\/themes\/Newspaper";
var tds_snap_menu="snap";
var tds_logo_on_sticky="";
var tds_header_style="10";
var td_please_wait="Por favor espera...";
var td_email_user_pass_incorrect="Usuario o contrase\u00f1a incorrecta!";
var td_email_user_incorrect="Correo electr\u00f3nico o nombre de usuario incorrecto!";
var td_email_incorrect="Correo electr\u00f3nico incorrecto!";
var tds_more_articles_on_post_enable="show";
var tds_more_articles_on_post_time_to_wait="3";
var tds_more_articles_on_post_pages_distance_from_top=1200;
var tds_theme_color_site_wide="#009dcc";
var tds_smart_sidebar="enabled";
var tdThemeName="Newspaper";
var td_magnific_popup_translation_tPrev="Anterior (tecla de flecha izquierda)";
var td_magnific_popup_translation_tNext="Siguiente (tecla de flecha derecha)";
var td_magnific_popup_translation_tCounter="%curr% de %total%";
var td_magnific_popup_translation_ajax_tError="El contenido de %url% no pudo cargarse.";
var td_magnific_popup_translation_image_tError="La imagen #%curr% no pudo cargarse.";
var tdDateNamesI18n={"month_names":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"month_names_short":["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],"day_names":["domingo","lunes","martes","mi\u00e9rcoles","jueves","viernes","s\u00e1bado"],"day_names_short":["Dom","Lun","Mar","Mi\u00e9","Jue","Vie","S\u00e1b"]};
var td_ad_background_click_link="";
var td_ad_background_click_target="";
</script>


<!-- Header style compiled by theme -->

<style>
    

		body {
			background-color:white;
		}
		.td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
		    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
		    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
		    .td-header-wrap .black-menu .sf-menu > li > a:hover,
		    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
		    .td-header-style-12 .td-header-menu-wrap-full,
		    .sf-menu > .current-menu-item > a:after,
		    .sf-menu > .current-menu-ancestor > a:after,
		    .sf-menu > .current-category-ancestor > a:after,
		    .sf-menu > li:hover > a:after,
		    .sf-menu > .sfHover > a:after,
		    .td-header-style-12 .td-affix,
		    .header-search-wrap .td-drop-down-search:after,
		    .header-search-wrap .td-drop-down-search .btn:hover,
		    input[type=submit]:hover,
		    .td-read-more a,
		    .td-post-category:hover,
		    .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,
		    .td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,
		    .td_top_authors .td-active .td-author-post-count,
		    .td_top_authors .td-active .td-author-comments-count,
		    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
		    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
		    .td-404-sub-sub-title a:hover,
		    .td-search-form-widget .wpb_button:hover,
		    .td-rating-bar-wrap div,
		    .td_category_template_3 .td-current-sub-category,
		    .dropcap,
		    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
		    .wpb_default,
		    .wpb_default:hover,
		    .td-left-smart-list:hover,
		    .td-right-smart-list:hover,
		    .woocommerce-checkout .woocommerce input.button:hover,
		    .woocommerce-page .woocommerce a.button:hover,
		    .woocommerce-account div.woocommerce .button:hover,
		    #bbpress-forums button:hover,
		    .bbp_widget_login .button:hover,
		    .td-footer-wrapper .td-post-category,
		    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
		    .woocommerce .product a.button:hover,
		    .woocommerce .product #respond input#submit:hover,
		    .woocommerce .checkout input#place_order:hover,
		    .woocommerce .woocommerce.widget .button:hover,
		    .single-product .product .summary .cart .button:hover,
		    .woocommerce-cart .woocommerce table.cart .button:hover,
		    .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,
		    .td-next-prev-wrap a:hover,
		    .td-load-more-wrap a:hover,
		    .td-post-small-box a:hover,
		    .page-nav .current,
		    .page-nav:first-child > div,
		    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
		    .td_category_template_4 .td-category-siblings .td-category a:hover,
		    #bbpress-forums .bbp-pagination .current,
		    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
		    .td-theme-slider:hover .slide-meta-cat a,
		    a.vc_btn-black:hover,
		    .td-trending-now-wrapper:hover .td-trending-now-title,
		    .td-scroll-up,
		    .td-smart-list-button:hover,
		    .td-weather-information:before,
		    .td-weather-week:before,
		    .td_block_exchange .td-exchange-header:before,
		    .td_block_big_grid_9.td-grid-style-1 .td-post-category,
		    .td_block_big_grid_9.td-grid-style-5 .td-post-category,
		    .td-grid-style-6.td-hover-1 .td-module-thumb:after,
		    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
		    .td_block_template_9 .td-block-title:after,
		    .td_block_template_15 .td-block-title:before,
		    div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit] {
		        background-color: #009dcc;
		    }

		    .td_block_template_4 .td-related-title .td-cur-simple-item:before {
		        border-color: #009dcc transparent transparent transparent !important;
		    }

		    .woocommerce .woocommerce-message .button:hover,
		    .woocommerce .woocommerce-error .button:hover,
		    .woocommerce .woocommerce-info .button:hover {
		        background-color: #009dcc !important;
		    }
		    
		    
		    .td_block_template_4 .td-related-title .td-cur-simple-item,
		    .td_block_template_3 .td-related-title .td-cur-simple-item,
		    .td_block_template_9 .td-related-title:after {
		        background-color: #009dcc;
		    }

		    .woocommerce .product .onsale,
		    .woocommerce.widget .ui-slider .ui-slider-handle {
		        background: none #009dcc;
		    }

		    .woocommerce.widget.widget_layered_nav_filters ul li a {
		        background: none repeat scroll 0 0 #009dcc !important;
		    }

		    a,
		    cite a:hover,
		    .td_mega_menu_sub_cats .cur-sub-cat,
		    .td-mega-span h3 a:hover,
		    .td_mod_mega_menu:hover .entry-title a,
		    .header-search-wrap .result-msg a:hover,
		    .td-header-top-menu .td-drop-down-search .td_module_wrap:hover .entry-title a,
		    .td-header-top-menu .td-icon-search:hover,
		    .td-header-wrap .result-msg a:hover,
		    .top-header-menu li a:hover,
		    .top-header-menu .current-menu-item > a,
		    .top-header-menu .current-menu-ancestor > a,
		    .top-header-menu .current-category-ancestor > a,
		    .td-social-icon-wrap > a:hover,
		    .td-header-sp-top-widget .td-social-icon-wrap a:hover,
		    .td-page-content blockquote p,
		    .td-post-content blockquote p,
		    .mce-content-body blockquote p,
		    .comment-content blockquote p,
		    .wpb_text_column blockquote p,
		    .td_block_text_with_title blockquote p,
		    .td_module_wrap:hover .entry-title a,
		    .td-subcat-filter .td-subcat-list a:hover,
		    .td-subcat-filter .td-subcat-dropdown a:hover,
		    .td_quote_on_blocks,
		    .dropcap2,
		    .dropcap3,
		    .td_top_authors .td-active .td-authors-name a,
		    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
		    .td-post-next-prev-content a:hover,
		    .author-box-wrap .td-author-social a:hover,
		    .td-author-name a:hover,
		    .td-author-url a:hover,
		    .td_mod_related_posts:hover h3 > a,
		    .td-post-template-11 .td-related-title .td-related-left:hover,
		    .td-post-template-11 .td-related-title .td-related-right:hover,
		    .td-post-template-11 .td-related-title .td-cur-simple-item,
		    .td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,
		    .comment-reply-link:hover,
		    .logged-in-as a:hover,
		    #cancel-comment-reply-link:hover,
		    .td-search-query,
		    .td-category-header .td-pulldown-category-filter-link:hover,
		    .td-category-siblings .td-subcat-dropdown a:hover,
		    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
		    .widget a:hover,
		    .td_wp_recentcomments a:hover,
		    .archive .widget_archive .current,
		    .archive .widget_archive .current a,
		    .widget_calendar tfoot a:hover,
		    .woocommerce a.added_to_cart:hover,
		    .woocommerce-account .woocommerce-MyAccount-navigation a:hover,
		    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
		    #bbpress-forums .bbp-forum-freshness a:hover,
		    #bbpress-forums .bbp-topic-freshness a:hover,
		    #bbpress-forums .bbp-forums-list li a:hover,
		    #bbpress-forums .bbp-forum-title:hover,
		    #bbpress-forums .bbp-topic-permalink:hover,
		    #bbpress-forums .bbp-topic-started-by a:hover,
		    #bbpress-forums .bbp-topic-started-in a:hover,
		    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
		    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
		    .widget_display_replies .bbp-author-name,
		    .widget_display_topics .bbp-author-name,
		    .footer-text-wrap .footer-email-wrap a,
		    .td-subfooter-menu li a:hover,
		    .footer-social-wrap a:hover,
		    a.vc_btn-black:hover,
		    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
		    .td_module_17 .td-read-more a:hover,
		    .td_module_18 .td-read-more a:hover,
		    .td_module_19 .td-post-author-name a:hover,
		    .td-instagram-user a,
		    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
		    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
		    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
		    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
		    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
		    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
		    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
		    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
		    .td_block_template_2 .td-related-title .td-cur-simple-item,
		    .td_block_template_5 .td-related-title .td-cur-simple-item,
		    .td_block_template_6 .td-related-title .td-cur-simple-item,
		    .td_block_template_7 .td-related-title .td-cur-simple-item,
		    .td_block_template_8 .td-related-title .td-cur-simple-item,
		    .td_block_template_9 .td-related-title .td-cur-simple-item,
		    .td_block_template_10 .td-related-title .td-cur-simple-item,
		    .td_block_template_11 .td-related-title .td-cur-simple-item,
		    .td_block_template_12 .td-related-title .td-cur-simple-item,
		    .td_block_template_13 .td-related-title .td-cur-simple-item,
		    .td_block_template_14 .td-related-title .td-cur-simple-item,
		    .td_block_template_15 .td-related-title .td-cur-simple-item,
		    .td_block_template_16 .td-related-title .td-cur-simple-item,
		    .td_block_template_17 .td-related-title .td-cur-simple-item,
		    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
		    .td-theme-wrap .sf-menu ul .sfHover > a,
		    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
		    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
		    .td-theme-wrap .sf-menu ul .current-menu-item > a,
		    .td_outlined_btn {
		        color: #009dcc;
		    }

		    a.vc_btn-black.vc_btn_square_outlined:hover,
		    a.vc_btn-black.vc_btn_outlined:hover,
		    .td-mega-menu-page .wpb_content_element ul li a:hover,
		    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
		    .td-theme-wrap .header-search-wrap .result-msg a:hover {
		        color: #009dcc !important;
		    }

		    .td-next-prev-wrap a:hover,
		    .td-load-more-wrap a:hover,
		    .td-post-small-box a:hover,
		    .page-nav .current,
		    .page-nav:first-child > div,
		    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
		    .td_category_template_4 .td-category-siblings .td-category a:hover,
		    #bbpress-forums .bbp-pagination .current,
		    .post .td_quote_box,
		    .page .td_quote_box,
		    a.vc_btn-black:hover,
		    .td_block_template_5 .td-block-title > *,
		    .td_outlined_btn {
		        border-color: #009dcc;
		    }

		    .td_wrapper_video_playlist .td_video_currently_playing:after {
		        border-color: #009dcc !important;
		    }

		    .header-search-wrap .td-drop-down-search:before {
		        border-color: transparent transparent #009dcc transparent;
		    }

		    .block-title > span,
		    .block-title > a,
		    .block-title > label,
		    .widgettitle,
		    .widgettitle:after,
		    .td-trending-now-title,
		    .td-trending-now-wrapper:hover .td-trending-now-title,
		    .wpb_tabs li.ui-tabs-active a,
		    .wpb_tabs li:hover a,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
		    .td_block_template_1 .td-related-title .td-cur-simple-item,
		    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
		    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more, 
		    .td_3D_btn,
		    .td_shadow_btn,
		    .td_default_btn,
		    .td_round_btn, 
		    .td_outlined_btn:hover {
		    	background-color: #009dcc;
		    }

		    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
		    	background-color: #009dcc !important;
		    }

		    .block-title,
		    .td_block_template_1 .td-related-title,
		    .wpb_tabs .wpb_tabs_nav,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
		    .woocommerce div.product .woocommerce-tabs ul.tabs:before {
		        border-color: #009dcc;
		    }
		    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
			    color: #009dcc;
			}


		    
		    .td-grid-style-4 .entry-title
		    {
		        background-color: rgba(0, 157, 204, 0.7);
		    }

		    
		    .block-title > span,
		    .block-title > span > a,
		    .block-title > a,
		    .block-title > label,
		    .widgettitle,
		    .widgettitle:after,
		    .td-trending-now-title,
		    .td-trending-now-wrapper:hover .td-trending-now-title,
		    .wpb_tabs li.ui-tabs-active a,
		    .wpb_tabs li:hover a,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
		    .td_block_template_1 .td-related-title .td-cur-simple-item,
		    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
		    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
		    .td-weather-information:before,
		    .td-weather-week:before,
		    .td_block_exchange .td-exchange-header:before,
		    .td-theme-wrap .td_block_template_3 .td-block-title > *,
		    .td-theme-wrap .td_block_template_4 .td-block-title > *,
		    .td-theme-wrap .td_block_template_7 .td-block-title > *,
		    .td-theme-wrap .td_block_template_9 .td-block-title:after,
		    .td-theme-wrap .td_block_template_10 .td-block-title::before,
		    .td-theme-wrap .td_block_template_11 .td-block-title::before,
		    .td-theme-wrap .td_block_template_11 .td-block-title::after,
		    .td-theme-wrap .td_block_template_14 .td-block-title,
		    .td-theme-wrap .td_block_template_15 .td-block-title:before,
		    .td-theme-wrap .td_block_template_17 .td-block-title:before {
		        background-color: #293b54;
		    }

		    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
		    	background-color: #293b54 !important;
		    }

		    .block-title,
		    .td_block_template_1 .td-related-title,
		    .wpb_tabs .wpb_tabs_nav,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
		    .woocommerce div.product .woocommerce-tabs ul.tabs:before,
		    .td-theme-wrap .td_block_template_5 .td-block-title > *,
		    .td-theme-wrap .td_block_template_17 .td-block-title,
		    .td-theme-wrap .td_block_template_17 .td-block-title::before {
		        border-color: #293b54;
		    }

		    .td-theme-wrap .td_block_template_4 .td-block-title > *:before,
		    .td-theme-wrap .td_block_template_17 .td-block-title::after {
		        border-color: #293b54 transparent transparent transparent;
		    }
		    
		    .td-theme-wrap .td_block_template_4 .td-related-title .td-cur-simple-item:before {
		        border-color: #293b54 transparent transparent transparent !important;
		    }

		    
		    .sf-menu > .current-menu-item > a:after,
		    .sf-menu > .current-menu-ancestor > a:after,
		    .sf-menu > .current-category-ancestor > a:after,
		    .sf-menu > li:hover > a:after,
		    .sf-menu > .sfHover > a:after,
		    .td_block_mega_menu .td-next-prev-wrap a:hover,
		    .td-mega-span .td-post-category:hover,
		    .td-header-wrap .black-menu .sf-menu > li > a:hover,
		    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
		    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
		    .header-search-wrap .td-drop-down-search:after,
		    .header-search-wrap .td-drop-down-search .btn:hover,
		    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
		    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
		    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a {
		        background-color: #2189ce;
		    }


		    .td_block_mega_menu .td-next-prev-wrap a:hover {
		        border-color: #2189ce;
		    }

		    .header-search-wrap .td-drop-down-search:before {
		        border-color: transparent transparent #2189ce transparent;
		    }

		    .td_mega_menu_sub_cats .cur-sub-cat,
		    .td_mod_mega_menu:hover .entry-title a,
		    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
		    .td-theme-wrap .sf-menu ul .sfHover > a,
		    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
		    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
		    .td-theme-wrap .sf-menu ul .current-menu-item > a {
		        color: #2189ce;
		    }
		    
		    
		    
		    @media (max-width: 767px) {
		        body .td-header-wrap .td-header-main-menu {
		            background-color: #003a4f !important;
		        }
		    }


		    
		    .td-menu-background:before,
		    .td-search-background:before {
		        background: #36a9e1;
		        background: -moz-linear-gradient(top, #36a9e1 0%, #844893 100%);
		        background: -webkit-gradient(left top, left bottom, color-stop(0%, #36a9e1), color-stop(100%, #844893));
		        background: -webkit-linear-gradient(top, #36a9e1 0%, #844893 100%);
		        background: -o-linear-gradient(top, #36a9e1 0%, @mobileu_gradient_two_mob 100%);
		        background: -ms-linear-gradient(top, #36a9e1 0%, #844893 100%);
		        background: linear-gradient(to bottom, #36a9e1 0%, #844893 100%);
		        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#36a9e1', endColorstr='#844893', GradientType=0 );
		    }

		    
		    .td-banner-wrap-full,
		    .td-header-style-11 .td-logo-wrap-full {
		        background-color: #f7f7f7;
		    }

		    .td-header-style-11 .td-logo-wrap-full {
		        border-bottom: 0;
		    }

		    @media (min-width: 1019px) {
		        .td-header-style-2 .td-header-sp-recs,
		        .td-header-style-5 .td-a-rec-id-header > div,
		        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-6 .td-a-rec-id-header > div,
		        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-7 .td-a-rec-id-header > div,
		        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-8 .td-a-rec-id-header > div,
		        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-12 .td-a-rec-id-header > div,
		        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
		            margin-bottom: 24px !important;
		        }
		    }

		    @media (min-width: 768px) and (max-width: 1018px) {
		        .td-header-style-2 .td-header-sp-recs,
		        .td-header-style-5 .td-a-rec-id-header > div,
		        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-6 .td-a-rec-id-header > div,
		        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-7 .td-a-rec-id-header > div,
		        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-8 .td-a-rec-id-header > div,
		        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
		        .td-header-style-12 .td-a-rec-id-header > div,
		        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
		            margin-bottom: 14px !important;
		        }
		    }

		     
		    .td-footer-wrapper::before {
		        background-image: url('');
		    }

		    
		    .td-footer-wrapper::before {
		        background-size: 100% auto;
		    }

		    
		    .top-header-menu > li > a,
		    .td-weather-top-widget .td-weather-now .td-big-degrees,
		    .td-weather-top-widget .td-weather-header .td-weather-city,
		    .td-header-sp-top-menu .td_data_time {
		        font-family:"Nova Slim";
			
		    }
		    
		    ul.sf-menu > .td-menu-item > a,
		    .td-theme-wrap .td-header-menu-social {
		        font-family:"Open Sans";
			font-weight:300;
			
		    }
		    
		    .block-title > span,
		    .block-title > a,
		    .widgettitle,
		    .td-trending-now-title,
		    .wpb_tabs li a,
		    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab > a,
		    .td-theme-wrap .td-related-title a,
		    .woocommerce div.product .woocommerce-tabs ul.tabs li a,
		    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
		    .td-theme-wrap .td-block-title {
		        font-family:"Open Sans";
			
		    }
		    
		    .td-excerpt,
		    .td_module_14 .td-excerpt {
		        font-family:"Open Sans";
			font-size:13px;
			line-height:21px;
			
		    }


			
			.post .td-post-header .entry-title {
				font-family:"Open Sans";
			
			}
		    
		    .td-post-template-default .td-post-header .entry-title {
		        font-family:"Open Sans";
			font-weight:300;
			
		    }
		    
		    .td-post-content p,
		    .td-post-content {
		        font-family:"Open Sans";
			font-size:17px;
			line-height:31px;
			
		    }
		    
		    .td-post-template-default .td-post-sub-title,
		    .td-post-template-1 .td-post-sub-title,
		    .td-post-template-4 .td-post-sub-title,
		    .td-post-template-5 .td-post-sub-title,
		    .td-post-template-9 .td-post-sub-title,
		    .td-post-template-10 .td-post-sub-title,
		    .td-post-template-11 .td-post-sub-title {
		        font-size:18px;
			line-height:26px;
			font-style:normal;
			font-weight:600;
			
		    }
</style>


<!-- Button style compiled by theme -->

<style>
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover,
                .tdm_block_column_content:hover .tdm-col-content-title-url .tdm-title,
                .tds-button2 .tdm-btn-text,
                .tds-button2 i,
                .tds-button5:hover .tdm-btn-text,
                .tds-button5:hover i,
                .tds-button6 .tdm-btn-text,
                .tds-button6 i,
                .tdm_block_list .tdm-list-item i,
                .tdm_block_pricing .tdm-pricing-feature i,
                .tdm-social-item i {
                  color: #009dcc;
                }
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .sfHover > a,
                .tds-button1,
                .tds-button6:after,
                .tds-title2 .tdm-title-line:after,
                .tds-title3 .tdm-title-line:after,
                .tdm_block_pricing.tdm-pricing-featured:before,
                .tdm_block_pricing.tds_pricing2_block.tdm-pricing-featured .tdm-pricing-header,
                .tds-progress-bar1 .tdm-progress-bar:after,
                .tds-progress-bar2 .tdm-progress-bar:after,
                .tds-social3 .tdm-social-item {
                  background-color: #009dcc;
                }
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a,
                .tds-button2:before,
                .tds-button6:before,
                .tds-progress-bar3 .tdm-progress-bar:after {
                  border-color: #009dcc;
                }
                .tdm-btn-style1 {
					background-color: #009dcc;
				}
				.tdm-btn-style2:before {
				    border-color: #009dcc;
				}
				.tdm-btn-style2 {
				    color: #009dcc;
				}
				.tdm-btn-style3 {
				    -webkit-box-shadow: 0 2px 16px #009dcc;
                    -moz-box-shadow: 0 2px 16px #009dcc;
                    box-shadow: 0 2px 16px #009dcc;
				}
				.tdm-btn-style3:hover {
				    -webkit-box-shadow: 0 4px 26px #009dcc;
                    -moz-box-shadow: 0 4px 26px #009dcc;
                    box-shadow: 0 4px 26px #009dcc;
				}
				
				
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a {
                  color: #2189ce;
                }
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a {
                  border-color: #2189ce;
                }
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .sfHover > a {
                  background-color: #2189ce;
                }
</style>

<noscript>

	<style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	

	<style id="tdw-css-placeholder"></style>



        <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>
    
    <div class="td-menu-background" style="height: 711px;"></div>
	<div id="td-mobile-nav" style="min-height: 641px;">

    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
                
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.facebook.com/ITwareLatam/" title="Facebook">
                <i class="td-icon-font td-icon-facebook"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.linkedin.com/company/itwarelatam" title="Linkedin">
                <i class="td-icon-font td-icon-linkedin"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.itwarelatam.com/feed" title="RSS">
                <i class="td-icon-font td-icon-rss"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.twitter.com/ITwareLatam" title="Twitter">
                <i class="td-icon-font td-icon-twitter"></i>
            </a>
        </span>
        <span class="td-social-icon-wrap">
            <a target="_blank" href="https://www.youtube.com/itwarelatam" title="Youtube">
                <i class="td-icon-font td-icon-youtube"></i>
            </a>
        </span>            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <a href="#"><i class="td-icon-close-mobile"></i></a>
            </div>
        </div>

        <!-- login section -->
        
        <!-- menu section -->
			<div class="td-mobile-content">
				 <div class="menu-menu-principal-container">

				 	<ul id="menu-menu-principal" class="td-mobile-main-menu">

				 		<?php 



			    	foreach ($menu as $key => $value) {
			    		
			    		if(isset($activeMenu)){
			    			if($activeMenu == $value){
			    	?>

			    				

			    				<li id="menu-item-19960" class="menu-item menu-item-type-taxonomy  menu-item-object-page menu-item-home current-menu-item page_item page-item-19946 current_page_item menu-item-first menu-item-19960"><a href="#">{{$value}}</a></li>
			    				<?php 		
			    			}else{

			    				?>
			    				

			    				<li id="menu-item-19962" class="menu-item menu-item-type-post_type menu-item-object-category menu-item-19962"><a href="{{ URL::to('/') }}/{{post_slug($value)}}">{{$value}}</a></li>
			    		<?php	}
			    		}else{
			    			?>
			    			
			    			<li id="menu-item-19962" class="menu-item menu-item-type-post_type menu-item-object-category menu-item-19962"><a href="{{ URL::to('/') }}/{{post_slug($value)}}">{{$value}}</a></li>
			    		<?php	
			    		}

			    	}


			    	?>	



					</ul>



				</div>
			</div>
    </div>

    <!-- register/login section -->
    </div>    
    <div class="td-search-background" style="height: 711px;"></div>
		<div class="td-search-wrap-mob">
			<div class="td-drop-down-search" aria-labelledby="td-header-search-button">
				<form method="get" class="td-search-form" action="https://www.itwarelatam.com/">
					<!-- close button -->
					<div class="td-search-close">
						<a href="#"><i class="td-icon-close-mobile"></i></a>
					</div>
					<div role="search" class="td-search-input">
						<span>Buscar</span>
						<input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off">
					</div>
				</form>
				<div id="td-aj-search-mob"></div>
			</div>
		</div>    
    
    <div id="td-outer-wrap" class="td-theme-wrap">
    
        <!--
Header style 10
-->






	<center> <img src="http://www.caracasdigital.com/baner/Abside-950X75-new-CD.gif"></center>
	<center> <img src="http://www.caracasdigital.com/baner/Banner CaracasDigital.jpg"></center>





<div class="td-header-wrap td-header-style-10 ">
    
	<div class="td-header-top-menu-full td-container-wrap td_stretch_container">
		<div class="td-container td-header-row td-header-top-menu">
            <!-- LOGIN MODAL -->
		</div>
	</div>

    <div class="td-banner-wrap-full td-logo-wrap-full td-logo-mobile-loaded td-container-wrap td_stretch_container">
		

		<div id="td_uid_27_5f8f778c757cc" class="tdc-row">
<div class="vc_row td_uid_119_5f8f778c757d6_rand  wpb_row td-pb-row">
<style scoped="">

/* custom css */
.td_uid_119_5f8f778c757d6_rand {
                    min-height: 0;
                }
</style>
		
<!-- <div class="vc_column td_uid_120_5f8f778c759d9_rand  wpb_column vc_column_container tdc-column td-pb-span12">
		<div class="wpb_wrapper">
			<div class="wpb_wrapper td_block_single_image td_block_wrap  td_block_wrap vc_single_image td_uid_121_5f8f778c75b1c_rand  td-single-image- td-pb-border-top td_block_template_3"><a class="td_single_image_bg" style="background-image: url('http://www.caracasdigital.com/baner/Abside-950X75-new-CD.gif'); background-size: cover; background-repeat: no-repeat; background-position: center center;" href="https://www.facebook.com/ITwareLatam/" target="_blank" rel="bookmark"></a>
				<style>
				/* custom css */
				.td_uid_121_5f8f778c75b1c_rand .td_single_image_bg {
									height: 65px;
									padding-bottom: 0;
								}
				</style>
			</div>
			<div class="wpb_wrapper td_block_single_image td_block_wrap  td_block_wrap vc_single_image td_uid_121_5f8f778c75b1c_rand  td-single-image- "><a class="td_single_image_bg" style="background-image: url('http://www.caracasdigital.com/baner/Abside-950X75-new-CD.gif'); background-size: cover; background-repeat: no-repeat; background-position: center center;" href="https://www.facebook.com/ITwareLatam/" target="_blank" rel="bookmark"></a>
				<style>
				/* custom css */
				.td_uid_121_5f8f778c75b1c_rand .td_single_image_bg {
									height: 65px;
									padding-bottom: 0;
								}
				</style>
			</div>

		</div>
	</div> -->

	<div class="vc_column td_uid_120_5f8f778c759d9_rand  wpb_column vc_column_container tdc-column td-pb-span4">
		<div class="wpb_wrapper">
			<div class="wpb_wrapper td_block_single_image td_block_wrap  td_block_wrap vc_single_image td_uid_121_5f8f778c75b0c_rand  td-single-image- td-pb-border-top td_block_template_3">
				<div class="td-header-sp-logo"   >
		    <h1 class="td-logo">		
		       <a class="td-main-logo" href="http://www.caracasdigital.com/" >
				 <img class="td-retina-data td-retina-version" data-retina="http://caracasdigital.com/images/caracasdigital.gif" src="http://caracasdigital.com/images/caracasdigital.gif" style="margin-top: 25px; " alt="ITware Latam. Noticias del sector IT en Latinoamérica." title="ITware Latam. Noticias del sector IT en Latinoamérica." width="300">
					<span class="td-visual-hidden">Caracas Digiral</span>
				</a>
			</h1>  
    			
		</div>

				<!-- <a class="td_single_image_bg" style="background-image: url('https://store.compudiskett.com.pe/images/caracasdigital.gif'); background-size: cover; background-repeat: no-repeat; background-position: center center;" href="https://www.facebook.com/ITwareLatam/" target="_blank" rel="bookmark"></a> -->
				<style>
				/* custom css */
				.td_uid_121_5f8f778c75b0c_rand .td_single_image_bg {
									height: 170px;
									padding-bottom: 0;
								}
				</style>
			</div>

		</div>
	</div>

	<div class="vc_column td_uid_120_5f8f778c759d9_rand  wpb_column vc_column_container tdc-column td-pb-span5">
		<div class="wpb_wrapper">
			<div class="wpb_wrapper td_block_single_image td_block_wrap  td_block_wrap vc_single_image td_uid_121_5f8f778c75b9c_rand  td-single-image- td-pb-border-top td_block_template_3" style="margin-top: 25px;">

				<a class="td_single_image_bg" style="background-image: url('http://www.caracasdigital.com/baner/Abside-950X75-new-CD.gif'); background-size: 468px; background-repeat: no-repeat; background-position: center center;" href="https://www.facebook.com/ITwareLatam/" target="_blank" rel="bookmark"></a>
				<style>
				/* custom css */
				.td_uid_121_5f8f778c75b9c_rand .td_single_image_bg {
									height: 60px;
									width: 468px;
									margin-top: : 25px;
									padding-bottom: 0;
								}
				</style>
			</div>

		</div>
	</div>

	<div class="vc_column td_uid_122_5f8f778c7cad0_rand  wpb_column vc_column_container tdc-column td-pb-span3"><div class="wpb_wrapper">
		<div class="wpb_wrapper td_block_wrap vc_raw_html td_uid_123_5f8f778c7cc02_rand " style="height: 60;margin-top: 25px;"><div class="td-fix-index">

		<div class="td-drop-down-search td-drop-down-search-open"  style="max-width:200px; ">
		            <form method="get" class="td-search-form" action="https://www.itwarelatam.com/">
		                <div role="search" class="td-head-form-search-wrap">


		                 <input id="td-header-search" type="text" value="" name="s" autocomplete="off">
		                 
		                  <div  class="wpb_button btn" style="width:20px;margin-top: 15px; "> <svg style="width:20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path></svg></div>
		                </div>
		            </form>
		            <div id="td-aj-search"></div>
        	</div>

	</div></div></div>
	</div>
</div>
</div>

	
		<!-- <div class="td-header-sp-logo"  style="background-color: blue;" >
		    <h1 class="td-logo" style="position: relative;" >		
		      
				<center> <img   src="http://www.caracasdigital.com/baner/Banner CaracasDigital.jpg" style="width:468px;height:60px;margin-top: 0px; margin-top:10%; "></center>
				
			</h1>  
    			
		</div>

		

		<div class="td-drop-down-search td-drop-down-search-open"  style="margin-top: -100px;margin-right:22%;max-width:180px;  ">
		            <form method="get" class="td-search-form" action="https://www.itwarelatam.com/">
		                <div role="search" class="td-head-form-search-wrap">


		                 <input id="td-header-search" type="text" value="" name="s" autocomplete="off">
		                 
		                  <div  class="wpb_button btn" style="width:20px;margin-top: 15px; "> <svg style="width:20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path></svg></div>
		                </div>
		            </form>
		            <div id="td-aj-search"></div>
        	</div>  -->

		
        	<!-- BANNER TOP -->
        	

    </div>

	<div class="td-header-menu-wrap-full td-container-wrap td_stretch_container" style="height: 54px;">
        
        <div class="td-header-menu-wrap td-header-gradient ">
			<div class="td-container td-header-row td-header-main-menu">
				<div id="td-header-menu" role="navigation">
    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>

    <div class="td-main-menu-logo td-logo-in-header" >
        <a class="td-mobile-logo td-sticky-disable" href="https://www.itwarelatam.com/">
				<img class="td-retina-data td-retina-version" data-retina="http://www.caracasdigital.com/images/caracasdigital-nm.png" src="http://www.caracasdigital.com/images/caracasdigital-nm.png" alt="ITware Latam. Noticias del sector IT en Latinoamérica." title="ITware Latam. Noticias del sector IT en Latinoamérica.">
			</a>

			<a class="td-header-logo td-sticky-disable" href="https://www.itwarelatam.com/">
				<img class="td-retina-data td-retina-version" data-retina="https://store.compudiskett.com.pe/images/caracasdigital.gif" src="https://store.compudiskett.com.pe/images/caracasdigital.gif" alt="ITware Latam. Noticias del sector IT en Latinoamérica." title="ITware Latam. Noticias del sector IT en Latinoamérica." style="margin-bottom: 25px;">
			</a>
	    </div>

    <div class="menu-menu-principal-container">

    <ul id="menu-menu-principal-1" class="sf-menu sf-js-enabled">

   	
    	<?php 



    	foreach ($menu as $key => $value) {
    		
    		if(isset($activeMenu)){
    			if($activeMenu == $value){
    	?>

    				<li class="menu-item menu-item-type-taxonomy post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-19946 current_page_item menu-item-first td-menu-item td-normal-menu menu-item-19960"><a href="#">{{$value}} </a></li>
    				<?php 		
    			}else{

    				?>
    				<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19962"><a href="{{ URL::to('/') }}/{{post_slug($value)}}">{{$value}}</a></li>

    		<?php	}
    		}else{
    			?>
    			
    			<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19962"><a href="{{ URL::to('/') }}/{{post_slug($value)}}">{{$value}}</a></li>
    		<?php	
    		}

    	}


    	?>


			<!-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19962"><a href="{{ URL::to('/') }}">Noticias</a></li>

			<li class="menu-item menu-item-type-taxonomy post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-19946 current_page_item menu-item-first td-menu-item td-normal-menu menu-item-19960"><a href="#">Suscribirse </a></li>

			<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19963">
				<a href="{{ URL::to('/') }}">Negocios &amp; Mercadeo</a></li>
			<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19964">
				<a href="{{ URL::to('/') }}">Copa Telecom</a></li>
			<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19965">
				<a href="{{ URL::to('/') }}">Big data</a></li>
			<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-19966">
				<a href="{{ URL::to('/') }}">Quienes Somos</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-25706">
				<a href="{{ URL::to('/') }}">Contactenos</a></li> -->
</ul>
					

</div></div>


    <div class="header-search-wrap">
        <div class="td-search-btns-wrap">
            <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search" style="width:20px;margin-top: 15px;display:none;  " ></i>
            	<!-- <svg style="width:20px;margin-top: 15px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path></svg> -->
            </a>
           
            <a id="td-header-search-button-mob" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown" style="" ><i class="td-icon-search"></i>

            	<!-- <svg  style="width:20px;margin-top:15px;  " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path></svg> -->
            </a>
        </div>

        <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
            <form method="get" class="td-search-form" action="https://www.itwarelatam.com/">
                <div role="search" class="td-head-form-search-wrap">
                    <input id="td-header-search" type="text" value="" name="s" autocomplete="off"><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Buscar">
                </div>
            </form>
            <div id="td-aj-search"></div>
        </div>
    </div>
			</div>
		</div>
	</div>

    
</div>        
            
                <div class="tdc-content-wrap">
                    <div id="td_uid_1_5f8f778bdc740" class="tdc-row"><div class="vc_row td_uid_1_5f8f778bdc74a_rand  wpb_row td-pb-row">
<style scoped="">

/* custom css */
.td_uid_1_5f8f778bdc74a_rand {
                    min-height: 0;
                }
</style><div class="vc_column td_uid_2_5f8f778bdccae_rand  wpb_column vc_column_container tdc-column td-pb-span12"><div class="wpb_wrapper"><div class="td_block_wrap td_block_big_grid_fl_10 td_uid_3_5f8f778bdcfe5_rand td-grid-style-4 td-hover-1 td-big-grids-fl td-big-grids-scroll td-big-grids-margin td-pb-border-top td_block_template_3" data-td-block-uid="td_uid_3_5f8f778bdcfe5">
<style>
/* custom css */


/* phone */
@media (max-width: 767px){
body .td_uid_3_5f8f778bdcfe5_rand .td_block_inner .td-big-grid-column .td-big-grid-meta .entry-title {
					@mx25f_title
				}
				.td_uid_3_5f8f778bdcfe5_rand .td-big-grid-column .td-post-category {
					@mx25f_cat
				}
				
				body .td_uid_3_5f8f778bdcfe5_rand .td_block_inner .td-big-grid-scroll .td-big-grid-meta .entry-title {
					@mx19f_title
				}
				.td_uid_3_5f8f778bdcfe5_rand .td-big-grid-scroll .td-post-category {
					@mx19f_cat
				}
				.td_uid_3_5f8f778bdcfe5_rand .td-big-grid-scroll .td-module-meta-info {
					@mx19f_meta
				}
}
</style>

	

		<script>

			jQuery(window).load(function () {
				jQuery('body').find('#td_uid_31_5f8f778c7cc6e .td-element-style').each(function (index, element) {
					jQuery(element).css('opacity', 1);
					return;
				});
			});

		</script>

		
			<script>

				jQuery(window).ready(function () {

					// We need timeout because the content must be rendered and interpreted on client
					setTimeout(function () {

						var $content = jQuery('body').find('#tdc-live-iframe'),
							refWindow = undefined;

						if ($content.length) {
							$content = $content.contents();
							refWindow = document.getElementById('tdc-live-iframe').contentWindow || document.getElementById('tdc-live-iframe').contentDocument;

						} else {
							$content = jQuery('body');
							refWindow = window;
						}

						$content.find('#td_uid_31_5f8f778c7cc6e .td-element-style').each(function (index, element) {
							jQuery(element).css('opacity', 1);
							return;
						});
					});

				}, 200);
			</script>


<!-- ./ciberceguridad -->
		<script>

			jQuery(window).load(function () {
				jQuery('body').find('#td_uid_35_5f8f778c95686 .td-element-style').each(function (index, element) {
					jQuery(element).css('opacity', 1);
					return;
				});
			});

		</script>

		
			<script>

				jQuery(window).ready(function () {

					// We need timeout because the content must be rendered and interpreted on client
					setTimeout(function () {

						var $content = jQuery('body').find('#tdc-live-iframe'),
							refWindow = undefined;

						if ($content.length) {
							$content = $content.contents();
							refWindow = document.getElementById('tdc-live-iframe').contentWindow || document.getElementById('tdc-live-iframe').contentDocument;

						} else {
							$content = jQuery('body');
							refWindow = window;
						}

						$content.find('#td_uid_35_5f8f778c95686 .td-element-style').each(function (index, element) {
							jQuery(element).css('opacity', 1);
							return;
						});
					});

				}, 200);
			</script>

			<div id="td_uid_38_5f8f778c9f95f" class="tdc-row"><div class="vc_row td_uid_135_5f8f778c9f968_rand  wpb_row td-pb-row">


</div>
	

			
                </div>
                            </div> <!-- /.td-main-content-wrap -->


            <!-- Instagram -->





</div>
</div>