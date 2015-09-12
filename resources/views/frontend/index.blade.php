<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT Worker | responsive portfolio template</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,100%7CRoboto:400,700,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Bootstrap and Font Awesome css -->
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme stylesheet -->
    <link href="{{asset('frontend/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">

    <!-- owl carousel css -->

    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.css')}}" rel="stylesheet">

    <!-- CSS Animations -->
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/favicon.png')}}">

    <!-- Mordernizr -->
    <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="120">

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Điện Thoại</a>
            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#intro">Home</a>
                    </li>
                    <li><a href="#references">Trend</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div id="all">


        <!-- *** INTRO IMAGE ***
_________________________________________________________ -->
        <div id="intro" class="clearfix">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="carousel-caption">
                            <!-- <div data-animate="fadeInDown" class="logo">
                                <img src="img/logo-big.png" alt="logo" width="130">
                            </div><br><br> -->
                            <h1 data-animate="fadeInDown">Sentiment</h1><br><br>
                            <form>
                            	<div class="row">
	                            	<div class="col-md-2"></div>
	                            	<div class="col-md-8">
	                            			<input  type="text" class="form-control" placeholder="input the key word" value="" name="keyword">
	                                       
	                            	</div>
	                            	<div class="col-md-2"></div>

                            	</div><br><br>
                            	<div class="form-group">
                            			<button type="button" class="btn btn-primary btn-sm">
								          <span class="glyphicon glyphicon-search"></span> Search 
								        </button>
                            		</div><br><br><br><br><br>
                            	
                            </form>
                            <!-- <h2 data-animate="slideInUp">I grind HTML and CSS and then weld them with PHP into beautiful and efficient websites.</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- *** INTRO IMAGE END *** -->


        <!-- *** REFERENCES IMAGE ***
_________________________________________________________ -->
        <div class="section" id="references">
            <div class="container">
                <div class="col-sm-12">

                    <div class="mb20">
                        <center><h2 class="title" data-animate="fadeInUp">Trend</h2></center>

                        <center><p class="lead" data-animate="fadeInUp">I have worked on dozens of projects so I have picked only the latest for you.</p></center>
                    </div>

                    <ul id="filter" data-animate="fadeInUp">
                        <li class="active"><a href="#" data-filter="all">All</a>
                        </li>
                        <li><a href="#" data-filter="webdesign">Samsung</a>
                        </li>
                        <li><a href="#" data-filter="seo">Apple</a>
                        </li>
                        <li><a href="#" data-filter="marketing">LG</a>
                        </li>
                        <li><a href="#" data-filter="other">Sony</a>
                        </li>
                    </ul>

                    <div id="detail">

                        <span class="close">&times;</span> 

                        <div id="detail-slider"></div>

                        <div class="text-center">
                            <h1 id="detail-title">&nbsp;</h1>
                        </div>

                        <div id="detail-content"></div>

                    </div>
                    <!-- Reference detail -->

                    <div id="references-masonry" data-animate="fadeInUp">

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/s6-edge.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="reference-item" data-category="seo">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/iphone-6-plus.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="reference-item" data-category="marketing">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/lg-g4.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="reference-item" data-category="marketing">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/LG-G3.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/note-5.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="reference-item" data-category="other">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/z3-plus.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="reference-item" data-category="seo">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/iphone-5s.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="reference-item" data-category="webdesign">
                            <div class="reference">
                                <a href="#">
                                    <img src="{{asset('frontend/img/smartphone/note-edge.jpg')}}" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Tên sản phẩm</h3> 
                                        <p>số lượt đánh giá</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /#references-masonry -->

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** REFERENCES END *** -->


        <!-- *** CONTACT ***
_________________________________________________________ -->

        <div class="section contact" id="contact" data-animate="bounceIn">
            <div class="container">
                <div class="col-md-12">


                    <center><h2 class="title">Contact me</h2></center>

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages">

                                </div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your firstname *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="surname" class="form-control" placeholder="Your lastname *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" class="form-control" placeholder="Your email *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Your phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" class="form-control" placeholder="Message for me *" rows="4" required="required"></textarea>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <input type="submit" class="btn btn-primary btn-lg" value="Send message">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** CONTACT END *** -->

        <!-- *** MAP ***
_________________________________________________________ -->

        <div class="section" id="map">

        </div>
        <!-- /.section -->

        <!-- *** MAP END *** -->

        <!-- *** FOOTER ***
_________________________________________________________ -->

        <div class="section" id="footer">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <p class="social">
                            <a href="#" class="external facebook" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external instagram" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                    <!-- /.6 -->

                    <div class="col-sm-6">
                        <p>&copy; 2015 Your name goes here. All rights reserved.</p>
                    </div>

                    <div class="col-sm-12">
                        <p class="template-bootstrapious">Template by <a href="http://www.bootstrapious.com">Bootstrap Templates</a> with support from <a href="http://kakusei.cz">Designový nábytek</a> 
                        </p>
                    </div>

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** FOOTER END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <!-- js base -->
    <script src="{{asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!-- for demo purpose -->
    <script src="{{asset('frontend/js/jquery.cookie.js')}}"></script>

    <!-- waypoints for scroll spy -->
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>

    <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="{{asset('frontend/js/gmaps.js')}}"></script>

    <!-- masonry layout -->
    <script src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>

    <!-- owl carousel -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>


    <!-- jQuery scroll to -->
    <script src="{{asset('frontend/js/jquery.scrollTo.min.js')}}"></script>

    <!-- jQuery counter -->
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>

    <!-- jQuery parallax -->
    <script src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>

    <!-- main js file -->

    <script src="{{asset('frontend/js/front.js')}}"></script>

    



</body>

</html>