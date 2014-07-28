<?php
/**
 * The template for displaying the footer.
 *
 * @author Pruthu (pruthu.in)
 * @theme horizon
 */
?>
<?php get_sidebar(); ?>
<?php require( dirname( __FILE__ ) . "/inc/theme-options-vars.php" ); ?>

<div class="popup-container" style="display:none">

<?php query_posts( array( 'post_type' => 'portfolio_item', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="port-<?php echo $post->ID ?>" class="popup-div">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php the_content(); ?>

<?php edit_post_link('Edit', '', '' ); ?>
</div> <!-- / .portfolio-item -->
<?php endwhile; ?>
</div>

<div class="copyright">
<?php echo $convax_copyright; ?>
</div>
<?php wp_footer(); ?>

</body>
</html>