<!DOCTYPE html>
<html lang="en">



<head>
	<title>Edit Students</title>
	   <!-- headlink -->
       <?php include './include/head-link.php'; ?>
</head>

<body>

   
  
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
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control" value="Deangelo">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" value="Sena">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control" value="info@example.com">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Registration Date</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker" value="07 August, 2020">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roll No.</label>
												<input type="text" class="form-control" value="52">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Class</label>
												<select class="form-control">
													<option value="Class">Class</option>
													<option value="html">HTML</option>
													<option value="css">CSS</option>
													<option value="javascript" selected>JavaScript</option>
													<option value="angular">Angular</option>
													<option value="angular">React</option>
													<option value="vuejs">Vue.js</option>
													<option value="ruby">Ruby</option>
													<option value="php">PHP</option>
													<option value="asp">ASP.NET</option>
													<option value="python">Python</option>
													<option value="mysql">MySQL</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control">
													<option value="Gender">Gender</option>
													<option value="Male" selected>Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" class="form-control" value="+01 123 456 7890">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Name</label>
												<input type="text" class="form-control" value="James Jones">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Mobile Number</label>
												<input type="text" class="form-control" value="+01 987 654 3210">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker1" value="31 July 1998">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Blood Group</label>
												<input type="text" class="form-control"  value="+AB">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" rows="5">Demo Address #8901 Marmora Road Chi Minh City, Vietnam</textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<input type="file" class="dropify" data-default-file="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">cancel</button>
										</div>
									</div>
								</form>
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
    <?php include './include/foot-link.php'; ?>
	
</body>


</html>