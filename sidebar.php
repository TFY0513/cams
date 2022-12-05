<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

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

            .bg-wrap {
                width: 100%;
                position: relative;
                z-index: 0;
            }
            .bg-wrap:after {
                z-index: -1;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                background: #000;
                opacity: 0.3;
            }
            .bg-wrap .user-logo .img {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin: 0 auto;
                margin-bottom: 10px;
            }
            .bg-wrap .user-logo h3 {
                color: #fff;
                font-size: 18px;
            }
            .img {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .nav-sub-functional .nav-link:hover{
                color:#fd7e14 !important;
            }

            .nav-sub-functional .nav-link{
                color:gray !important;
            }

            .nav-item-active{
                color:#fd7e14 !important;
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="bootstrap/template/template.css" rel="stylesheet">
    </head>
    <body>


        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                        <div class="user-logo">
                            <div class="img" style="background-image: url(images/logo.jpg);"></div>
                            <h3>Catriona Henderson</h3>
                        </div>
                    </div>
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <!--                            <li style="margin-left:10px;"   class="nav-item">
                                                            <a class="nav-link active   " aria-current="page" href="index.php">
                                                                <span data-feather="home"></span>
                                                                Dashboard
                                                            </a>
                                                        </li>
                                                        <hr>-->
                            <h6 class="nav-link"><b>Project Management</b></h6>
                            <div class="nav-sub-functional">
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="project.php" style="color:gray;">
                                        <span data-feather="file"></span>
                                        Project
                                    </a>
                                </li>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="projectTask.php">
                                        <span data-feather="file"></span>
                                        Project Task
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
                            <h6 class="nav-link"><b>Document Approval</b></h6>
                            <div class="nav-sub-functional">
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="documentDashboard.php">
                                        <span data-feather="file"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li style="margin-left:10px;" class="nav-item">
                                    <!--                                    <a class="nav-link" href="documents.php">
                                                                            <span data-feather="file"></span>
                                                                            Documents
                                                                        </a>
                                                                    </li>
                                                                    <li style="margin-left:10px;" class="nav-item">
                                                                        <a class="nav-link" href="documentReviewMain.php">
                                                                            <span data-feather="file"></span>
                                                                            Review and Approval
                                                                        </a>
                                                                    </li>-->

                                <!-- Admin navigation -->
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="notificationTemplate.php">
                                        <span data-feather="file"></span>
                                        Notification Template Settings
                                    </a>
                                </li>
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="documentTemplate.php">
                                        <span data-feather="file"></span>
                                        Document Template
                                    </a>
                                </li>
                                 <!-- Admin navigation _ EXC -->
                                <li style="margin-left:10px;" class="nav-item">
                                    <a class="nav-link" href="documentApprovalReports.php">
                                        <span data-feather="file"></span>
                                        Reports
                                    </a>
                                </li>
                                <!--                                <li style="margin-left:10px;" class="nav-item">
                                                                    <a class="nav-link" href="#">
                                                                        <span data-feather="file"></span>
                                                                        Manage approval groups
                                                                    </a>
                                                                </li>-->
                            </div>
                            <hr>
                            <h6 class="nav-link"><b>Settings</b></h6>
                            <div class="nav-sub-functional">
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

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    </body>
</html>
