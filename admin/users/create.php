<?php include("../../path.php"); ?>

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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add User</title>
</head>
<body>
   
    <!-- admin header here... --> 
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- admin page wrapper  -->
    <div class="admin-wrapper">

        <!-- left sidebar -->

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


        <!-- left-sidebar -->

        <!-- admin content -->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>
             
                <form action="create.html" method="post">
                   
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
        
                    
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
        
                    
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
        
                    
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordConf" class="text-input">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="Rolec" class="text-input">
                            <option value="Author">Author</option>
                            <option value="Admins">Admin</option>
                        </select>
                    </div>


                    <div>
                       <button type="submit" class="btn btn-big">Add User</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- admin content -->


    </div>

     <!-- end page wrapper  -->

    

    <!-- Jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- text editor  -->
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

    <!-- custom script -->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>