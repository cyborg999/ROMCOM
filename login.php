<?php include_once "model.php"; $login  = new Model(); ?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .login h2,
      .login .btn {
        font-family: 'Poppins', sans-serif!important;
      }
      .login h2 {
        font-size: 16px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
      }
      .login {
        margin-top: 20px;
        background: #eee;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 1px 1px 10px #c7c7c7;
        background-color: white;
        position: relative;
      }
      .login .icon {
        position: static;
        top: -20px;
        left: 33.33%;
        margin: 0 auto;
        width: 60px;
      }
      .icon-container {
        width: 100%;
        text-align: center;
        margin: 10px 0;
      }
      .login .form-control {
        background: #eaeaec;
        color: black;
      }
      .login .btn {
        width: 100%;
        text-transform: uppercase;
      }
    </style>
    <main role="main" id="login">
      <section class="container">
        <article class="article">
          <div class="row">
            <div class="col-sm-1 col-lg-4"></div>
            <div class="col-sm-10 col-lg-4">
              <form method="post" class="login">
                <div class="icon-container">
                  <img class="icon" src="img/login.png">
                </div>
                <h2 class="display-4">Member Login</h2>
                <input type="hidden" class="form-control" name="loginUser" value="true"/>
                 <div class="form-group">
                  <!-- <label for="inlineFormInputGroup">Username</label> -->
                  <label class="sr-only" for="inlineFormInputGroup">Username</label>
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">@</div>
                    <input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Password</label> -->
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="form-group">
                  <br>
                  <?php if(count($login->errors) > 0): ?>
                    <?php foreach($login->errors as $idx => $err): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $err; ?>
                      </div>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
            </form>
          </article>
            </div>
            <div class="col-sm-1 col-lg-4"></div>
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