<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Generate Routine</title>


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

  <section id="generate-routine">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="page-title">
            <h5>Generate Routine</h5>
          </div>
          <form action="{{ route('save-admin-generate-routine') }}" method="POST">
            @csrf
            <ul class="routine-generate">
                <li>
                  <select name="semister" id="" required>
                    <option value="">Semester</option>
                    <option value="Spring {{ Carbon\Carbon::now()->year }}">Spring {{ Carbon\Carbon::now()->year }}</option>
                    <option value="Summer {{ Carbon\Carbon::now()->year }}">Summer {{ Carbon\Carbon::now()->year }}</option>
                    <option value="Fall {{ Carbon\Carbon::now()->year }}">Fall {{ Carbon\Carbon::now()->year }}</option>
                  </select>
                </li>
                <li>
                  <select name="exam_type" id="" required>
                    <option value="">Exam</option>
                    <option value="Mid Term">Mid Term</option>
                    <option value="Final">Final</option>
                  </select>
                </li>
                <li>
                  <div class="generate-button submit-button">
                    <input type="submit" class="btn btn-info" name="btn" value="Generate Routine"> 
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
