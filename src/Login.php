<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" href="images/logo.jpg"
          type="image/x-icon">




    <title>Login</title>

    <!-- Favicons -->
    <!--    <link href="assets/img/favicon.png" rel="icon">-->
    <!--    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="css%20files/index.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="assets/js/main.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>


<!--Creates the popup body-->
        <div class="popup-overlay">
            <!--Creates the popup content-->
            <div class="popup-content">
                <h2>Pop-Up</h2>
                <p> This is an example pop-up that you can make using jQuery.</p>
                <!--popup's close button-->
                <button class="close">Close</button> </div>
        </div>


        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex flex-column justify-content-center">

            <nav id="navbar" class="navbar nav-menu">
                <ul>
                    <li><a href="routes.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                    </li>
                    <li><a href="routes.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Apply now</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </header><!-- End Header -->

            <div class="popup" id="popup">
                <div class="overlay"></div>
                <div class="content">
                    <!--                    <div class="close-btn" onclick="closePopup()">&times;</div>-->
                    <div class="row">

                        <div  class="col-lg-12 col-md-9  col-sm-12">
                            <img width="200" height="200" src="https://cdn.dribbble.com/users/2469324/screenshots/6538803/comp_3.gif">
                            <h2 id="errorHead">fields are required</h2>
                            <p id="errorMessage">
                                All fields are required. fill all fields
                            </p>
                            <button style="background-color: darkgreen; width: 130px; margin-top: 5%;" class="btn btn-success radiusChange backgroundChange" onclick="closePopup()"> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <section id="contact" class="contact">
            <div class="container">



                <div class="row mt-1">

                    <div class="col-lg-4" style="align-items: center;text-align: center;">
                        <div class="section-title">
                            <h2>SIGN IN</h2>
                        </div>
                        <form method="post" role="form" class="php-email-form">
                                <div class="col-md-6 form-group">
                                    <input style="width: 300px;"  type="text" name="loginEmail" class="form-control"  placeholder="email"
                                            >
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input  style="width: 300px;" type="password" class="form-control" name="loginPassword" placeholder="password"
                                           >
                                </div>
                            <div class="text-center">
                                <button name="login" class="btn btn-success" style="background-color: darkgreen;color: white; border-radius: 100px; width: 150px;">Login</button>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" style="border-left:1px solid black;">
                        <div class="section-title">
                            <h2>SIGNUP</h2>
                        </div>

                        <form action="" method="post" role="form" enctype="multipart/form-data" class="php-email-form">

                            <div class="row">
                                <div class="col-md-3 form-group" style="padding-left: 7%;">
                                    <img id="profileImage" style="border-radius: 50%; width: 100px;height: 100px;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMNBhUREBEVDQ8NDxMVDQ0SDw8QEAoQGBIYFhYVGRUaHDQgGBolGxMTITEhJS8rMTIuGCszODMtNzQtLisBCgoKDQ0NDg0NDisdFRkrKysrKysrKysrNysrKysrKzc3KysrKysrKysrKysrKysrKysrNysrKysrKysrKysrN//AABEIAOAA4AMBIgACEQEDEQH/xAAbAAEBAAIDAQAAAAAAAAAAAAAAAQQGAwUHAv/EAD8QAAIBAQQECggEBQUAAAAAAAABAgMEBRExEiFBYQYTMlFScoGRobEiM0Jxc7LB0SMkNZI0YqPh8BQlU2OC/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD3EAAAAAAAAAAACSkoxxbSSzbeCQFB1lpvulDUm6j/AJVq739Drq3CCb5MYwW/GTA2QGqxv2stsX74/ZnDbLylVWtaL2uM6mH7ccANvbwz1Hxx8ceVHHm0kaK+8+QPQAafYL3qUGljxkOg3ktz2G0WK2Qr0dKD60XnB8zQGQAAAAAAAAAAAAAAAAAAAAAAGPbrZGhQ0pf+Y7ZsC2yroUcdKMFtnLF4e5bWapbrRxlXlyqJbZJRXZFZHzbLZKtV0pvqx2QW4xwBAQAAQAQEAHNYrXKhaFOOzNbJrmZwEA3qnbqboxlpxiprFaUkmc1KtGa9GSl7mn5HnxYTcZ4xbi1k02mu0D0MHS8HbzlWjKFR6U4JOMtso5a/dq7zugAAAAAAAAAAAAAAAAI3gsXqSzfMafeVsde1OXsrVBc0f7m2Wl/lpdSXkaQAICAACACAgAgIAICACAgGfctZ07fGaWMYvCo+jCWrF7sWjeDz6yWqVGupx2ZxeU47Yvcb5ZqyqWeM45Timt24DlAAAAAAAAAAAAAAABj3i8LvqfDn8rNKN1vBfkKnwp/KzSQABABAQAQEAEBABAQAAQoG8XD+kU+q/NmjG9XGsLop9T6kGeAAAAAAAAAAAAAAADitUcbNJc8JLwNFN+axRoMlg8OZgCAgAgIAICACAgAAhQICADf7ojhddL4UPGKZ5+8j0Wxx0bHBdGnFd0UQcwAAAAAAAAAAAAAAAOC12uFGGM5aOOSzcvcjSrTJStEnHkynJx58G9RmX9Wc7zlzQwjFc2C1+OJ1wAgIAICACAgAAhQICACAgFWevLb7j0C77xp2iP4csXHOLWEo9h56Zd0Wh0rzpyWr00pb4yeD8wPQgAQAAAAAAAAAAAAAGkXp+o1PiS8zEOwv+joXpLmnhJb8Vr8UzrgBAQAQEAAEKBAQAQEAEBAB92d/mI9ePmjjMu56Dq3pTiumm+rH0n4ID0QAEAAAAAAAAAAAAAB1d/Xfx9mxj6yni4rprajT3qfM1muY9EMO1XXSrVNKcE5bWm4t+/DMDRiGdfVmVG8ZRSwi8HBbmvviYAAAhQICACAgAgIAIDJu2z8deEIZqU1pdVa5eCYGKzceC11OjSdWawnUWEYvOnDfveruM+zXLQpVtONNaSeKbcpaL3JvUdgQAAAAAAAAAAAAAAAAAABr/Cyy40Y1V7D0Z9V5Pv8AM1g9Dr0VUouEtcZpp9poNtszo2mUJZxefSWxgcJAQoEBABAQAQEAGycDbHjWlWa1RWjDrPXLww7zXqFJ1KyhFYym8IreeiXfZFQscacfZWt9KWbfeBkgAgAAAAAAAAAAAAAAAAAAAdTf91/6ihpR9bBej/2Lo/Y7YAeatYPDJrNcxDktX8TPry+ZnEUCAgAgIAIynzLII3PgxdHE0+NqL8Sa9CP/ABRf1f8Am078+KPqV1V5H2RQAAAAAAAAAAAAAAAAAAADEtN50aXLqRTXsp6Uu5awMsHQWnhTTj6uEqj53hBffwOrtPCWtPk6NJfyxxfewOrtX8TPry+ZnCWUsZYvW28W+dnyUCAgAAgQPmWRSMD1Cj6ldVeR9mh2XhLXppJuNVLZKOvD3rA7azcL4P1lOUN8Wpr6PzIrZgYFlvmhV5NWOL9mT0G+x5meAAAAAAAAAAMO87wjZqGlLW3qhBZzf23gZhwWi206XLnGO5yWL7MzTLbe1WtL0pOMehH0Yr79pgAbfaOEtKPIUqj3LRj3vX4HV2nhNVlyIxpr98l2vV4HSEKMi02+rV5dSUt2OEe5ajGBABAQAQEAAECBAQAQEAEBADOezW6pRf4dSUNyk8O7IxyAd/ZeFleHLUaq3rRk+1avA7ey8L6MvWRlSfPqnFdq1+BpAA9Pst50a3q6sJPo6SUv2vWZZ5GzOsF8VrPL8Oo9FexJ6UH2PLswIr04HVXDfUbZRy0KkOXTx8Vzo7UAaPflr468ZPH0YPRh7lt7XibnaamhZpS6EJPuWJ52BSAhQICACAgAgIAAIECAgAgIAICACAgAgAAgIAICAZd0252a8IVFlF+mulB8pd3kepJ4rnxy3nkLPULgrcZctKW3i4p72lovyIr7vmWF1VPhy8VgaEb1fr/2ip1fqjRABAQoEBABAQAAQIEBABAQAQEAEBABAABAQAQEAEBAB6NwOljwep7nUX9SR5weicCv0CPXn8zA/9k=" class="img-thumbnail" width="100" height="100">
                                </div>
                                <div class="col-md-9 form-group mt-3 mt-md-0" style="padding-top: 5%;">
                                    <input type="file" name="file" class="form-control" id="profileLocation" onchange="changeProfile()" placeholder="select profile image" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input  type="text"  class="form-control" name="firstName" id="firstName" placeholder="first name"
                                            >
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="last name">
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6 form-group">
                                    <input  type="text" name="email" class="form-control"  id="email" placeholder="email"
                                            >
                                </div>
                                <div class="col-md-6 form-group d-inline-flex"
                                     style="margin-top: 10px;">
                                    <div class="form-check">
                                        <input style="height: 15px; width: 15px;" class="form-check-input"  name="gender" type="radio" value="male" id="male">
                                        <label class="form-check-label" for="male">male</label>
                                    </div>
                                    <div class="form-check">
                                        <input style="height: 15px; width: 15px;"   name="gender" class="form-check-input"  type="radio" value="female" id="female">
                                        <label class="form-check-label" for="female">female</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input  type="password" name="password" class="form-control" id="password" placeholder="password"
                                            >
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="confirm password"
                                           >
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit" onclick="signupClick()" name="SIGNUP">SIGNUP</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


        <footer>
            <div class="row" style="padding-left: 5%;padding-right: 5%;">

                <div class="col-lg-7">

                    <div class="row">
                        <div class="col-lg-3 alignCenter">
                            <img src="images/logo.jpg" width="200" height="200">
                        </div>
                        <div class="col-lg-7 topPadding">
                            <p>
                                Looking To Explore Your City? OR Looking to get the best out of your holiday?
                                We’ve Got Your Back! Let us help by getting you a great guide; someone who will help you
                                navigate local language and culture barriers,
                                show you hidden gems, best eateries, trendy stores, cool events, getaways and tell you stories
                                that only a local would know.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 alignLeft topPadding">
                    <h4>Our social media handles</h4>
                    <div class="form-inline">

                        <a class=" " href="https://www.linkedin.com/company/yourultimateguide/" target="_blank"><img width="42"
                                                                                                                     height="42"
                                                                                                                     src="data:image/png;base64,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"></a>
                        <a style="" href="https://www.facebook.com/yourguide.city" target="_blank"><img width="42" height="42"
                                                                                                        src="data:image/png;base64,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"></a>
                        <a href="https://www.youtube.com/channel/UCqyh3o8AwgnXByDNuzyG3gQ" target="_blank"><img width="42"
                                                                                                                height="42"
                                                                                                                src="https://w7.pngwing.com/pngs/936/468/png-transparent-youtube-logo-youtube-logo-computer-icons-subscribe-angle-rectangle-airplane.png"></a>
                        <a href="https://www.instagram.com/lahore.guide/" target="_blank"><img width="42" height="42"
                                                                                               src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-instagram-social-media-icon-design-template-vector-png-image_3654775.jpg"></a>
                        <a href="https://twitter.com/LahoreGuide" target="_blank"><img width="42" height="42"
                                                                                       src="https://cliply.co/wp-content/uploads/2019/07/371907030_TWITTER_ICON_1080.png"></a>
                    </div>
                </div>
            </div>
        </footer>


        <script src="assets/js/main.js"></script>

        <script src="js%20files/index.js"></script>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>


    <?php
            if (isset($_POST['login'])) {
                $connection="";
                $loginEmail = $loginPassword = "";
                $loginPassword = $_POST["loginPassword"];
                $loginEmail = $_POST["loginEmail"];
                connectToDatabase();
                if (empty($loginEmail) || empty($loginPassword))
                {
                    ?>
                    <script>

                                    document.getElementById("errorHead").innerHTML = "all fields are required";
                                    document.getElementById("errorMessage").innerHTML = "please check all the fields all fields are required";
                                    popup();

                    </script>
                    <?php
                }
                else if (checkUSer($loginEmail,$loginPassword)){
                    getSeasion($loginEmail);


                    $url = "profile.php"."?id=".makeUrl();

                    echo '<script>window.open ("'.$url.'", "_Self","status=0,toolbar=0")</script>';
                }

                else{
                    ?>
                    <script>

                                    document.getElementById("errorHead").innerHTML = "invalid email or password";
                                    document.getElementById("errorMessage").innerHTML = " ";
                                    popup();
                    </script>
                    <?php
                }
            }

            else if (isset($_POST['SIGNUP'])) {
                $fName = $lName = $email = $password = $cPassword=$selectedGender = "";

                $connection = null;
                $flag = true;

                if (isset($_POST['gender'])) {

                    $gender = $_POST["gender"];
                    if ($gender == "male") {
                        $selectedGender = "male";
                        $flag = false;
                    } else if ($gender == "female") {

                        $flag = false;
                        $selectedGender = "female";
                    } else {
                        $flag = true;
                    }
                }

                $fName = $_POST["firstName"];
                $lName = $_POST["lastName"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $cPassword = $_POST["cPassword"];
                connectToDatabase();
                if (empty($fName) || empty($lName) || empty($email) || empty($password) || empty($cPassword) || $flag) {
                    ?>
                    <script>

                                    document.getElementById("errorHead").innerHTML = "all fields are required";
                                    document.getElementById("errorMessage").innerHTML = "please check all the fields all fields are required";
                                    popup();

                    </script>
                    <?php
                } else if ($password != $cPassword) {

                    ?>
                    <script>
                                    document.getElementById("errorHead").innerHTML = "password must be same";
                                    document.getElementById("errorMessage").innerHTML = "you have entered the different password and confirm password check it to procces";
                                    popup();

                    </script>
                    <?php
                } else if (userPresent($email)){
                    echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "dear user!email that your entered is already exist in our accounts. please check again or contact to our team.  ";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "your email is already exist";
            
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                }
                else{
                    $currentDirectory = getcwd();
                    $uploadDirectory = "/profileImage/";

                    $errors = []; // Store errors here

                    $fileExtensionsAllowed = ['jpg', 'jpeg','png']; // These will be the only file extensions allowed

                    $fileName = $_FILES['file']['name'];
                    $fileSize = $_FILES['file']['size'];
                    $fileTmpName = $_FILES['file']['tmp_name'];
                    $fileType = $_FILES['file']['type'];
                    $array = explode('.', $fileName);
                    $fileExtension = strtolower(end($array));

                    $newFileName = $email;
                    $uploadPath = $currentDirectory . $uploadDirectory . $newFileName . "." . $fileExtension;
                    $newFileName = $newFileName.".".$fileExtension;

                    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
                        $error = "This file extension is not allowed. Please upload a JPEG or PNG file";
                        echo '<script>alert("This file extension is not allowed. Please upload a pdf or docs file")</script>';

                        echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "Check your image. use the image of jpeg,jpg and png only";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "Check your image";
                                   
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                    }

                    if ($fileSize > 4000000) {
                        $errors[] = "File exceeds maximum size (4MB)";

                        echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "Please use the image of small size";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "File exceeds maximum size (4MB)";
                                   
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                    }

                    if (empty($errors)) {
                        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

                        if ($didUpload) {

                            connectToDatabase();
                            addUser($fName, $lName, $email, $selectedGender, $password,$newFileName, $GLOBALS['connection']);
                            $url = "/Profile"."?id=".makeUrl();
                            echo '<script>window.open ("'.$url.'", "_Self","status=0,toolbar=0")</script>';

                            $GLOBALS['connection']->close();

                        } else {

                        }
                    } else {
                        foreach ($errors as $error) {

                        }
                    }

                }

            }
            function getSeasion($chk){
                $sql = "SELECT * FROM accounts WHERE email='$chk'";
                $result = $GLOBALS['connection']->query($sql);

                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
                        $_SESSION["firstName"] = $data["firstname"];
                        $_SESSION["lastName"] = $data["lastname"];
                        $_SESSION["gender"] = $data["gender"];
                        $_SESSION["email"] = $data["email"];
                        $_SESSION["password"] = $data["password"];
                        $_SESSION["profile"] = $data["profileUrl"];
                        $_SESSION["username"] = $data["username"];
                        $_SESSION["address"] = $data["address"];
                        $_SESSION["city"] = $data["city"];
                        $_SESSION["aboutMe"] = $data["aboutMe"];



                } else {
                    return false;
                }
            }
            function checkUSer($chk,$password){
                $sql = "SELECT * FROM accounts WHERE email='$chk' AND password='$password'";
                $result = $GLOBALS['connection']->query($sql);

                if ($result->num_rows > 0) {
                    return true;

                } else {
                    return false;
                }
            }

            function makeUrl(){
                if($_SESSION["username"] == ""){

                    $parts = explode('@', $_SESSION["email"]);
                    $user = $parts[0];
                    $domain = $parts[1];
                    $url = $user;
                    if ($domain == "gmail.com")
                        $url .= "_12345";
                    else if ($domain == "yahoo.com")
                        $url .= ".1234";

                    return $url;
                }
                else{
                    return $_SESSION["username"];
                }
            }
    function userPresent($chk){
        $sql = "SELECT * FROM accounts WHERE email='$chk'";
        $result = $GLOBALS['connection']->query($sql);

        if ($result->num_rows > 0) {
            return true;

        } else {
            return false;
        }
    }

    function connectToDatabase()
            {
            //        $GLOBALS['connection'] = mysqli_connect("localhost", "youryyuu_root", "cNzDhw8@", "youryyuu_candidate");
                $GLOBALS['connection'] = mysqli_connect("localhost", "root", "root", "candidate");
                if ($GLOBALS['connection'] == null) {
                    echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "contact to the company for this issue. email : writetoyourguide@gmail.com ";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "some problem occur";
            
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                } else {
                    makeTable();
                }

            }

            function makeTable()
            {
                $sql = "CREATE TABLE IF NOT EXISTS accounts (
                                                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                            firstname VARCHAR(30) NOT NULL,
                                                            lastname VARCHAR(30) NOT NULL,
                                                            email VARCHAR(50) not null,
                                                            gender varchar(6) not null,
                                                            password varchar(30),
                                                            date varchar (30),
                                                            profileUrl varchar(100),
                                                            username varchar (40),
                                                            address varchar (100),
                                                            city varchar(30) ,    
                                                            aboutMe varchar (500)
    
                                                            )";

                if ($GLOBALS['connection']->query($sql) === TRUE) {
                    //                        echo "Table users created successfully";
                } else {
            //                echo "Error creating table: " . $GLOBALS['connection']->error;
                    echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "contact to the company for this issue. email : writetoyourguide@gmail.com ";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "some problem is occur";
            
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                }
            }

            function addUser($first, $second, $email, $gender, $password,$fileName, $connect)
            {

                $date = date("Y-m-d,h:i:s");
                $sql = "INSERT INTO accounts(firstname, lastname, email,gender,password,date,profileUrl)
                                                VALUES ('$first','$second' ,'$email','$gender','$password','$date','$fileName')";

                if ($connect->query($sql) === TRUE) {


                } else {
                    echo '<script type="text/javascript">
                                    document.getElementById("errorMessage").innerHTML = "contact to the company for this issue. email : writetoyourguide@gmail.com ";
                                    
                                
                                    document.getElementById("errorHead").innerHTML = "your request has not submitted";
            //                        https://cdn.dribbble.com/users/1238709/screenshots/4069900/success_celebration_800x600.gif
            //                         document.getElementById("cImage").innerHTML = image:url("https://cdn.dribbble.com/users/1238709/screenshots/4069900/success_celebration_800x600.gif");
                                    
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
                }
            }

    ?>
