<?php 
  include 'dbconn.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <link rel="stylesheet" href="main.css"/>
</head>

<body>
  <div class="main">
    <?php include 'header.php'; ?>
    <div class="content">
      <nav class="navbar navbar-dark bg-dark py-1">

        <a href="#" id="navBtn">
          <span id="changeIcon" class="fa fa-bars text-light"></span>
        </a>

        <div class="d-flex">
          
          <a class="nav-link text-light px-2" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>

      </nav>
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-primary rounded-0">
              
                <h5 class="card-title text-white mb-1">Birthday Wishes</h5>
              </div>
              <div class="card-body">
              <a href="birthdayform.php"><h1 class="display-4 font-weight-bold text-primary text-center">Add</h1></a>
                
              </div>
            </div>
            
          </div>

          <div class="col-lg-4 col-md-6 p-2">
            <div class="card border-success rounded-0">
              <div class="card-header bg-success rounded-0">
                <h5 class="card-title text-white mb-1">Flash News</h5>
              </div>
              <div class="card-body">
              <a href="flashnews.php"><h1 class="display-4 font-weight-bold text-success text-center">Add</h1></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-2">
            <div class="card border-danger rounded-0">
              <div class="card-header bg-danger rounded-0">
                <h5 class="card-title text-white mb-1">Achievements</h5>
              </div>
              <div class="card-body">
              <a href="achievements.php"><h1 class="display-4 font-weight-bold text-danger text-center">Add</h1></a>
              </div>
            </div>
          </div>

        </div>

        

        <div class="row">
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">Skill based Learning</h1>
              <p class="lead">approach in which skills are acquired through practice and application
              </p>
              <hr class="my-4">
              <p>Essential in developing students' abilities to read, write, and express themselves verbally, this approach is important to develop successful learners</p>
              
            </div>
          </div>
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">CSD where u can explore infinity</h1>
              <p class="lead">This branch of computer science focuses on the mathematical and theoretical aspects of computation
              </p>
              <hr class="my-4">
              <p>This area deals with creating and exploring computer-generated images and visual representations.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
