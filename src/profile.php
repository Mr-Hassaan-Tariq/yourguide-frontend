<?php

connectToDatabase();
class ProfileData{


    public $newFirstName ;
    public $newLastName;
    public $newGender ;
    public $newEmail  ;
    public $newPassword ;
    public $newProfile;
    public $newUserName;
    public $newAddress;
    public $newCity;
    public $newAboutMe;

    /**
     * @param $newFirstName
     * @param $newLastName
     * @param $newGender
     * @param $newEmail
     * @param $newPassword
     * @param $newProfile
     * @param $newUserName
     * @param $newAddress
     * @param $newCity
     * @param $newAboutMe
     */

    public function __construct($newFirstName, $newLastName, $newGender, $newEmail, $newPassword, $newProfile, $newUserName, $newAddress, $newCity, $newAboutMe)
    {
        $this->newFirstName = $newFirstName;
        $this->newLastName = $newLastName;
        $this->newGender = $newGender;
        $this->newEmail = $newEmail;
        $this->newPassword = $newPassword;
        $this->newProfile = $newProfile;
        $this->newUserName = $newUserName;
        $this->newAddress = $newAddress;
        $this->newCity = $newCity;
        $this->newAboutMe = $newAboutMe;
    }

    /**
     * @return mixed
     */
    public function getNewFirstName()
    {
        return $this->newFirstName;
    }

    /**
     * @param mixed $newFirstName
     */
    public function setNewFirstName($newFirstName)
    {
        $this->newFirstName = $newFirstName;
    }

    /**
     * @return mixed
     */
    public function getNewLastName()
    {
        return $this->newLastName;
    }

    /**
     * @param mixed $newLastName
     */
    public function setNewLastName($newLastName)
    {
        $this->newLastName = $newLastName;
    }

    /**
     * @return mixed
     */
    public function getNewGender()
    {
        return $this->newGender;
    }

    /**
     * @param mixed $newGender
     */
    public function setNewGender($newGender)
    {
        $this->newGender = $newGender;
    }

    /**
     * @return mixed
     */
    public function getNewEmail()
    {
        return $this->newEmail;
    }

    /**
     * @param mixed $newEmail
     */
    public function setNewEmail($newEmail)
    {
        $this->newEmail = $newEmail;
    }

    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param mixed $newPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }

    /**
     * @return mixed
     */
    public function getNewProfile()
    {
        return $this->newProfile;
    }

    /**
     * @param mixed $newProfile
     */
    public function setNewProfile($newProfile)
    {
        $this->newProfile = $newProfile;
    }

    /**
     * @return mixed
     */
    public function getNewUserName()
    {
        return $this->newUserName;
    }

    /**
     * @param mixed $newUserName
     */
    public function setNewUserName($newUserName)
    {
        $this->newUserName = $newUserName;
    }

    /**
     * @return mixed
     */
    public function getNewAddress()
    {
        return $this->newAddress;
    }

    /**
     * @param mixed $newAddress
     */
    public function setNewAddress($newAddress)
    {
        $this->newAddress = $newAddress;
    }

    /**
     * @return mixed
     */
    public function getNewCity()
    {
        return $this->newCity;
    }

    /**
     * @param mixed $newCity
     */
    public function setNewCity($newCity)
    {
        $this->newCity = $newCity;
    }

    /**
     * @return mixed
     */
    public function getNewAboutMe()
    {
        return $this->newAboutMe;
    }

    /**
     * @param mixed $newAboutMe
     */
    public function setNewAboutMe($newAboutMe)
    {
        $this->newAboutMe = $newAboutMe;
    }


}
        session_start();
        $newFirstName  = $newLastName  = $newGender  = $newEmail  = $newPassword  = $newProfile = $newUserName =
        $newAddress = $newCity = $neAboutMe ="";

        $title = "Welcome ";
        $Url = $_GET['id'];
        $emails = explode("_", $Url);
        if ($emails[1] = "12345")
            $emails[0] .= "@gmail.com";


        $_SESSION['otherEmail'] = $emails[0];
        if (empty($_SESSION["firstName"])) {
            $url = "Login.php";
            echo '<script>window.open ("'.$url.'", "_Self","status=0,toolbar=0")</script>';

         }
        else if (!userPresent($_SESSION["otherEmail"])){
            makePopup();
        }else {


            $title = "Welcome " . $_SESSION["firstName"] . " " . $_SESSION["lastName"];
        }
        function user($chk){
            $sql = "SELECT * FROM accounts WHERE email='$chk'";
            $result = $GLOBALS['connection']->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $profileData = new ProfileData($row["firstname"],$row["lastname"],$row["gender"],$row["email"],$row["password"],$row["profileUrl"],
                $row["username"],$row["address"],$row["city"],$row["aboutMe"]);
                return $profileData;


            } else {
                return new ProfileData("","","","","","","","","","");
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
            }

        }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <title><?php echo $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">


    <script src="js%20files/index.js"></script>
    <script src="js%20files/post.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Icons -->
    <link rel="stylesheet" href="css%20files/nucleo.css" type="text/css">
    <link rel="stylesheet" href="css%20files/all.min.css" type="text/css">
    <link rel="stylesheet" href="css%20files/index.css">



    <!-- Argon CSS -->
    <link rel="stylesheet" href="css%20files/argon.css?v=1.2.0" type="text/css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="selector/tagsinput.css" rel="stylesheet" type="text/css">



