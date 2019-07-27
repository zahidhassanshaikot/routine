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
              <a class="nav-link" href="{{ route('generate-routine') }}">
                 <i class="fa fa-tachometer"></i><span class="menu-title">Dashboard</span>
              </a>
            </li>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('/') }}" role="button">
                <i class="fa fa-home"></i> <span class="menu-title">Home</span>
              </a>
         
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('routine') }}" target="_blank" role="button">
                <i class="fa fa-home"></i> <span class="menu-title">Rutine</span>
              </a>
         
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

            @if(Session::get('message'))
                <div class="alert alert-success" id="message">
                    <h4 class=" text-center text-success"> {{ Session::get('message') }}</h4>
                </div>
            @endif
            <div class=" card card-default">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <div class="content-head">
                <h4 class="content-title">Routine Generate </h4><!-- /.content-title -->
              </div><!-- /.content-head -->

              <div class="content-details show">
                <table id="data-table" class="table data-table table-striped table-bordered">

                  <thead>
                    <tr>
                      <th>#No</th>
                      <!-- <th>Date/time</th> -->
                      <th>Subject</th>
                      <th>Total Reg</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($obj_data as $data)
                    <tr>
                      <td>{{$data->id}}</td>
             <!--          <td>
                        <div class="date">
                          <h6>{{$data->exam_date}}</h6>
                        </div>
                        <div class="time">
                          {{ $data->exam_time }}
                        </div>
                       
                      </td> -->
                      <td>
                          <div>
                            <h6>{{ $data->course_title }} </h6>
                          </div>
                          
                      </td>
                      <td>
                        <h6><span class="student-amount">{{ $data->total_reg }} </span> </h6>
                      
                      </td>
                      <td class="action">
                        <ul>
                          <!-- <li><a href="#" target="blank" class="profile">Save</a></li> -->
                          <li><a href="#" data-toggle="modal" data-target="#dateNtime-{{$data->id}}" class="profile">Save to Routine</a></li>

                        </ul>
                      </td>
                    </tr>



  <div class="modal fade" id="dateNtime-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="dateNtime" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Save To Routine</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="change-option">
          <form action="{{ route('save-routine-data')}}" method="POST">
            @csrf
              <label>Set Date : </label>
              <input type="date" class="change-option" name="exam_date" placeholder="Set Date"></input>
              <input type="hidden"  value="{{$data->id}}"class="change-option" name="reg_id"></input>
              <input type="hidden"  value="{{ $data->course_title }}" class="change-option" name="course_title"></input>
              <input type="hidden"  value="{{ $data->semister }}" class="change-option" name="semister"></input>
              <label>Set Time : </label>
              <input class="change-option" name="exam_time" placeholder="Set Time"></input>
               <label>Room no : </label>
              <input class="change-option" name="room_no" placeholder="Room No"></input>
              <input class="btn btn-info" type="submit" name="btn" ></input>
          </form>
        </div>
      </div>
    </div>
  </div>


                    @endforeach
            
                  </tbody>

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

  <!-- Modal -->





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
