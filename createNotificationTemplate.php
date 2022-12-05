<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Create new Notification Template</title>

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
                            <h4 class="h4">Create new Notification Template</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> 
                                / <a href="notificationTemplate.php">Notification Template</a>
                                / <b><a>Create new Notification Template</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <!--                            <div class="form-group mb-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="form_noti_id">Notification ID</label>
                                                                    <input id="form_noti_id" type="text" class="form-control" placeholder="XXXXX" value="00001" readonly>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="form_date">Created Date</label>
                                                                    <input id="form_date" type="date" class="form-control" value="2022-11-11" readonly>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="form_cat">Category</label>
                                        <select id="form_cat" class="form-control form-select">
                                            <option value="1">policies</option>
                                            <option value="2">procedures</option>
                                            <option value="3">permits</option>
                                            <option value="4">licenses</option>
                                            <option value="5">audit forms</option>
                                            <option value="6">violations</option>
                                            <option value="7">test results</option>
                                            <option value="8">tech specs</option>
                                            <option value="9">user manuals</option>
                                            <option value="10">service manuals</option>
                                            <option value="11">invoices</option>
                                            <option value="12">certifications</option>
                                            <option value="13">inspection results</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="form_dept">Status</label>
                                        <select id="form_dept" class="form-control form-select">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="form_remark">Notification Template</label>
                                <textarea class="form-control" id="form_remark" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Create Notification Template</button>
                        </form>
                    </div>
                </div>
            </div>

        </main> 

        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
