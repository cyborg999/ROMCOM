 <!doctype html>
<html lang="en">
  <head>
    <title>Romantic Comedy - ROMCOM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/draggable.css">
  <link rel="stylesheet" href="css/plugins/colors.css">
  <link rel="stylesheet" href="css/plugins/emoticons.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/line_breaker.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/char_counter.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="css/plugins/fullscreen.css">
  <link rel="stylesheet" href="css/plugins/file.css">
  <link rel="stylesheet" href="css/plugins/quick_insert.css">
  <link rel="stylesheet" href="css/plugins/help.css">
  <link rel="stylesheet" href="css/third_party/spell_checker.css">
  <link rel="stylesheet" href="css/plugins/special_characters.css">
  <link rel="stylesheet" href="css/codemirror.min.css">
    <style>
      body {
          text-align: center;
      }

      div#editor {
          width: 81%;
          margin: auto;
          text-align: left;
          margin-top: 150px;
      }
      .btn {
        margin-top: 20px;
      }

      .ss {
        background-color: red;
      }
  </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">ROMCOM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../movie.php">Movies</a>
            </li>
          <?php if(isset($_SESSION['user'])):?>
              <?php if($_SESSION['user']['type'] == "admin"):?>
                <li class="nav-item">
                <a class="nav-link" href="../newmovie.php">Add New Movie</a>
              </li>
              <?php endif ?>

            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registration.php">Register</a>
            </li>
          <?php endif ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>