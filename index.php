<!DOCTYPE html>
<html class="no-js">


<head>
  <?php
          include('connection.php');
          if(isset($_SESSION['check'])){
          echo "<script> alert('Registered Success')</script>";
          unset($_SESSION['check']);
        }
        if(isset($_SESSION['reg']))
        {
          echo "<script> alert('Please Log In')</script>";
          unset($_SESSION['reg']);
        }

        // if(isset($_SESSION['unlog']))
        // echo "<script> alert('Credentials Don't Match')</script>";
        else {
          // echo "string";
        }
    ?>
    <?php    if(isset($_POST['uname']) and isset($_POST['psw']))
        {
          $uname=$_POST['uname'];
          $pass=$_POST['psw'];
          $uname=mysqli_real_escape_string($con,$uname);
          $pass=mysqli_real_escape_string($con,$pass);
          $query="select userid,name from user where email='$uname' AND password='$pass'";
          $result=mysqli_query($con,$query);
          $count=mysqli_num_rows($result);

          if($count == "0")
          {

            echo "<script>alert('No User Found!!!')</script>";

          }
          else {
           $out=mysqli_fetch_array($result);
            $uid=$out['userid'];
            $name=$out['name'];
            $_SESSION['name']=$name;
            $_SESSION['pid']=$uid;
          //  echo $_SESSION['name'];
            //echo $_SESSION['pid'];
              /*if($name=="admin")
              header("Location:admin.php");*/

        header("Location:index1.php");
      }
      }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>techNITi'19
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="techNITi19 '19 | Expanding Horizons" />
    <meta name="keywords" content="techniti19, nit, techniti19nit, techniti1919, technical festival, nagpur, robowars, nagpur events, nagpur fest, techfest, workshops" />
    <meta name="author" content="techniti19nit" />
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" type="image/ico" href="images/favlogo.ico">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.js"
      integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/myStyle.css">

    <script src="js/modernizr-2.6.2.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128358429-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-128358429-1');
    </script>
  </head>

  <body>

  	<script>
      	/*$('body').append('<div style="" id="loadingDiv"><div class="loading"><div class="loading-text"><span class="loading-text-words">L</span><span class="loading-text-words">O</span><span class="loading-text-words">A</span><span class="loading-text-words">D</span><span class="loading-text-words">I</span><span class="loading-text-words">N</span><span class="loading-text-words">G</span></div></div></div>');
        $(window).on('load', function(){
          setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
        });
        function removeLoader(){
            $( "#loadingDiv" ).fadeOut(500, function() {
              // fadeOut complete. Remove the loading div
              $( "#loadingDiv" ).remove(); //makes page more lightweight
          });
        }*/
        //Initialize this script to check browser compatibility
        navigator.sayswho= (function() {
  			var ua= navigator.userAgent, tem,
  			M= ua.match(/(opera|chrome|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
  			if(/trident/i.test(M[1])){
  			tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
  			return 'IE '+(tem[1] || '');
  			}
  			if(M[1]=== 'Chrome') {
  			tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
  			if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
  			}
  			M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
  			if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
  			return M.join(' ');
  			})();
  			var str = navigator.sayswho;
  			var bro = str.substr(0, 6);
  			/*window.alert(str);*/
  			if (bro != "Chrome") {
  			window.alert("Please use Chrome Browser for better user experience");
  			}
		</script>

    <div id="page">

      <!-- <nav class="fh5co-nav" role="navigation">
        <div class="container">
          <div class="row"> -->
            <!-- <div class="col-xs-2">
              <div id="fh5co-logo">
                <img src="images/logo.png" alt="techNITi19'19 logo">
                <a href="index.html" style="padding-left: 1.2em;">techNITi19'19
                </a>
              </div>
            </div> -->
            <!-- <div class="col-xs-10 text-left menu-1">
              <ul>
                <li class="active">
                  <a href="index.html">Home
                  </a>
                </li>
                <li>
                  <a href="gallery/single.html" target="_blank">Gallery
                  </a>
                </li> -->
                <!--
                <li>
                  <a href="sponsorUs.html">Sponsor Us
                  </a>
                </li> -->
                <!-- <li>
                  <a href="sponsors.html">Previous Sponsors
                  </a>
                </li> -->
                <!-- <li class="has-dropdown">
									<a href="gallery.html">Gallery</a>
									<ul class="dropdown">
									<li><a href="#">Inaugration</a></li>
									<li><a href="#">Competitions</a></li>
									<li><a href="#">Workshops</a></li>
									</ul>
								</li> -->
                <!-- <li>
                  <a href="ca.html">CA
                  </a>
                </li>
                <li>
                  <a target="__blank" href="MUN/index.html">
                    MUN
                  </a>
                </li>
                <li>
                  <a href="Contact/contact.html">Contact Us
                  </a>
                </li>
              </ul>


              <span class="loginBUTTON">
               <button class="quickstart-sign-in" id="quickstart-sign-in" onmouseleave="this.style.color = 'gray'" onmouseenter="this.style.color = 'white'" style="background:transparent;border: none;"><span class="glyphicon glyphicon-user" style="border: 1px solid gray;border-radius: 50%;padding: 10px;"></span></button>
             </span>

              <span class="techniti19LOGIN" style="visibility: hidden;">
                <div class="dropdown" style="z-index: 5000;">
                  <button onmouseleave="this.style.color = 'gray'" onmouseenter="this.style.color = 'white'" class="dropbtn" style="background: transparent;border: none;font-size: 22px;">
                    <span class="glyphicon glyphicon-user" style="border: 1px solid gray;border-radius: 50%;padding: 10px;"></span>
                  </button>
                  <div class="dropdown-content">
                    <a href="#" style="padding: 5px;color: black;"><span style="font-size: 15px;" class="clientName" id="clientName"></span></a>
                    <a href="#" style="padding: 5px;color: black;"><span style="font-size: 15px;" class="techNITi19id" id="techNITi19id"></span></a>
                    <a href="#" style="padding: 5px;color: black;" onclick="logout()">LOGOUT</a>
                  </div>
                  <br>
                </div>
              </span>
            </div>
          </div>
        </div>
      </nav> -->

      <div class="row" >
        <div class="col-4 col-md-4"><center><img class="img-fluid" style="position: relative; margin: 10px auto; width: 40%; "  src="images/logo5.png">
      </center></div>

        <div class="col-8 col-md-8"> <img src="images/nitj_logo.png" class="img-fluid" style="align-content: left; position: relative; width: 90%; margin: 0 auto;">
</div>
      </div>

      <div class="video-container">

        <div class="herologo">
          <img src="images/logo.png" alt="techniti19logo">
        </div>
        <video src="vid/bgvid.mp4" autoplay muted loop poster="images/bg.png"></video>
      </div>


      <h1 id="tagline">techNITi'19</h1>
      <h6 id="brandtechniti19">टैकनीति '१९ </h6>
      <h4 id="dateline">Coz its All about Technology</h4>


              <!-- <h2>Expanding Horizons</h2> -->
      <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5" style="top:0;height:-webkit-fill-available; position:fixed; z-index:-1">

      </header>

      <div style="height:667px;"></div>

      <div id="fh5co-services" class="fh5co-section-black">
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h1 style="color: white; font-family: Trebuchet MS
; font-size: 50px;">ABOUT <b style="color: purple; font-family: Trebuchet MS
; font-size: 50px;">techNITi'19</b>
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="feature-left animate-box" data-animate-effect="fadeInLeft" style="margin: auto">
                <div class="feature-copy" style="text-align: center; width:100%; margin:auto">
                  <h2 style="color: white;">
                  </h2><br>
                  <p style="color: white;text-align: justify; font-family: Trebuchet MS; font-size: 20px;"> <b style="color: purple; font-family: Trebuchet MS; font-size: 22px;">techNITi</b>, the annual techno-managerial festival of our institute was launched in the academic year 2006-07 with an objective to enhance scientific temperament of students through various activities. Since its inception various events viz. paper presentations, hardware design contests, robotics, expert talks etc. are organized. To align our efforts and activities with the objectives of the nation and to keep our students at the forefront of innovation, creativity and build solutions that are relevant in the local and global context <b style="color: purple; font-family: Trebuchet MS; font-size: 22px;">techNITi</b> will introduce new events such as Hackathon, TEDx talks, StartUp Weekend etc.

                  </p>

                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box">
              <script type="text/javascript" language="javascript">
              $('.myIframe').css('height', (($(window).height()*3)/4)+'px');
              </script>
            <iframe  width="100%" class="myIframe" src="https://www.youtube.com/embed/M2z8ITfzQko" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>          </div>
            <script type="text/javascript" language="javascript">
            $('.myIframe').css('height', (($(window).height()*3)/4)+'px');
            </script>
            </div>
        </div>
      </div>

      <a href="events/category.html">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
          <div class="carousel-inner">

              <div class="carousel-caption text-center">
              <div id="carouselHeading">
                <span> MEGA EVENTS</span>
                <br>
                <button type="button" class="btn btn-default waves-effect">EXPLORE</button>
              </div>
            </div>

            <div class="item active carouselImageContainer" >
              <img src="images/events/1.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/nitj/5.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/events/3.jpg" class="carouselImage">
            </div>
          </div>
        </div>
      </a>


      <!-- <div id="fh5co-services" class="fh5co-section-black">
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2 style="color: white; font-size: 50px;">HACK@NITJ
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <center>
                <a href=# target="__blank"><img src="MUN/images/favlogo.png" style="width: 70%;height: auto;" alt=""></a>
              </center>
            </div>
            <div class="col-md-6 animate-box">
              <div class="feature-right animate-box" data-animate-effect="fadeInLeft" style="margin: auto">
                <div class="feature-copy" style="text-align: center; width:100%; margin:auto">
                  <h2 style="color: white;">What is HACK@NITJ?
                  </h2>
                  <p style="color: white;text-align: justify; font-family: Trebuchet MS; font-size: 20px;"">HACK@NITJ is North India’s largest software based Hackathon which will be live for a period of 24/36 hours. The participants will be from all over the nation and the event will see some of the best minds of the nation who would explore software/hardware  solutions to various problems. The teams will compete against each other and time to showcase the best solutions by presenting their programming skills and win huge prizes.</p>
                  <br>
                  <a target="__blank" href="http://www.nitj.ac.in/techniti19/hacknitj/"><button class="button" style="color:black;width:300px;">See More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
          <div class="carousel-inner">
            <div class="item active carouselImageContainer" >
              <img style="opacity: 0.8" src="images/curtain_raiser/DSC_3372.jpg" class="carouselImage">

            <div style = 'padding-top:10px;'class="carousel-caption postText">
              <div id="carouselHeading">
                <span>TechNiTi'19 Events</span>
                <br>
                <div id ="cats">TechNiTi '19 Curtain Raiser (May 3rd, 2019). The Guest of honour
                  was Er. Ishwar Sahai (MD Mecgtech Delhi). </div>
                <!--<button type="button" class="btn btn-default waves-effect">EXPLORE</button>--->
              </div>
            </div>
            </div>
            <div class="item carouselImageContainer">
              <img style="opacity: 0.8" src="images/curtain_raiser/DSC_3393.jpg" class="carouselImage">
              <div style = 'padding-top:10px;'class="carousel-caption postText">
                <div id="carouselHeading">
                  <span>TechNiTi'19 Events</span>
                  <br>
                  <div id ="cats">TechNiTi '19 Curtain Raiser (May 3rd, 2019). The Guest of honour
                    was Er. Ishwar Sahai (MD Mecgtech Delhi). </div>
                  <!--<button type="button" class="btn btn-default waves-effect">EXPLORE</button>--->
                </div>
              </div>
            </div>



            <div class="item carouselImageContainer">
              <img style="opacity: 0.8" src="images/curtain_raiser/DSC_0843-min.jpg" class="carouselImage">
              <div style = 'padding-top:10px;'class="carousel-caption postText">
                <div id="carouselHeading">
                  <span>TechNiTi'19 Events</span>
                  <br>
                  <div id ="cats">Hack@NITJ (20-22 Sept, 2019). The Guest of honour
                    was Dr. Pamita Awasthi (NIT Hamirpur). </div>
                  <!--<button type="button" class="btn btn-default waves-effect">EXPLORE</button>--->
                </div>
              </div>
            </div>
            <div class="item carouselImageContainer">
              <img style="opacity: 0.8" src="images/curtain_raiser/IMG_7274-min.jpg" class="carouselImage">
              <div style = 'padding-top:10px;'class="carousel-caption postText">
                <div id="carouselHeading">
                  <span>TechNiTi'19 Events</span>
                  <br>
                  <div id ="cats">Hack@NITJ (20-22 Sept, 2019). First Prize : Rs 25000/-. Team Lambda from VIT Vellore
                  and IGDTU Delhi </div>
                  <!--<button type="button" class="btn btn-default waves-effect">EXPLORE</button>--->
                </div>
              </div>
            </div>
             <!---

             --->




          </div>
        </div>
      </a>

   <br>
<a href="events/deptcategory.html">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
          <div class="carousel-inner">

            <div class="carousel-caption text-center">
              <div id="carouselHeading">
                <span>DEPARTMENTAL EVENTS</span>
                <br>
                <button type="button" class="btn btn-default waves-effect">EXPLORE</button>
              </div>
            </div>

            <div class="item active carouselImageContainer" >
              <img src="images/nitj/1.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/dept/2.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/dept/3.jpg" class="carouselImage">
            </div>
          </div>
        </div>
      </a>



<!--
      <a href="#">
        <div id="myCarousel" class="carousel slide"data-ride="carousel" data-interval="2500">
          <div class="carousel-inner">

            <div class="carousel-caption text-center">
              <div id="carouselHeading">
                <span>WORKSHOPS</span>
                <br>
                <button type="button" class="btn btn-default waves-effect">EXPLORE</button>
              </div>
            </div>

            <div class="item active carouselImageContainer" >
              <img src="images/carousel/workshops/1.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/carousel/workshops/2.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/carousel/workshops/3.jpg" class="carouselImage">
            </div>

          </div>
        </div>
      </a>


-->


<!--
<br><br><br><br><br>

      <a href="#">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
          <div class="carousel-inner">

            <div class="carousel-caption text-center">
              <div id="carouselHeading">
                <span>GUEST LECTURES</span>
                <br>
                <button type="button" class="btn btn-default waves-effect">EXPLORE</button>
              </div>
            </div>

            <div class="item active carouselImageContainer" >
              <img src="images/carousel/lectures/1.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/carousel/lectures/2.jpg" class="carouselImage">
            </div>

            <div class="item carouselImageContainer">
              <img src="images/carousel/lectures/3.jpg" class="carouselImage">
            </div>

          </div>
        </div>
      </a>


 <div id="fh5co-services" class="fh5co-section-black">
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2 style="color: white;">Past Speakers</h2>
            </div>
          </div>
          <div class="row">
            <div class="demo">
              <div class="container">
                <div class="row">
                  <div id="testimonial-slider" class="owl-carousel owl-theme">
                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/sameer.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Sameer Saxena</h3>
                        <span class="title">Co-Founder, TVF</span>
                      </div>
                    </div>
                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/ajith.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;">
                        </div>
                        <h3 class="name">Ajith Mohan Karimpana</h3>
                        <span class="title">Founder and CEO, Furlenco</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/kumar.jpg"  style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Kumar Vishwas</h3>
                        <span class="title">Poet</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/sandeepgfg.jpg"  style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Sandeep Jain</h3>
                        <span class="title">Founder and CEO, GeeksForGeeks</span>
                      </div>
                    </div>

                <!--    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/5_Dr_A_S_Kirankumar_Former_Chairman_ISRO.jpg"  style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Dr. A S Kirankumar</h3>
                        <span class="title">Former Chairman, ISRO</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/6_Mr_John_C_Mather_Physics_Nobel_Laureate.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Mr John C Mather</h3>
                        <span class="title">Physics Nobel Laureate</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/7_Mr_Saket_Modi_Cyber_Security_Expert_Forbes_30_Under_30.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Mr Saket Modi</h3>
                        <span class="title">Cyber Security Expert, Forbes 30 Under 30</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/8_Mr_Amish_Tripathi_Reknowned_Author.jpg"  style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Mr Amish Tripathi</h3>
                        <span class="title">Reknowned Author</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/9_Mr_Amit_Kasliwal_India_Head_Ford_Motors_and_Motivational_Speaker.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Mr Amit Kasliwal</h3>
                        <span class="title">India Head Ford Motors and Motivational Speaker</span>
                      </div>
                    </div>

                    <div class="testimonial">
                      <div class="testimonial-content">
                        <div class="pic">
                          <img src="images/past_speakers/10_Mr_Tamal_Bandyopadhyay_Indian_Business_Journalist.jpg" style="max-width: 135px;max-height: 135px; width: 100%; height: 100%;" alt="">
                        </div>
                        <h3 class="name">Mr Tamal Bandyopadhyay</h3>
                        <span class="title">Indian Business Journalist</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
-->


      <!-- <div id="fh5co-gallery" class="fh5co-section-gray" style="background-image: linear-gradient(to bottom right, rgba(0, 60, 70, 0.8), rgba(60, 0, 70, 0.8));">
        <div class="container">
          <div class="row row-bottom-padded-md">
            <div class="col-md-12">
              <ul id="fh5co-gallery-list">
                <li class="one-third animate-box" id="divmodal1" data-animate-effect="fadeIn" style="background-image: url(images/attraction.jpg);">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/eventnew-min.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Exhibition.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/guest_lectures-min.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/inaugural.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/proshow-min.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/workshop.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/talks.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
                <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/social_initiative.jpg); ">
                  <div class="case-studies-summary">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div id="fh5co-event" class="fh5co-bg" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.95), rgba(20, 20, 40, 0.95));">
				<div class="overlay"></div>
				<div class="container">
				<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2>Important Dates</h2>
				</div>
				</div>
				<div class="row">
				<div class="display-t">
				<div class="display-tc">
				<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12 col-sm-6 text-center">
				<center>
				<div class="event-wrap animate-box">
				<h3>Orientation</h3>
				<div class="event-col">
				<i class="icon-clock"></i>
				<span>From 5:00 PM</span>
				<span>To 8:30 PM</span>
				</div>
				<div class="event-col">
				<i class="icon-calendar"></i>
				<span>Tuesday 18</span>
				<span>September, 2018</span>
				</div>
				<p>Welcome to the second phase of your journey of techNITi19. Experience the aura,thrill and glory in a completely new perspective. Delve deep into this immaculate journey of techNITi19, the technical fest of your own college where you learn lessons that will prove to be the stepping stones in your life.</p>
				</div>
				</center>
				</div>
				<div class="col-md-6 col-sm-6 text-center">
				<div class="event-wrap animate-box">
				<h3>Inaugration</h3>
				<div class="event-col">
				<i class="icon-clock"></i>
				<span>7:00 PM</span>
				<span>12:00 AM</span>
				</div>
				<div class="event-col">
				<i class="icon-calendar"></i>
				<span>Saturday 15</span>
				<span>September, 2018</span>
				</div>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div> -->




      <!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image: linear-gradient(to bottom right, rgba(0, 60, 70, 0.8), rgba(60, 0, 70, 0.8));">
        <div class="overlay">
        </div>
        <div class="container">
          <div class="row">
            <div class="display-t">
              <div class="display-tc">
                <div class="col-md-3 col-sm-6 animate-box">
                  <div class="feature-center">
                    <span class="icon">
                      <img src="images/icons/days.png" style="width: 100px;height:100px;border-radius:50%">
                    </span>
                    <span class="counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50">1
                    </span>
                    <span class="counter-label">DAYS
                    </span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                  <div class="feature-center">
                    <span class="icon">
                      <img src="images/icons/events.png" style="width: 100px;height:100px;border-radius:50%">
                    </span>
                    <span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1
                    </span>
                    <span class="counter-label">EVENTS
                    </span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                  <div class="feature-center">
                    <span class="icon">
                      <img src="images/icons/school.png" style="width: 100px;height:100px;border-radius:50%">
                    </span>
                    <span class="counter js-counter" data-from="0" data-to="170" data-speed="5000" data-refresh-interval="50">1
                    </span>
                    <span class="counter-label">COLLEGES
                    </span>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                  <div class="feature-center">
                    <span class="icon">
                      <img src="images/icons/participants.png" style="width: 100px;height:100px;border-radius:50%">
                    </span>
                    <span class="counter js-counter" data-from="0" data-to="35000" data-speed="5000" data-refresh-interval="50">1
                    </span>
                    <span class="counter-label">PARTICIPANTS
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div id="fh5co-started" class="fh5co-bg" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.95), rgba(20, 20, 40, 0.95));">
        <div class="overlay">
        </div>
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2>Be a part of this festival
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="display-t">
              <div class="display-tc">
                <div class="col-md-6 col-sm-12 animate-box">
                  <div class="feature-center">
                    <h3>Sponsor Us
                    </h3>
                    <span class="icon">
                      <a href="sponsorUs.html" target="_blank">
                        <img src="images/icons/icon.jpg" style="width: 100px;height:100px;border-radius:50%">
                      </a>
                    </span>
                    <span class="counter-label" style="color:white;">CONTACT:
                    </span>
                    <br>
                    <span class="counter-label" style="color:white;">+91-8208793720
                    </span>
                    <br>
                    <span class="counter-label" style="color:white;">
                      <a href="mailto:sponsorship@techniti19nit.org">sponsorship@techniti19nit.org
                      </a>
                    </span>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 animate-box">
                  <div class="feature-center">
                    <h3>Campus Ambassador
                    </h3>
                    <span class="icon">
                      <a href="ca.html" target="_blank">
                        <img src="images/icons/hand-shake.jpg" style="width: 100px;height:100px;border-radius:50%">
                      </a>
                    </span>
                    <span class="counter-label" style="color:white;">CONTACT:
                    </span>
                    <br>
                    <span class="counter-label" style="color:white;">+91-9491672309
                    </span>
                    <br>
                    <span class="counter-label" style="color:white;">
                      <a href="mailto:publicity@techniti19nit.org">publicity@techniti19nit.org
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->





       <div class="icon-bar" style="margin-left: 1460px;">
        <a href="https://www.facebook.com/nitjtechniti/" target="_blank">
          <i class="icon-facebook">
          </i>
        </a>
        <a href="https://twitter.com/nitjtechniti"  target="_blank">
          <i class="icon-twitter">
          </i>
        </a>
        <a href="https://www.linkedin.com/company/tecchniti-nit-jalandhar/about/" target="_blank">
          <i class="icon-linkedin">
          </i>
        </a>
        <a href="https://www.youtube.com/channel/UCbzr9X_zSJzDqMKcWwWibyQ"  target="_blank">
          <i class="icon-youtube">
          </i>
        </a>
        <a href="https://www.instagram.com/techniti_nitj/"  target="_blank">
          <i class="icon-instagram">
          </i>
        </a>
      </div>

