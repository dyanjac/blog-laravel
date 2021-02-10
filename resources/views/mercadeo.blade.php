<?php 

/*function urlExists($url = NULL) { if ($url == NULL) return false; $ch = curl_init($url); curl_setopt($ch, CURLOPT_TIMEOUT, 5); curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $data = curl_exec($ch); $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch); if ($httpcode >= 200 && $httpcode < 300) { return true; } else { return false; } */

function url_exists2( $url = NULL ) {

    if( empty( $url ) ){
        return false;
    }

    $ch = curl_init( $url );
 
    // Establecer un tiempo de espera
    curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );

    // Establecer NOBODY en true para hacer una solicitud tipo HEAD
    curl_setopt( $ch, CURLOPT_NOBODY, true );
    // Permitir seguir redireccionamientos
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
    // Recibir la respuesta como string, no output
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    // Descomentar si tu servidor requiere un user-agent, referrer u otra configuración específica
    // $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36';
    // curl_setopt($ch, CURLOPT_USERAGENT, $agent)

    $data = curl_exec( $ch );

    // Obtener el código de respuesta
    $httpcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
    //cerrar conexión
    curl_close( $ch );

    // Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
    $accepted_response = array( 200, 301, 302 );
    if( in_array( $httpcode, $accepted_response ) ) {
        return true;
    } else {
        return false;
    }

}

 function url_exists3( $url = NULL ) {

    if( empty( $url ) ){
        return false;
    }

    // get_headers() realiza una petición GET por defecto,
    // cambiar el método predeterminadao a HEAD
    // Ver http://php.net/manual/es/function.get-headers.php
    stream_context_set_default(
        array(
            'http' => array(
                'method' => 'HEAD'
             )
        )
    );
    $headers = @get_headers( $url );
    sscanf( $headers[0], 'HTTP/%*d.%*d %d', $httpcode );

    // Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
    $accepted_response = array( 200, 301, 302 );
    if( in_array( $httpcode, $accepted_response ) ) {
        return true;
    } else {
        return false;
    }
}

  function url_exists( $url = NULL ) {
 
                          if( empty( $url ) ){
                              return false;
                          }
                       
                          $options['http'] = array(
                              'method' => "HEAD",
                              'ignore_errors' => 1,
                              'max_redirects' => 0
                          );
                          $body = @file_get_contents( $url, NULL, stream_context_create( $options ) );
                          
                          // Ver http://php.net/manual/es/reserved.variables.httpresponseheader.php
                          if( isset( $http_response_header ) ) {
                              sscanf( $http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode );
                       
                              // Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
                              $accepted_response = array( 200, 301, 302 );
                              if( in_array( $httpcode, $accepted_response ) ) {
                                  return true;
                              } else {
                                  return false;
                              }
                           } else {
                               return false;
                           }
                      } 

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

@include('header-home-search-menu')

            <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
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

	<div id="td_uid_3_5f8f778bdcfe5" class="td_block_inner">
		<div class="td-big-grid-wrapper td-posts-5">
		


        @include('body-home-mercadeo')

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
<style scoped="">

/* custom css */
.td_uid_135_5f8f778c9f968_rand {
                    min-height: 0;
                }
</style>


<div class="vc_column td_uid_136_5f8f778c9fb8d_rand  wpb_column vc_column_container tdc-column td-pb-span12"><div class="wpb_wrapper"><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space td_uid_137_5f8f778c9fc8c_rand " style="height: 32px"></div></div></div></div></div>
		<script>

			jQuery(window).load(function () {
				jQuery('body').find('#td_uid_38_5f8f778c9f95f .td-element-style').each(function (index, element) {
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

						$content.find('#td_uid_38_5f8f778c9f95f .td-element-style').each(function (index, element) {
							jQuery(element).css('opacity', 1);
							return;
						});
					});

				}, 200);
			</script>


<!-- cobertura especial-->

		<script>

			jQuery(window).load(function () {
				jQuery('body').find('#td_uid_41_5f8f778c9fcbf .td-element-style').each(function (index, element) {
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

						$content.find('#td_uid_41_5f8f778c9fcbf .td-element-style').each(function (index, element) {
							jQuery(element).css('opacity', 1);
							return;
						});
					});

				}, 200);
			</script>

			<p></p>
                </div>
                            </div> <!-- /.td-main-content-wrap -->


            <!-- Instagram -->



@include ('footer')

</div>

