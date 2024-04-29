<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travel & Tourism Website </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link href="https://fonts.cdnfonts.com/css/ballet" rel="stylesheet">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
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

       
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
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
                    <button class="btn btn-danger" type="submit">
                    <i class="fas fa-power-off me-2"></i>Logout
                    </button>
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
                        <a href="{{ url('contact') }}" class="nav-item nav-link">Questions? Just ask!</a>
                    </div>
                    <a href="{{ url('booking') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>
           
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore West Bengal</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Discover West Bengal's essence with us!  </h1>
                                    <p class="mb-5 fs-5"> From the lush tea gardens of Darjeeling to the historic marvels of Kolkata, 
                                        our travel guide promises to unveil the rich tapestry of culture, cuisine, and natural beauty that awaits.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpeg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Unveil the kaleidoscope of West Bengal's landscapes! </h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Explore the varied terrain of Bengal! </h1>
                                    <p class="mb-5 fs-5">Traverse the tea-scented hills of Mirik, wander the historic streets of Murshidabad, and meander through the verdant 
                                        countryside of Bankura, where each vista offers a new perspective on this land of contrasts.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpeg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore Cultural Heritage</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Immerse yourself in West Bengal's cultural tapestry! </h1>
                                    <p class="mb-5 fs-5">Journey through West Bengal's cultural legacy! Explore ancient temples, exquisite handicrafts, 
                                        and colorful festivals that reflect the region's rich and diverse heritage.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icons btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icons btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
           
        </div>
        
      
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="img/about-img.jpeg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/logo1.png);">
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">Bengal Odyssey</span></h1>
                        <p class="mb-4">At Bengal Odyssey, we believe that every journey is an opportunity for discovery, every destination a story waiting to be told.
                             As avid travelers ourselves, we understand the thrill of exploration and the joy of immersing oneself in diverse cultures, landscapes, and experiences. 
                            With a passion for adventure and a commitment to excellence, we strive to curate unforgettable travel experiences that leave a lasting impression on our guests.</p>
                        <p class="mb-4">From the misty hills of Darjeeling to the vibrant streets of Kolkata, from the pristine wilderness of the Sundarbans to the majestic 
                            peaks of the Himalayas, Bengal Odyssey offers a diverse range of travel experiences that showcase the rich cultural heritage, natural beauty, and hidden gems of West Bengal and beyond. Whether you're seeking adventure, relaxation, 
                            cultural immersion, or a combination of all three, we have the perfect itinerary waiting for you.</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Trains</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                            </div>
                           
                            
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{url('/about')}}">Read More</a>
                    </div>
                </div>
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
                    <div class="col-12">
                        <div class="text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{url('/service')}}">Service More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid destination py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Popular Destination</h1>
                </div>
                <div class="tab-class text-center">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-1.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                        
                                                    <h4 class="text-white mb-2 mt-3">HazarDuari Palace </h4>
                                                    <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icons">
                                                    <a href="img/destination-1.jpg" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-2.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                        
                                                    <h4 class="text-white mb-2 mt-3">Darjeeling</h4>
                                                    <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icons">
                                                    <a href="img/destination-2.jpg" data-lightbox="destination-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-7.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                        
                                                    <h4 class="text-white mb-2 mt-3">Sundarbans</h4>
                                                    <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icons">
                                                    <a href="img/destination-7.jpg" data-lightbox="destination-7"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-8.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    
                                                    <h4 class="text-white mb-2 mt-3">Shantiniketan</h4>
                                                    <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icons">
                                                    <a href="img/destination-8.jpg" data-lightbox="destination-8"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="destination-img h-100">
                                        <img class="img-fluid rounded w-100 h-100" src="img/destination-9.jpg" style="object-fit: cover; min-height: 300px;" alt="">
                                        <div class="destination-overlay p-4">
                                            
                                            <h4 class="text-white mb-2 mt-3">bishnupur</h4>
                                            <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icons">
                                            <a href="img/destination-9.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-4.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                                
                                            <h4 class="text-white mb-2 mt-3">kolkata</h4>
                                            <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icons">
                                            <a href="img/destination-4.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            
                                            <h4 class="text-white mb-2 mt-3">kalimpong</h4>
                                            <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icons">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            
                                            <h4 class="text-white mb-2 mt-3">Digha</h4>
                                            <a href="{{url('/destination')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icons">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Bengal's Festive Fiesta</h5>
                    <h1 class="mb-4">Celebrations And Traditions That Define West Bengal</h1>
                    <p class="mb-0">Delve into West Bengal's vibrant cultural canvas, where each festival resonates with age-old traditions, rituals, and a sense of community spirit.
                    </p>
                </div>
                <div class="tab-class text-center">
                    
                    <div class="tab-content">
                        <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-1.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Durga Puja</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Festival Chhau Nach</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Festival Rath Jatra</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Festival Christmas</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-5.jpg" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Festival Basanta Utshav</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="img/explore-tour-6.webp" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">Eid al-Adha</h5>
                                                <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Packages</h5>
                    <h1 class="mb-0">Our popular Packages</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="img/packages-4.webp" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Murshidabad Heritage Tour</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
                            </div>
                            <div class="packages-price py-2 px-4">8000 &#8377</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Murshidabad Heritage Tour</h5>
                                <small class="text-uppercase">Tour Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">This package offers a glimpse into the cultural, historical, and architectural heritage of Murshidabad, 
                                    allowing travelers to immerse themselves in the rich tapestry of the region's past. Prices mentioned are approximate 
                                    and may vary based on factors such as accommodation preferences, transportation options, and specific inclusions. 
                                    It's advisable to consult with the tour operator for the most accurate pricing and detailed itinerary.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Darjeeling Delight</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>solo/group</small>
                            </div>
                            <div class="packages-price py-2 px-4">9000 &#8377</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Darjeeling Delight</h5>
                                <small class="text-uppercase">Tour Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Experience the charm of Darjeeling with visits to its iconic tea gardens, witness the mesmerizing sunrise at Tiger Hill, 
                                    explore the scenic Batasia Loop, and enjoy a memorable ride on the historic Darjeeling Himalayan Railway, also known as the "Toy Train."</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="img/packages-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Sundarbans Safari</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>solo/group</small>
                            </div>
                            <div class="packages-price py-2 px-4">6000 &#8377</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Sundarbans Safari</h5>
                                <small class="text-uppercase">Travel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Immerse yourself in the wilderness of the Sundarbans mangrove forest, home to the elusive Royal Bengal tigers, crocodiles, 
                                    and diverse bird species. Embark on thrilling safaris, explore the intricate network of waterways, and indulge in birdwatching amidst 
                                    the tranquil beauty of the Sundarbans.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="img/packages-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Kolkata Heritage Tour</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>solo/group</small>
                            </div>
                            <div class="packages-price py-2 px-4">8000 &#8377</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Kolkata Heritage Tour</h5>
                                <small class="text-uppercase">Tour Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Delve into the vibrant history and culture of Kolkata, the "City of Joy." Explore architectural marvels like 
                                    Victoria Memorial and Howrah Bridge, delve into the treasures of Indian Museum, and seek blessings at the sacred Kalighat Temple. 
                                    Experience the timeless charm of Kolkata's streets, bustling markets, and delectable cuisine.</p>
                            </div>
                            
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mt-4">
    <a href="{{url('/package')}}" class="btn btn-primary rounded-pill py-3 px-5">Explore More Packages</a>
