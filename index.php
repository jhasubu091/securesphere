<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="User/Utility/style.css">
</head>

<body>
    <!--------------------------main container------------------------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">

        <!-------------------------login container-------------------------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">



            <!-------------------------left box--------------------------------------------------->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box" style=" background: #eff9da; ">
                <div class="featured-image mb-3">
                    <img src="User/Utility/logo/infinite.png" alt="image" class="img-fluid" style="width: 100px; height: 100px;">
                </div>
                <p class="text-black fs-4" style="font-family:poppins;">Security Information Portal</p>


            </div>

            <!-------------------------right box-------------------------------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-item-center">
                    <div class="header-text mb-4">
                        <h2>Welcome, Back!</h2>
                        <p>Login to your account</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg gb-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg gb-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label"><small> Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn brn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>