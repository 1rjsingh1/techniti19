<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=windows-1251" /><!-- /Added by HTTrack -->
<head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TechNITi &#124;&#124; Events </title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="msapplication-TileColor" content="#090025">
    <meta name="theme-color" content="#090025">
   
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


<link href="bitrix/cache/css/s1/neurohive/kernel_main/kernel_maind75a.css?152969663326563" type="text/css" rel="stylesheet" />
<link href="bitrix/cache/css/s1/neurohive/template/template_6f5efa8a81bc2b376995e8406bd5943b838b.css?1529696666150584" type="text/css" data-template-style="true" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">



</head>

<body class="" style="color: white;">

            <style>.hud-timer{display: none}</style><!-- Shaders -->
<script id="shader-fs" type="x-shader/x-fragment">
      #ifdef GL_ES
        precision highp float;
        #endif
      void main(void) {
       gl_FragColor = vec4(0.2, 0.3, 0.4, 1.0);
      }
    </script>
<script id="shader-vs" type="x-shader/x-vertex">
      attribute vec3 vertexPosition;

      uniform mat4 modelViewMatrix;
      uniform mat4 perspectiveMatrix;

      void main(void) {
        gl_Position = perspectiveMatrix * modelViewMatrix * vec4(  vertexPosition, 1.0);
      }
    </script>

<!-- three.js -->
<div id="webgl-output"></div>
<main class="preview-page">
    <div id="comp_83b18d056314f319063a84aeecd54076"><div class="preview" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url(img/back_img/textile.jpg);background-size: cover;
    background-position: center;
    height: 100vh;
    background-attachment: fixed;">
    <div class="preview__inner">
        <span class="preview__author" style="font-size: 12px;">Number of Events&#58; 3</span>
        <h1 class="preview__name" style="font-size: 40px;">
            Society Of Textile Engineers</h1>

    </div>
           
    </div>

<div class="preview-info">

        <h2 class="preview-info__header">About the Society</h2>
    <div class="preview-info__content" style="margin-bottom: 3em; font-size: 30px;">
        <p style="font-size: 20px;"></p>


<p style="font-size: 20px;">For further details about the department faculty and facilities&#44;<a href="http://www.nitj.ac.in/index.php/nitj_cinfo/index/54"> click here</a></p>

    </div>
    
</div>
<div class="comments" id="comments">
    <h2 class="comments__header">List of Events</h2>
    <div class="comments__content">
        <div class="comments__left">
            <div class="comment comment--first">
            <b class="comment__author" style="font-size: 30px;">Patagonia </b>
            <p class="comment__date"></p>
            <p class="comment__text">
              In this event the participants will be provided a crossword which shall be filled with

the names of famous textile brands. Logos of the brands will be provided for the hints.</p>
                <p>

  
<form method="get" action="../departmental_events/texstyles/patagonia.php">
    <button type="submit" style="background-color: Transparent;
    background-repeat:no-repeat;
    border: solid;
    cursor:pointer;
    border-radius: 10px;
    overflow: hidden; ">Register</button>
</form>





                <div class="comment__underline"></div>
        </div>
                    <div class="comment comment--first">
            <b class="comment__author"  style="font-size: 30px;">Tax-Ogle</b>
            <p class="comment__date"></p>
            <p class="comment__text">Participants will be provided with some riddles indicating hints about different

locations in the college. They have to identify the correct locations and accordingly top teams
will be qualified to next round.
</p>
 
<form method="get" action="../departmental_events/texstyles/taxogle.php">
    <button type="submit" style="background-color: Transparent;
    background-repeat:no-repeat;
    border: solid;
    cursor:pointer;
    border-radius: 10px;
    overflow: hidden; ">Register</button>
</form>

                        <div class="comment__underline"></div>

        </div>
                  
                  <div class="comment comment--first">
            <b class="comment__author"  style="font-size: 30px;">Tex-Scapes</b>
            <p class="comment__date"></p>
            <p class="comment__text">Participants have to draw Apparel Designing on the sheets provided with the help of
pencils, colors, sketch pens etc.
</p>
 
<form method="get" action="../departmental_events/texstyles/texscapes.php">
    <button type="submit" style="background-color: Transparent;
    background-repeat:no-repeat;
    border: solid;
    cursor:pointer;
    border-radius: 10px;
    overflow: hidden; ">Register</button>
</form>

                        <div class="comment__underline"></div>

        </div>

</div>

</div>
    </main>

<script type="text/javascript"  src="bitrix/cache/js/s1/neurohive/template/template_5db094422e4fac0e2ce6bb1de9ac94883dfd.js?1529696633108698"></script>

<script>
        window.addEventListener('load', function () {

            var el = document.querySelector('.preloader');
            el.style.opacity = 1;

            (function fade() {
                if ((el.style.opacity -= 0.15) < 0) {
                    window.scrollTo(0, 0);
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        });
    </script>


<script src="local/templates/neurohive/assets/js/gsap.js"></script>
<script src="local/templates/neurohive/assets/js/pixi.js"></script>
<script src="local/templates/neurohive/assets/js/polyfill.min.js"></script>
<script src="local/templates/neurohive/assets/js/scrollmagic.js"></script>
<script src="local/templates/neurohive/assets/js/animation.gsap.js"></script>
<script src="local/templates/neurohive/assets/js/project.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
  

    <script src="main.js"></script>
</body>
</html>