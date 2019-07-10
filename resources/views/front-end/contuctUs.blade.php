<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact Page</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/font-awesome.min.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Templates CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/responsive.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand">
          <a class="logo js-scroll-trigger" href="index.php">Routine</a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
      <li class="nav-item">
              <a class="nav-link active" href="{{ route('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student-registration.html">Register Course</a>
			</li>
			@guest
			<li class="nav-item">
              <a class="nav-link" href="{{ route('admin-login') }}">Admin</a>
			</li>
			@endguest
			@auth
			<li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
			</li>
			
			@endauth
				<li class="nav-item">
              <a class="nav-link" href="{{ route('contuct-us') }}">Contuct us</a>
            </li>
          </ul>
      </div>
    </nav>
  </header>
  <!--Banner part---->
  <section id="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('front-end') }}/img/slide3.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('front-end') }}/img/slide2.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('front-end') }}/img/slide3.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <section id="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact">
            <div class="title">
              <h2>Contact Us</h2>
            </div>
            <div id="map"></div>
            <div class="contact-details">
              <p>102 Shukrabad, Dhanmondi,Dhaka-1207</p>
              <p>Phone: 9138234-5, 9136694, 9116774 Ext.: 103</p>
              <p>Cell: 01713493011</p>
              <p>registraroffice@daffodilvarsity.edu.bd</p>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-area">
            <p>&copy; Developed by <a href="#">Sojib</a></p>
          </div>
        </div>
      </div>
    </div> 
  </footer>

    


  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('front-end') }}/js/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('front-end') }}/js/bootstrap.min.js"></script>
</body>
</html>