</div>
        
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Gallery</h5>
                <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
                <p class="mb-0">Welcome to the West Bengal Tourism and Traveling Gallery, where the rich tapestry of culture, history, 
                    and natural beauty unfolds before your eyes! Nestled in the eastern part of India, West Bengal is a treasure trove of experiences waiting to be explored.</p>
            </div>
            <div class="tab-class text-center">
               
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-1.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-5.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-6.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-6.jpg" data-lightbox="gallery-6" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-7.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-7.jpg" data-lightbox="gallery-7" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-8.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-8.jpg" data-lightbox="gallery-8" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-9.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-9.jpg" data-lightbox="gallery-9" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-10.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icons">
                                        <a href="img/gallery-10.jpg" data-lightbox="gallery-10" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                       <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">West Bengal Tour</h5>
                                            <a href="{{url('/tour')}}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Booking</h5>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="text-white mb-4">Welcome to the West Bengal Tourism and Traveling Booking Page, your gateway to unforgettable adventures in the heart of Eastern India!
                             Dive into a world of cultural splendor, natural beauty, and historical wonders as you plan your dream getaway to this enchanting region.</p>
                        <p class="text-white mb-4">Whether you're drawn to the bustling streets of Kolkata, the serene tea gardens of Darjeeling, or the wild mangrove forests of 
                            the Sundarbans, our booking page offers a seamless and convenient way to turn your travel dreams into reality.