<!--
      <div id="fh5co-services" class="fh5co-section-black">
        <div class="container" style="height: 500px;">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2 style="color: white;">Testimonials
              </h2>
            </div>
          </div>
          <section id="testim" class="testim">

            <div class="wrap">

              <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
              <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
              <ul id="testim-dots" class="dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
              </ul>
              <div id="testim-content" class="cont">

                <div class="active">
                  <div class="img"><img src="images/Testimonials/sameer.jpg" style="width: 140px;height: 140px;" alt=""></div>
                  <h2>Sameer Saxena</h2>
                  <p>Friends, I am really glad to meet at techNITi, the students participate at the annual scientific and technology techNITi 16, at NIT Jalandhar.</p>
                </div>

                <div>
                  <div class="img"><img src="images/Testimonials/ajith.jpg" style="width: 140px;height: 140px;" alt=""></div>
                  <h2>Ajith Mohan Karimpana</h2>
                  <p>I am tremendously proud as well as humbled to inaugurate techNITi 18, a unique technical festival which is one of it's kind and largest in Northern India.</p>
                </div>

                <div>
                  <div class="img"><img src="images/Testimonials/image001.jpg" alt="" style="width: 140px;height: 140px;"></div>
                  <h2></h2>
                  <p></p>
                </div>

              </div>

            </div>
          </section>
        </div>
      </div>

  <div id="fh5co-started" class="fh5co-bg" style="background-image: linear-gradient(to bottom right, rgba(0, 60, 70, 0.6), rgba(60, 0, 70, 0.6));">
        <div class="overlay"></div>
        <div class="container">
        <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Stay in touch with us!</h2>
        <p>Please Fill-up the form to contact us.</p>
        </div>
        </div>
        <div class="row animate-box">
        <div class="col-md-10 col-md-offset-1">
        <form class="form-inline">
        <div class="col-md-4 col-sm-4">
        <div class="form-group">
        <label for="name" class="sr-only">Name</label>
        <input type="name" class="form-control" id="name" placeholder="Name">
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <button type="submit" class="btn btn-default btn-block" style="color: black;">Send!</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>

