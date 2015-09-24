<?php include ("data/global.php");   ?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
        <meta property="og:title" content="">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo $current_url;?>">
        <meta property="og:image" content="">
        <meta property="og:description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title>MicroArts Creative Agency</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $styles_dir;?>main.css">
        <link rel="stylesheet" href="<?php echo $styles_dir;?>font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $styles_dir;?>loading-bars.css" type="text/css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>ScrollMagic.min.js"></script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>animation.gsap.min.js"></script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>jquery.ScrollMagic.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
	</head>
	<body class="home">



		<header class="primary-header">
            <div class="content">
                <a href="#" class="logo">MicroArts Creative Agency</a>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Agency</a>
                        </li>
                        <li>
                            <a href="#">Fit</a>
                        </li>
                        <li>
                            <a href="#">Strategies &amp; Services</a>
                        </li>
                        <li>
                            <a href="#">Results</a>
                        </li>
                        <li>
                            <a href="#">Insights</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
		</header>

		<div class="main" role="main">
        <div class="billboard opening-animation">
            <div class="floater one-left"></div>
            <div class="floater two-left"></div>
            <div class="floater one-right"></div>
            <div class="floater two-right"></div>
            <div class="content">
                <section class="first-slide">
                    <h2 class="small">Create Your</h2>
                    <h2 class="large">Brand Revolution</h2>
                </section>
                <section class="second-slide">
                    <h3 class="small">Strategy, Design, and Communications<br />to reinvent your place in the market.</h3>
                </section>
                <section class="load">
                    <div class="arrow-spinner resize">
                        <img src="ux/imgs/home/spinner.png" alt="Arrows Spinning" />
                        <span class="scroll">Scroll</span>
                        <div class="arrow resize">
                            <img src="ux/imgs/home/arrow.png" alt="MicroArts Logo" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="portfolio">

<!-- -->
          <div class="iS-Loading">
            <div class="iS-Loadingbox">
              <p class="iS-Loadingboxtitle">Loading</p>
              <div class="iS-Loadingboxbar"></div>
              <div class="iS-Loadingboxbar"></div>
              <div class="iS-Loadingboxbar"></div>
              <div class="iS-Loadingboxbar"></div>
            </div>
          </div>
          <div id="slide01" class="iS iS-SkinThumbnails">
          <!-- -->
          <!--Start Commands-->
          	<div class="iS-Commands">
                  <div class="iS-Previous"><i class="fa fa-angle-left"></i></div>
                  <div class="iS-Next"><i class="fa fa-angle-right"></i></div>
                  <div class="iS-Play" style="display: none;"><i class="fa fa-play"></i></div>
                  <div class="iS-Stop" style="display: none;"><i class="fa fa-pause"></i></div>


                  <div class="iS-Loopline"></div>
                  <div class="iS-Dots">
                      <div class="iS-Dot iS-Dotactive">WBCL</div>
                      <div class="iS-Dot healbe">Healbe</div>
                      <div class="iS-Dot microarts">MicroArts Creative Agency</div>
                      <div class="iS-Dot finsix">FinSix</div>
                      <div class="iS-Dot badlab">BadLab</div>
                  </div>
          	</div>
            <!--End Commands-->
            <!--Start Content-->
            <div class="iS-Content">
                  <!---WBCL  -->
                  <div class="iS-Items">
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="100"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="product" src="content/home/wbcl-packaging.png" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="100"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="logo wbcl" src="content/home/wbcl-logo.png" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                         data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="100"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="500"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <h2><span>Get Their</span><br>Attention</h2>
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="100"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="700"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <p>If you're an underdog in an overdeveloped category, your competition's white noise can be your greatest opportunity. Through a dual focus on differentiated performance and emotion, MicroArts helped World's Best Cat Litter&#153; create a sustainable competitive advantage&#151;and grow its market share 1,000,000% over five years.</p>
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="100"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">

                           <img src="content/home/learn-how.png" alt="" class="btn">

                      </div>
                      <!-- -->
                  </div>
                  <!-- HEALBE-->
                  <div class="iS-Items">
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="product healbe" src="content/home/gobe-package.jpg" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="logo healbe" src="content/home/gobe-logo.png" />
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <h2><span>Make Them</span><br>Believe</h2>
                      </div>
                      <!-- -->
                       <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <p>Your competition will steal your game-changing technology, but they can't steal your audience's hearts. MicroArts helped Healbe&#153; connect its revolutionary performance differentiator to its audience's deep emotional desires, creating a groundswell of dedicated brand evangelists. </p>
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">


                            <img src="content/home/learn-how.png" alt="" class="btn">

                      </div>
                      <!-- -->
                  </div>
                  <!-- MICROARTS -->
                  <div class="iS-Items">
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="product microarts" src="content/home/microarts-book.png" />
                      </div>
                       <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="logo microarts" src="ux/imgs/microarts.gif" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <h2><span>Get</span><br>Started</h2>
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <p>Are old ways of thinking about competition and creative strategy holding back your brand? Download a free Brand Opportunity Worksheet to help discover your true competitive difference, and start creating your brand revolution.</p>
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">


                          <img src="content/home/download-now.png" alt="" class="btn">

                      </div>
                      <!-- -->
                  </div>
                  <!---FINSIX  -->
                  <div class="iS-Items">
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="product finsix" src="content/home/dart-package.jpg" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="logo finsix" src="content/home/dart-logo.png" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <h2><span>Strip It</span><br>Down</h2>
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <p>When you're selling to a fatigued audience, the most direct message carries the most weight. MicroArts developed visual identity, packaging, and strategic messaging to make purchasing a FINSix DART&#153; the easiest possible decision for its audience.</p>
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">


                           <img src="content/home/learn-how.png" alt="" class="btn finsix">

                      </div>
                      <!-- -->
                  </div>
                  <!-- BADLAB-->
                  <div class="iS-Items">
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="product badlab" src="content/home/badlab-bottles.jpg" />
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                          <img class="logo badlab" src="content/home/badlab-logo.png" />
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                          data-effectIn="slidetop fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidetop fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <h2><span>Build Your</span><br>Tribe</h2>
                      </div>
                      <!-- -->
                      <div class="iS-Item"
                          data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">
                           <p>The best way to ensure brand loyalty is to become part of your audience's story. MicroArts cut through the frenzied sameness of the exploding craft beer market to help Bad Lab Beer Co.&#153; create a brand its consumers can own. </p>
                      </div>
                      <!-- -->
                     <div class="iS-Item"
                         data-effectIn="slidebottom fadein" data-effectInTime="1000" data-effectInDelay="1400"
                           data-effectOut="slideleft fadein" data-effectOutTime="500" data-effectOutDelay="0"
                         data-effectInBack="slidebottom fadein" data-effectInTimeBack="1000" data-effectInDelayBack="900"
                           data-effectOutBack="slideright fadein" data-effectOutTimeBack="500" data-effectOutDelayBack="0">


                         <img src="content/home/learn-how.png" alt="" class="btn badlab">

                      </div>
                      <!-- -->
                  </div>

              </div>
              <!--End Content-->
          <!-- -->
          </div><!--End Slider -->
