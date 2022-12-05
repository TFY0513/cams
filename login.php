<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Signin Template · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



        <!-- Bootstrap core CSS -->
        <link href="bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="bootstrap/signin/signin.css" rel="stylesheet">
    </head>
    <!--    <body class="text-center" style="background-color:powderblue;">
    
            <main class="form-signin">
                  
                <form  action="index.php    ">
                  
                    <img class="mb-4" src="component/logo/logo-transparent.png" alt="" width="300">
                    <h1 class="h3 mb-3 fw-normal">Login / Sign Up</h1>
    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Username / Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
    
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                             <a href="recoverPassword.php   " style="margin-left:30px">Forget Password?</a>
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                     <a href="register.php" >Register an Account</a>
                    <p class="mt-5 mb-3 text-muted">&copy; 2022 CAMS</p>
                </form>
            </main>
    
    
    
        </body>-->
    <body >
        <div class="container" >
            <main>  
                <div class="col d-flex justify-content-center">
                    <div class="card" style="background-color:powderblue; width:35%;">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="mb-4" src="component/logo/logo-transparent.png" alt="" width="200">
                                <h3>Login / Sign Up</h3>
                            </div>
                        </div>
                        <div >

                            <div class="">

                                <form  action="index.php">
                                 

                                    <div class="form-floating" style="margin-left:20px; margin-right:20px;  ">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Username / Email address</label>
                                    </div>
                                    <div class="form-floating" style="margin-left:20px; margin-right:20px;  ">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="checkbox mb-3">
                                        <label>
                                            <input type="checkbox" style="margin-left:20px;" value="remember-me"> Remember me
                                            <a href="recoverPassword.php" style="margin-left:163px; ">Forget Password?</a>
                                        </label>
                                    </div>
                                    <center><button class="w-25 btn btn-lg btn-primary"  type="submit">Login</button> </center>
                                     <center><a href="register.php" >Register an Account</a>
                                    <p class="mt-3 mb-3 text-muted">&copy; 2022 CAMS</p> </center>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

                <!--
                -->
            </main>


        </div>


        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="bootstrap/register/form-validation.js"></script>
    </body>
</html>
