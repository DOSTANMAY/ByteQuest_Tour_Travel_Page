<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+5KVc1KtSZI1bYhXk1rY2&CBpD0ep/J8r" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('/img/user2.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        
        .navbar-text strong {
        color: #007bff;     }
    
    .dropdown-menu {
        border: none;         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);         background-color: #f8f9fa;     }
    
    .dropdown-item {
        color: #343a40;     }
    
    .dropdown-item:hover,
    .dropdown-item:focus {
        background-color: green;         color: black;     }



    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-text mr-3">
                        <strong>Hello, {{$registration_data->name}} Welcome to our platform.</strong>
                    </span>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-warning mr-2 text-dark" href="{{url('/home')}}">Home Page</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle btn btn-primary" type="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </button>
                    <div class="container">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn btn-info" href="{{url('/edit')}}{{$registration_data->user_id}}">Edit Information</a>
                            <a class="dropdown-item btn btn-warning" href="{{url('/changepassword')}}{{$registration_data->user_id}}">Change Password</a>
                            <form method="post" action="{{ url('/logout') }}">
                                @csrf
                                <button class="dropdown-item btn btn-danger" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>





    <div class="container mt-5">
      
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-danger">{{session('message')}}</div>
                @endif
                <h4 class="card-title">Personal Data</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                               
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Language</th>
                                <th>Profile Picture</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{$registration_data->name}}</td>
                                <td>{{$registration_data->email}}</td>
                                
                                <td>{{$registration_data->phone}}</td>
                                <td>{{$registration_data->gender}}</td>
                                <td>{{$registration_data->language}}</td>
                                <td><img src="{{ asset($registration_data->image) }}" height="100"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Booking Data</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Booking Date</th>
                                <th>Destination</th> 
                                <th>Booking Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($booking_data as $booking)
                            <tr>
                                <td>{{$booking->user_id}}</td>
                                <td>{{$booking->date}}</td>
                                <td>{{$booking->destination}}</td> 
                                <td>
                                    @if($booking->bauth == 0)
                                    <span style="color: red;">Pending</span>
                                    @elseif($booking->bauth == 1)
                                    <span style="color: green;">Approved</span>
                                    @else
                                    <span style="color: red;">Denied</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Asked Questions</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Query ID</th>
                                <th>Asked On</th>
                                <th>Asked At </th> 
                                <th>Asked Question</th>
                                <th>Admin's Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query_data as $query)
                            <tr>
                                <td>{{$query->user_id}}</td>
                                <td>{{$query->subject}}</td>
                                <td>{{$query->date}}</td> 
                                <td>{{$query->message}} </td> 
                                <td>
                                    @if($query->qauth == 0)
                                    <span style="color: red;">Admin did not reply yet</span>
                                    @elseif($query->qauth == 1)
                                        @if(isset($adminreply_data[$query->user_id]) && !$adminreply_data[$query->user_id]->isEmpty())
                                            @foreach($adminreply_data[$query->user_id] as $admin_reply)
                                                {{$admin_reply->message}}<br>
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
     

</body>
</html>
