<?php get_header(); ?>

<section class="banner">
	<div class="banner-filter"></div>
	<div class="banner-content">
		<h2>We are Purposefuel</h2>
		<p>We empower doers to launch new programs, businesses, and organizations that benefit the greater good.</p>

		<div class="buttons">
			<a class="button red-bg" href="#">I'm an entrepreneur</a>
			<a class="button green-bg" href="#">I'm an organization</a>
		</div>
	</div>
</section>

<section class="intro">
	<p><strong>Social entrepreneurship</strong> is a process that anyone can learn and use. Democratizing this approach can change the world and everyone has a role to play.</p>
</section>

<section class="two-wide vertical-align">
	<div class="column blue-bg">
		<h3>Intro Events &amp; Workshops</h3>
		<p>Lorem ipsum...</p>
		<a href="#">Learn More</a>
	</div>

	<div class="column green-bg">
		<h3>Organizational Trainings</h3>
		<p>Lorem ipsum...</p>
		<a href="#">Learn More</a>	
	</div>
</section>

<section class="three-wide">
	<div class="column">
		<img src="http://placehold.it/100x100" />
		<p>Live Workshops</p>
	</div>

	<div class="column">
		<img src="http://placehold.it/100x100" />
		<p>1:1 Coaching</p>
	</div>

	<div class="column">
		<img src="http://placehold.it/100x100" />
		<p>Hands-on Projects</p>
	</div>
</section>

<section class="newsletter blue-bg">
	<form>
		<label for="newsletter-signup">Stay informed about events near you</label>
		<input type="email" name="newsletter-signup" id="newsletter-signup" placeholder="Email" />
		<input type="submit" value="Join" class="red-bg" />
	</form>
</section>

<section class="events">

	<h3>Upcoming Events</h3>

	<div class="event">
		<div class="date">May <span>21</span></div>
		<div class="details">
			<h4>Startup Smarter <span>For Nonprofits Professionals</span></h4>
			<dl class="location">
				<dt>Think Coffee</dt>
				<dd>12 W. 14th Street</dd>
				<dd>New York, NY 11222</dd>
				<dd class="time">7:00pm - 9:00pm</dd>
			</dl>
			<a href="#" class="button red-bg">View Details</a>
		</div>
	</div>

	<div class="event">
		<div class="date">May <span>21</span></div>
		<div class="details">
			<h4>Startup Smarter <span>For Nonprofits Professionals</span></h4>
			<dl class="location">
				<dt>Think Coffee</dt>
				<dd>12 W. 14th Street</dd>
				<dd>New York, NY 11222</dd>
				<dd class="time">7:00pm - 9:00pm</dd>
			</dl>
			<a href="#" class="button red-bg">View Details</a>
		</div>
	</div>

	<div class="event">
		<div class="date">May <span>21</span></div>
		<div class="details">
			<h4>Startup Smarter <span>For Nonprofits Professionals</span></h4>
			<dl class="location">
				<dt>Think Coffee</dt>
				<dd>12 W. 14th Street</dd>
				<dd>New York, NY 11222</dd>
				<dd class="time">7:00pm - 9:00pm</dd>
			</dl>
			<a href="#" class="button red-bg">View Details</a>
		</div>
	</div>

	<div class="event">
		<div class="date">May <span>21</span></div>
		<div class="details">
			<h4>Startup Smarter <span>For Nonprofits Professionals</span></h4>
			<dl class="location">
				<dt>Think Coffee</dt>
				<dd>12 W. 14th Street</dd>
				<dd>New York, NY 11222</dd>
				<dd class="time">7:00pm - 9:00pm</dd>
			</dl>
			<a href="#" class="button red-bg">View Details</a>
		</div>
	</div>

	<a href="#" class="button green-bg">More Upcoming Events</a>

</section>

<section class="testimonials two-wide vertical-align">
	<div class="column photo">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial.jpg" />
		<div class="photo-filter"></div>

	</div>

	<div class="column green-bg">
		<p class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in nibh non felis viverra vulputate quis lacinia elit. Nulla lobortis non lectus vel pretium. Nullam faucibus dapibus vehicula.</p>
		<p class="credit">- HERMAN SMITH, TITLE</p>
		<ul class="slider-progress">
			<li class="active">1</li>
			<li>2</li>
			<li>3</li>
		</ul>
	</div>
</section>

<section class="logos">
	<a href="#" class="left-arrow">Left</a>
	<ul>
		<li>Logo</li>
		<li>Logo</li>
		<li>Logo</li>
		<li>Logo</li>
		<li>Logo</li>
		<li>Logo</li>
	</ul>
	<a href="#" class="right-arrow">Right</a>
</section>

<?php get_footer(); ?>