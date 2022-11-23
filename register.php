<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Checkout example · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



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
        <link href="bootstrap/register/form-validation.css" rel="stylesheet">
    </head>
    <body style="background-color:powderblue;">

        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img class="mb-4" src="component/logo/logo-transparent.png" alt="" width="300">
                    <h2>Registration    </h2>
                </div>

                <div class="row g-5">

                    <div class="">
                        <!--                        <h4 class="mb-3">Username</h4>-->
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">


                                <div class="col-12">
                                    <h4 class="mb-3">Username</h4>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" id="username" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="mb-3">Firstname</h4>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <h4 class="mb-3">Lastname</h4>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <h4 class="mb-3">Age</h4>
                                    <input type="text" class="form-control" id="" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid age is required.
                                    </div>
                                </div>

                                <div class="col-sm-10">
                                    <h4 class="mb-3">Position</h4>
                                    <select class="form-select"  required>
                                        <option value="volvo">Project Member    </option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Valid position is required.
                                    </div>
                                </div>




                                <div class="col-12">
                                    <h4 class="mb-3">Contact Number</h4>
                                    <input type="text" class="form-control" id="address" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter your contact number
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h4 class="mb-3">Email</h4>
                                    <input type="email" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h4 class="mb-3">Profile Image</h4>
                                    <input type="file" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please upload a profile image
                                    </div>
                                </div>

                            </div><br/>  
                            <a href="">Login</a>  
                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </main>

            <footer class="my-4 text-muted text-center text-small">
                <p class="mb-1">&copy; 2022 CAMS</p>

            </footer>
        </div>


        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="bootstrap/register/form-validation.js"></script>
    </body>
</html>
