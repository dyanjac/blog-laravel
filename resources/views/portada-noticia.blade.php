

<div class="td-post-header td-container">
        <div class="td-crumb-container">
        	<div class="entry-crumbs">
        	<span><a title="" class="entry-crumb" href="http//www.caracasdigital.com/">Inicio</a></span> <i class="td-icon-right td-bread-sep"></i> 
        	
        		<!-- <span><a title="Ver todas las publicaciones en Seguridad" class="entry-crumb" href="https://www.itwarelatam.com/category/corporativo/seguridad/">Seguridad</a></span> <i class="td-icon-right td-bread-sep"></i> 

        		<span><a title="Ver todas las publicaciones en Ciberseguridad" class="entry-crumb" href="https://www.itwarelatam.com/category/corporativo/seguridad/ciberseguridad/">Ciberseguridad</a></span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
 				-->
        		<span class="td-bred-no-url-last">{{ $noticia[0]->titulo }}</span>
        	</div>
    </div>

@if(isset($noticia[0]->img_portada))
        <div class="td-post-header-holder td-image-gradient">
            <div class="td-post-featured-image"><a href="#" data-caption="" class="td-modal-image">

                

                   <?php
                      if(isset($noticia[0]->img_portada))
                      {
                         
                         //$r1='http://192.168.0.6:8000/noticias/portada/'.$noticia[0]->img_portada;      
                         //$r2='http://192.168.0.6:8000/noticias/'.$noticia[0]->img_portada;      

                       if(url_exists("http://www.caracasdigital.com/noticias/portada/".$noticia[0]->img_portada))
                        {
                         
                         ?>
                         

                         <img width="1000" height="533" class="entry-thumb td-animation-stack-type0-2" src="http://www.caracasdigital.com/noticias/portada/{{@$noticia[0]->img_portada}}" srcset="http://www.caracasdigital.com/noticias/portada/{{@$noticia[0]->img_portada}}" sizes="(max-width: 1000px) 100vw, 1000px" alt="" title="">

                        <?php 
                             
                             }else if(file_exists(asset('noticias/'.$noticia[0]->img_portada)))
                             {
                         ?>

                            <img width="1000" height="533" class="entry-thumb td-animation-stack-type0-2" src="{{ asset('noticias/'.$noticia[0]->img_portada) }}" srcset="{{ asset('noticias/'.$noticia[0]->img_portada) }}" sizes="(max-width: 1000px) 100vw, 1000px" alt="" title="" > 
                         
                         
                        <?php

                         }else
                         {
                                                  
                         ?>
                         <img width="1000" height="533" class="entry-thumb td-animation-stack-type0-2" src="{{ asset('noticias/portada/'.$noticia[0]->img_portada) }}" srcset="{{ asset('noticias/portada/'.$noticia[0]->img_portada) }}" sizes="(max-width: 1000px) 100vw, 1000px" alt="" title="" > 

                           
                         
                         
                        <?php
                         }

                         }
                        ?>
            </a></div>
            <header class="td-post-title">
                                <h1 class="entry-title">{{ $noticia[0]->titulo }}</h1>

                

                <div class="td-module-meta-info">
                    <div class="td-post-author-name"><div class="td-author-by">Por</div> <a href="#">Caracas Digital</a><div class="td-author-line"> - </div> </div>                    <span class="td-post-date td-post-date-no-dot"><time class="entry-date updated td-module-date" datetime="2020-12-04T10:10:42+00:00">{{ $noticia[0]->ffecha }}</time></span>                                                        </div>

            </header>
        </div>
@else



@endif

    </div>

