@extends('frontend.layouts.home')
@inject('dateFormat', 'App\Services\DateService')
@section('content')
<body class="home page-template-default page page-id-156 listing-skeleton-view-grid_view wpb-js-composer js-comp-ver-6.4.1 vc_responsive" data-submitlink="/submit-listing/" data-sliderstyle="style2" data-defaultmaplat="0" data-defaultmaplot="-0" data-lpsearchmode="keyword" data-maplistingby="geolocaion" >
	<input type="hidden" id="lpNonce" name="lpNonce" value="11a180ea92" /><input type="hidden" name="_wp_http_referer" value="/" />    <input type="hidden" id="start_of_weekk" value="1">
	<div id="page"  data-detail-page-style="lp_detail_page_styles1" data-lpattern="with_region" data-sitelogo="/images/logo.png" data-site-url="/" data-ipapi="ip_api" data-lpcurrentloconhome="1" data-mtoken="0" data-mtype="openstreet" data-mstyle="mapbox.streets-basic"  class="clearfix lp_detail_page_styles1">
        <div class="pos-relative header-front-page-wrap 1">
            <div class="header-container  3  lp-header-bg " style="">                    
                <!--================================full width with blue background====================================-->
                <header class="header-without-topbar header-normal pos-relative lp-header-full-width">
                    <div class="lp-header-overlay"></div>
                    <div id="menu" class="small-screen">
                        <a href="/submit-listing/" class="lpl-button lpl-add-listing-loggedout">Anunciate</a>
                        <a class="lpl-button lp-right-15 app-view-popup-style" data-target="#app-view-login-popup">Sign In</a>
                    </div>
                    <div class="lp-menu-bar header-bg-color-class">
                        <div class="fullwidth-header">
                            <div class="row">
                                <div class="col-md-2 col-xs-6 lp-logo-container">
                                    <div class="lp-logo">
                                        <a href="/">
                                            <img src="/images/logo.png" alt="image" />
                                        </a>
                                    </div>
                                </div>
                                <div class="header-right-panel clearfix col-md-10 col-sm-10 col-xs-12">
                                    <div class="col-xs-6 mobile-nav-icon">
                                        <a href="#menu" class="nav-icon">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>
                                    </div>
                                    <div class="col-md-9 col-xs-12 lp-menu-container clearfix pull-right">
                                        <div class="pull-right">
                                            <div class="lp-joinus-icon">
                                                <div class="lp-join-now">
                                                    <span>
                                                        <img class="icon icons8-contacts" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADNElEQVRoge2ZLWhbURTHn3iig8IiIiomIgqrqJiomJgIrCKiomKig4iKioiKioiJiEJExURFRGEbRERMVERkENhE5BgTGUxEVERkUBERURFR8Zu45+5durzk3feRm7H8IRB455z3u9/3nOd5a6317wjYAcrAOdAEroAqcAhsuOabK8AHKsBX5qsP7LrmnSlgE+gasCMZhRpwDJwCDeBGnk+Bt8COa/Y/AjaAn0YDDgA/xNYH3j8YoUaY/VIlPQvwHdiKYO8De0AdGItvcxms86AKwL38rOe9bAoTacyzLBijglQE4jpBjHOJ8TFNNluItkAcJ4ixKzGGKaJZQ/QEopgwDgApYcUC0NtpIWEc5w3R227shQrkVqEhn4ThdYIYTyXGrzTZbCH04fYmQYznEqOfJpstRFUg3qUQ4zJNNluIA4H4nCDGtcQop8lmC1ESiElM/7zcCgD20+azAdE33lpMfx+4kBjttPlsQAYCETu/AIoSo5cmmy1E4vmNylcgwX0tsVDpLMAQqMbwr4mv88XuAx0BuYnhr6/wXVwnV8Aj4IcAvbDweyk+37LksxKqUgJQt/Cpi89VlmxWMnaeCZCLYJ8zplVxCYjRRZCbdObNd1lXOiFzt+WGieC6ohuTn2GTMxoBsOeCda5Qta2pATkGTlAFioL8HxnPR66ZQ2WcCQPCpbNKdzn6IhFcAPOow7ItozBGnRUVYHulG0JQDZkusNvSdqxSydTzPA9VOdTTaWGCBLSMKeh+wcsoNI0pBXARwa9m2N9LjOVWGlHnwCuCO5aGaROUT4/m+O8bdq0HndAFjsjyGwqq6n5GUHgGdTpfAttiUzeeNVBnS15+JbHVqolPAVUInxjPxqhS6sJbgm0jysCt8aIB6pvH5gzbU+COcE2Bs5COqhDUynRH/WUbpwE+6oONVh84jOC3I6PTkd4dy/86EbJJ1Ce6vvHe1qxOs2mIXgd3wEnsQPHfXzZGt0ecnIUgBR0ia8CFUAfoUFjsslDgCcHiK2XEaMOj04QpNgVzgg84X7LDs5MxzaMvfuCDtVPGQu2GAC0bJ3OrXTXdRm1EbmEo93ocd2TXWut/1W9KptrZf/2YyAAAAABJRU5ErkJggg==" alt="contacts">            
                                                    </span>
                                                    <a class="app-view-popup-style" data-target="#app-view-login-popup">Sign In</a>
                                                </div>
                                            </div>
                                            <div class="pull-right lp-add-listing-btn">
                                                <ul>
                                                    <li>
                                                        <a href="/submit-listing/">
                                                            <i class="fa fa-plus"></i>
                                                            Anunciate
                                                        </a>                                                    
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pull-right padding-right-10">
                                            <div class="lp-menu menu"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ../menu-bar -->
                </header>
                <!--==================================Header Close=================================--><!-- Login Popup style2 -->
                <div class="modal fade style2-popup-login" id="app-view-login-popup" role="dialog" style="overflow: visible !important; opacity: 1;">
                    <div class="modal-dialog">                                                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="login-form-pop-tabs clearfix">
                                    <ul>
                                        <li><a href="#" class="signInClick active">Sign In</a></li>
                                        <li><a href="#" class="signUpClick">Sign Up</a></li>                                                                    
                                    </ul>
                                    <a class="md-close" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>                                                                    
                                </div>                                                                
                            </div>
                            <div class="modal-body">                                                                
                                <div class="lp-border-radius-8 login-form-popup-outer">
                                    <div class="siginincontainer2">
                                        <form id="login" class="form-horizontal margin-top-30"  method="post" data-lp-recaptcha="" data-lp-recaptcha-sitekey="">
                                            <p class="status"></p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="lpusername" name="lpusername" placeholder="UserName/Email"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="lppassword" name="lppassword" placeholder="Password"/>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox clearfix">
                                                    <input id="check1" type="checkbox" name="remember" value="yes">
                                                
                                                    <a class="forgetPasswordClick pull-right" >Forgot Password</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Sign in" class="lp-secondary-btn width-full btn-first-hover" />
                                            </div>
                                            <input type="hidden" id="security" name="security" value="b387a31ac2" /><input type="hidden" name="_wp_http_referer" value="/" />							
                                        </form>
                                    </div>
                                    <div class="siginupcontainer2">
                                        <form id="register" class="form-horizontal margin-top-30"  method="post" data-lp-recaptcha="" data-lp-recaptcha-sitekey="">
                                            <p class="note">nota: tener estos datos verificados no significa que tenga una cuenta, hasta que publique un anuncio no se le asignará un nombre de usuario y contraseña</p>
                                            <p class="status"></p>
                                            <div class="form-group">
                                                <lavel>país</lavel>								   
                                                <select class="form-control" id="national">
                                                    <option value="1">Columbia</option>
                                                    <option value="2">México</option>
                                                    <option value="3">Brasil</option>
                                                </select>
                                            </div>
                                            <div class="form-group">	
                                                <lavel>Teléfono (10 dígitos)</lavel>								   
                                                <input type="text" class="form-control" id="telephone" name="telephone"  placeholder="Número de teléfono"/>
                                            </div>
                                            <div class="form-group">							
                                                <lavel>Correo electronico</lavel>					
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico"/>
                                            </div>
                                            <div class="form-group">	
                                                <input type="checkbox" class="form-control" id="smsallow" name="smsallow""/>
                                                <div class="inline-lavel">
                                                    <lavel>Acepto recibir comunicaciones por SMS.</lavel>								   									
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input id="lp_usr_reg_btn" type="submit" value="Siguente paso" class="lp-secondary-btn width-full btn-first-hover" />
                                            </div>
                                            <input type="hidden" id="security2" name="security2" value="11ae3f07df" /><input type="hidden" name="_wp_http_referer" value="/" />							
                                        </form>
                                    </div>
                                    <div class="forgetpasswordcontainer2">
                                        <form class="form-horizontal margin-top-30" id="lp_forget_pass_form" action="#"  method="post">
                                            <p class="status"></p>
                                            <div class="form-group">
                                                <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="Get New Password" class="lp-secondary-btn width-full btn-first-hover" />
                                                <input type="hidden" id="security3" name="security3" value="28763ecba2" /><input type="hidden" name="_wp_http_referer" value="/" />								</div>
                                        </form>
                                        <div class="pop-form-bottom">
                                            <div class="bottom-links">
                                                <a class="cancelClick" >Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Popup -->								
                <div class="app-view-popup-style" data-target="#app-view-login-popup">
                    <!--ajax based content-->
                </div>
                <!-- ../Login Popup -->
                <div class="md-overlay"></div> <!-- Overlay for Popup -->

                <!-- top notificaton bar -->
                <div class="lp-top-notification-bar"></div>
                <!-- end top notification-bar -->	

                <!-- popup for quick view --->		
                <div class="md-modal md-effect-3" id="listing-preview-popup">
                    <div class="container">
                        <div class="md-content ">
                            <div class="row popup-inner-left-padding ">
                            </div>
                        </div>
                    </div>
                    <a class="md-close widget-map-click"><i class="fa fa-close"></i></a>
                </div>
                <div class="md-overlay content-loading"></div>
                <div class="md-modal md-effect-map-btn" id="grid-show-popup">
                    <div class="container">
                        <div class="md-content ">
                            <div class="row grid-show-popup" data-loader="/images/classic/content-loader.gif">
                                <img src="/images/classic/content-loader.gif" />
                            </div>
                        </div>
                    </div>
                    <a class="md-close widget-map-click"><i class="fa fa-close"></i></a>
                </div>

                <!--hidden google map-->
                <div id="lp-hidden-map" style="width:300px;height:300px;position:absolute;left:-300000px"></div>				   
                <div class="lp-home-banner-contianer lp-home-banner-with-loc" style="height:610px;">
                    <div class="page-header-overlay"></div>
                    <div class="img-curtasy">
                        <p>Image courtesy of <span><a href=""> <i class="fa fa-angle-right"></i></a></span></p>
                    </div>          
                    <div class="lp-home-banner-contianer-inner ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center lp_auto_loc_container">
                                    <h1 data-locnmethod="withip">Busca en  <span class="lp-dyn-city">Your City</span></h1>
                                    <p class="lp-banner-browse-txt">Encuentra todos tus mas grandes placeres</p>
                                </div>
                                <div class="col-md-8 col-xs-12 col-md-offset-2 col-sm-offset-0">
                                    <div class="lp-search-bar clearfix">
                                        @include('frontend.layouts.searchfrm')                   
                                    </div>				
                                    <div class="text-center lp-search-description">
                                        <p>Solo estas viendo? Déjanos sugerirte lo mas &quot;hot&quot; del momento!</p>		
                                        <img src="/images/classic/banner-arrow.png" alt="banner-arrow" class="banner-arrow">		 				 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>		   			
                </div><!-- ../Home Search Container -->
            </div>
        </div>
        <div class="home-categories-area banner-view-classic new-banner-view-category-st">
            <div class="lp-section-row margin-bottom-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="lp-home-categoires padding-left-0 banner-default-view-category3">
                                <li><a href="/listing-category/hoteles/" class="lp-border-radius-5"><span>Hoteles</span></a></li>
                                <li><a href="/listing-category/masajes/" class="lp-border-radius-5"><span>Masajes</span></a></li>
                                <li><a href="/listing-category/escorts/mujeres/" class="lp-border-radius-5"><span>Mujeres</span></a></li>
                                <li><a href="/listing-category/sex-shop/" class="lp-border-radius-5"><span>Sex Shops</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div  id="lp_60c3da7b5a1be" class="lp-section-row   ">
                <div class="lp_section_inner  clearfix "  style="background-repeat: no-repeat;">
                    <div class="clearfix container">
                        <div class="row lp-section-content clearfix">
                            <div class="lp-section-title-container text-center ">
                                <h2 style="color:"> Populares</h2>
                                <div style="color:" class="lp-sub-title">Lo mas visitado del momento</div>
                            </div>
                            <div class="padding-top-40 padding-bottom-40 clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="listing-simple listing_grid_view listingcampaings">
                                                <div class="lp-list-page-grid row" id="content-grids" >
                                                    <div class="md-overlay"></div>
                                                </div>
                                            </div>							
                                            <div class="col-md-4 col-sm-6 promoted lp-grid-box-contianer grid_view6 grid_view_s5 card1 lp-grid-box-contianer1 listing-grid-view2-outer" data-title="Esmeralda &#8211; Fitness" data-postid="184"   data-lattitue="25.6929895" data-longitute="-100.1712571" data-posturl="/listing/esmeralda-escort-de-lujo-fitness/">
                                                <div class="lp-grid-box">
                                                    <div class="lp-grid-box-thumb-container" >
                                                        <div class="hide">
                                                            <span class="gaddress">Carr. Libre Monterrey - Reynosa 1340, Valle Soleado, 67114 Guadalupe, N.L.</span>
                                                        </div>
                                                        <div class="lp-grid-box-thumb">
                                                            <div class="show-img">
                                                                <a href='listing/esmeralda-escort-de-lujo-fitness/' >
                                                                    <img src='/images/custom/a2.jpg' />
                                                                </a>									
                                                            </div>
                                                            <div class="hide-img listingpro-list-thumb">
                                                                <a href='/listing/esmeralda-escort-de-lujo-fitness/' >
                                                                    <img src='/images/custom/a2.jpg' />
                                                                </a>					
                                                            </div>
                                                            <div class="lp-grid6-status">
                                                                <a class="status-btn"><span class="grid-closed status-red li-listing-clock-outer">Cerrado!</span> 
                                                                </a>
                                                            </div>	
                                                        </div>
                                                        <div class="lp-grid-box-quick">
                                                            <ul class="lp-post-quick-links clearfix">
                                                                <li class="pull-left">
                                                                    <a href="#" data-post-type="grids" data-post-id="184" data-success-text="Guardado" class="status-btn add-to-fav lp-add-to-fav">
                                                                        <i class="fa fa-bookmark-o"></i> <span>Guardar</span>
                                                                    </a>
                                                                </li>                                                            
                                                            </ul>
                                                        </div>
                                                        <div class="lp-grid6-top-container">
                                                            <div class="lp-grid6-top-container-inner">
                                                                <div class="post-row price-range">
                                                                    <ul class="list-style-none post-price-row line-height-16">
                                                                        <li>
                                                                            <span class="post-rice">
                                                                                <span class="text">Price Range</span>
                                                                                1500
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="lp-h4">
                                                                    <a href="/listing/esmeralda-escort-de-lujo-fitness/">
                                                                        <span class="listing-pro">Ad</span>Esmeralda &#8211; Fi..
                                                                        <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class="fa fa-check"></i> </span>											
                                                                    </a>
                                                                </h4>	
                                                                <div class="lp-listing-cats">			
                                                                    <a href="/list-tags/escort/">
                                                                        escort,
                                                                    </a>																																								
                                                                    <a href="/list-tags/esmeralda/">
                                                                        esmeralda,
                                                                    </a>                                                                                                        
                                                                    <a href="/list-tags/fitness/">
                                                                        fitness,
                                                                    </a>
                                                                </div>
                                                                <div class="lp-listing-logo-outer">                                                                
                                                                    <div class="lp-listing-logo">
                                                                        <img src="/images/custom/u1.png" alt="Listing Logo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <div class="pull-left lp-grid6-cate">											
                                                                    <a href="/listing-category/escorts/">
                                                                        Escorts
                                                                    </a>			
                                                                </div>
                                                                <div class="lp-grid-box-bottom-grid6">
                                                                    <div class="pull-right">
                                                                        <div class="show">
                                                                            <span class="cat-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                            <a href="/monterrey/">
                                                                                Monterrey
                                                                            </a>			
                                                                        </div>                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lp-new-grid-bottom-button">
                                                        <ul class="clearfix">
                                                            <li style="">
                                                                <a href="" data-lid="184" data-lat="25.6929895" data-lng="-100.1712571" class="show-loop-map-popup"><i class="fa fa-map-pin" aria-hidden="true"></i> Direction</a>
                                                            </li>
                                                            <li class="show-number-wrap" onclick="myFuction(this)" style="">
                                                                <p><i class="fa fa-phone" aria-hidden="true"></i> <span class="show-number">call Now</span><a href="tel:(81) 2310-0096" class="grind-number">(81) 2310-0096</a></p>
                                                            </li>                                                                                                    
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>						
                                            <div class="col-md-4 col-sm-6 promoted lp-grid-box-contianer grid_view6 grid_view_s5 card1 lp-grid-box-contianer1 listing-grid-view2-outer" data-title="Kira Kattan" data-postid="190"   data-lattitue="25.6929895" data-longitute="-100.1712571" data-posturl="/listing/kira-kattan/">
                                                <div class="lp-grid-box">
                                                    <div class="lp-grid-box-thumb-container" >
                                                        <div class="hide">
                                                            <span class="gaddress">Carr. Libre Monterrey - Reynosa 1340, Valle Soleado, 67114 Guadalupe, N.L.</span>
                                                        </div>
                                                        <div class="lp-grid-box-thumb">
                                                            <div class="show-img">
                                                                <a href='/listing/kira-kattan/' >
                                                                    <img src='/images/custom/a1.jpg' />
                                                                </a>	
                                                            </div>
                                                            <div class="hide-img listingpro-list-thumb">
                                                                <a href='/listing/kira-kattan/' >
                                                                    <img src='/images/custom/a2.jpg' />
                                                                </a>
                                                            </div>									
                                                            <div class="lp-grid6-status">
                                                                <a class="status-btn"><span class="grid-closed status-red li-listing-clock-outer">Cerrado!</span> 
                                                                </a>
                                                            </div>										
                                                        </div>
                                                        <div class="lp-grid-box-quick">
                                                            <ul class="lp-post-quick-links clearfix">
                                                                <li class="pull-left">
                                                                    <a href="#" data-post-type="grids" data-post-id="190" data-success-text="Guardado" class="status-btn add-to-fav lp-add-to-fav">
                                                                        <i class="fa fa-bookmark-o"></i> <span>Guardar</span>
                                                                    </a>
                                                                </li>                                                            
                                                            </ul>
                                                        </div>
                                                        <div class="lp-grid6-top-container">
                                                            <div class="lp-grid6-top-container-inner">
                                                                <div class="post-row price-range">
                                                                    <ul class="list-style-none post-price-row line-height-16">
                                                                        <li>
                                                                            <span class="post-rice">
                                                                                <span class="text">Price Range</span>
                                                                                2800
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="lp-h4">
                                                                    <a href="/listing/kira-kattan/">
                                                                        <span class="listing-pro">Ad</span>Kira Kattan..
                                                                    </a>
                                                                </h4>	
                                                                <div class="lp-listing-cats">																								
                                                                    <a href="/listing/kira/">
                                                                        Kira,
                                                                    </a>                                                                                                                                                                            
                                                                    <a href="/listing/masajes/">
                                                                        masajes,
                                                                    </a>                                                                                                                                                                            
                                                                    <a href="/listing/vip/">
                                                                        vip
                                                                    </a>
                                                                </div>
                                                                <div class="lp-listing-logo-outer">
                                                                    <div class="lp-listing-logo">
                                                                        <img src="/images/custom/u2.png" alt="Listing Logo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <div class="pull-left lp-grid6-cate">											
                                                                    <a href="/listing-category/escorts/">
                                                                        Escorts
                                                                    </a>
                                                                </div>
                                                                <div class="lp-grid-box-bottom-grid6">
                                                                    <div class="pull-right">
                                                                        <div class="show">
                                                                            <span class="cat-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                                            <a href="/location/monterrey/">
                                                                                Monterrey
                                                                            </a>
                                                                        </div>													
                                                                    </div>
                                                                </div>			
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="lp-new-grid-bottom-button">
                                                        <ul class="clearfix">
                                                            <li style="">
                                                                <a href="" data-lid="190" data-lat="25.6929895" data-lng="-100.1712571" class="show-loop-map-popup"><i class="fa fa-map-pin" aria-hidden="true"></i> Direction</a>
                                                            </li>
                                                            <li class="show-number-wrap" onclick="myFuction(this)" style="">
                                                                <p><i class="fa fa-phone" aria-hidden="true"></i> <span class="show-number">call Now</span><a href="tel:(81) 3410-7030" class="grind-number">(81) 3410-7030</a></p>
                                                            </li>																						
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>		 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lp_60c3da7b5e081" class="lp-section-row ">
                <div class="lp_section_inner  clearfix "  style="background-color: #eff3f6;background-repeat: no-repeat;">
                    <div class="clearfix container">
                        <div class="row lp-section-content clearfix">
                            <div class="lp-section-title-container text-center ">
                                <h2 style="color:"> Suscríbete y empieza a ganar hoy</h2>
                                <div style="color:" class="lp-sub-title">Cerca del 80% de los clientes utiliza este tipo de buscadores para encontrar servicios</div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="promotional-element listingpro-columns">
                                            <div class="listingpro-row padding-top-60 padding-bottom-60">
                                                <div class="promotiona-col-left">
                                                    <img src="/images/custom/columns.png" alt="">
                                                </div>
                                                <div class="promotiona-col-right">
                                                    <article>
                                                        <h3>1- Reclama tu insignia</h3>
                                                        <p>La mejor manera de empezar a ganar es reclamando tu insignia, ya que esto da mucha seguridad a los clientes.</p>
                                                    </article>
                                                    <article>
                                                        <h3>2- Promociona tu anuncio</h3>
                                                        <p>Promociona tus servicios dirigiéndote a los clientes que necesitan sus servicios o productos.</p>
                                                    </article>
                                                    <article>
                                                        <h3>3- Convierte tus visitas en dinero</h3>
                                                        <p>Convierte tus visitas en clientes regulares, que pagan por tus servicios.</p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lp_60c3da7b5e619" class="lp-section-row">
                <div class="lp_section_inner  clearfix container"  style="background-repeat: no-repeat;">
                    <div class="clearfix ">
                        <div class="row lp-section-content clearfix">
                            <div class="lp-section-title-container text-center ">
                                <h2 style="color:"> Nuestro Blog</h2>
                                <div style="color:" class="lp-sub-title">Checa lo más ardiente del momento</div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="lp-section-content-container lp-blog-grid-container row">
                                            <div class="col-md-4 col-sm-4 lp-blog-grid-box">
                                                <div class="lp-blog-grid-box-container lp-border lp-border-radius-8">
                                                    <div class="lp-blog-grid-box-thumb">
                                                        <a href="/millennials-y-puteros-por-que-los-clientes-de-la-prostitucion-son-cada-vez-mas-jovenes/">
                                                            <img src="/images/custom/b1.jpg" alt="blog-grid-1-410x308" />
                                                        </a>
                                                    </div>
                                                    <div class="lp-blog-grid-box-description text-center">
                                                        <div class="lp-blog-user-thumb margin-top-subtract-25">
                                                            <img class="avatar" src="http://1.gravatar.com/avatar/71dc3ffe3416a9f7cfbc17ae40e4ed5a?s=51&#038;d=mm&#038;r=g" alt="">
                                                        </div>
                                                        <div class="lp-blog-grid-category">
                                                            <a href="/category/escorts/" >Escorts</a>
                                                        </div>
                                                        <div class="lp-blog-grid-title">
                                                            <h4 class="lp-h4">
                                                                <a href="/millennials-y-puteros-por-que-los-clientes-de-la-prostitucion-son-cada-vez-mas-jovenes/">&#8216;Millennials&#8217; y puteros: por qué los clientes de la prostitución son cada vez más jóvenes</a>
                                                            </h4>
                                                        </div>
                                                        <ul class="lp-blog-grid-author">
                                                            <li>
                                                                <a href="/author/rexpirate/">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>rexpirate</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span>enero 23, 2021</span>
                                                            </li>
                                                        </ul><!-- ../lp-blog-grid-author -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 lp-blog-grid-box">
                                                <div class="lp-blog-grid-box-container lp-border lp-border-radius-8">
                                                    <div class="lp-blog-grid-box-thumb">
                                                        <a href="/hello-world/">
                                                            <img src="/images/custom/b2.jpeg" alt="blog-grid-1-410x308" />
                                                        </a>
                                                    </div>
                                                    <div class="lp-blog-grid-box-description text-center">
                                                        <div class="lp-blog-user-thumb margin-top-subtract-25">
                                                            <img class="avatar" src="http://1.gravatar.com/avatar/71dc3ffe3416a9f7cfbc17ae40e4ed5a?s=51&#038;d=mm&#038;r=g" alt="">
                                                        </div>
                                                        <div class="lp-blog-grid-category">
                                                            <a href="/category/uncategorized/" >Uncategorized</a>
                                                        </div>
                                                        <div class="lp-blog-grid-title">
                                                            <h4 class="lp-h4">
                                                                <a href="/hello-world/">Hello world!</a>
                                                            </h4>
                                                        </div>
                                                        <ul class="lp-blog-grid-author">
                                                            <li>
                                                                <a href="/author/rexpirate/">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>rexpirate</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span>enero 17, 2021</span>
                                                            </li>
                                                        </ul><!-- ../lp-blog-grid-author -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 lp-blog-grid-box">
                                                <div class="lp-blog-grid-box-container lp-border lp-border-radius-8">
                                                    <div class="lp-blog-grid-box-thumb">
                                                        <a href="/excited-news-about-arrival-fashion/">
                                                            <img src="/images/custom/b3.jpeg" alt="blog-grid-1-410x308" />
                                                        </a>
                                                    </div>
                                                    <div class="lp-blog-grid-box-description text-center">
                                                        <div class="lp-blog-user-thumb margin-top-subtract-25">
                                                            <img class="avatar" src="http://1.gravatar.com/avatar/71dc3ffe3416a9f7cfbc17ae40e4ed5a?s=51&#038;d=mm&#038;r=g" alt="">
                                                        </div>
                                                        <div class="lp-blog-grid-category">
                                                            <a href="/category/news/" >News</a>, <a href="/category/uncategorized/" >Uncategorized</a>
                                                        </div>
                                                        <div class="lp-blog-grid-title">
                                                            <h4 class="lp-h4">
                                                                <a href="/excited-news-about-arrival-fashion/">Excited news about arrival fashion.</a>
                                                            </h4>
                                                        </div>
                                                        <ul class="lp-blog-grid-author">
                                                            <li>
                                                                <a href="/author/rexpirate/">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>rexpirate</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span>enero 1, 2020</span>
                                                            </li>
                                                        </ul><!-- ../lp-blog-grid-author -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
</body>
<script type="text/javascript" src="frontend/js/pages/home.js"></script>
<script type='text/javascript' src='/frontend/js/js_composer_front.min.js' id='wpb_composer_front_js-js'></script>
@endsection
