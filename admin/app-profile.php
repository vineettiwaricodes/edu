<!DOCTYPE html>
<html lang="en">



<head>

    <title>Profile</title>
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
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>

                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>

                                </div>
                                <div class="profile-info">

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="profile-photo">
                                                <img src="images/profile/profile.png" class="img-fluid rounded-circle"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-12">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary mb-0">Person Name</h4>
                                                        <p>Manager</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted mb-0">hello@email.com</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="m-b-0 mb-5">Contact Information</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="m-b-0 text-left">Email - <span>hello@email.com</span> </h4>
                                                <h4 class="m-b-0 text-left" >Phone - <span>9998117311
                                                    </span> </h4>
                                            </div>

                                        </div>
                                        <div class="mt-4">
                                            <a href="javascript:void()" class="btn btn-primary px-5 mr-3 mb-4">Reset
                                                Password</a>

                                        </div>
                                    </div>
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

    <?php include './include/foot-link.php'; ?>
</body>

</html>