</p>
                        
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Book A Tour Deals</h1>
                        <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip With ByteQuest. </p>

                        
                        
                        <form method="post" action="/bsubmit2">
                        @csrf
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				</ul>
					@endforeach
			</div>
			@endif
            
            @if(session()->has('message'))
    <div class="alert {{ session('type', 'alert-success') }} alert-dismissible fade show custom-alert" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


                            
                                <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
    <div class="form-floating">
        <input type="date" class="form-control bg-white border-0" id="date" name="date" min="<?php echo date('Y-m-d', strtotime('+20 days')); ?>">
        <label for="date">Date You want to visit</label>
    </div>      
</div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1" name="destination" placeholder='choose destination'>
                                        <option value=""></option>
                                        <option value="" disabled selected>What is your destination ?</option>
                                            <option value="Murshidabad">Murshidabad</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="kalimpong">Kalimpong</option>
                                            <option value="Sundarbans">Sundarbans</option>
                                            <option value="Digha">Digha</option>
                                            <option value="Darjeeling">Darjeeling</option>
                                            <option value="Dooars">Dooars</option>
                                            <option value="Santiniketan">Santiniketan</option>
                                            <option value="Purulia">Purulia</option>
                                            <option value="Bishnupur">Bishnupur</option>
                                            <option value="Siliguri">Siliguri</option>
                                            <option value="Lataguri">Lataguri</option>
                                            <option value="Lava and Lolegaon">Lava and Lolegaon</option>
                                            <option value="Bankura">Bankura</option>
                                            <option value="Shankarpur">Shankarpur</option>
                                            <option value="Malda">Malda</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    
                                        <select class="form-select bg-white border-0" id="SelectPerson" name="person" >
                                        <option value="" disabled selected>Select Number of Persons</option>
                                            <option value="1">Persons 1</option>
                                            <option value="2">Persons 2</option>
                                            <option value="3">Persons 3</option>
                                            <option value="More than 4">More Than 3</option>
                                        </select>
                                        <label for="SelectPerson">Persons</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="CategoriesSelect" name="kid">
                                        <option value="" disabled selected>Select Number of kids</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="More Than 3">More than 3</option>
                                        </select>
                                        <label for="CategoriesSelect">Kids</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px" name="message"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                                   
                                 

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Meet Our Guides</h5>
            <h1 class="mb-0">Explore with Our Experienced Guides</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <img src="img/guide-1.jpeg" class="img-fluid w-100 rounded-top" alt="Guide 1">
                        <div class="guide-icons rounded-pill p-2">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center bg-light rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Tanmay Das</h4>
                            <p class="mb-0">Adventure Specialist</p>
                        </div>
                    </div>
                </div>
            </div>


                    
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Blog</h5>
            <h1 class="mb-4">Popular Travel Videos</h1>
            <p class="mb-0">West Bengal travel videos offer a captivating glimpse into the diverse tapestry of this Indian state. From the bustling streets of Kolkata, 
                with its colonial architecture and vibrant markets, to the serene beauty of the Sundarbans mangrove forests teeming with wildlife, each frame invites viewers on a 
                journey of discovery. </p>
        </div>
        <div class="row g-4 justify-content-center">
           
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                           
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/rwCTpdeuVe8?si=RqZHQK8zDxlJXY8P" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Bengali Heritage</a>
                        <p class="my-3">Bengali heritage is a vibrant tapestry of rich cultural traditions, encompassing literature, music, dance, cuisine, and a long history of resilience and artistic expression.</p>
                    </div>
                </div>
            </div>
          
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                           
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/WyGqxPL2hKw?si=nM0-KWM92A1MyTyh" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Murshidabad</a>
                        <p class="my-3">Murshidabad, a haven for heritage tourism. Explore the beauty of Bengal.Murshidabad, a haven for heritage tourism. Explore the beauty of Bengal.</p>
                    </div>
                </div>
            </div>
           
           
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                           
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/0-ZerRrf0UM?si=HP9PV1ytMleoUyrR" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Bishnupur</a>
                        <p class="my-3">ByteQuest welcomes you to Bishnupur, an ancient kingdom that still offers the best combination of old and new. From magnificent terracotta artefacts to vibrant textiles to delicious cuisine and spectacular landscapes, Bishnupur has something for everyone. </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
            <a href="{{url('/blog')}}" class="btn btn-primary">Click here for more Travel Blog</a>
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

        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        
        <script src="js/main.js"></script>
    </body>

</html>

<script>
  
    const videos = document.querySelectorAll('video');

    
    videos.forEach(video => {
        video.addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    });
</script>