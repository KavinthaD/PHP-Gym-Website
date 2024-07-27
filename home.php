<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sanzeus gym | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="footer_and_header.css">
  <style>
    body {
      font-family: "Roboto Condensed", sans-serif;
      text-align: center;

    }



    .image-container {
      height: 500px;
      overflow: hidden;
      padding: 0;
      background-size: cover;
      /* Cover the entire area of the div */
      background-position: center;
      /* Center the background image */
      display: flex;
      justify-content: center;
      /* Center horizontally */
      align-items: flex-end;
      /* Align items to the bottom */
    }

    .image-container button {
      margin-bottom: 10px;
      /* Adjust the distance from the bottom if needed */
    }

    button:hover {
      transform: scale(1.1);
    }


    #img3 {
      background-image: url("images/gym_pic3.jpg");
      border-left: 4px solid #014a8a;
      border-right: 4px solid #014a8a;
    }

    .row1 {
      border-bottom: 7px solid #014a8a;
    }



    .card {
      background-size: cover;
      /* Cover the entire area of the div */
      background-position: center;
      /* Center the background image */
      height: 410px;
      border-radius: 10px;
      color: white;

      padding: 20px;
      margin: 20px;
      margin-bottom: 60px;
    }

    #card1 {
      background-image: url("images/card1.png");
    }

    #card2 {
      background-image: url("images/card2.png");
    }

    #card3 {
      background-image: url("images/card3.png");
    }

    .card.container {
      display: flex;
      justify-content: space-around;
      padding: 10px;
    }

    .benefits-logo {
      text-align: center !important;
      width: 60px;
      height: auto;
      display: block;
      margin: auto;
    }

    .card button {
      transition: transform 0.3s;
      color: black;
      background-color: yellow;
      border-radius: 6px;
      padding: 10px 15px 10px 15px;
      border: none;
      display: block;
      margin: auto;
    }

    .join-button {
      background-color: rgb(233,0,15);
      padding: 14px 20px;
      border-radius: 8px;
      border: 0;
      color: white;
      font-size: 20px;
      text-transform: uppercase;
      cursor: pointer;
      box-shadow: 10px 10px 16px rgba(0, 0, 0, 0.9); /* Box shadow around the button */
      /* Box shadow added */
      transition: background 0.3s, transform 0.3s;
      
    }

    .join-button:hover {
      background: rgb(0,82,153);
      transform: scale(1.05);
    }

    
    .row2{
      padding-bottom: 30px;
      background-color: rgb(174, 200, 255);
    }
    .row3{
      background-color: rgb(255, 209, 217);
      padding: 50px 0px;
    }
    #see-more{
    color: white;
    }
        
  </style>
</head>

<body>

  <?php include ('header.php') ?>

  <div class="container-fluid text-center">
    <div class="row row1">
      <div class="col-sm-4 image-container" id="img1">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/fitness-quote1.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="images/fitness-quote2.jpg" alt="Chicago" style="width:100%;">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 image-container" id="img3">
        <button class="join-button" onclick="window.location.href='register.php'">Join today!</button>
      </div>
      <div class="col-sm-4 image-container" id="img2">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/fitness-quote3.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="images/fitness-quote4.jpg" alt="Chicago" style="width:100%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row2">
      <div class="col-sm-2">
        <!--left space-->
      </div>
      <div class="col-sm-8">
        <h1 style="text-align: center;">Memberships</h1>

        <br>
        <p style="text-align: center; font-size: larger;">We offer variety of memberships such as monthly or yearly and
          special memebrships for couples</p>
        <br>
        <div class="card container text-left" >
          <div class="col-sm-4 card" id="card1">
            <h3>Gents Annual Membership</h3>
            <br>
            <p>Starting at </p>
            <p><span style="font-size: 30px;">Rs.25 000/</span>
              <span>annual</span>
            </p>
            <p>plus taxes and fees</p>
            <br>
            <p>+Access to all gym equipment</p>
            <p>+Gym open 5am to 10pm</p>
            <br>
            <hr>
            <button>Join now</button>

          </div>
          <div class="col-sm-4 card" id="card2">
            <h3>Couple membership</h3>
            <br>
            <p>Starting at </p>
            <p><span style="font-size: 30px;">Rs.35 000/</span>
              <span>annual</span>
            </p>
            <p>plus taxes and fees</p>
            <br>
            <p>+Access to all gym equipment</p>
            <p>+Gym open 5am to 10pm</p>
            <p>+persoanl couch traning with couple sessions</p>
            <hr>
            <button>Join now</button>

          </div>
          <div class="col-sm-4 card" id="card3">
            <h3>VIP membership</h3>
            <br>
            <p>Starting at </p>
            <p><span style="font-size: 30px;">Rs.15 000/</span>
              <span>12 sessions</span>
            </p>
            <p>plus taxes and fees</p>
            <br>
            <p>+Access to all gym equipment</p>
            <p>+personal couch to train</p>
            <br>
            <hr>
            <button>Join now</button>

          </div>

        </div>
        <a id="see-more" style="text-align:center; margin: top 60px;" class="join-button" href="register.php">See more</a>
      </div>



      <div class="col-sm-2">
        <!--right space-->
      </div>
    </div>
    <div class="row row3">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <hr>
        <h1 style="text-align: center; ">Benefits of working out</h1>
        <hr>
        <p style="text-align: center; font-size:large">Working out offers numerous benefits for both physical and mental
          health. Here are some key advantages:</p>
        <br>
        <div class="col-sm-6 text-left" style="font-size:large">
          <img src="images/biceps.png" alt="biceps" class="benefits-logo">
          <h3 style="text-align: center;">Physical Health Benefits</h3>
          <br>
          <p>1. Improved Cardiovascular Health: Regular exercise strengthens the heart, improves circulation, and
            reduces the risk of heart disease.</p>
          <br>
          <p>2. Weight Management: Physical activity helps control weight by burning calories and increasing metabolism.
          </p>
          <br>
          <p>3. Enhanced Muscle Strength and Endurance: Exercise builds muscle strength and endurance, making daily
            activities easier and improving overall fitness.</p>
          <br>
          <p>4. Bone Health: Weight-bearing exercises, like running and strength training, strengthen bones and reduce
            the risk of osteoporosis.</p>
          <br>
          <p>5. Improved Flexibility and Mobility: Stretching and flexibility exercises enhance the range of motion in
            joints and reduce the risk of injuries.</p>
        </div>
        <div class="col-sm-6 text-left" style="font-size:large">
          <img src="images/mind.png" alt="mind" class="benefits-logo">
          <h3 style="text-align: center;">Mental Health Benefits</h3>
          <br>
          <p>1. Reduced Stress and Anxiety: Physical activity releases endorphins, which act as natural stress
            relievers, and can reduce symptoms of anxiety.</p>
          <br>
          <p>2. Improved Mood: Regular exercise is linked to improvements in mood and can help alleviate symptoms of
            depression.</p>
          <br>
          <p>3. Enhanced Cognitive Function: Exercise boosts brain function, improving memory, concentration, and
            overall cognitive abilities.</p>
          <br>
          <p>4. Better Sleep: Physical activity can help regulate sleep patterns and improve the quality of sleep.</p>
          <br>
          <p>5. Increased Self-Esteem and Confidence: Achieving fitness goals and seeing physical improvements can boost
            self-esteem and confidence.</p>
        </div>

      </div>
    
    <div class="col-sm-2"></div>
  </div>
  </div>

  
  <!-- Footer -->
  <?php include ('footer.php') ?>

</body>

</html>