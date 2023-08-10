<?php 
    include 'dbconn.php';
    session_start();
    $_SESSION['username'] = "21B91A6206";
    if(!isset($_SESSION['username']))  header('location: login.php');
    $today = date("m-d");
    $today_birthdays = mysqli_query($conn,"SELECT * FROM `birthday` WHERE `dob` LIKE '%$today%'");
    if(isset($_POST['newwish'])){
        $wish = $_POST['wish'];
        $regno = $_POST['regno'];
        $newwish = $conn -> prepare("INSERT INTO `wishes`(`std_id`, `to_std_id`, `wish`) VALUES (?,?,?)");
        $newwish -> bind_param("sss",$_SESSION['username'],$regno,$wish);
        if($newwish -> execute()){
            echo "<script>alert('Wish Added Successfully');</script>";
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
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Poppins:300,400,500,600,700,800,900");
@import url("https://fonts.googleapis.com/css?family=Forum");
@import url("https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Josefin+Slab:100,100i,300,300i,400,400i,600,600i,700,700i|Marcellus|Nanum+Myeongjo:400,700,800|Old+Standard+TT:400,400i,700|Prata|Vidaloka");
body {
  background: #F0F0F0;
  margin: 0;
  color: white;
}

.subscribe-box {
  background: #2bb24c;
  font-family: "Gothic A1", serif;
  padding: 6em 0;
  text-align: center;
}
.subscribe-box h2 {
  margin: 0 0 0.85em 0;
  font-weight: 100;
  font-size: 30px;
  font-family: "Marcellus", serif;
}
.subscribe-box .subscribe {
  width: 100%;
  max-width: 600px;
  margin: auto;
}
.subscribe-box .subscribe input {
  width: 100%;
  background: transparent;
  border: 0;
  border-bottom: 1px solid;
  padding: 1em 0 0.8em;
  text-align: center;
  font-size: 18px;
  font-family: inherit;
  font-weight: 300;
  line-height: 1.5;
  color: inherit;
  outline: none;
}
.subscribe-box .subscribe input::-moz-placeholder {
  color: rgba(255, 255, 255, 0.5);
}
.subscribe-box .subscribe input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}
.subscribe-box .subscribe input::placeholder {
  color: rgba(255, 255, 255, 0.5);
}
.subscribe-box .subscribe button {
  all: unset;
  margin-top: 2.4em;
  background: transparent;
  border: 2px solid white;
  padding: 1em 4em;
  border-radius: 50px;
  cursor: pointer;
  display: inline-block;
  font-weight: 700;
  position: relative;
  transition: all 300ms ease;
}
.subscribe-box .subscribe button span {
  display: inline-block;
  transition: all 300ms ease;
}
.subscribe-box .subscribe button:before, .subscribe-box .subscribe button:after {
  content: "";
  display: block;
  position: absolute;
  transition: all 300ms ease;
  opacity: 0;
}
.subscribe-box .subscribe button:before {
  height: 7px;
  width: 7px;
  background: transparent;
  border-right: 2px solid;
  border-top: 2px solid;
  right: 30px;
  top: 21px;
  transform: rotate(45deg);
}
.subscribe-box .subscribe button:after {
  background: white;
  height: 2px;
  width: 50px;
  left: 0;
  top: 1.49em;
}
.subscribe-box .subscribe button:hover span {
  transform: translateX(-10px);
}
.subscribe-box .subscribe button:hover:before {
  opacity: 1;
}
.subscribe-box .subscribe button:hover:after {
  width: 14px;
  opacity: 1;
  transform: translateX(160px);
}
    </style>
</head>
<body>
<?php while($row = mysqli_fetch_assoc($today_birthdays)){ ?>  
<div class="subscribe-box"> 
  <h2>Wishes to <?php echo $row['name'] ?></h2>
  <form action="#" method="post" class="subscribe">
    <input type="text" name="wish" placeholder="Wish You many more Happy Returns of the Day Bro" autocomplete="off" required />
    <input type="text" name="regno" value="<?php echo $row['reg_no'] ?>" hidden required />
    <button type="submit" name="newwish"> <span>Happy Birthday</span></button>
  </form>
</div>
<?php } ?>
</body>
</html>