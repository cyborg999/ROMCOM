 <!doctype html>
<html lang="en">
  <head>
    <title>Romantic Comedy - ROMCOM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Caveat+Brush|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/carousel.css" >
    <link rel="stylesheet" type="text/css" href="css/global.css" >

    <style type="text/css">
      
      .btn {
        cursor: pointer;
      }
      .carousel-caption p {
        text-shadow: 1px 1px 10px black;
      }
      #about p,
      .lead,
      .navbar-dark .navbar-nav .nav-link, 
      .carousel-caption p {
        font-family: 'Poppins', sans-serif!important;
        font-size: 25px;
      }
      #about p {
        font-size: 16px;
      }
      .lead {
        font-size: 19px;
        margin-top: 20px;
      }
      h1,h2,h3,h4,h5,
      nav.navbar .navbar-brand,
      .btn {
        font-family: 'Pacifico', cursive!important;
      }
      .logo {
        width: 40px;
        margin-right: 8px;
      }
      @media(min-width: 421px){
        .navbar-nav {
          margin-left: 360px;
        }
        .navbar-dark .navbar-nav .nav-link {
          font-size: 14px;
        }

      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top float-right bg-dark">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/heart.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="movie.php">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bottomline.php">Bottomline</a>
            </li>
            <?php if(isset($_SESSION['user'])):?>
              <?php if($_SESSION['user']['type'] == "admin"):?>
                <li class="nav-item">
                <a class="nav-link" href="newmovie.php">Add New Movie</a>
              </li>
            <?php endif ?>
           <!--  <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php else: ?>
          <!--    <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Login/Register</a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="registration.php">Register</a>
            </li> -->
          <?php endif ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" name="title" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>