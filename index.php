<?php  
  include_once "model.php"; 
  $games  = new Model(); 
  $featured = $games->getFeaturedGames(); 
  $slideshow = $games->getSlideShow();
?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .carousel-item > img {
          position: static;
          top: 0;
          left: 0;
          /* min-width: 100%; */
          height: 32rem;
          text-align: center;
          margin: 0 auto;
          margin: 0 auto;
          width: 100%;
          height: auto;
      }
      .carousel-caption h1 {
        text-shadow: 1px 1px 10px black;
      }
      .video {
        text-align: center;
        margin-top: 18px;
      }
      .vid {
        margin: 0;
        padding: 0;
      }
      iframe {
        position: relative;
        width: 100%;
        height: 90vh;
        top: 0;
      }
    </style>
    <main role="main" id="main">

      <article class="container-fluid vid">
        <iframe src="https://www.youtube.com/embed/FwrEtEoWPPU?autoplay=1&showinfo=0&controls=0" frameborder="0" gesture="media" allowfullscreen></iframe>
      </article>

      <div id="myCarousel" class="hidden carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner hidden">

          <?php //$c=0;foreach($games->getAllSlider() as $u => $x):?>
      <!--     <div class="carousel-item <?php echo ($c==0) ? 'active': ''?>">
            <img class="first-slide" src="uploads/photos/<?= $x['filename'];?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1><?= $x['title'];?></h1>
                <p><?= $x['description'];?></p>
                <p><a class="btn btn-lg btn-primary" href="detail.php?id=<?= $x['id'];?>" role="button">View</a></p>
              </div>
            </div>
          </div> -->
          <?php //$c++; ?>
          <?php //endforeach ?>
          
        </div>
        <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>

      <style type="text/css">

          .slogan h1,
          .slogan h2,
          .slogan h3,
          .slogan h5 {
            color: black;
            text-align: center;
          }
          .history h2,
          .history h5,
          .slogan h2,
          .slogan h3,
          .slogan h5 {
            font-family: 'Poppins', sans-serif!important;
            font-weight: 700;
          }
          .author {
            margin-bottom: 50px;
          }
          .author p {
            font-family: 'Poppins', sans-serif!important;
            max-width: 800px;
          }

          .author img {
            position: absolute;
            width: 300px;
            right: 0;
            top: 0;
            z-index: 2;
          }
          .desc {
            min-height: 400px;
            position: relative;
          }
          @media(min-width: 421px;){
            .author img {
            position: absolute;
            width: 300px;
            right: 0;
            top: 0;
            z-index: 2;
          }
          }
          @media(max-width: 420px;){
            .author img {
              position: static;
              width: 100%;
              max-height: 200px;
            }
          }
          .target2 {
            text-align: right;
            position: relative;
            z-index: 999;
            background: white;
          }
          .target2 p,
          .target2 .btn {
            float: right;
            clear: both;
          }
          .target2 img {
            right: initial;
            left: 0;
          }
          .author .target3 img {
            top: -80px;
          }
          .scrolld {
            text-align: center;
            font-weight: 500;
          }
      </style>
      <div class="container slogan">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <h1>Welcome!</h2>
            <h3>Usapang Pagibig?</h3>
            <h3>Usapang, ROMCOM.</h3>
            <p class="scrolld">Scroll down para kiligin</p>
          </div>
        </div>
      </div>

      <div class="author container">
        <div class="row">
          <div class="target1 desc col-lg-12 col-sm-12">
            <br>
            <h2>Sino nga ba kami?</h2>
            <p>Ako ay isang mag-aaral sa De La Salle-College of St. Benilde at ito ay isang proyekto sa “thesis”.</p>
            <a class="btn btn-danger" href="about.php">Kilalanin ang awtor</a>
            <img src="img/img1.jpg">
          </div>
          <div class="target2 desc col-lg-12 col-sm-12">
            <br> 
            <img src="img/img2.png">
            <h2>Ano nga ba ang pinaglalaban namin?</h2>
            <p>Ang pinaglalaban ng puso namin ay kung paano nga ba sinasalamin ng Pinoy Romatic Comedy Movies ang pusong pinoy.</p>
            <a class="btn btn-danger" href="about.php">Alamin pa.</a>
          </div>
          <div class="target3 desc col-lg-12 col-sm-12">
            <br>
            <h2>Para saan ito?</h2>
            <p>Ang website na’to ay para sa’yo! Oo, ikaw sa nagbabasa nito. Ito ay isang reperensiya ng mga Pinoy RomCom na pelikula mula 2000-2017. Ito ay isang uri ng gabay kung ano nais niyong panoorin at mga impormasyon ng RomCom na pelikula.</p>
            <a class="btn btn-danger" href="bottomline.php">Alamin pa.</a>
            <img src="img/img3.png">
          </div>
      </div>
      

      
    </main>
    <?php include_once "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
        $('.carousel').carousel();

        var target1 = ($(".target1").first().offset().top-200);
        var target2 = ($(".target2").first().offset().top-150);
        var target3 = ($(".target3").first().offset().top-150);
        $(".target1").first().find("img").fadeOut();
        $(".target2").first().find("img").fadeOut();
        $(".target3").first().find("img").fadeOut();
        $(window).scroll(function (event) {
           var scroll = $(window).scrollTop();
           var mainTarget;

           if((scroll >= target1) && (scroll < target2)){
            $(".target2").first().find("img").hide();
            $(".target3").first().find("img").hide();
            $(".target1").first().find("img").fadeIn("slow");
           }
           if((scroll >= target2) && (scroll < target3)){
            $(".target1").first().find("img").hide();
            $(".target3").first().find("img").hide();
            $(".target2").first().find("img").fadeIn("slow");
           }
           if((scroll >= target3)){
            $(".target1").first().find("img").hide();
            $(".target2").first().find("img").hide();
            $(".target3").first().find("img").fadeIn("slow");
           }
        });
      })(jQuery)
    </script>
  </body>
</html>