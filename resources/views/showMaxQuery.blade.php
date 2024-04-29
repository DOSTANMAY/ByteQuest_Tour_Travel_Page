<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
    background-image: url('/img/maxbooking.jpg');
    background-size: cover; 
    background-repeat: no-repeat;
    background-position: center;
    color: black; }

.container {
    background-color: white;
    padding: 60px;
    border-radius: 10px;
    margin-top: 50px;
}

.profile-img {
    max-width: 100px;
    height: auto;
    border-radius: 50%;
}
.btn-custom {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">User that did Maximum Query- Details</h1>
        <div class="button-container" style="margin-top: 20px; margin-bottom: 20px;">
   <a href="{{ url('/qdisplay') }}" class="btn btn-custom">Go Back</a> 
</div>
        <table class="table table-bordered mt-4">
            <thead class="thead-light">
                <tr>
                    <th>Registration ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $userData->user_id }}</td>
                    <td>{{ $userData->name }}</td>
                    <td>{{ $userData->email }}</td>
                    <td>{{ $userData->gender }}</td>
                    <td><img src="{{ $userData->image }}" alt="Profile Picture" class="profile-img"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
