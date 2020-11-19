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

    <title>Admin Section - Add Post</title>
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
                <a href="create.php" class="btn btn-big">Add Posts</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Posts</h2>
             
                <form action="create.html" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic" class="text-input">
                            <option value="Poetry">Poetry</option>
                            <option value="Life Lessons">Life Lessons</option>
                        </select>
                    </div>

                    <div>
                       <button type="submit" class="btn btn-big">Add Post</button>
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