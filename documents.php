<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Documents</title>

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

            .file_manager .file a:hover .hover,
            .file_manager .file .file-name small{
                display: block
            }
            .file_manager .file {
                padding: 0 !important
            }

            .file_manager .file .icon{
                text-align: center
            }


            .file_manager .file {
                position: relative;
                border-radius: .55rem;
                overflow: hidden
            }

            .file_manager .file .image,
            .file_manager .file .icon {
                max-height: 180px;
                overflow: hidden;
                background-size: cover;
                background-position: top
            }

            .file_manager .file .hover {
                position: absolute;
                right: 10px;
                top: 10px;
                display: none;
                transition: all 0.2s ease-in-out
            }

            .file_manager .file a:hover .hover {
                transition: all 0.2s ease-in-out
            }

            .file_manager .file .icon {
                padding: 15px 10px;
                display: table;
                width: 100%
            }

            .file_manager .file .icon i {
                display: table-cell;
                font-size: 30px;
                vertical-align: middle;
                color: #777;
                line-height: 100px
            }

            .file_manager .file .file-name {
                padding: 10px;
                border-top: 1px solid #f7f7f7
            }

            .file_manager .file .file-name small .date {
                float: right
            }

            .folder {
                padding: 20px;
                display: block;
                color: #777
            }

            .card {
                background: #fff;
                transition: .5s;
                border: 0;
                margin-bottom: 30px;
                border-radius: .55rem;
                position: relative;
                width: 100%;
                box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
            }

            a:hover {
                text-decoration:none;
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
            $(document).ready(function () {
                $("#inSectionSearch").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#filter_section *").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
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
                            <h4 class="h4">Documents</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> / <a><b>Documents</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body card-document">
                        <div id="main-content" class="file_manager">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <button type="button" class="btn btn-outline-secondary">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Recycle Bin
                                        </button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12 ms-sm-auto">
                                        <input class="form-control" id="inSectionSearch" type="text" placeholder="Search..">
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix" id="filter_section">
                                    <h5>My Document(s)</h5>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix" id="filter_section">
                                    <h5>Document(s) Uploaded to System</h5>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2016.xls</p>
                                                        <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2016.xls</p>
                                                        <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-success"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                                        <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-success"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                                        <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-success"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                                        <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-success"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                                        <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2016.xls</p>
                                                        <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2017.xls</p>
                                                        <small>Size: 103KB <span class="date text-muted">Jan 24, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2016.xls</p>
                                                        <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-bar-chart text-warning"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Report2017.xls</p>
                                                        <small>Size: 103KB <span class="date text-muted">Jan 24, 2016</span></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                    <div class="hover">
                                                        <button type="button" class="btn btn-icon btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="fa fa-file text-info"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <p class="m-b-5 text-muted">Document_2017.doc</p>
                                                        <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                                    </div>
                                                </a>
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
