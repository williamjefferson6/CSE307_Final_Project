<?php
    include 'connection.php';

    
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accountType = $_POST["accountType"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $vlisc = $_POST["vlisc"];
    $vreg = $_POST["vreg"];
    $vtype = $_POST["vtype"];
    $vmodel = $_POST["vmodel"];
    $garadr = $_POST["garadr"];
    $garsize = $_POST["garsize"];
    $garcap = $_POST["garcap"];
    $supnid = $_POST["supnid"];
    $seid=1;
    $status=0;
    $currentDate = date("d-m-Y");
   
    

    $sql = "INSERT INTO `registration`(
         `status`, `regdate`, `name`, `email`, `pass`, `nid`, `phone`, `vtype`, `vmodel`, `vreg`, `vlisc`, `garsize`, `garcap`, `garadr`, `supnid`, `type`, `seid`) VALUES ('$status','$currentDate','$name','$email','$pass','$nid','$phone','$vtype','$vmodel','$vreg','$vlisc','$garsize','$garcap','$garadr','$supnid','$accountType','$seid')";

    $conn->query($sql);
}

$conn->close();
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="signup.css" />
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Register Your Account</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="home.html" class="navbar-brand"><img class="imglogo" src="images/logo.png" alt="" width="60"
                        class="d-inline-block align-text-top" />
                    PARKsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbtn navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="login.html"><button class="btn2">Login</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="choice">
            <h1>Select Account Type <?php echo $name;?></h1>
            <br><br><br>
            <div class="typebtn">
                <button onclick="showVehicle()" class="type">I'm a Vehicle Owner</button>
                <button onclick="showGarage()" class="type">I'm a Garage Owner</button>
                <button onclick="showSuper()" class="type">I'm a Supervisor</button>
            </div>
        </div>
        <div id="form">

        </div>
        <br><br><br>
    </main>
    <footer class="text-center text-lg-start text-white bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img class="imglogo" src="images/logo.png" alt="logo" width="100" style="margin-left: 13px" />
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PARKsite</h6>
                        <p>
                            Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in
                            a hassle-free journey!
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a class="links" href="contact.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        </a>
                        <a class="links" href="faqmain.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">FAQ</h6>
                        </a>
                        <a class="links" href="termsAndCondition.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Terms & Conditions</h6>
                        </a>
                        <p><i class="fas fa-envelope mr-3"></i> parksite@gmail.com</p>
                    </div>
                </div>
                <!--Grid row-->
            </section>
        </div>
        <!-- Grid container -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright: <a class="text-white" href="index.html">www.parksite.com.bd</a>
        </div>
    </footer>
    <script src="signup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>