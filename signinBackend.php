<?php
session_start();
        require 'database.php';
            $uname = $_POST['uname'];
            $psw = $_POST['psw'];

            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                //$data = htmlspecialchars($data);

                return $data;

            }
            
            $uname = validate($_POST['uname']);
            $psw = validate($_POST['psw']);
           // $psw = md5($psw);
$sql = "SELECT * FROM user WHERE username='$uname' AND password='" .md5($psw)."'";

            $result = mysqli_query($conn, $sql);
            
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result)>0){
                
                $_SESSION['first_name'] = $row['first_name'];

                $_SESSION['last_name'] = $row['last_name'];

                $_SESSION['id'] = $row['id'];

                $_SESSION['gender'] = $row['gender'];

                $_SESSION['dept'] = $row['dept'];

                $_SESSION['year'] = $row['year'];

                $_SESSION['tel'] = $row['tel'];

                $_SESSION['branch'] = $row['branch'];

                $_SESSION['books'] = $row['books'];

                header("Location:home.php");
                //echo "<script> location.href='home.php;</script>";
                exit();
            }

            // if (mysqli_num_rows($result) === 1) {
            //     header("Location: home.php");
            // }


            // $row = mysqli_fetch_array($result);
            // $count = $row['cntUser'];

            // if($count > 0){
            //     $_SESSION['uname'] = $uname;
            //     header('Location: home.php');
            // }

            // if ($row['user_name'] === $uname && $row['password'] === $pass) {

            //     echo "Logged in!";

            //     // $_SESSION['user_name'] = $row['user_name'];

            //     // $_SESSION['name'] = $row['name'];

            //     // $_SESSION['id'] = $row['id'];

            //     header("Location: home.php");

            //     exit();
            // }
            else{
                echo "<script>
                alert('Invalid Username or Password');
                window.location.href='signin.php';
                </script>";
            //     $_SESSION['log_in'] = 1;
            //    echo "<script>alert('Invalid Username/Email or password');</script>";
            //     header("Location:signin.php");
                
                exit();
            }
        
            mysqli_close($conn);

?>