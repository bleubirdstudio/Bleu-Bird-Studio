<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container-fluid body no-pad">
<a name="who_we_are"></a>
<br><br><br>
	<div class="container">
		<div class="row">
			<div class="title"> 
				<img src="<?php bloginfo('template_url'); ?>/images/hey.png">
			</div> 
		</div>
		<div class="row">
			<div class="us">
				<img src="<?php bloginfo('template_url'); ?>/images/us.png">
				<img class="wedding" src="<?php bloginfo('template_url'); ?>/images/wedding.png">			
				<img class="cubs" src="<?php bloginfo('template_url'); ?>/images/cubs.png">			
				<img class="love" src="<?php bloginfo('template_url'); ?>/images/love.png">			
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 text text-in"><p>Bonjour! We are Katie &amp; Dave, a family owned design studio in the Greater Rochester New York area. After recieving our BFA’s in Graphic Design from SUNY Fredonia, we took a bold leap to Chicago Illinois where we persued our design dreams. During our two years of living in chi-town we really figured out how we wanted to impact the design world, and moved back to our hometown of Rochester New York to persue new careers. There’s no place like home! Dave found his niche within the world of coding and now works as a web designer at Dawnbreaker Inc. Katie found her talent elsewhere as a freelance logo and print designer. Finally it was time to start our own business, and <span>Bleu Bird Studio</span> was born!</p></div>
		</div>
		<div clas="row">
			<div class="addi">
				<img class="module" src="<?php bloginfo('template_url'); ?>/images/addi1.png">
				<img class="module" src="<?php bloginfo('template_url'); ?>/images/addi2.png">
			</div>
		</div>
		<div class="row ">
			<div class="col-lg-10 col-md-10 col-sm-10 text text-in"><p>After graduating college, living in chi city, and getting married we found out that we were moving back to Rochester with a little surprise, and her name is Addison! The surprises didn’t stop there, with an early delivery as a breech baby, Addison always knows how to make an entrance. This amazing little lady has really changed our lives, and she is what has inspired us to create this design studio.</p></div>
		</div><a name="what_we_do"></a>
		<br><br><br>
		<div class="row">
			<div class="title"> 
				<img src="<?php bloginfo('template_url'); ?>/images/do.png">
			</div> 
		</div>
		<div class="row">
			<div class="col-lg-11 col-md-11 col-sm-11 section">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 origami">
					<img src="<?php bloginfo('template_url'); ?>/images/bird1.png" alt="Print Design">
					<div class="title">identity</div>
					<p>Your identity is the foundation of your business; what your clients will recognize you most by. We will work to get a strong understanding of your business and translate that to your past, present and future customers with an eye catching and captivating identity.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 origami">
					<img src="<?php bloginfo('template_url'); ?>/images/bird2.png" alt="Print Design">
					<div class="title">print</div>
					<p>You have an amazing identity, so how can you share your new look with your customers, other than through a web presence? Print is a great way to get a positive and tangible message out to your clients. We can help you make an impression that will help viewers connect with your company on an emotional level that will keep them coming back for more. From business cards, to mailers, to custom promotional pieces, Bleu Bird can create and send out exactly what your clients want to see.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 origami">
					<img src="<?php bloginfo('template_url'); ?>/images/bird3.png" alt="Print Design">
					<div class="title">web</div>
					<p>A poor web presence means you lost future business before you even knew you had it. We’ll help create a website you will be proud to show off. At Bleu Bird, our goal is to give you a powerful and user friendly design that will both excite your current customers while bringing in new ones.</p>
				</div>
				<div class="project-bird">
					<div class="bird"></div>
					<div class="bubble"><span>Got Another Project?</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="feet no-pad"><span>“Design is <span>thinking made visual</span>”</span></div>
	<div class="container">
		<div class="row">
			<a name="our_philosophy"></a>
			<br><br><br>
			<div class="title"> 
				<img src="<?php bloginfo('template_url'); ?>/images/do.png">
			</div> 
		</div>
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 philos"><p>We understand how important your business is to you, after all we own a business too! <br> We strive to create and design a business personality that will emotionally connect your brand with your clients. We promise to give you an outstanding experience while helping you make your business what you always dreamed it would be.</p></div>
			<div class="square"></div>
		</div>
		<a name="contact"></a>
		<br><br><br>
		<div class="row">
			<div class="title"> 
				<img src="<?php bloginfo('template_url'); ?>/images/contact.png">
			</div> 
		</div>
		<br>
		<div class="row">
			<div class="col-md-10 no-pad contact">
				<form action="demo_form.asp" autocomplete="on" role="form">
					<div class="col-md-6">
						<div class="form-group col-md-12 no-pad">
							<label class="col-md-12 no-pad" for="name">name*</label>
							<div class="col-md-12 no-pad">
								<input type="text" class="form-control" ng-model="yourName"  placeholder="Enter Name">
							</div>
						</div>
						<div class="form-group col-md-12 no-pad">
							<label class="col-md-12 no-pad" for="email">email*</label>
							<div class="col-md-12 no-pad">
								<input type="email" class="form-control" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group col-md-12 no-pad">
							<label class="col-md-12 no-pad" for="name">message*</label>
							<div class="col-md-12 no-pad">
								<textarea class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>
					<a href="#" class="contact-bird"> 
						<div class="bird"></div>
						<div class="bubble"><span>hello<br>{{yourName}}</span></div>    
						<span class="small">let's talk!<br>click to submit</span>
					</a>
				</form>
			</div>
		</div>
	</div>
<?php
	// while ( have_posts() ) : the_post();
	// 	get_template_part( 'content', 'page' );
	// endwhile;
?>

<?php
get_footer();
