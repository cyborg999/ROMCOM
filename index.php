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
            <a class="btn btn-danger" href="movie.php">Alamin pa.</a>
            <img src="img/img3.png">
          </div>
      </div>
      <div class="row history">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <h2>History of Philippine Cinema</h2>
          <p>Paano nga ba nasasalamin ang RomCom Movies sa ating mga pusong Pinoy?</p>

          <h5>History of Philippine Cinema </h5>
          <p>Muli ibalik ang tamis ng nakaraan— ay! Tamis ng yaman ng ating kultura pala.</p>
          <p>Early Cinema – is a special period described by filmic components resulting from the technological advance acquiring one at a time.</p>
          <h5>Hispanic & Anglo Saxon Influence (1897 – 1910)</h5>
          <p>-  Plays, Films and Language used during the Hispanic Era are centered in Spanish culture and ideologies and it was catered mostly to the elites and powerful. </p>
          <p>- In 1896, a Spaniard by the name of Francisco Pertierra, prepared to launch his first movie show in Manila. </p> 
          <p>-  On January 1, 1897, the first four movies shown in the Philippines where projected at the Salon de Pertierra at no. 12 Escolta.</p>
          <p>-  On 1897, Antonio Ramos, a Spanish soldier, imported 30 films from Lumiere Cinematograph from Paris.</p> 
          <p>- By August 1987, Liebman and Peritz showcase the first movies on the Lumiere Cinematograph located in Manila. </p>
          <p>-  1902, second movie house was built, Grand Cinematografo Parisien, located at Quaipo, owned by Samuel Rebarber. </p>
          <p>- In 1904 several movie houses opened such as Cinema Orpheum located in Escolta.</p>
          <p>- 1909, the first story film made in the Philippines- Rose of the Philippines that has been produced by IMP Company, Carl Laemmele’s Independent Moving Picture Company.</p>
          <h5>Anglo-Saxon Influence (1910 – 1940)</h5>
          <p>- 1910 First Movie with sound, using the Chronophone</p>
          <p>- American influences of Phil. Cinema: technology & capital, the providers of the material, production, financial support and many more; language, the use of English in dialogues; aesthetics, styles, kind of editing, the introduction of popular western genres, such as, melodrama, action, comedy and horror; receptions, how the screen shapes the practices and culture to the society, and ideology, shaping the viewers’ minds.</p>
          <h5>1911 Pre Hollywood Manila </h5>
          <p>- Philippines became the as America’s “Junk” Market, by junk, it means used films that has been shown in the U.S. and being sold in the Philippines, however films with scratches, damages and missing portions of the film.   </p>
          <p>- Most motion pictures during this era are about war, victory of the Americans against the Spaniards. After 3 decades of the American colonization, film has spread vastly, influencing to the Philippine society, culturally and economically. </p>
          <p>- 1919, Filipino artists have been making movies</p>
          <p>-American films influences Philippine films, aesthetically, how movies are made and received. </p>
          <p>- 1925 the use of English titles in Tagalog movies.</p>
          <p>-  1930, linguistic dilemma occurred when films started to have sounds. </p>
          <h5>1950s (Hollywood Influence) to 1970 </h5>
          <p>- 1950, The Golden Age of Philippine Cinema </p>
          <p>- 1960s, the foreign films that were raking in a lot of income were action pictures sensationalizing violence and soft core sex films hitherto banned from Philippine theater screens, Italian “spaghetti” Westerns, American James Bond-type thrillers, Chinese/Japanese martial arts films and European sex melodramas.</p>
          <h5>During Martial Law </h5>
          <p>- 1971, peak of production of Filipino movies with 251 movies.</p>
          <p>- 1972, during martial law, filmmakers stopped making bold. </p>
          <p>- The Experiemntal Cinema of the Philippines (ECP) was established as an umbrella org housing Film Fund, etc.</p>
          <p>- Manila International Film Festival (MIFF) was also placed under ECP, through it had its first festival previous to its inception. The Movie Welfare's Fund set up around this time to provide welfare and benefits to movie workers. </p>
          <h5>1980s: Phil. Films after Marcos</h5>
          <p>- Ranked as the top ten film-producing country in the world</p>
          <p>- Kilala ang Regal Films sa mga paggawa ng mga bold at youth-oriented films.</p>
          <h5>Contemporary Phil. Film</h5>
          <p>-  Presently, Philippine Cinema focus revolved around genres, plots, characterizations and aesthetics. Teen-oriented romantic comedies and the anatomy-baring sex flicks are currently popular in Philippine cinema. </p>

          <h2>Fun Fact </h2>
          <b>Did you know?</b>
          <p>Kissing scenes in the Philippin movies was introduced and popularized by Jose Nepomuceno in 1926.</p>
          <p>And in those days the fomer senator, Rogelio de la Rosa, was known to be a champion kisser.</p>

          <b>Did you know? </b>
          <p>The word Sine derived from Spanish word: Cine, same with pelikula (pelikula), and singtas (sintas)</p>
          <p>Here are more movie-related words that originated from Spanish:</p>
          <ul>
            <li>Spanish- Filipino</li>
            <li>Accion  - Aksiyon</li>
            <li>Alquila – Alkila (relating to film rental)</li>
            <li>Audicion – Awdisyon</li>
            <li>Contrata – Kontrata</li>
            <li>Contravida – Contrabida</li>
            <li>Critico – Kritiko</li>
            <li>Entrada  - Entrada </li>
            <li>Ecsena – Eksena</li>
            <li>Fotografia – Potograpiya </li>
            <li>Imagen – Imahen</li>
            <li>Industria - industria</li>
            <li>Musica – Musika</li>
            <li>Produccion – Produksiyon</li>
            <li>Taquilla – Takilya (box office)</li>
            <li>Taquillera  - Takilyera (box office vendor)</li>
            <li>Tecnica – Teknika </li>
            <li>Tecnologia – Teknolohiya</li>
            <li>Telon – Telon (screen)</li>
          </ul>
        </div>
        <div class="col-sm-2"></div>
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