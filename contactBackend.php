<?php
    session_start();
    require 'database.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO `contact` (`id`, `name`, `email`, `tel`, `msg`) VALUES (NULL, '$name', '$email', '$tel', '$msg')";
    if(!mysqli_query($conn, $sql)){
        echo "<script>
            alert('Sorry! there is an issue');
            window.location.href='contact.php';
            </script>";
        
    }
    else {
        echo "<script>
            alert('Thank you for contacting us!');
            window.location.href='index.php';
            </script>";
        // header("Location:signin.php");
        // exit();
    }
?>