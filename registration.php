<?php include_once "model.php"; $games  = new Model(); ?>
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
        width: 40px;
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
    <main role="main">
      <section class="container">
        <article class="row">
          <div class="col-sm-1 col-lg-4"></div>
          <div class="col-sm-4">
            <form method="post" class="login">
              <div class="icon-container">
                <img class="icon" src="img/REGISTER.png">
              </div>
              <h2 class="display-4">Registration</h2>
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
            </form>
          </div>
          <div class="col-sm-1 col-lg-4"></div>
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