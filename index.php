<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <!-- CSS Dependency -->
    <?php require_once('./template/component/css_dependency.php') ?>
    
    <!-- External js -->
    <?php require_once('./template/component/js_head_dependency.php')?>

</head>
<body class="poppins relative flex flex-col h-screen">
    <div class="flex flex-col h-full relative" id="content">
        <?php require_once("./template/component/header.php") ?>

        <div class="flex flex-row px-8% align-items-center justify-content-center main-content-container gap-0.75 py-4% flex-grow-1">
            <!-- Image description -->
            <div class="flex flex-col">
                <!-- Title -->
                <div class="flex justify-content-center">
                    <p class="font-weight-700 font-2x-lg text-center font-2x-lg">Hello!</p>
                </div>

                <!-- Description -->
                <div class="flex flex-col">
                    <p class="font-weight-400 italic text-center font-2x-lg">I am an <span id="role-container"></span>. 
                    <p class="font-weight-400 px-10% text-center">Yonathan H. G. Sihotang</p>
                    <p class="font-weight-300 italic px-4%">I love to making API to make data more accessible</p>
                </div>
            </div>
            <!-- Image -->
            <div class="flex px-8% index-image-parent-container">
                <img class="index-photo-image rounded-full flex-stretch-0" src="./assets/image/self_photo.jpeg" />
            </div>
        </div>

        <div class="flex flex-col px-8% bg-[#f6f2cb]" id="coding-section">
            <h3 class="text-center">Skill</h3>
            <div class="flex flex-col">
                <div class="flex flex-col align-items-center">
                    <h4 class="text-center font-weight-500">Programming Language</h4>
                </div>
                <!-- List -->
                <div class="flex flex-row gap-0.5 bg-primary-color justify-content-space-around flex-wrap" id="programming-language-skill-list">
                    <!-- Element -->
                </div>
            </div>
            <div>
                <h4 class="text-center">Library, Framework, and Tech Stacks</h4>
                
                <div>
                    <h4 class="text-center font-weight-500">Library</h4>
                    <!-- list -->
                    <div class="grid grid-col-1/3" id="library-list">
                    </div>
                </div>
                <div>
                    <h4 class="text-center font-weight-500">Framework</h4>
                    <!-- List -->
                    <div class="grid grid-col-1/3" id="framework-list">
                        <!-- Element -->
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col align-items-center px-4% bg-primary-color">
            <div class="flex flex-col align-items-center bg-primary-color">
                <h3>Quote</h3>
                <div>
                    <q id="quote-text" class="italic">Text</q>
                </div>
                <div>
                    <p class="font-weight-200" id="quote-author-name">Author</p>
                </div>
                <div class="font-sm">
                    <p>Source: <a href="https://api.quotable.io">https://api.quotable.io</a></p>
                </div>
            </div>
        </div>

        <!-- Footer: flex-col -->
        <?php require_once('./template/component/footer.php') ?>
    </div>

    <!-- Sidebar -->
    <div class="flex flex-col absolute top-0 right-0 bottom-0 bg-[#e9c874] h-full px-4%" id="sidebar-container">
        <div class="flex justify-content-center">
            <p id="sidebar-close-button">
                <span class="material-symbols-outlined material-icons">
                    close
                </span>
            </p>
        </div>
        <!-- Nav List -->
        <div class="flex flex-col" id="sidebar-menu-list-container">
            <!-- Nav Element -->
            <div class="p-0.5 bg-white sidebar-element-selected">
                <a href="./index.html" class="font-weight-500">Home</a>
            </div>
            <div class="p-0.5 sidebar-element">
                <a href="./gallery.html" class="sidebar-link">Gallery</a>
            </div>
            <div class="p-0.5 sidebar-element">
                <a href="./blog.html" class="sidebar-link">Blog</a>
            </div>
            <div class="p-0.5 sidebar-element">
                <a href="./contact.html" class="sidebar-link">Contact</a>
            </div>
            
        </div>
    </div>
    <script>
        const programmingLanguageSkill = [{
            'icon_name': 'python-package-index-svgrepo-com.svg',
            'name': 'Python',
        }, {
            'icon_name': 'javascript-logo-svgrepo-com.svg',
            'name': 'Javascript'
        }, {
            'icon_name': 'typescript-icon-svgrepo-com.svg',
            'name': 'TypeScript'
        }, {
            'icon_name': 'rust-svgrepo-com.svg',
            'name': 'Rust'
        }, {
            'icon_name': 'php-svgrepo-com.svg',
            'name': 'PHP'
        }]

        const libraryDataList = [{
            'icon_name': 'react-svgrepo-com.svg',
            'name': 'React'
        }, {
            'icon_name': 'flask-svgrepo-com.svg',
            'name': 'Flask'
        }]

        const frameworkDataList = [{
            'icon_name': 'nextjs-icon-svgrepo-com.svg',
            'name': 'Next.js'
        }, {
            'icon_name': 'flutter-svgrepo-com.svg',
            'name': 'Flutter'
        }, {
            'icon_name': 'prisma-svgrepo-com.svg',
            'name': 'Prisma'
        }]

        // Programming List
        let programmingList = document.getElementById('programming-language-skill-list')
        // Element of programming list
        
        for (let programmingLanguageInfo of programmingLanguageSkill){
            let programmingSkillElement = document.createElement('div')
            programmingSkillElement.innerHTML = `
            <div class="flex flex-col align-items-center flex-grow-1 programming-language-container">
                <div>
                    <img height="50" width="50" src="./assets/icons/programming_language/${programmingLanguageInfo.icon_name}" alt="${(programmingLanguageInfo.name || "").toLowerCase()}-icon" />
                </div>
                <p>${(programmingLanguageInfo?.name || "N/A")}</p>
            <div>
            `
            programmingList.appendChild(programmingSkillElement)
        }

        let libraryList = document.getElementById('library-list')

        for (let libraryInfo of libraryDataList){
            let libraryElement = document.createElement('div')
            libraryElement.innerHTML = `
            <div class="flex flex-col align-items-center">
                <div>
                    <img height="50" width="50" src="./assets/icons/library/${libraryInfo.icon_name}" alt="${(libraryInfo.name || "").toLowerCase()}-icon" />
                </div>
                <div>
                    <p>${(libraryInfo?.name || "N/A")}</p>
                </div>
            <div>
            `
            libraryList.appendChild(libraryElement)
        }

        let frameworkList = document.getElementById('framework-list')

        for (let frameworkInfo of frameworkDataList){
            let frameworkElement = document.createElement('div')
            frameworkElement.innerHTML = `
            <div class="flex flex-col align-items-center">
                <div>
                    <img height="50" width="50" src="./assets/icons/framework/${frameworkInfo?.icon_name}" alt="${(frameworkInfo.name || "").toLowerCase()}-icon" />
                </div>
                <div>
                    <p>${(frameworkInfo?.name || "N/A")}</p>
                </div>
            <div>
            `
            frameworkList.appendChild(frameworkElement)
        }

        
    </script>
    <script>
        const roles = ['undergraduate student']
        let role_container = document.getElementById('role-container')

        function typingMain(){
            for (role of roles){
                typeString(role, role_container);
            }
        }
        typingMain()
    </script>
    <script>
        async function fetchQuote(){
            let response = await fetch('https://api.quotable.io/random?tags=technology');
            let data = await response.json();
            
            let authorElement = document.querySelector('#quote-author-name');
            authorElement.textContent = data['author'];

            let quoteElement = document.querySelector("#quote-text");
            quoteElement.textContent = data['content'];
        }
        fetchQuote();
    </script>
    <script>
        let closeButton = document.querySelector("#sidebar-close-button")
        let sidebarContainer = document.getElementById("sidebar-container")
        closeButton.addEventListener('click', () => {
            sidebarContainer.style.display = "none";
        })

        let menuOpenButton = document.getElementById("menu-icon-container")
        menuOpenButton.addEventListener('click', () => {
            sidebarContainer.style.display = "flex";
            sidebarContainer.style.flexDirection = "column";
        })
    </script>
</body>
</html>