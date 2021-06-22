<!DOCTYPE html>
<html lang="en">

<head>	
<title>Edit Courses </title>
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
                            <h4>Edit Course</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Course</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Courses Details</h4>
							</div>
							<div class="card-body">
								<form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Course Name</label>
												<input type="text" class="form-control" value="BBA">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Course Code</label>
												<input type="text" class="form-control" value="Pro#005">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Course Details</label>
												<textarea class="form-control" rows="5">Why is Early Education Essential</textarea>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Start Form</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker" value="7 August, 2020">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Course Duration</label>
												<input type="text" class="form-control" value="3 Year">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Course Price</label>
												<input type="text" class="form-control" value="$1500">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                        <label class="form-label">Course Category</label>
                                            <div class="input-group mb-3">
                                                
                                                <select class="form-select w-100" id="inputGroupSelect01">
                                                    <option selected>Course Category</option>
                                                    <option value="1">Under Graduation</option>
                                                    <option value="2">Post Graduation</option>
                                                    <option value="3">Diploma Course</option>
                                                </select>
                                            </div>
										</div>
										
										
										<!-- <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<label class="form-label d-block">Course Photo</label>
												<input type="file" class="dropify" data-default-file="">
											</div>
										</div> -->
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
     

        <?php include './include/footer.php'; ?>


    </div>
   
    <?php include './include/foot-link.php'; ?>
</body>


</html>