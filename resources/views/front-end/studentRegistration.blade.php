<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Student Registration Page</title>


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
          <a class="logo js-scroll-trigger" href="{{ route('routine') }}">Routine</a>
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
              <a class="nav-link" href="{{ route('student-registration') }}">Register Course</a>
			</li>
            
          </ul>
      </div>
    </nav>
  </header>
  <section id="student-registration">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
          <form action="#" class="student-registration-form">
            <div class="form-title">
              <h2>Student Registration</h2>
            </div>
            <label for="student-name">Student Name</label>
            <input type="text" class="student-name" id="student-name">
            <label for="student-id">Student Id</label>
            <input type="text" class="student-id" id="student-id">
            <label for="student-department">Student Department</label>
            <input type="text" class="student-department" id="student-department">
            <label for="student-password">Password</label>
            <input type="text" class="student-password" id="student-password">
            <label for="confirm-password">Confirm Password</label>
            <input type="text" class="confirm-password" id="confirm-password">
            <div class="submit-button">
              <button class="submit-btn"><a href="register-course.html">Submit</a></button>
            </div>
          </form>
          <p class="meta">If you have an account? Please <a href="{{ route('student-login') }}">Login</a></p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>

    


  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
</body>
</html>
