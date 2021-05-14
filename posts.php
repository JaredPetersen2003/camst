<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Cape Academy</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Style -->
<link href="css/style.css" rel= "stylesheet">
<!-- Icons -->
<link href="css/all.css" rel="stylesheet">
<link href="css/brands.css" rel="stylesheet">
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- jQuery (necessary for Bootstrap’s JavaScript plugins) -->
<script src="js/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> -->
<script src="js/gsap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/script.js"></script>
<script src="js/scrollreveal.js"></script>

<link rel="icon" href="img/favicon.svg">

    
</head>
<body>

    <!-- Nav start -->
    <?php include("nav.php");?> 
    <!-- Nav End -->


    <!-- Posts start -->
    <div class="posts mb-4">
        <div class="container">
          <!--Section: Content-->
          <section class="text-center">
            <h1 class="pos mb-5">Latest posts</h1>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="hover-overlay">
                    <a href="#!">
                    <img src="img/exolab.jpg" class="img-fluid" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Exolab Experiment</h5>
                    <p class="card-text">
                      South African students are joining the ExoLab experiment on the International Space Station
                    </p>
                    <a href="#!" class="btn btn-primary">Read</a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="hover-overlay">
                    <a href="#!">
                    <img src="img/code4ct.jpg" class="img-fluid"/>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Code 4 CT</h5>
                    <p class="card-text">
                      Code 4 CT opened its doors this week to host 40 aspiring female coders for a 3 hour coding workshop.
                    </p>
                    <a href="#!" class="btn btn-primary">Read</a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="hover-overlay">
                    <a href="#!">
                    <img src="img/spotsday.jpg" class="img-fluid" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Sports Day 2019</h5>
                    <p class="card-text">
                      A day filled with fervour and excitement amidst thrills, shrills and cheers of our learners.
                    </p>
                    <a href="#!" class="btn btn-primary">Read</a>
                  </div>
                </div>
              </div>


        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="hover-overlay">
              <a href="#!">
              <img src="img/exolab.jpg" class="img-fluid" />
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Exolab Experiment</h5>
              <p class="card-text">
                South African students are joining the ExoLab experiment on the International Space Station
              </p>
              <a href="#!" class="btn btn-primary">Read</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="hover-overlay">
              <a href="#!">
              <img src="img/code4ct.jpg" class="img-fluid"/>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Code 4 CT</h5>
              <p class="card-text">
                Code 4 CT opened its doors this week to host 40 aspiring female coders for a 3 hour coding workshop.
              </p>
              <a href="#!" class="btn btn-primary">Read</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="hover-overlay">
              <a href="#!">
              <img src="img/spotsday.jpg" class="img-fluid"/>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Sports Day 2019</h5>
              <p class="card-text">
                A day filled with fervour and excitement amidst thrills, shrills and cheers of our learners.
              </p>
              <a href="#!" class="btn btn-primary">Read</a>
            </div>
          </div>
        </div>

        <?php 
      require_once("getPost.php");
      getMainPosts();
        ?>

    </section>
  </div>
</div>


    
      <!-- Posts End -->


    <!-- Footer Start -->
    <?php include("footer.php");?>
    <!-- Footer End -->

    
  

</body>
</html>