<?php get_header() ?>

<div class="page_content margin_top">
    <h2 class="title"><?php the_title() ?></h2>
    <?php the_content() ?>

    <div class="hover_imgs">
    <?php $image = get_field('1_hover_image'); ?>
    <img src="<?php echo $image ?>" />
</div>
</div>


<script>
    $(document).ready(function() {
        $('#imageOne').hover(function() {
            $('#displayOne').css('display', 'block');
        }, function() {
            $('#displayOne').css('display', 'none');
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