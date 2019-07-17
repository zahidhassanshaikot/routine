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
            <form action="{{ route('save-reg-course-info') }}" class="register-course-form" method="POST">
              @csrf
              <h5 class="type">Course Type</h5>
              <div class="course-type-wrapper">
                <div class="course-type">
                    <div class="improvement-overlap">
                      <label for="improvement">Registration Type :</label>
                      <select class="course-pt-1" name="reg_type[]">
                        <option>Improvement</option>
                        <option>Overlap</option>
                      </select>
                    </div>
                    <div class="teacher-initial">
                      <label for="teacher-initial">Teacher Initial :</label>
                      <input type="text" name="teacher_init[]" required>
                      <input type="hidden" name="student_id"  value="{{ $student_id }}">
                    </div>
                    <div class="course-code">
                      <label for="course-code">Course Code :</label>
                      <select class="course-pt-1" name="course_code[]" required>
                        <option value="">Course Code</option>
                        <option value="SWE101">SWE101</option>
                        <option value="SWE102">SWE102</option>
                        <option value="SWE103">SWE103</option>
                        <option value="SWE104">SWE104</option>
                      </select>
                    </div>
                    <div class="course-title">
                      <label for="course-code">Course Title :</label>
                      <select class="course-pt-1" name="course_title[]" required>
                        <option value="">Course Title</option>
                        <option value="OOP">OOP</option>
                        <option value="Testing">Testing</option>
                        <option value="System Analysis">System Analysis</option>
                        <option value="Math">Math</option>
                      </select>
                    </div>                 
                    <div class="course-title">
                      <label for="course-code">Exam Type :</label>
                      <select class="course-pt-1" name="exam_type[]">
                        <option>Exam Type</option>
                        <option>Mid Term</option>
                        <option>Final</option> 
                      </select>
                    </div>
                    <div class="course-title">
                      <label for="course-code">Semister :</label>
                      <select class="course-pt-1" name="semister[]">
                        <option>Semister </option>
                        <option>Spring {{ Carbon\Carbon::now()->year }} </option>
                        <option>Summer {{ Carbon\Carbon::now()->year }} </option> 
                        <option>Fall {{ Carbon\Carbon::now()->year }}</option> 
                      </select>
                    </div>
                </div>
              </div>
              <div class="add-more">
                <button class="add-more-btn">Add More</button>
              </div>
              <div class="submit-button">
                 <input type="submit" name="btn" class="submit-btn btn">
                {{--  <button class="submit-btn">Submit</button>  --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>




  {{--  <section id="register-course">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="register-course">
            <div class="page-title">
              <h2>Register Your Course</h2>
            </div>
            <form action="{{ route('save-reg-course-info') }}" class="register-course-form" method="POST">
              @csrf
              <h5 class="type">Course Type</h5>
              <div class="course-type-wrapper">
                <div class="courseType">
                    <div class="improvement-overlap">
                      <input type="radio" value="improvement" id="improvement" name="exam_type[]">
                      <label for="improvement">Improvement</label>
                      <input type="radio" value="overlap" id="overlap" name="exam_type[]">
                      <label for="overlap">Overlap</label>
                    </div>
                    <div class="teacher-initial">
                      <label for="teacher-initial">Teacher Initial :</label>
                      <input type="text" name="teacher_init[]">
                    </div>
                    <div class="course-code">
                      <label for="course-code">Course Code :</label>
                      <input type="text" name="course_code[]">
                    </div>
                    <div class="course-title">
                      <label for="course-code">Course Title :</label>
                      <input type="text" name="course_title[]">
                    </div>
                </div>
              </div>
              <div class="add-more">
                <button class="add-more-btn">Add More</button>
              </div>
              <div class="submit-button">
                <input type="submit" name="btn" class="submit-btn btn">
               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}




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
