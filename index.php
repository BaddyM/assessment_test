<?php
    include 'config.php';
    include 'login-modal.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>Test</title>
</head>
<body>
    <div class="body-container">
        <header class="mb-2">
            <div class="mobile-menu">
                <i class="bi bi-list" style="font-size:40px; font-weight:bold;"></i>
            </div>
            <div class="logo-container">
                <img src="images/logo.png" class="logo" alt=""> <p class="brandname">Proto</p>
            </div>

            <div class="links-button">
                <div class="links">
                    <ul class="nav">
                        <li class="nav-item"> <a href="" class="nav-link">Home</a> </li>
                        <li class="nav-item"> <a href="" class="nav-link">About</a> </li>
                        <li class="nav-item"> <a href="" class="nav-link">Places</a> </li>
                        <li class="nav-item"> <a href="" class="nav-link">Careers</a> </li>
                        <li class="nav-item"> <a href="" class="nav-link">Blog</a> </li>
                    </ul>
                </div>

                <div>
                    <button class="login-btn-inner" type="button">LOGIN</button>
                </div>
            </div>

            <div>
                <button class="login-btn" type="button">LOGIN</button>
            </div>
        </header><!-- navbar here -->

        <div class="links-container">

        </div>

        <div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="carousel-img w-100" src="images/carousel/1.jpg">
                        <div class="d-none d-md-block carousel-items">
                            <h4 class="caption-title">TRAVEL TO EXPLORE</h4>
                            <p>
                                Lorem Ipsum Dolor Sit Amet, Consectetur
                                Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt
                                Ut Labore Et Dolore Magna Aliqua. Ultricies Mi Eget
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="carousel-img w-100" src="images/carousel/2.jpg">
                        <div class="d-none d-md-block carousel-items">
                            <h4 class="caption-title">TRAVEL TO EXPLORE</h4>
                            <p>
                                Lorem Ipsum Dolor Sit Amet, Consectetur
                                Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt
                                Ut Labore Et Dolore Magna Aliqua. Ultricies Mi Eget
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>               

            </div><!-- Carousel -->

            <div class="layer-two align-items-center my-4">
                <div class="layer-two-r1">
                    <p class="mb-0" style="font-size: 13px;">Where You Want to go</p>
                    <p style="font-size: 11px;"  class="mb-0 text-muted"><i class="bi bi-search"></i> Search your location</p>
                </div>
                <div class="border-layer-two">

                </div>
                <div class="layer-two-r1">
                    <p class="mb-0" style="font-size: 13px;">Check-in</p>
                    <input type="text" class="check-in" style="font-size: 11px;" placeholder="Add Date">
                </div>
                <div class="border-layer-two">

                </div>
                <div class="layer-two-r1">
                    <p class="mb-0" style="font-size: 13px;">Check-out</p>
                    <input type="text" class="check-out" style="font-size: 11px;" placeholder="Add Date">
                </div>
                <div class="layer-two-r1 ms-5">
                    <button class="btn explore-btn px-3 py-2 text-white">EXPLORE NOW</button>
                </div>
            </div><!-- Layer 2 -->

            <div class="layer3">
                <div class="card shadow-lg border-0 col-md-2 inner-3">
                    <div class="card-body">
                        <img src="images/layer3/1.png" class="img-fluid" style="height:70px;width:70px;" alt="">
                        <p class="fw-bold mb-2">Get Best Prices</p>
                        <p class="mb-0" style="font-size:13px;">
                            Pay through our application and
                            save thousands and get
                            amazing rewards
                        </p>
                    </div>
                </div>

                <div class="card shadow-lg border-0 col-md-2 inner-3">
                    <div class="card-body">
                        <img src="images/layer3/2.png" class="img-fluid" style="height:70px;width:70px;" alt="">
                        <p class="fw-bold mb-2">Covid Safe</p>
                        <p class="mb-0" style="font-size:13px;">
                            We have allthe curated hotels that
                            have allthe precaution for a corvid
                            safe environment
                        </p>
                    </div>
                </div>

                <div class="card shadow-lg border-0 col-md-2 inner-3">
                    <div class="card-body">
                        <img src="images/layer3/3.png" class="img-fluid" style="height:70px;width:70px;" alt="">
                        <p class="fw-bold mb-2">Flexible Payment</p>
                        <p class="mb-0" style="font-size:13px;">
                            Enjoy the flexible payment through
                            our app and get rewards on every
                            payment
                        </p>
                    </div>
                </div>

                <div class="card shadow-lg border-0 col-md-2 inner-3">
                    <div class="card-body">
                        <img src="images/layer3/4.png" class="img-fluid" style="height:70px;width:70px;" alt="">
                        <p class="fw-bold mb-2">Find The Best Near You</p>
                        <p class="mb-0" style="font-size:13px;">
                            Find the best hotels and places to
                            visit nearyou in a single click
                        </p>
                    </div>
                </div>
            </div><!-- Layer 3 -->

                <h5 class="text-center recommend-title">Recommended Destination</h5>

            <div>
                <!-- Nav tabs -->
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="asia-tab" data-bs-toggle="tab" data-bs-target="#asia" type="button">Asia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="europa-tab" data-bs-toggle="tab" data-bs-target="#europa" type="button">Europa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="africa-tab" data-bs-toggle="tab" data-bs-target="#africa" type="button">Africa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="america-tab" data-bs-toggle="tab" data-bs-target="#america" type="button">America</button>
                    </li>
                    </ul>
                </div>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="asia" role="tabpanel" aria-labelledby="home-tab"> 
                        <div class="d-flex w-100 justify-content-between flex-wrap" style="column-gap: 10px;">
                        <?php
                            $sql = 'SELECT * FROM destinations';
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($query)){

                        ?>
                        <div class="card border-0 destination-card">
                            <img src="images/destination/<?php echo $row['image'];?>" class="rounded-3 dest-image" alt="">
                            <div class="card-body">
                                <p class="mb-0 fw-bold" style="font-size:22px;"><?php echo $row['title'];?></p>
                                <p class="mb-0" style="font-size:16px;">
                                <?php echo $row['body_text'];?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="images/icons/1.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/2.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/3.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                    </div>
                                    <div>
                                        <p class="price mb-0">
                                            &euro;
                                            <span style="font-size:18px;">
                                                <?php echo number_format($row['price']);?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="fw-bold">
                                        <span>
                                            <?php echo $row['distance'];?>
                                        </span>
                                        Kms
                                    </div>

                                    <div class="fw-bold">
                                        Approx 2 nighttrip
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        </div>

                    </div>
                    <div class="tab-pane" id="europa" role="tabpanel" aria-labelledby="profile-tab"> 
                    <div class="d-flex w-100 justify-content-between flex-wrap" style="column-gap: 10px;">
                        <?php
                            $sql = 'SELECT * FROM destinations';
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($query)){

                        ?>
                        <div class="card border-0 destination-card">
                            <img src="images/destination/<?php echo $row['image'];?>" class="rounded-3 dest-image" alt="">
                            <div class="card-body">
                                <p class="mb-0 fw-bold" style="font-size:22px;"><?php echo $row['title'];?></p>
                                <p class="mb-0" style="font-size:16px;">
                                <?php echo $row['body_text'];?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="images/icons/1.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/2.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/3.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                    </div>
                                    <div>
                                        <p class="price mb-0">
                                            &euro;
                                            <span style="font-size:18px;">
                                                <?php echo number_format($row['price']);?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="fw-bold">
                                        <span>
                                            <?php echo $row['distance'];?>
                                        </span>
                                        Kms
                                    </div>

                                    <div class="fw-bold">
                                        Approx 2 nighttrip
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="africa" role="tabpanel" aria-labelledby="messages-tab"> 
                    <div class="d-flex w-100 justify-content-between flex-wrap" style="column-gap: 10px;">
                        <?php
                            $sql = 'SELECT * FROM destinations';
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($query)){

                        ?>
                        <div class="card border-0 destination-card">
                            <img src="images/destination/<?php echo $row['image'];?>" class="rounded-3 dest-image" alt="">
                            <div class="card-body">
                                <p class="mb-0 fw-bold" style="font-size:22px;"><?php echo $row['title'];?></p>
                                <p class="mb-0" style="font-size:16px;">
                                <?php echo $row['body_text'];?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="images/icons/1.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/2.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/3.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                    </div>
                                    <div>
                                        <p class="price mb-0">
                                            &euro;
                                            <span style="font-size:18px;">
                                                <?php echo number_format($row['price']);?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="fw-bold">
                                        <span>
                                            <?php echo $row['distance'];?>
                                        </span>
                                        Kms
                                    </div>

                                    <div class="fw-bold">
                                        Approx 2 nighttrip
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="america" role="tabpanel" aria-labelledby="messages-tab"> 
                    <div class="d-flex w-100 justify-content-between flex-wrap" style="column-gap: 10px;">
                        <?php
                            $sql = 'SELECT * FROM destinations';
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($query)){

                        ?>
                        <div class="card border-0 destination-card">
                            <img src="images/destination/<?php echo $row['image'];?>" class="rounded-3 dest-image" alt="">
                            <div class="card-body">
                                <p class="mb-0 fw-bold" style="font-size:22px;"><?php echo $row['title'];?></p>
                                <p class="mb-0" style="font-size:16px;">
                                <?php echo $row['body_text'];?>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="images/icons/1.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/2.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                        <img src="images/icons/3.png" class="img-fluid icons" style="width:30px; height:30px;" alt="">
                                    </div>
                                    <div>
                                        <p class="price mb-0">
                                            &euro;
                                            <span style="font-size:18px;">
                                                <?php echo number_format($row['price']);?>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <div class="fw-bold">
                                        <span>
                                            <?php echo $row['distance'];?>
                                        </span>
                                        Kms
                                    </div>

                                    <div class="fw-bold">
                                        Approx 2 nighttrip
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>

            </div><!-- Layer 4 -->

            <h5 class="text-center recommend-title">Blogs</h5>            

            <div>
                <div class="d-flex layer5" style="column-gap: 20px;">
                    <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                        <img class="img-fluid layer5-img-large rounded-4" src="images/blogs/1200px-Mt._Kilimanjaro_12.2006.jpeg" alt="">
                        <p class="layer5-lg-text">
                           The Ultimate Guide
                            to Climbing
                            Mount Kilimanjaro
                        </p> 
                    </div>
                    <div class="col-md-4 d-block">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid layer5-img-sm rounded-4 mb-4"  src="images/blogs/travel-industry-air.jpg" alt="">
                            <p class="layer5-lg-sm position-absolute">
                                12 Things I’d Tell Any
                                New Traveler
                            </p> 
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid layer5-img-sm rounded-4"  src="images/blogs/travel-world.jpg" alt="">
                            <p class="layer5-lg-sm position-absolute">
                                The Ultimate Packing List for
                                Female Travelers
                            </p> 
                        </div>
                    </div>
                </div>
            </div><!-- Layer 5 -->

            <h5 class="text-center recommend-title my-4">Clients</h5>

            <div class="clients mb-5">
                <div class="card client-card border-0 shadow-lg rounded-3">
                    <div class="card-body py-4">
                        <div class="d-flex mb-3">
                            <img src="images/clients/quotes.png" style="width: 30px; height:30px;line-height:30px;" alt="">
                            <div class="d-block">
                                <p class="mb-0 ms-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ultricies mi eget mauris pharetra. Amet risus nullam
                                    eget felis eget nunc lobortis. Purus in massa tempor nec.
                                    Porta nibh venenatis cras sed. Viverra ipsum nunc aliquet
                                </p>
                                <div class="d-flex mt-3">
                                    <img src="images/clients/1.png" style="width: 50px; height:50px;" alt="">
                                    <div class="d-block ms-2">
                                        <p class="mb-0 fw-bold">Mario Rossi</p>
                                        <p class="text-muted mb-0">Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!-- Element one --->

                <div class="card border-0 client-card shadow-lg rounded-3">
                    <div class="card-body py-4">
                        <div class="d-flex mb-3">
                            <img src="images/clients/quotes.png" style="width: 30px; height:30px;line-height:30px;" alt="">
                            <div class="d-block">
                                <p class="mb-0 ms-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ultricies mi eget mauris pharetra. Amet risus nullam
                                    eget felis eget nunc lobortis. Purus in massa tempor nec.
                                    Porta nibh venenatis cras sed. Viverra ipsum nunc aliquet
                                </p>
                                <div class="d-flex mt-3">
                                    <img src="images/clients/1.png" style="width: 50px; height:50px;" alt="">
                                    <div class="d-block ms-2">
                                        <p class="mb-0 fw-bold">Mario Rossi</p>
                                        <p class="text-muted mb-0">Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!-- Element two --->
            </div><!-- Layer 6 -->

        </div><!-- Body content -->

        <footer class="mt-3">
            <div style="font-size: 13px;">
            Copyright © 2021 Proto Web Site Test. All rights reserved 
            </div>

            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a style="font-size: 13px;" class="nav-link bottom-nav" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 13px;" class="nav-link bottom-nav" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 13px;" class="nav-link bottom-nav" href="#">Places</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 13px;" class="nav-link bottom-nav" href="#">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 13px;" class="nav-link bottom-nav" href="#">Blog</a>
                    </li>
                </ul>
            </div><!-- nav bar here -->

            <div class="d-flex socials">
                <i class="bi bi-facebook me-3" style="color:rgb(93, 93, 239);font-size:30px;"></i>
                <i class="bi bi-linkedin me-3" style="color:blue;font-size:30px;"></i>
                <i class="bi bi-instagram" style="color:purple;font-size:30px;"></i>
            </div><!-- Socials -->

        </footer><!-- Footer content -->

    </div>

    <!-- Scripts here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <script>
        $(".login-btn-inner, .login-btn").on('click',function(){
            $("#loginModal").modal('show');
        })

        //Initialize the date picker
        $(".check-in, .check-out").datepicker({
            todayHiglight: true,
	        autoclose: true,
            format:'dd M yy'
        })

        //Swiper slider here
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 2000,
            autoplay: {
				enabled: true,
				delay: 1000
			},
        });

        $(document).on('click',".mobile-menu",function(){
            var disp = $(".links-container").css('display')
            if(disp == 'none'){
                $(".links-container").css('display','block')
                $(".links-button").css('display','block');
            }else{
                $(".links-container").css('display','none')
                $(".links-button").css('display','none');
            }
        })

    </script>
</body>
</html>