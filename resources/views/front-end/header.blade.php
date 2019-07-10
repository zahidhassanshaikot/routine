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
              <a class="nav-link" href="{{ route('student-registration') }}">Register Course</a>
			</li>

		@auth
 @if(Auth::user()->hasRole(['Teacher']))
			<li class="nav-item">
              <a class="nav-link" href="{{ route('student-info') }}">Student Info</a>
			</li>
			<li class="nav-item">
              <a class="nav-link" href="{{ route('generate-routine') }}">Generate Routine</a>
            </li>
			
				<li class="nav-item">
              <a class="nav-link" href="{{ route('contuct-us') }}">Contuct us</a>
            </li>
    @endif
    @endauth
      @guest
			<li class="nav-item">
              <a class="nav-link" href="{{ route('admin-login') }}">Admin</a>
      </li>
      @endguest
			@auth
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
         </form>
			</li>
      @endauth
        
     
      </div>
    </nav>
  </header>