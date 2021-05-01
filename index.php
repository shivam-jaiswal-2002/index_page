<!DOCTYPE html>
<html lang="en">
shivam
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is description">
    <meta name="keywords" content="html, html learn, web developement">
    <meta name="robots" content="INDEX, FOLLOW">
    <title>Bank Name</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


    <!--Below is the link to the bootstrap css. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Below links to bootstrap MaxCDN taken from W3Schools -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>

<?php

$servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bank_mgmt";

                $conn = mysqli_connect($servername, $username, $password, $database);
?>

    <div class="top-container">
        <h1 class="head-name">Bank Name</h1>
    </div>

    <div class="head">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="content">
        <p>rest of the content goes here</p>
    </div>
    <!-- end of file -->
    <div class="bottom-offers">
        <!-- <div class="alert alert-success" role="alert">
            Congratulations! You have successfully subscribed.
        </div> -->
        <div class="offers">
            <h3>Subscribe to our newsletters to recieve latest updates and discounts/offers.</h3>
            <form action="index.php" method="POST">
                <div class="labels">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="custname">
                    <label for="email" id="label-email-offer">Email ID</label>
                    <input type="email" name="email" id="custemail">
                    <label for="Phone" id="label-phone-offer">Phone No</label>
                    <input type="number" name="phone" id="custphone">
                    <button class="btn btn-outline-success search-btn mt-3 mb-3" type="submit">Submit</button>
                </div>


                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];


                    if (!$conn) {
                        die("Your connection was <strong>unsuccessful</strong>: " . mysqli_connect_error());
                    } else {
                        $sql = "INSERT INTO `offers` (`Name`, `emailID`, `Phone`) VALUES ('$name', '$email', '$phone');";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo '<div class="alert alert-success alert-dismissible show mb-2 mt-2" role="alert">
                        <strong>Congratulations!</strong> Your details have been submitted successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        } else {
                            echo '<div class="alert alert-warning alert-dismissible mb-2 mt-2" role="alert">
                            '.$email.' is already registered with us. Please use another Email address.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                    }
                }

                ?>
            </form>
        </div>
    </div>

    <!-- linking a javascript file -->
    <script type="text/javascript" src="index.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
