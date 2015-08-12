<?php
/**
 * Template Name: Festival
 */

get_header(); ?>
	<link href="/firstsite3/wp-content/themes/cityawake/style_cityawake.css" rel="stylesheet" />
	<link href="/firstsite3/wp-content/themes/cityawake/festival.css" rel="stylesheet" />
	<!-- ADDS FESTIVAL CLASS TO BODY -->
	<script type="text/javascript">
	$('body').addClass('festival');

	$('.faq').click(function(){
		// $(this).children('.answer').toggleClass('open');
		alert("CLICKED!!");
	})
	</script>
	<div id="primary" class="content-area festival">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="center-section">
					<h2>About the Festival</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.</p>
					</div>
					<div class="left-section">
						<h2>Partner Info</h2>
						<p>Duis rhoncus velit nec est condimentum feugiat. Donec aliquam augue nec gravida lobortis. Nunc arcu mi, pretium quis dolor id, iaculis euismod ligula. Donec tincidunt gravida lacus eget lacinia.</p>
						<div class="button" data-section="volunteer"></div>
					</div><!-- .entry-header -->

					<div class="right-section">
						<h2>Volunteer Info</h2>
						<p>Duis rhoncus velit nec est condimentum feugiat. Donec aliquam augue nec gravida lobortis. Nunc arcu mi, pretium quis dolor id, iaculis euismod ligula. Donec tincidunt gravida lacus eget lacinia.</p>
						<div class="button" data-section="volunteer"></div>
					</div><!-- .entry-content -->
						<div id="faq_block">
        					<p id="header">FAQ</p>
      						<div class="faq_container">
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
            						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div>
        
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
            						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div>
        
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
           	 						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div>
        	
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
            						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div> 
        
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
            						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div>
        
        						<div class = "faq">
            						<div id="question">What is an FAQ?</div>
            						<br>
            						<div id="answer">IDK Leave me alone</div>
        						</div> 
      						</div>
    					</div>
					<div class="center-section">

					</div>


				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
