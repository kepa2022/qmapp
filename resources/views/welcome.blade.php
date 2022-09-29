<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KEPA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/homestyles/mdi/css/materialdesignicons.min.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">


</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        

      <nav id="navbar" class="navbar">
    
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>KERALA POLICE ACADEMY</h1>
      <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
      <img src="{{ asset('assets/images/hero-img.png') }}" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100"> 




      
      @if (Route::has('login'))
                
                    @auth
                     
                        <a href="{{ url('/home') }}" class="btn-get-started scrollto">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Log in</a>

                        @if (Route::has('register'))
                            
                            <a href="{{ route('register') }}" class="btn-get-started scrollto">Register</a>
                        @endif
                    @endauth
               
            @endif
      
    </div>
  </section><!-- End Hero Section -->



  <!-- ======= Footer ======= -->




     
        <p>&copy; Copyrights . All rights reserved.</p>
        <div class="credits">
          
        
    
    </div> </div>




</body>

</html>