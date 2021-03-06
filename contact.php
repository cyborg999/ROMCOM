<?php 
  include_once "model.php"; 
  
  $model  = new Model();
  $about = $model->getAbout();
 ?>
    <?php include_once "header.php"; ?>
    <main role="main" id="about">
      <section class="container">
        <article class="article">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="display-4">Contact Us</h4>
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
                  <input type="submit" id="save" class="btn btn-primary"/>
                  </div>
                </div>
              </form>
                      
            </div>
            <div class="col-sm-12 col-lg-4">
              <address>
                <strong>Diane Go </strong><br>
                Dianemarjorie.go@benilde.edu.ph<br>
              </address>
              <p>Let’s Keep in Touch! Do you have any questions? Or do you want to be featured here in our website?</p>
            </div>    
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
         $("#save").on("click", function(e){
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
      });
      })(jQuery)
    </script>
  </body>
</html>