<iframe id="google_osd_static_frame_8032448411192" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><!--close td-outer-wrap-->

        <script type="text/javascript">
            if ( document.querySelector('.g-recaptcha.jp-recaptcha') ) {
                var appendJS = function(){
                    var js, b = document.body;
                    js = document.createElement('script');
                    js.type = 'text/javascript';
                    js.src = 'https://www.google.com/recaptcha/api.js?hl=es-419';
                    b.appendChild(js);
                }
                if(window.attachEvent) {
                    window.attachEvent('onload', appendJS);
                } else {
                    if(window.onload) {
                        var curronload = window.onload;
                        var newonload = function(evt) {
                            curronload(evt);
                            appendJS(evt);
                        };
                        window.onload = newonload;
                    } else {
                        window.onload = appendJS;
                    }
                }
            }
        </script>
        

    <!--

        Theme: Newspaper by tagDiv.com 2017
        Version: 9.0.1 (rara)
        Deploy mode: deploy
        
        uid: 5f8f778d2b878
    -->

    
<!-- Custom css form theme panel -->
<style type="text/css" media="screen">
/* custom css theme panel */
.td-main-page-wrap {
    padding-top: 0px;
}
</style>

<div class="td-container">

	<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
<script src="https://cdn.embluemail.com/pixeltracking/pixeltracking.js?code=25a47f42782cbfe1b987f565cb58a484"></script>

</div>
<div style="position:fixed;bottom: -999999999999999999999px;"></div>

<link rel="stylesheet" id="font-awesome-css" href="https://www.itwarelatam.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=6.0.5" type="text/css" media="all">
<script type="text/javascript" src="https://c0.wp.com/p/jetpack/9.0.2/_inc/build/photon/photon.min.js" id="jetpack-photon-js"></script>
<script type="text/javascript" id="leadin-script-loader-js-js-extra">
/* <![CDATA[ */
var leadin_wordpress = {"userRole":"visitor","pageType":"home","leadinPluginVersion":"7.45.4"};
/* ]]> */
</script>
<script async="" defer="" id="hs-script-loader" type="text/javascript" src="//js.hs-scripts.com/7620000.js?integration=WordPress"></script>
<script type="text/javascript" src="https://www.itwarelatam.com/wp-content/themes/Newspaper/js/tagdiv_theme.min.js?ver=9.0.1" id="td-site-min-js"></script>
<script type="text/javascript" src="https://c0.wp.com/c/5.5.1/wp-includes/js/comment-reply.min.js" id="comment-reply-js"></script>
<script type="text/javascript" src="https://c0.wp.com/c/5.5.1/wp-includes/js/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript" src="https://cdn.onesignal.com/sdks/OneSignalSDK.js?ver=5.5.1" async="async" id="remote_sdk-js"></script>
<script type="text/javascript" src="https://www.itwarelatam.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.5" id="wpb_composer_front_js-js"></script>

<!-- JS generated by theme -->

<script>
    

	

		// (function(){
		// 	var html_jquery_obj = jQuery('html');

		// 	if (html_jquery_obj.length && (html_jquery_obj.is('.ie8') || html_jquery_obj.is('.ie9'))) {

		// 		var path = 'https://www.itwarelatam.com/wp-content/themes/Newspaper/style.css';

		// 		jQuery.get(path, function(data) {

		// 			var str_split_separator = '#td_css_split_separator';
		// 			var arr_splits = data.split(str_split_separator);
		// 			var arr_length = arr_splits.length;

		// 			if (arr_length > 1) {

		// 				var dir_path = 'https://www.itwarelatam.com/wp-content/themes/Newspaper';
		// 				var splited_css = '';

		// 				for (var i = 0; i < arr_length; i++) {
		// 					if (i > 0) {
		// 						arr_splits[i] = str_split_separator + ' ' + arr_splits[i];
		// 					}
		// 					//jQuery('head').append('<style>' + arr_splits[i] + '</style>');

		// 					var formated_str = arr_splits[i].replace(/\surl\(\'(?!data\:)/gi, function regex_function(str) {
		// 						return ' url(\'' + dir_path + '/' + str.replace(/url\(\'/gi, '').replace(/^\s+|\s+$/gm,'');
		// 					});

		// 					splited_css += "<style>" + formated_str + "</style>";
		// 				}

		// 				var td_theme_css = jQuery('link#td-theme-css');

		// 				if (td_theme_css.length) {
		// 					td_theme_css.after(splited_css);
		// 				}
		// 			}
		// 		});
		// 	}
		// })();

	
	
</script>

<script type="text/javascript" src="https://stats.wp.com/e-202043.js" async="async" defer="defer"></script>
<script type="text/javascript">
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:9.0.2',blog:'70460424',post:'19946',tz:'-3',srv:'www.itwarelatam.com'} ]);
	_stq.push([ 'clickTrackerInit', '70460424', '19946' ]);
