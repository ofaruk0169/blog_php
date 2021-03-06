<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/32350abd12.js" crossorigin="anonymous"></script>

    <!-- google fonts  -->

    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">



    <!-- custom styling  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Register</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


            

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>

            
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>

            
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>

            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>

            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign in</a></p>

        </form>
    </div>

    <!-- Jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
   

    <!-- custom script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>