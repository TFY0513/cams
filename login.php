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
    <body class="text-center" style="background-color:powderblue;">

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



    </body>
</html>
