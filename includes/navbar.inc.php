<?php 

// $page = end(explode("/",$_SERVER["PHP_SELF"]));
$path_parts = explode('/', $_SERVER['PHP_SELF']);
$page = end($path_parts);

?>

<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Clinic</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?=$page=='index.php'?'active':'';?>">Home</a>
                    <a href="about.php" class="nav-item nav-link  <?=$page=='about.php'?'active':'';?>">About</a>
                    <a href="service.php" class="nav-item nav-link  <?=$page=='service.php'?'active':'';?>">Service</a>
                    <a href="appointment.php" class="nav-item nav-link  <?=$page=='appointment.php'?'active':'';?>">Appointment</a>
                    <!-- <a href="price.php" class="nav-item nav-link">Pricing</a> -->
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="detail.php" class="dropdown-item">Blog Detail</a>
                                <a href="team.php" class="dropdown-item">The Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="appointment.php" class="dropdown-item">Appointment</a>
                                <a href="search.php" class="dropdown-item">Search</a>
                            </div>
                        </div> -->
                    <a href="contact.php" class="nav-item nav-link  <?=$page=='contact.php'?'active':'';?>">Contact</a>
                    <a href="login.php" class="nav-item nav-link  <?=$page=='login.php'?'active':'';?>">Login</a>
                    <a href="register.php" class="nav-item nav-link  <?=$page=='register.php'?'active':'';?>">Register</a>
                </div>
            </div>
        </nav>
    </div>
</div>