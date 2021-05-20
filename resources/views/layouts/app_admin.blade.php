

        
            @section('layout')
                
            <!DOCTYPE html>
            <html lang="en">
            <head>
            
                
            
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <title>@yield('title')</title>
                <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
                <link rel="icon" href="/assets/img/icon.ico" type="image/x-icon"/>
            
                <!-- Fonts and icons -->
                <script src="/assets/js/plugin/webfont/webfont.min.js"></script>
                <script>
                    WebFont.load({
                        google: {"families":["Lato:300,400,700,900"]},
                        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
                        active: function() {
                            sessionStorage.fonts = true;
                        }
                    });
                </script>
            <script src="https://kit.fontawesome.com/31d5ad4544.js" crossorigin="anonymous"></script>
                <!-- CSS Files -->
                <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
                <link rel="stylesheet" href="/assets/css/atlantis.min.css">
            
                <!-- CSS Just for demo purpose, don't include it in your project -->
                <link rel="stylesheet" href="/assets/css/demo.css">
                <script src=“js/jquery.min.js”></script>
            </head>
            <body>
                <div class="wrapper sidebar_minimize">
                    <div class="main-header">
                        <!-- Logo Header -->
                        <div class="logo-header" data-background-color="blue">
                            
                           
                            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">
                                    <i class="icon-menu"></i>
                                </span>
                            </button>
                            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                            <div class="nav-toggle">
                                <button class="btn btn-toggle toggle-sidebar">
                                    <i class="icon-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- End Logo Header -->
            
                        <!-- Navbar Header -->
                        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                            
                            <div class="container-fluid">
                                <div class="collapse" id="search-nav">
                                  <h2 style="color:white;"> Etrucks CRM</h2>
                                </div>
                                
                                    </li>
                                
                            </div>
                        </nav>
                        
                        <!-- End Navbar -->
                    </div>
            
                    <!-- Sidebar -->
                    <div class="sidebar sidebar-style-2">			
                        <div class="sidebar-wrapper scrollbar scrollbar-inner">
                            <div class="sidebar-content">
                                <div class="user">
                                    <div class="avatar-sm float-left mr-2">
                                        <img src="https://img.icons8.com/officel/2x/user.png" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info">
                                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                            <span>
                                                {{ Auth::user()->name }}
                                                <span class="user-level">Administrator</span>
                                                <span class=""></span>
                                            </span>
                                        </a>
                                        <div class="clearfix"></div>
            
                                        <div class="collapse in" id="collapseExample">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#profile">
                                                        <span class="link-collapse">My Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#edit">
                                                        <span class="link-collapse">Edit Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#settings">
                                                        <span class="link-collapse">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-primary">
                                    <li class="nav-item active" style="color:red;">
                                        <a data-toggle="" href="/home"  style="background: chartreuse;" class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white">Post New Lead</p>
                                            
                                        </a>
                                        
                                    </li>
