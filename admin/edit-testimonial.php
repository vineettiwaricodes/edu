<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit testimonials</title>
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
                            <h4>Edit Testimonial</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="all-testimonial.php">Testimonial</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Testimonial</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Testimonial Details</h4>
							</div>
							<div class="card-body">
								<form action="#" method="post">
									<div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<label class="form-label d-block">Testimonial Photo</label>
												<input type="file" class="dropify" data-default-file="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="form-group">
												<label class="form-label">Testimonial Name</label>
												<input type="text" class="form-control" value="Jeorge">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
											<div class="form-group">
												<label class="form-label">Testimonial Position</label>
												<input type="text" class="form-control" value="Head">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Testimonial Details</label>
												<textarea class="form-control" rows="5" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellendus ducimus. Praesentium dolore quam modi dolor illo quae, expedita atque."></textarea>
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