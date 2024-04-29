<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Custom CSS -->
    <style>
                #bg-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
        }
                .navbar {
            background-color: transparent !important;
        }
        .navbar.navbar-light .navbar-nav .nav-link {
            color: #fff;
        }
                .login-form {
            margin-top: 300px;         }
        .light 
        {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
                        
            background: radial-gradient(circle at var(--x) var(--y),transparent 10%,rgba(0,0,0,0.95) 20%);
        }

                .form-control {
            color: #000;             
            background-color: rgba(255, 255, 255, 0.8);             
            border: 1px solid #ccc;         }
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);             
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }
        .form-group {
            margin-bottom: 20px;         }
        .button-container {
            text-align: center;
        }

        .modal-header {
  background-color: #007bff;   
  color: #fff;   padding: 20px;   
  text-align: center;   border-radius: 5px;   
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }

.modal-header h1 {
  margin: 0;   font-size: 24px; }

  .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert.success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

        

    </style>
</head>
<body>
   
    <video autoplay muted loop id="bg-video">
        <source src="img/relog.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
   
    <div class="light">
   
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 px-lg-5 py-3 py-lg-0">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icons"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0">
                    <li class="nav-item">
                        <a href="{{ url('home') }}" class="nav-link active">Home</a>
                    </li>
                    
                   
                </ul>
                <a href="{{ url('register') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Register</a>
            </div>
        </div>
    </nav>
    
   
    <div class="login-container">
        <form method="post" action="{{url('/save')}}" enctype="multipart/form-data">
            @csrf
            @if(session()->has('message'))
    <div class="alert {{ session('message-class') }}">
        {{ session('message') }}
    </div>
@endif

            <header class="modal-header alert alert-primary"><h1>Login</h1></header>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="button-container">
            <input type="submit" name="submit" class="btn btn-success" value="Submit">
            <input type="reset" name="reset" class="btn btn-danger" value="Reset">
    </div>
        </form>
    </div>
    
    <script type="text/javascript">
        var pos = document.documentElement;
        pos.addEventListener('mousemove', e => {
            pos.style.setProperty('--x', e.clientX + 'px');
            pos.style.setProperty('--y', e.clientY + 'px');
        });
    </script>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </div>
</body>
</html>
