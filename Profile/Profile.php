<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Dashboard Template · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



        <!-- Bootstrap core CSS -->
        <!--        <link href="bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">-->

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
        <!--        <link href="bootstrap/dashboard/dashboard.css" rel="stylesheet">-->
    </head>
    <body>
        <?php include '../Template/navbar.php'; ?>
        <?php include '../Template/sidebar.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Settings</h1>
            </div>
            <h4 class="h4">Profile </h4>
        </main> 

        <div class="container py-3">

            <div style="margin-left:100px;" class="row align-items-md-stretch">

                <div class="col-md-6">
                    <div class="h-75 p-5 text-white bg-dark rounded-3">
                        <h2 class="text-center">Profile Image</h2>
                        <h2 style="margin-top:100px;" class="text-center">Username</h2>
                        <h5  style="margin-top:30px;" class="text-center">Position</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Firstname Lastname</h2>
                        <hr class="divider">    <br/>

                        <h2>Age</h2>
                        <hr class="divider">   <br/>  
                        <h2>Contact Number</h2>
                        <hr class="divider">   <br/>  
                        <h2>Email</h2>
                        <hr class="divider">  <br/>   
                        <a style="margin-top:100px;" href="Profile_Edit.php" class="btn btn-outline-secondary" >Edit Profile</a>



                    </div>
                </div>
            </div>
        </div>
        <script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
