<?php

include 'dbconn.php';
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $date = $_POST['date'];
   $title = $_POST['title'];
   $category = $_POST['category'];
   $details = $_POST['details'];
   $regno = $_POST['regno'];  
    $sql = "INSERT INTO `achievements`(`regno`, `name`, `date`, `title`, `category`, `details`) VALUES (?,?,?,?,?,?)";
    $newachievement = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($newachievement, 'ssssss', $regno, $name, $date, $title, $category, $details);
    
    if (mysqli_stmt_execute($newachievement)) {
        echo "<script>alert('Achievement Added Successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_stmt_error($newachievement);
        echo "<script>alert('Error Occured!')</script>";
    }

    mysqli_close($conn);
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
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

 .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    height: 70vh
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    height: 100px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
<div class="container">
        <h1>Achievement Form</h1>
        <form method="post" >
        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="regno">Reg No :</label>
                <input type="text" id="regno" name="regno" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="title">Title/Description:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" required>
            </div>

            <div class="form-group">
                <label for="details">Details:</label>
                <textarea id="details" name="details" required></textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Submit">
            </div>
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
