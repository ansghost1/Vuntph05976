<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpmines.com/demos/hotelbooking/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 07:32:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nail Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="home_one">

    <!-- start preloader -->
    <div id="loader-wrapper">
        <div class="logo"><a href="#"><span>Nail</span>Apro</a></div>
        <div id="loader">
        </div>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area">

        <!-- start main header -->
        <div class="main_header_area">
            <div class="container">
                <!-- start mainmenu & logo -->
                <div class="mainmenu">
                    <div id="nav">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="site_logo fix">
                                    <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="#"><img src="img/123361424_3863937486974199_7874159755537882930_n.jpg" alt="Trips" style="width: 70px; height: 70px;"></a>
                                    <div class="header_login floatleft">
                                        <ul>
                                            <li><a href="login.html">Đăng nhập</a></li>
                                            <li><a href="register.html">Đăng ký</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li role="presentation">
                                        <a id="drop-one" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                            Trang chủ
                                        </a>

                                    </li>



                                    <li><a href="blog.html">Tin tức</a></li>

                                </ul>
                                <div class="emergency_number">

                                    <img src="img/call-icon.png" alt="">123 456 7890

                                    <a href="#">Tài khoản</a>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
                <!-- end mainmenu and logo -->
            </div>
        </div>
        <!-- end main header -->

    </header>
    <!-- end header -->

    <!-- start main slider -->

    <div class="main_slider_area">
        <div class="main_slider" id="slider_rev">
            <!-- start hotel booking -->

            <!-- end hotel booking -->
            <div class="fullwidthbanner-container">
                <div class="fullwidth_home_banner">
                    <?php
                    include 'db.php';
                    $sqlslide = "select * from slide where trangthai='on'";

                    $kqslide = $conn->query($sqlslide);
                    foreach ($kqslide as $key => $slide) {
                    ?>
                        <ul>

                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/<?php echo $slide['image'] ?>" alt="slide">
                            </li>


                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/slider-one.jpg" alt="slide">

                            </li>
                        </ul>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end main slider -->

    <!-- start welcome section -->
    <section class="welcome_area">
        <div class="container">
            <div class="welcome">
                <div class="section_title nice_title content-center">
                    <h3>Chào mừng tới Nail Apro</h3>
                </div>
                <div class="section_description">
                    <p> Những combo cơ bản. </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/nail1.jpg" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Deluxe </h6>
                                        <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="booking.php" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Deluxe</h5>
                                        <p>
                                            nơi giúp bạn thư giãn trong lúc được chăm sóc móng, vẽ móng cho bạn bạn.
                                        </p>
                                        <p>
                                            bạn sẽ cảm nhận được sự nhiệt tình, chu đáo.
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                            </div>
                                            <div class="floatright">
                                                <a href="booking.php" class="btn">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/nail2.jpg" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Double</h6>
                                        <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="#" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Double</h5>
                                        <p>
                                            nơi giúp bạn thư giãn trong lúc được chăm sóc móng, vẽ móng cho bạn bạn.
                                        </p>
                                        <p>
                                            bạn sẽ cảm nhận được sự nhiệt tình, chu đáo.
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                            </div>
                                            <div class="floatright">
                                                <a href="#" class="btn">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/nail3.jpg" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Single</h6>
                                        <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="#" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Single </h5>
                                        <p>
                                            nơi giúp bạn thư giãn trong lúc được chăm sóc móng, vẽ móng cho bạn bạn.
                                        </p>
                                        <p>
                                            bạn sẽ cảm nhận được sự nhiệt tình, chu đáo.
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                            </div>
                                            <div class="floatright">
                                                <a href="#" class="btn">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="img/nail4.jpg" alt=""></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
                                        <h6>Kids</h6>
                                        <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="#" class="btn">Book</a>
                                    </div>
                                </div>
                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                        <h5>Kids</h5>
                                        <p>
                                            nơi giúp bạn thư giãn trong lúc được chăm sóc móng, vẽ móng cho bạn bạn.
                                        </p>
                                        <p>
                                            bạn sẽ cảm nhận được sự nhiệt tình, chu đáo.
                                        </p>
                                        <div class="single_room_cost clearfix">
                                            <div class="floatleft">
                                                <p>1.200.000 VND/ <span>Sơn Gel 7 bước</span></p>
                                            </div>
                                            <div class="floatright">
                                                <a href="#" class="btn">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end welcome section -->

    <!-- start Hotel Facilities section -->
    <section class="hotel_facilities_area margin-top-115 margin-bottom-100">
        <div class="container">
            <div class="hotel_facilities">
                <div class="section_title nice_title content-center">
                    <h3>DỊCH VỤ</h3>
                </div>
                <div class="hotel_facilities_content">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="" alt=""><span>THẨM MỸ VIỆN & SPA</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="i" alt=""><span>SALON TÓC</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="" alt=""><span>TIỆM NAIL - LÀM MÓNG</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="" alt=""><span>DỊCH VỤ MASSAGE</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="" alt=""><span>DỊCH VỤ TRANG ĐIỂM - MAKEUP</span></a>
                            </li>
                        </ul>


                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="restaurant">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5 col-sm-6">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/spa.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7 col-sm-6">
                                            <div class="single-tab-details">

                                                <h3>SPA</h3>
                                                <p>
                                                    Một trong những tính năng cơ bản của phầm mềm quản lý đó là quản lý đặt lịch với khách .
                                                </p>
                                                <p>
                                                    Tính năng này mang tới cả lợi ích cho khách hàng và cho chủ tiệm Nail nên được rất nhiều người lựa chọn.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sports-club">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/salon.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">

                                                <h3>SALON</h3>
                                                <p>
                                                    Một trong những tính năng cơ bản của phầm mềm quản lý đó là quản lý đặt lịch với khách .
                                                </p>
                                                <p>
                                                    Tính năng này mang tới cả lợi ích cho khách hàng và cho chủ tiệm Nail nên được rất nhiều người lựa chọn.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pick-up">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/nail5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">

                                                <h3>NAIL</h3>
                                                <p>
                                                    Một trong những tính năng cơ bản của phầm mềm quản lý đó là quản lý đặt lịch với khách .
                                                </p>
                                                <p>
                                                    Tính năng này mang tới cả lợi ích cho khách hàng và cho chủ tiệm Nail nên được rất nhiều người lựa chọn.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bar">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/massage.jpeg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">

                                                <h3>MASSAGE</h3>
                                                <p>
                                                    Một trong những tính năng cơ bản của phầm mềm quản lý đó là quản lý đặt lịch với khách .
                                                </p>
                                                <p>
                                                    Tính năng này mang tới cả lợi ích cho khách hàng và cho chủ tiệm Nail nên được rất nhiều người lựa chọn.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="gym">
                                <div class="single-tab-content">
                                    <div class="row">
                                        <div class="co-lg-5 col-md-5">
                                            <div class="single-tab-image">
                                                <a href="#"><img src="img/makeup.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="co-lg-7 col-md-7">
                                            <div class="single-tab-details">

                                                <h3>MAKE UP</h3>
                                                <p>
                                                    Một trong những tính năng cơ bản của phầm mềm quản lý đó là quản lý đặt lịch với khách .
                                                </p>
                                                <p>
                                                    Tính năng này mang tới cả lợi ích cho khách hàng và cho chủ tiệm Nail nên được rất nhiều người lựa chọn.
                                                </p>

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
    </section>
    <!-- end Hotel Facilities section -->

    <!-- start About Us section -->
    <section class="about_us_area margin-bottom-128">
        <div class="container">
            <div class="about_us clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                    <div class="news">
                        <div class="section_title margin-bottom-50">
                            <h5>Tin Tức</h5>
                        </div>
                        <div class="section_description">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single_content clearfix border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-one.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Bỏ túi bí kíp làm kem trắng da bằng sáp ong</h6>
                                            </div>
                                            <div class="post_content  margin-bottom-35">
                                                <p>14/07/2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-two.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Bỏ túi bí kíp làm kem trắng da bằng sáp ong</h6>
                                            </div>
                                            <div class="post_content  margin-bottom-35">
                                                <p>14/07/2014</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                            <div class="post_media">
                                                <a href="#"><img src="img/news-three.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                            <div class="post_title clearfix">
                                                <h6>Bỏ túi bí kíp làm kem trắng da bằng sáp ong</h6>
                                            </div>
                                            <div class="post_content  margin-bottom-35">
                                                <p>14/07/2014</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase">
                        <div class="section_title margin-bottom-50">
                            <h5>Showcase</h5>
                        </div>
                        <div class="section_description">
                            <div class="clearfix demo" style="">
                                <ul id="vertical" class="gallery list-unstyled">
                                    <li data-thumb="img/lightslider-img/cS-18.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-18.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-21.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-21.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-22.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-22.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-23.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-23.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-24.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-24.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-25.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-25.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-26.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-26.jpg" />
                                    </li>
                                    <li data-thumb="img/lightslider-img/cS-27.jpg">
                                        <img alt="slider" src="img/lightslider-img/cS-27.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end About Us section -->

    <!-- start contact us area -->

    <!-- end contact us area -->

    <!-- start footer -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer">
                <div class="footer_top padding-top-80 clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#"><img src="img/123361424_3863937486974199_7874159755537882930_n.jpg" style="width:  70px; height: 70px;" alt=""></a>
                            </div>
                            <p>Tại Apro, chúng tôi tin rằng uy tín là nền tảng vững chắc nhất để tồn tại. Bởi vậy chúng tôi luôn hết mình đem đến dịch vụ tốt nhất, hoàn hảo nhất, giúp bạn có được vẻ đẹp thực sự, dễ nhận thấy và lâu dài.</p>
                            <ul>
                                <li>
                                    <P><i class="fa fa-map-marker"></i>Số 16, <br> Gia Lâm, Long Biên, Hà Nội</P>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="container">
                        <div class="footer_copyright margin-tb-50 content-center">
                            <p>© 2015 <a href="#">lbooking</a>. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->



    <!-- jquery library -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- rev slider -->
    <script src="js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
    <script src="js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
    <script src="js/rev-slider/rs.home.js"></script>
    <!-- uikit -->
    <script src="js/uikit.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="js/lightslider.js"></script>

    <!-- wow Animation -->
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->

    <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
    <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



    <!-- my js -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from wpmines.com/demos/hotelbooking/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 07:33:53 GMT -->

</html>