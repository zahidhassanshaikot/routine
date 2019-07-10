<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Routine</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/font-awesome.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Templates CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/index-01.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar-brand">
          <a class="logo js-scroll-trigger" href="{{ route('/') }}"><img src="{{ asset('front-end') }}/img/logo1.jpg"></a>
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
              <a class="nav-link" href="register-course.html">Register Course</a>
            </li>
	<li class="nav-item">
              <a class="nav-link" href="{{ route('generate-routine') }}">Generate Routine</a>
            </li>
          </ul>
      </div>
    </nav>
  </header>
    <div class="content-wrapper container-fluid">
      <div class="dashboard-contents">
        <div class="contents-inner">
          <div class="row">
            <div class="col-12">
              <div class="section-content">
                <div class="content-head">
                  <h4 class="content-title">Routine </h4><!-- /.content-title -->
                </div><!-- /.content-head -->

                <div class="content-details show">
                  <table id="data-table" class="table data-table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#No</th>
                        <th>Date/time</th>
                        <th>Subject</th>
                        <th>Room No</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>
                          <div class="date">
                            <h6>2-05-2019</h6>
                          </div>
                          <div class="time">
                            12 pm
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>System Analysis - <span class="student-amount">04</span></h6>
                            </div>
                            <div>
                              <h6>Oop - <span class="student-amount">05</span></h6>
                            </div>
                        </td>
                        <td>
                          <h6>501 AB</h6>
                        </td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>
                          <div class="date">
                            <h6>4-05-2019</h6>
                          </div>
                          <div class="time">
                            12 pm
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>Data Analysis - <span class="student-amount">06</span></h6>
                            </div>
                            <div>
                              <h6>C programming - <span class="student-amount">07</span></h6>
                            </div>
                        </td>
                        <td>
                          <h6>601 AB</h6>
                        </td>
                      </tr>
                      <tr>
                        <td>03</td>
                        <td>
                          <div class="date">
                            <h6>6-05-2019</h6>
                          </div>
                          <div class="time">
                            12 pm
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>Testing - <span class="student-amount">06</span></h6>
                            </div>
                            <div>
                              <h6>Accounting - <span class="student-amount">08</span></h6>
                            </div>
                        </td>
                        <td>
                          <h6>504 AB</h6>
                        </td>
                      </tr>
                      <tr>
                        <td>04</td>
                        <td>
                          <div class="date">
                            <h6>7-05-2019</h6>
                          </div>
                          <div class="time">
                            12 pm
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>Softwate Requirement - <span class="student-amount">04</span></h6>
                            </div>
                            <div>
                              <h6>Java programming - <span class="student-amount">15</span></h6>
                            </div>
                        </td>
                        <td>
                          <h6>401 AB</h6>
                        </td>
                      </tr>
                      <tr>
                        <td>05</td>
                        <td>
                          <div class="date">
                            <h6>4-05-2019</h6>
                          </div>
                          <div class="time">
                            12 pm
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>Data Analysis - <span class="student-amount">06</span></h6>
                            </div>
                            <div>
                              <h6>C programming - <span class="student-amount">07</span></h6>
                            </div>
                        </td>
                        <td>
                          <h6>601 AB</h6>
                        </td>
                      </tr>
                    </tbody>

                    <tfoot>
                      <tr>
                        <th>#No</th>
                        <th>Date/time</th>
                        <th>Subject</th>
                        <th>Room No</th>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="print-button">
                    <a href="javascript:window.print()" class="print-button">Print Routine</a>
                  </div>
                </div><!-- /.content-details -->
              </div>
            </div>

          </div>
        </div><!-- /.contents-inner -->
    </div><!-- /.dashboard-contents -->
  </div>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-area">
            <p>&copy; Developed by <a href="#">Abu Baker Siddique</a></p>
          </div>
        </div>
      </div>
    </div> 
  </footer>

  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/plugins.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>

  <script src="{{ asset('front-end') }}/assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
      "use strict";

      $('.data-table').DataTable();
    });
  </script>


</body>

<!-- Mirrored from demos.jeweltheme.com/hi5dash/demo/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 19:01:56 GMT -->
</html>
