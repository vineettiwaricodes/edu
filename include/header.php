<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-4	">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link hvr-underline-reveal">Home</a>
                </li>

                <li class="nav-item "><a href="about.php" class="nav-link hvr-underline-reveal">About</a></li>
                <li class="nav-item dropdown">
                    <a href="colleges.php" class="nav-link hvr-underline-reveal">Colleges</a>
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> -->
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-underline-reveal">Courses</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ug-courses.php">UG Course</a></li>
                        <li><a class="dropdown-item" href="pg-courses.php">PG Course</a></li>
                        <li><a class="dropdown-item" href="diploma.php">Diploma Course</a></li>
                    </ul>
                </li>
                   <li class="nav-item dropdown">
                    <a href="#" class="nav-link hvr-underline-reveal">International</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a  class="dropdown-item" href="permit.php">Work Permit</a></li>
                        <li><a href="https://www.alphaoverseasconsultancy.com/" class="dropdown-item" href="pg-courses.php">Student Visa</a></li>
                        <li><a href="https://www.y-axis.com/" class="dropdown-item" href="pg-courses.php">Permanent
                        Residence</a></li>
                      
                    </ul>
                </li>
                <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
                <li class="nav-item "><a href="contact.php" class="nav-link hvr-underline-reveal">Contact</a></li>
               
                <li class="nav-item  cta mr-md-1"><a class="nav-link " data-toggle="modal" data-target="#forlogin">Log
                        In</a></li>
                <li class="nav-item  cta mr-md-1"><a class="nav-link " data-toggle="modal" data-target="#forsignup">Sign
                        Up</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- Modal for signup -->
<div class="modal fade" id="forsignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row p-4 signup-modal-row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-12">
                        <h3 class="mb-2 text-center" data-aos="fade-up" data-aos-delay="200">Please share your details</h3>
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer01">First name</label>
                                    <input type="text" class="form-control" id="validationServer01"
                                        placeholder="First name" required>
                                    <div class="invalid-feedback">
                                        Please enter your first name
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationServer02">Last name</label>
                                    <input type="text" class="form-control" id="validationServer04"
                                        placeholder="Last name" required>
                                    <div class="invalid-feedback">
                                        Please enter your last name
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServerUsername">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        </div>
                                        <input type="email" class="form-control" id="validationServerUsername"
                                            placeholder="Email" aria-describedby="inputGroupPrepend3" required>
                                        <div class="invalid-feedback">
                                            Please enter your email
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Password</label>
                                    <input type="text" class="form-control" id="validationServer05"
                                        placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please enter password
                                    </div>
                                </div>


                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3"
                                        required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-100">
                                <button class=" mt-4 btn btn-primary" type="submit">Sign Up</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal for login -->
<div class="modal fade" id="forlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Log In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row p-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-12">
                        <h2 class="mb-3 text-center" data-aos="fade-up" data-aos-delay="200">Please Log In</h2>
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <!-- <label for="validationServerUsername">Email</label> -->
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <a href="#">Forget Password ?</a>

                                </div>

                            </div>

                            <div class="text-center w-100">
                                <button class=" mt-4 btn btn-primary" type="submit">Log In</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>