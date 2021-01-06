<?php
include '../controller/categoriesC.php';
$categoriesC = new categoriesC();
$categories = $categoriesC->afficherCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">



<title>E-STORE</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/revslider.css" >
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="assets/include/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<link  rel="stylesheet" type="text/css"  media="all" href="assets/include/rs-plugin/css/addons/revolution.addon.paintbrush.css" />

	<link rel="stylesheet" type="text/css" href="assets/include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/include/rs-plugin/css/layers.css">


	<style>

		#rev_slider_143_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_143_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_143_1 .uranus.tparrows:hover:before{opacity:0.75}

	</style>

</head>

<body class="cms-index-index index">
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-7 col-sm-6">
              <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="assets/images/english.png" alt="language"> English <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/english.png" alt="language"> Français </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="assets/images/francais.png" alt="language"> Anglais </a></li>
                </ul>
              </div>
              <!-- End Header Language --> 
              
              <!-- Header Currency -->
              <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> TUN <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> DT - Dinar Tunisien </a></li>
                </ul>
              </div>
              <!-- End Header Currency -->
              
              <div class="welcome-msg hidden-xs"> Bienvenue Chez E-STORE </div>
            </div>
            <div class="col-xs-5 col-sm-6"> 
              
              <div class="top-cart-contain pull-right"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#">  My Cart <span class="cart_count">2</span></a></div>
              <div>
                <div class="top-cart-content" style="display: none;">
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                    <a href="#" class="view-cart" ><span>View Cart</span></a> </div>
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    <li class="item first">
                      <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/product.jpg"></a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access-->
                           <strong>1</strong> x <span class="price">100 dt</span>
                          <p class="product-name"><a href="#">timi &amp; leslie Sophia Diaper Bag...</a></p>
                        </div>
                      </div>
                    </li>
                    <li class="item last">
                      <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/product.jpg"></a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                          <p class="product-name"><a href="#">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--actions--> 
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          
          <div class="top-search">
            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="images/interstitial-close.png" alt="close"> </button>
                    </div>
                    <div class="modal-body">
                      <form class="navbar-form">
                        <div id="search">
                          <div class="input-group">
                            <input name="search" placeholder="Search" class="form-control" type="text">
                            <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                
                  <div class="myaccount"><a title="My Account" href="#"><span class="hidden-xs">Mon compte</span></a></div>
                  <div class="check"><a title="Checkout" href="#"><span class="hidden-xs">Paiment</span></a></div>
                  <div class="demo"><a title="Blog" href="afficherProduit.php"><span class="hidden-xs">Panier</span></a></div>
                  <!-- Header Company -->
                  
                  <!-- End Header Company -->
                  <div class="login"><a href="connexion.php"><span class="hidden-xs">Connexion</span></a></div>
                  
                </div>
                
              </div>
              <!-- End Header Top Links --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class="container">
          <!-- Header Logo -->
          <div class="logo"><a title="E-STORE" href="categories.php"><img alt="E-STORE" src="assets/images/logo.png"></a></div>
          <!-- End Header Logo --> 

        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>
     
          <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="afficherProduit.php"><span>Acceuil</span></a>
              
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
              <ul class="level1" style="display: none;">
                <li class="level1 first"><a href=""><span>Grid</span></a></li>
                <li class="level1 nav-10-2"> <a href=""> <span>Liste</span> </a> </li>
                <li class="level1 nav-10-3"> <a href=""> <span>Produit</span> </a> </li>
                <li class="level1 nav-10-4"> <a href=""> <span>Carte</span> </a> </li>
                <li class="level1 first parent"><a href=""><span>Paiment</span></a> 
                  <!--sub sub category-->
                  <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                    <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                    <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                  </ul>
                  <!--sub sub category--> 
                </li>
                <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                <li class="level1 first parent"><a href="dashboard.html"><span>Dashboard</span></a> 
                  <!--sub sub category-->
                  <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                    <li class="level2 nav-2-1-1 first"><a href="account_information.html"><span>Account Information</span></a></li>
                    <li class="level2 nav-2-1-5 last"><a href="address_book.html"><span>Address Book</span></a></li>
                    <li class="level2 nav-2-1-1 first"><a href="contact_information.html"><span>Contact Information</span></a></li>
                  </ul>
                  <!--sub sub category--> 
                </li>
                <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
                
                <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                <li class="level1"> <a href="forgot_password.html"> <span>Forgot Password</span> </a> </li>
                <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                  <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                    <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                  </ul>
                </li>
                <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
              </ul>
            </li>
            <li class="mega-menu"><a href="grid.html" class="level-top"><span>Women</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Handbags</span></a>
                            <ul class="level1">
                          
                              <li class="level2 nav-6-1-1"><a href="#/bags.html" class=""><span>Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/hobo-handbags.html" class=""><span>Hobo handbags</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>JACKETS</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/Jacket.html"><span>Denim Jacket </span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/vest.html"><span>Insulated Vest </span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/Jacket.html"><span>Varisity Jacket </span></a></li>



                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Shoes</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/flat-shoes.html"><span>Flat Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/boots.html"><span>Boots</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/heels.html"><span>Heels</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/sport-shoes.html"><span>Sport Shoes</span></a></li>


                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Jwellery</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/bracelets.html"><span>Bracelets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#"><span>Necklaces &amp; Pendent</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/pendants.html"><span>Pendants</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/pins-brooches.html"><span>Pins &amp; Brooches</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#/swimwear.html"><span>Swimwear</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/swimsuits.html"><span>Swimsuits</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/beach-clothing.html"><span>Beach Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/clothing.html"><span>Clothing</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/swimwear/bikinis.html"><span>Bikinis</span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
                    <div class="col-2">
                      <div class="menu_image"><a href="#" title=""><img src="images/menu_image.png" alt="menu_image"></a></div>
                    </div>
                  </div>
                  <!--level0-wrapper2--> </div>
              </div>
            </li>
            
            </ul>
            <ul class="nav hidden-xs menu-item menu-item-right">
              <li class="mega-menu"><a href="grid.html" class="level-top"><span>Men</span></a>
                <div  style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                  <div class="container">
                    <div class="level0-wrapper2">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Shoes</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/sport-shoes.html"><span>Sport Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/casual-shoes.html"><span>Casual Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/leather-shoes.html"><span>Leather Shoes</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/canvas-shoes.html"><span>canvas shoes</span></a></li>
                            </ul>
                          </li>
                      
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Jackets</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/coats.html"><span>Coats</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/formal-jackets.html"><span>Formal Jackets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/leather-jackets.html"><span>Leather Jackets</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#.html"><span>Watches</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/fasttrack.html"><span>Fasttrack</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/casio.html"><span>Casio</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/titan.html"><span>Titan</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#/sunglasses.html"><span>Sunglasses</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/sunglasses/ray-ban.html"><span>Ray Ban</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/sunglasses/fasttrack.html"><span>Fasttrack</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/sunglasses/police.html"><span>Police</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/sunglasses/oakley.html"><span>Oakley</span></a></li>
                            </ul>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="#/accesories.html"><span>Accesories</span></a>
                            <ul class="level1">
                              <li class="level2 nav-6-1-1"><a href="#/accesories/backpacks.html"><span>Backpacks</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/accesories/wallets.html"><span>Wallets</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/accesories/laptops-bags.html"><span>Laptops Bags</span></a></li>
                              <li class="level2 nav-6-1-1"><a href="#/accesories/belts.html"><span>Belts</span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <!--level0-wrapper2-->
                      
                    </div>
                  </div>
                </div>
              </li>
            <li class="mega-menu"><a class="level-top" href="grid.html"><span>Furniture</span></a>
              
            </li>
            <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>Kids</span></a></li>
            
            
          
          </ul>
          
          
       
    </div>
  </nav>
  <!-- end nav --> 
  
 <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap full-screen clearfix">

			<div id="rev_slider_143_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="paintbrush-addon" data-source="gallery" style="background:transparent;padding:0px;">
			<!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
				<div id="rev_slider_143_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
					<ul>	<!-- SLIDE  -->
						<li data-index="rs-361" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_paintbrush_bg2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-revaddonpaintbrush='{"size":200,"origsize":200,"blurAmount":10,"fadetime":600,"image":"include/rs-plugin/demos/assets/images/paintbrush_bg2.jpg","edgefix":10,"fixedges":true,"style":"round","blur":false,"scaleblur":false,"responsive":false,"disappear":true,"carousel":false}' data-revaddonpaintbrushedges="1">
							<!-- MAIN IMAGE -->
							<img src="assets/include/rs-plugin/demos/assets/images/paintbrush_bg2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							
								<!-- LAYER NR. 7 -->
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
								 id="slide-362-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['375','295','295','245']"
											data-width="360"
								data-height="3"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:-45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:0deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 5;background-color:rgb(255,255,255);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"> </div></div>

							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
								 id="slide-361-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['375','295','295','245']"
											data-width="360"
								data-height="3"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:-45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:0deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 5;background-color:rgb(255,255,255);">

					</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-1"
								 id="slide-361-layer-2"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['375','295','295','245']"
											data-width="360"
								data-height="3"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:-45deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 6;background-color:rgb(255,255,255);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="10" data-ye="-10"> </div></div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
								 id="slide-361-layer-1"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['310','230','240','208']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-150px;z:0;rX:0deg;rY:-45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:150px;rY:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color:#222; letter-spacing: 0px;font-family:Poppins;background-color:#f5f5f5;">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="10" data-xs="-20" data-xe="20" data-ys="0" data-ye="0">E-STORE <div class='frontcornertop'></div><div class='backcornertop'></div> </div></div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-"
								 id="slide-361-layer-9"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['378','298','298','248']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:150px;z:0;rX:0deg;rY:45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:-150px;rY:-45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,10,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 8; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="10" data-xs="20" data-xe="-20" data-ys="0" data-ye="0">TOUT EST SPORT <div class='frontcorner'></div><div class='backcorner'></div> </div></div>

						
						
						<!-- SLIDE  -->
						<li data-index="rs-362" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_pb_bw.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-revaddonpaintbrush='{"size":100,"origsize":100,"blurAmount":3,"fadetime":2000,"image":"http:\/\/builder.themepunch.com\/wp-content\/uploads\/2018\/06\/paintbrush_bg3.jpg","edgefix":10,"fixedges":true,"style":"round","blur":false,"scaleblur":false,"responsive":false,"disappear":true,"carousel":false}' data-revaddonpaintbrushedges="1">
							<!-- MAIN IMAGE -->
							<img src="assets/include/rs-plugin/demos/assets/images/pb_bw.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 7 -->
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-2"
								 id="slide-362-layer-11"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['375','295','295','245']"
											data-width="360"
								data-height="3"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:-45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:0deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 5;background-color:rgb(255,255,255);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="-10" data-ye="10"> </div></div>

							<!-- LAYER NR. 8 -->
							<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-1"
								 id="slide-362-layer-2"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['375','295','295','245']"
											data-width="360"
								data-height="3"
								data-whitespace="nowrap"

								data-type="shape"
								data-responsive_offset="on"

								data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;rZ:45;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"rZ:-45deg;opacity:0;fb:10px;","ease":"Back.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 6;background-color:rgb(255,255,255);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="5" data-xs="0" data-xe="0" data-ys="10" data-ye="-10"> </div></div>

							<!-- LAYER NR. 9 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
								 id="slide-362-layer-1"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['310','230','240','208']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-150px;z:0;rX:0deg;rY:-45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:150px;rY:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 7; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="10" data-xs="-20" data-xe="20" data-ys="0" data-ye="0">Avec Vous Peut N'importe Où Vous êtes <div class='frontcornertop'></div><div class='backcornertop'></div> </div></div>

							<!-- LAYER NR. 10 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-10"
								 id="slide-362-layer-9"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['378','298','298','248']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:150px;z:0;rX:0deg;rY:45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:-150px;rY:-45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 8; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
					 <div class='frontcorner'></div><div class='backcorner'></div> </div>

							<!-- LAYER NR. 11 -->
							<a class="tp-caption   tp-resizeme rs-parallaxlevel-13"
					 href="https://revolution.themepunch.com/direct-customer-benefits/" target="_blank"			 id="slide-362-layer-4"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['730','650','650','570']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-actions=''
								data-responsive_offset="on"

								data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"y:100px;z:0;rX:-45deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"y:50px;rX:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Power1.easeInOut","to":"o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(255,255,255);"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[2,2,2,2]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[7,7,7,7]"

								style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 28px; font-weight: 700; color: #ffffff; letter-spacing: 5px;font-family:Poppins;border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;cursor:pointer;text-decoration: none;"></a> 

							<!-- LAYER NR. 12 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
								 id="slide-362-layer-3"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['600','520','520','430']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:100px;z:0;rX:-45deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"y:50px;rX:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 10; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-363" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/transparent.png"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-revaddonpaintbrush='{"size":250,"origsize":250,"blurAmount":10,"fadetime":600,"image":"http:\/\/builder.themepunch.com\/wp-content\/uploads\/2018\/06\/ferrari.jpg","edgefix":10,"fixedges":true,"style":"butt","blur":false,"scaleblur":false,"responsive":true,"disappear":false,"carousel":false}' data-revaddonpaintbrushedges="1">
							<!-- MAIN IMAGE -->
							<img src="assets/include/rs-plugin/demos/assets/images/transparent.png"  style='background:#f6b300' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 13 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
								 id="slide-363-layer-1"
								 data-x="['center','center','center','center']" data-hoffset="['-29','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['309','230','240','208']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"x:-150px;z:0;rX:0deg;rY:-45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:150px;rY:45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="10" data-xs="-20" data-xe="20" data-ys="0" data-ye="0">Votre Commande Dans Vos Mains  <div class='frontcornertop'></div><div class='backcornertop'></div> </div></div>

							<!-- LAYER NR. 14 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-10"
								 id="slide-363-layer-9"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['top','top','top','top']" data-voffset="['378','298','298','248']"
											data-fontsize="['50','50','40','25']"
								data-lineheight="['60','60','50','35']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:150px;z:0;rX:0deg;rY:45deg;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Back.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"x:-150px;rY:-45deg;opacity:0;fb:10px;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[5,5,5,2]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[10,10,10,10]"

								style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;background-color:rgb(0,0,0);">
					<div class="rs-looped rs-slideloop"  data-easing="Linear.easeNone" data-speed="10" data-xs="20" data-xe="-20" data-ys="0" data-ye="0"> Dans 24H ! <div class='frontcorner'></div><div class='backcorner'></div> </div></div>

							<!-- LAYER NR. 15 -->
						

							<!-- LAYER NR. 16 -->
							
						</li>
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div><!-- END REVOLUTION SLIDER -->

		</section>

  
  <!-- end Slider -->
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products container">
      <div class="new_title center">
        <h2>EQUIPES</h2>
        <div class="starSeparator"></div>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          
          <?php foreach($categories as $categorie){?>
          <!-- equipe national -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="lodo de l'esperance" href="#"> <img alt="lodo de l'esperance" src="assets/products-images/<?= $categorie['img'];?>"> </a>
                  
                  
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="maillot equipe national" href="clubPage.php?id_categories=<?php echo $categorie['id_categories']; ?>"><?= $categorie['nom_categories'];?> </a> </div>
                  <div class="item-content">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <?php } ?>
          <!-- End Item --> 
          
          <!-- club africain-->
          <!--<div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="logo club africain" href="#"> <img alt= "logo club africain" src="assets/products-images/africain.jpg"> </a>
                 
                  
                  
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="jacket CA" href="clubPage.php"> CLUB AFRICAIN</a> </div>
                  <div class="item-content">
        
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="lodo de l'esperance" href="#"> <img alt="lodo de l'esperance" src="assets/products-images/esperance.jpg"> </a>
                  
                  
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="maillot equipe national" href="#"> Esperance de Tunis </a> </div>
                  <div class="item-content">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="logo de l'ESS" href="#"> <img alt="logo de l'ESS" src="assets/products-images/etoile.jpg"> </a>
                  </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="ESS" href="#"> Etoile Sportif De Sahel </a> </div>
                  <div class="item-content">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="logo CSS" href="#"> <img alt="logo CSS" src="assets/products-images/CSS.jpg"> </a>
                 
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Club Sportif Sfaxien </a> </div>
                  <div class="item-content">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="logo CAB" href="#"> <img alt="logo CAB" src="assets/products-images/CAB.jpg"> </a>
                     
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> </a>Club Sportif de Bizerte </div>
                  <div class="item-content">
                  </div>
                </div>
              </div>
            </div>
          </div>
            --> 
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider -->
  
   <!--Promotion Banner-->
  <div class="offer-slider parallax parallax-2">
    <div class="container">
      <h2> 
        OFFRES DU JOUR</h2>
         <div class="starSeparator"></div>
      <p>Superb Men's clothing store is updated regularly with offers.</p>
     <div class="box-timer">
                      <div class="countbox_1 timer-grid"></div>
                    </div>
      <a href="#" class="shop-now">Shop Now</a> </div>
  </div>
  <!--Promotion Banner End--> 
  
  <div class="container">
    <div class="row">
      <div class="products-grid">
        <div class="col-md-12">
          <div class="std">
            <div class="home-tabs wow bounceInUp animated">
              <div class="producttabs">
                <div id="thm_producttabs1" class="thm-producttabs"> 
                  <!--<h3></h3>-->
                  <div class="thm-pdt-container"> 
                    <!--Begin Tab Nav -->
                    <div class="thm-pdt-nav">
                      <ul class="pdt-nav">
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li>
                        <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">New Arrivals</span></li>
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="featured" data-href="pdt_featured"><span class="title-navi">Featured</span></li>
                      </ul>
                    </div>
                    <!-- End Tab Nav --> 
                    <!--Begin Tab Content -->
                    <div class="thm-pdt-content wide-5">
                      <div class="pdt-content is-loaded pdt_best_sales">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                       
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                      
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                      
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item last item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                   
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                            <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                         <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                            
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate last">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                         <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="pdt-content pdt_featured is-loaded">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                      <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                          <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate last">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="products-images/product.jpg" alt="Retis lapen casen"></a>
                                      <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
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
  
 
  
  <!-- Latest Blog -->
  <section class="latest-blog wow bounceInUp animated">
    <div class="container">
      <div class="new_title center">
        <h1>Latest Blog</h1>
        <div class="starSeparator"></div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
          <div class="blog_post">
                  <div class="thumbnail">
               <h2> <a href="#">Lorem ipsum dolor sit amet, consect adipiscing elit</a> </h2>
					<div class="featured-img">
					<span class="gradient-overlay"></span>
					 <img src="images/blog-img1.jpg" alt="blog post">
					
					</div>
                   
                    </div>
                    <div class="entry-meta">
			<a href="#">
  <span class="author-avatar byline"><img alt="" src="assets/images/admin-photo.jpg" class="avatar avatar-96 photo">By John Doe</span> <span class="timestamp">January 26, 2016</span>
