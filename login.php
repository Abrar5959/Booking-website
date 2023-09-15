<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/head.inc.php'); ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php include('includes/topbar.inc.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include('includes/navbar.inc.php'); ?>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <!-- <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Any Questions?</h5> -->
                <h1 class="display-4">Login here</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0 mt-0">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="password" class="form-control bg-light border-0" placeholder="Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                                </div>
                                <a href="#">Forgot Password ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php include('includes/footer.inc.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php include('includes/foot.inc.php'); ?>

</body>

</html>