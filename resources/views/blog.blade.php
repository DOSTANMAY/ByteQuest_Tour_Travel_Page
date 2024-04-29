<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Blog</title>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                <h3 class="text-white display-3 mb-4">Our Blog</h1>
                
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
            
           
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/baiDAiizzlM?si=TgXkgVeWF3qqXkNy" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Hills</a>
                        <p class="my-3">A surprise around every bend. Pathways and panoramas amid a profusion of peaks to leave you asking for more.</p>
                    </div>
                </div>
            </div>
            
           
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/2kJQhs2SWdI?si=NqzMB78DEYI8uGWf" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Gorumara National Park</a>
                        <p class="my-3">Gorumara National Park is not just about Indian one-horned rhinos, it is a home to some of the richest flora and fauna in the country. </p>
                    </div>
                </div>
            </div>
            
             
             <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/mq7IlQMObhY?si=uUW_GEacwUZo7viW" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Beautiful Bengal!</a>
                        <p class="my-3">Panoramic views and profusion of mountain peaks, Bengal will leave you asking for more! Explore the breathtaking view of Bengal.</p>
                    </div>
                </div>
            </div>
            
           
             <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/K2H2VjMMnR0?si=MzOoEqVv8rTS1Rhu" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Murti</a>
                        <p class="my-3">Nestled in the lap of the river with the same name, Murti is a scenic place situated in the Dooars region of West Bengal. Surrounded on both 
                            sides by the dense forests of Gorumara National Park, Murti is an ideal destination in North Bengal.</p>
                    </div>
                </div>
            </div>
            
        
             <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/avnYSHKb6W4?si=ngy6NdOIv14ewltP" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Sandakphu</a>
                        <p class="my-3">Visit Sandakphu and experience the breathtaking beauty of nature.
                        The stunning panorama of the four of world's five highest mountains, is sure to to mesmerise you. While Everest, 
                    Makalu and Lhotse can be seen on the far left from Sandakphu, the Kanchenjunga range (Sleeping Buddha) lies right in front of your eyes throughout the trail. </p>
                    </div>
                </div>
            </div>
            
           
             <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/4VDfWn_kqgk?si=F39KeP07WbHlQ6Aw" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4">Kalimpong</a>
                        <p class="my-3">Kalimpong, the Land of Orchids is an ancient trade gateway between India and Tibet. Travel through thick pine forests, blooming orchids and lush rolling valleys or meet young monks groomed in monasteries. 
                            This summer be at Kalimpong and stay at luxurious State Tourism properties and get pampered by their friendly services. Enjoy the video,a visual treat on Kalimpong!</p>
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