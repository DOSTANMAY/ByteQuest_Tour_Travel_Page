<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('/img/user3.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.05);
        }

        .modal-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .form-group label {
            font-weight: bold;
            color: #fff;
        }

        input[type="password"] {
            border-radius: 5px;
            border: 1px solid #007bff;
            background-color: rgba(255, 255, 255, 0.05);
            color: #fff;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        input[type="password"]::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        input[type="password"]:focus {
            border-color: #00ffea;
            box-shadow: 0 0 0 0.2rem rgba(0, 255, 234, 0.5);
        }

        input[type="submit"],
        input[type="reset"] {
            width: 45%;
            margin-top: 20px;
            margin-right: 5px;
        }

        @media (max-width: 576px) {
            input[type="submit"],
            input[type="reset"] {
                width: 100%;
                margin-right: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
    @if(session('message'))
    <div class="alert alert-warning">{{ session('message') }}</div>
@endif
        
        <form method="post" action="{{url('/newpassword')}}">
            @csrf
           
            <header class="modal-header">Change Password</header>
            <input type="number" name="uid" value="{{$passwordinfo->user_id}}" hidden>
            <div class="form-group">
                <label>Old Password</label>
                <input type="password" name="oldp" class="form-control" placeholder="Enter your old password">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="newp" class="form-control" placeholder="Enter your new password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confp" class="form-control" placeholder="Confirm your new password" required>
            </div>
            <div>
                <input type="submit" name="submit" class="btn btn-primary" value="Change Password">
                <input type="reset" name="reset" class="btn btn-secondary" value="Reset">

                
            </div>
        </form>
    </div>
</body>

</html>
