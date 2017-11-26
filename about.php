<?php 
  include_once "model.php"; 
  
  $model  = new Model();
  $about = $model->getAbout();
 ?>
    <?php include_once "header.php"; ?>
    <main role="main" id="about">
      <section class="container">
        <article class="article">
          <div class="col-sm-12 col-lg-12"> 
            <h2 class="display-4">About</h2>
            <?php if(isset($_SESSION['user'])):?>
              <?php if($_SESSION['user']['type'] == "admin"):?>
                <div class="form-group form-group-md">
                    <label class="col-sm-2 control-label" for="description">Description</label>
                    <div class="col-sm-10">
                      <textarea rows="10" class="form-control" name="description" id="description" placeholder="description"><?php
                      if(isset($about['content'])){
                      echo $about['content'];
                      }
                      ?></textarea>
                      <br/>
                      <input type="submit" id="save" class="btn btn-primary"/>
                    </div>
                  </div>
              <?php else: ?>
                <?php
                  if(isset($about['content'])){
                    echo $about['content'];
                  }
                ?>
            <?php endif ?>
            <?php else: ?>
                <?php
                  if(isset($about['content'])){
                    echo $about['content'];
                  }
                ?>
          <?php endif ?>
          </div>
        </article>
        <style type="text/css">
          .phone {
            width: 100%;
          }
        </style>
          <div class="row">
              <div class="col-sm-12">
                <br>
              </div>
          </div>
         <div class="row">
            <div class="col-sm-4">
              <img class="phone" src="img/aas.png">
            </div>
            <div class="col-sm-12 col-lg-8"> 
              <h5>Drop us a line!</h5>
              <form  id="frmUpdate" class="form-horizontal">
                <div class="form-group form-group-md">
                  <label class="col-sm-2 control-label" for="name">Full Name</label>
                  <div class="col-sm-10">
                    <input class="form-control" required type="text" id="name" name="name" value=""  placeholder="name...">
                  </div>
                </div>
                <div class="form-group form-group-md">
                  <label class="col-sm-2 control-label" for="email">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" required type="email" id="email" name="email" value=""  placeholder="email...">
                  </div>
                </div>
                <div class="form-group form-group-md">
                  <label class="col-sm-2 control-label" for="message">Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" required name="message" id="message" placeholder="message"></textarea>
                  <br>
                  <input type="submit" id="contact" class="btn btn-primary"/>
                  </div>
                </div>
              </form>
                      
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
         $("#contact").on("click", function(e){
          var name = $("#name").val();
          var email = $("#email").val();
          var message = $("#message").val();
          e.preventDefault();
        $.ajax({
          url : "process.php",
          data : {
            name : name, 
            email : email, 
            message : message, 
            sendMessage : true},
          type : 'POST',
          dataType : 'JSON',
          success : function(res){
            console.log(res);
            alert("Message sent.");
          }
        });
         $("#save").on("click", function(){
        var html = $('#description').val();

        $.ajax({
          url : "process.php",
          data : {html : html, updateAbout : true},
          type : 'POST',
          dataType : 'JSON',
          success : function(res){
            console.log(res);
            alert("Successfully saved.");
          }
        });
        console.log(html);
      });
      })(jQuery)
    </script>
  </body>
</html>