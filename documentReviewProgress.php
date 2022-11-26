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
                            <h1 class="h2">Review and Approval Progress</h1>
                        </div>
                        <div class="row">
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
                                <div class="float-right">
                                    <form method="POST" action="">
                                        <button class="btn btn-primary disabled" type="submit" data-toggle="tooltip" data-placement="bottom" title="Complete and close the review request">
                                            <i class="fa fa-check" aria-hidden="true"></i> Completed
                                        </button>
                                        <button class="btn btn-danger" type="submit" data-toggle="tooltip" data-placement="bottom" title="Close the review case and retreat">
                                            <i class="fa fa-times" aria-hidden="true"></i> Close review
                                        </button>
                                        <button class="btn btn-warning" type="submit" data-toggle="tooltip" 
                                                data-placement="bottom" title="Trigger a notification via registered channel to next intended user">
                                            <i class="fa fa-bell" aria-hidden="true"></i> Notify task
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-body">
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
            </div>
        </main> 

        <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
