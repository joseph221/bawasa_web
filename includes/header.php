<?php
    require('config.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['Home']; ?> | BAWASA</title>
    <link rel="stylesheet" href="./resourse/master.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- header section -->
    <header style="background-image: url(./resourse/bg-image.png);">
        <div class="container">
            <div class="topbar-menu">
                <ul class=" top-bar-menu-listing">
                                    <li><a href="index.php?lang=<?php echo $lang['en'];?>"><i class="fa fa-sign-language"></i><?php echo $lang['Swahili']; ?></a></li>
                                    <li class="list-inline-item sm-hide">
                        <a href="#">
                            <i class="fa fa-money-bill"></i> Request Service
                        </a>
                    </li>
                                        <li class="list-inline-item">
                            <a href="#contactus">
                                <i class="fa fa-address-book"></i> Contact Us
                            </a>
                        </li>
                                    <li class="list-inline-item sm-hide">
                        <a href="#faqs">
                            <i class="fa fa-question-circle"></i>FAQs
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="#tenders">
                            <i class="fa fa-universal-access"></i>Tenders
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="#vacancies">
                            <i class="fa-people-carry"></i>Vacancies
                        </a>
                    </li>
                    <li class="list-inline-item sm-hide">
                        <a href="https://mail.bawasa.go.tz/">
                            <i class="fa fa-envelope"></i>&nbsp; Staff Mail
                        </a>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
        </div>
        <div class="banner">
            <div class="container-fluid">
                <div class=" d-flex justify-content-between align-items-center">
                    <div class="py-2  logo mx-auto">
                        <img src="./resourse/emblem.png" alt="emblem" class="img-fluid">
                    </div>
                    <div class="text-center mt-5 justify-content-between">
                        <h5 class="mb-0 sm-hide title">
                            <?php echo $lang['ministry_of'];?></h5>
                        <h1 class="mb-1 title align-items-center">
                            <?php echo $lang['bbt_heading1']?><br/> (BAWASA)
                        </h1>
                        <!-- <p class="sm-hide title text-dec"></p> -->
                    </div>
                    <div class="py-2 logo mx-auto">
                        <a href="#">
                            <img src="./resourse/logo.png" alt="Bawasa" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="baki-juu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark top_navbar p-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#smallScreenNavbar" aria-controls="smallScreenNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="smallScreenNavbar">
                        <ul class="navbar-nav mr-auto active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-home"></i> <?php echo $lang['Home']; ?> </a>
                            </li>
                            <!-- ####################################################################################### -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <?php echo $lang['about_us']?><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu drop">
                                <li>
                                    <a class="dropdown-item" href="pages/about-organization/organization_structure.php">Organizational structure</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/about-organization/background.php">History</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/about-organization/mission_and_vision.php">Mission and Vision</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/about-organization/board_members.php">Board Members</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/about-organization/menagment.php">Management</a>
                                </li>
                            </ul></li>
                            <li class="nav-item dropdown">
                                <a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['service'];?><b class="caret"></b></a>
                            <ul class="dropdown-menu drop">
                                <li><a class="dropdown-item" href="pages/services/clean_water_service.html">Clean Water Services</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/services/sanitation_service.html">Sanitation Services</a>
                                </li>
                            </ul></li>
                            <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['projects'];?><b class="caret"></b></a><ul class="dropdown-menu drop"><li><a class="dropdown-item" href="/projects/8">Planned</a></li><li><a class="dropdown-item" href="/projects/7">excuted</a></li><li><a class="dropdown-item" href="/projects/6">current</a>
                            </li>
                        </ul></li>
                        <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['publications']; ?><b class="caret"></b></a><ul class="dropdown-menu drop"><li><a class="dropdown-item" href="/publications/4">Guidelines</a></li><li><a class="dropdown-item" href="/publications/1">Policies</a>
                        </li><li><a class="dropdown-item" href="/publications/2">Acts</a></li><li><a class="dropdown-item" href="/publications/6">Regulations</a>
                        </li><li><a class="dropdown-item" href="/publications/5">Newsletter</a></li><li><a class="dropdown-item" href="/publications/16">Flyers</a>
                        </li></ul></li>
                        <li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['Media_centre'];?><b class="caret"></b></a>
                            <ul class="dropdown-menu drop"><li><a class="dropdown-item" href="/pressreleases">Press Release</a>
                            </li><li><a class="dropdown-item" href="/galleries/listing/videos">Video Gallery</a>
                            </li><li><a class="dropdown-item" href="/galleries/listing/photos/0">Photo Gallery</a>
                            </li><li><a class="dropdown-item" href="/publications/7">Speeches</a>
                            </li></ul>
                        </li><li class="nav-item dropdown"><a href="/#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $lang['office_areas']?><b class="caret"></b></a>
                        <ul class="dropdown-menu drop" style="display: none;">
                                <li><a class="dropdown-item" href="pages/areas/kateshi.php">Kateshi Office Area</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/areas/bashnet.php">Bashnet Office Area</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/areas/dareda.php">Dareda Office Area</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/areas/gallapo.php">Gallapo Office Area</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/areas/magugu.php">Magugu Office Area</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/areas/babati.html">Babati Head Office</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&to_this_inst=466$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ"><?php echo $lang['e_mrejesho']?></a>
                        </li>
                        <!-- ####################################################################################### -->
                        </ul>
                        <div class="search">
                            <!-- <button class="btn-search"><i class="fa fa-search"></i></button> -->
                            <div class="search-form">
                                <form class="form-inline py-0 mr-auto" method="GET" action="#search">
                                    <input type="hidden" name="_token" value="CjD1smmsiLMJ3siCtMPrThr9DsTeHibuTUqRWNju">                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn-search pr-0" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