</a>

			

		</div>
                    <p> Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.</p>
                    <p> Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend... </p>
                   <a href="#" class="continue-btn">Continue Reading <span>›</span></a>
                  </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
          <div class="blog_post">
                  <div class="thumbnail">
               <h2> <a href="#"> Pellentesque aliquet, sem eget laoreet ultrices</a> </h2>
					<div class="featured-img">
					<span class="gradient-overlay"></span>
					 <img src="assets/images/blog-img2.jpg"  alt="blog post 2">
					
					</div>
                   
                    </div>
                    <div class="entry-meta">
			<a href="#">
  <span class="author-avatar byline"><img alt="" src="assets/images/admin-photo1.jpg"  class="avatar avatar-96 photo">By Saraha Smith</span>
</a>
<span class="timestamp">January 20, 2016</span>
			

		</div>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales.</p>
                    <p> Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis... </p>
                   <a href="#" class="continue-btn">Continue Reading <span>›</span></a>
                  </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Latest Blog -->
  
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="our-features-box">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box red_bg"> <span class="icon-globe-alt"></span>
            <div class="content">
              <h3>FREE SHIPPING WORLDWIDE</h3>
            </div>
          </div>
        </li>
                <li>
          <div class="feature-box yellow_bg"> <span class="icon-support"></span>
            <div class="content">
              <h3>24/7 CUSTOMER SUPPORT</h3>
            </div>
          </div>
        </li>
          <li class="last">
          <div class="feature-box brown_bg"> <span class="icon-share-alt"></span>
            <div class="content">
              <h3>RETURNS AND EXCHANGES</h3>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
 <?php
 include_once 'footer.php'
