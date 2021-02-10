                

                    <div class="td_block_wrap td_block_related_posts td_uid_2_5fdc2e7c67d4f_rand td_with_ajax_pagination td-pb-border-top td_block_template_3" data-td-block-uid="td_uid_2_5fdc2e7c67d4f">
                        <h4 class="td-related-title td-block-title">
                            <a id="td_uid_3_5fdc2e7c6bb70" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="td_uid_2_5fdc2e7c67d4f" href="#">Artículo relacionados</a>
                            <a id="td_uid_4_5fdc2e7c6bb81" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="td_uid_2_5fdc2e7c67d4f" href="#">Más del autor</a>
                        </h4>

                        <div id="td_uid_2_5fdc2e7c67d4f" class="td_block_inner">


                        	<div class="td-related-row">

                                    <?php 

                                    //print_r($etiquetas_rel);

                                    for($re=0; 3 > $re ; $re++) {
                                        
                                        if(isset($etiquetas_rel[$re]->titulo)){ 

                                          $title_ruta= post_slug($etiquetas_rel[$re]->titulo); 

                                          $rutaimg="";                     
                                          $etiqueta_sub="";
                                          $htmleti="";

                                              $etiqueta_sub=str_replace("[","",$etiquetas_rel[$re]->etiquetas);
                                              $etiqueta_sub=str_replace("]","",$etiqueta_sub);
                                              $etiqueta_sub=explode(",",$etiqueta_sub);  
                                              
                                                                                       
                                            ?>

                                           	 <div class="td-related-span4">

                                            <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb">
                                                        <a href="{{ URL::to('/') }}/{{$title_ruta}}/{{ $etiquetas_rel[$re]->codNot }}" rel="bookmark" class="td-image-wrap" title="{{$etiquetas_rel[$re]->titulo}}">

                                                        
                                                        <?php 

                                                        if(isset($etiquetas_rel[$re]->fotos))
                                                          {
                                                              

                                                           if(url_exists("http://www.caracasdigital.com/noticias/".$etiquetas_rel[$re]->fotos))
                                                            {
                                                             
                                                             $rutaimg="http://www.caracasdigital.com/noticias/".$etiquetas_rel[$re]->fotos;

                                                             ?>
                                                              <img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="{{$rutaimg}}" srcset="{{$rutaimg}}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{$etiquetas_rel[$re]->titulo}}">
                                                           
                                                            <?php

                                                             }else{

                                                                ?>

                                                                <img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="{{asset('noticias/'.$etiquetas_rel[$re]->fotos)}}" srcset="{{asset('noticias/'.$etiquetas_rel[$re]->fotos)}}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{$etiquetas_rel[$re]->titulo}}">

                                                               <?php
                                                                }
                                                            }
                                                        ?>    

                                                       


                                                    </a>
                                                </div>   

                                                    <?php 
                                                    $i=0; 

                                                    if(is_array($etiqueta_sub)){

                                                        foreach( $etiqueta_sub as $key => $value){
                                                             
                                                           // if($i > 2){ ?>

                                                            <a href="{{ URL::to('/') }}/etiqueta/{{$etiqueta_sub[0]}}" class="td-post-category"> {{$etiqueta_sub[0]}}</a>
                                                            
                                                            
                                                            <?php    

                                                            //  } 
                                                         $i++;

                                                            }  

                                                          } 

                                                    ?>       
                                                               

                                                     </div>
                                                <div class="item-details">
                                                    <h3 class="entry-title td-module-title"><a href="{{ URL::to('/') }}/{{$title_ruta}}/{{ $etiquetas_rel[$re]->codNot }}" rel="bookmark" title="{{$etiquetas_rel[$re]->titulo}}">{{$etiquetas_rel[$re]->titulo }}</a></h3>            </div>
                                            </div>
                                            
                                    	</div>  
  	                             
                                 <?php }
                                        }  

                                        ?>


                            </div><!--./row-fluid-->

                        	<div class="td-related-row">

                                    <?php 

                                    //print_r($etiquetas_rel);

                                    for($re=3; 6 > $re ; $re++) {
                                        
                                        if(isset($etiquetas_rel[$re]->titulo)){ 

                                          $title_ruta= post_slug($etiquetas_rel[$re]->titulo); 

                                          $rutaimg="";                     
                                          $etiqueta_sub="";
                                          $htmleti="";

                                              $etiqueta_sub=str_replace("[","",$etiquetas_rel[$re]->etiquetas);
                                              $etiqueta_sub=str_replace("]","",$etiqueta_sub);
                                              $etiqueta_sub=explode(",",$etiqueta_sub);  
                                              
                                                                                       
                                            ?>

                                             <div class="td-related-span4">

                                            <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb">
                                                        <a href="{{ URL::to('/') }}/{{$title_ruta}}/{{ $etiquetas_rel[$re]->codNot }}" rel="bookmark" class="td-image-wrap" title="{{$etiquetas_rel[$re]->titulo}}">

                                                        
                                                        <?php 

                                                        if(isset($etiquetas_rel[$re]->fotos))
                                                          {
                                                              

                                                           if(url_exists("http://www.caracasdigital.com/noticias/".$etiquetas_rel[$re]->fotos))
                                                            {
                                                             
                                                             $rutaimg="http://www.caracasdigital.com/noticias/".$etiquetas_rel[$re]->fotos;

                                                             ?>
                                                              <img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="{{$rutaimg}}" srcset="{{$rutaimg}}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{$etiquetas_rel[$re]->titulo}}">
                                                           
                                                            <?php

                                                             }else{

                                                                ?>

                                                                <img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="{{asset('noticias/'.$etiquetas_rel[$re]->fotos)}}" srcset="{{asset('noticias/'.$etiquetas_rel[$re]->fotos)}}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{$etiquetas_rel[$re]->titulo}}">

                                                               <?php
                                                                }
                                                            }
                                                        ?>    

                                                       


                                                    </a>
                                                </div>   

                                                    <?php 
                                                    $i=0; 

                                                    if(is_array($etiqueta_sub)){

                                                        foreach( $etiqueta_sub as $key => $value){
                                                             
                                                           // if($i > 2){ ?>

                                                            <a href="{{ URL::to('/') }}/etiqueta/{{$etiqueta_sub[0]}}" class="td-post-category"> {{$etiqueta_sub[0]}}</a>
                                                            
                                                            
                                                            <?php    

                                                            //  } 
                                                         $i++;

                                                            }  

                                                          } 

                                                    ?>       
                                                               

                                                     </div>
                                                <div class="item-details">
                                                    <h3 class="entry-title td-module-title"><a href="{{ URL::to('/') }}/{{$title_ruta}}/{{ $etiquetas_rel[$re]->codNot }}" rel="bookmark" title="{{$etiquetas_rel[$re]->titulo}}">{{$etiquetas_rel[$re]->titulo }}</a></h3>            </div>
                                            </div>
                                            
                                        </div>  
                                 
                                 <?php }
                                        }  

                                        ?>


                            </div><!--./row-fluid-->

                        </div>



                        <div class="td-next-prev-wrap">
                            <a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_2_5fdc2e7c67d4f" data-td_block_id="td_uid_2_5fdc2e7c67d4f">
                                <i class="td-icon-font td-icon-menu-left" style="padding-top: 7px;" ></i>
                            </a>
                            <a href="#" class="td-ajax-next-page" id="next-page-td_uid_2_5fdc2e7c67d4f" data-td_block_id="td_uid_2_5fdc2e7c67d4f">
                                <i class="td-icon-font td-icon-menu-right" style="padding-top: 7px;" ></i>
                            </a>
                        </div>
                    </div> <!-- ./block -->



                        <div class="clearfix"></div>