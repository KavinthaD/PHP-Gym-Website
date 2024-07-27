<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanzeus gym | About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="footer_and_header.css">
<style>
    body{
        font-family: "Roboto Condensed", sans-serif;
        text-align: center;
        overflow-x: hidden;
    }
    h1{
        font-family: "Ga Maamli", sans-serif;
    }
    .text p{
      color: rgb(255, 255, 255);
        text-align: justify;
        font-size: 20px;
        }
    
    .text h1{
      color: #00ff2a; /* Text color */
    text-shadow: 
        -1px -4px 0 #000,  
        1px -4px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;

    }
    .main{
      background-image: url("images/gym_background.jpeg");
      background-size: cover; /* Ensure the image covers the entire element */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    padding: 130px 0; /* Top and bottom padding */
    }
    .text{
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    border-radius: 10px;
    }
</style>
</head>
<body>
  <?php include('header.php') ?>
    <div class="main row">
        <div class="col-sm-6"><!--left space--></div>
        <div class="text col-sm-3">
            <h1 style="font-size:50px;">Faster, Stronger, Harder</h1>
            <br>
            <p> Sanzeus gym started in *year* and continue growing stronger with better equipments, more coaches. The gym is equipped with best coaches , equipments and traning schedules that tailored to your preference. currently it's located in Nugegoda Tilakaratna Mawatha. We also provite personal traning and diet plans to get best of the workout. 
            </p><br>
            <p>Our vision is to make every member to gradually grow stronger and be better day by day with proper workout and diet
            </p><br>
            <p>At Sanzeus Gym, we believe that fitness is a part of our lives that should be maintained throughout our lives. Our trainers are certified experts in the fitness industry who provide the best support anyone could ask for to help you on your fitness journey.
            </p><br>
            <br>
        </div>
        <div class="col-sm-3"><!--right space--></div>
    </div>
    <!-- Footer -->
    <?php include('footer.php') ?>
  <script src="header.js"></script>
</body>
</html>