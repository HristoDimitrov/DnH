<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	?>
	
	<form action="add.php" method="post" id="add">
		<input type="text" name="first"> 
		<input type="submit" value="Grab it">
	</form>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
			
	<?php 
get_footer();

?>
