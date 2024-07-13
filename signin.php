<!DOCTYPE html>
<?php
    session_start();
    // echo "<script>alert('Invalid Username/Email or password');</script>";
    // if (isset($_SESSION['log_in'])) {
    //     if($_SESSION['log_in']==1){
    //         echo "<script>alert('Invalid Username/Email or password');</script>";
    //         $_SESSION['log_in']=0;
    //     }
    // }
    if (isset($_SESSION['first_name'])) {
        echo "<script>
            window.location.href='home.php';
            </script>";
    }   

    
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Book Exchange</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            form {
                border: 3px solid #f1f1f1;
                border-radius:10px;
                padding:10px;
                margin:0px 100px;
            }

            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            button {
            padding: 14px 20px;
            margin: 8px 0;
            cursor: pointer;
          
            }

            button:hover {
            opacity: 0.8;
            }

            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            }

            img.avatar {
            width: 10%;
            border-radius: 50%;
            }

            .containerr {
            padding: 16px;
            margin:20px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }
            .already{
                margin-top:15px;
                float: right;
                text-decoration: none;
                
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
           
            .cancelbtn {
                width: 100%;
            }
            }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php require '_navbar.php' ?>
        </main>
        <!-- Content -->
        <h2 class="text-center">Login Form</h2>

        <div class="containerr">
            <form action="signinBackend.php" method="post">
            <div class="imgcontainer">
                <img src="user.png" alt="Avatar" class="avatar">
            </div>

            <div class="containerr">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                    
                <button class="btn btn-success btn-lg" type="submit" value="submit">Login</button>
                <button class="btn btn-warning btn-lg"type="reset">Reset</button>
                <a class="already btn btn-outline-success" href="register.php">Create Account</a>
            </div>

           
            </form>

        </div>
        
        <!-- Footer-->
            <?php require '_footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
