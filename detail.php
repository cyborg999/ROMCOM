<?php 
  include_once "model.php";  

  $admin  = new Model(); 
  $detail = $admin->getSliderById($_GET['id']);
?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .comments {
        margin-top: 50px;
      }
    </style>
    <main role="main">
      <section class="container">
        <article class="container">
            <div class="row">
              <div class="columns col-lg-12">
                <?php if(empty($detail)) : ?>
                  <h5 class="display-5">Movie not found.</h5>
                <?php else: ?>
                  <div class="jumbotron">
                    <h1 class="display-3"><?= $detail['title'];?></h1>
                    <hr class="my-4">
                    <img class="img-fluid" src="uploads/photos/<?= $detail['filename'];?>" alt="First slide">
                    <p class="lead"><?= $detail['description'];?></p>
                    <p class="lead"></p>

                    <dl class="row">
                      <dt class="col-sm-3">Trope:</dt>
                      <dd class="col-sm-9"><?= $detail['genre'];?></dd>
                      <dt class="col-sm-3">Year:</dt>
                      <dd class="col-sm-9"><?= $detail['showing'];?></dd>
                      <dt class="col-sm-3 text-truncate">Directed by:</dt>
                      <dd class="col-sm-9"><?= $detail['director'];?></dd>
                    </dl>
                  </div>
                <?php endif ?>
                  
              </div>
              <div class="col-lg-12">
                <?php if(!empty($detail)) : ?>
                  <?php if(isset($_SESSION['user'])):?>
                    <form id="commentForm">
                      <div class="form-group">
                        <input type="hidden" id="id" value="<?= $_GET['id'];?>">
                        <label for="exampleFormControlTextarea1">Leave a comment</label>
                        <textarea class="form-control" id="comment" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  <?php else: ?>
                    <p>Please login <a href="login.php">here</a> to comment.</p>
                  <?php endif ?>
                  
                <?php endif ?>
              </div>
            </div>
        </article>
        <article class="container">
          <div class="row">
            <?php if(!empty($detail)) : ?>
              <div class="col-lg-12 comments">
                <?php 
                  $comments = $admin->getCommentBySliderId($_GET['id']);
                  
                ?>
                <span class="start"></span>
                <?php foreach($comments as $idx => $comment): ?>
                  <blockquote class="blockquote">
                    <p class="mb-0"><?= $comment['comment']?></p>
                    <footer class="blockquote-footer"><?= $comment['username']?></footer>
                  </blockquote>
                <?php endforeach ?>
                

              </div>  
            <?php endif ?>
          </div>
        </article>
      </section>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="text/html" id="quote">
      <blockquote class="blockquote">
        <p class="mb-0">[COMMENT]</p>
        <footer class="blockquote-footer">[USER]</footer>
      </blockquote>
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
        var form = $("#commentForm");

        form.on('submit', function(e){
          e.preventDefault();
          var comment = $("#comment").val();
          $.ajax({
            url : "process.php",
            data : { addComment: true, comment : comment, id : $("#id").val()},
            type : 'POST',
            dataType : 'JSON',
            success : function(response){
              var quote = $("#quote").html().replace("[USER]", response.username).replace("[COMMENT]",comment);

              $(".start").prepend(quote);
              $("#comment").val("");
              console.log(quote);
            },
            error :  function(){
              console.log("err");
            }
          });
        });
      })(jQuery)
    </script>
  </body>
</html>