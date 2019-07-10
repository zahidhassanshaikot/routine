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
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student-registration.html">Register Course</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="total-register-student.html">Student information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="generate-routine.html">Genetate Routine</a>
            </li>
          </ul>
      </div>
    </nav>
  </header>
  <section id="generate-routine">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="page-title">
            <h5>Generate Routine</h5>
          </div>
          <form action="admin.php">
            <ul class="routine-generate">
                <li>
                  <select name="" id="">
                    <option value="Semester">Semester</option>
                    <option value="Semester">Spring 19</option>
                    <option value="Semester">Summer 19</option>
                    <option value="Semester">Fall 19</option>
                  </select>
                </li>
                <li>
                  <select name="" id="">
                    <option value="Semester">Exam</option>
                    <option value="Semester">Mid Term</option>
                    <option value="Semester">Final</option>
                  </select>
                </li>
                <li>
                  <div class="generate-button submit-button">
                    <button href="#" class="submit-btn"><a  href="{{ route('admin-generate-routine') }}"> Generate Routine</button></a>
                  </div>
                </li>
              </ul>
            </form>
        </div>
      </div>
    </div>
  </section>

    


  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
</body>
</html>
