<?php 
  include_once "model.php";  

  $admin  = new Model(); 
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
      .delete {
        position: absolute;
        right: 12px;
        top: 0;
        font-weight: 700;
        text-decoration: none;
        float: right;
        font-size: 23px;
        color: white;
        margin: 0;
        padding: 0;

      }
      .boxes {
        width: 100%;
      }
      .boxes h5 {
        text-align: center;
        font-size: 27px;
        background: #d43232;
        padding: 19px;
        color: white;
        margin: 0;
      }
      .boxes .box {
        margin: 0;
        display: block;
        width: 33.33%;
        text-align: center;
        float: left;
        border-radius: 0;
        cursor: pointer;
      }
      .box:hover {
          background: white;
          color: black;
          transition: all 1s;
        }
      .box.active,
      .box.active:hover {
        background: #93efef;
      } 
      .card {
        width: 200px;
        height: 200px;
        padding: 0;
        margin: 0;
        border-radius: 0;
        float: left;
        border:0;
      }
      .card img {
        margin: 0;
        padding: 0;
        height: 200px;
        width: 100%;
      }
    </style>
    <main role="main">
      <section class="container">
        <article class="article">
          <h2 class="display-4">List of Movies</h2>
          <br/>
        </article>
        <article class="container">
            <div class="row">
              <div class="col-lg-3">

              <div class="boxes">
                <h5>Years</h5>
                <?php $i=17; for($x=0;$x<=$i;$x++) : ?>
                  <a class="box alert alert-info" data-id=<?= 2000+$x;?>><?= 2000+$x; ?></a>
                <?php endfor; ?>
              </div>
              </div>
              <div class="columns col-lg-9 cards">
                <?php foreach($admin->getAllSlider() as $idx => $slide): ?>
                  <div class="card">
                    <?php if(isset($_SESSION['user'])):?>
                      <?php if($_SESSION['user']['type'] == "admin"):?>
                        <a href="" class="delete" data-id=<?= $slide['id']; ?>>x</a>
                      <?php endif ?>
                    <?php endif ?>
                    
                      <a class="btn" href="detail.php?id=<?=  $slide['id'];?>" role="button"><img class="card-img-top" src="uploads/photos/<?= $slide['filename'];?>" alt="preview"></a>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
        </article>
      </section>
    </main>
    <script type="text/html" id="card">
      <div class="card" style="width: 15rem; margin-right:10px;float: left;">
        <img class="card-img-top" src="uploads/photos/[FILENAME]" alt="preview">
        <div class="card-body">
          <h4 class="card-title">[TITLE]</h4>
          <p class="card-text">[DESC]</p>
          <a class="btn btn-primary" href="detail.php?id=[ID]" role="button">Learn more</a>
        </div>
      </div>
    </script>
    <?php include_once "footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
        var box = $(".box");
        var x = $(".delete");

        box.on("click", function(e){
          e.preventDefault();
          $(".box.active").removeClass("active");

          $(this).addClass("active");

          var id = $(this).data("id");
          console.log(id);

          $.ajax({
            url   : 'process.php',
            data  : {year:id, getAllSliderByYear:true},
            type  : 'POST',
            dataType  :'JSON', 
            success : function(res){
              $(".card").remove();

              for(var i in res) {
                for(var x in res[i]) {
                  var html = $("#card").html();

                  html = html.replace("[ID]", res[i][x].id).
                    replace("[ID]", res[i][x].id).
                    replace("[FILENAME]", res[i][x].filename).
                    replace("[TITLE]", res[i][x].title).
                    replace("[DESC]", res[i][x].desc);

                  $(".cards").append(html);
                }

              }
            }
          });

        });
        x.on("click", function(e){
          e.preventDefault();

          var ele = $(this);
          var id = ele.data("id");

          $.ajax({
            url   : 'process.php',
            data  : {id:id, deleteSlide:true},
            type  : 'POST',
            dataType  :'JSON', 
            success   : function(res){
              ele.parents(".jumbotron").fadeOut("slow", function(){
                $(this).remove();
              });
            },
            error : function(){
              console.log("oops, something went wrong.");
            }
          });
        });
      })(jQuery)
    </script>
  </body>
</html>