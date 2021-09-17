
<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
  $numArticle= 1;
	$sql = "INSERT INTO comments (name, email, comment,NumArticle)
			VALUES ('$name', '$email', '$comment','$numArticle')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'article</title>
       <!-- Favicons -->
  <link href="assets/img/icone.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>





   

</head>

<body>
    
       <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">
        <img src="assets/img/logo.png" alt="logo" style="width: 115px;max-height: 100%;">
      </a></h1>      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Accueil</a></li>
          <li><a class="nav-link  scrollto" href="index.html#portfolio">Thématique</a></li>

          <li><a class="nav-link scrollto" href="index.htm#contact">Contactez-nous</a></li>
          <li><a class="nav-link scrollto" href="https://leeberal.fr/">Revenir Sur Site</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 50%;">

    <div class="container">
      <div class="section-title" data-aos="fade-up">
           <!-- Post header-->
        <header class="mb-4">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2" style="color: beige !important;">Posted on January 1, 2021 by Start Bootstrap</div>
            <!-- Post categories-->
            <a  href="javascript:history.back()" class="badge bg-secondary text-decoration-none link-light">Retourner vers la page précédente</a>
            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
        </header>

      </div>
    </div>

  </section><!-- End Hero -->



  <!-- Page content-->
  <div class="container mt-5" style="max-width: 700px;">
      <div class="row">
          <div class="col align-self-center">
              <!-- Post content-->
              <article>
               
                  <!-- Preview image figure-->
                  <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                  <!-- Post content-->
                  <section class="mb-5">
                      <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                      <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                      <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                      <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                      <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                      <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                  </section>
              </article>
              <!-- Comments section-->
              <section class="mb-5">
                  <div class="card bg-light">
                      <div class="card-body">
                          <!-- Comment form-->
                          <form action="" method="POST" class="form mb-4">
                            <div class="form-group">
                                <label for="name">Ton Nom</label>
                                <input type="text" class="form-control"  name="name" id="name" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Ton address mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="comment">Ton commentaire</label>
                                <textarea class="form-control" rows="3" placeholder="Enter your Comment" id="comment" name="comment" required></textarea>
                            </div>
                            <div class="text-center" style="margin-top: 15px;">
                                <button name="submit"  class="btn btn-primary">Publier ton commentaire</button>
                              </div>                            
                         </form>
                          <!-- Comment with nested comments-->

                          <?php 
			
                            $sql = "SELECT * FROM comments where NumArticle=1 ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <div class="d-flex">
                              <div class="flex-shrink-0"><img style="width: 55px;" class="rounded-circle" src="data:image/png;base64,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" alt="..." /></div>
                              <div class="ms-3">
                                  <div class="fw-bold"><?php echo $row['name']; ?></div>
                                  <h6><?php echo $row['email']; ?></h6>
                                  <?php echo $row['comment']; ?>
                                </div>
                          </div>
                          <br>
                            <?php

                                }
                            }
                            
                            ?>

                      </div>
                  </div>
              </section>
          </div>
         
      </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>