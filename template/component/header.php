<?php
    $menuList = array(
        array(
            "name" => "home",
            "url" => "index.php"

        ),
        array(
            "name" => "gallery",
            "url" => "gallery.php"

        ),
        array(
            "name" => "blog",
            "url" => "blog.php"

        ),
        array(
            "name" => "contact",
            "url" => "contact.php"

        )
    )

?>

<!-- Header -->
<div class="flex flex-row px-4% justify-content-space-around align-items-center header-container relative">
    <div>
        <p class="font-weight-600">Yonathan</p>
    </div>
    <div class="flex flex-row gap-0.75" id="normal-menu-container">
        <!-- Nav element -->
        <?php
            foreach ($menuList as $menu){
                $name = ucfirst($menu["name"]);
                $url = $menu["url"];
                echo "<div class=\"nav-element\"><a href=$url>$name</a></div>";
            }
        ?>
    </div>
    <div id="menu-icon-container" class="relative">
        <span class="material-symbols-outlined material-icons">
            menu
        </span>
    </div>
</div>