<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/logo.png')}}" rel="icon">
  <link href="{{asset('images/logo.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat rgb(249,249,249) ;
        opacity: .8;
        background-size:200px 120px;
    }
</style>

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
     
    </head>
    <body>
        <div id = "myDiv" style="display:none;" class="loader">
        </div>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
        
              <h1 class="logo"><a href="index.html">Sign Languange</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  <li><a class="getstarted scrollto" target="_blank" href="{{ route('login') }}">Log In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
            </div>
          </header><!-- End Header -->
        
          <!-- ======= Hero Section ======= -->
          <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
              <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                  <h1>Filipino Sign Language Web Application</h1>
                  <h2>Online Free Sign Languange Conversion</h2>
                </div>
              </div>
              <div class="text-center">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
              
        
              <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a href="">OBJECTIVE</a></h4>
                    <p class="description">To give better understanding and detailed explanation of the application being presented. To understand the essence of communication for both physically normal and not.</p>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title"><a href="">Limitation</a></h4>
                    <p class="description">FSLA has a limited range and it is only for one individual at a time. By trying to show many hands, the database will be confused and only show corresponding result to the clearest image that the webcam detected.</p>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title"><a href="">Scope</a></h4>
                    <p class="description">FSLA provides the letters or text that resembles and corresponds the gestures being signed. </p>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-camera"></i></div>
                    <h4 class="title"><a href="">Device</a></h4>
                    <p class="description">User will use a webcam to detect the gestures or signs which the user is trying to do. </p>
                  </div>
                </div>
        
              </div>
            </div>
          </section><!-- End Hero -->
        
          <main id="main">
        
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>About</h2>
                  {{-- <p>Objective of this system </p> --}}
                </div>
        
                <div class="row content">
                  <div class="col-lg-6">
                    <p>
                        Objective of the system.
                    </p>
                    <ul>
                      <li><i class="ri-check-double-line"></i> To give better understanding and detailed explanation of the application being presented.</li>
                      <li><i class="ri-check-double-line"></i> To be a useful tool for gaining and building skills through communication for users. </li>
                      <li><i class="ri-check-double-line"></i> To understand the essence of communication for both physically normal and not.</li>
                      <li><i class="ri-check-double-line"></i> To give knowledge why it is important to try a new language.</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        The Filipino sign language application is a Web based application and an interactive learning tool used to learn a new language specified as the “sign language” from the title itself that all people with hearing and speech impairments use in their daily lives to communicate. FSLA is an easy access tool especially for beginners that are willing to try and add up knowledge about new languages for a more diverse community. Having knowledge in a new language or the focus language (sign language) will reach and have the connection to extend to the deaf community and prepare every individual for handling the language and communication barriers. 
                    </p>
                    {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
                  </div>
                </div>
        
              </div>
            </section><!-- End About Section -->
       
         
            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Team</h2>
                 </div>
        
                <div class="row">
                  @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                        <div class="member-img">
                            <img src="{{asset(".$team->image.")}}" class="img-fluid" alt="">
                            <div class="social">
                                {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                                <a target="_blank" href="{{$team->facebook}}"><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href="{{$team->instagram}}"><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href="{{$team->linkedin}}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        
                        </div>
                        <div class="member-info">
                            <h4>{{$team->name}}</h4>
                            <span>{{$team->role}}</span>
                        </div>
                        </div>
                    </div>
                  @endforeach
                </div>
        
              </div>
            </section><!-- End Team Section -->
        
            <!-- ======= Pricing Section ======= -->
           
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Frequently Asked Questions</h2>
                 </div>
        
                <div class="faq-list">
                  <ul>
                    @foreach($faqs as $faq)
                    <li data-aos="fade-up">
                      <i class="bx bx-help-circle icon-help"></i>
                      <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-{{$faq->id}}">{!! nl2br($faq->question) !!} 
                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                      </a>
                      <div id="faq-list-{{$faq->id}}" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          {!! nl2br($faq->answer) !!} </p>
                      </div>
                    </li>
                    @endforeach
        
                  </ul>
                </div>
        
              </div>
            </section><!-- End Frequently Asked Questions Section -->
        
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Contact</h2>
                </div>
                @if(session()->has('status'))
                    <div class="alert alert-success alert-dismissable">
                        {{-- <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> --}}
                        {{session()->get('status')}}
                    </div>
                @endif
                <div class="row mt-5">
                  <div class="col-lg-12 mt-5 mt-lg-0">
        
                    <form action="send-message" onsubmit='show();' method="post" class="php-email-form">
                      @csrf
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
        
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Contact Section -->
        
          </main><!-- End #main -->
        
          <!-- ======= Footer ======= -->
          <footer id="footer">
        
            
        
            <div class="container d-md-flex py-4">
        
              <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                  &copy; Copyright <strong><span></span></strong>. All Rights Reserved
                </div>
               
              </div>
            </div>
          </footer><!-- End Footer -->
        
          <div id="preloader"></div>
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
          <!-- Vendor JS Files -->
          {{-- <script src="assets/vendor/purecounter/purecounter.js"></script> --}}
          <script src="assets/vendor/aos/aos.js"></script>
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
          <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
          {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
        
          <!-- Template Main JS File -->
          <script src="assets/js/main.js"></script>
          <script type='text/javascript'>
            function show() {
                document.getElementById("myDiv").style.display="block";
            }
        </script>
    </body>
</html>
