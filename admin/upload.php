<?php 
if(isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include "dbconn.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";
    $img_name=$_FILES['my_image']['name'];
    $img_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];
    $name=$_POST['name'];
    $reg=$_POST['reg'];
    $dob=$_POST['date'];
    if($error===0) {
        if($img_size>125000) {
            $em="sorry,your file is too large";
            header("Location: birthdayform.php?error=$em");
        } else {
            $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc=strtolower($img_ex);
            $allowed_exs=array("jpg","jpeg","png");
            if(in_array($img_ex_lc,$allowed_exs)) {
                $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path='uploads/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                $sql="INSERT INTO `birthday`(`reg_no`, `name`, `dob`, `photo`) VALUES (?,?,?,?)";
                $stmt=mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt,'ssss',$reg,$name,$dob,$new_img_name);
            
                header("Location: birthdayform.php");
            } else {
                $em="you can't upload files of this type";
                header("Location: birthdayform.php?error=$em");
            }
        }
    } 
    else {
        // Display the specific error message
        $php_error = error_get_last();
        $em = "Error uploading file: " . $php_error['message'];
        header("Location: birthdayform.php?error=$em");
    }
} 
else {
    header("Location: birthdayform.php");
} 
?>