</script>


			<div id="tdw-css-writer" style="display: none" class="tdw-drag-dialog tdc-window-sidebar">
				<header>

				
					<a title="Editor" class="tdw-tab tdc-tab-active" href="#" data-tab-content="tdw-tab-editor">Edit with Live CSS</a>
					<div class="tdw-less-info" title="This will be red when errors are detected in your CSS and LESS"></div>
				
				</header>
				<div class="tdw-content">

					
					<div class="tdw-tabs-content tdw-tab-editor tdc-tab-content-active">


						<script>

							(function(jQuery, undefined) {

								jQuery(window).ready(function() {

									if ( 'undefined' !== typeof tdcAdminIFrameUI ) {
										var $liveIframe  = tdcAdminIFrameUI.getLiveIframe();

										if ( $liveIframe.length ) {
											$liveIframe.load(function() {
												$liveIframe.contents().find( 'body').append( '<textarea class="tdw-css-writer-editor" style="display: none"></textarea>' );
											});
										}
									}

								});

							})(jQuery);

						</script>


						<textarea class="tdw-css-writer-editor td_live_css_uid_1_5f8f778d2c38c"></textarea>
						<div id="td_live_css_uid_1_5f8f778d2c38c" class="td-code-editor"></div>


						<script>
							jQuery(window).load(function (){

								if ( 'undefined' !== typeof tdLiveCssInject ) {

									tdLiveCssInject.init();


									var editor_textarea = jQuery('.td_live_css_uid_1_5f8f778d2c38c');
									var languageTools = ace.require("ace/ext/language_tools");
									var tdcCompleter = {
										getCompletions: function (editor, session, pos, prefix, callback) {
											if (prefix.length === 0) {
												callback(null, []);
												return
											}

											if ('undefined' !== typeof tdcAdminIFrameUI) {

												var data = {
													error: undefined,
													getShortcode: ''
												};

												tdcIFrameData.getShortcodeFromData(data);

												if (!_.isUndefined(data.error)) {
													tdcDebug.log(data.error);
												}

												if (!_.isUndefined(data.getShortcode)) {

													var regex = /el_class=\"([A-Za-z0-9_-]*\s*)+\"/g,
														results = data.getShortcode.match(regex);

													var elClasses = {};

													for (var i = 0; i < results.length; i++) {
														var currentClasses = results[i]
															.replace('el_class="', '')
															.replace('"', '')
															.split(' ');

														for (var j = 0; j < currentClasses.length; j++) {
															if (_.isUndefined(elClasses[currentClasses[j]])) {
																elClasses[currentClasses[j]] = '';
															}
														}
													}

													var arrElClasses = [];

													for (var prop in elClasses) {
														arrElClasses.push(prop);
													}

													callback(null, arrElClasses.map(function (item) {
														return {
															name: item,
															value: item,
															meta: 'in_page'
														}
													}));
												}
											}
										}
									};
									languageTools.addCompleter(tdcCompleter);

									window.editor = ace.edit("td_live_css_uid_1_5f8f778d2c38c");

									// 'change' handler is written as function because it's called by tdc_on_add_css_live_components (of wp_footer hook)
									// We did it to reattach the existing compiled css to the new content received from server.
									window.editorChangeHandler = function () {
										//tdwState.lessWasEdited = true;

										window.onbeforeunload = function () {
											if (tdwState.lessWasEdited) {
												return "You have attempted to leave this page. Are you sure?";
											}
											return false;
										};

										var editorValue = editor.getSession().getValue();

										editor_textarea.val(editorValue);

										if ('undefined' !== typeof tdcAdminIFrameUI) {
											tdcAdminIFrameUI.getLiveIframe().contents().find('.tdw-css-writer-editor:first').val(editorValue);

											// Mark the content as modified
											// This is important for showing info when composer closes
                                            tdcMain.setContentModified();
										}

										tdLiveCssInject.less();
									};

									editor.getSession().setValue(editor_textarea.val());
									editor.getSession().on('change', editorChangeHandler);

									editor.setTheme("ace/theme/textmate");
									editor.setShowPrintMargin(false);
									editor.getSession().setMode("ace/mode/less");
									editor.setOptions({
										enableBasicAutocompletion: true,
										enableSnippets: true,
										enableLiveAutocompletion: false
									});

								}

							});
						</script>

					</div>
				</div>

				<footer>

					
						<a href="#" class="tdw-save-css">Save</a>
						<div class="tdw-more-info-text">Write CSS OR LESS and hit save. CTRL + SPACE for auto-complete.</div>

					
					<div class="tdw-resize"></div>
				</footer>
			</div>
			


