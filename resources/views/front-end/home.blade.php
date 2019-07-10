<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Index Page</title>


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
  <!--Banner part---->
  <section id="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('front-end') }}/img/slide3.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('front-end') }}/img/slide2.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('front-end') }}/img/slide3.jpg" class="c-block" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <section id="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-us">
            <div class="title">
              <h2>About Us</h2>
            </div>
            <div class="details">
              <p>Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Daffodil Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Daffodil International University came into being on 24th January 2002, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement.</p>
              <br>
              <p>To be among the very best in Bangladesh which is the most challenging goal, has been set for the university. This has done so because it is only through working we can achieve the very highest level of standards in curriculum, teaching, faculties and other activities that can realize the full potential of the academic community that is Daffodil International University. The vision reflects the service to the society. The mission is to pursue research, learning and teaching of international distinction for the benefit of the nation.</p>
              <br>
              <p>Features of the setup vision and mission are striving for excellence, integrity and innovation in every aspect of activity; a strong collaborative approach; open and effective communications and an inclusive culture based on dignity, courtesy and respect.</p><br>
              <p>Daffodil International University's mission is defined by its IT-based traditions of service and access. The University is serving the citizens of the country through its instructions, research, and outreach programs and preparing Bangladesh to respond successfully to the challenges of global economy. The University has proved that it provides students broad access to the institution's educational resources.</p><br>
              <p>(Possible suggestion: For educational programs in campus and beyond, the university is giving high priority on the use of new and outreach technologies available in the emerging information era.) The University has paid the highest priority to resource allocation to graduate and post graduate education and for future development of those areas that represent the traditional strengths, quality, reputation, and uniqueness of the institution which continue to effectively respond to the needs of students and other constituents. Consistent with this commitment, the university is emphasizing on high quality education including a comprehensive general education that imparts the broad knowledge, skills, and values which are essential to educate and make citizens responsible as well as to ensure specialized career preparation for students. In establishing the primacy of education which is the institutional mission, the University is assuring the escalating strength of its faculty with the realization that the quality of instruction is directly related to the quality of the University's faculty and the commitment of the faculty to ensure excellence in education.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="teacher-info">
            <div class="title">
              <h2>Teacher Information</h2>
            </div>
            <div class="teacher-details">
              <div class="image">
                <img src="{{ asset('front-end') }}/img/sir1.jpg">
              </div>
              <div class="teacher">
                <h4 class="teacher-name">Professor Dr. Touhid Bhuiyan (Head of SWE in DIU)</h4>
                <p class="teacher-meta">PhD in Computer Science </p>
                <p>Queensland University of Technology, Australia.</p>
                <p>M.Sc. in Computer Science </p>
                <p>American University in London, UK.</p>
                <p>B.Sc. (Hons.) in Computing and Information Systems University of London, UK.</p>
              </div>
            </div>
            <div class="teacher-details">
              <div class="image">
                <img src="{{ asset('front-end') }}/img/sir2.jpg">
              </div>
              <div class="teacher">
                <h4 class="teacher-name">Dr. Md. Asraf Ali</h4>
                <p class="teacher-meta">PhD in Biomedical Electronic Engineering</p>
                <p>(Universiti Malaysia Perlis (UniMAP), Malaysia)</p>
                <p>M.Sc. in Computer Science</p>
                <p>(University of Madras, India)</p>
                <p>B.Sc. in Computer Science University of Madras, India</p>
              </div>
            </div>
            <div class="teacher-details">
              <div class="image">
                <img src="{{ asset('front-end') }}/img/sir3.jpg">
              </div>
              <div class="teacher">
                <h4 class="teacher-name">Afsana Begum  Lecturer (Senior Scale)</h4>
                <p>E-mail:  afsana.swe@diu.edu.bd</p>
                <p>Cell-Phone  01717545414</p>
                <p class="teacher-meta">Masters in IT</p>
                <p>Institute of Information Technology, Dhaka University.</p>
                <p>BSc in TEE</p>
                <p>Hajee Mohammad Danesh Science and Technology University, Dinajpur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-area">
            <p>&copy; Developed by <a href="#">Md Abu Baker Siddique</a></p>
          </div>
        </div>
      </div>
    </div> 
  </footer>

    


  <script src="{{ asset('front-end') }}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{ asset('front-end') }}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('front-end') }}/js/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('front-end') }}/js/bootstrap.min.js"></script>
</body>
</html>
