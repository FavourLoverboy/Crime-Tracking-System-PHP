<?php
    session_start();
    if($_SESSION['username']){
        
    }else{
        header('location: login.php');
    }

    if($url[0] == 'dashboard'){
        $dashboard = 'active';
        echo "<title>Dashboard | Crime Tracking System</title>";
    }

    else if($url[0] == 'addCrime'){
        $addCrime = 'active';
        echo "<title>Add Case | Crime Tracking System</title>";
    }
    else if($url[0] == 'addSuspect'){
        $addSuspect = 'active';
        echo "<title>Add Suspect | Crime Tracking System</title>";
    }
    else if($url[0] == 'addC'){
        $addC = 'active';
        echo "<title>Add Complainant | Crime Tracking System</title>";
    }
    else if($url[0] == 'listOfCrime'){
        $listOfCrime = 'active';
        echo "<title>List Of Cases | Crime Tracking System</title>";
    }
    else if($url[0] == 'Complains'){
        $complains = 'active';
        echo "<title>List Of Complains | Crime Tracking System</title>";
    }
    else if($url[0] == 'viewCrime'){
        $viewCrime = 'active';
        $listOfCrime = 'active';
        echo "<title>List People Involve | Crime Tracking System</title>";
    }
    else if($url[0] == 'addPeople'){
        $addPeople = 'active';
        echo "<title>Add Person Involve | Crime Tracking System</title>";
    }
    else if($url[0] == 'view'){
        $view = 'active';
        $listOfCrime = 'active';
        echo "<title>View Details | Crime Tracking System</title>";
    }
    
?>
<?php include('includes/header.php'); ?>

    <!-- ============ Main Parent Body Container -->
    <div class="mainContainer">
        <div class="container-fluid">
            <div class="row">
                <!-- ============ Left Side ============ -->
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 leftNavSection">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 topLeftLogo">
                            <img src="assets/3.jpg" height="100%" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 menuBox">
                            <?php include('pages/menu.php'); ?>
                        </div>
                    </div>
                </div>

                <!-- ============ Right Side ============ -->
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10" style="height:650px;overflow-y:scroll;">
                    <div class="row">
                        <!-- ============ Top Nav =========== -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 topNavSection">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 topNavLeftSection">
                                    <h1>Welcome to our Crime Tracking System</h1>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 topNavRightSection">
                                    <img src="assets/pro.jpg" alt="profile picture" width="50px" height="50px" style="border-radius:50%;">
                                    <h1><?php echo $_SESSION['username']; ?></h1>
                                </div>
                            </div>
                        </div>

                        <!-- Main Dynamic Section -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 dynamicBodyBox">
                            <?php include($pages);?>
                        </div>

                        <!-- ============ Footer Section -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footerSection">
                            Samuel's Crime Tracking System 2021 All Rights Reserve.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>