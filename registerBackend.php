<?php
require 'database.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$uname = $_POST['uname'];
$tel = $_POST['tel'];
$psw = $_POST['psw'];
$pswSecond = $_POST['pswSecond'];

function validate($data)
{

    $data = trim($data);

    $data = stripslashes($data);

    //$data = htmlspecialchars($data);

    return $data;
}

$uname = validate($_POST['uname']);
$psw = validate($_POST['psw']);
$pswSecond = validate($_POST['pswSecond']);
$check_user = "SELECT * FROM user WHERE username='$uname'";
$obj = mysqli_query($conn, $check_user);
$row = mysqli_fetch_assoc($obj);
if (mysqli_num_rows($obj) > 0) {
    echo "<script>
                alert('Username  Available');
                window.location.href='register.php';
            </script>";
    exit();
    //$psw = md5($psw);
}
if ($psw==$pswSecond) 
{
    $hashed_password = md5($psw);
    $sql = "INSERT INTO `user`(`id`,`first_name`,`last_name`,`gender`,`dept`,`year`, `branch`,`username`,`tel`,`password`,`books`) VALUES (NULL,'$fname','$lname', '$gender','$dept','$year','$branch','$uname','$tel','$hashed_password','')";
    if (!mysqli_query($conn, $sql)) {
        exit();
    } 
    else {
        //header("Location:signin.php?error=Account Created");
        echo "<script>
                alert('Account Created Successfully');
                window.location.href='signin.php';
            </script>";
        //header("Location:signin.php");
        exit();
    }
} 
else {
    echo "<script>
                alert('Password Not Matches');
                window.location.href='register.php';
            </script>";
    //header("Location:register.php?error=Password Not Matches");
    exit();
}
mysqli_close($conn);
?>
