<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Packages</title>
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
                        <a href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('destination') }}" class="dropdown-item">Destination</a>
                                <a href="{{ url('tour') }}" class="dropdown-item">Explore Tour</a>
                                <a href="{{ url('sbooking') }}" class="dropdown-item">Travel Booking</a>
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
                <h3 class="text-white display-3 mb-4">Travel Packages</h1>
                 
            </div>
        </div>
      
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Packages</h5>
                    <h1 class="mb-0">Awesome Packages</h1>
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
                               
                                <div class="col-6 text-end px-0">
                                    <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
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
                                
                                <div class="col-6 text-end px-0">
                                    <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
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
                               
                                <div class="col-6 text-end px-0">
                                    <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
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
                               
                                <div class="col-6 text-end px-0">
                                    <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
          
       

      
        <div class="packages-item">
    <div class="packages-img">
        <img src="img/bishnupur.webp" class="img-fluid w-100 rounded-top" alt="Bishnupur Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Bishnupur Heritage Tour</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>4 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Group</small>
        </div>
        <div class="packages-price py-2 px-4">9500 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Bishnupur Heritage Tour</h5>
            <small class="text-uppercase">Historical Excursion</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Explore the exquisite terracotta temples and rich heritage of Bishnupur. This package offers a comprehensive tour of 
                the historical landmarks and cultural treasures of this charming town.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Kalimpong -->
<div class="packages-item">
    <div class="packages-img">
        <img src="img/kalimpong.jpg" class="img-fluid w-100 rounded-top" alt="Kalimpong Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Kalimpong Adventure Package</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>5 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
        </div>
        <div class="packages-price py-2 px-4">12000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Kalimpong Adventure Package</h5>
            <small class="text-uppercase">Outdoor Excursions</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Embark on a thrilling adventure in the picturesque landscapes of Kalimpong. This package includes trekking, 
                river rafting, and other exciting outdoor activities amidst the serene beauty of the Himalayas.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Digha -->
<div class="packages-item">
    <div class="packages-img">
        <img src="img/Digha.jpg" class="img-fluid w-100 rounded-top" alt="Digha Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Digha Beach Retreat</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>2 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Couple</small>
        </div>
        <div class="packages-price py-2 px-4">6000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Digha Beach Retreat</h5>
            <small class="text-uppercase">Seaside Getaway</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Relax and unwind on the sandy shores of Digha. This package offers a tranquil beach retreat, 
                perfect for couples or solo travelers looking to escape the hustle and bustle of city life.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Santiniketan Cultural Retreat -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/Santiniketan.jpg" class="img-fluid w-100 rounded-top" alt="Santiniketan Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Santiniketan Cultural Retreat</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
        </div>
        <div class="packages-price py-2 px-4">8500 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Santiniketan Cultural Retreat</h5>
            <small class="text-uppercase">Art and Literature Tour</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Immerse yourself in the artistic and intellectual heritage of Santiniketan, the abode of Rabindranath Tagore. 
                This package offers a unique cultural experience amidst the serene surroundings of Visva-Bharati University.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Purulia Tribal Exploration -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/Purulia.jpg" class="img-fluid w-100 rounded-top" alt="Purulia Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Purulia Tribal Exploration</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>4 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Group</small>
        </div>
        <div class="packages-price py-2 px-4">9000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Purulia Tribal Exploration</h5>
            <small class="text-uppercase">Cultural Immersion</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Discover the vibrant culture and traditions of the tribal communities in Purulia. This package offers 
                an authentic experience with tribal dances, folk music, and local cuisine amidst the picturesque landscape.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>


