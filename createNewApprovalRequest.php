<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Create New Approval Request</title>

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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

        <!--<script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/plugins/mdb-file-upload.min.js"></script>-->
        <script>
            $(document).ready(function () {
                $('.select2-multi').select2();
//                $('.file-upload').file_upload();
            });

            function checkstate() {
                if ($("#check_manual_assign").is(':checked')) {
                    $("#form_approver").attr('disabled', false);
                    $("#form_approval_group").attr('disabled', true);
                } else {
                    $("#form_approver").attr('disabled', true);
                    $("#form_approval_group").attr('disabled', false);
                }
            }

//            var settings = {
//                "url": "https://api.pdf.co/v1/pdf/convert/from/doc",
//                "method": "POST",
//                "timeout": 0,
//                "headers": {
//                    "x-api-key": "",
//                    "Content-Type": "application/json"
//                },
//                "data": JSON.stringify({"url": "https://bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/doc-to-pdf/sample.docx", "pages": "0-", "name": "result.pdf"}),
//            };
//
//            $.ajax(settings).done(function (response) {
//                console.log(response);
//            });
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
                            <h4 class="h4">Create New Approval Request</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> 
                                / <a href="documentReviewMain.php">Review and Approval</a> 
                                / <b><a>Create New Approval Request</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card mb-3">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-4">
                                <div class="p-3" style="background: rgba(255, 165, 0, 0.1); margin-bottom: 15px;">
                                    <h5 class="text-center text-muted">Document creation using Template</h5>
                                </div>
                                <div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="card">
                                                <img class="card-img-top" src="doc/sample preview/page-0.jpg" style="max-height: 150px; object-fit: cover;" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        Business Report Template
                                                        <a href="documentEditor.php?template-id=">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm float-end" title="Create document using this template">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="card">
                                                <img class="card-img-top" src="doc/sample preview/business report template 01-page0001.jpg" style="max-height: 150px; object-fit: cover;" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        Business Report Template
                                                        <a href="documentEditor.php?template-id=">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm float-end" title="Create document using this template">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="card">
                                                <img class="card-img-top" src="doc/sample preview/page-0.jpg" style="max-height: 150px; object-fit: cover;" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        Business Report Template
                                                        <a href="documentEditor.php?template-id=">
                                                            <button type="button" class="btn btn-outline-secondary btn-sm float-end" title="Create document using this template">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <button type="button" class="btn btn-outline-secondary border-0 w-100">Show more template</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-8" style="border-left: 1px solid #ced4da">
                                <div class="p-3" style="background: rgba(255, 99, 71, 0.1); margin-bottom: 15px">
                                    <h5 class="text-center text-muted">Approval Request</h5>
                                </div>
                                <div>
                                    <form>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="form_ctrl_num">Control Number</label>
                                                    <input id="form_ctrl_num" type="text" class="form-control" placeholder="CTRL-XXXXXX-XXXX" value="CTRL-20221001-1001" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="form_date">Created Date</label>
                                                    <input id="form_date" type="date" class="form-control" value="2022-10-01" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="form_title">Title</label>
                                            <input id="form_title" type="text" class="form-control" placeholder="Title" value="Approval - Change to employee travel policy - October 2022">
                                        </div>
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
                                                    <label for="form_dept">Department</label>
                                                    <select id="form_dept" class="form-control form-select">
                                                        <option>Administration/operations</option>
                                                        <option>Research and development</option>
                                                        <option>Marketing and sales</option>
                                                        <option>Human resources</option>
                                                        <option>Customer service</option>
                                                        <option>Accounting and finance</option>
                                                        <option>Information technology</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="form_dept">Deadline</label>
                                                    <div class="input-group">
                                                        <input type='date' class="form-control deadline" value="2022-10-25"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="form_remark">Remarks</label>
                                            <textarea class="form-control" id="form_remark" rows="3"></textarea>
                                        </div>

                                        <br/>
                                        <div class="p-3" style="background: rgba(48, 213, 217, 0.1); margin-bottom: 15px;">
                                            <h5 class="text-center text-muted">Approval Level</h5>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="form_approval_group">Approval Group</label>
                                                    <select id="form_approval_group" class="form-control form-select">
                                                        <optgroup label="Approval Group A">
                                                            <option value="AP01">Approval Group A</option>
                                                        </optgroup>
                                                        <optgroup label="Approval Group B">
                                                            <option value="AP02">Approval Group B</option>
                                                        </optgroup>
                                                        <optgroup label="Approval Group C">
                                                            <option value="AP03">Approval Group C</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="control-label" for="approver">Approver(s)</label>
                                                    <select id="form_approver" class="form-control select2-multi" name="approver" multiple="multiple" disabled>
                                                        <optgroup label="Information Technologies">
                                                            <option value="S003">Maria Smantha</option>
                                                            <option value="S004">John Smith</option>
                                                        </optgroup>
                                                        <optgroup label="Human Resource">
                                                            <option value="S001">Jeanine Melton</option>
                                                            <option value="S002">Van Rosario</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="check_manual_assign" onclick="checkstate()">
                                                <label class="form-check-label" for="check_manual_assign">
                                                    Manually select approver(s) from the list
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
<!--                                            <section class="section-preview">
                                                <div class="file-upload-wrapper">
                                                    <div class="card card-body view file-upload"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight"></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-now" class="file_upload"><button type="button" class="btn btn-sm btn-danger waves-effect waves-light">Remove<i class="far fa-trash-alt ml-1"></i></button><div class="file-upload-preview"><span class="file-upload-render"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner"></span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                </div>
                                            </section>-->
                                        </div>
                                        <br/>
                                        <div class="p-3" style="background: rgba(48, 95, 217, 0.1); margin-bottom: 15px;">
                                            <h5 class="text-center text-muted">Document for Approval</h5>
                                        </div>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Create Request</button>
                                    </form>
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
