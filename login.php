<?php include_once "model.php"; $login  = new Model(); ?>
    <?php include_once "header.php"; ?>
    <main role="main" id="login">
      <section class="container">
        <article class="article">
          <h2 class="display-4">Login</h2>
          <?php if(count($login->errors) > 0): ?>
            <?php foreach($login->errors as $idx => $err): ?>
              <div class="alert alert-danger" role="alert">
                <?= $err; ?>
              </div>
            <?php endforeach ?>
          <?php endif ?>
          <form method="post" >
              <input type="hidden" class="form-control" name="loginUser" value="true"/>
             <div class="form-group">
              <label for="inlineFormInputGroup">Username</label>
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2 mb-sm-0">
                <div class="input-group-addon">@</div>
                <input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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