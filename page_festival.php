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
					
					<div class="center-section" id="about">
    					<h2>About the Festival</h2>
    					<p>This November, City Awake will unite and empower the Boston community with the second annual City Awake Festival for Social Impact. In bringing together individuals, organizations, and institutions that are invested in the growth of our city and its social impact work, this ten-day, citywide festival provides the platform to increase awareness and maximize impact of the efforts and initiatives of the for-impact community. Similar to the inaugural year, the pulse of the 2015 festival will depend upon our hundreds of existing and new partner organizations, while also featuring new elements that highlight the outcomes – and drivers – of City Awake’s 2015 programmatic initiatives.</p>
                        <br />

                        <p>True to its form, this festival is a genuine grass-roots effort and illustrates the capabilities of our united community: events, which will vary in topic, format, and location, with many happening simultaneously across the city, will be open to the public and designed, implemented, and hosted by the dedicated partners. While it is a celebration of the achievements of the entire for-impact community, the festival also marks the chance for reflection and future planning. Join us in solidifying Boston’s position as an impact ecosystem hub: one that leverages its constituents’ diverse expertise & networks to tackle the world’s most challenging problems.
                        </p>
					</div>
					<div class="left-section" id="become_parters">
						<h2>Become a Partner</h2>
						<p>The pulse of the 2015 Festival depends upon our city’s social impact organizations and institutions. Learn more about how your organization can participate in our citywide Festival and become a part of Boston’s vibrant social impact movement</p>
						<div class="button" data-section="volunteer"></div>
					</div><!-- .entry-header -->

					<div class="right-section">
						<h2>Become a Volunteer</h2>
						<p>City Awake is looking for wildly passionate volunteers with creativity and time to invest in organizing the 2015 Festival. From marketing mavens and tech gurus to partner champions and planning pros, learn more about all the ways you can join the City Awake Festival Team.</p>
						<div class="button" data-section="volunteer"></div>
					</div><!-- .entry-content -->
	<div id="faqs" >
        <h2>FAQs</h2>
      <div class="faq_container" >
        <div class = "faq">
            <div class="question">What types of events should I expect to see?</div>
            <div class="answer" >There’s not a typical event at a City Awake Festival. Expect speakers, music, hackathons, happy hours, Brazilian jiu-jitsu, dancing, all on day one. We’re sure something will peak your interest. Events vary in topic, format, and location, with many happening simultaneously across the city – and did we mention that almost every event is free?</div>
            <div class="arrow right"></div>
        </div>
        <div class = "faq">
            <div class="question">Where is the Festival?</div>
            <div class="answer" >The Festival is citywide! From Roxbury to Somerville, exciting organizations and initiatives are happening that you don’t want to miss!z</div>
            <div class="arrow right"></div>
        </div>
         <div class = "faq">
            <div class="question">How do I sign up for events?</div>
            <div class="answer" >Check back here in October to start building your Festival itinerary and register to attend events. </div>
            <div class="arrow right"></div>
        </div>
        <div class = "faq">
            <div class="question">Are festival events free?</div>
            <div class="answer" >Nearly 95% of events during the 2014 Festival were free, and we anticipate the same for this year. However, since the overwhelming majority of events are organized by partner organizations, we can only encourage them to make events affordable and accessible to the public (and they usually plan on that anyway!).</div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question">Why a festival?</div>
            <div class="answer">Boston’s social impact community is excitingly diverse, from its leaders to the initiatives. In searching for an inclusive format that would complement the community’s identity, a festival emerged as the best vehicle to drive forward City Awake’s mission. With hundreds of organizations dedicating time to make this a reality, keep in mind that this is a festival after all, so let’s celebrate the changemakers and accomplishments of Boston’s social impact community! </div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question">Who hosts events?</div>
            <div class="answer" >True to its form, this festival is a genuine grass-roots effort and illustrates the capabilities of our united community: all events taking place throughout the week are designed, implemented, and hosted by dedicated organizations, with the exception of a few City Awake-organized events in support of the social impact ecosystem.</div>
            <div class="arrow right"></div>
        </div>
        
        <div class = "faq">
            <div class="question">How can I get involved with the festival?</div>
            <div class="answer" >There are lots of ways! If you represent an organization, hop over to our “2015 Festival Partners” section to learn more, or visit us here to volunteer with the City Awake Festival team.</div>
            <div class="arrow right"></div>
        </div> 
        
        <div class = "faq">
            <div class="question">I still have questions; whom should I contact?</div>
            <div class="answer" >Reach out to festival@cityawake.is – we’d love to hear from you!</div>
            <div class="arrow right"></div>
        </div>
        
        
      </div>
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
    // var $faq;
    
    function close($target){
        $target.toggleClass('hiding');
        window.setTimeout(function(){
            $target.toggleClass('visible');
            $target.toggleClass('expanding');
            $target.toggleClass('hiding');
        }, 800);
    }
    function open(){
        // close($('.answer'));
        $('.answer').each(function(){
            if ($(this).hasClass('visible')) {
                close($(this));
            };
         });
        
        $faq.toggleClass('expanding');
        window.setTimeout(function(){
            $faq.toggleClass('visible');
        }, 800);
    }

	$('.faq').click(function(){
        $faq = $(this).children('.answer');
        if($faq.hasClass('visible')){
            close($faq);
        }else{
            //alert($faq.attr('class'));
            open();
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
	})

	   // var mouse_enter =  false;
    //     var jab;
    //     var clicks = 2;
    //     $(".faq").click(function(){
    //         clicks++;
    //         if(clicks == 2){
    //             //mouse_enter = false;
    //             set_to_norm();
    //         } else { 
    //             if(clicks > 2 || clicks < 2){ 
    //                 clicks = 1;
    //             } 
    //             jab = $(this);
        
    //             $(jab).css("padding-bottom", "100px"); 
    //             $(jab).css("background-color", "rgb(225, 0, 0)");
    //             $(jab).children(".arrow").css("transform", "rotateZ(315deg)");
        
    //             window.setTimeout(function(){
    //                 if(mouse_enter === true || clicks == 2){
    //                     $(jab).children(".answer").css("display", "block");
    //                 }
    //             }, 1000);
    //         }
    //     });

    //     function set_to_norm(){
    //         $(jab).css("padding-bottom", "30px");
    //         $(jab).css("background-color", "rgb(255, 60, 50)");

    //         $(jab).children(".answer").css("display", "none");
    //         $(jab).children(".arrow").css("transform", "rotateZ(135deg)");

    //         //Fix for abnormalities
    //         window.setTimeout(function(){
    //             $(jab).children(".answer").css("display", "none");
    //         }, 1000);
    //     }

    //     $(".faq").mouseleave(function(){
    //         clicks++;
    //         mouse_enter = false;
    //     });

    //     window.setInterval(function(){
    //         if(mouse_enter === false){
    //         set_to_norm();
    //     }
    //     }, 10);

    //     $(".faq").mouseenter(function(){
    //         mouse_enter = true;
    //     });


>>>>>>> a5ecd2099ce5837b3208f0efb1974316598661f9
	</script>

<?php get_footer(); ?>
