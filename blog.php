<?php
    $blog_api_url = "http://localhost:80/tugas-4-php-web\TIK2032-Project\backend\api\blog.php";
    $blogData = file_get_contents($blog_api_url);
    $blog_data = json_decode($blogData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
    <link rel="stylesheet" href="./static/css/styles.css">
    <link rel="stylesheet" href="./static/css/utils.css">

    <!-- Utils: root -->
    <link rel="stylesheet" href="./static/css/utils/margin.css">
    <link rel="stylesheet" href="./static/css/utils/padding.css">
    <link rel="stylesheet" href="./static/css/utils/position.css">

    <!-- Utils: display -->
    <link rel="stylesheet" href="./static/css/utils/display/flex.css">
    <link rel="stylesheet" href="./static/css/utils/display/grid.css">

    <!-- Utils: font-styling -->
    <link rel="stylesheet" href="./static/css/fonts/styles.css">
    <link rel="stylesheet" href="./static/css/utils/font/weight.css">

    <!-- <link rel="stylesheet" href="./static/css/fonts/poppins.css"> -->
    <link rel="stylesheet" href="./static/css/fonts/roboto.css">

    <!-- Google Material icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External js -->
    <script src="./static/js/typing.js"></script>

</head>
<body class="poppins">
    <div class="flex flex-col h-screen">
        <?php require_once('./template/component/header.php')?>

        <!-- Main content: flex-col -->
        <div class="flex flex-col main-content-container px-10% flex-wrap flex-grow-1">
            <div class="flex flex-col align-items-center">
                <div>
                    <h3 class="text-center font-2x-lg font-weight-600">Blog List</h3>
                </div>

                <!-- Blog List -->
                <!-- <div id="blog-list">
                </div> -->
                <div id="blog-list">
                    <?php foreach($blog_data as $data):  ?>
                        <div class="blog-element-container">
                        
                            <!-- Blog Title -->
                            <div>
                                <h3 class="font-2x-lg text-center font-weight-500"><?= $data->title ?></h3>
                            </div>
                            
                            <!-- Blog Metadata -->
                            <div class="flex flex-row gap-0.5 justify-content-center">
                                <!-- Upload time -->
                                <div class="flex flex-row align-items-center">
                                    <span class="material-symbols-outlined material-icons">
                                        schedule
                                    </span>
                                    <p class="font-sm">
                                        <?= $data->modified_date ?>
                                    </p>
                                </div>

                                <div class="flex flex-row align-items-center">
                                    <span class="material-symbols-outlined material-icons">
                                        person
                                    </span>
                                    <p class="font-sm">
                                        <?= $data->author ?>
                                    </p>
                                </div>
                            </div>
                            <!-- Blog content -->
                            <div>
                                <?= $data->content ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

       <!-- Footer: flex-col -->
        <?php require_once('./template/component/footer.php') ?>
    </div>

</body>
</html>