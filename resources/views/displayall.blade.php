<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display All</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
                .table-container {
            position: relative;             background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-height: 70%;
            overflow-y: auto;
            z-index: 1;
            margin-top: 20px;         }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
        }

        .table-container th,
        .table-container td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .table-container th {
            background-color: #f8f9fa;
        }

        .table-container tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-container img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: auto;
        }

        .table-container a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }

        .table-container a:hover {
            text-decoration: underline;
        }

                body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100vh;
            background-image: url('https://source.unsplash.com/1920x1080/?nature,abstract');
            background-size: cover;
            background-position: center;
            animation: animateBackground 3s infinite linear;
        }

        .custom-heading {
            font-family: Papyrus;
            font-size: 20px;
            font-style: normal;
            color: black;
            text-shadow: 4px 4px 8px rgba(0,0,0,0.5);
            letter-spacing: 2px;
        }

        .custom-heading {
            font-size: 2rem;
            font-weight: bold;
        }

        .bg-gradient-primary {
            background: linear-gradient(to right, #007bff, #6c757d);
        }

        .custom-heading {
            font-size: 2.5rem;
        }

        .query-btn, .booking-btn {
            border: 2px solid #fff;
        }

        .query-btn:hover, .booking-btn:hover {
            background-color: #fff;
            color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>

<div class="container-fluid bg-gradient-primary px-5 py-3 rounded">
    <div class="row align-items-center">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <h1 class="custom-heading text-white">ALL Registration Data : ADMIN Panel View</h1>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center">
                <a href="{{url('qdisplay')}}" class="text-decoration-none">
                    <button class="btn query-btn btn-outline-light mx-2">
                        <i class="fa fa-user me-1"></i>Query Data
                    </button>
                </a>
                <a href="{{url('bdisplay')}}" class="text-decoration-none">
                    <button class="btn booking-btn btn-outline-light mx-2">
                        <i class="fa fa-sign-in-alt me-1"></i>Booking Details Data
                    </button>
                </a>

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-danger mx-2" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-container">
                @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
                @endif
                @if(isset($allinfo))
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>SL.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Language</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($allinfo->all() as $all)
                        <tr>
                            <td>@php echo $i;$i++; @endphp</td>
                            <td>{{$all->name}}</td>
                            <td>{{$all->email}}</td>
                            <td>{{$all->password}}</td>
                            <td>{{$all->phone}}</td>
                            <td>{{$all->gender}}</td>
                            <td>{{$all->language}}</td>
                            <td><img src="{{$all->image}}" alt="Profile Picture"></td>
                            <td>
                                <a href="{{url('/block')}}{{$all->user_id}}">Block</a> || 
                                <a href="{{url('/unblock')}}{{$all->user_id}}">Unblock</a> || 
                                <a href="{{url('/delete')}}{{$all->user_id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
