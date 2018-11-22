<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Home</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
                 
      <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
           
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>TECH_</strong>COMMERCE</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Home</a></li>
                    <!-- <li><a href="#features">products</a></li> !-->
                     <li><a href="#about-us">About Us</a></li>
                     <li><a href="#our-work">category</a></li>
                     <li><a href="#contact">Contact</a></li>
                      @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                 <li><a href="/panier">Panier</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <image src="/uploads/image/{{Auth::user()->image }} " style="width:30px ; height:30px ; float:left ; border-radius:50% ; margin-right:25px;">

                                {{ Auth::user()->name }} <span class="caret"></span>

                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>profile</a>

                                </li>

                            </ul>
                        </li>

                   @foreach($admins as $admins)
                   @if(Auth::user()->email == $admins->email)         
                   <li role="presentation"><a href="/admin">admin</a></li>
                   @endif
                   @endforeach 

                   @endif
                   
                     
             
                  </ul>

               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="img/first.jpg" alt="">
                  <div class="line"> 
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/second.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s"> 
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                    
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/third.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <h1>Welcome to TECH-COMMERCE website</h1>
              
               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
            </div>
         </div>
        
         <!-- ABOUT US -->
         <div id="about-us">
            <div class="s-12 m-12 l-6 media-container">
               <img src="img/about.jpg" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>We are<br> TECH-COMMERCE <br></h2>
               <p>TECH-COMMERCE is a Tunisian site that offers the online sale of laptop computers, desktop computers, screen, LED television, printers, scanners, video projectors, inverters and accessories.
             Order online at TECH-COMMERCE, it is the assurance of having an order delivered as soon as possible to the address of your choice.
               </p>
               <div class="about-us-icons">
             
               </div>
            </article>
         </div>

         <!-- OUR WORK -->
          <div id="our-work">
            <div class="line">
               <h2 class="section-title">Cathegory</h2>
               <div class="tabs">
                  
                  <div class="tab-item tab-active">
                    <a class="tab-label active-btn">Computers</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por1.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por2.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por3.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por4.jpg" alt=""></a> <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"></div></a> <a class="btn btn-default" href="/computers" role="button">see more &raquo;</a></div>

                      </div>
                    </div>  
                  </div>
                  
                  <div class="tab-item">
                    <a class="tab-label">Laptops</a>        
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por5.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por6.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por7.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por8.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"></div></a> <a class="btn btn-default" href="/laptops" role="button">see more &raquo;</a></div>

                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">phones</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/phone1.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/phones2.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/phone3.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/phone4.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                         <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"></div></a> <a class="btn btn-default" href="/phones" role="button">see more &raquo;</a></div>

                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">Printers</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por9.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por10.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por11.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por12.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"></div></a> <a class="btn btn-default" href="/printers" role="button">see more &raquo;</a></div>
 
                      </div>
                    </div>  
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">See more</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/mat4.jpg" alt=""></a>
                         <a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/mat1.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/mat2.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/mat3.jpg" alt=""></a><a class="btn btn-default" href="#" role="button">View details &raquo;</a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"></div></a> <a class="btn btn-default" href="/see_more" role="button">see more &raquo;</a></div>
 
                      </div>
                    </div>  
                  </div>
               </div>
            </div>
         </div>         
               <!-- ............................................   -->
            </div>
                    </div>  
                  </div>        
        
         </div>
    </div>
</div>   
         <!-- CONTACT -->
         <div id="contact">

    </style>  
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>TECH-COMMERCE</h3>
                     <address>
                        <p><strong>Adress:</strong> INSAT Centre Urbain Nord BP 676 - 1080 Tunis Cedex </p>
                        <p><strong>Country:</strong> Tunis</p>
                        <p><strong>E-mail:</strong> rabaaooui.islam@gmail.com  syrineba1607@gmail.com</p>
                     </address>
                     <br />
                     <h3>Social</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">TECH-COMMERCE</a></p>
                    
                  </div>
                 
                  <div class="s-12 m-12 l-5">
                    <h3>send e-mail for admin</h3>
                    <form class="customform" action="">
                      <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                      <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                      <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit Button</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
         <!-- MAP -->
         <div id="map-block">     

<!--<div style="width: 100%"><iframe width="100%" height="600" src="https://www.maps.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;coord=36.842962, 10.196256&amp;q=INSAT%20Centre%20Urbain%20Nord%20BP%20676%20-%201080%20Tunis%20Cedex+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/fr/mesurer-distance-surface-google-maps.html">distance à vol d'oiseau google</a></iframe></div><br /> !-->

      
           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d16.569872019090596!3d48.23131953825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>
         </div>!-->



        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCzTTdj_94GcEFKTrneIiB8m7xFPsMzQ7A'></script>
        <div style='overflow:hidden;height:400px;width:100%;'>
          <div id='gmap_canvas' style='height:450px;width:100%;'>


          
        </div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> 
        <a href='http://maps-generator.com/fr'>ajouter Google Map</a> 
        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=0b46dc63d76b2ec31f4339a0e29e3635186d1a28'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(36.85415713595153,10.212767322875953),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.85415713595153,10.212767322875953)});infowindow = new google.maps.InfoWindow({content:'<strong>insat</strong><br>INSAT Centre Urbain Nord BP 676<br>1080 Tunis<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
            </div>
            <div class="s-12 l-6">
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>