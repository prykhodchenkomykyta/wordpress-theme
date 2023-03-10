<?php get_header(); ?>

<div class="author">
    <div class="author-image"><img src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="Author Name"/></div>
    <div class="author-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet diam sed lacus vehicula, sed porta purus blandit. Vivamus et tincidunt justo, non consequat nulla.</div>   
</div>

<div class="social">
    <div class="newsletter">
        <input type="text" placeholder="Email Newsletter" class="subscribeinput">
        <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="subscribebutton">
    </div>
    <div class="networks"> 
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Twitter" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search" /></a>
    </div>
</div>

<?php
	if(have_posts()) {
		while(have_posts()) : the_post();
?>

<div class="article">
	<div class="thumbnail">
		<?php the_post_thumbnail('medium'); ?>
	</div>
		<div class="content">
		    <h2><?php the_title(); ?></h2>
		    <p><?php the_excerpt(); ?></p>
		    <a class="button" href='<?php the_permalink(); ?>'>More</a>
		</div>
</div>

<?php endwhile; } ?>

<nav class="pagination"><?php echo paginate_links(); ?></nav>

<?php get_footer(); ?>