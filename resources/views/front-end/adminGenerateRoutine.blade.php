<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/font-awesome.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/perfect-scrollbar.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/index-01.css">
</head>
<body>
    <div class="content-wrapper container-fluid">
      <aside class="left-panel">
        <nav class="navbar">
          <ul class="navbar-nav">

            <li class="nav-item dropdown active">
              <a class="nav-link" href="{{ route('admin-generate-routine') }}">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
              </a>
            </li>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('logout') }}" role="button"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i> <span class="menu-title">Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
         </form>
            </li>

          </ul>
        </nav>
      </aside>

    <div class="dashboard-contents">
      <div class="contents-inner">
        <div class="row">
          <div class="col-12">
            <div class="section-content">
              <div class="content-head">
                <h4 class="content-title">Routine Generate </h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>#No</th>
                      <th>Date/time</th>
                      <th>Subject</th>
                      <th>Room No</th>
                      <th>Action</th>
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
                        <button class="edit">Edit</button>
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
                        <button class="edit">Edit</button>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Save</a></li>
                        </ul>
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
                        <button class="edit">Edit</button>
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
                        <button class="edit">Edit</button>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Save</a></li>
                        </ul>
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
                        <button class="edit">Edit</button>
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
                        <button class="edit">Edit</button>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Save</a></li>
                        </ul>
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
                        <button class="edit">Edit</button>
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
                        <button class="edit">Edit</button>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Save</a></li>
                        </ul>
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
                        <button class="edit">Edit</button>
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
                        <button class="edit">Edit</button>
                      </td>
                      <td class="action">
                        <ul>
                          <li><a href="#" target="blank" class="profile">Save</a></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#No</th>
                      <th>Date/time</th>
                      <th>Subject</th>
                      <th>Room No</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.content-details -->
            </div>
          </div>

        </div>
      </div><!-- /.contents-inner -->

    <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="#" target="_blank"></a>
          </div>

          <div class="float-right">
            Developed with Love by <a href="#" rel="nofollow"></a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div>


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
