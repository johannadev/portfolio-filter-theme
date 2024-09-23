
<?php get_header()?>

<div class="homepage_content">
<?php the_content()?>
</div>

<?php
$image1 = get_field('1_slide');
$image2 = get_field('2_slide');
$image3 = get_field('3_slide');
$image4 = get_field('4_slide');
$image5 = get_field('5_slide');
$image6 = get_field('6_slide');
$image7 = get_field('7_slide');
$image8 = get_field('8_slide');
$image9 = get_field('9_slide');
$image10 = get_field('10_slide');

// Output the CSS for the slideshow images
?>
<style>
    <?php if ($image1) : ?>
        .crossfade > figure:nth-child(1) { background-image: url('<?php echo esc_url($image1); ?>'); }
    <?php endif; ?>
    <?php if ($image2) : ?>
        .crossfade > figure:nth-child(2) { background-image: url('<?php echo esc_url($image2); ?>'); }
    <?php endif; ?>
    <?php if ($image3) : ?>
        .crossfade > figure:nth-child(3) { background-image: url('<?php echo esc_url($image3); ?>'); }
    <?php endif; ?>
    <?php if ($image4) : ?>
        .crossfade > figure:nth-child(4) { background-image: url('<?php echo esc_url($image4); ?>'); }
    <?php endif; ?>
    <?php if ($image5) : ?>
        .crossfade > figure:nth-child(5) { background-image: url('<?php echo esc_url($image5); ?>'); }
    <?php endif; ?>
    <?php if ($image6) : ?>
        .crossfade > figure:nth-child(6) { background-image: url('<?php echo esc_url($image6); ?>'); }
    <?php endif; ?>
    <?php if ($image7) : ?>
        .crossfade > figure:nth-child(7) { background-image: url('<?php echo esc_url($image7); ?>'); }
    <?php endif; ?>
    <?php if ($image8) : ?>
        .crossfade > figure:nth-child(8) { background-image: url('<?php echo esc_url($image8); ?>'); }
    <?php endif; ?>
    <?php if ($image9) : ?>
        .crossfade > figure:nth-child(9) { background-image: url('<?php echo esc_url($image9); ?>'); }
    <?php endif; ?>
    <?php if ($image10) : ?>
        .crossfade > figure:nth-child(10) { background-image: url('<?php echo esc_url($image10); ?>'); }
    <?php endif; ?>
</style>

<div class="crossfade">
    <?php if ($image1) : ?><figure></figure><?php endif; ?>
    <?php if ($image2) : ?><figure></figure><?php endif; ?>
    <?php if ($image3) : ?><figure></figure><?php endif; ?>
    <?php if ($image4) : ?><figure></figure><?php endif; ?>
    <?php if ($image5) : ?><figure></figure><?php endif; ?>
    <?php if ($image6) : ?><figure></figure><?php endif; ?>
    <?php if ($image7) : ?><figure></figure><?php endif; ?>
    <?php if ($image8) : ?><figure></figure><?php endif; ?>
    <?php if ($image9) : ?><figure></figure><?php endif; ?>
    <?php if ($image10) : ?><figure></figure><?php endif; ?>
</div>

<script>
      function slideshow() {
        var images = document.querySelectorAll('.crossfade figure'); // Select all figure elements
        var currentIndex = 0; // Start with the first image

        setInterval(function() {
            // Hide the current image
            images[currentIndex].style.display = 'none';

            // Move to the next image
            currentIndex++;
            if (currentIndex >= images.length) {
                currentIndex = 0; // Restart from the first image if reached the end
            }

            // Display the next image
            images[currentIndex].style.display = 'block';
        }, 4000); // Interval of 5 seconds (5000 milliseconds)
    }
    slideshow();
</script>


<?php get_footer()?>