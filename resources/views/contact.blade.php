<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>contact page</title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
    #map {
            height: 600px; 
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
      
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Contact Us</h1>
                
            </div>
        </div>
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Contact Us</h5>
                    <h1 class="mb-0">Contact For Any Query</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address></Address></h4>
                                <p class="mb-0">West Bengal,India</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Mobile</h4>
                                <p class="mb-0">8348146101</p>
                                <p class="mb-0">#</p>
                            </div>
                           
                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <p class="mb-0">dastanmay30@gmail.com</p>
                                <p class="mb-0">dastanmay30@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Send us a message</h3>
                        <p class="mb-4">Feel free to send us anything you want to know or if you have any queries. Our services are available 24/7, so don't hesitate to ask us anything.</p>
                        
                        @if(session()->has('message'))
                        <div class="alert {{ session('type', 'alert-success') }} alert-dismissible fade show custom-alert" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

                        <div class="query-container">
    <form method="post" action="/qsubmit">
        @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="name" placeholder="Your Name" name="name" @if(isset($client)) value="{{$client->name}}" readonly @endif>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control border-0" id="email" placeholder="Your Email" name="email" @if(isset($client)) value="{{$client->email}}" readonly @endif>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control border-0" id="subject" placeholder="Subject" name="subject">
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px" name="message"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
            </div>
            
        </div>
    </form>
</div></div>


                    <div class="col-12">
                        <div class="rounded" id="map">
                            <iframe class="rounded w-100" 
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

        <script>
    var map = L.map('map').setView([22.9786, 87.7478], 8); 

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    
    var locations = [
        { name: "Hazarduari", location: [24.1719, 88.2752] },
        { name: "Kolkata", location: [22.5726, 88.3639] },
        { name: "Kalimpong", location: [27.0717, 88.4729] },
        { name: "Sundarban", location: [21.9497, 88.9308] },
        { name: "Digha", location: [21.6264, 87.5079] },
        { name: "Darjeeling", location: [27.0344, 88.5176] },
        { name: "Dooars", location: [26.7153, 89.1226] },
        { name: "Shantiniketan", location: [23.6822, 87.6856] },
        { name: "Purulia", location: [23.3300, 86.3630] },
        { name: "Bishnupur", location: [23.0798, 87.3217] },
        { name: "Siliguri", location: [26.7341, 88.4120] },
        { name: "Lataguri", location: [26.6398, 88.1588] },
        { name: "Lava", location: [27.0314, 88.6223] },
        { name: "Loegaon", location: [27.0639, 88.6581] },
        { name: "Bankura", location: [23.2325, 87.8619] },
        { name: "Shankarpur", location: [21.5977, 87.3318] },
        { name: "Malda", location: [25.0158, 88.1454] }
    ];
    for (var i = 0; i < locations.length; i++) {
        var marker = L.marker(locations[i].location).addTo(map);
        marker.bindPopup(locations[i].name);
    }
</script>

        
        
    </body>

</html>