<?php 
  include_once "model.php"; 

  $model  = new Model(); 

  if(isset($_GET['title'])){
  $search = $model->findMovieByTitle($_GET['title']);
  // echo "<pre>";
  // print_r($search);
  // die();
  }
?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .img-fluid {
        width: 200px;
        margin-right: 20px;
        float: left;
        max-height: 100%;
        height: 300px;
      }
    </style>
    <main role="main" id="login">
      <section class="container">
        <article class="article">
          <h2 class="display-5"><i>"<?= $_GET['title'] ?>"</i> search result(<?= count($search)?>)</h2>
          <div class="columns col-lg-12">
                <?php foreach($search as $idx => $slide): ?>
                  <div class="jumbotron">
                    <img class="img-fluid" src="uploads/photos/<?= $slide['filename'];?>" alt="First slide">
                    <h1 class="display-3"><?= $slide['title'];?></h1>
                    <p class="lead"><?= $slide['description'];?></p>
                    <p class="lead">
                      <a class="btn btn-primary btn-lg" href="detail.php?id=<?=  $slide['id'];?>" role="button">Learn more</a>
                    </p>
                  </div>
                <?php endforeach ?>
              </div>
        </article>

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