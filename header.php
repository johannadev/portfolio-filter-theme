<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/3e348fcf98.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Sono&display=swap" rel="stylesheet">


    <?php wp_head(); ?>

</head>
<header class="header">

    <?php if (is_front_page()) : ?>
        <button class="open_btn homestyle_btn" id="openBtn" onclick="toggleNav()">
            <?php get_template_part('assets/plus_black'); ?>
            <?php get_template_part('assets/minus_black'); ?>
            
        </button>
        <div class="menu_overlay" id="menuOverlay">


    <?php else : ?>
        <button class="open_btn pagestyle_btn" id="openBtnPage" onclick="toggleNav()">
            <?php get_template_part('assets/plus_pink'); ?>
            <?php get_template_part('assets/minus_brightpink'); ?>
            

        </button>
        <div class="menu_overlay white_bkgrnd" id="menuOverlay">

    <?php endif; ?>
        <nav class="navContainer">
            <?php
            wp_nav_menu(array(
                'menu' => 'Primary Menu',
                'menu_class' => 'main-menu', // CSS class of the menu
                'container' => false,
            ));
            ?>
        </nav>
    </div>

</header>


<script>
    var isMenuOpen = false;

    if ($(window).width() > 576) {

        function toggleNav() {
        if (isMenuOpen === true) {
            document.getElementById("menuOverlay").style.right = "-100%";

            <?php if (is_front_page()) : ?>
                document.getElementById("svgPlus").style.display = "block";
                document.getElementById("svgMinus").style.display = "none";

                document.getElementById("openBtn").style.background = "var(--lightpink)";


            <?php else : ?>
                document.getElementById("openBtnPage").style.color = "var(--lightpink)";
                document.getElementById("svgPlus").style.display = "block";
                document.getElementById("svgMinus").style.display = "none";
                document.getElementById("openBtnPage").classList.add("lightpink_border");

                // document.getElementById("openBtnPage").style.border = "1.5px solid var(--lightpink)";
            <?php endif; ?>

            isMenuOpen = false;
        } else {
            document.getElementById("menuOverlay").style.right = "0%";

            <?php if (is_front_page()) : ?>
                document.getElementById("svgMinus").style.display = "block";
                document.getElementById("svgPlus").style.display = "none";
                document.getElementById("openBtn").style.background = "var(--pink)";

            <?php else : ?>
                document.getElementById("svgMinus").style.display = "block";
                document.getElementById("svgPlus").style.display = "none";
                document.getElementById("openBtnPage").classList.remove("lightpink_border");

                document.getElementById("openBtnPage").style.color = "var(--pink)";
                document.getElementById("openBtnPage").style.border = "1.5px solid var(--pink)";
            <?php endif; ?>

            isMenuOpen = true;
        }
    }

    } else {

        function toggleNav() {
        if (isMenuOpen === true) {
            document.getElementById("menuOverlay").style.right = "-100%";

            <?php if (is_front_page()) : ?>
                document.getElementById("svgPlus").style.display = "none";
                document.getElementById("svgMinus").style.display = "none";

                // document.getElementById("openBtn").style.background = "var(--lightpink)";
                document.getElementById("openBtn").classList.add("plus");
                document.getElementById("openBtn").classList.remove("minus");
                document.getElementById("openBtn").style.color = "var(--black)";



            <?php else : ?>
                document.getElementById("openBtnPage").style.color = "var(--lightpink)";
                document.getElementById("svgPlus").style.display = "none";
                document.getElementById("svgMinus").style.display = "none";

                document.getElementById("openBtnPage").classList.add("plus");
                document.getElementById("openBtnPage").classList.remove("minus");
                // document.getElementById("openBtnPage").style.border = "1.5px solid var(--lightpink)";
            <?php endif; ?>

            isMenuOpen = false;
        } else {
            document.getElementById("menuOverlay").style.right = "0%";

            <?php if (is_front_page()) : ?>
                document.getElementById("svgMinus").style.display = "none";
                document.getElementById("svgPlus").style.display = "none";
                // document.getElementById("openBtn").style.background = "var(--pink)";
                document.getElementById("openBtn").classList.add("minus");
                document.getElementById("openBtn").classList.remove("plus");
            document.getElementById("openBtn").style.color = "var(--pink)";



            <?php else : ?>
                document.getElementById("svgMinus").style.display = "none";
                document.getElementById("svgPlus").style.display = "none";
                document.getElementById("openBtnPage").classList.add("minus");
                document.getElementById("openBtnPage").classList.remove("plus");


                document.getElementById("openBtnPage").style.color = "var(--pink)";
                // document.getElementById("openBtnPage").style.border = "1.5px solid var(--pink)";
            <?php endif; ?>

            isMenuOpen = true;
        }
    }

    }

</script>



<?php if (is_front_page()) { ?>

    <body class="homepage_bg">

    <?php } else { ?>

        <body>

        <?php } ?>
        <?php wp_body_open(); ?>