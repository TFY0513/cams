<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Review and Approval</title>

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

            .status{
                height: 25px;
                width: 25px;
                background-color: yellow;
                border-radius: 50%;
                display: inline-block;
            }

            .datatable-document { 
                overflow-x: auto;
                white-space: nowrap;
            }
        </style>

        <script>
            $(document).ready(function () {
                $('#table_document').DataTable();
            });
            $(document).bind('DOMSubtreeModified', function () {
                $(".pagination").children('li').addClass("page-item");
                $(".pagination").children('li').children("a").addClass("page-link");
            });
            $(window).resize(function () {
                if ($(".datatable-document").width() > $(".card-document").width()) {
                    $(".datatable-document").css("overflow-x", "scroll");
                    $(".datatable-document").css("width", $(".card-document").width());
                }
            });
        </script>


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
                            <h4 class="h4">Review and Approval</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> / <b><a>Review and Approval</a></b>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-sm">                        
                                <div class="input-group rounded">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>Filter by</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm">
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>-->
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body card-document">
                        <a href="createNewApprovalRequest.php">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="fa fa-plus" aria-hidden="true"></i> Create New Approval Request
                            </button>
                        </a>
                        <hr>
                        <div class="datatable-document">
                            <table id="table_document" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Control Number</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Uploaded by</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Review - Audit of Finance and Account - September 2022</td>
                                        <td class="text-center">Audit Forms</td>
                                        <td class="text-center">FA</td>
                                        <td>CTRL-20221019-1002</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-secondary disabled">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td>Gilberta Bláithín</td>
                                        <td class="text-center"><button type="button" class="btn btn-secondary">Pending</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Approval - Change to employee travel policy - October 2022</td>
                                        <td class="text-center">Policies</td>
                                        <td class="text-center">HR</td>
                                        <td>CTRL-20221001-1001</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-secondary disabled">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td>Anžej Ramesh</td>
                                        <td class="text-center">
                                            <a href="documentReviewProgress.php">
                                                <button type="button" class="btn btn-warning">In process</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Approval - Request upgrade facilities - October 2022</td>
                                        <td class="text-center">Procedures</td>
                                        <td class="text-center">IT</td>
                                        <td>CTRL-20220930-1000</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </button></td>
                                        <td>Antigonus Ariston</td>
                                        <td class="text-center"><button type="button" class="btn btn-success">Completed</button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Control Number</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Uploaded by</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main> 

        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
