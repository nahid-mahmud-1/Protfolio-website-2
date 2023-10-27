<?php
    include "includes/db.php";
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
                                            <input type="color" name="theme-main-color" id="theme-main-color" value="<?php echo $theme_main_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-heading-color" class="form-label">Theme Heading Color</label>
                                            <input type="color" name="theme-heading-color" id="theme-heading-color" value="<?php echo $theme_heading_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-1" class="form-label">Theme Text Color 1</label>
                                            <input type="color" name="theme-text-color-1" id="theme-text-color-1" value="<?php echo $theme_text_color_1;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-2" class="form-label">Theme Text Color 2</label>
                                            <input type="color" name="theme-text-color-2" id="theme-text-color-2" value="<?php echo $theme_text_color_2;?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-bg-color" class="form-label">Theme BG Color</label>
                                            <input type="color" name="theme-bg-color" id="theme-bg-color" value="<?php echo $theme_bg_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-color" class="form-label">Theme Button Color</label>
                                            <input type="color" name="theme-button-color" id="theme-button-color" value="<?php echo $theme_button_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-hover" class="form-label">Theme Button Hover</label>
                                            <input type="color" name="theme-button-hover" id="theme-button-hover" value="<?php echo $theme_button_hover;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-border-color-1" class="form-label">Theme Border Color 1</label>
                                            <input type="color" name="theme-border-color-1" id="theme-border-color-1" value="<?php echo $theme_button_border_color_1;?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-item-box-color" class="form-label">Theme Item Box Color</label>
                                            <input type="color" name="theme-item-box-color" id="theme-item-box-color" value="<?php echo $theme_item_box_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-item-box-hover" class="form-label">Theme Item Box Hover</label>
                                            <input type="color" name="theme-item-box-hover" id="theme-item-box-hover" value="<?php echo $theme_item_box_hover;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-color" class="form-label">Contact Form Button Color</label>
                                            <input type="color" name="contact-form-button-color" id="contact-form-button-color" value="<?php echo $contact_form_button_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-hover" class="form-label">Contact Form Button Hover</label>
                                            <input type="color" name="contact-form-button-hover" id="contact-form-button-hover" value="<?php echo $contact_form_button_hover;?>" class="form-control">
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="theme-white" class="form-label">Theme White</label>
                                                <input type="color" name="theme-white" id="theme-white" value="<?php echo $theme_white;?>" class="form-control">
                                            </div>

                                            <div class="col-3">
                                                <label for="theme-black" class="form-label">Theme Black</label>
                                                <input type="color" name="theme-black" id="theme-black" value="<?php echo $theme_black;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="row">
                                        <input type="submit" name="option-submit-button" id="option-submit-button" value="Save" class="option-submit-button">
                                    </div>
                                </form>

                                <?php
                                    
                                    if( isset($_POST['option-submit-button']) ){
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
                                            echo "Saved";
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

                <!-- Header Content Section Row -->
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
                                            <input type="color" name="theme-main-color" id="theme-main-color" value="<?php echo $theme_main_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-heading-color" class="form-label">Theme Heading Color</label>
                                            <input type="color" name="theme-heading-color" id="theme-heading-color" value="<?php echo $theme_heading_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-1" class="form-label">Theme Text Color 1</label>
                                            <input type="color" name="theme-text-color-1" id="theme-text-color-1" value="<?php echo $theme_text_color_1;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-text-color-2" class="form-label">Theme Text Color 2</label>
                                            <input type="color" name="theme-text-color-2" id="theme-text-color-2" value="<?php echo $theme_text_color_2;?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-bg-color" class="form-label">Theme BG Color</label>
                                            <input type="color" name="theme-bg-color" id="theme-bg-color" value="<?php echo $theme_bg_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-color" class="form-label">Theme Button Color</label>
                                            <input type="color" name="theme-button-color" id="theme-button-color" value="<?php echo $theme_button_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-button-hover" class="form-label">Theme Button Hover</label>
                                            <input type="color" name="theme-button-hover" id="theme-button-hover" value="<?php echo $theme_button_hover;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-border-color-1" class="form-label">Theme Border Color 1</label>
                                            <input type="color" name="theme-border-color-1" id="theme-border-color-1" value="<?php echo $theme_button_border_color_1;?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="theme-item-box-color" class="form-label">Theme Item Box Color</label>
                                            <input type="color" name="theme-item-box-color" id="theme-item-box-color" value="<?php echo $theme_item_box_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="theme-item-box-hover" class="form-label">Theme Item Box Hover</label>
                                            <input type="color" name="theme-item-box-hover" id="theme-item-box-hover" value="<?php echo $theme_item_box_hover;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-color" class="form-label">Contact Form Button Color</label>
                                            <input type="color" name="contact-form-button-color" id="contact-form-button-color" value="<?php echo $contact_form_button_color;?>" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="contact-form-button-hover" class="form-label">Contact Form Button Hover</label>
                                            <input type="color" name="contact-form-button-hover" id="contact-form-button-hover" value="<?php echo $contact_form_button_hover;?>" class="form-control">
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="theme-white" class="form-label">Theme White</label>
                                                <input type="color" name="theme-white" id="theme-white" value="<?php echo $theme_white;?>" class="form-control">
                                            </div>

                                            <div class="col-3">
                                                <label for="theme-black" class="form-label">Theme Black</label>
                                                <input type="color" name="theme-black" id="theme-black" value="<?php echo $theme_black;?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="row">
                                        <input type="submit" name="option-submit-button" id="option-submit-button" value="Save" class="option-submit-button">
                                    </div>
                                </form>

                                <?php
                                    
                                    if( isset($_POST['option-submit-button']) ){
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
                                            echo "Saved";
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
            </div>
        </section>
        <!-- Theme Option Section End -->





        <!-- Theme JS File -->
        <script src="js/main.js"></script>
    </body>
</html>