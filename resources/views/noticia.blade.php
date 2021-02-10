<?php

//print_r($articulosantpos[0]);
//print_r($articulosantpos[0]->codNot);
//print_r($articulosantpos[0]->titulo);



$cod = array();
$titulo = array();


if($articulosantpos){

	if(isset($articulosantpos[0]->codNot))
	{

		$cod[0]=$articulosantpos[0]->codNot;		
		$titulo[0]=$articulosantpos[0]->titulo; 
 
	}

	if(isset($articulosantpos[1]->codNot))
	{
			$cod[1]=$articulosantpos[1]->codNot;		
			$titulo[1]=$articulosantpos[1]->titulo; 

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
                      } ?>


@include('header-search-menu')


@include ('body-articulo')


</div>
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
</style><div class="vc_column td_uid_136_5f8f778c9fb8d_rand  wpb_column vc_column_container tdc-column td-pb-span12"><div class="wpb_wrapper"><div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space td_uid_137_5f8f778c9fc8c_rand " style="height: 32px"></div></div></div></div></div>
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
            


            // if ( document.querySelector('.g-recaptcha.jp-recaptcha') ) {
            //     var appendJS = function(){
            //         var js, b = document.body;
            //         js = document.createElement('script');
            //         js.type = 'text/javascript';
            //         js.src = 'https://www.google.com/recaptcha/api.js?hl=es-419';
            //         b.appendChild(js);
            //     }
            //     if(window.attachEvent) {
            //         window.attachEvent('F', appendJS);
            //     } else {
            //         if(window.onload) {
            //             var curronload = window.onload;
            //             var newonload = function(evt) {
            //                 curronload(evt);
            //                 appendJS(evt);
            //             };
            //             window.onload = newonload;
            //         } else {
            //             window.onload = appendJS;
            //         }
            //     }
            // }

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


					

					</div>
				</div>

				
			</div>
			</div>

			<script>
				
				$(document).ready(function(){



				})	

			</script>