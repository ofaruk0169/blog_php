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

    <title>Admin Section - Manage Users</title>
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
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th colspan="2">Action</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Omar</td>
                            <td>Admin</td>
                          
                            <td><a href="#" class="edit">edit</a></td>
                            <td><a href="#" class="delete">delete</a></td>
                            
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Huzaifa</td>
                            <td>Author</td>
                            <td><a href="#" class="edit">edit</a></td>
                            <td><a href="#" class="delete">delete</a></td>
                            
                        </tr>
                    </tbody>
                </table>
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