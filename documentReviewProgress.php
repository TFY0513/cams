<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Document Review and Approval Status</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->


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

            /*Added*/
            body {
                margin-top: 20px;
            }
            .timeline_area {
                position: relative;
                z-index: 1;
            }
            .single-timeline-area {
                position: relative;
                z-index: 1;
                padding-left: 180px;
            }
            @media only screen and (max-width: 575px) {
                .single-timeline-area {
                    padding-left: 100px;
                }
            }
            .single-timeline-area .timeline-date {
                position: absolute;
                width: 180px;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 1;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-grid-row-align: center;
                align-items: center;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                padding-right: 60px;
            }
            @media only screen and (max-width: 575px) {
                .single-timeline-area .timeline-date {
                    width: 100px;
                }
            }
            .single-timeline-area .timeline-date::after {
                position: absolute;
                width: 3px;
                height: 100%;
                content: "";
                background-color: #ebebeb;
                top: 0;
                right: 30px;
                z-index: 1;
            }
            .single-timeline-area .timeline-date::before {
                position: absolute;
                width: 11px;
                height: 11px;
                border-radius: 50%;
                background-color: #f1c40f;
                content: "";
                top: 50%;
                right: 26px;
                z-index: 5;
                margin-top: -5.5px;
            }
            .single-timeline-area .timeline-date p {
                margin-bottom: 0;
                color: #020710;
                font-size: 13px;
                text-transform: uppercase;
                font-weight: 500;
            }
            .single-timeline-area .single-timeline-content {
                position: relative;
                z-index: 1;
                padding: 30px 30px 25px;
                border-radius: 6px;
                margin-bottom: 15px;
                margin-top: 15px;
                -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
                box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
                border: 1px solid #ebebeb;
            }
            @media only screen and (max-width: 575px) {
                .single-timeline-area .single-timeline-content {
                    padding: 20px;
                }
            }
            .single-timeline-area .single-timeline-content .timeline-icon {
                -webkit-transition-duration: 500ms;
                transition-duration: 500ms;
                width: 30px;
                height: 30px;
                background-color: #f1c40f;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 30px;
                flex: 0 0 30px;
                text-align: center;
                max-width: 30px;
                border-radius: 50%;
                margin-right: 15px;
            }
            .single-timeline-area .single-timeline-content .timeline-icon i {
                color: #ffffff;
                line-height: 30px;
            }
            .single-timeline-area .single-timeline-content .timeline-text h6 {
                -webkit-transition-duration: 500ms;
                transition-duration: 500ms;
            }
            .single-timeline-area .single-timeline-content .timeline-text p {
                font-size: 13px;
                margin-bottom: 0;
            }
            .single-timeline-area .single-timeline-content:hover .timeline-icon,
            .single-timeline-area .single-timeline-content:focus .timeline-icon {
                background-color: #020710;
            }
            .single-timeline-area .single-timeline-content:hover .timeline-text h6,
            .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
                color: #3f43fd;
            }

            .timeline-pending{
                background: #d6d6d6;

            }

            .icon{
                text-align: center
            }

            .icon {
                max-height: 180px;
                overflow: hidden;
                background-size: cover;
                background-position: top
            }

            .icon {
                padding: 15px 10px;
                display: table;
                width: 100%
            }

            .icon i {
                display: table-cell;
                font-size: 30px;
                vertical-align: middle;
                color: #777;
                line-height: 100px
            }

            .date {
                float: right
            }
        </style>

        <script>
            $(document).ready(function () {
                if ($(".button-group").width() < 300) {
                    $(".button-complete").find('.extended-text').hide();
                    $(".button-close").find('.extended-text').hide();
                    $(".button-notify").find('.extended-text').hide();
                }
            });
            $(window).resize(function () {
                if ($(".button-group").width() < 300) {
                    $(".button-complete").find('.extended-text').hide();
                    $(".button-close").find('.extended-text').hide();
                    $(".button-notify").find('.extended-text').hide();
                } else {
                    $(".button-complete").find('.extended-text').show();
                    $(".button-close").find('.extended-text').show();
                    $(".button-notify").find('.extended-text').show();
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
                            <h4 class="h4">Review and Approval Progress</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> / <a href="documentReviewMain.php">Review and Approval</a> / <b>CTRL-20221001-1001</b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3">
                            <div class="ms-auto"></div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <button class="button-complete btn btn-primary disabled ms-auto" type="submit" data-toggle="tooltip" data-placement="bottom" title="Complete and close the review request">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span class="extended-text"> Completed</span> 
                                    </button>
                                    <button class="button-close btn btn-danger" type="submit" data-toggle="tooltip" data-placement="bottom" title="Close the review case and retreat">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="extended-text"> Close review</span> 
                                    </button>
                                    <button class="button-notify btn btn-warning" type="submit" data-toggle="tooltip" 
                                            data-placement="bottom" title="Trigger a notification via registered channel to next intended user">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span class="extended-text"> Notify task</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Timeline</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Details</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"> 
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="container p-3 m-3">
                                    <section class="timeline_area section_padding_130">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <!-- Section Heading-->
                                                <div class="section_heading text-center">
                                                    <h6>CTRL-20221001-1001</h6>
                                                    <h3>Approval - Change to employee travel policy - October 2022</h3>
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Timeline Area-->
                                                <div class="apland-timeline-area">
                                                    <!-- Single Timeline Content-->
                                                    <div class="single-timeline-area">
                                                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                                            <p>Pending</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4 ">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft timeline-pending" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft; ">
                                                                    <div class="timeline-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Reviewed by Management Representative</h6>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4 ">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft timeline-pending" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft; ">
                                                                    <div class="timeline-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Reviewed by Management Director</h6>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4 ">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft timeline-pending" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Reviewed by General Manager</h6>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4 ">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft timeline-pending" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon" style="background-color: #4fff7e"><i class="fa fa-check" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Completed</h6>
                                                                        <p><a href="">Show more</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Timeline Content-->
                                                    <div class="single-timeline-area">
                                                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                                            <p>Today</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Update content</h6>
                                                                        <p>The content had been updated as per feedback</p>
                                                                        <br/>
                                                                        <p>
                                                                            <span style="color:gray">Millie Cantrell</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Timeline Content-->
                                                    <div class="single-timeline-area">
                                                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                                            <p>October 18, 2022</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Reviewed by Management Representative</h6>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Comment added</h6>
                                                                        <p>Content changed required, requirements attached as per feedback</p>
                                                                        <br/>
                                                                        <p>
                                                                            <span style="color:gray">Jeanine Melton, Human Resource Director</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Timeline Content-->
                                                    <div class="single-timeline-area">
                                                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                                            <p>October 17, 2022</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-tasks" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Initial approval request</h6>
                                                                        <p>Initial submission for first level approval</p>
                                                                        <br/>
                                                                        <p>
                                                                            <span style="color:gray">Millie Cantrell</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4">
                                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                                                    <div class="timeline-icon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                                                                    <div class="timeline-text">
                                                                        <h6>Draft approved</h6>
                                                                        <p>Initial draft approved and signed</p>
                                                                        <br/>
                                                                        <p>
                                                                            <span style="color:gray">Van Rosario, Human Resource Manager</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="container p-3 m-3">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <!-- Section Heading-->
                                            <div class="section_heading text-center">
                                                <h6>CTRL-20221001-1001</h6>
                                                <h3>Approval - Change to employee travel policy - October 2022</h3>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-3">
                                            <button type="button" class="btn btn-outline-secondary float-end">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 p-3">
                                            <form>
                                                <div class="form-group mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="form_ctrl_num">Control Number</label>
                                                            <input id="form_ctrl_num" type="text" class="form-control" placeholder="CTRL-XXXXXX-XXXX" value="CTRL-20221001-1001" readonly>
                                                        </div>
                                                        <div class="col">
                                                            <label for="form_date">Created Date</label>
                                                            <input id="form_date" type="text" class="form-control" value="Oct 1, 2022" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="form_title">Title</label>
                                                    <input id="form_title" type="text" class="form-control" placeholder="Title" value="Approval - Change to employee travel policy - October 2022" readonly>
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
                                                <div class="form-group">
                                                    <label for="form_remark">Remarks</label>
                                                    <textarea class="form-control" id="form_remark" rows="3"></textarea>
                                                </div>
                                            </form>
                                            <div class="pt-3">
                                                <div class="card p-3">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="file">
                                                                <a>
                                                                    <div class="hover">
                                                                        <button type="button" class="btn btn-outline-secondary">
                                                                            <i class="fa fa-file" aria-hidden="true"></i> Preview
                                                                        </button>
                                                                        <button type="button" class="btn btn-outline-secondary">
                                                                            <i class="fa fa-download" aria-hidden="true"></i> Download
                                                                        </button>
                                                                    </div>
                                                                    <div class="icon">
                                                                        <i class="fa fa-file text-info"></i>
                                                                    </div>
                                                                    <div class="file-name">
                                                                        <p class="m-b-5 text-muted">Approval - Change to employee travel policy - October 2022.doc</p>
                                                                        <small>Size: 428KB <span class="date text-muted">Oct 01, 2022</span></small>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-8" style="border-left: 1px solid #ced4da">
                                                            <h5><b>Progress</b></h5>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item list-group-item-action">
                                                                    <p class="m-b-5">
                                                                        Update content<br>
                                                                        <span class="text-muted">The content had been updated as per feedback</span>
                                                                    </p>
                                                                    <small class="text-muted">Millie Cantrell <span class="date text-muted">Today at 09:33 am</span></small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action">
                                                                    <p class="m-b-5">
                                                                        Comment added<br>
                                                                        <span class="text-muted">Content changed required, requirements attached as per feedback</span>
                                                                    </p>
                                                                    <small class="text-muted">Jeanine Melton, Human Resource Director <span class="date text-muted">Oct 18, 2022 at 04:23 pm</span></small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action">
                                                                    <p class="m-b-5">
                                                                        Reviewed by Management Representative<br>
                                                                        <span class="text-muted"></span>
                                                                    </p>
                                                                    <small class="text-muted"><span class="date text-muted">Oct 18, 2022 at 10:30 am</span></small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action">
                                                                    <p class="m-b-5">
                                                                        Draft approved<br>
                                                                        <span class="text-muted">Initial draft approved and signed</span>
                                                                    </p>
                                                                    <small class="text-muted">Van Rosario, Human Resource Manager <span class="date text-muted">Oct 17, 2022 at 11:23 am</span></small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action">
                                                                    <p class="m-b-5">
                                                                        Initial approval request<br>
                                                                        <span class="text-muted">Initial submission for first level approval</span>
                                                                    </p>
                                                                    <small class="text-muted">Millie Cantrell <span class="date text-muted">Oct 17, 2022 at 10:01 am</span></small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card p-3 mt-3">
                                                    <h4 class="card-header mb-4 pb-2" style="background: none">Comment</h4>
                                                    <div class="card-body">

                                                        <div class="row d-flex justify-content-center">
                                                            <div>
                                                                <div class="row pb-3">
                                                                    <form method="post" action="">
                                                                        <div class="input-group mb-3">
                                                                            <input class="form-control" type="text" placeholder="Leave a comment.." aria-label="Comment" aria-describedby="basic-addon2">
                                                                            <div class="input-group-append">
                                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="d-flex flex-start">
                                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                                                 src="images/user/c.jfif" alt="avatar" width="65"
                                                                                 height="65" />
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1">
                                                                                            Maria Smantha <span class="small">- 2 hours ago</span>
                                                                                        </p>
                                                                                        <a href="#!"><i class="fa fa-reply" aria-hidden="true"></i><span class="small"> reply</span></a>
                                                                                    </div>
                                                                                    <p class="small mb-0">
                                                                                        It is a long established fact that a reader will be distracted by
                                                                                        the readable content of a page.
                                                                                    </p>
                                                                                </div>

                                                                                <div class="d-flex flex-start mt-4">
                                                                                    <a class="me-3" href="#">
                                                                                        <img class="rounded-circle shadow-1-strong"
                                                                                             src="images/user/d.jfif" alt="avatar"
                                                                                             width="65" height="65" />
                                                                                    </a>
                                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                                        <div>
                                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                                                <p class="mb-1">
                                                                                                    Simona Disa <span class="small">- 3 hours ago</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <p class="small mb-0">
                                                                                                letters, as opposed to using 'Content here, content here',
                                                                                                making it look like readable English.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="d-flex flex-start mt-4">
                                                                                    <a class="me-3" href="#">
                                                                                        <img class="rounded-circle shadow-1-strong"
                                                                                             src="images/user/a.jfif" alt="avatar"
                                                                                             width="65" height="65" />
                                                                                    </a>
                                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                                        <div>
                                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                                                <p class="mb-1">
                                                                                                    John Smith <span class="small">- 4 hours ago</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <p class="small mb-0">
                                                                                                the majority have suffered alteration in some form, by
                                                                                                injected humour, or randomised words.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="d-flex flex-start mt-4">
                                                                            <img class="rounded-circle shadow-1-strong me-3"
                                                                                 src="images/user/b.jfif" alt="avatar" width="65"
                                                                                 height="65" />
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1">
                                                                                            Natalie Smith <span class="small">- 2 hours ago</span>
                                                                                        </p>
                                                                                        <a href="#!"><i class="fa fa-reply" aria-hidden="true"></i><span class="small"> reply</span></a>
                                                                                    </div>
                                                                                    <p class="small mb-0">
                                                                                        The standard chunk of Lorem Ipsum used since the 1500s is
                                                                                        reproduced below for those interested. Sections 1.10.32 and
                                                                                        1.10.33.
                                                                                    </p>
                                                                                </div>

                                                                                <div class="d-flex flex-start mt-4">
                                                                                    <a class="me-3" href="#">
                                                                                        <img class="rounded-circle shadow-1-strong"
                                                                                             src="images/user/e.jfif" alt="avatar"
                                                                                             width="65" height="65" />
                                                                                    </a>
                                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                                        <div>
                                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                                                <p class="mb-1">
                                                                                                    Lisa Cudrow <span class="small">- 4 hours ago</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <p class="small mb-0">
                                                                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                                                                scelerisque ante sollicitudin commodo. Cras purus odio,
                                                                                                vestibulum in vulputate at, tempus viverra turpis.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="d-flex flex-start mt-4">
                                                                                    <a class="me-3" href="#">
                                                                                        <img class="rounded-circle shadow-1-strong"
                                                                                             src="images/user/f.jfif" alt="avatar"
                                                                                             width="65" height="65" />
                                                                                    </a>
                                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                                        <div>
                                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                                                <p class="mb-1">
                                                                                                    Maggie McLoan <span class="small">- 5 hours ago</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <p class="small mb-0">
                                                                                                a Latin professor at Hampden-Sydney College in Virginia,
                                                                                                looked up one of the more obscure Latin words, consectetur
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="d-flex flex-start mt-4">
                                                                                    <a class="me-3" href="#">
                                                                                        <img class="rounded-circle shadow-1-strong"
                                                                                             src="images/user/a.jfif" alt="avatar"
                                                                                             width="65" height="65" />
                                                                                    </a>
                                                                                    <div class="flex-grow-1 flex-shrink-1">
                                                                                        <div>
                                                                                            <div class="d-flex justify-content-between align-items-center">
                                                                                                <p class="mb-1">
                                                                                                    John Smith <span class="small">- 6 hours ago</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <p class="small mb-0">
                                                                                                Autem, totam debitis suscipit saepe sapiente magnam officiis
                                                                                                quaerat necessitatibus odio assumenda, perferendis quae iusto
                                                                                                labore laboriosam minima numquam impedit quam dolorem!
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
