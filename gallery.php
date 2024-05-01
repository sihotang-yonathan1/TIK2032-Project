<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    
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
    <div class="flex flex-col h-display-screen">
        <!-- Header -->
        <?php require_once('./template/component/header.php') ?>

        <!-- Main content: flex-row -->
        <div class="flex flex-col main-content-container px-4% flex-grow-1">
            <div class="flex flex-col align-items-center">
                <h3 class="font-2x-lg">Image List</h3>
                <p class="font-sm">This image is searched from google</p>
            </div>
            
            <div class="flex flex-col">
                <div class="grid grid-col-1/3 grid-row-auto gap-0.5" id="image-list-container">
                </div>
            </div>
        </div>

        <!-- Footer: flex-col -->
        <?php require_once('./template/component/footer.php') ?>
    </div>
    
    <script>
        const data = [{
            'category': ['os'],
            'url': 'https://www.cnet.com/a/img/resize/0ec27620d26374ae7c73e17393ed201651872b74/hub/2020/01/13/6e566b3e-faef-4ffd-9909-01acca997b6d/windows-10-cropped-for-promo.png?auto=webp&fit=crop&height=1200&width=1200',
            'title': 'Windows 10 Wallpaper'
        }, {
            'category': ['os'],
            'url': 'https://assets-prd.ignimgs.com/2021/06/25/windows-11-button-02-1624642130619.jpg',
            'title': 'Windows 11'
        }, {
            'category': ['os'],
            'url': 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7AKGQ-LqAMFkV4ZY7lbxz7rlmSzPyqGF8ays21CWM8A&s',
            'title': 'Ubuntu'
        }, {
            'category': ['os'],
            'url': 'https://ubuntuhandbook.org/wp-content/uploads/2024/03/fedora-logo.webp',
            'title': 'Fedora'
        }, {
            'category': ['os'],
            'url': 'https://cdn0.iconfinder.com/data/icons/flat-round-system/512/archlinux-512.png',
            'title': 'Arch'
        }, {
            'category': ['os'],
            'url': 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm46sfZrpJW91LkiAcWHqfzrOX-Xz8MhTYAIxvvIRWJA&s',
            'title': 'Kali'
        }, {
            'category': ['os'],
            'url': 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDskGTX4CHy-rFbKBUJ0c99rWVNAm-KzCiWOZYuCqq2Q&s',
            'title': 'Debian'
        }, {
            'category': ['os'],
            'url': 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Gentoo_Linux_Signet.svg/2048px-Gentoo_Linux_Signet.svg.png',
            'title': 'Gentoo'
        }, {
            'category': ['os'],
            'url': 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Manjaro-logo.svg/2048px-Manjaro-logo.svg.png',
            'title': 'Manjaro'
        }]
        let imageListContainer = document.querySelector('#image-list-container')
        for (let imageInfo of data){
            let imageElement = document.createElement('div')
            imageElement.innerHTML = `
                <div class="w-full">
                    <img 
                        class="gallery-image-container aspect-ratio-1/1 max-width-100%" 
                        src="${imageInfo.url}" 
                        alt="${imageInfo.name}"
                        loading="lazy"
                    >
                </div>
                `
            imageListContainer.appendChild(imageElement)
        }
    </script>
</body>
</html>