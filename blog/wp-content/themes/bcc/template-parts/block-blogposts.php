<!-- Blog Posts -->
<?php
$args = array(
	'numberposts' => 5,
	'offset' => 0,
	'category' => 'Blog',
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args );
?>		

<section class="our-steps">
				<div class="container" >
					<h2 style="color: #EBEBEB">Latest from the Blog...</h2>
					<div class="row-slider owl-carousel">
					<? foreach( $recent_posts as $recent ){ ?>
							<div class="block">
								<Div style="width: 370; height: 160 !important; overflow: hidden !important;">
								<img src='<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>' class="block-img" width="370" height="160"></div>
								<div class="block-content">
									<h3><? echo $recent["post_title"]; ?></h3>
									<p><? echo $recent["the_excerpt"]; ?></p>
									<a href="<? echo get_permalink($recent["ID"]); ?>" title="Read More" class="btn btn-small">Read More</a>
								</div>
							</div>
					<? } wp_reset_query(); ?>
					</div>
					<Br><BR>
					<A HREF="/blog" class="btn btn-small" style="background: #000000;">MORE FROM THE BLOG</A>
						<br><br><Br>
				</div>
</section>
