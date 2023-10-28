<?php 
    include "admin/includes/db.php";

    // Fetching Color's data
    $sql = "SELECT * FROM header";
    $get_query = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($get_query)){
        $header_logo     = $row['header_logo'];
        $nav_menu        = $row['nav_menu'];
        $nav_menu_anchors = $row['nav_menu_anchors'];
    };

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts Montserrat & Poppins -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Reset CSS File -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <!-- Grid CSS File -->
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <!-- FontAwesome CSS file -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!-- Theme CSS Color File -->
        <link rel="stylesheet" href="admin//includes/color.php">
        <!-- Theme Main CSS File -->
        <link rel="stylesheet" type="text/css" href="css/style.php">
        <title>Portfolio Website</title>
    </head>
    <body>
        <!-- Header Section Start -->
        <header>
            <div class="container">
                <div class="row header-content">
                    <div class="col-4 col-xm-12 col-sm-12">
                        <div class="logo">
                            <a href="https://nahidmahmud.com/">
                                 <!-- Brand Logo -->
                                <?php
                                    if( !empty($header_logo) ){
                                        echo "<h2>$header_logo</h2>";
                                    }
                                    else{
                                        echo "<h2>Nahid</h2>";
                                    }
                                
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-xm-12 col-sm-12">
                        <!-- Nav Menu Start -->
                        <nav>
                            <ul class="nav-menu">
                                <?php
                                    $nav_menu_items = explode(",", $nav_menu);
                                    $nav_menu_anchors = explode(",", $nav_menu_anchors);
                                    
                                    foreach($nav_menu_items as $index => $menu_item){
                                        ?>
                                            <li>
                                                <a href="<?php echo '#' . trim($nav_menu_anchors[$index])?>"><?php echo trim($menu_item); ?></a>
                                            </li>
                                        <?php
                                    } 
                                ?>
                                <!-- <li>
                                    <a href="#home">About</a>
                                </li>
                                <li>
                                    <a href="#skills">Skills</a>
                                </li>
                                <li>
                                    <a href="#skills">Services</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li> -->
                            </ul>
                        </nav>
                        <!-- Nav Menu End -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->


        <!-- Intro Section Start -->
        <section id="home">
            <div class="container">
                <!-- Row Start -->
                <div class="row intro-section section-layout">
                    <div class="col-3 col-xm-12 col-sm-12">
                        <!-- Profile -->
                        <div class="profile-card">
                            <div class="profile-img-box">
                                <img src="images/profile-image-v3.png" class="img-fluid" alt="Profile Image">
                            </div>
                            <h4 class="profile-title">Nahid Mahmud</h4>
                            <h6 class="profile-subtitle">Web Developer</h6>
                            <!-- Profile Social Icons -->
                            <ul class="profile-social-icons">
                                <li>
                                    <a href="https://www.facebook.com/nahidmahmud111"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/nahid-mahmud-1"><i class="fa fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-9 col-xm-12 col-sm-12">
                        <div class="row intro-content-row">
                            <div class="col-1 col-xm-12 col-sm-12">
                                <!-- Intro line-->
                                <div class="intro-line"></div>
                            </div>
                            <div class="col-11 col-xm-12 col-sm-12">
                                <!-- Intro Content -->
                                <div class="intro-content">
                                    <h6 class="intro-top-title">Hi there,</h6>
                                    <h1 class="intro-main-title">I'm a Web Developer</h1>
                                    <p>Certified web designer and developer with a strong foundation in Web Design andDevelopment. Proficient in HTML5, CSS3, Bootstrap, JavaScript, PHP, and WordPress, Iam dedicated to creating effective web solutions. With 2 years of freelance experience and over 200 completed projects, I am passionate about delivering high-quality work.</p>
                                    <!-- Intro button -->
                                    <a href="#" class="intro-button">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </section>
        <!-- Intro Section End -->


        <!-- Experience & Skill Section Start  -->
        <section id="skills">
            <div class="container">
                <div class="row section-layout skill-section">
                    <div class="col-12 col-xm-12 col-sm-12 col-md-12">
                        <div class="section-title-box">
                            <!-- Section Title -->
                            <h3 class="section-title">Experience & Skills</h3>
                            <div class="section-divider-responsive"></div>
                        </div>
                    </div>
                    <!-- Experience Content -->
                    <div class="col-6 col-xm-12 col-sm-12 col-md-12">
                        <!-- Experience Row Start -->
                        <div class="row responsive-row">
                            <div class="col-6 col-xm-12 col-sm-12">
                                <!-- Experience item -->
                                <div class="experience-item-box">
                                    <h6 class="experience-date">2019 - Present</h6>
                                    <h5 class="experience-label">Fiverr</h5>
                                    <p class="experience-dsc">As a web and WordPress designer on Fiverr, I've successfully completed every projectwith 5-star ratings and reviews.</p>
                                </div>
                            </div>

                            <div class="col-6 col-xm-12 col-sm-12">
                                 <!-- Experience item -->
                                 <div class="experience-item-box">
                                    <h6 class="experience-date">2020 - 2021</h6>
                                    <h5 class="experience-label">TN-Team</h5>
                                    <p class="experience-dsc">In March 2020, I co-founded 'TN-Team,' a Fiverr-based web design team with another member.</p>
                                </div>
                            </div>

                            <div class="col-12 col-xm-12 col-sm-12">
                                 <!-- Experience item -->
                                 <div class="experience-item-box">
                                    <h6 class="experience-date">2017 - 2018</h6>
                                    <h5 class="experience-label">Demo</h5>
                                    <p class="experience-dsc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu in quis vehicula at ut sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu in quis vehicula at ut sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Experience Row End -->
                    </div>

                    <div class="col-6 col-xm-12 col-sm-12 col-md-12">
                        <!-- Skill row start -->
                        <div class="row responsive-row">
                            <div class="col-12">
                                <!-- Skill Progess-bar Start -->
                                <div class="skill-bar-box">
                                    <!-- Skill Bar Item -->
                                    <div class="skill-bar-item">
                                        <!-- HTML Bar -->
                                        <label class="skill-label">HTML & CSS <span>95%</span></label>
                                        <div class="skill-bar-bg">
                                            <div class="skill-bar-progress html-bar"></div>
                                        </div>
                                    </div>

                                    <!-- Skill Bar Item -->
                                    <div class="skill-bar-item">
                                        <!-- CSS bar -->
                                        <label class="skill-label">Bootstrap <span>90%</span></label>
                                        <div class="skill-bar-bg">
                                            <div class="skill-bar-progress bootstrap-bar"></div>
                                        </div>
                                    </div>

                                    <!-- Skill Bar Item -->
                                    <div class="skill-bar-item">
                                        <!-- Bootstrap bar -->
                                        <label class="skill-label">Javascript <span>85%</span></label>
                                        <div class="skill-bar-bg">
                                            <div class="skill-bar-progress js-bar"></div>
                                        </div>
                                    </div>

                                    <!-- Skill Bar Item -->
                                    <div class="skill-bar-item">
                                        <!-- Javascript bar -->
                                        <label class="skill-label">PHP <span>80%</span></label>
                                        <div class="skill-bar-bg">
                                            <div class="skill-bar-progress php-bar"></div>
                                        </div>
                                    </div>

                                    <!-- Skill Bar Item -->
                                    <div class="skill-bar-item">
                                        <!-- WordPress bar -->
                                        <label class="skill-label">WordPress <span>90%</span></label>
                                        <div class="skill-bar-bg">
                                            <div class="skill-bar-progress wordpress-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Progess-bar End -->
                            </div>
                        </div>
                        <!-- Skill row End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience & Skill Section End  -->


        <!-- Services Section Start  -->
        <section id="services">
            <div class="container">
                <div class="row section-layout services-section">
                    <div class="col-12 col-xm-12 col-sm-12 col-md-12">
                        <div class="section-title-box">
                            <!-- Section Title -->
                            <h3 class="section-title">Services</h3>
                            <div class="section-divider-responsive"></div>
                        </div>
                    </div>
                    <!-- Experience Content -->
                    <div class="col-12 col-xm-12 col-sm-12 col-md-12">
                        <!-- Experience Row Start -->
                        <div class="row responsive-row">
                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa fa-code"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">PSD To HTML</h5>
                                    <p class="services-dsc">I'll convert your PSD design into a fully responsive and pixel-perfect HTML website, ensuring it's both functional and visually attractive</p>
                                </div>
                            </div>

                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa-wordpress"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">WordPress Website</h5>
                                    <p class="services-dsc">WordPress is suitable for businesses of all sizes. I can build the perfect website for your business, according to your specific requirements.</p>
                                </div>
                            </div>

                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">Landing Page</h5>
                                    <p class="services-dsc">A landing page is a great way to showcase your products. I can help you create the best landing page website</p>
                                </div>
                            </div>

                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa-rocket" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">Speed Optimization</h5>
                                    <p class="services-dsc">Enhancing website speed is a critical aspect of web performance, and I specialize in optimizing slow websites for optimal performance.</p>
                                </div>
                            </div>

                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">E-Commerce Website</h5>
                                    <p class="services-dsc">With extensive experience in web development, I have created various websites. I can assist you in creating the ideal e-commerce website.</p>
                                </div>
                            </div>

                            <div class="col-4 col-xm-12 col-sm-12">
                                <!-- Service item -->
                                <div class="services-item-box">
                                    <div class="services-icon-box">
                                        <a href="#">
                                            <i class="fa fa-envelope-open-o"></i>
                                        </a>
                                    </div>
                                    <h5 class="services-title">Email Template</h5>
                                    <p class="services-dsc">A beautiful template can help you attract visitors. I will create a custom design that is not only functional but also visually stunning.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Experience Row End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End  -->


        <!-- Portfolio Section Start -->
        <section id="portfolio">
            <div class="container">
                <div class="row section-layout portfolio-section">
                    <div class="col-12 col-xm-12 col-sm-12 col-md-12">
                        <div class="section-title-box portfolio-title">
                            <!-- Section Title -->
                            <h3 class="section-title">Portfolio</h3>
                            <div class="section-divider-responsive"></div>
                        </div>
                    </div>
                    <!-- Portfolio items row Start -->
                    <div class="row">
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item portfolio-item-resposive">
                                <img src="images/portfolio/portfolio-img-01.png" class="img-fluid" alt="Portfolio Image">
                                <a href="https://nahidmahmud.com/portfolio/portfolio-website-01/" target="_blank">
                                    <div class="portfolio-item-hover">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">ElderlyCare Website</h4>
                                            <p class="portfolio-item-label">WordPress, Elementor</p>        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item portfolio-item-resposive">
                                <img src="images/portfolio/portfolio-img-02.png" class="img-fluid" alt="Portfolio Image">
                                <a href="https://nahidmahmud.com/portfolio/portfolio-website-02" target="_blank">
                                    <div class="portfolio-item-hover">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">Business Website</h4>
                                            <p class="portfolio-item-label">WordPress, Elementor</p>        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item">
                                <img src="images/portfolio/portfolio-img-03.png" class="img-fluid" alt="Portfolio Image">
                                <div class="portfolio-item-hover">
                                    <a href="https://nahidmahmud.com/portfolio/portfolio-website-03" target="_blank">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">Modern Baking Website</h4>
                                            <p class="portfolio-item-label">WordPress, Elementor</p>        
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item portfolio-item-resposive">
                                <img src="images/portfolio/portfolio-img-05.png" class="img-fluid" alt="Portfolio Image">
                                <div class="portfolio-item-hover">
                                   <a href="https://nahidmahmud.com/portfolio/portfolio-website-04" target="_blank">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">Health & Beauty Website</h4>
                                            <p class="portfolio-item-label">WordPress, Elementor</p>        
                                        </div>
                                   </a>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item portfolio-item-resposive">
                                <img src="images/portfolio/portfolio-img-04.png" class="img-fluid" alt="Portfolio Image">
                                <a href="https://nahidmahmud.com/portfolio/portfolio-website-05" target="_blank">
                                    <div class="portfolio-item-hover">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">Repairing Website</h4>
                                            <p class="portfolio-item-label">WordPress, Elementor</p>        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-4 col-xm-12 col-sm-6 col-md-4 portfolio-gap">
                            <div class="portfolio-item portfolio-item-resposive">
                                <img src="images/portfolio/portfolio-img-06.png" class="img-fluid" alt="Portfolio Image">
                                <a href="https://nahid-mahmud-1.github.io/lawyer-and-Attorney-website/" target="_blank">
                                    <div class="portfolio-item-hover">
                                        <div class="portfolio-item-content">
                                            <h4 class="portfolio-item-title">Attorney Website</h4>
                                            <p class="portfolio-item-label">HTML, CSS & Bootstrap</p>        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                            
                    </div>
                    <!-- Portfolio items row End -->
                </div>
            </div>
        </section>
        <!-- Portfolio Section End -->


        <!-- Contact Section Start -->
        <section id="contact">
            <div class="container">
                <div class="row section-layout">
                    <div class="col-12 col-xm-12 col-sm-12 col-md-12">
                        <div class="section-title-box portfolio-title">
                            <!-- Section Title -->
                            <h3 class="section-title">Get in touch</h3>
                            <div class="section-divider-responsive"></div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="col-6 col-xm-12 col-sm-12 col-md-12">
                        <div class="form-container">
                            <form action="" method="" class="form">
                                <div class="form-group field-inline">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group field-inline">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="form-control" required>
                                </div>
                                <div class="form-group">
                                        <label for="">Message</label>
                                    <textarea name="mssage" id="" rows="10" class="form-control form-message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-button">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info Column -->
                    <div class="col-6 col-xm-12 col-sm-12 col-md-12">
                        <div class="row responsive-row">
                            <div class="col-12 col-xm-12 col-sm-12">
                                <div class="contact-info-text">
                                    <p>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Row Start -->
                        <div class="row responsive-row">
                            <div class="col-6 col-xm-12 col-sm-12">
                                <!-- Info item -->
                                <div class="contact-info-box">
                                    <h6 class="contact-info-icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </h6>
                                    <h5 class="contact-info-label">Location</h5>
                                    <p class="contact-info-dsc">Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="col-6 col-xm-12 col-sm-12">
                                 <!-- Info item -->
                                 <div class="contact-info-box">
                                    <h6 class="contact-info-icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </h6>
                                    <h5 class="contact-info-label">Phone</h5>
                                    <p class="contact-info-dsc">
                                        <a href="tel:+8801995359577">+8801995359577</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-6 col-xm-12 col-sm-12">
                                 <!-- Info item -->
                                 <div class="contact-info-box">
                                    <h6 class="contact-info-icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </h6>
                                    <h5 class="contact-info-label">Email</h5>
                                    <p class="contact-info-dsc">
                                        <a href="mailto:nahid.mahmud538@gmail.com">nahid.mahmud538@gmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-6 col-xm-12 col-sm-12">
                                <!-- Info item -->
                                <div class="contact-info-box">
                                   <h6 class="contact-info-icon">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                   </h6>
                                   <h5 class="contact-info-label">Freelance</h5>
                                   <p class="contact-info-dsc">Available</p>
                               </div>
                           </div>
                        </div>
                        <!-- Contact Info Row End -->
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Contact Section End -->


        <!-- Footer Section Start -->
        <footer class="footer-section">
            <div class="container footer-content">
                <div class="row">
                    <div class="col-12 col-xm-12">
                        <p>Copyright © 2021 Nahid Mahmud</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


        <!-- JS/JQ File -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Theme Main JS File -->
        <script src="js/main.js"></script>
    </body>
</html>