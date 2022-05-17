<?php
require ('../inc/functions.php');
	session_start();
	$blog=getOneBlog($_GET['id']);
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets//owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
     <!-- Navbar Start -->
 <div class="container-fluid nav-bar p-0">
    <div class="container-lg p-0">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-white display-4"><span class="text-primary">C</span>limat<span class="text-primary">N</span>ews</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="/" class="nav-item nav-link active">Accueil</a>
                    <a href="/blog" class="nav-item nav-link">Blog</a>
                    <a href="/faq" class="nav-item nav-link">FAQ</a>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Blog Detail</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Detail</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-8">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                  
                </div>
                <div class="pt-4 pb-2">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                        
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href=""><?php echo $blog['date'];?></a>
                        </div>
                    </div>
                    <h2 class="font-weight-bold"><?php echo $blog['titre'];?></h2>
                </div>

                <div class="mb-5">
                        <p><?php echo $blog['description'];?></p>
                       
                </div>

               
                
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
              

               

                

               

                

                <!-- Plain Text Start -->
                <div>
                    <h3 class="font-weight-bold mb-4">A vous la lecture</h3>
                    <div class="border p-3">
                       Vous pouvez voir ici le detail conçernant le blog que vous avez choisi
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->


     <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-white display-4"><span class="text-primary">C</span>limat<span class="text-primary"><br> N</span>ews</h1>
            </a>
         
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="font-weight-bold text-primary mb-4">Liens rapides</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="/"><i class="fa fa-angle-right text-primary mr-2"></i>Accueil</a>
                <a class="text-white mb-2" href="/blog"><i class="fa fa-angle-right text-primary mr-2"></i>Blog</a>
                <a class="text-white mb-2" href="/faq"><i class="fa fa-angle-right text-primary mr-2"></i>FAQ</a>
           
            </div>
        </div>
       
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="font-weight-bold text-primary mb-4">Soyez à jour</h5>
            <p>Nous sommes disponibles 24h/24 et 7j/7 pour toute information complémentaire.</p>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>102 Andoharanofotsy, Antananarivo Madagascar</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+0261341203517</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>climatenews@info.mg</p>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center">
        &copy; <a class="font-weight-semi-bold" href="#">ClimateNEWS</a>.Tous droits réservés
 
    </p>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>