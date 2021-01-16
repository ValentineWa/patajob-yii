<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap" style="background: url(img/wor2.jpg)"> 
<header class="header">
<!-- navbar -->
<nav class="navbar nav-boot navbar-expand-lg fixed-top navbar-light light-green navbar-fixed">
    <a class="navbar-brand" href="index.html">
      <i class="fa fa-briefcase fa-3x yell" aria-hidden="true"></i>
      <!-- <img src="img/logg.png" alt="Job Search" width="100" height="50" loading="lazy"> -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <div class="container">
      <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active yell">
            <a class="nav-link text-warning" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item yell">
            <a class="nav-link" href="listings.html">Jobs</a>
          </li>
          
          <li class="nav-item yell">
            <a class="nav-link " href="company.html">About</a>
          </li>
          <li class="nav-item yell">
            <a class="nav-link" href="company.html">Contact</a>
          </li>
        
        </ul>
      </div>
      </div>
      <div class="pull-right">
        <ul class="navbar-nav mr-auto right">
          <li class="nav-item dropdown yell">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             
               <a class="dropdown-item text-dark" href="postjob.html">Post Job</a>
              <a class="dropdown-item text-dark" href="profile.html">Profile</a> 
              <a class="dropdown-item text-dark" href="profile.html">Login</a>
               <a class="dropdown-item text-dark" href="profile.html">Sign Up</a>
               <a class="dropdown-item text-dark" href="profile.html">Sign Up</a>
             
            </div>
          </li>
         
          
        </ul> 
      </div> 
         

    </nav>
<!-- end navbar -->
</header>
</div>
<footer class="footer">
    <!-- <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div> -->
       
 	<!-- start footer -->
<footer class="text-white foot top-margin">
  <!-- Grid container -->
  <div class="container p-1">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-4 contact mt-3">
        <a href="index.html"> <i class="fa fa-briefcase fa-5x yell" aria-hidden="true"></i></a>
        <!-- <img src="img/logg.png" class="card-img" alt="..."> -->
      
        <p>            
          Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.
        </p>
        
      </div>
      <!--Grid column-->
      <!--Grid column-->
  
         <div class="col-md-2">
        <h5 class="mt-3">Quick Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="index.html" class="text-white">Home</a>
          </li>
          <li>
            <a href="listings.html" class="text-white">Jobs</a>
          </li>
          <li>
            <a href="company.html" class="text-white">About</a>
          </li>
          <li>
            <a href="company.html" class="text-white">Contact</a>
          </li>
        </ul>
      </div>

      <!--Grid column-->
      <!--Grid column-->
       <div class="col-md-2">
        <h5 class="mt-3">My Dashboard</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="postjob.html" class="text-white">Post a Job</a>
          </li>
          <li>
            <a href="profile.html" class="text-white">My Profile</a>
          </li>
          <li>
            <a href="profile.html" class="text-white">Sign Up</a>
          </li>
          <li>
            <a href="profile.html" class="text-white">Login</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <div class="col-md-2">
        <h5 class="mt-3">Categories</h5>

        <ul class="list-unstyled mb-0 ">
         <li>
            <a href="#!" class="text-white">Legal </a>
          </li>
          <li>
            <a href="#!" class="text-white">Food</a>
          </li>
          <li>
            <a href="#!" class="text-white">Health</a>
          </li>
          <li>
            <a href="#!" class="text-white">Engineering</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-md-2">
        <h5 class="mt-3">Find Us </h5>
        <p><i class="fa fa-envelope-o yell mb-0" aria-hidden="true"></i>info@patajob.co.ke</p>
        <p><i class="fa fa-map-marker yell" aria-hidden="true"></i> Nairobi, Kenya.</p>


        <ul class="list-unstyled">
         <div class="row socials">
          <div class="col-md-2">
            <li> <a href="facebook.com" ><i class="fa fa-facebook yell"></i></a></li></div>
            <div class="col-md-2"> <a href="twitter.com" > <li><i class="fa fa-twitter yell "></i></a></li></div>
            <div class="col-md-2"> <a href="youtube.com" ><li><i class="fa fa-youtube yell"></i></a></li></div>
            <div class="col-md-2"> <a href="linkedin.com"><li><i class="fa fa-linkedin yell"></i></a></li></div>
          </div>
        </ul>
      </div>

      <!--Grid column-->
    </div>
    <!--Grid row-->
     <!-- Copyright -->
  <div class="text-center p-1">
    
   
    <p class="text-white" href=""> © 2021 Copyright:by PataJob. All Rights</p>
  </div>
  <!-- Copyright -->
</footer>
  </div>
  <!-- Grid container -->

 
<!-- end footer -->

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
