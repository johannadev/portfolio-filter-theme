<?php
get_header();
$current_term = get_queried_object(); ?>


<div class="page_content margin_top">
    <h2 class="title">Press</h2>
</div>

<div class="term_container">
    <?php
// Get all terms from the 'press-tags' taxonomy
$press_terms = get_terms(array(
    'taxonomy' => 'press-tag',
    'hide_empty' => false, // Set to false to include empty terms
));

// Check if any terms were found
if (!empty($press_terms) && !is_wp_error($press_terms)) : ?>
     <div class="search_flex">
        <h2>Click to search:</h2>
        <?php foreach ($press_terms as $key => $term) : ?>
            <a href="<?php echo esc_url(get_term_link($term)); ?>" <?php if ($current_term && $current_term->term_id === $term->term_id) echo 'class="active_term"'; ?>><?php echo esc_html($term->name); ?> </a>
            <?php if ($key !== count($press_terms) - 1) { ?>
                <span class="termBtn"> / </span>
            <?php } ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>

<?php if (have_posts()) : ?>
    <div class="post_container y_padding_top">

        <?php while (have_posts()) :
            the_post();
        ?>
            <?php if(get_field('url')) : ?>
            <div class="post">
                <h2><a href="<?php echo the_field('url') ?>" target="_blank"><?php the_title(); ?></a></h2>

                <div class="post_img">
                    <?php echo the_post_thumbnail('full') ?>
                </div>
            </div>
            <?php endif;?>
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