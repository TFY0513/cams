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

            .square {
                height: 90px;
                width: 90px;
                line-height: 90px;
                font-size: 32px;
                border: #000 solid 1px;
            }

            #printOnly {
                display : none;
            }

            @media print {
                #printOnly {
                    display : block;
                }
            }
        </style>


        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function () {
                $(".sortable").sortable();
                $(".sortable").disableSelection();

                generateDomStatusChart('Document Approval Status', 1, 1, 1);
                drawProgressChart('chartProgressTotalPending', 'Total Pending', 'Total Pending', (1 / 3 * 100));
                drawProgressChart('chartProgressTotalApproval', 'Total Approved', 'Total Approved', (1 / 3 * 100));

//                generateBarChart('Weekly Approval Status', [], [], 'chartWeeklySummary');
                generateBarChart('Monthly Approval Status', "Numbers of Approval per Month", ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                        , [100, 230, 122, 233, 120, 320, 10, 230, 122, 233, 0, 0], 'chartMonthlySummary');
                        
                generateLineChart("linechartQuater", 'Quarterly Performance Analysis', ['2022 Q1', '2022 Q2', '2022 Q3', '2022 Q4']
                        , "Request Review per Quarter", [500, 700, 400, 300], "Approved per Quarter", [452, 673, 362, 233]);
            });

            function drawProgressChart(chart = "", title = "", label = ""
                    , percent = 0, fillColor = "#9b9b9b", backgroundColor = "#5283ff") {
                new Chart(chart, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                                label: label,
                                percent: Math.round((percent + Number.EPSILON) * 100) / 100,
                                backgroundColor: [backgroundColor]
                            }]
                    },
                    plugins: [{
                            beforeInit: (chart) => {
                                const dataset = chart.data.datasets[0];
                                chart.data.labels = [dataset.label];
                                dataset.data = [dataset.percent, 100 - dataset.percent];
                            }
                        },
                        {
                            beforeDraw: (chart) => {
                                var width = chart.chart.width,
                                        height = chart.chart.height,
                                        ctx = chart.chart.ctx;
                                ctx.restore();
                                var fontSize = (height / 150).toFixed(2);
                                ctx.font = fontSize + "em sans-serif";
                                ctx.fillStyle = fillColor;
                                ctx.textBaseline = "middle";
                                var text = chart.data.datasets[0].percent + "%",
                                        textX = Math.round((width - ctx.measureText(text).width) / 2),
                                        textY = height / 2;
                                ctx.fillText(text, textX, textY);
                                ctx.save();
                            }
                        }
                    ],
                    options: {
//                        maintainAspectRatio: false,
                        cutoutPercentage: 85,
                        rotation: Math.PI / 2,
                        legend: {
                            display: false
                        },
                        tooltips: {
                            filter: tooltipItem => tooltipItem.index === 0
                        },
                        title: {
                            display: true,
                            text: title
                        }
                    }
                });
            }

            function generateDomStatusChart(title = "", pending = 0, inReview = 0, approved = 0) {
                var xValues = ["Pending", "In Process", "Approved"];
                var yValues = [pending, inReview, approved];
                var barColors = [
                    "#6c757d",
                    "#ffc107",
                    "#198754"
                ];

                new Chart("domStatus", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: title
                        }
                    }
                });
            }

            function generateBarChart(title = "", legend = "", key = [], value = [], chart = "") {
                var xValues = key;
                var yValues = value;
                var barColors = Array(key.length).fill("#fd7e14");

                new Chart(chart, {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                                label: legend,
                                backgroundColor: barColors,
                                data: yValues
                            }]
                    },
                    options: {
                        legend: {
                            display: true
                        },
                        title: {
                            display: true,
                            text: title
                        }
                    }
                });
            }

            function generateLineChart(chart = "", title="", labels = []
                        , label1 = "", data1 = [], label2 = "", data2 = []) {
                var ctxL = document.getElementById(chart).getContext('2d');
                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                                label: label1,
                                data: data1,
                                backgroundColor: [
                                    'rgba(105, 0, 132, .2)'
                                ],
                                borderColor: [
                                    'rgba(200, 99, 132, .7)'
                                ],
                                borderWidth: 2
                            },
                            {
                                label: label2,
                                data: data2,
                                backgroundColor: [
                                    'rgba(0, 137, 132, .2)'
                                ],
                                borderColor: [
                                    'rgba(0, 10, 130, .7)'
                                ],
                                borderWidth: 2
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: title
                        }
                    }
                });
            }

//            $("#reportDownload").on('click', () => {
//                html2pdf().from($("#report")).save();
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
                            <h4 class="h4">Reports</h4>
                            <div class="ms-auto">
                                <a>Document Approval</a> 
                                / <b><a>Reports</a></b>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card mb-3" id="report"> 
                    <div class="card-body">
                        <!--                        <div class="row p-3 h2 d-print-block">
                                                    <div class="col">
                                                        <span class=" text-center text-muted text-uppercase" id="printOnly">
                                                            Reports
                                                        </span>
                                                    </div>
                                                </div>-->
                        <div class="row">
                            <div class="col">
                                <div class="row p-3 h3">
                                    <span class=" text-muted text-uppercase">
                                        October's Summary
                                    </span>
                                </div>
                                <div class="row sortable">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="text-muted float-end"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                                <!--<span>Total Pending</span>-->
                                                <canvas id="chartProgressTotalPending" style="width:100%;max-width:200px;max-height:200px;" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="text-muted float-end"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                                <!--<span>Total Approval</span>-->
                                                <canvas id="chartProgressTotalApproval" style="width:100%;max-width:200px;max-height:200px" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row sortable pt-3">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="text-muted float-end"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                                <!--<span>Document Approval Status</span>-->
                                                <canvas id="domStatus" style="width:100%;max-width:600px" height="400"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!--                                <button type="button" class="btn btn-outline-secondary float-end d-print-none" id="reportDownload">
                                                                    <i class="fa fa-download" aria-hidden="true"></i> Download Report
                                                                </button>-->
                                <div class="col sortable">
                                    <div class="row p-3 h3">
                                        <span class=" text-muted text-uppercase">
                                            Summary
                                        </span>
                                    </div>
                                    <div class="card p-3">
                                        <!--<canvas id="chartWeeklySummary" style="width:100%;max-width:600px"></canvas>-->
                                        <canvas id="chartMonthlySummary" style="width:100%;max-width:600px"></canvas>
                                    </div>
                                    <div class="card p-3 mt-3">
                                        <canvas id="linechartQuater" style="width:100%;max-width:600px"></canvas>
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
