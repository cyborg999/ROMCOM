<?php include_once "model.php"; $login  = new Model(); ?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .history h2,
      .history h5 {
        font-family: 'Poppins', sans-serif!important;
        font-weight: 700;
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
      .history img {
        width: 100%;
        clear: both;
      }
    </style>
     <article class="container-fluid vid">
        <iframe src="https://www.youtube.com/embed/FwrEtEoWPPU?autoplay=1&showinfo=0&controls=0" frameborder="0" gesture="media" allowfullscreen></iframe>
      </article>
    <main role="main" id="login">
      <section class="container">
        <div class="row history">
          <div class="col-sm-12">
            <img src="img/01.jpg">
            <img src="img/02.jpg">
            <img src="img/03.jpg">
            <img src="img/04.jpg">
          </div>
        </div>
      </section>
    </main>
      <?php include_once "footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
      })(jQuery)
    </script>
  </body>
</html>