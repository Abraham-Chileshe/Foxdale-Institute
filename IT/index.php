<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $dots = "../";
        include "../inc/vital_functions.php";
        headloc($dots);
    ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        
       <?php
            navbar($dots);
        ?>


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">IT & Coding</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Classes</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Available Courses</h1>
                     </div>
                <div class="row g-4">

                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="tkinter/index.php">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/pyicon.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="python/index.php">Python Fundamentals</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span style="font-size:10" class="bg-info text-dark rounded-pill py-2 px-3" href="">$15/hour</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="tkinter/index.php">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/tkinter.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="python/index.php">Python GUI</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span style="font-size:10" class="bg-info text-dark rounded-pill py-2 px-3" href="">$15/hour</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                   
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/office.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="">Office Pack</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span class="bg-info text-dark rounded-pill py-2 px-3" href="">$99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/webdev.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="">Web design</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span class="bg-info text-dark rounded-pill py-2 px-3" href="">$99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/cpp.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="">C++ Basic</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span class="bg-info text-dark rounded-pill py-2 px-3" href="">$99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/PHP.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="">PHP & SQL</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span class="bg-info text-dark rounded-pill py-2 px-3" href="">$99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-bblack rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="python/img/basics.jpg" alt="">
                            </div>
                            <div class="bg-bblack rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-white text-center h3 mt-3 mb-4" href="">Basics of Computing</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo$dots;?>img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Abraham</h6>
                                            <small>Tutor</small>
                                        </div>
                                    </div>
                                    <span class="bg-info text-dark rounded-pill py-2 px-3" href="">$99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-6">
                                        <div class="border-top border-3 border-info pt-2">
                                            <h6 class="text-info mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Period:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                  
                    
                </div>
            </div>
        </div>
        <!-- Classes End -->



        

    <?php 
        
        footerloc($dots);
    ?>
    
</body>

</html>