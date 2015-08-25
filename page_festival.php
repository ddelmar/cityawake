<?php
/**
 * Template Name: Festival
 */

get_header(); ?>
	<link href="/firstsite3/wp-content/themes/cityawake/style_cityawake.css" rel="stylesheet" />
	<link href="/firstsite3/wp-content/themes/cityawake/festival.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.0.0-alpha1.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

	<!-- ADDS FESTIVAL CLASS TO BODY -->
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
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
        </div>
        
        <div class = "faq">
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
        </div> 
        
        <div class = "faq">
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question"> Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="answer" > Ut posuere elit non convalis bladit ut posuere elit non?</div>
            <div class="arrow right"></div>
        </div> 
      </div>
    </div>
					<div class="center-section">

					</div>

				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<script type="text/javascript">
	$('body').addClass('festival');

	/*$('.faq').click(function(){
		// $(this).children('.answer').toggleClass('open');
		alert("CLICKED!!");
	})*/

	   var mouse_enter =  false;
        var jab;
        var clicks = 2;
        $(".faq").click(function(){
            clicks++;
            if(clicks == 2){
                //mouse_enter = false;
                set_to_norm();
            } else { 
                if(clicks > 2 || clicks < 2){ 
                    clicks = 1;
                } 
                jab = $(this);
        
                $(jab).css("padding-bottom", "200px"); 
                $(jab).css("background-color", "rgb(225, 0, 0)");
                $(jab).children(".arrow").css("transform", "rotateZ(315deg)");
        
                window.setTimeout(function(){
                    if(mouse_enter === true || clicks == 2){
                        $(jab).children(".answer").css("display", "block");
                    }
                }, 1000);
            }
        });

        function set_to_norm(){
            $(jab).css("padding-bottom", "30px");
            $(jab).css("background-color", "rgb(255, 60, 50)");

            $(jab).children(".answer").css("display", "none");
            $(jab).children(".arrow").css("transform", "rotateZ(135deg)");

            //Fix for abnormalities
            window.setTimeout(function(){
                $(jab).children(".answer").css("display", "none");
            }, 1000);
        }

        $(".faq").mouseleave(function(){
            clicks++;
            mouse_enter = false;
        });

        window.setInterval(function(){
            if(mouse_enter === false){
            set_to_norm();
        }
        }, 10);

        $(".faq").mouseenter(function(){
            mouse_enter = true;
        });


	</script>

<?php get_footer(); ?>
