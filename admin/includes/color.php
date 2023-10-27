<?php
    //DB Connection 
    include "db.php";

    // Session Start
    session_start();

    // Fetching Color's data
    $sql = "SELECT * FROM colors";
    $sql_query = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($sql_query)){
        // variable to store data
        $_SESSION['id']                             = $row['id'];
        $_SESSION['theme_main_color']               = $row['theme_main_color'];
        $_SESSION['theme_heading_color']            = $row['theme_heading_color'];
        $_SESSION['theme_text_color_1']             = $row['theme_text_color_1'];
        $_SESSION['theme_text_color_2']             = $row['theme_text_color_2'];
        $_SESSION['theme_bg_color']                 = $row['theme_bg_color'];
        $_SESSION['theme_button_color']             = $row['theme_button_color'];
        $_SESSION['theme_button_hover']             = $row['theme_button_hover'];
        $_SESSION['theme_button_border_color_1']    = $row['theme_border_color_1'];
        $_SESSION['theme_item_box_color']           = $row['theme_item_box_color'];
        $_SESSION['theme_item_box_hover']           = $row['theme_item_box_hover'];
        $_SESSION['contact_form_button_color']      = $row['contact_form_button_color'];
        $_SESSION['contact_form_button_hover']      = $row['contact_form_button_hover'];
        $_SESSION['theme_white']                    = $row['theme_white'];
        $_SESSION['theme_black']                    = $row['theme_black'];
    };

?>