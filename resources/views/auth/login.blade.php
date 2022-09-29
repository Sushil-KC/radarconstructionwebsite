<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - School Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {

            background: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }
        .card{
             color: #0000FF;
            border-radius: 10px;

        }
    </style>
</head>


<body>
    <div class="container position-relative  d-flex p-0">
        <!-- Sign In Start -->
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-md-6 shadow">
                    <div class=" rounded p-4 p-sm-5 my-4 mx-3">
                        <img class="img-fluid" style="width: 150px; text-align:center;   display: block;
  margin-left: auto;
  margin-right: auto;" src="{{asset('./frontend/assets/img/logo/logo-blue.png')}}" alt="">
                        <div class="card border"> 
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center mb-3">

                                    <h3 class="text-center fw-bolder" style="font-weight:700;">Sign In</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="E-mail" />
                                            @error('email')
                                                <span style="color:white;">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label " for="form2Example2">Password</label>
                                        <!-- Simple link -->
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Password" />
                                            @error('password')
                                                <span style="color:white;">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4">
                                        <div class="col d-flex">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="form2Example31" required />
                                                <label class="form-check-label" for="form2Example31"> Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="col-md-12">
                                        <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>