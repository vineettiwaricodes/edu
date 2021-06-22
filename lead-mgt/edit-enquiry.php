<!DOCTYPE html>
<html lang="en">

<head>	
<title>Edit Enquiry </title>
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
                            <h4>Edit Enquiry</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="enquiry.php">Enquiry</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Enquiry</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Enquiry Details</h4>
							</div>
							<div class="card-body">
								<form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Name</label>
												<input type="text" class="form-control" value="Shubham">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control" value="info@example.com">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Enquiry Details</label>
												<textarea class="form-control" rows="5">Loremm</textarea>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Enquiry Date</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker" value="7 August, 2020">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile</label>
												<input type="text" class="form-control" value="	987 654 321">
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