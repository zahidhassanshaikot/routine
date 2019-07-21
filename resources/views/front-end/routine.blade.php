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
  @include('front-end.header')
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
                      @foreach($obj_routine as $routine)
                      <tr>
                        <td>{{ $routine->id }}</td>
                        <td>
                          <div class="date">
                            <h6>{{ $routine->exam_date }}</h6>
                          </div>
                          <div class="time">
                            {{ $routine->exam_time }}
                          </div>
                        </td>
                        <td>
                            <div>
                              <h6>{{ $routine->subject }} - <span class="student-amount">{{ $routine->total }}</span></h6>
                            </div>
                           
                        </td>
                        <td>
                          <h6>{{ $routine->room_no }}</h6>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>

             
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
            <p>&copy; Developed by <a href="#">Sajib</a></p>
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
