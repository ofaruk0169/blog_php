<?php 
include('path.php'); 
include(ROOT_PATH . "/app/database/db.php");

?>
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

    <title>Blog</title>
</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- page wrapper  -->
    <div class="page-wrapper">

        <!-- post slider  -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <div class="post clearfix">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far fa-calendar"> Aug 19, 2020</i>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far fa-calendar"> Aug 19, 2020</i>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far fa-calendar"> Aug 19, 2020</i>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far fa-calendar"> Aug 19, 2020</i>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far fa-calendar"> Aug 19, 2020</i>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- end post slider  -->

        <!-- content -->

        <div class="content clearfix">

            <!-- main content  -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">This is a title</a></h2>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far calendar"> Aug 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Nulla atque unde dolorum nihil facere a corporis aliquam esse ea consequatur? Nemo eum fuga aspernatur, 
                            alias fugiat rerum nisi pariatur culpa.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">This is a title</a></h2>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far calendar"> Aug 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Nulla atque unde dolorum nihil facere a corporis aliquam esse ea consequatur? Nemo eum fuga aspernatur, 
                            alias fugiat rerum nisi pariatur culpa.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">This is a title</a></h2>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far calendar"> Aug 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Nulla atque unde dolorum nihil facere a corporis aliquam esse ea consequatur? Nemo eum fuga aspernatur, 
                            alias fugiat rerum nisi pariatur culpa.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">This is a title</a></h2>
                        <i class="far fa-user">Omar Faruk</i>
                        &nbsp;
                        <i class="far calendar"> Aug 20, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Nulla atque unde dolorum nihil facere a corporis aliquam esse ea consequatur? Nemo eum fuga aspernatur, 
                            alias fugiat rerum nisi pariatur culpa.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- end of main content  -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poem</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

            </div>
        </div>


    </div>

     <!-- end page wrapper  -->

    <!-- footer -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!-- end of footer -->

    <!-- Jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!-- click carousel  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- custom script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>