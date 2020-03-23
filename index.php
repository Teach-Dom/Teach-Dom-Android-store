<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apkdom";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM home;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APK Dom</title>
    <link rel="shortcut icon" href="imgs/Logo/ico.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <!--The begin of the NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href=""><div class="changeImage"></div></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="app.php"><img src="imgs/NavImages/apps.png" alt="" > Apps<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="game.php"><img src="imgs/NavImages/games.png" alt=""> Games</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="imgs/NavImages/topics.png" /> Topics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="imgs/NavImages/products.png" /> Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="imgs/NavImages/news.png" /> News</a>
          </li>
        </ul>
      </div>
    </nav>
      <!--The end of the Nav Bar-->

      <!--The beigning of carousel-->
      <div id="carouselExampleIndicators" class="carousel slide in animated jello delay-.5s" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 slides" src="imgs/carousel/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 slides" src="imgs/carousel/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 slides" src="imgs/carousel/3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--The end of carousel-->
      <form>
      <input id="saveServer" class="depth" placeholder="search"></input>
      <button class="searchBTN">search</button>
      </form>
      <div class="appsD">
      <?php 
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <ul>
          <li class="w33">
                        <dl>
                          <dt><a title="<?php echo $row['title']; ?>" href="/uc-browser-turbo-fast-download-secure-ad-block/com.ucturbo"><img alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>" width="80" class="loaded" data-was-processed="true"></a></dt>
                            <dd class="title-dd"><a title="<?php echo $row['title']; ?>" href="<?php echo $row['link']; ?>"><?php echo $row['title']; ?></a></dd>
                            <dd><?php echo $row['CN']; ?></dd>
                            <dd><?php echo $row['PD']; ?></dd>
                            <dd class="down"><a rel="nofollow" class="" title="<?php echo $row['title']; ?>" href="<?php echo $row['link']; ?>">Download APK</a></dd>
                          </dl>
            </li>
            <?php           }
        }
        ?>
        </ul>
      </div>
            <!--All js scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.1.1/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
</body>
</html>