<!-- Dooars Wildlife Safari -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/dooars.jpg" class="img-fluid w-100 rounded-top" alt="Dooars Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Dooars Wildlife Safari</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>5 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Group</small>
        </div>
        <div class="packages-price py-2 px-4">11000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Dooars Wildlife Safari</h5>
            <small class="text-uppercase">Nature Exploration</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Embark on an unforgettable wildlife adventure in the dense forests of Dooars. This package includes 
                jungle safaris, bird watching, and exploration of the diverse flora and fauna in the region.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Siliguri Gateway Tour -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/siliguri.jpg" class="img-fluid w-100 rounded-top" alt="Siliguri Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Siliguri Gateway Tour</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>2 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
        </div>
        <div class="packages-price py-2 px-4">5000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Siliguri Gateway Tour</h5>
            <small class="text-uppercase">City Escape</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Experience the bustling town of Siliguri, the gateway to the North-East. This package offers 
                a short yet enriching tour of the city's markets, monasteries, and scenic viewpoints.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>


<!-- Lataguri Wildlife Getaway -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/lataguri.webp" class="img-fluid w-100 rounded-top" alt="Lataguri Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Lataguri Wildlife Getaway</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
        </div>
        <div class="packages-price py-2 px-4">7500 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Lataguri Wildlife Getaway</h5>
            <small class="text-uppercase">Nature Retreat</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Escape into the wilderness of Lataguri and immerse yourself in the beauty of its wildlife sanctuaries. 
                This package includes jungle safaris, nature walks, and accommodation amidst the tranquil forests.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Lava and Lolagaon Hill Escapade -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/lava_lolagaon.jpg" class="img-fluid w-100 rounded-top" alt="Lava and Lolagaon Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Lava and Lolagaon Hill Escapade</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>4 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Group</small>
        </div>
        <div class="packages-price py-2 px-4">9800 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Lava and Lolagaon Hill Escapade</h5>
            <small class="text-uppercase">Mountain Adventure</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Explore the pristine beauty of Lava and Lolagaon, nestled in the Eastern Himalayas. This package offers 
                trekking trails, bird watching, and breathtaking views of the snow-capped peaks.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Bankura Terracotta Trail -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/bankura.jpg" class="img-fluid w-100 rounded-top" alt="Bankura Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Bankura Terracotta Trail</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Group</small>
        </div>
        <div class="packages-price py-2 px-4">8000 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Bankura Terracotta Trail</h5>
            <small class="text-uppercase">Cultural Heritage</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Discover the exquisite terracotta temples and ancient heritage of Bankura. This package offers 
                a fascinating journey through the historical landmarks and artistic treasures of the region.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Shankarpur Coastal Retreat -->
<div class="packages-item">
    <div class="packages-img">
        <img src="img/shankarpur.webp" class="img-fluid w-100 rounded-top" alt="Shankarpur Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Shankarpur Coastal Retreat</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>2 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Solo/Couple</small>
        </div>
        <div class="packages-price py-2 px-4">5500 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Shankarpur Coastal Retreat</h5>
            <small class="text-uppercase">Beach Getaway</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Relax on the tranquil beaches of Shankarpur and soak in the serene ambiance of the Bay of Bengal. 
                This package offers a peaceful coastal retreat with pristine shores and fresh seafood delicacies.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Malda Historical Expedition -->

<div class="packages-item">
    <div class="packages-img">
        <img src="img/malda.jpg" class="img-fluid w-100 rounded-top" alt="Malda Image">
        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Malda Historical Expedition</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Group</small>
        </div>
        <div class="packages-price py-2 px-4">7500 &#8377</div>
    </div>
    <div class="packages-content bg-light">
        <div class="p-4 pb-0">
            <h5 class="mb-0">Malda Historical Expedition</h5>
            <small class="text-uppercase">Archaeological Tour</small>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p class="mb-4">Journey through the rich history of Malda and explore its ancient ruins and archaeological sites. 
                This package offers a fascinating expedition into the bygone era of Bengal's dynasties and empires.</p>
        </div>
        <div class="row bg-primary rounded-bottom mx-0">
            <div class="col-6 text-end px-0">
                <a href="{{url('/booking')}}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>

        <!-- Packages End -->

     
        
       

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

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <script src="js/main.js"></script>
    </body>

</html>