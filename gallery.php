<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanzeus gym | Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="footer_and_header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
  body{
    overflow-x: hidden;
    font-family: "Roboto Condensed", sans-serif;
  }
  .container{
    height: 100%;
    width: auto;
    padding: 0;
    
  }
</style>
  </head>
<body>
<?php include('header.php') ?>

      <div class="container">
         
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/gallery1.png" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3>Welcome to</h3>
                <p>Sanzeus</p>
              </div>
            </div>
      
            <div class="item">
              <img src="images/gallery1.png" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <h3>test2</h3>
                <p>test2</p>
              </div>
            </div>
          
            <div class="item">
              <img src="images/gallery1.png" alt="New york" style="width:100%;">
              <div class="carousel-caption">
                <h3>test3</h3>
                <p>test3</p>
              </div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

     
</div>

    <!-- Footer -->
    <?php include('footer.php') ?>
  <script src="header.js"></script>
</body>
</html>