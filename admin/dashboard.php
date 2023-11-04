<?php
    session_start();

    include "includes/db.php";
    ob_start();

    // Getting Login Data From The Database
    $sql = "SELECT * FROM users";
    $fetch_query = mysqli_query($db, $sql);

    while($row = mysqli_fetch_array($fetch_query)){
        $valid_user_name        = $row['user_name'];
        $valid_user_email       = $row['user_email'];
        $valid_user_password    = $row['user_password'];
        $valid_user_profile     = $row['user_profile'];
    }

    if( $_SESSION['user_email'] !== $valid_user_email ){

        session_unset();
        session_destroy();

        // Redirect to login page
        header("Location: index.php");

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
        <!-- Theme Main CSS File -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <!-- Header Section Start -->
        <section class="admin-header-section">
            <div class="container">
                <div class="row admin-content">
                    <div class="col-10">
                        <div class="admin-logo">
                            <h2>Dashboard</h2>
                        </div>  
                    </div>

                    <div class="col-2">
                        <div class="user-profile-box">
                            <div class="profile">
                                <?php
                                    if($valid_user_profile){
                                        ?>

                                        <!-- Profile Image -->
                                        <img src="img/<?php echo $valid_user_profile;?>" alt="Profile Image" class="profile-image" class="img-fluid">

                                        <?php
                                    }
                                    else{
                                        ?>
                                        <!-- Profile Image -->
                                        <img src="img/admin-profile-image-v1.png" alt="Profile Image" class="profile-image" class="img-fluid">
                                        <?php
                                    }
                                
                                ?>
                                
                                <!-- Profile Details -->
                                <div class="profile-details">
                                    <!-- username -->
                                    <h5 class="user-name"><strong style="font-weight: 500;">Name:</strong> <?php echo $valid_user_name?></h5>
                                    <!-- email -->
                                    <h5 class="user-email"><strong style="font-weight: 500;">Email:</strong> <?php echo $valid_user_email?></h5>
                                    <!-- Logout -->
                                    <div class="logout-box">
                                        <a href="logout.php"><i class="fa fa-user"></i>Logout</a>
                                    </div>
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section End -->


        <!-- Header Section End -->
        <!-- Theme Option Section Start -->
        <section class="theme-option-section">
            <div class="container">
                <!-- Color Section Row -->
                <div class="row">
                    <div class="col-12">
                        <!-- Option Box Start -->
                        <div class="option-box">
                            <!-- Option Title -->
                            <div class="option-title">
                                <h5>Color</h5>
                            </div>
                            <?php

                                // Fetching Color's data
                                $sql = "SELECT * FROM colors";
                                $sql_query = mysqli_query($db, $sql);

                                while($row = mysqli_fetch_assoc($sql_query)){
                                    // variable to store data
                                    $id                             = $row['id'];
                                    $theme_main_color               = $row['theme_main_color'];
                                    $theme_heading_color            = $row['theme_heading_color'];
                                    $theme_text_color_1             = $row['theme_text_color_1'];
                                    $theme_text_color_2             = $row['theme_text_color_2'];
                                    $theme_bg_color                 = $row['theme_bg_color'];
                                    $theme_button_color             = $row['theme_button_color'];
                                    $theme_button_hover             = $row['theme_button_hover'];
                                    $theme_button_border_color_1    = $row['theme_border_color_1'];
                                    $theme_item_box_color           = $row['theme_item_box_color'];
                                    $theme_item_box_hover           = $row['theme_item_box_hover'];
                                    $contact_form_button_color      = $row['contact_form_button_color'];
                                    $contact_form_button_hover      = $row['contact_form_button_hover'];
                                    $theme_white                    = $row['theme_white'];
                                    $theme_black                    = $row['theme_black'];
                                };

                            ?>
                            <!-- Option Form Start -->
                            <div class="option-form-box">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-main-color" class="form-label">Theme Main Color</label>
                                            <input type="color" name="theme-main-color" id="theme-main-color" value="<?php echo $theme_main_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-heading-color" class="form-label">Theme Heading Color</label>
                                            <input type="color" name="theme-heading-color" id="theme-heading-color" value="<?php echo $theme_heading_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-1" class="form-label">Theme Text Color 1</label>
                                            <input type="color" name="theme-text-color-1" id="theme-text-color-1" value="<?php echo $theme_text_color_1;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-2" class="form-label">Theme Text Color 2</label>
                                            <input type="color" name="theme-text-color-2" id="theme-text-color-2" value="<?php echo $theme_text_color_2;?>" class="form-control color-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-bg-color" class="form-label">Theme BG Color</label>
                                            <input type="color" name="theme-bg-color" id="theme-bg-color" value="<?php echo $theme_bg_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-color" class="form-label">Theme Button Color</label>
                                            <input type="color" name="theme-button-color" id="theme-button-color" value="<?php echo $theme_button_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-hover" class="form-label">Theme Button Hover</label>
                                            <input type="color" name="theme-button-hover" id="theme-button-hover" value="<?php echo $theme_button_hover;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-border-color-1" class="form-label">Theme Border Color 1</label>
                                            <input type="color" name="theme-border-color-1" id="theme-border-color-1" value="<?php echo $theme_button_border_color_1;?>" class="form-control color-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-item-box-color" class="form-label">Theme Item Box Color</label>
                                            <input type="color" name="theme-item-box-color" id="theme-item-box-color" value="<?php echo $theme_item_box_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-item-box-hover" class="form-label">Theme Item Box Hover</label>
                                            <input type="color" name="theme-item-box-hover" id="theme-item-box-hover" value="<?php echo $theme_item_box_hover;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-color" class="form-label">Contact Form Button Color</label>
                                            <input type="color" name="contact-form-button-color" id="contact-form-button-color" value="<?php echo $contact_form_button_color;?>" class="form-control color-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-hover" class="form-label">Contact Form Button Hover</label>
                                            <input type="color" name="contact-form-button-hover" id="contact-form-button-hover" value="<?php echo $contact_form_button_hover;?>" class="form-control color-control">
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="theme-white" class="form-label">Theme White</label>
                                                <input type="color" name="theme-white" id="theme-white" value="<?php echo $theme_white;?>" class="form-control color-control">
                                            </div>

                                            <div class="col-3">
                                                <label for="theme-black" class="form-label">Theme Black</label>
                                                <input type="color" name="theme-black" id="theme-black" value="<?php echo $theme_black;?>" class="form-control color-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="row">
                                        <input type="submit" name="color-submit-button" id="option-submit-button" value="Save" class="option-submit-button">
                                    </div>
                                </form>

                                <?php
                                    
                                    if( isset($_POST['color-submit-button']) ){
                                        // variable to store data
                                        $theme_main_color               = $_POST['theme-main-color'];
                                        $theme_heading_color            = $_POST['theme-heading-color'];
                                        $theme_text_color_1             = $_POST['theme-text-color-1'];
                                        $theme_text_color_2             = $_POST['theme-text-color-2'];
                                        $theme_bg_color                 = $_POST['theme-bg-color'];
                                        $theme_button_color             = $_POST['theme-button-color'];
                                        $theme_button_hover             = $_POST['theme-button-hover'];
                                        $theme_button_border_color_1    = $_POST['theme-border-color-1'];
                                        $theme_item_box_color           = $_POST['theme-item-box-color'];
                                        $theme_item_box_hover           = $_POST['theme-item-box-hover'];
                                        $contact_form_button_color      = $_POST['contact-form-button-color'];
                                        $contact_form_button_hover      = $_POST['contact-form-button-hover'];
                                        $theme_white                    = $_POST['theme-white'];
                                        $theme_black                    = $_POST['theme-black'];


                                        // SQL to update data
                                        $sql = "UPDATE colors SET theme_main_color = '$theme_main_color', theme_heading_color = '$theme_heading_color', theme_text_color_1 = '$theme_text_color_1', theme_text_color_2 = '$theme_text_color_2', theme_bg_color = '$theme_bg_color', theme_button_color = '$theme_button_color', theme_button_hover = '$theme_button_hover', theme_border_color_1 = '$theme_button_border_color_1', theme_item_box_color = '$theme_item_box_color', theme_item_box_hover = '$theme_item_box_hover', contact_form_button_color = '$contact_form_button_color', contact_form_button_hover = '$contact_form_button_hover', theme_white = '$theme_white', theme_black = '$theme_black' WHERE id = '$id'";
                                        
                                        $update_query = mysqli_query($db, $sql);

                                        if($update_query){

                                            header("Location: dashboard.php");
                                        }
                                        else{
                                            echo "Something went wrong, please try again";
                                        }
                                    }
                                    
                                
                                ?>
                            </div>
                            <!-- Option Form End -->
                        </div>
                        <!-- Option Box End -->
                    </div>
                </div>

                <!-- Header Content Row -->
                <div class="row">
                    <div class="col-12">
                        <!-- Option Box Start -->
                        <div class="option-box">
                            <!-- Option Title -->
                            <div class="option-title">
                                <h5>Header</h5>
                            </div>
                            <?php

                                // Fetching Color's data
                                $sql = "SELECT * FROM header";
                                $get_query = mysqli_query($db, $sql);

                                while($row = mysqli_fetch_assoc($get_query)){
                                    $id                 = $row['id'];
                                    $header_logo        = $row['header_logo'];
                                    $nav_menu           = $row['nav_menu'];
                                    $nav_menu_anchors   = $row['nav_menu_anchors'];
                                };

                            ?>
                            <!-- Option Form Start -->
                            <div class="option-form-box">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="header-logo" class="form-label">Logo</label>
                                                <input type="text" name="header_logo" id="header-logo" value="<?php echo $header_logo;?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="nav-menu" class="form-label">Nav Menu</label>
                                                <input type="text" name="nav_menu" id="nav-menu" value="<?php echo $nav_menu;?>" class="form-control">
                                                <p class="info-note">Please separate every item by comma(,).</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="nav-menu-anchors" class="form-label">Nav Menu Anchors</label>
                                                <input type="text" name="nav_menu_anchors" id="nav-menu-anchors" value="<?php echo $nav_menu_anchors;?>" class="form-control">
                                                <p class="info-note">Please separate every item by comma(,).</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <input type="submit" name="header-submit-button" id="option-submit-button" value="Save" class="option-submit-button">
                                    </div>
                                </form>

                                <?php
                                    
                                    if( isset($_POST['header-submit-button']) ){
                                        // variable to store data
                                        $header_logo    = $_POST['header_logo'];
                                        $nav_menu       = $_POST['nav_menu'];
                                        
                                        $update_sql = "UPDATE header SET header_logo = '$header_logo', nav_menu = '$nav_menu' WHERE id = '$id'";
                                        $update_query = mysqli_query($db, $update_sql);

                                        if($update_query){
                                            echo '<div class="alert alert-success">Saved</div>'; 
                                            header("Location: dashboard.php");
                                        }
                                        else{
                                            echo '<div class="alert alert-error">Error, could not able to update.</div>';
                                        }
                                    }
                                    
                                
                                ?>
                            </div>
                            <!-- Option Form End -->
                        </div>
                        <!-- Option Box End -->
                    </div>
                </div>

                <!-- Intro Content Row -->
                <div class="row">
                    <div class="col-12">
                        <!-- Option Box Start -->
                        <div class="option-box">
                            <!-- Option Title -->
                            <div class="option-title">
                                <h5>Intro</h5>
                            </div>
                            <?php

                                // Fetching Color's data
                                $sql = "SELECT * FROM intro";
                                $get_query = mysqli_query($db, $sql);

                                while($row = mysqli_fetch_assoc($get_query)){
                                    $intro_id               = $row['id'];
                                    $person_name            = $row['person_name'];
                                    $job_title              = $row['job_title'];
                                    $grettings              = $row['grettings'];
                                    $hero_title             = $row['hero_title'];
                                    $hero_description       = $row['hero_description'];
                                    $hero_button_name       = $row['hero_button_name'];
                                    // Profile Image
                                    $server_profile_image   = $row['profile_image'];
                                };

                            ?>
                            <!-- Option Form Start -->
                            <div class="option-form-box">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="profile-image" class="form-label">Profile Image</label>
                                                <input type="file" name="profile_image" id="profile-image" value="" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="person-name" class="form-label">Person Name</label>
                                                <input type="text" name="person_name" id="person-name" value="<?php echo $person_name;?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="job-title" class="form-label">Job Title</label>
                                                <input type="text" name="job_title" id="job-title" value="<?php echo $job_title;?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="grettings" class="form-label">Grettings</label>
                                                <input type="text" name="grettings" id="grettings" value="<?php echo $grettings;?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="hero-title" class="form-label">Hero Title</label>
                                                <input type="text" name="hero_title" id="hero-title" value="<?php echo $hero_title;?>" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="hero-description" class="form-label">Hero Description</label>
                                                <textarea name="hero_description" id="hero-description" cols="30" rows="10" class="form-control"><?php echo $hero_description;?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="hero-button-name" class="form-label">Hero Button Name</label>
                                                <input type="text" name="hero_button_name" id="hero-button-name" value="<?php echo $hero_button_name;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <input type="submit" name="intro-submit-button" id="intro-submit-button" value="Save" class="option-submit-button">
                                    </div>
                                </form>

                                <?php
                                    
                                    if( isset($_POST['intro-submit-button']) ){
                                        // variable to store data
                                        $person_name        = mysqli_real_escape_string($db, $_POST['person_name']);
                                        $job_title          = mysqli_real_escape_string($db, $_POST['job_title']);
                                        $grettings          = mysqli_real_escape_string($db, $_POST['grettings']);
                                        $hero_title         = mysqli_real_escape_string($db, $_POST['hero_title']);
                                        $hero_description   = mysqli_real_escape_string($db, $_POST['hero_description']);
                                        $hero_button_name   = mysqli_real_escape_string($db, $_POST['hero_button_name']);
                                        // Profile Image
                                        $profile_image_name             = mysqli_real_escape_string($db, $_FILES['profile_image']['name']);
                                        $profile_image_size             = mysqli_real_escape_string($db, $_FILES['profile_image']['size']);
                                        $profile_image_init_ext         = explode(".", $profile_image_name);
                                        $profile_image_ext              = strtolower(end($profile_image_init_ext));
                                        $allowed_image_ext              = ['jpg', 'jpeg', 'png'];
                                        // tmp path
                                        $profile_image_tmp              =$_FILES['profile_image']['tmp_name'];

                                        if( !empty($profile_image_name) ){

                                            if( in_array($profile_image_ext, $allowed_image_ext) ){

                                                if( $profile_image_size > 1048576 ){
                                                    echo '<div class="alert alert-error">This image is too large, pleause use a compressed image.</div>';
                                                }
                                                else{
    
                                                    $profile_image = rand(1, 999999999) ."-" . date('d-m-Y') . "-" . $profile_image_name;
                                                    echo $profile_image;
    
                                                    $image_uploaded = move_uploaded_file($profile_image_tmp, "../images/$profile_image");
    
                                                    if($image_uploaded){
                                                        
                                                        unlink("../images/$server_profile_image");

                                                        // SQL To Update Intro Data
                                                        $update_sql = "UPDATE intro SET person_name = '$person_name', job_title = '$job_title', grettings = '$grettings', hero_title = '$hero_title', hero_description = '$hero_description', hero_button_name = '$hero_button_name', profile_image = '$profile_image' WHERE id = '$intro_id'";
    
                                                        $update_query = mysqli_query($db, $update_sql);

                                                        if($update_query){
                                                            echo '<div class="alert alert-success">Saved</div>';
                                                            header("Location : dashboard.php");
                                                        }
                                                        else{
                                                            echo '<div class="alert alert-success">Something went wrong!.</div>';
                                                        }
                                                
    
                                                    }
                                                    
                                                }
    
                                            }
                                            else{
                                                echo '<div class="alert alert-error">Sorry, this type of file is not allowed.</div>';
                                            }
                                        }
                                        else{

                                            // SQL To Update Intro Data
                                            $update_sql = "UPDATE intro SET person_name = '$person_name', job_title = '$job_title', grettings = '$grettings', hero_title = '$hero_title', hero_description = '$hero_description', hero_button_name = '$hero_button_name' WHERE id = '$intro_id'";
    
                                            $update_query = mysqli_query($db, $update_sql);

                                            if($update_query){
                                            echo '<div class="alert alert-success">Saved</div>';
                                            header("Location: dashboard.php");
                                            }
                                            else{
                                            echo '<div class="alert alert-success">Something went wrong!.</div>';
                                            }

                                        }
                                        
                                        
                                        
                                        

                                        
                                        // $update_sql = "UPDATE header SET header_logo = '$header_logo', nav_menu = '$nav_menu' WHERE id = '$id'";
                                        // $update_query = mysqli_query($db, $update_sql);

                                        // if($update_query){
                                        //     echo '<div class="alert alert-success">Saved</div>'; 
                                        //     header("Location: dashboard.php");
                                        // }
                                        // else{
                                        //     echo '<div class="alert alert-error">Error, could not able to update.</div>';
                                        // }
                                    }
                                    
                                
                                ?>
                            </div>
                            <!-- Option Form End -->
                        </div>
                        <!-- Option Box End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Theme Option Section End -->





        <!-- Theme JS File -->
        <script src="js/main.js"></script>
    </body>
    <?php 
        ob_end_flush();
    ?>
</html>