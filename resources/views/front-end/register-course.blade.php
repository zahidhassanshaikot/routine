<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register Course</title>


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
  <section id="register-course">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="register-course">
            <div class="page-title">
              <h2>Register Your Course</h2>
            </div>
            <form action="#" class="register-course-form">
              <h5 class="type">Course Type</h5>
              <div class="course-type-wrapper">
                <div class="course-type">
                    <div class="improvement-overlap">
                      <input type="radio" value="improvement" id="improvement" name="course-type">
                      <label for="improvement">Improvement</label>
                      <input type="radio" value="overlap" id="overlap" name="course-type">
                      <label for="overlap">Overlap</label>
                    </div>
                    <div class="teacher-initial">
                      <label for="teacher-initial">Teacher Initial :</label>
                      <input type="text">
                    </div>
                    <div class="course-code">
                      <label for="course-code">Course Code :</label>
                      <input type="text">
                    </div>
                    <div class="course-title">
                      <label for="course-code">Course Title :</label>
                      <input type="text">
                    </div>
                </div>
              </div>
              <div class="add-more">
                <button class="add-more-btn">Add More</button>
              </div>
              <div class="submit-button">
                <button class="submit-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="copyright">
            <p>&copy; Developed by Sajib</p>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('front-end') }}/js/main.js"></script>
</body>
</html>
