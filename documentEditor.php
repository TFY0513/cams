<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Document Editor</title>

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

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.min.js"></script>
        <script>
            //$('#my-summernote').summernote({});
            $(document).ready(function () {
                $('#my-summernote').summernote({
                    minHeight: window.innerWidth,
                    placeholder: 'Write here ...',
                    focus: false,
                    airMode: false,
                    fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
                    fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
                    dialogsInBody: true,
                    dialogsFade: true,
                    disableDragAndDrop: false,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['para', ['style', 'ul', 'ol', 'paragraph']],
                        ['fontsize', ['fontsize']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['height', ['height']],
                        ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']]
                    ],
                    popover: {
                        air: [
                            ['color', ['color']],
                            ['font', ['bold', 'underline', 'clear']]
                        ]
                    },
                    print: {
                        //'stylesheetUrl': 'url_of_stylesheet_for_printing'
                    }
                });
            });
        </script>

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
                            <h4 class="h4">Document Editor</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> 
                                / <b><a>Document Editor</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="align-items-end">
                            <a href="documentEditor.php?template-id=">
                                <button type="button" class="btn btn-outline-secondary btn-sm" title="Save to My Document">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Save to My Document
                                </button>
                            </a>
                            <a href="createNewApprovalRequest.php">
                                <button type="button" class="btn btn-outline-secondary btn-sm" title="Proceed to Create Approval Request">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Proceed to Create Approval Request
                                </button>
                            </a>
                        </div>
                    </div>
                    <div>
                        <form method="post" class="summernote">
                            <textarea id="my-summernote" name="editordata"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </main> 

        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    </body>
</html>
