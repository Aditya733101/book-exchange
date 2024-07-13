<?php
    require 'database.php';
    session_start();
    $search = $_POST['search'];

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        //$data = htmlspecialchars($data);

        return $data;

    }
    $search = validate($search);
    $_SESSION['search'] = $search;
    $keyword="%".$search."%";

    $sql = "SELECT * FROM user WHERE books LIKE '$keyword';";

    $result = mysqli_query($conn, $sql);
            
    $row = mysqli_fetch_assoc($result);

    echo "hello";
            
    if(mysqli_num_rows($result)>0){
        echo "hello";
                
        $_SESSION['search_first_name'] = $row['first_name'];

        $_SESSION['search_last_name'] = $row['last_name'];

        $_SESSION['search_id'] = $row['id'];

        $_SESSION['search_gender'] = $row['gender'];

        $_SESSION['search_dept'] = $row['dept'];

        $_SESSION['search_year'] = $row['year'];

        $_SESSION['search_tel'] = $row['tel'];

        $_SESSION['search_branch'] = $row['branch'];

        $_SESSION['search_books'] = $row['books'];

        header("Location:home.php");
        //echo "<script> location.href='home.php;</script>";
        exit();
    }
    else{
        $_SESSION['search_not_found'] = "Yes";
        header("Location:home.php");
        //echo "<script> location.href='home.php;</script>";
        exit();
    }
    mysqli_close($conn);

?>