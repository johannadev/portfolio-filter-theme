<?php

/**
 * Template Name: Curation Archive
 */

get_header();
?>

<div class="search_flex margin_top">
    <h2>Click to search:</h2>

    <?php
    wp_nav_menu(array(
        'menu' => 'Search Menu',
        'menu_class' => 'search_menu', // CSS class of the menu
        'container' => false,
    ));
    ?>
</div>
<div class="term_container">
    
<?php
// Get all terms from the 'curation-tags' taxonomy
$curation_terms = get_terms(array(
    'taxonomy' => 'curation-tags',
    'hide_empty' => false, // Set to false to include empty terms
));

// Check if any terms were found
if (!empty($curation_terms) && !is_wp_error($curation_terms)) : ?>
    <div class="term">
        <?php foreach ($curation_terms as $key => $term) : ?>
            <a href="<?php echo esc_url(get_term_link($term)); ?>" <?php if ($current_term && $current_term->term_id === $term->term_id) echo 'class="active_term termBtn"'; ?>><?php echo esc_html($term->name); ?> </a>
            <?php if ($key !== count($curation_terms) - 1) { ?>
                <span class="termBtn"> / </span>
            <?php } ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</div>



<?php if (have_posts()) : ?>
    <div class="post_container">

        <?php while (have_posts()) :
            the_post();
        ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div class="post_img">
                    <?php echo the_post_thumbnail('full') ?>
                </div>
            </div>
        <?php
        endwhile; ?>
    </div>
<?php else : ?>
    <div class="post">
        <h2>No posts found...</h2>
    </div>
<?php endif;
?>


<?php get_footer() ?>