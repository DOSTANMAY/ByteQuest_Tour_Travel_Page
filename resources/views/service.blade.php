<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- icons Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-iconss@1.4.1/font/bootstrap-iconss.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
         <!-- JavaScript Libraries -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <style>
    .custom-heading {
        font-family: Papyrus;
        font-size: 30px;
        font-style: normal;
        color: goldenrod;
                text-shadow: 4px 4px 8px rgba(0,0,0,0.5);
        letter-spacing: 2px;
    }
                .dropdown-item {
        background-color: #4CAF50;         color: #fff;         border: none;         border-radius: 30px;         padding: 10px 25px;         font-size: 16px;         transition: all 0.3s ease;         cursor: pointer;         display: block;
        margin-bottom: 10px;
        text-decoration: none;         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);     }

    .dropdown-item:hover {
        background-color: #45a049;     }

    .btn-danger {
        background: linear-gradient(45deg, #FF6B6B, #FF8E8E);         color: #fff;         border: none;         border-radius: 30px;         padding: 10px 25px;         font-size: 16px;         transition: all 0.3s ease;         cursor: pointer;         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);     }

    .btn-danger:hover {
        background: linear-gradient(45deg, #FF8E8E, #FF6B6B);     }

    .dropdown-menu {
        background-color: transparent;     }

    .dropdown-toggle:hover small {
        animation: scaleAnimation 0.3s ease forwards;     }

    @keyframes scaleAnimation {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.1);
        }
    }
</style>
    </head>

    <body>

      \
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
     \
        <div class="container-fluid bg-primary px-5  d-lg-block">
    <div class="row gx-0">
    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <h1 class="custom-heading">ByteQuest: Fusion of Tech, Culture, and Adventure</h1>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                @if(session('clientinfo'))
                    @foreach(session('clientinfo') as $client)
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown">
                            <small><i class="fa fa-home me-2"></i>Welcome, {{$client->name}}</small>
                        </a>
                        <div class="dropdown-menu rounded">
                            <form method="get" action="{{ url('/show', ['id' => $client->user_id]) }}">
                                <div class="text-center">
                                    <button class="dropdown-item">My Profile</button>
                                </div>
                            </form>
                            <form method="get" action="{{url('/changepassword')}}{{$client->user_id}}">    
                                <div class="text-center">
                                    <button class="dropdown-item">Change Password</button>
                                </div>
                            </form>
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <div class="text-center">
                                    <button class="btn btn-danger" type="submit">Logout</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                @else
                    <a href="{{url('register')}}"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="{{url('login')}}"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                @endif
            </div>
        </div>
    </div>
</div>
       
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><img src="img/logo.png" alt="Logo"> </i>Bengal Odyssey</h1>
                     
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ url('service') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ url('package') }}" class="nav-item nav-link">Packages</a>
                        <a href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('destination') }}" class="dropdown-item">Destination</a>
                                <a href="{{ url('tour') }}" class="dropdown-item">Explore Tour</a>
                                <a href="{{ url('booking') }}" class="dropdown-item">Travel Booking</a>
                                <a href="{{ url('gallery') }}" class="dropdown-item">Our Gallery</a>
                                <a href="{{ url('guides') }}" class="dropdown-item">Travel Guides</a>
                                
                            </div>
                        </div>
                        <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ url('booking') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>
       
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Services</h1>
                 
            </div>
        </div>
      
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Searvices</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Wanderlust Wings</h5>
                                        <p class="mb-0">Your ticket to seamless travel experiences, offering booking services for trains,buses,Private cars, hotels, and more.</p>
                                    </div>
                                    <div class="service-icons p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">ExploreEase</h5>
                                        <p class="mb-0">Unlock the world with our curated tour packages tailored to different interests and budgets, ensuring hassle-free adventures.</p>
                                    </div>
                                    <div class="service-icons p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">JourneyGenius</h5>
                                        <p class="mb-0">Let our travel experts plan your dream trip from start to finish, providing personalized itineraries and insider tips.</p>
                                    </div>
                                    <div class="service-icons p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">SafeTravels Shield</h5>
                                        <p class="mb-0">Stay protected on your travels with our comprehensive travel insurance options, ensuring peace of mind wherever you go.</p>
                                    </div>
                                    <div class="service-icons p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icons p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Globetrotter Guides</h5>
                                        <p class="mb-0">Your ultimate resource for destination guides, travel tips, and insider advice to help you plan your next adventure.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icons p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">LanguageLink</h5>
                                        <p class="mb-0">Break down language barriers with our translation services and language assistance, ensuring smooth communication on your travels.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icons p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Snapshots Sights</h5>
                                        <p class="mb-0">Capture your travel memories in stunning photographs with our professional travel photography services, preserving moments to last a lifetime</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icons p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">VoyageVault</h5>
                                        <p class="mb-0">Find all your travel essentials in one place, from gear and accessories to must-have gadgets for the modern traveler.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
       

        

        

        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> Berhampore, Murshidabad,WB-India</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> Mr. Tanmay Das</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +91 8348146101</a>
                            
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Bengal Odyssey</h4>
                            <a href="{{url('about')}}"><i class="fas fa-angle-right me-2"></i> About</a>
                            
                            <a href="{{url('blog')}}"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            
                            
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    
        
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="http://127.0.0.1:8000/home">Bengal Odyssey</a>, All right reserved.
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
      
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
       
    </body>

</html>