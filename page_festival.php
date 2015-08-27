<?php
/**
 * Template Name: Festival
 */

get_header(); ?>
	<link href="/wp-content/themes/cityawake/style_cityawake.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.0.0-alpha1.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<?php
/*
===============
BEGIN SLIDESHOW
===============
*/
?>
<!-- it works the same with all jquery version from 1.x to 2.x -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!-- use jssor.slider.mini.js (40KB) instead for release -->
<!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.slider.js"></script>
<script type="text/javascript" src="/wp-content/themes/cityawake/js/slider/jssor.customization.js"></script>
<link href="/wp-content/themes/cityawake/css/jssor-slider.css" rel="stylesheet" />
<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->

<div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; background-image: url('/wp-content/themes/cityawake/images/headers/cityscape.jpg')">
        <!-- Slides Container -->
<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
              <a href="https://www.eventbrite.com/e/city-awake-festival-2015-partner-open-house-tickets-18348324332" title="City Awake Festival" target="_blank">
                <img u="image" src="/wp-content/themes/cityawake/images/slider1.svg" />
                <div class="festivalbutton" id="attendbutton"> Join Us!</div>
              </a>
            </div>

        </div>

    </div>
    <!-- Jssor Slider End -->

<?php
/*
===============
END SLIDESHOW
===============
*/
?>

	<!-- ADDS FESTIVAL CLASS TO BODY -->

	<div id="primary" class="content-area festival">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!--  Overlay stuff -->
                    <div id="overlay">
                        <div id="modal">
                            
                        </div>
                    </div>
					
					<div class="center-section" id="about">
    					<h2>About the Festival</h2>
    					<p>This November, City Awake will unite and empower the Boston community with the second annual City Awake Festival for Social Impact. In bringing together individuals, organizations, and institutions that are invested in the growth of our city and its social impact work, this ten-day, citywide festival provides the platform to increase awareness and maximize impact of the efforts and initiatives of the for-impact community. Similar to the inaugural year, the pulse of the 2015 festival will depend upon our hundreds of existing and new partner organizations, while also featuring new elements that highlight the outcomes – and drivers – of City Awake’s 2015 programmatic initiatives.</p>
                        <br />

                        <p>True to its form, this festival is a genuine grass-roots effort and illustrates the capabilities of our united community: events, which will vary in topic, format, and location, with many happening simultaneously across the city, will be open to the public and designed, implemented, and hosted by the dedicated partners. While it is a celebration of the achievements of the entire for-impact community, the festival also marks the chance for reflection and future planning. Join us in solidifying Boston’s position as an impact ecosystem hub: one that leverages its constituents’ diverse expertise & networks to tackle the world’s most challenging problems.
                        </p>
					</div>
                    <div class="center-section" id="middle-section">
    					<div class="left-section" id="become_partners">
    						<h2>Become a Partner</h2>
    						<p>The pulse of the 2015 Festival depends upon our city’s social impact organizations and institutions. Learn more about how your organization can participate in our citywide Festival and become a part of Boston’s vibrant social impact movement</p>
    						<div class="festivalbutton open-modal" data-section="volunteer" data-modal="participatemodal">
                               
                                Become a Partner                
                            </div>
    					</div><!-- .entry-header -->

    					<div class="right-section">
    						<h2>Become a Volunteer</h2>
    						<p>City Awake is looking for wildly passionate volunteers with creativity and time to invest in organizing the 2015 Festival. From marketing mavens and tech gurus to partner champions and planning pros, learn more about all the ways you can join the City Awake Festival Team.</p>
    						<a class="festivalbutton" href="https://festivalteam.typeform.com/to/itBQcK" data-section="volunteer" data-modal="volunteermodal">
                               
                                Become a Volunteer                 
                            </a>
    					</div><!-- .entry-content -->
                    </div>
                    <div class="center-section" id="for-partners">
                        <h2>For Partners</h2>
                    </div>
                     <div class="partner-question open-modal left-section tile-1" data-modal="coalitionmodal">
                        <h4>City Awake's Coalition & Festival Partners</h4>
                    </div>
                    <div class="partner-question open-modal right-section tile-2" data-modal="submittingmodal">
                        <h4>Submitting your event for the Festival</h4>
                    </div>
                     <div class="partner-question open-modal left-section tile-3" data-modal="datesmodal">
                        <h4>Important Festival Dates & Deadlines</h4>
                    </div>
                     <div class="partner-question open-modal right-section tile-1" data-modal="resourcesmodal">
                        <h4>Resources City Awake Can Provide</h4>
                    </div>
                     <div class="partner-question open-modal left-section tile-2" data-modal="participatemodal">
                        <h4>How Your Oganization Can Participate</h4>
                    </div>
                     <div class="partner-question open-modal right-section tile-3" data-modal="freemodal">
                        <h4>Psst…It’s free to be a partner!</h4>
                    </div>
                     <div class="partner-question open-modal left-section tile-1" data-modal="cityhallmodal">
                        <h4>The City Hall Talks</h4>
                    </div>
                     <div class="partner-question open-modal right-section tile-2" data-modal="chargingmodal">
                        <h4>Charging Admission for Your Event</h4>
                    </div>
                     <div class="partner-question open-modal left-section tile-3" data-modal="impactmodal">
                        <h4>The Social Impact Expo</h4>
                    </div>
                     <div class="partner-question open-modal right-section tile-1" data-modal="wastemodal">
                        <h4>Making your event zero-waste</h4>
                    </div>

                    <div class="center-section" id="attend-section">
                        <a class="festivalbutton" href="https://www.eventbrite.com/e/city-awake-festival-2015-partner-open-house-tickets-18348324332" target"_blank"><p>Register Your Organization's Event for the 2015 Festival!</p></a>
                    </div>

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

    <div id="for-modal">
        <div class=".partner">
            <p>We’ve learned a lot in the past year, and we want to share some of those lessons with you! From marketing and communication strategies to tools and templates, your City Awake liaison will help you through the painless on-boarding process and provide resources from marketing and communication strategies to tools and templates to help you plan your organization’s Festival event.   
            </p>
        </div>
    </div>
			

				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<script type="text/javascript">
	$('body').addClass('festival');

    function close($target){
        $target.toggleClass('hiding');
        window.setTimeout(function(){
            $target.toggleClass('visible');
            $target.toggleClass('expanding');
            $target.toggleClass('hiding');
        }, 800);
    };
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
    };

	$('.faq').click(function(){
        $faq = $(this).children('.answer');
        if($faq.hasClass('visible')){
            close($faq);
        }else{
            //alert($faq.attr('class'));
            open();
        }
	});
    //STUFF FOR MODALS 
    $('.open-modal').click(function(){
        $this = $(this);
        $('#overlay').addClass('visible');
        $('html').addClass('noScroll');
        $modalLocation = "/wp-content/themes/cityawake/modals.html #" + $this.data("modal");
        $('#modal').load($modalLocation);
    });
    $('#overlay').click(function(){
        $(this).removeClass('visible');
        $('html').removeClass('noScroll');
    });
	</script>

<?php get_footer(); ?>
