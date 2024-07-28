<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanzeus gym | Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="footer_and_header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
  body{
    font-family: "Roboto Condensed", sans-serif;
    background-image: url("images/register-bg.jpg");
    overflow-x: hidden;
  }
  .main-container{
    background-color: rgb(152, 212, 247);
    padding: 20px 20px 100px 20px;
    margin:60px 40px 20px 80px;
    border-radius: 5px;
  }
  #membership-rate{
    margin: 60px 0 0 0;
    width: 500px;
  }
  select{
    padding: 10px;
    border-radius: 10px;
    border: 0;
  }
  .btn{
    position: absolute;
    border: 0;
    border-radius: 7px;
    padding: 10px 15px;
    right:80px;
    bottom:40px;
    background-color: rgb(0,82,153) !important;
      
      
      
      color: white !important;
      font-size: 20px;
      
      cursor: pointer;
      box-shadow: 10px 10px 16px rgba(0, 0, 0, 0.9); /* Box shadow around the button */
      /* Box shadow added */
      transition: background 0.3s, transform 0.3s;
  }
    .btn:hover {
      background:rgb(233,0,15) !important;
      transform: scale(1.05);
    }

        .error-message {
            color: red;
        }
        .success-message {
            color: green;
        }

</style>
  </head>
<body>
<?php include('header.php') ?>
      <div class="row">
        <div class="col-sm-8">
          <div class="main-container">
            <h2>Register here</h2>
            <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']);
                ?>
            </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>
            <form action="action_page.php" method="POST">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="f_name">First Name: *</label>
                    <input type="text" class="form-control" id="f_name" placeholder="Enter First Name" name="f_name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="l_name">Last Name: *</label>
                    <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="l_name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email">Email: *</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="p_no">Phone Number *</label>
                    <input type="text" class="form-control" id="p_no" placeholder="Enter phone number" name="p_no">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="address">Address: *</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                  </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="dob">Date of birth: *</label>
                    <input type="date" class="form-control" id="dob" placeholder="Enter date of birth" name="dob">
                  </div>
                </div>
                </div>
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="gender">Gender: *</label>
                    <input type="radio" id="male" name="gender" value="0">
                    <label for="male">Male</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="female" name="gender" value="1">
                  <label for="female">Female</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  
                </div>
                
              </div>
              
              
              <div class="form-group">
                <label for="condition">Is there any heart or medical conditions you expericed befoere? *</label><br>
                <input type="radio" id="condition_yes" name="condition" value="1">
                <label for ="yes">Yes</label>
                <input type="radio" id="condition_no" name="condition" value="0">
                <label for="no">No</label>
              </div>
              <div class="form-group">
                <label for="condition_details">If yes specify the condition:</label>
                <input type="text" class="form-control" id="condition_details" placeholder="Enter condition details" name="condition_details">
              </div>
              <div class="form-group">
                <label for="attended_gym">Have you attend to gym before? If yes state how long.</label>
                <input type="text" class="form-control" id="attended_gym" placeholder="how long have you attended gym?" name="attended_gym">
              </div>
              <div class="form-group">
                <label for="membership_type">Choose membership type:</label>
                <select class="membership_type" name="membership_type">
                <option value="1">Annual Membership | Gents (Rs.25 000)</option>
                <option value="2">Annual Membership | Ladies (Rs.20 000)</option>
                <option value="3">6 Months | Gents/Ladies (Rs.15 000)</option>
                <option value="4">3 Months | Gents/Ladies (Rs.10 000)</option>
                <option value="5">1 Month | Gents/Ladies (Rs.3500)</option>
                <option value="6">Annual Couple Membership (Rs.35 000) </option>
                <option value="7">6 months Couple Membership (Rs.35 000) </option>
                <option value="8">3 months Couple Membership (19 000) </option>
                <option value="9">Annual Corperate Package | 5 Persons only (1x Rs.17 500) </option>  
                <option value="10">VIP Personal Training 1 month | 12 sessions (Rs.15 000) </option>
                <option value="11">VIP Personal Training 3 months | 36 sessions (Rs.45 000)</option>
              </select>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-sm-4">
        <img id="membership-rate" src="images/membership_rate.jpg">
        </div>
      </div>
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Submitted successfully!</h4>
        </div>
        <div class="modal-body">
          <p>Our trainers will have look into your application and reply to you through email.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <!-- Footer -->
    <?php include('footer.php') ?>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const currentPath = window.location.pathname.split('/').pop();
      const navLinks = document.querySelectorAll('.nav navbar-nav navbar-right li a');
      
      navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
          link.parentElement.classList.add('active');
        }
      });
    });
  </script>
  <script src="header.js"></script>
</body>
</html>