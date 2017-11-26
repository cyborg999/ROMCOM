<?php include_once "model.php"; $login  = new Model(); ?>
    <?php include_once "header.php"; ?>
    <style type="text/css">
      .login h2 {
        /*font-family: 'Poppins', sans-serif!important;*/
      }
    </style>
    <main role="main" id="login">
      <section class="container">
        <article class="article">
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <form class="form-inline" method="post">
                <input type="hidden" class="form-control" name="loginUser" value="true"/>
                <div class="form-group">
                  <!-- <label for="staticEmail2" class="sr-only">Email</label> -->
                  <input type="text" name="username" class="form-control" id="staticEmail2" placeholder="Username">
                </div>
                <div class="form-group mx-sm-3">
                  <!-- <label for="inputPassword2" class="sr-only">Password</label> -->
                  <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                 
              </form>
              <div class="form-group">
                  <br>

                  <?php if(isset($_POST['loginUser'])): ?>
                  <?php if(count($login->errors) > 0): ?>
                    <?php foreach($login->errors as $idx => $err): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $err; ?>
                      </div>
                    <?php endforeach ?>
                  <?php endif ?>
                  <?php endif ?>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <form method="post" class="logisn">
              <div class="icon-container">
                <!-- <img class="icon" src="img/REGISTER.png"> -->
              </div>
              <br>
              <h2 class="display-4">Registration</h2>
              <br>
              <input type="hidden" class="form-control" name="type" value="1"/>
              <input type="hidden" class="form-control" name="addUser" value="true"/>
              <div class="form-group">
                <!-- <label class="col-form-label" for="formGroupExampleInput">Username</label> -->
                <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="username">
              </div>
              <div class="form-group">
                <!-- <label class="col-form-label" for="formGroupExampleInput2">Password</label> -->
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <!-- <label class="col-form-label" for="formGroupExampleInput2">Retype Password</label> -->
                <input type="password" name="password2" class="form-control" id="formGroupExampleInput2" placeholder="password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
              <div class="form-group">
                <?php if(isset($_POST['addUser'])): ?>
                <?php if(count($login->errors) > 0): ?>
                  <?php foreach($login->errors as $idx => $err): ?>
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
                <?php endif ?>  
              </div>
            </form>
            </div>
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