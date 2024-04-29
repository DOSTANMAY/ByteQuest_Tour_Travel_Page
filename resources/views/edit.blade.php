<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
    font-family: 'Roboto', sans-serif;
    background-image: url('/img/user.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom, #4e54c8, #8f94fb);
            color: #fff;
            padding: 40px;
        }
        .container header {
            text-align: center;
            margin-bottom: 30px;
        }
        .container header h1 {
            font-size: 32px;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        .container header .btn-home {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #fff;
        }
        .container header .btn-home:hover {
            background-color: #0056b3;
        }
        .form-control {
            border: none;
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 15px;
            margin-bottom: 20px;
        }
        .custom-file-label::after {
            background-color: #6c757d;
            color: #fff;
            border-radius: 20px;
        }
        .custom-file-label::before {
            background-color: #007bff;
            color: #fff;
            border-radius: 20px;
        }
        .btn-success {
            background-color: #5bc0de;
            border: none;
            border-radius: 20px;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-success:hover {
            background-color: #31b0d5;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Ready to update your profile? Here you go...</h1>
        </header>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="{{url('/update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="number" name="uid" value="{{$userinfo->user_id}}" hidden>
                        <input type="text" name="name" class="form-control" value="{{$userinfo->name}}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="{{$userinfo->email}}" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control" value="{{$userinfo->phone}}" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary @if($userinfo->gender=='Male') active @endif">
                                <input type="radio" name="gender" autocomplete="off" value="Male" @if($userinfo->gender=='Male') checked @endif>Male
                            </label>
                            <label class="btn btn-secondary @if($userinfo->gender=='Female') active @endif">
                                <input type="radio" name="gender" autocomplete="off" value="Female" @if($userinfo->gender=='Female') checked @endif>Female
                            </label>
                            <label class="btn btn-secondary @if($userinfo->gender=='Others') active @endif">
                                <input type="radio" name="gender" autocomplete="off" value="Others" @if($userinfo->gender=='Others') checked @endif>Others
                            </label>
                        </div>
                    </div>
                    @php 
                    $language=explode(', ',$userinfo->language);
                    @endphp
                    <div class="form-group">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary @if(in_array('English', $language)) active @endif">
                                <input type="checkbox" name="language[]" autocomplete="off" value="English" @if(in_array('English', $language)) checked @endif>English
                            </label>
                            <label class="btn btn-primary @if(in_array('Hindi', $language)) active @endif">
                                <input type="checkbox" name="language[]" autocomplete="off" value="Hindi" @if(in_array('Hindi', $language)) checked @endif>Hindi
                            </label>
                            <label class="btn btn-primary @if(in_array('Bengali', $language)) active @endif">
                                <input type="checkbox" name="language[]" autocomplete="off" value="Bengali" @if(in_array('Bengali', $language)) checked @endif>Bengali
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <img src="{{$userinfo->image}}" height="100" class="mt-2" id="preview" style="display: block;">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-success" value="Update"> 
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
