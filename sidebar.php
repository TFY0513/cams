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
        <link href="bootstrap/template/template.css" rel="stylesheet">
    </head>
    <body>


        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li style="margin-left:10px;"   class="nav-item">
                                <a class="nav-link active   " aria-current="page" href="index.php">
                                    <span data-feather="home"></span>
                                    Dashboard
                                </a>
                            </li>
                            <hr>
                            <h5 class="nav-link">Project Management</h5>
                            <div>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="project.php">
                                        <span data-feather="file"></span>
                                        Project
                                    </a>
                                </li>

                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="workingCalendar.php">
                                        <span data-feather="file"></span>
                                        Working Calendar
                                    </a>
                                </li>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="projectMember.php">
                                        <span data-feather="file"></span>
                                        Project Member
                                    </a>
                                </li>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="projectManager.php">
                                        <span data-feather="file"></span>
                                        Project Manager 
                                    </a>
                                </li>   
                            </div>
                            <hr>
                            <h5 class="nav-link">Document Approval</h5>
                            <div>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="file"></span>
                                        XXXX
                                    </a>
                                </li>
                            </div>
                            <hr>
                            <h5 class="nav-link">Settings</h5>
                            <div>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="profile.php">
                                        <span data-feather="file"></span>
                                        Profile
                                    </a>
                                      <a class="nav-link" href="changePassword.php">
                                        <span data-feather="file"></span>
                                        Change Password
                                    </a>
                                </li>
                                    
                            </div>
                        </ul>

                       
                    </div>
                </nav>
            </div>
        </div>


        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
