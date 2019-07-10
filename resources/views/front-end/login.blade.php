<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login  Page</title>


  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/font-awesome.min.css">

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">

  <!-- Import Templates CSS Files -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/responsive.css">
<body>

  <section id="login-page">
    <div class="container">
   
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-3 col-lg-6">
             
          <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-title">
              <h3>Login</h3>
            </div>
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
            </div>
            <label for="student-name">Email address</label>
            <input type="text" class="student-id" name="email" id="student-id">
            <label for="student-password">Password</label>
            <input type="text" class="student-password" name="password" id="student-password">
            <div class="submit-button">
               <input type="submit" class="submit-btn" name="btn" id="">
              {{--  <button class="submit-btn"><a href="generate-routine.html">Login</button></a>  --}}
            </div>
          </form>
          <p>If you do not have an account? Please <a href="{{ route('teacher-registration') }}">Sign Up</a></p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
      </div>
    </div>
  </section>

    


  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
</body>
</html>
