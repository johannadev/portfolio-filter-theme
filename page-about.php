<?php get_header() ?>

<div class="page_content margin_top">

    <h2 class="title"><?php the_title() ?></h2>

    <?php the_content() ?>

    <?php if (get_field('galleries_title')) :?>

    <h2 class="title"><?php echo the_field('galleries_title')?></h2>
    <?php
    wp_nav_menu(array(
        'menu' => 'Galleries Menu',
        'menu_class' => 'artist_menu', // CSS class of the menu
        'container' => false,
    ));
    ?>
    <?php endif;?>


    <?php if (get_field('artists_title')) :?>
    <h2 class="title"><?php echo the_field('artists_title')?></h2>

    <?php
    wp_nav_menu(array(
        'menu' => 'Artists Menu',
        'menu_class' => 'artist_menu', // CSS class of the menu
        'container' => false,
    ));
    ?>
    <?php endif;?>

</div>

<script>
    $(document).ready(function() {
        $('#imageOne').hover(function() {
            $('#aboutProfileImage').css('display', 'block');
        }, function() {
            $('#aboutProfileImage').css('display', 'none');
        });

        $('#imageTwo').hover(function() {
            $('#displayTwo').css('display', 'block');
        }, function() {
            $('#displayTwo').css('display', 'none');
        });

        $('#imageThree').hover(function() {
            $('#displayThree').css('display', 'block');
        }, function() {
            $('#displayThree').css('display', 'none');
        });

        $('#imageFour').hover(function() {
            $('#displayFour').css('display', 'block');
        }, function() {
            $('#displayFour').css('display', 'none');
        });

        $('#imageFive').hover(function() {
            $('#displayFive').css('display', 'block');
        }, function() {
            $('#displayFive').css('display', 'none');
        });
    });
</script>
<?php get_footer() ?>