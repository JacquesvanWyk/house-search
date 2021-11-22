<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

?>
<?php
$loop = new WP_Query( array( 'post_type' => 'Rentals', 'posts_per_page' => 10 ) );

while ( $loop->have_posts() ) : $loop->the_post();
    ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium');?></a>
    <?php
    $postid = get_the_ID();
    the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' );
    ?>

    <div class="entry-content">
        <h2> Rooms: <?php the_field('price'); ?>p/m </h2>
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>
<?php
get_footer();