<!------------------------------------------------------------->

        </div> <!-- Slider Container End -->
            
        <div class="billboard middle-animation">
            <div class="floater one-left"></div>
            <div class="floater two-left"></div>
            <div class="floater one-right"></div>
            <div class="floater two-right"></div>
            <div class="content">
                <section class="title-block">
                    <h2 class="small">Blow Up Your Market<br />In A Big Way.</h2>
                    <h2 class="medium">One Micro Step At A Time.</h2>
                </section>
                <section class="process">
                    <div class="one-third first">
                        <img src="ux/imgs/home/spin-middle.png" alt="Arrows Spinning" />
                        <div class="title">
                            <h3 class="small light">The</h3>
                            <h3 class="small">Strategy</h3>
                            <h4 class="small light">That defines your <br/ >difference.</h4>
                            <p class="light">Stand out in a crowded market, with brand strategies that change the conversation for your audience.</p>
                        </div>
                        
                    </div>
                    <div class="one-third second">
                        <img src="ux/imgs/home/spin-middle.png" alt="Arrows Spinning" />
                        <div class="title">
                            <h3 class="small light">The</h3>
                            <h3 class="small">Creative</h3>
                            <h4 class="small light">That disrupts your category.</h4>
                            <p class="light">Carve out a space you can own, with positioning, messaging, and design that redefines your place in the market.</p>
                        </div>
                        
                    </div>
                    <div class="one-third third">
                        <img src="ux/imgs/home/spin-middle.png" alt="Arrows Spinning" />
                        <div class="title">
                            <h3 class="small light">The</h3>
                            <h3 class="small">Campaigns</h3>
                            <h4 class="small light">That defy<br/ >expectations.</h4>
                            <p class="light">Stop your audience in their tracks, with simple, memorable, and emotionally powerful brand experiences.</p>
                        </div>
                        
                    </div>
                </section>
                <section class="action">
                    
                </section>
            </div>
        </div>

    </div>

    <footer class="primary-footer">

    </footer>
        <script src="<?php echo $scripts_dir;?>scripts.min.js"></script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>loader.js"></script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>infinitySlider.min.js"></script>
        <script>
$(document).ready(function() {
  infinitySlider(
    infinitySliderId = 'slide01',
    infinitySliderCommandsClass = 'iS-Commands',
    infinitySliderPreviousButtonClass = 'iS-Previous',
    infinitySliderNextButtonClass = 'iS-Next',
    infinitySliderDotsClass = 'iS-Dots',
    infinitySliderDotClass = 'iS-Dot',
    infinitySliderDotActiveClass = 'iS-Dotactive',
    infinitySliderPlayButtonClass ='iS-Play',
    infinitySliderPlayButtonActiveClass ='iS-Playactive',
    infinitySliderStopButtonClass ='iS-Stop',
    infinitySliderStopButtonActiveClass ='iS-Stopactive',
    infinitySliderLoopIndicator ='iS-Loopline',
    infinitySliderContentClass ='iS-Content',
    infinitySliderItemsClass = 'iS-Items',
    infinitySliderItemClass = 'iS-Item',
    infinitySliderAutoStartLoop = false,
    infinitySliderKeyboardNavigation = true,
    infinitySliderTouchNavigation = 'mobile',
    infinitySliderStarterSlide = 1
  )
});
        </script>
        <script type="text/javascript" src="<?php echo $scripts_dir;?>thumbnails-horizontal.js"></script>
	</body>
</html>
