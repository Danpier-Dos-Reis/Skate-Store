<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo(get_template_directory_uri()."/main.js")?>" defer></script>
    <?php wp_head() ?>
</head>
<body>
    <header>
        <section class="SocialNetworks">
            <div class="HeaderContainer">
                <div>
                    <a href="#">Enviamos a todo Chile</a> <img src="" alt="imagen">
                </div>
                <div>
                <a href="#">+56 9 5555 5555</a> <img src="" alt="imagen">
                </div>
                <div>
                    <img src="" alt="imagen">
                </div>
            </div>
        </section>
        <section class="Logo_PrincipalMenu">
            <div class="HeaderContainer">
                <img src="src/Pictures/Hola.png" alt="Skate Logo">
                <nav>
                    <?php wp_nav_menu(array(
                        "theme_location"=>"top_menu",
                        "menu_class"=>"menu_principal",
                        "container_class"=>"PrincipalMenuContainer"))?>
                </nav>
            </div>
        </section>
        <section class="CategoriesLinkMenu">
            <div class="Categories">
                <?php do_action("futurosPost")?>
            </div>    
        </section>
        <section class="Search">
            <div class="SearchContainer">
                <div class="Elements">
                    <img src="src/Pictures/Search.png" alt="Search Icon">
                    <input type="text" name="search" maxlength="100" placeholder="Write something here">
                </div>
            </div>
        </section>
    </header>
    <?php wp_body_open( ) ?>