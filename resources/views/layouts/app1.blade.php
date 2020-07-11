<!DOCTYPE html>
<html lang="en">

<head>
    <meta name= “viewport” content=”width=device-width, user-scalable=no” />
    <link rel="manifest" href="../app_assets/manifest.json">
    
    <meta name="theme-color" content="#00A862">

   
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Etrucks') }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
<script>
    navigator.serviceWorker && navigator.serviceWorker.register(‘../app_assets/sw.js’).then(function(registration) {  console.log(‘Excellent, registered with scope: ‘, registration.scope);});
</script>
    <!-- Favicons -->
    <link href="../app_assets/img/favicon.png" rel="icon">
     <link href="../app_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../app_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../app_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../app_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  
    

    <!-- Template Main CSS File -->
    <link href="../app_assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v1.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <div class="container">
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
</div>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="https://cdn.iconscout.com/icon/free/png-512/avatar-367-456319.png" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">{{ Auth::user()->name }}</a></h1>
             
            </div>


            

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="/"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="/post-new-lead"><i class="bx bx-file"></i> <span>Post New Lead</span></a></li>
                    
                    <li><a href="/leads-assigned-to-you"><i class="bx bx-list-check"></i> <span>Leads Assigned To You</span></a></li>
                    <li><a href="/edit-lead"><i class="bx bx-edit-alt"></i> <span>Edit Leads</span></a></li>
                    
                   


                    <li class="nav-item dropdown">
                                       
                        <div class="" aria-labelledby="">
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="bx bx-log-out-circle"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li><a href="/admin"><i class="bx bx-admin"></i> <span>Login as Admin</span></a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
   {{--   --}}

    @yield('content')
    <!-- End Hero -->

        <!-- ======= Facts Section ======= -->
      
        <!-- End Services Section -->

      <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- End  Footer -->

  

    <!-- Vendor JS Files -->
    <script src="../app_assets/vendor/jquery/jquery.min.js"></script>
    <script src="../app_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  

    <!-- Template Main JS File -->
    <script src="../app_assets/js/main.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>

</html>