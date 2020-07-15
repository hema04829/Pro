<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( isset($_SESSION['user']) ) {
		// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	}
	$error = false;

	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>سيرو</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="css/bootstrap-rtl.css" type="text/css" />
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Chat CSS -->

  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
 <div class="container">
  <a class="navbar-brand" href="index"><img src="img/logo.png" style="height: 40px;"alt="avatar image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">الرئيسية
          <span class="sr-only">(current)</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">الطلبات</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">عن سيرو</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">تواصل معنا</a>
      </li>
 
    </ul>
 <ul class="navbar-nav ml-auto">
 <?php 			if(isset($_SESSION['user']) ) {
	?>
	      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="far fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="far fa-bell"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> إبراهيم </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">إعدادات الحساب</a>
          <a class="dropdown-item" href="#">تسجيل خروج</a>
        </div>
      </li>
	<?php
	} else {?>
	<a class="btn btn-sm align-middle btn-outline-white" href="login" type="button">تسجيل / دخول</a>
	
	<?php } ?>

    </ul>
  </div>
   </div>
</nav>
<!--/.Navbar -->
<div class="card card-image" style="background-image: url(img/33110.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">

      <!-- Content -->
      <h2 class="card-title h2 my-4 py-2">هل تبحث عن ترحيل ؟</h2>
      <p class="">حدد مكانك ووجهتك لتحصل على ترحيل والإتفاق على السعر شهري او الايومي , يمكنك تحديد وقد الذهاب و القدوم ونوع السيارة المطلوبة و جنسية السائق</p>
      <a class="btn peach-gradient"><i class="fas fa-clone left"></i>أطلب الأن</a>

    </div>
  </div>
</div>


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
<?php ob_end_flush(); ?>