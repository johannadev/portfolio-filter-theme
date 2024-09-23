<?php get_header(); ?>

<div class="search_flex margin_top" id="postContainer">
    <h2>Click to search:</h2>
    <?php
    wp_nav_menu(array(
        'menu' => 'Search Menu',
        'menu_class' => 'search_menu', // CSS class of the menu
        'container' => false,
    ));
    ?>
</div>

<?php get_footer(); ?>