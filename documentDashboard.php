<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Dashboard</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- Data table -->
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
        <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css" rel="stylesheet" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


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

            .c-card{
                border-radius: 2px;
                background: #f7f7f9;
            }
        </style>


        <!-- Custom styles for this template -->
        <!--        <link href="bootstrap/dashboard/dashboard.css" rel="stylesheet">-->
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <?php include 'sidebar.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Document Approval</h1>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                            <h4 class="h4">Dashboard</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> / <b><a>Dashboard</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col">
                                <div class="c-card p-2">
                                    <div class="mb-3">
                                        <span class="title text-muted">
                                            <span class="text-bold text-uppercase" style=" font-weight: bold">Due Soon </span>
                                            <span>1</span>
                                        </span>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <span class="title">Approval - Change to employee travel policy - October 2022</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #005fcc; color: white; font-weight: bold; border-radius: 3px; width: fit-content">Policies</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #ff8b3d; color: white; font-weight: bold; border-radius: 3px; width: fit-content;">Human Resources</span>
                                            </div>
                                            <div class="row pt-2">
                                                <span class="text-muted" >
                                                    due at Oct 25, 2022
                                                    <i style="font-weight: bolder; font-size: 1.5em; color: #ffc107" class="fa fa-exclamation-circle float-end" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <div class="row pt-2">
                                                <span class="text-muted">
                                                    CTRL-20220930-1000
                                                    <i style="font-weight: bolder; font-size: 1.5em; color: #ff5747" class="fa fa-angle-double-up float-end" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="c-card p-2">
                                    <div class="mb-3">
                                        <span class="title text-muted">
                                            <span class="text-bold text-uppercase" style=" font-weight: bold">Pending Review </span>
                                            <span>1</span>
                                        </span>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <span class="title">Review - Audit of Finance and Account - September 2022</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #005fcc; color: white; font-weight: bold; border-radius: 3px; width: fit-content">Audit Forms</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #ff8b3d; color: white; font-weight: bold; border-radius: 3px; width: fit-content;">Finance and Accounting</span>
                                            </div>
                                            <div class="row pt-2">
                                                <span class="text-muted">CTRL-20220930-1000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="c-card p-2">
                                    <div class="mb-3">
                                        <span class="title text-muted">
                                            <span class="text-bold text-uppercase" style=" font-weight: bold">In Process </span>
                                            <span>1</span>
                                        </span>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <span class="title">Approval - Change to employee travel policy - October 2022</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #005fcc; color: white; font-weight: bold; border-radius: 3px; width: fit-content">Policies</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #ff8b3d; color: white; font-weight: bold; border-radius: 3px; width: fit-content;">Human Resources</span>
                                            </div>
                                            <div class="row pt-2">
                                                <span class="text-muted">CTRL-20220930-1000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="c-card p-2">
                                    <div class="mb-3">
                                        <span class="title text-muted">
                                            <span class="text-bold text-uppercase" style=" font-weight: bold">Approved </span>
                                            <span>1</span>
                                        </span>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <span class="title">Approval - Request upgrade facilities - October 2022</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #005fcc; color: white; font-weight: bold; border-radius: 3px; width: fit-content">Procedures</span>
                                            </div>
                                            <div class="row p-2">
                                                <span class="text-uppercase" style="font-size: 0.8em; background-color: #ff8b3d; color: white; font-weight: bold; border-radius: 3px; width: fit-content;">Information Technology</span>
                                            </div>
                                            <div class="row pt-2">
                                                <span class="text-muted">CTRL-20220930-1000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main> 

        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
