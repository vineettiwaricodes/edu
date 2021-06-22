<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRM</title>
    <!-- headlink -->
    <?php include './include/head-link.php'; ?>

</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php include './include/header.php'; ?>

        <!-- sidebar -->

        <?php include './include/sidebar.php'; ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Last Updated On: </h4>
                                <span id="txt"></span>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Total Counsellor</h4>
                                <h3>40</h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-info" style="width: 40%"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Total Leads</h4>
                                <h3>65</h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-primary" style="width: 65%"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Total Emails Sent</h4>
                                <h3>80</h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Total SMS Sent</h4>
                                <h3>120</h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-red" style="width: 120%"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <h4 class="card-title">Total Follow-ups</h4>
                                <h3>90</h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-success" style="width: 90%"></div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="pie_chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal bar chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Income/Expense Report</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="areaChart_1"></canvas>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Assign Task</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task</th>
                                                <th scope="col">Assigned Professors</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Working Design report</td>
                                                <td>Herman Beck</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Fees Collection report</td>
                                                <td>Emma Watson</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Management report</td>
                                                <td>Mary Adams</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Library book status</td>
                                                <td>Caleb Richards</td>
                                                <td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Placement status</td>
                                                <td>June Lane</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td>Working Design report</td>
                                                <td>Herman Beck</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%;"
                                                            role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-todo dz-scroll" style="height:370px;" id="DZ_W_Notifications">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic1.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic2.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic3.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge success"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic4.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic5.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic6.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic7.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic8.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic9.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic10.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
					</div> -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New leads List </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th class="px-5 py-3">Name</th>
                                                <th class="py-3">Assigned Professor</th>
                                                <th class="py-3">Branch</th>
                                                <th class="py-3">Status</th>
                                                <th class="py-3">Date Of Admit</th>
                                                <th class="py-3">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/5.png" width="30" alt="" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td class="py-2">30/03/2018</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="" width="30" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Emma Watson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Emma Watson</td>
                                                <td class="py-2">Computer</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">11/07/2017</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/5.png" width="30" alt="" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Rowen Atkinson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Mary Adams</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td class="py-2">05/04/2016</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="" width="30" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Antony Hopkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Caleb Richards </td>
                                                <td class="py-2">Computer </td>
                                                <td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td class="py-2">05/04/2018</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="" width="30" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Jennifer Schramm</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">June Lane</td>
                                                <td class="py-2">Fees Collection</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">17/03/2016</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/5.png" width="30" alt="" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Raymond Mims</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Computer</td>
                                                <td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td class="py-2">12/07/2014</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="" width="30" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Michael Jenkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Jennifer Schramm</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">15/06/2014</td>
                                                <td>
                                                    <a href="edit-student.php" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <?php include './include/footer.php'; ?>

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <?php include './include/foot-link.php'; ?>
    <script>
    // var today = new Date();
    // document.getElementById('txt').innerHTML = today;
    var date = new Date();
    document.getElementById("txt").innerHTML = date.toLocaleString();
    </script>
</body>


</php>