?>
<!-- JavaScript --> 
<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/common.js"></script> 
<script type="text/javascript" src="assets/js/countdown.js"></script> 
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution-slider.js"></script> 
<script type="text/javascript" src="assets/js/revolution.extension.js"></script> 
  <script type="text/javascript">
var dthen1 = new Date("11/26/20 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
	
	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>

<script type="text/javascript">
					var tpj=jQuery;			
					var revapi4;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_4_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_4_1");
						}else{
							revapi4 = tpj("#rev_slider_4_1").show().revolution({
								sliderType:"standard",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"zeus",
										enable:true,
										hide_onmobile:true,
										hide_under:750,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									bullets: {
										enable:true,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:30,
										space:5,
										tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[768,1024,778,480],
								gridheight:[890,600,500,400],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>
				<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="assets/include/rs-plugin/js/addons/revolution.addon.paintbrush.min.js"></script>

	<!-- SLIDER REVOLUTION EXTENSIONS  -->
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<!-- ADD-ONS JS FILES -->
	<script>
		var revapi143,
			tpj;
(function() {
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

	function onLoad() {
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
				if(tpj("#rev_slider_143_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_143_1");
				}else{
					revapi143 = tpj("#rev_slider_143_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"include/rs-plugin/js",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							 mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:false,
								hide_onleave:false,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						parallax: {
							type:"3D",
							origo:"slidercenter",
							speed:400,
						  speedbg:0,
						  speedls:0,
							levels:[5,10,15,20,25,30,35,40,-2,-4,-6,-8,-10,-12,-14,55],
							ddd_shadow:"off",
							ddd_bgfreeze:"on",
							ddd_overflow:"hidden",
							ddd_layer_overflow:"hidden",
							ddd_z_correction:150,
							disable_onmobile:"on"
						},
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
	}; /* END OF revapi call */

	if(typeof ExplodingLayersAddOn !== "undefined") ExplodingLayersAddOn(tpj, revapi143);

	RevSliderPaintBrush(tpj, revapi143);
 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
	</script>

</body>
</html>
                
              
</body>
</html>
