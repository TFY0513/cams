<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Notification Template</title>

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

            .datatable-document { 
                overflow-x: auto;
                white-space: nowrap;
            }
        </style>

        <script>
            $(document).ready(function () {
                $('#table_document').DataTable();
                $(".clickable-row").click(function () {
                    window.location = $(this).data("href");
                });
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
                            <h4 class="h4">Notification Template</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> 
                                / <b><a>Notification Template</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body">
                        <a href="createNotificationTemplate.php">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="fa fa-plus" aria-hidden="true"></i> Create new Notification Template
                            </button>
                        </a>
                        <hr>
                        <div class="datatable-document">
                            <table id="table_document" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Notification Template</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='clickable-row' data-href='createNotificationTemplate.php'>
                                        <th scope="row">1</th>
                                        <td>This is a sample notification template A</td>
                                        <td>Description of notification template A</td>
                                        <td class="text-center">Announcement</td>
                                        <td class="text-center"><button type="button" class="btn btn-secondary">Inactive</button></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-info">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class='clickable-row' data-href='createNotificationTemplate.php'>
                                        <th scope="row">2</th>
                                        <td>This is a sample notification template B</td>
                                        <td>Description of notification template B</td>
                                        <td class="text-center">Announcement</td>
                                        <td class="text-center"><button type="button" class="btn btn-success">Active</button></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-info">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class='clickable-row' data-href='createNotificationTemplate.php'>
                                        <th scope="row">3</th>
                                        <td>This is a sample notification template C</td>
                                        <td>Description of notification template C</td>
                                        <td class="text-center">Announcement</td>
                                        <td class="text-center"><button type="button" class="btn btn-success">Active</button></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-info">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Notification Template</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
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
