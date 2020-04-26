<!DOCTYPE html>
<html lang="vn">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diego - Responsive One Page Template">
    
    <title>My Profile - Personal Profile</title>

    <!-- Stylesheets -->

    <!-- Bootstrap -->
    <link href="assets/stylesheets/css/bootstrap/bootstrap.css" rel="stylesheet">

    <!-- font-awesome.css -->
    <link href="assets/stylesheets/css/fontawesome/font-awesome.css" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="assets/stylesheets/css/pe-icon/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/stylesheets/css/pe-icon/helper.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="assets/stylesheets/css/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/stylesheets/css/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- Slick -->
    <link href="assets/stylesheets/css/slick/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick/slick-theme.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <!-- <link href="assets/stylesheets/css/color-scheme.css" rel="stylesheet"> -->

    <!-- Font style live -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>

    <!-- Style Switcher -->
    <link href="assets/stylesheets/css/switcher/switcher.css" rel="stylesheet">
    <link href="assets/stylesheets/css/colors/yellow.css" id="switch_style" rel="stylesheet"/>

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="80" class="slideshowbody">
    <div class="preloader">
      <div class="image-container">
        <div class="image"><img src="assets/images/preloader.gif" alt=""></div>
      </div>      
    </div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Giảng dạy</a></li>
            <li><a href="#education">Đào tạo</a></li>
            <li><a href="#news">Du lịch</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="Upload.php">Up load file</a></li>
            <li><a href="login.php">Quizz</a></li>
            <li><a href="connect.php">Connect DB</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Banner Section Begin -->
    <section class="banner" id="home" style="background: url(assets/images/me2.jpg) center; background-size: cover;">
      <div class="overlay"></div>
      <div class="banner-content">
        <div class="container">
          <div class="col-md-12">
            <div class="subtitle">
              <p>Tôi là Hồ Văn Phi</p>
            </div>
            <div class="title">
              <h1 id="typed"></h1>
            </div>
            
            <div class="buttons">
                <a href="Detail.html" class="def-btn">More About Me</a>
            </div>
            <div class="buttons">
              <a href="#" class="def-btn">Download Resume</a>
            </div>
          </div>
        </div><!-- /.container -->

        <div class="scroll-info">
          <a href="#about">
            <div class="shape">
              <i class="fa fa-angle-down"></i>
            </div>
          </a>
        </div><!--/.scroll-info -->
      </div><!-- /.banner-content -->
    </section><!-- /.banner -->
    <!-- Banner Section End -->

    <!-- About Section Begin -->
    <section class="about" id="about">
      <div class="title section-title text-center">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-id pe-2x"></i></div>
        </div>
        <h1>Hồ Văn Phi</h1>
        <h2>Giảng viên</h2>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="center">
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me2.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me3.jpg">
              </div>
              <div class="img-relative photo">
                <img alt="My Photo" src="assets/images/me4.jpg">
              </div>
            </div>

            <div class="description">
              <div class="text">
                <p>Khoa Công nghệ thông tin – KVFITC</p>
              </div>
            </div>

            <div class="more">
              <ul>
                <li><a href="#"><i class="pe-7s-cloud-download pe-2x pe-va"></i>  Download Resume</a></li> 
                <li><a href="#"><i class="pe-7s-phone pe-2x pe-va"></i>Contact Me</a></li>
              </ul>
            </div>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.features -->
    <!-- About section End -->
    
    <!-- Counter Section Begin-->
    <section class="counter" style="background: url(assets/images/banner2.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div class="container content">
        <div class="row">
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-clock pe-4x"></i></div>
            <h3 class="timer" data-to="3500" data-speed="3000" data-from="0">1500</h3>        
            <h4>Hours Of Work</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-coffee pe-4x"></i></div>
            <h3 class="timer" data-to="450" data-speed="3000" data-from="0">450</h3>
            <h4>Cups of Coffee</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-rocket pe-4x"></i></div>
            <h3 class="timer" data-to="58" data-speed="3000" data-from="0">50</h3>
            <h4>Class Done</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="pe-7s-add-user"></i></div>
            <h3 class="timer" data-to="3200" data-speed="3000" data-from="0">32</h3>
            <h4>Students</h4>
          </div>
        </div>      
      </div>
    </section><!--/.timer -->
    <!-- Counter Section End -->
  
    <!--Portfolio Section Begin -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
          </div>
          <h1>Giảng dạy</h1>
          <h2>Trường đã giảng dạy</h2>
        </div>
        <div class="description">
          <p>Một số nơi tôi đã giảng dạy.</p>
        </div>
      </div>

      <div class="container">
        <div class="portfoliocontent">

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="http://viethanit.edu.vn/">
              <div class="content">
                <div class="overlay">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Trường CĐ CNTT Hữu nghị Việt Hàn</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">1 September 2006</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                    <img src="assets/images/VietHan.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="https://duytan.edu.vn">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Đại học Duy Tân</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">From 2017</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/duytan.png" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="https://greenwich.edu.vn/">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Đại học GreenWich Đà Nẵng</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">From 2018</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                    <img src="assets/images/Greenwich.png" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="http://btec.edu.vn/">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Cao đẳng FPT BTEC </span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">From 2019</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                    <img src="assets/images/Btec.png" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="donga.edu.vn">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Đại học Đông Á </span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">From 2017</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/DongA.png" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="daotaocep.edu.vn">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Cao đẳng Kinh tế kế hoạch Đà Nẵng </span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">2004-2006</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="assets/images/Kehoach.jpeg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->
        </div><!--/.portfoliocontent -->
      </div><!--/.container -->
      
      <div class="container">
        <div class="col-md-12">
          <div class="show-more text-center">
            <a href="portfolio-list.html" class="def-btn">Show More</a>
          </div>
        </div>
      </div>

    </section><!--/.portfolio -->
    <!-- Portfolio Section End -->

    <!-- Testimonial Section Begin-->
    <section class="testimonial text-center" id="testimonial" style="background: url(assets/images/banner3.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
        <div class="container">
          <div class="carousel-inner">
            <div class="item active">
              <div class="photo">
                <img src="assets/images/me2.jpg" alt="Testimonial">
              </div>
              <div class="text">
                Thông tin
              </div>
              <div class="separator-container">
                <div class="separator"><div class="shape"></div></div>
              </div>
              <div class="name">
                <span class="textbold">Hồ Văn Phi</span>, Trưởng bộ môn Hệ thống thông tin
              </div>
            </div><!--/.item -->

            
          </div><!--/.carousel-inner -->
        </div><!--/.container -->

        <!-- Controls -->
        <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev" data-wow-delay="1s">
          <div class="control-circle left"><i class="fa fa-angle-left"></i></div>
        </a>
        <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next" data-wow-delay="1s">
          <div class="control-circle right"><i class="fa fa-angle-right"></i></div>
        </a>
      </div><!--/.testimonial-carousel -->
    </section><!--/.testimonial -->
    <!-- Testimonial Section End-->

    <!-- Why Choose Me Section Begin  -->
    <section class="why-me" id="why-me">
      <div class="container">
        
        <div class="col-md-6 text">
          <div class="title"><h1>Kinh nghiệm</h1></div>
          <div class="tagline">
            <p>Một số môn học đã giảng dạy.</p>
          </div>
          <div class="description">
            <p>Một số môn học đã giảng dạy.</p>
          </div>
        </div><!--/.text -->

        <div class="col-md-6 skills">
          <div class="title">
            <h3>Môn học đã giảng dạy</h3>
          </div>
          <div class="skillbars">
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Basic programming</p>
              <div class="meter wow animated fadeInLeft" style="width: 50%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Object Oriented Programming</p>
              <div class="meter wow animated fadeInLeft" style="width: 60%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Database Design and Development</p>
              <div class="meter wow animated fadeInLeft" style="width: 80%"></div>
            </div>
            <div class="bar-container">
              <p><i class="icon-pencil pi-icon-left"></i>Cloud Computing</p>
              <div class="meter wow animated fadeInLeft" style="width: 30%"></div>
            </div>
          </div>
        </div><!--/.skills -->
      </div><!--/.container -->
    </section><!--/.why-me -->
    <!-- Why Choose Me Section End  -->

    <!-- Education section Begin  -->
    <section class="education" id="education">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-study pe-2x pe-va"></i></div>
        </div>
        <h1>My Education</h1>
        <h2>Giáo dục</h2>
      </div>
        
      <div class="container">
        <div class="timeline-container">
          
          <ul class="timeline">
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2017</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Tiến sĩ</h3>
                <span class="place textbold">Khoa học máy tính</span>
                <p> Khoa Công nghệ thông tin,Đại học Soongsil, Seoul, Hàn Quốc.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2009</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Thạc sĩ</h3>
                <span class="place textbold">Khoa học máy tính</span>
                <p>Khoa Công nghệ thông tin,Đại học Đà Nẵng, Đà Nẵng, Việt Nam.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2004</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Kỹ sư</h3>
                <span class="place textbold">Công nghệ thông tin</span>
                <p>Khoa Công nghệ thông tin,Đại học Bách khoa, Đà Nẵng, Việt Nam.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>1999</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-study pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Học sinh</h3>
                <span class="place textbold">Trung học phổ thông</span>
                <p>Trường Trung học phổ thông Hướng Hoá, Quảng Trị, Việt Nam .</p>
              </div>
            </li>
          </ul><!--/.timeline -->
        </div><!--/.timeline-container -->
      </div><!--/.container -->
    </section><!--/.education -->
    <!-- Education section End  -->

    <!-- Employment section Begin  -->
    <section class="employment">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-portfolio pe-2x pe-va"></i></div>
        </div>
        <h1>My Education</h1>
        <h2>Ngắn hạn</h2>
      </div>
        
      <div class="container">
        <div class="timeline-container">
          
          <ul class="timeline">
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2010</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Giáo dục học đại học</h3>
                <span class="place textbold">Đại học sư phạm Hà Nội</span>
                <p>Đại học sư phạm Hà Nội.</p>
              </div>
            </li>
            <li>
              <time class="timeline-year wow animated fadeIn" data-wow-delay="0.2s"><span>2018</span></time>
              <div class="timeline-icon wow animated fadeIn" data-wow-delay="0.2s">
                <i class="pe-7s-portfolio pe-va"></i>
              </div>
              <div class="timeline-label wow animated fadeIn" data-wow-delay="0.2s">
                <h3>Kỹ năng thực hành nghề</h3>
                <span class="place textbold">Bộ LĐ TB & XH Việt Nam</span>
                <p>Sở Thông tin và truyền thông, Đà Nẵng</p>
              </div>
            </li>
            
          </ul><!--/.timeline -->
        </div><!--/.timeline-container -->
      </div><!--/.container -->
    </section>
    <!-- Education section End  -->

    <!-- Pricing Section Start  -->
    <section class="pricing" id="pricing">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-news-paper pe-2x pe-va"></i></div>
          </div>
          <h1>Nghiên cứu khoa học</h1>
          <h2>Thành tích</h2>
        </div>

        <div class="description">
          <p> Một số kết quả nghiên cứu khoa học.</p>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.2s">
            <div class="header"></div>
            <div class="price">
              <div class="pricetext"><h3>1. Đề tài</h3><span class="textbold"></span>  </div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Tên:</span> High-performance mobile forensic based on flash image extraction</li>
                <li><span class="textbold">Cấp:</span> Nhà nước</li>
                <li><span class="textbold">Cơ quanquản lý đề tài:</span> National Research Foundation of Korea</li>
                
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.4s">
            <div class="price">
              <div class="pricetext"><h3>2. Giải thưởng  </h3><span class="textbold"></span></div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Tên:</span> Bài báo tốt nhất </li>
                <li><span class="textbold">Cấp:</span> Quốc tế</li>
                <li><span class="textbold">Cơ quanquản lý giải thưởng:</span> Hội thảo quốc tế SMA lần thứ 4 2016</li>   
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.4s">
            <div class="price">
              <div class="pricetext"><h3>3. Dự án  </h3><span class="textbold"></span></div>
            </div>
            <div class="list">
              <ul>
                <li><span class="textbold">Tên:</span> Mô phỏng chỉ mục B-tree trên bộ nhớ flash </li>
                <li><span class="textbold">Cấp:</span> Trường</li>
                <li><span class="textbold">VHITC:</span> Hội thảo quốc tế SMA lần thứ 4 2016</li>   
              </ul>
            </div>
          </div>
        </div>
          <div class="col-md-3 col-sm-6">
          <div class="pricing-table wow animated fadeInUp" data-wow-delay="0.4s">
            <div class="price">
              <div class="pricetext"><h3>4. Bài báo khoa học   </h3><span class="textbold"></span></div>
            </div>
            <div class="list">
              <ul> 
                <li><span class="textbold">1. </span></li>
                <li><span class="textbold">Tên bài báo:</span> WPCB-Tree: A Novel Flash-Aware B-Tree Index Using a Write Pattern Converter </li>
                <li><span class="textbold">Tên tạp chí :</span> Journal of  Symmetry</li>
                <li><span class="textbold">Năm </span> 2018</li>   
              </ul>
               <ul> 
                <li><span class="textbold">2. </span></li>
                <li><span class="textbold">Tên bài báo:</span> An Efficient B-tree Index Scheme for Flash Memory  </li>
                <li><span class="textbold">Tên tạp chí :</span> International Journal of Software Engineering and Its Applications</li>
                <li><span class="textbold">Năm </span> 2017</li> 
               </ul>
            </div>
          </div>
        </div>
        
        

      </div>
    </section>
    <!-- Pricing Section End  -->

    <!-- Twitter-Feed Section Begin  -->
    <section class="twitter-feed" style="background: url(assets/images/banner4.jpg) center; background-size: cover; background-attachment: fixed;">
      <div class="overlay"></div>
      <div class="logo-container"><div class="logo"><i class="fa fa-twitter"></i></div></div>
      <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
        <div class="container">
          <div class="carousel-inner">
            <div class="item active">
              <div class="tweet">
                <p></p>
              </div>
            </div><!--/.item -->
            <div class="item">
              <div class="tweet">
                <p> <span class="textbold"></span>  </p>
              </div>
            </div><!--/.item -->
          </div><!--/.carousel-inner -->
          <div class="time"> <a href="#"</a></div>
        </div><!--/.container -->
      </div><!--/.twitter-carousel -->
    </section><!--/.twitter-feed -->
    <!-- Twitter-Feed Section End  -->

    <!-- Journal Section Begin  -->
    <section class="journal bg-section" id="news">
      <div class="container">
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-news-paper pe-2x pe-va"></i></div>
          </div>
          <h1>Du lịch</h1>
          <h2>Cho đến hiện tại</h2>
        </div>

        <div class="description">
          <p>Các chuyến đi đáng nhớ.</p>
        </div>
        
        <div id="masonry-container">
          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
                 <div class="media">
                <img src="assets/images/san.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title">San Francisco</div>
                <div class="text">Du lịch học tiếng</div>
                <div class="post-date"> July - Setember, 2013</div>
              </div>
            </div>
          </article>
          
          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="media">
                <img src="assets/images/sys.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                 <div class="title">Sydney</div>
                <div class="text">Hội thảo khoa học</div>
                <div class="post-date"> December, 2016</div>
              </div>
            </div>
          </article>

           <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
                 <div class="media">
                <img src="assets/images/las.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title">Las Vegas</div>
                <div class="text">Du lịch </div>
                <div class="post-date"> August, 2013</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
              <div class="media">
                <img src="assets/images/jeju.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title">Jeju</div>
                <div class="text">Du lịch gia đình </div>
                <div class="post-date"> November, 2016</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
                 <div class="media">
                <img src="assets/images/busan.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
               <div class="title">Busan</div>
                <div class="text">Du lịch </div>
                <div class="post-date"> November, 2016</div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-sm-6 masonry wow animated fadeIn">
            <div class="journal-content">
               <div class="media">
                <img src="assets/images/dea.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-note"></i></div></div>
                <div class="title">Deajon</div>
                <div class="text">Du lịch gia đình </div>
                <div class="post-date"> June, 2016</div>
              </div>
            </div>
          </article>
          
        </div><!--/#masonry-container -->
      </div><!--/.container -->

      <div class="container">
        <div class="col-md-12">
          <div class="show-more text-center">
            <a href="journal-list.html" class="def-btn">Show More</a>
          </div>
        </div>
      </div>

    </section><!--/.journal -->
    <!-- Journal Section End  -->

   
    <!-- Map Section Begin  -->
    <section class="map">
      <div class="map-title">
        <div class="container">
          <h1><span class="textbold">Visit me</span> for some coffee</h1>
        </div>
      </div>
      <!-- <div class="map-canvas" id="map-canvas"></div>-->
      <div id="map" style="width:500px;height:500px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15342.38367012175!2d108.2496147!3d15.98246485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1295cb3d313469c9!2sKorea+-+Vietnam+Friendship+Information+Technology+College!5e0!3m2!1sen!2s!4v1562567456244!5m2!1sen!2s" 
                  width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <!-- Map Section End  -->

    <!-- Contact Section Begin  -->
    <section class="contact" id="contact">
      <div class="container"> 
        <div class="title section-title text-center wow animated fadeIn">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-phone pe-2x pe-va"></i></div>
          </div>
          <h1>Get in touch</h1>
          <h2>Whith me</h2>
        </div>

        <div class="description">
          
        </div>    

        <div class="col-md-8 col-md-offset-2">
          <div class="footer-form">
            <form role="form">
              <div class="col-md-12 input-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="col-md-12 input-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-12 textarea-container wow animated fadeInUp" data-wow-delay="0.2s">
                <textarea class="form-control" placeholder="Your Message Here"></textarea>
              </div>
              <div class="col-md-12 button-container wow animated fadeInUp" data-wow-delay="0.2s">
                <input type="submit" class="submit-btn def-btn" value="Send Message">
              </div>
            </form>
          </div><!--/.footer-form -->
        </div>
        
      </div>
    </section>
    <!-- Contact Section End  -->

    <!-- Footer Section Begin  -->
    <section class="footer">
      <div class="container">
        <div class="top-text">Follow Me</div>
        <div class="col-md-12 col-sm-12 links">
          <ul>
            <li class="social-icons">
              <a href="#" data-toggle="tooltip" title="Some tooltip text!">
                <div class="circle">
                  <i class="fa fa-facebook"></i>
                </div>
              </a>
              <a href="#">
                <div class="circle">
                  <i class="fa fa-twitter"></i>
                </div>
              </a>
              <a href="#">
                <div class="circle">
                  <i class="fa fa-google-plus"></i>
                </div>
              </a>
              <a href="#">
                <div class="circle">
                  <i class="fa fa-linkedin"></i>
                </div>
              </a>
              <a href="#">
                <div class="circle">
                  <i class="fa fa-pinterest"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>

       
      </div><!--/.container -->
    </section>
    <!-- Footer Section End  -->

    <!-- JavaScripts -->
    <script src="assets/javascripts/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/typed.min.js"></script>
    <script src="assets/javascripts/jquery.parallax-1.1.3.js"></script>
    <script src="assets/javascripts/owl.carousel.js"></script>
    <script src="assets/javascripts/isotope.pkgd.min.js"></script>
    <script src="assets/javascripts/jquery.countTo.js"></script>
    <script src="assets/javascripts/wow.min.js"></script>
    <script src="assets/javascripts/slick.js"></script>
    <script src="assets/javascripts/jquery.appear.min.js"></script>
    <script src="assets/javascripts/masonry.pkgd.min.js"></script>
    <script src="assets/javascripts/custom-map.js"></script>
    <script src="assets/javascripts/custom.js"></script>

    <!-- Style Switcher - Demo Only Begin -->
    <div class="switcher-box">
      <div class="hiddenbox"><i class="fa fa-gear"></i></div>
      <div class="colorbox-container" style="display: none">
        <div class="head"><i class="pe-7s-paint"></i></div>
        <div class="content">
          <a title="blue" href="javascript:void(0)">
            <div class="colorbox" id="blue"></div>
          </a>
          <a title="green" href="javascript:void(0)">
            <div class="colorbox" id="green"></div>
          </a>
          <a title="orange" href="javascript:void(0)">
            <div class="colorbox" id="orange"></div>
          </a>
          <a title="yellow" href="javascript:void(0)">
            <div class="colorbox" id="yellow"></div>
          </a>
        </div>
      </div>
    </div>

    <script src="assets/javascripts/switcher.js"></script>
    <!-- Style Switcher - Demo Only End -->

  </body>

</html>
