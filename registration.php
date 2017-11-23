<?php include_once "model.php"; $games  = new Model(); ?>
  <?php include_once "header.php"; ?>

    <main role="main">
      <section class="container">
        <article class="row" >
          <h2 class="display-4">Registration</h2>
          <div class="col-lg-12">
            <?php if(count($games->errors) > 0): ?>
              <?php foreach($games->errors as $idx => $err): ?>
                <div class="alert alert-danger" role="alert">
                  <?= $err; ?>
                </div>
              <?php endforeach ?>
            <?php else: ?>
                <?php if(isset($_POST['addUser'])): ?>
                  <div class="alert alert-success" role="alert">
                    User is succesfully registered.
                  </div>
                <?php endif ?>
            <?php endif ?>  
          </div>
        </article> 
        <article class="row">
          <div class="col-lg-12">
            <form method="post">
              <input type="hidden" class="form-control" name="type" value="1"/>
              <input type="hidden" class="form-control" name="addUser" value="true"/>
              <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput">Username</label>
                <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="username">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Retype Password</label>
                <input type="password" name="password2" class="form-control" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </article> 
      </section>
    </main> 

<?php include_once "footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
      })(jQuery)
    </script>
  </body>
</html>