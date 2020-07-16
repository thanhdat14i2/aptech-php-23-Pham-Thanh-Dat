<!DOCTYPE html>
<html lang="en" class="mh-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('./favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User CRUD Laravel Demo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="h-100">
    <div class="container-fluid mh-100">
        <div class="row">
            <div class="col-6 bg-left h100">
            </div>
            <div class="col-6 d-flex align-items-center bg-right">
                <div class="row px-0">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="row mb-4">
                            <div class="col-4"></div>
                            <div class="col-4"><img src="colorlib-logo.png" alt="" width="100%" height=""></div>
                            <div class="col-4"></div>
                        </div>
                        <div class="row sub-bg-right p-4">
                            <label for="usernmae" class="">Username or Email address</label>
                            <input type="text" name="" id="usernmae" class="form-control">
                            <label for="password" class="mt-3">password</label>
                            <input type="text" name="" id="password" class="form-control mb-3">
                            <div class="col-6 px-0 d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" id="remember" class="mr-3"><label for="remember" class="mt-1">remember me</label>
                            </div>
                            <div class="col-6 d-flex justify-content-end"><button class="btn btn-primary">Log in</button></div>
                        </div>
                        <div class="row ml-1 mt-2">
                            <a href="#" class="text-dark">let's your password?</a>
                        </div>
                        <div class="row ml-1 mt-2">
                            <a href="#" class="text-dark">&#8592; back to uCookies</a>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>