<!DOCTYPE html>
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

            input[type=text],input[type=tel], input[type=password] {
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
    <main>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php require '_navbar.php' ?>
        </main>
        <!-- Content -->
        <h2 class="text-center">Registration Form</h2>

        <div class="containerr">

            <form action="registerBackend.php" method="post">

            <div class="containerr">
                <div class="name row">
                    <div class="col-lg-6">
                        <label for="fname"><b>First Name</b></label>
                    <input type="text" placeholder="Enter Username" name="name" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="lname"><b>Last Name</b></label>
                        <input type="text" placeholder="Enter Username" name="lname" required>
                    </div>
                </div>

                <!-- <div class="name row">
                    <div class="col-lg-2 form-check">
                        <label for="gender"><b>Gender</b></label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="Male" id="btnradio1" autocomplete="off" >
                        <label class="btn btn-outline-primary" for="Male">Male</label>

                        <input type="radio" class="btn-check" name="Female" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="Female">Female</label>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-4">
                        <label for="gender"><b>Gender</b></label>
                        <div class="gender">
                            <select class="form-select" name="gender" aria-label="Default select example">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Male">Others</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="col-lg-4">
                        <label for="dept"><b>Department</b></label>
                        <div class="dept">
                            <select class="form-select" name="dept" aria-label="Default select example">
                            <option value="Information Technology">Information Technology</option>
                            <option value="Biotechnology">Biotechnology</option>
                            <option value="Engineering Science and Technology">Engineering Science and Technology</option>
                           <option value="Law">Law</option>
                        <option value="Arts">Arts</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="year"><b>Year</b></label>
                         <div class="year">
                            <select class="form-select" name="year" aria-label="Default select example">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <br>
                <label for="branch"><b>Branch</b></label>
                <input type="text" placeholder="Enter Branch" name="branch" required>
        
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="tel"><b>Phone Number</b></label>
                <input type="tel" placeholder="Enter Phone No" name="tel" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="pswSecond"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password Again" name="pswSecond" required>
                    
                <button class="btn btn-success btn-lg" type="submit" name="submit" value="submit">Register</button>
                <button class="btn btn-warning btn-lg"type="reset">Reset</button>
                <a class="already btn btn-outline-success" href="signin.php">Already have an account?</a>
            </div>
            </div>
           
            </form>

        </div>
        </main>
       

        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
       
    </body>
</html>
