<?php 
include 'dbconn.php';
session_start();
  if(!isset($_SESSION['username'])){
    header('location: login.php');
  }
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $reg = $_POST['reg'];
    $photo = uniqid().'_'. $_FILES['my_image']['name'];
    $photo_tmp = $_FILES['my_image']['tmp_name'];
    move_uploaded_file($photo_tmp,"uploads/$photo");
    $photo = "$photo";
    $sql = "INSERT INTO `birthday`(`reg_no`, `name`, `dob`, `photo`) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,'ssss',$reg,$name,$dob,$photo);
    if(mysqli_stmt_execute($stmt)){
      echo "<script>alert('Birthday Added Successfully');</script>";
    }
    else{
      echo "<script>alert('Error')</script>";
    }

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
      <style>
                .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 60vh;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error'] ?></p>
    <?php endif ?>
    <div class="container">
        <h1>Birthday Information</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="reg">Reg No:</label>
                <input type="text" name="reg" id="reg" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="dob">DOB:</label>
                <input type="date" name="dob" id="date" required>
            </div>
            <div class="form-group">
                <label for="my_image">Choose an Image:</label>
                <input type="file" name="my_image" id="my_image">
            </div>
            
            <button type="submit" name="submit">Upload & Submit</button>
        </form>
    </div>
        

        

        
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
