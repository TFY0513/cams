<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Dashboard Template · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



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
        <?php include '../Template/navbar.php'; ?>
        <?php include '../Template/sidebar.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Project Management</h1>
            </div>
             <h4 class="h4">Edit Project</h4>
            <div class="col d-flex justify-content-center">
                
                <div class="card" style="width:100%; height: 700px;">
                    <div class="card-body" >
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">


                                <div style="padding-left:20px; padding-right:20px;" class="col-12">
                                    <h4 class="mb-3">Project Name</h4>
                                    <div class="input-group has-validation">
                                        
                                        <input type="text" class="form-control" id="username" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Project name is required.
                                        </div>
                                    </div>
                                </div>
                                <div  style="padding-left:20px; padding-right:20px;"  class="col-12">
                                    <h4 class="mb-3">Project Category</h4>
                                      <select class="form-select"  required>
                                          <option value="volvo">Upgrading</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>



                                <div  style="padding-left:20px; padding-right:20px;"  class="col-12">
                                    <h4 class="mb-3">Description</h4>
                                    <input type="text" class="form-control" id="" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid age is required.
                                    </div>
                                </div>

                               
                                <div  style="padding-left:20px; padding-right:20px;"  class="col-12">
                                    <h4 class="mb-3">Priority</h4>
                                    <select class="form-select"  required>
                                        <option value="volvo">Low</option>
                                        <option value="saab">Medium</option>
                                        <option value="mercedes">High</option>
                                      
                                    </select>
                                </div>

                                <div  style="padding-left:20px; padding-right:20px;"  class="col-6">
                                    <h4 class="mb-3">Start Date</h4>
                                     <input type="date" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>
  <div  style="padding-left:20px; padding-right:20px;"  class="col-6">
                                    <h4 class="mb-3">End Date</h4>
                                    <input type="Date" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>
                                <div  style="padding-left:20px; padding-right:20px;"  class="col-6">
                                    <h4 class="mb-3">Working Calendar</h4>
                                     <select class="form-select"  required>
                                        <option value="volvo">Calendar 1</option>
                                     
                                      
                                    </select>
                                </div>
                                
                              

                                <div  style="padding-left:20px; padding-right:20px;"  class="col-6">
                                    <h4 class="mb-3">Budget</h4>
                                    <input type="input" class="form-control" id="email" placeholder="" required>
                                     <div class="invalid-feedback">
                                        Valid age is required.
                                    </div>
                                </div>

                            </div><br/>  
                            <center><button  class=" btn btn-primary btn-lg" type="submit">Edit Project</button> </center>
                        </form>
                        
                    </div>
                </div>
            </div>
        </main> 
        <script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>