<br>
                                    <li class="nav-item active">
                                        <a data-toggle="" href="/admin"  style="background: darkorange;" class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white" >Leads</p>
                                            
                                        </a>
                                        
                                    </li>
                                    <br>
                                    <li class="nav-item active">
                                        <a data-toggle="" href="/sales"  style="background:violet"class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white" >View Sales</p>
                                            
                                        </a>
                                        
                                    </li>
                                    <br>
                                  
                                     <li class="nav-item active" style="color:red;">
                                        <a data-toggle="" href="/account"  style="background: teal;"class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white" >Manage Account</p>
                                            
                                        </a>
                                        
                                    </li>
                                    <br>

                                    <li class="nav-item active">
                                        <a data-toggle="" href="/booking"  style="background: indianred;" class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white" >Booking</p>
                                            
                                        </a>
                                        
                                    </li>
                                    <br>

                                    <li class="nav-item active">
                                        <a data-toggle="" href="/setting"  style="background: deeppink;" class="collapsed" aria-expanded="false">
                                            <i class=""></i>
                                            <p style="color: white">Settings</p>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item dropdown">
                                       
                                        <div class="" aria-labelledby="">
                                            <a class="" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    
        

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar -->
            
                    <div class="main-panel">
                        <div class="content">
                           
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            
            @yield('form')
               
            
                    <!-- Custom template | don't include it in your project! -->
                    <div class="custom-template">
                        <div class="title">Settings</div>
                        <div class="custom-content">
                            <div class="switcher">
                                <div class="switch-block">
                                    <h4>Logo Header</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                                        <br/>
                                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <h4>Navbar Header</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                                        <br/>
                                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <h4>Sidebar</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <h4>Background</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-toggle">
                            <i class="flaticon-settings"></i>
                        </div>
                    </div>
                    <!-- End Custom template -->
                </div>
                <!--   Core JS Files   -->
            
                <script src="/assets/js/core/popper.min.js"></script>
                <script src="/assets/js/core/bootstrap.min.js"></script>
            
                <!-- jQuery UI -->
                <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
                <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
            
                <!-- jQuery Scrollbar -->
                <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
            
            
                <!-- Chart JS -->
                <script src="/assets/js/plugin/chart.js/chart.min.js"></script>
            
                <!-- jQuery Sparkline -->
                <script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
            
                <!-- Chart Circle -->
                <script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
            
                <!-- Datatables -->
                <script src="/assets/js/plugin/datatables/datatables.min.js"></script>
            
                <!-- Bootstrap Notify -->
                <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
            
                <!-- jQuery Vector Maps -->
                <script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
                <script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
            
                <!-- Sweet Alert -->
                <script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
            
                <!-- Atlantis JS -->
                <script src="/assets/js/atlantis.min.js"></script>
            
                <!-- Atlantis DEMO methods, don't include it in your project! -->
                <script src="/assets/js/setting-demo.js"></script>
               
                <script>
                    Circles.create({
                        id:'circles-1',
                        radius:45,
                        value:60,
                        maxValue:100,
                        width:7,
                        text: 5,
                        colors:['#f1f1f1', '#FF9E27'],
                        duration:400,
                        wrpClass:'circles-wrp',
                        textClass:'circles-text',
                        styleWrapper:true,
                        styleText:true
                    })
            
                    Circles.create({
                        id:'circles-2',
                        radius:45,
                        value:70,
                        maxValue:100,
                        width:7,
                        text: 36,
                        colors:['#f1f1f1', '#2BB930'],
                        duration:400,
                        wrpClass:'circles-wrp',
                        textClass:'circles-text',
                        styleWrapper:true,
                        styleText:true
                    })
            
                    Circles.create({
                        id:'circles-3',
                        radius:45,
                        value:40,
                        maxValue:100,
                        width:7,
                        text: 12,
                        colors:['#f1f1f1', '#F25961'],
                        duration:400,
                        wrpClass:'circles-wrp',
                        textClass:'circles-text',
                        styleWrapper:true,
                        styleText:true
                    })
            
                    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');
            
                    var mytotalIncomeChart = new Chart(totalIncomeChart, {
                        type: 'bar',
                        data: {
                            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                            datasets : [{
                                label: "Total Income",
                                backgroundColor: '#ff9e27',
                                borderColor: 'rgb(23, 125, 255)',
                                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                            }],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            legend: {
                                display: false,
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        display: false //this will remove only the label
                                    },
                                    gridLines : {
                                        drawBorder: false,
                                        display : false
                                    }
                                }],
                                xAxes : [ {
                                    gridLines : {
                                        drawBorder: false,
                                        display : false
                                    }
                                }]
                            },
                        }
                    });
            
                    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
                        type: 'line',
                        height: '70',
                        width: '100%',
                        lineWidth: '2',
                        lineColor: '#ffa534',
                        fillColor: 'rgba(255, 165, 52, .14)'
                    });
                </script>
            </body>
            </html>
            
			@show
		
	

	