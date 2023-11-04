<?php
    include "includes/db.php";
    session_start();
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
        <title>Admin Login</title>
    </head>
    <body>

        <?php
        
            // Getting Login Data From The Database
            $sql = "SELECT * FROM users";
            $fetch_query = mysqli_query($db, $sql);

            while($row = mysqli_fetch_array($fetch_query)){
                $valid_user_email = $row['user_email'];
                $valid_user_password = $row['user_password'];
            }
        
        ?>

        <!-- Login Section Start -->
        <section class="login-section">
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="login-form">
                            <div class="login-form-logo">
                                <h2>Nahid</h2>
                            </div>
                            <!-- Login Form Start -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="user-email" class="form-label">Email</label>
                                    <input type="email" name="user_email" id="user-email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="user-password" class="form-label">Password</label>
                                    <input type="password" name="user_password" id="user-password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="admin_login_button" id="admin-login-button" value="Login" class="form-control admin-login-button">
                                </div>
                            </form>
                            <!-- Login Form End -->
                            <?php
                                if( isset($_POST['admin_login_button']) ){
                                    // variable to store login form data
                                    $_SESSION['user_email'] = mysqli_real_escape_string($db, $_POST['user_email']);

                                    $_SESSION['user_password'] = mysqli_real_escape_string($db, $_POST['user_password']);

                                    
                                    // Hassed Password
                                    $user_hashed_password = sha1($_SESSION['user_password']);

                                    
                                    if( $_SESSION['user_email'] == $valid_user_email && $user_hashed_password == $valid_user_password ){

                                        // Redirect to login admin dashboard
                                        header("Location: dashboard.php");

                                    }
                                    else{

                                        session_unset();
                                        session_destroy();

                                        // Redirect to login page
                                        header("Location: index.php");

                                    }
                                    
                                }

                                if( isset($_SESSION['user_email']) ){

                                    // Redirect to login admin dashboard
                                    header("Location: dashboard.php");

                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </section>
        <!-- Login Section End -->





        <!-- Theme JS File -->
        <script src="js/main.js"></script>
    </body>
</html>