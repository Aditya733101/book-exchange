<!DOCTYPE html>
<?php
session_start();
    if (!isset($_SESSION['first_name'])) {
        echo "<script>
            alert('Please Signin First');
            window.location.href='signin.php';
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
        
        
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#827397;">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Book Exchange</a>                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog-home.html">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="#">Account</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
        <!-- Content -->
        <!-- <p><?php echo var_dump($_SESSION); ?></p> -->
           
        
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-8">
                <div class="card text-bg-secondary pb-5">
                <div class="card-header text-center h4">My Profile</div>
                <div class="card-body">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="mx-auto img-fluid img-circle d-block" style="border-radius:100%; border:10px solid #DAEAF1; width:22%;"alt="avatar">
                    <p class="card-text">
                    <h5 class="mb-3 text-center"><?php echo $_SESSION['first_name']."&nbsp"; echo $_SESSION['last_name']."<br>"; ?></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <h6>Department</h6>
                            <p>
                               <?php echo $_SESSION['dept']."<br>"; ?>
                            </p>
                            <h6>Branch</h6>
                            <p>
                                <?php echo $_SESSION['branch']."<br>"; ?>
                            </p>
                            <h6>Session</h6>
                            <p>
                                <?php echo $_SESSION['year']."<br>"; ?>
                            </p>
                            <h6>Gender</h6>
                            <p>
                                <?php echo $_SESSION['gender']."<br>"; ?>
                            </p>
                            <h6>Phone Number</h6>
                            <p>
                                <?php echo $_SESSION['tel']."<br>"; ?>
                            </p>
                            <h6>Your Books</h6>
                            <p>
                                <?php 
                                if (!empty($_SESSION['books'])) {
                                    echo $_SESSION['books']."<br>"; 
                                }
                                else{
                                    echo "You have not added book yet!";
                                }
                                ?>
                            </p>
                        </div>
                        <form action="add_book.php" method="post">
                            <div class="form-group">
                                
                                <input type="text" name="add_book"class="form-control"  placeholder="Enter Book Name Here" required>
                                <small id="emailHelp" class="form-text text-muted">The book will stored in your profile.</small>
                            </div>
                            <button type="submit" style="width:100%; height:50px;" class="btn btn-primary btn-xlg">Add Book</button>
                        </form>
                        <?php
                            if (isset($_SESSION['book_added'])) {
                                echo "Book added successfully";
                                unset ($_SESSION['book_added']); 
                            }

                        ?>
                        </div>
                
                </div>
                
            </div>
            <div class="card-footer text-muted"></div>
        </div>
            <div class="col-lg-4">
                <div class="card text-bg-secondary pb-5">
                <div class="card-header text-center h4">Search Book</div>
                <div class="card-body">
  
                    <div class="main">
                    <!-- Another variation with a button -->
                    <form action="search.php" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search books here">
                        <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                    </p>
                    
                    </div>

                    <?php if (isset($_SESSION['search_first_name'])) {
                        
                    echo "<center><h5 class>Result Found</h5></center>"; 
                    echo "<br>";
                    echo "<center><h5 class>Book Name : ".$_SESSION['search_books']."</h5></center>";
                    echo "<br><h6>Name : "."</h6>".$_SESSION['search_first_name']."  ".$_SESSION['search_last_name'];
                    echo "<br>";echo "<br>";
                    echo "<h6>Department : "."</h6>".$_SESSION['search_dept'];
                    echo "<br>";echo "<br>";
                    echo "<h6>Branch : "."</h6>".$_SESSION['search_branch'];
                    echo "<br>";echo "<br>";
                    echo "<h6>Year : "."</h6>".$_SESSION['search_year'];
                    echo "<br>";echo "<br>";
                    echo "<h6>Phone Number : "."</h6>".$_SESSION['search_tel'];
                    $btn = "<a class=\"btn btn-outline-success btn-xlg\" href=\"tel:".$_SESSION['search_tel']."\" style=\"width:100%;\"Click to Call <span class=\"glyphicon glyphicon-earphone\" style=\"padding:10px 40px;\"></span>Call Now</a>";
                    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                    echo $btn;echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                    
                    unset ($_SESSION['search_first_name']);
                    unset ($_SESSION['search_last_name']);
                    unset ($_SESSION['search_id']);
                    unset ($_SESSION['search_gender']);
                    unset ($_SESSION['search_dept']);
                    unset ($_SESSION['search_year']);
                    unset ($_SESSION['search_tel']);
                    unset ($_SESSION['search_branch']);
                    unset ($_SESSION['search_books']);  
                    }
                    
                    if (isset($_SESSION['search_not_found'])){

                        echo "<h5 class>Opps! Not Found</h5>";
                        unset ($_SESSION['search_not_found']);  

                    }

                    ?>  

                    <!-- <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                Web Designer, UI/UX Engineer
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                    </div> -->
                </div>
                
            </div>
            <div class="card-footer text-muted"></div>
        </div>
        
        <!-- Footer-->
            <?php require '_footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