</head>

<body>


        <div class="popup" id="popup">
            <div class="overlay"></div>
            <div class="content">
                <!--                    <div class="close-btn" onclick="closePopup()">&times;</div>-->
                <div class="row">

                    <div class="col-lg-7 topPadding col-md-9">
                        <h1>We're So Sorry</h1>
                        <p>
                            This feature is not currently available.
                            Thanks for visit our site.
                        </p>
                        <button style="background-color: darkgreen; width: 130px; margin-top: 5%;"
                                class="btn btn-success radiusChange backgroundChange" onclick="closePopup()"> Close
                        </button>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <img src="images/sorryImage.PNG">
                    </div>
                </div>
            </div>
        </div>


        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->


            <nav style="color: black;background-color: black " class="navbar navbar-top navbar-expand  border-bottom">
                <div style="" class="container-fluid">
                    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search form -->
                        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input style="border-color: black;" class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                                    aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </form>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                     data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item d-sm-none">
                                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                    <i class="ni ni-zoom-split-in"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-bell"></i>
                              </a>

                                <!--                                        in this We have show the notifications-->
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
                                        notifications.</h6>
                                </div>
                                <!-- List group -->

                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->

                                                <img src="images/interne/HARIS.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-2.jpg"
                                                     class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-3.jpg"
                                                     class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-4.jpg"
                                                     class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-5.jpg"
                                                     class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- View all -->
                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <div class="media align-items-center">
                          <span class="avatar avatar-sm rounded-circle">
                            <img  alt="Image placeholder" id="profileImage"
                                 src="profileImage/<?php echo $_SESSION["profile"]; ?>">
                          </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold"
                                                  id="prifileName"><?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>My profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-calendar-grid-58"></i>
                                        <span>Activity</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-support-16"></i>
                                        <span>Support</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header -->
            <!-- Header -->
            <div class="header pb-6 d-flex align-items-center"
                 style="min-height: 500px; background-image: url(images/lahore.jpg); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask  opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-7 col-md-10">
                            <h1 class="display-2 text-white" id="greeting" style="text-transform:capitalize">
                                Hello <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></h1>
                            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with
                                your work and manage your projects or assigned tasks</p>
                            <?php if ($_SESSION["email"] == $_SESSION["otherEmail"])
                            {
                                echo '<a href="#" class="btn btn-neutral">Edit profile</a>';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">

                <!--      make the profile view-->
                <div class="row">
                    <div class="col-xl-4 order-xl-2">
                        <div class="card card-profile">
                            <img src="images/Food-Street2.jpg" alt="Image placeholder" class="card-img-top">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img style="border-radius: 50%;"
                                                 src="profileImage/<?php
                                                 if ($_SESSION["email"] == $_SESSION["otherEmail"]) {
                                                     echo $_SESSION["profile"];
                                                 }else{
                                                     connectToDatabase();
                                                     if (userPresent($_SESSION["otherEmail"]))
                                                     {
                                                         echo user($_SESSION["otherEmail"])->getNewProfile();
                                                     }
                                                 } ?>" class="rounded-circle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                <div class="d-flex justify-content-between">
                                    <ul>

                                        <li class="nav-item dropdown">
                                            <?php if ($_SESSION["email"] == $_SESSION["otherEmail"])
                                            {
                                                echo '<a  class="  float-right"  style="color: darkgreen;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-link"></i>
                                                </a>';
                                            }?>


                                            <div style=" color: white;" class="dropdown-menu dropdown-menu-lg   dropdown-menu-right ">
                                                    <div class="row shortcuts px-4">
                                                        <a href="https://calendar.google.com/calendar/" target="_blank" class="col-4 shortcut-item" >
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-red" >
                                                      <i class="ni ni-calendar-grid-58"></i>
                                                    </span>
                                                            <small>Calendar</small>
                                                        </a>
                                                        <a href="#!" class="col-4 shortcut-item">
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                                      <i class="ni ni-email-83"></i>
                                                    </span>
                                                            <small>Email</small>
                                                        </a>
                                                        <a href="#!" class="col-4 shortcut-item">
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                                      <i class="ni ni-credit-card"></i>
                                                    </span>
                                                            <small>Payments</small>
                                                        </a>
                                                        <a href="#!" class="col-4 shortcut-item">
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                                      <i class="ni ni-books"></i>
                                                    </span>
                                                            <small>Reports</small>
                                                        </a>
                                                        <a href="#!" class="col-4 shortcut-item">
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                                      <i class="ni ni-pin-3"></i>
                                                    </span>
                                                            <small>Maps</small>
                                                        </a>
                                                        <a href="#!" class="col-4 shortcut-item">
                                                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                                      <i class="ni ni-basket"></i>
                                                    </span>
                                                            <small>Shop</small>
                                                        </a>
                                                    </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <?php if ($_SESSION["email"] == $_SESSION["otherEmail"])
                                    {
                                        echo '
                                                    <a href="#" style="color: darkgreen;" class="float-right"><i class="fas fa-cog"></i></a>
                                                ';
                                    }?>

                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center">
                                            <div>
                                                <span class="heading">22</span>
                                                <span class="description">Friends</span>
                                            </div>
                                            <div>
                                                <span class="heading">10</span>
                                                <span class="description">Photos</span>
                                            </div>
                                            <div>
                                                <span class="heading">89</span>
                                                <span class="description">Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="h3">
                                        <?php
                                        if(($_SESSION["otherEmail"] != $_SESSION["email"] ) && (!empty($_SESSION))) {
                                            echo user($_SESSION["otherEmail"])->getNewFirstName() . " " . user($_SESSION["otherEmail"])->getNewLastName();
                                        }
                                        else
                                        {
                                            echo $_SESSION["firstName"]." ".$_SESSION["lastName"];
                                        }?>
                                    </h5>
                                    <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Web developer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <?php
                                        if ($_SESSION["email"] == $_SESSION["otherEmail"])
                                        {
                                            echo ' <h3 class="mb-0">Add yourguide </h3>';
                                        }?>
                                    </div>
                                    <div class="col-4 text-right" >
                                        <?php
                                            if ($_SESSION["email"] == $_SESSION["otherEmail"]){
                                                echo '<button class="btn btn-white btn-sm" onclick="addPost()">ADD POST</button>';
                                            }
                                        ?>
                                    </div>

                                            <div  id="sladder" class="col-lg-4 col-md-12 col-sm-12" style="display: none; ">
                                                    <div  class="container" >
                                                        <div class="wrapper">
                                                            <div class="image">
                                                                <img id="postImage"  src="" alt="">
                                                            </div>
                                                            <div class="content">
                                                                <div class="icon">
                                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                                </div>
                                                                <div class="text">
                                                                    No file chosen, yet!
                                                                </div>
                                                            </div>
                                                            <div id="cancel-btn">
                                                                <i class="fas fa-times"></i>
                                                            </div>
                                                            <div class="file-name">
                                                                File name here
                                                            </div>
                                                        </div>
                                                        <button onclick="defaultBtnActive()"  id="custom-btn">Choose a file</button>
                                                        <input id="default-btn" type="file" hidden>
                                                    </div>
                                                <script>
                                                 const wrapper = document.querySelector(".wrapper");
                                                 const fileName = document.querySelector(".file-name");
                                                 const defaultBtn = document.querySelector("#default-btn");
                                                 const customBtn = document.querySelector("#custom-btn");
                                                 const cancelBtn = document.querySelector("#cancel-btn i");
                                                 const img = document.querySelector("#postImage");
                                                 let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
                                                 function defaultBtnActive(){
                                                   defaultBtn.click();
                                                 }
                                                 defaultBtn.addEventListener("change", function(){
                                                   const file = this.files[0];
                                                   if(file){
                                                     const reader = new FileReader();
                                                     reader.onload = function(){
                                                       const result = reader.result;

                                                       img.src = result;
                                                       wrapper.classList.add("active");
                                                     }
                                                     cancelBtn.addEventListener("click", function(){
                                                       img.src = "";
                                                       wrapper.classList.remove("active");
                                                     })
                                                     reader.readAsDataURL(file);
                                                   }
                                                   if(this.value){
                                                     let valueStore = this.value.match(regExp);
                                                     fileName.textContent = valueStore;
                                                   }

                                                 });

                                              </script>
                                                <!--        the script for the post Image.-->

                                            </div>

                                            <div id="addPost" style="display: none; height: 350px; padding-bottom: 20px;  padding-top: 50px; overflow: scroll;" class="col-lg-8 col-md-12 col-sm-12 topPadding" style="">

                                                <form class="topPadding">

                                                    <div class="form-group mt-3">

                                                        <select onclick="makeOptions()" type="text" style=" margin-bottom: 30px;"
                                                               class="form-control "
                                                               placeholder="tags" >
                                                            <option>SELECT CITY</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <textarea class="form-control" name="message" rows="5"
                                                                  placeholder="description"
                                                                  required></textarea>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <input type="text"
                                                               class="form-control bootstrap-tagsinput"
                                                               placeholder="tags" data-role="tagsinput">
                                                    </div>
                                                    <div class="d-inline">
                                                        <button class="btn btn-success btn-lg"
                                                                style="background-color: darkgreen;">ADD POST
                                                        </button>
                                                        <button class="btn btn-success btn-lg" onclick="hide()"
                                                                style="background-color: darkgreen;">HIDE
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                    <div class="col-8 topPadding" >
                                        <?php
                                        if ($_SESSION["email"] == $_SESSION["otherEmail"])
                                        {
                                            echo ' <br><h3 class="mb-0">Edit profile </h3>';
                                        }?>

                                    </div>
                                    <div  class="col-4 text-right topPadding">
                                        <?php
                                        if ($_SESSION["email"] == $_SESSION["otherEmail"])
                                        {
                                            echo '<a href="#!" style="background-color: darkgreen;color: white;" class="btn btn-sm btn-primary">Settings</a>';
                                        }?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <h6 class="heading-small text-muted mb-4">User information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-username">Username</label>
                                                    <input type="text" id="input-username" class="form-control"
                                                           placeholder="Username" value="<?php echo user($_SESSION["otherEmail"])->getNewUserName();?>"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email address</label>
                                                    <input type="email" id="input-email" class="form-control"
                                                           placeholder="jesse@example.com"
                                                           value="<?php echo user($_SESSION["otherEmail"])->getNewEmail();?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-first-name">First name</label>
                                                    <input type="text" id="input-first-name" class="form-control"
                                                           placeholder="First name" value="<?php echo user($_SESSION["otherEmail"])->getNewFirstName();?>"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-last-name">Last name</label>
                                                    <input type="text" id="input-last-name" class="form-control"
                                                           placeholder="Last name" value="<?php echo user($_SESSION["otherEmail"])->getNewLastName();?>"
                                                           readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4"/>
                                    <!-- Address -->
                                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-address">Address</label>
                                                    <input id="input-address" class="form-control" placeholder="Home Address"
                                                           value="<?php echo user($_SESSION["otherEmail"])->getNewAddress();?>" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-city">City</label>
                                                    <input type="text" id="input-city" class="form-control" placeholder="City"
                                                           value="<?php echo user($_SESSION["otherEmail"])->getNewCity();?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4"/>
                                    <!-- Description -->
                                    <h6 class="heading-small text-muted mb-4">About me</h6>
                                    <div class="pl-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">About Me</label>
                                            <textarea rows="4" class="form-control" placeholder="A few words about you ..."
                                                      readonly><?php echo user($_SESSION["otherEmail"])->getNewAboutMe();?></textarea>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
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
                                        show you hidden gems, best eateries, trendy stores, cool events, getaways and tell you
                                        stories
                                        that only a local would know.
                                    </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 alignLeft topPadding">
                            <h4>Our social media handles</h4>
                            <div class="form-inline">

                                <a class=" " href="https://www.linkedin.com/company/yourultimateguide/" target="_blank"><img
                                            width="42"
                                            height="42"
                                            src="data:image/png;base64,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"></a>
                                <a style="" href="https://www.facebook.com/yourguide.city" target="_blank"><img width="42"
                                                                                                                height="42"
                                                                                                                src="data:image/png;base64,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"></a>
                                <a href="https://www.youtube.com/channel/UCqyh3o8AwgnXByDNuzyG3gQ" target="_blank"><img
                                            width="42"
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

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
        <script src="selector/tagsinput.js"></script>
        <script src="js%20files/post.js"></script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

        <!-- Argon Scripts -->

        <!-- Core -->
        <script src="js%20files/jquery.min.js"></script>
        <script src="js%20files/js.cookie.js"></script>


        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>

<?php
        function makePopup(){
            echo '<script type="text/javascript">
            
                                    document.getElementById("popup").style.display = "block";
                                    document.getElementById("popup").classList.toggle("active");
                               
                            </script>';
        }
?>