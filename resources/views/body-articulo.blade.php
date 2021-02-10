
<?php 

//print_r($title);

?>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">/* CSS Document */

 .social-icons-ql li{
       list-style:none;
       float:left;
       width:40px;
       height:40px;
       line-height:45px;
       background:#000;
       text-align:center;
       margin:10px 5px;
   }
  
   .social-icons-ql li:nth-child(1){
       width:50px;
       height:50px;
       line-height:57px;       
       margin:5px 5px;
       background:#34558E;
   }
   
   .social-icons-ql li:nth-child(1) i{
       font-size:25px;
       
   }
  .social-icons-ql li:nth-child(2) {
   background:#25B8E6;#0198DE
}

.social-icons-ql li:nth-child(3) {
   background:rgba(0, 122, 181, 1);
}
.social-icons-ql li:nth-child(4) {
   background:#DC4A38;
}
.social-icons-ql li:nth-child(5) {
   background:#CC2028;
}

.social-icons-ql li:nth-child(6) {
   background:#E05929;
}
.social-icons-ql li:nth-child(7) {
   background:#EB4924;
}

   
   
   .social-icons-ql li i{
       color:#fff;
       font-size:20px;
   }</style>

<!---add link into header font fontawesome--->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<article id="post-29908" class="td-post-template-3 post-29908 post type-post status-publish format-standard has-post-thumbnail hentry category-ciberseguridad tag-cisco tag-estudio-de-resultados-de-seguridad tag-mike-hanley td-container-wrap" itemscope="" itemtype="https://schema.org/Article" style="margin-top: -10px;">
       
    

            
           
                
@include('portada-noticia')
                


    <div class="td-container">

        <div class="td-pb-row">
  
            <div class="td-pb-span8 td-main-content" role="main">
                
                 
                 <div class="td-ss-main-content">

                    @if(!isset($noticia[0]->img_portada ))
                    <div style="margin-top:-20px;  "> 
                       <h1 class="title">{{ $noticia[0]->titulo }}</h1>       
                        <div class="td-module-meta-info"> 
                            <div class="td-post-author-name"><div class="td-author-by">Por</div> <a href="#">Caracas Digital</a><div class="td-author-line"> - </div> </div>                    <span class="td-post-date td-post-date-no-dot"><time class="entry-date updated td-module-date" datetime="2020-12-04T10:10:42+00:00">{{ $noticia[0]->ffecha}}</time></span>     
                            </div> 
                     </div>  
                     @endif     

                        <div class="td-container">
                            

                            <div class="row">
                              

                                <ul class="social-icons-ql">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                             <li><a href="#"><i class="fa fa-stumbleupon"></i></a></li>
                           
                           </ul>
                            </div>
                        </div>

   @include('body-post-content')


    <footer>
                
                        <div class="td-post-source-tags">
                                            <ul class="td-tags td-post-small-box clearfix">

                                              <li><span>Etiquetas</span></li>

                                          @if(isset($eti_noticia))    

                                              <?php

                                             //print_r($eti_noticia);
                                               foreach( $eti_noticia as $row )
                                                { ?>

                                                       <li><a href="{{ URL::to('/') }}/etiqueta/{{ $row->etiqueta }}">{{$row->etiqueta}}  </a></li>

                                                    <?php } ?>
                                             

                                          @endif    
                                              <!-- <li><a href="https://www.itwarelatam.com/tag/estudio-de-resultados-de-seguridad/">Estudio de Resultados de Seguridad</a></li>
                                              <li><a href="https://www.itwarelatam.com/tag/mike-hanley/">Mike Hanley</a></li> -->

                                            </ul>        
                        </div>


                            <div class="container" >
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <ul class="social-icons-ql">
                                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                             <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                             <li><a href="#"><i class="fa fa-stumbleupon"></i></a></li>
                                       
                                       </ul>
                                   </div>
                              
                                </div>
                            </div>    

        <div class="td-post-sharing-bottom">

                     <div class="td-block-row td-post-next-prev">



                      @if(isset($cod[0]))     
                        <div class="td-block-span6 td-post-prev-post">
                        <div class="td-post-next-prev-content"><span>Art&iacute;culo anterior</span><a href="{{ URL::to('/') }}/{{$titulo[0]}}/{{ $cod[0] }}">{{$titulo[0]}}</a></div>
                        </div>
                      @else
                         <div class="td-block-span6 td-post-prev-post">
                                <div class="td-post-next-prev-content"><span>Ir al inicio</span><a href="{{ URL::to('/') }}">Inicio</a></div>
                        </div>

                       @endif 



                            <div class="td-next-prev-separator"></div>

                       @if(isset($cod[1]))     
                        <div class="td-block-span6 td-post-next-post">
                                <div class="td-post-next-prev-content"><span>Art&iacute;culo siguiente</span><a href="{{ URL::to('/') }}/{{$titulo[1]}}/{{ $cod[1] }}">{{$titulo[1]}}</a></div>
                        </div>
                      @else

                           <div class="td-block-span6 td-post-next-post">
                                <div class="td-post-next-prev-content"><span>Ir al inicio</span><a href="{{ URL::to('/') }}">Inicio</a></div>
                        </div>

                       @endif 

                     </div>        

                         <div class="author-box-wrap">
                            <a href="https://www.itwarelatam.com/author/admin/"><img alt="" src="https://secure.gravatar.com/avatar/251521b56f02f45115c47f11ead0044b?s=96&amp;d=blank&amp;r=g" srcset="https://secure.gravatar.com/avatar/251521b56f02f45115c47f11ead0044b?s=192&amp;d=blank&amp;r=g 2x" class="avatar avatar-96 photo td-animation-stack-type0-2" height="96" width="96" loading="lazy"></a><div class="desc"><div class="td-author-name vcard author"><span class="fn"><a href="https://www.itwarelatam.com/author/admin/">Contenidos Caracas Digital</a></span></div><div class="td-author-description">Contenido generado gracias a la colaboración de las agencias de prensa.</div>


                        <div class="td-author-social">

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
                            <a target="_blank" href="mailto:info@mediaware.org" title="Mail">
                                <i class="td-icon-font td-icon-mail-1"></i>
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
                        </span>

                    </div>


                        <div class="clearfix"></div></div>
                </div>       


         <span class="td-page-meta" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><meta itemprop="name" content="Contenidos ITware"></span>
         <meta itemprop="datePublished" content="2020-12-04T10:10:42+00:00"><meta itemprop="dateModified" content="2020-12-03T17:43:52-03:00">
         <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://www.itwarelatam.com/2020/12/04/lo-que-funciona-en-seguridad-no-es-lo-que-uno-puede-pensar/"><span class="td-page-meta" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://www.itwarelatam.com/wp-content/uploads/2017/06/itware_animado2.gif"></span><meta itemprop="name" content="ITware Latam"></span><meta itemprop="headline " content="Lo que funciona en seguridad no es lo que uno puede pensar"><span class="td-page-meta" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://i0.wp.com/www.itwarelatam.com/wp-content/uploads/2020/12/Cisco-Security.jpg?fit=1000%2C533&amp;ssl=1"><meta itemprop="width" content="1000"><meta itemprop="height" content="533"></span>    
     </footer>


           @include('body-articulos-more')  


    </div>
</div>




@include('body-anunciantes')






                            </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</article>