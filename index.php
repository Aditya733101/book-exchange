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
  <?php
  session_start();
  ?>
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <?php require '_navbar.php' ?>
  </main>
  <!-- Content -->

  <div>
    <section class="pt-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-md-start text-center py-6">
            <h1 class="mb-4 fs-9 fw-bold">You are not done with a book until you pass it to another reader.</h1>
            <p class="mb-6 lead text-secondary">Books Have The Power To Transport Us To New World<br class="d-none d-xl-block" />in one place! The most intuitive way to imagine<br class="d-none d-xl-block" />your next user experience.</p>
            <div class="text-center text-md-start">
              <a class="btn btn-warning me-3 btn-lg" href="register.php" role="button">Get started</a>
              <a class="text-warning fw-medium" href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo">
                <span class="me-2"></span> </a>
            </div>
          </div>
          <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt="" /></div>
        </div>
      </div>
    </section>

    <section class="pt-5 pt-md-9 mb-6" id="feature">

      <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(assets/img/category/shape.png);opacity:.5;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <h1 class="fs-9 fw-bold mb-4 text-center"> We Created Book Exchange <br class="d-none d-xl-block" />To Deliver You</h1>
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon1.png" width="75" alt="Feature" />
            <h4 class="mb-3">Search Book</h4>
            <p class="mb-0 fw-medium text-secondary">Search books among other seniors juniors and classmates</p>
          </div>
          <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon2.png" width="75" alt="Feature" />
            <h4 class="mb-3">Easy User Interface</h4>
            <p class="mb-0 fw-medium text-secondary">Simply register and then sign</p>
          </div>
          <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon3.png" width="75" alt="Feature" />
            <h4 class="mb-3">Connect with Others</h4>
            <p class="mb-0 fw-medium text-secondary">Connect with other senior junior and classmates.</p>
          </div>
          <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon4.png" width="75" alt="Feature" />
            <h4 class="mb-3">Bonding</h4>
            <p class="mb-0 fw-medium text-secondary">Make bond with others</p>
          </div>
        </div>

      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="validation">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <h2 class="mb-2 fs-7 fw-bold">Why It’s a Great Idea to Share Your Book with others</h2>
            <h5 class="text-secondary">-by Ankur Wariko, an Indian Author</h5>
            <p class="mb-4 fw-medium text-secondary">
              I love buying books. It’s a genuinely different feeling that I believe everyone should experience. But once I buy a book and finish reading it, I am sure that it’s going to sit on the bookshelf for a long time. I might go back and read it, but that’s going to take a while, usually a couple of years or more.
            </p>
            <!-- <h4 class="fs-1 fw-bold">Create Bonding</h4> -->
            <p class="mb-4 fw-medium text-secondary">I don’t hand my books over to someone I just met, or someone who just tells me that they love reading. If I share my book with someone, I know that they will definitely read it, and return it back to me.</p>
            <!-- <h4 class="fs-1 fw-bold">Easy User Interface</h4> -->
            <p class="mb-4 fw-medium text-secondary">I don’t want my book ending up in someone’s fireplace, and believe me or not, that happens more often than you may think.</p>
            <!-- <h4 class="fs-1 fw-bold">Search Your Required Book</h4> -->
            <p class="mb-4 fw-medium text-secondary">If I give my book to someone, they mean a lot to me, if not at least a little. I’ve shared my books with more friends than family, because of course, very few people in my family even read. But most of the friends I’ve shared my books with read them and return them back to me. That’s another reason why I love sharing books.</p>
          </div>
          <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" /></div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="manager">

      <div class="container">
        <div class="row">
          <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" /></div>
          <div class="col-lg-6">
            <br>
            <h5 class="text-secondary">Benefits of reading books</h5>
            <!-- <p class="fs-7 fw-bold mb-2">By Signing up</p> -->
            <br><br>
            <!-- <p class="mb-4 fw-medium text-secondary">
                The Myspace page defines the individual,his or her
                characteristics, traits, personal choices and the overall<br />personality of the person.
              </p> -->
            <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
              <p class="fw-medium mb-0 text-secondary">Self-improvement</p>
            </div>
            <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
              <p class="fw-medium mb-0 text-secondary">Increases your Understanding</p>
            </div>
            <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
              <p class="fw-medium mb-0 text-secondary">Enhances your Imagination and Creativity</p>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="marketer">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- <h5 class="text-secondary">Sharing Books Builds Friendship</h5> -->
            <h6 class="fw-bold fs-3">Sharing Books Builds Friendship</h6>
            <p class="mb-4 fw-medium text-secondary">If you continue to share your books with specific people, especially introverts, you will learn that your friendship gets stronger. Sharing books also helps you know more about the other person since it creates room for deeper conversations instead of just small talk.</p>
            <h5 class="text-secondary">Remember all the good things that are like second nature to real book lovers:
              <ul>
                <br>
                <li>Use a bookmark</li>
                <br>
                <li>Keep your hands clean when reading</li>
                <br>
                <li>Don’t fold pages</li>
                <br>
                <li>Do not write in other people’s books</li>
                <br>
                <li>Keep the spine intact</li>
              </ul>
            </h5>
            <!-- <h4 class="fw-bold fs-1">Create Account</h4>
              <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports betting,<br />lottery and bingo playing for the fun</p>
              <h4 class="fw-bold fs-1">Sign in</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you money,</p>
              <h4 class="fw-bold fs-1">Browse</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you more money,</p> -->
          </div>
          <div class="col-lg-6"><img class="img-fluid" src="assets/img/marketer/marketer.png" alt="" /></div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-md-11 py-8" id="superhero">

      <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h1 class="fw-bold mb-4 fs-7">Need Any Help?</h1>
            <p class="mb-5 text-info fw-medium">Do you have any kind of query or request,<br />related our platform?</p>
            <a class="btn btn-warning btn-md" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="marketing">

      <div class="container">
        <h1 class="fw-bold fs-2 text-center mb-3">Our Happy Users</h1>
        <p class="mb-6 text-secondary">Join with us on our platform Book Exchange</p>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
              <div class="card-body ps-0">
                <h3 class="fw-bold text-center">Kiran Sarkar</h3>
                <h6 class="fw-bold text-center">BCA,University of Calcutta
</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
              <div class="card-body ps-0">
                <h3 class="fw-bold text-center">Shubhodeep Biswas</h3>
                <h6 class="fw-bold text-center">B-tech, University Of Engineering And Management, Kolkata</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
              <div class="card-body ps-0">
                <h3 class="fw-bold text-center">Aditya Sarkar</h3>
                <h6 class="fw-bold text-center">B-tech,Institute Of Engineering And Management Kolkata </h6>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

  </div>

  <!-- Footer-->
  <?php require '_footer.php' ?>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>