<?php
    require 'database.php';
    session_start();
    $add_book = $_POST['add_book'];

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        //$data = htmlspecialchars($data);

        return $data;

    }
    $add_book = validate($add_book);
    $_SESSION['books'] = $add_book;

    $sql = "UPDATE `user` SET `books` = '".$_SESSION['books']."' WHERE `user`.`id` = ".$_SESSION['id'].";";
    

    if(mysqli_query($conn, $sql)){
        $_SESSION['book_added']="yes";
    }
    header("Location:home.php");
    //echo "<script> location.href='home.php;</script>";
    exit();
    mysqli_close($conn);

?>