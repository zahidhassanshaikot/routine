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
  @include('front-end.header')
  <!-- <header>
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
  </header> -->

<section id="register-course">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="register-course">
            <div class="page-title">
              <h2>Register Your Course</h2>
            </div>
            <form action="{{ route('save-reg-course-info') }}" class="register-course-form" method="POST" enctype="multipart/form-data">
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
                        <option value="SWE 112">SWE 112</option>
                        <option value="SWE111">SWE111</option>
                        <option value="PHY114">PHY114</option>
                        <option value="ENG 123">ENG 123</option>
                        <option value="MAT113	">MAT113	</option>
                        <option value="SWE121">SWE121</option>
                        <option value="SWE122	">SWE122	</option>
                        <option value="MAT221	">MAT221	</option>
                        <option value="SWE133">SWE133</option>
                        <option value="STA131">STA131</option>
                        <option value="SWE231">SWE231</option>
                        <option value="SWE132">SWE132</option>
                        <option value="SWE213">SWE213</option>
                        <option value="SWE 211">SWE 211</option>
                        <option value="SWE223">SWE223</option>
                        <option value="SWE222">SWE222</option>
                        <option value="SWE224">SWE224</option>
                        <option value="SWE233">SWE233</option>
                        <option value="SWE131">SWE131</option>
                        <option value="SWE232	">SWE232	</option>
                        <option value="ACC 124">ACC 124</option>
                        <option value="SWE212">SWE212</option>
                        <option value="SWE323">SWE323</option>
                        <option value="SWE312">SWE312</option>
                        <option value="SWE322">SWE322</option>
                        <option value="SWE313">SWE313</option>
                        <option value="SWE321">SWE321</option>
                        <option value="SWE333">SWE333</option>
                        <option value="SWE413">SWE413</option>
                        <option value="SWE311">SWE311</option>
                        <option value="SWE412">SWE412</option>
                        <option value="SWE331">SWE331</option>
                        <option value="SWE413">SWE413</option>
                        <option value="SWE332">SWE332</option>
                        <option value="SWE435">SWE435</option>
                        <option value="SWE439">SWE439</option>
                        <option value="SWE422">SWE422</option>
                        <option value="SWE423">SWE423</option>
                        <option value="SWE424">SWE424</option>
                        <option value="SWE425">SWE425</option>
                        <option value="SWE426">SWE426</option>
                        <option value="SWE431">SWE431</option>
                        <option value="SWE432">SWE432</option>
                        <option value="SWE433">SWE433</option>
                        <option value="SWE434">SWE434</option>
                        <option value="SWE435">SWE435</option>
                        <option value="SWE436">SWE436</option>
                        <option value="SWE437">SWE437</option>

                      </select>
                    </div>
                    <div class="course-title">
                      <label for="course-code">Course Title :</label>
                      <select class="course-pt-1" name="course_title[]" required>
                        <option value="">Course Title</option>
                        <option value="Computer Fundamentals with Lab">	Computer Fundamentals with Lab</option>
                        <option value="Introduction to Software Engineering	">Introduction to Software Engineering	</option>
                        <option value="Physics with Lab	">Physics with Lab	</option>
                        <option value="	English Language">	English Language</option>
                        <option value="	Mathematics-I (Calculus and Differential Equations)">		Mathematics-I (Calculus and Differential Equations)</option>
                        <option value="Software Requirement Analysis and Design	">Software Requirement Analysis and Design		</option>
                        <option value="	Programming Language with Lab">		Programming Language with Lab</option>
                        <option value="Mathematics-II">Mathematics-II	</option>
                        <option value="Data Structure with Lab	">Data Structure with Lab		</option>
                        <option value="Statistics & Probabilities	">Statistics & Probabilities		</option>
                        <option value="Software Engineering Project-I (using C)	">Software Engineering Project-I (using C)		</option>
                        <option value="Java Programming with Lab	">Java Programming with Lab		</option>
                        <option value="Computer Algorithms  with Lab	">	Computer Algorithms  with Lab	</option>
                        <option value="Introduction to Database with Lab	">Introduction to Database with Lab		</option>
                        <option value="Digital Electronics with Lab	">Digital Electronics with Lab		</option>
                        <option value="Software Engineering Quality Assurance and Testing	">Software Engineering Quality Assurance and Testing		</option>
                        <option value="Discrete Mathematics	">Discrete Mathematics		</option>
                        <option value="Object Oriented Concept & Design with lab	">Object Oriented Concept & Design with lab		</option>
                        <option value="Documentation of Software Engineering	">Documentation of Software Engineering		</option>
                        <option value="Operating System with Lab	">Operating System with Lab		</option>
                        <option value="Principle of Accounting	">Principle of Accounting		</option>
                        <option value="Software Project Management	">Software Project Management		</option>
                        <option value=" System Analysis and Design	"> System Analysis and Design		</option>
                        <option value="Theory of Computing	">Theory of Computing		</option>
                        <option value="Software Security	">Software Security		</option>
                        <option value="Dot Net Programming with Lab	">Dot Net Programming with Lab		</option>
                        <option value="Data Communication with Lab	">Data Communication with Lab		</option>
                        <option value="Desktop and Web Programming with Lab	">Desktop and Web Programming with Lab		</option>
                        <option value="Software Engineering and Cyber Laws	">Software Engineering and Cyber Laws		</option>
                        <option value="Computer Architecture & Organization	">Computer Architecture & Organization		</option>
                        <option value="Management Information System	">Management Information System		</option>
                        <option value="Object Oriented Software Development	">Object Oriented Software Development		</option>
                        <option value="Software Engineering and Cyber Laws	">Software Engineering and Cyber Laws		</option>
                        <option value=" Software Engineering Project II (Web Programming)	"> Software Engineering Project II (Web Programming)		</option>
                        <option value="Multimedia Programming with Lab	">Multimedia Programming with Lab		</option>
                        <option value="Project/Thesis	">Project/Thesis		</option>
                        <option value="Numerical Analysis with Lab	">Numerical Analysis with Lab		</option>
                        <option value="Advanced Database Management with Lab	">Advanced Database Management with Lab		</option>
                        <option value="Artificial Intelligence with Lab	">Artificial Intelligence with Lab		</option>
                        <option value="Telecommunication Engineering with Lab	">Telecommunication Engineering with Lab		</option>
                        <option value="Distributive Computing & Networking Security with Lab	">Distributive Computing & Networking Security with Lab		</option>
                        <option value="Psychology	">Psychology		</option>
                        <option value="Telecommunication & Software System	">Telecommunication & Software System		</option>
                        <option value="Software Engineering Project- lV Using database Programming	">Software Engineering Project- lV Using database Programming		</option>
                        <option value="E- commerce & M-commerce	">E- commerce & M-commerce		</option>
                        <option value="Business Communication	">Business Communication		</option>
                        <option value="Software Engineering Project- ll (Using C++/ Java)	">Software Engineering Project- ll (Using C++/ Java)		</option>
                        <option value="Software Engineering Industrial Training	">Software Engineering Industrial Training		</option>
                        
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
                    <div class="add-file">
                      <input type="file" name="image">
                      <span>Only for Improvement Students</span>
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