-->
      <footer id="fh5co-footer" role="contentinfo" style=" padding-top: 40px; padding-bottom: 60px;">
				<div class="container">
				<div class="row copyright">
				<div class="col-md-12 text-center">
				 Website Developed and Maintained by TechNITi, NIT Jalandhar
				</div>
				</div>
				</div>
			</footer>

    </div>

    <div class="gototop js-top">
      <a href="#" class="js-gotop">
        <i class="icon-arrow-up">
        </i>
      </a>
    </div>

    <!-- <div class="navlog active" onclick="toCross(this)">
    <a href="#" class="nav">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
      </a>
    </div> -->

    <div class="navlog active" title="navbar" onclick="openNav()">
      <a href="#"><i class="icon-menu"></i></a>
          </div>

    <div class="googin loginBUTTON" >
      <style>
      body {font-family: Arial, Helvetica, sans-serif;}

      /* Full-width input fields */
      input[type=text], input[type=password], input[type=email], input[type=tel] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: lightgray;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
      }

      button:hover {
        opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 10px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
      }
      </style>
        <!-- <button type="button" class="btn btn-outline-dark">Sign In</button> -->
        <button  onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-dark" style="color:black; width:auto;" > Login</button>
        <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-outline-dark" style="color:black; width:auto;">Sign Up</button>

    <div id="id01" class="modal">

      <form class="modal-content animate"  method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h1>Log-In</h1>

        </div>

        <div class="container" style="width:80%">
          <!-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>

          </ul> -->
          <label for="uname"><b>Email</b></label> <br>
          <input type="email" placeholder="Enter Email" name="uname" required> <br>

          <label for="psw"><b>Password</b></label> <br>
          <input type="password" minlength="6" placeholder="Enter Password" name="psw" required> <br>

          <button type="submit" class="btn btn-primary" style="color:black">Login</button>
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>

        <!-- <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
      </form>



    </div>

    <div id="id02" class="modal">

      <form class="modal-content animate" action="action1.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h1>Sign up</h1>

        </div>

        <div class="container" style="width:80%">
          <!-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>

          </ul> -->
          <label for="name"><b>Name</b></label> <br>
          <input type="text" placeholder="Enter name" name="name" required> <br>

          <label for="mail"><b>Email</b></label> <br>
          <input type="email" placeholder="Enter Email" name="email" required> <br>
          <label for="colg"><b>College</b></label> <br>
          <input type="text" placeholder="Enter College Name" name="colg" required> <br>
          <label for="phone"><b>Phone No.</b></label> <br>
          <input type="tel" pattern="^\d{10}$"  placeholder="Enter Phone Number" name="phone" required> <br>

                    <label for="Password"><b>Password</b></label> <br>
                        <input type="password" minlength="6" placeholder="Password" id="Password" name="Password" required="" /> <br>


                        <label for="ConfirmPassword"><b>Confirm Password</b></label> <br>
                        <input type="password" placeholder="Confirm Password" id="ConfirmPassword" name="ConfirmPassword" required="" /> <br> <span id='message'></span> <br>

                   <script type="text/javascript">

    $('#Password, #ConfirmPassword').on('keyup', function () {
        if ($('#Password').val() == $('#ConfirmPassword').val()) {
            $('#Submit').attr('disabled', false);
            $('#Submit').css('cursor', 'pointer');
            $('#message').html('Matching').css('color', 'green');
        } else {
            $('#Submit').attr('disabled', true);
            $('#Submit').css('cursor', 'not-allowed');

            $('#message').html('Not Matching').css('color', 'red');
        }
    });
                    </script>

          <button type="submit" name="final5" id="Submit" class="btn btn-primary" style="color:black" >Register</button>
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
        </div>

        <!-- <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
      </form>
    </div>


    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    </div>




   <!-- <div class="logon techniti19LOGIN" id="techniti19LOGIN" title="user">
      <div class="dropdown">
        <a href="#" class="dropbtn"><i class="icon-user"></i></a>
        <div class="dropdown-content">
          <div style="text-align: center;"><span class="clientName" id="clientName" title="name"></span></div>
          <div style="text-align: center;"><span class="techNITi19id" id="techNITi19id" title="techniti19 id"></span></div>
          <div style="text-align: center;"><button onclick="logout()" class="logout" title="logout">LOGOUT</button></div>
        </div>
      </div>
    </div> -->


  <!-- Navigation Code starts here-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div onclick="showMyRegistrations('myEvents.html')">
          <a href="#" class="navLink myRegistrations" style="visibility: hidden;"><i class="icon-user"></i> My Registration</a>
        </div>

        <a href="#" class="navLink"><i class="icon-home"></i> Home</a>
        <a href="events/deptcategory.html" class="navLink"><i class="icon-star"></i> Departmental Events</a>
        <a href="events/category.html" class="navLink"><i class="icon-star"></i> Mega Events</a>
       <!-- <a href="#" target="__blank"  class="navLink"><i class="icon-globe"></i> MUN</a>
        <a href="#" class="navLink"><i class="icon-bag"></i> Guest Lectures</a>
        <a href="#" class="navLink"><i class="icon-list"></i> Workshops</a>
        <a href="#" class="navLink"><i class="icon-grid"></i> Attractions</a>
        <a href="#" class="navLink"><i class="icon-star"></i> Exhibitons</a>-->
        <a href="sponsors.html" class="navLink"><i class="icon-address"></i>Sponsors</a>
        <!--<a href="#" class="navLink"><i class="icon-help"></i> Social Initiatives</a>-->
        <!-- <a href="#" class="navLink"><i class="icon-document"></i> Gallery</a> -->
        <a href="team.php" class="navLink"><i class="icon-users"></i> Core Team</a>
        <a href="developers.html" class="navLink"><i class="icon-users"></i>Developers</a>
        <a href="contacts.html" class="navLink"><i class="icon-help"></i> Contact Us</a>

       <div class="dropup">
          <a href="#" class="navLink" class="dropbtn2"><i class="icon-home"></i> Accommodation</a>
          <div class="dropup-content2">
            <a href="#" target="_blank">Accomodation Policy</a>
            <a href="#" target="_blank">Accomodation Form</a>
          </div>
        </div>

        <a href="#" target="_blank" class="navLink" style=""><img src="images/shirt1.jpg" style="height: 60px;width: 60px;border-radius: 50%;"> T-SHIRT </a>


        <br>
        <a href="https://www.facebook.com/nitjtechniti/" target="_blank" class="navSocial" ><i class="icon-facebook"></i></a>
        <a href="https://www.instagram.com/techniti_2k18/" target="_blank" class="navSocial" ><i class="icon-instagram"></i></a>

    </div>
  <!-- Navigation Code ends here -->


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="js/simplyCountdown.js"></script>
    <script src="js/main.js"></script>
    <script src="www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
    <script src="js/login.js" ></script>
    <script type="text/javascript" src="events/registration.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script type="text/javascript">
      if (typeof(Storage) !== "undefined")
      {
        sessionStorage.setItem("path", "index-2.html");
        sessionStorage.setItem("formPath","form.html");
      }
    </script>

    <script>
      var d = new Date("2019-11-8");
      // default example
      simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
      }
     );
    </script>

    <script src="use.fontawesome.com/1744f3f671.js"></script>
    <script type="text/javascript">
      var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(
          document.getElementById("testim-dots").children
        ),
        testimContent = Array.prototype.slice.call(
          document.getElementById("testim-content").children
        ),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;

        // Testim Script
        function playSlide(slide) {
          for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
          }

          if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
          }

          if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
          }

          if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
          }
          testimContent[slide].classList.add("active");
          testimDots[slide].classList.add("active");

          currentActive = currentSlide;

          clearTimeout(testimTimer);
          testimTimer = setTimeout(function() {
            playSlide((currentSlide += 1));
          }, testimSpeed);
        }

        testimLeftArrow.addEventListener("click", function() {
          playSlide((currentSlide -= 1));
        });

        testimRightArrow.addEventListener("click", function() {
          playSlide((currentSlide += 1));
        });

        for (var l = 0; l < testimDots.length; l++) {
          testimDots[l].addEventListener("click", function() {
            playSlide((currentSlide = testimDots.indexOf(this)));
          });
        }

        playSlide(currentSlide);

        // keyboard shortcuts
        document.addEventListener("keyup", function(e) {
          switch (e.keyCode) {
            case 37:
              testimLeftArrow.click();
              break;

            case 39:
              testimRightArrow.click();
              break;

            case 39:
              testimRightArrow.click();
              break;

            default:
              break;
          }
        });

        testim.addEventListener("touchstart", function(e) {
          touchStartPos = e.changedTouches[0].clientX;
        });

        testim.addEventListener("touchend", function(e) {
          touchEndPos = e.changedTouches[0].clientX;

          touchPosDiff = touchStartPos - touchEndPos;

          console.log(touchPosDiff);
          console.log(touchStartPos);
          console.log(touchEndPos);

          if (touchPosDiff > 0 + ignoreTouch) {
            testimLeftArrow.click();
          } else if (touchPosDiff < 0 - ignoreTouch) {
            testimRightArrow.click();
          } else {
            return;
          }
        });

    </script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 30,
      dots: true,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          margin: 10,
          stagePadding: 20,
        },
        600: {
          items: 3,
          margin: 20,
          stagePadding: 50,
        },
        1000: {
          items: 4
        }
      }
      });
    </script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
          items: 3,
          itemsDesktop: [1000, 3],
          itemsDesktopSmall: [979, 2],
          itemsTablet: [768, 2],
          itemsMobile: [650, 1],
          pagination: true,
          autoplay: true
        });
      });
    </script>
 -->
  </body>


</html>
