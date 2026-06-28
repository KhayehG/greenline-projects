<?php
/**
 * Front page template.
 *
 * @package Greenline_Projects
 */

get_header();

$hero_cta_url = greenline_page_link( 'installations', 'services' );
?>

<section class="hero" id="home">
	<div class="hero-slides">
		<div class="hero-slide is-active" data-slide="0">
			<div class="hero-slide-bg hero-slide-bg--image ken-burns" style="background-image: url('<?php echo esc_url( greenline_media( 'src1.png' ) ); ?>');"></div>
			<div class="hero-slide-overlay"></div>
			<div class="hero-content">
				<h1>Save Money,<br>Save the Planet.</h1>
				<a href="<?php echo esc_url( $hero_cta_url ); ?>" class="btn-hero">
					Go Solar!
					<span class="arrow"><i class="fas fa-chevron-right"></i></span>
				</a>
			</div>
		</div>
		<div class="hero-slide" data-slide="1">
			<div class="hero-slide-bg hero-slide-bg--image ken-burns" style="background-image: url('<?php echo esc_url( greenline_media( 'src1.png' ) ); ?>');"></div>
			<div class="hero-slide-overlay hero-slide-overlay--dark"></div>
			<div class="hero-content">
				<h1>South Africa's<br>Solar Experts</h1>
				<a href="<?php echo esc_url( $hero_cta_url ); ?>" class="btn-hero">
					Go Solar!
					<span class="arrow"><i class="fas fa-chevron-right"></i></span>
				</a>
			</div>
		</div>
		<div class="hero-slide" data-slide="2">
			<div class="hero-slide-bg hero-slide-bg--image ken-burns" style="background-image: url('<?php echo esc_url( greenline_media( 'src1.png' ) ); ?>');"></div>
			<div class="hero-slide-overlay hero-slide-overlay--heavy"></div>
			<div class="hero-content">
				<h1>Beat Loadshedding<br>For Good</h1>
				<a href="<?php echo esc_url( $hero_cta_url ); ?>" class="btn-hero">
					Go Solar!
					<span class="arrow"><i class="fas fa-chevron-right"></i></span>
				</a>
			</div>
		</div>
	</div>
	<button type="button" class="hero-nav hero-nav--prev" aria-label="<?php esc_attr_e( 'Previous slide', 'greenline-projects' ); ?>"><i class="fas fa-chevron-left"></i></button>
	<button type="button" class="hero-nav hero-nav--next" aria-label="<?php esc_attr_e( 'Next slide', 'greenline-projects' ); ?>"><i class="fas fa-chevron-right"></i></button>
	<div class="hero-dots" role="tablist" aria-label="<?php esc_attr_e( 'Hero slides', 'greenline-projects' ); ?>">
		<button type="button" class="hero-dot is-active" aria-label="<?php esc_attr_e( 'Slide 1', 'greenline-projects' ); ?>" data-slide="0"></button>
		<button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 2', 'greenline-projects' ); ?>" data-slide="1"></button>
		<button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 3', 'greenline-projects' ); ?>" data-slide="2"></button>
	</div>
</section>

<section class="benefits" id="benefits">
	<h2 class="section-title">Solar Energy – Benefits</h2>
	<div class="benefits-grid">
		<div class="benefit-card animate-on-scroll" data-animate="fade-up" data-delay="0">
			<div class="benefit-icon benefit-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src2.png' ) ); ?>" alt="<?php esc_attr_e( 'Economical', 'greenline-projects' ); ?>" width="48" height="48" loading="lazy">
			</div>
			<h3>Economical</h3>
			<p>Drastically reduces the amount of money spent on electricity bills as solar energy powers most if not all of your household.</p>
		</div>
		<div class="benefit-card animate-on-scroll" data-animate="fade-up" data-delay="100">
			<div class="benefit-icon benefit-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src3.png' ) ); ?>" alt="<?php esc_attr_e( 'Property Value', 'greenline-projects' ); ?>" width="48" height="48" loading="lazy">
			</div>
			<h3>Property Value</h3>
			<p>Installing solar power solutions significantly increases your property resale value while attracting eco-conscious buyers.</p>
		</div>
		<div class="benefit-card animate-on-scroll" data-animate="fade-up" data-delay="200">
			<div class="benefit-icon benefit-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src4.png' ) ); ?>" alt="<?php esc_attr_e( 'Eco-Friendly', 'greenline-projects' ); ?>" width="48" height="48" loading="lazy">
			</div>
			<h3>Eco-Friendly</h3>
			<p>Using solar energy reduces your carbon footprint and eliminates air, water and land pollution.</p>
		</div>
		<div class="benefit-card animate-on-scroll" data-animate="fade-up" data-delay="300">
			<div class="benefit-icon benefit-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src5.png' ) ); ?>" alt="<?php esc_attr_e( 'Loadshedding', 'greenline-projects' ); ?>" width="48" height="48" loading="lazy">
			</div>
			<h3>Loadshedding</h3>
			<p>Solar power is used to charge batteries which safeguards you against loadshedding and general power outages.</p>
		</div>
	</div>
	<div class="center">
		<a href="<?php echo esc_url( greenline_page_link( 'installations', 'services' ) ); ?>" class="btn-outline">
			View Solutions
			<span class="arr"><i class="fas fa-chevron-right"></i></span>
		</a>
	</div>
</section>

<section class="services" id="services">
	<h2 class="section-title">Our Services</h2>
	<div class="services-grid">
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="0">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src6.png' ) ); ?>" alt="<?php esc_attr_e( 'Solar Installations', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Solar<br>Installations</h3>
				<p class="service-desc">Grid-tied, hybrid and off-grid systems</p>
			</div>
		</div>
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="100">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src7.png' ) ); ?>" alt="<?php esc_attr_e( 'Green Building Solutions', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Green Building<br>Solutions</h3>
				<p class="service-desc">Sustainable construction and design</p>
			</div>
		</div>
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="200">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src8.png' ) ); ?>" alt="<?php esc_attr_e( 'Electrical Installations', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Electrical<br>Installations</h3>
				<p class="service-desc">Certified electrical work and wiring</p>
			</div>
		</div>
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="300">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src9.png' ) ); ?>" alt="<?php esc_attr_e( 'Renovation Services', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Renovation<br>Services</h3>
				<p class="service-desc">Energy-efficient home upgrades</p>
			</div>
		</div>
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="400">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src10.png' ) ); ?>" alt="<?php esc_attr_e( 'Project Management', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Project<br>Management</h3>
				<p class="service-desc">End-to-end project delivery</p>
			</div>
		</div>
		<div class="service-card animate-on-scroll" data-animate="fade-left" data-delay="500">
			<div class="service-icon service-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src11.png' ) ); ?>" alt="<?php esc_attr_e( 'Maintenance Services', 'greenline-projects' ); ?>" width="40" height="40" loading="lazy">
			</div>
			<div class="service-card-body">
				<h3>Maintenance<br>Services</h3>
				<p class="service-desc">Ongoing support and system checks</p>
			</div>
		</div>
	</div>
	<div class="center services-cta">
		<a href="<?php echo esc_url( greenline_page_link( 'contact', 'contact' ) ); ?>" class="btn-outline btn-outline-light">
			View Solutions
			<span class="arr"><i class="fas fa-chevron-right"></i></span>
		</a>
	</div>
</section>

<section class="who" id="about">
	<div class="who-inner">
		<div class="who-logo animate-on-scroll" data-animate="fade-left">
			<img src="<?php echo esc_url( greenline_media( 'src12.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="200" height="200" loading="lazy">
		</div>
		<div class="who-text animate-on-scroll" data-animate="fade-right">
			<h2>Who We Are…</h2>
			<p>Greenline Projects was founded in 2005, we are a <strong>renewable energy service</strong> that specializes in <strong>sustainability, green buildings, self-sufficiency</strong> and <strong>solar solutions</strong>.</p>
			<p class="who-subtitle">Doing our bit to heal the earth.</p>
			<p>Greenline Projects fully understands the devastating impact on our environment of using <strong>fossil fuels for energy</strong>. This is why we ensure that we are continuously striving to make our environment <strong>ever more sustainable</strong> and <strong>eco-friendly</strong>.</p>
			<p>Whether you need Greenline Projects for a grid-tied solar installation, a hybrid solar installation or an off-grid solar installation, we can gladly help you with all your sustainable living needs.</p>
		</div>
	</div>
</section>

<section class="stats-section" id="stats">
	<h2 class="section-title section-title-light">Our Track Record</h2>
	<div class="stats-grid">
		<div class="stat-item">
			<div class="stat-icon"><i class="fas fa-solar-panel"></i></div>
			<div class="stat-number" data-target="500" data-suffix="+">0</div>
			<div class="stat-label">Installations Completed</div>
		</div>
		<div class="stat-item">
			<div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
			<div class="stat-number" data-target="18" data-suffix="+">0</div>
			<div class="stat-label">Years Experience</div>
		</div>
		<div class="stat-item">
			<div class="stat-icon"><i class="fas fa-users"></i></div>
			<div class="stat-number" data-target="2500" data-suffix="+">0</div>
			<div class="stat-label">Happy Clients</div>
		</div>
		<div class="stat-item">
			<div class="stat-icon"><i class="fas fa-star"></i></div>
			<div class="stat-number" data-target="100" data-suffix="%">0</div>
			<div class="stat-label">Satisfaction Guaranteed</div>
		</div>
	</div>
</section>

<div class="anti-banner">
	<h2>The Anti-Loadshedding Formula</h2>
</div>

<section class="loadshedding">
	<h2>Load Shedding making life difficult?</h2>
	<p class="subtitle">Beat the system with solar power</p>
	<div class="process-row">
		<div class="process-step animate-on-scroll" data-animate="fade-up" data-delay="0">
			<div class="process-icon process-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src13.png' ) ); ?>" alt="<?php esc_attr_e( 'Harness energy from the sun', 'greenline-projects' ); ?>" width="64" height="64" loading="lazy">
			</div>
			<h3>Harness Energy<br>From the Sun</h3>
		</div>
		<div class="process-arrow"><img src="<?php echo esc_url( greenline_media( 'src14.png' ) ); ?>" alt="" width="28" height="32" aria-hidden="true" loading="lazy"></div>
		<div class="process-step animate-on-scroll" data-animate="fade-up" data-delay="150">
			<div class="process-icon process-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src15.png' ) ); ?>" alt="<?php esc_attr_e( 'Charge batteries', 'greenline-projects' ); ?>" width="64" height="64" loading="lazy">
			</div>
			<h3>Charge<br>Batteries</h3>
		</div>
		<div class="process-arrow"><img src="<?php echo esc_url( greenline_media( 'src14.png' ) ); ?>" alt="" width="28" height="32" aria-hidden="true" loading="lazy"></div>
		<div class="process-step animate-on-scroll" data-animate="fade-up" data-delay="300">
			<div class="process-icon process-icon-img">
				<img src="<?php echo esc_url( greenline_media( 'src16.png' ) ); ?>" alt="<?php esc_attr_e( 'Use batteries to power stuff', 'greenline-projects' ); ?>" width="64" height="64" loading="lazy">
			</div>
			<h3>Use Batteries<br>To Power Stuff</h3>
		</div>
	</div>
</section>

<section class="testimonials" id="testimonials">
	<h2 class="section-title">What Our Clients Say</h2>
	<div class="testimonials-grid">
		<div class="testimonial-card">
			<div class="testimonial-stars" aria-label="5 stars">★★★★★</div>
			<p class="testimonial-quote">"Greenline cut our electricity bill by 80%. Best investment we ever made."</p>
			<p class="testimonial-name">Thabo M.</p>
			<p class="testimonial-location">Johannesburg</p>
		</div>
		<div class="testimonial-card">
			<div class="testimonial-stars" aria-label="5 stars">★★★★★</div>
			<p class="testimonial-quote">"Professional installation, zero issues for 3 years. Highly recommend."</p>
			<p class="testimonial-name">Sarah K.</p>
			<p class="testimonial-location">Cape Town</p>
		</div>
		<div class="testimonial-card">
			<div class="testimonial-stars" aria-label="5 stars">★★★★★</div>
			<p class="testimonial-quote">"We no longer worry about loadshedding at all. Life changing."</p>
			<p class="testimonial-name">Sipho D.</p>
			<p class="testimonial-location">Durban</p>
		</div>
	</div>
</section>

<div class="know-more">
	<h2>Everything You Need to Know<br>About Solar Power</h2>
	<span class="chevron"><i class="fas fa-chevron-down"></i></span>
</div>

<div class="go-solar" id="shop">
	<h2>Go Solar Today!</h2>
</div>

<section class="contact-section" id="contact">
	<div class="contact-inner">
		<div class="contact-left">
			<div class="contact-details">
				<div class="contact-row">
					<span class="icon-circle ic-whatsapp"><i class="fab fa-whatsapp"></i></span>
					066 266 4880
				</div>
				<div class="contact-row">
					<span class="icon-circle ic-phone"><i class="fas fa-phone"></i></span>
					066 266 4880
				</div>
				<div class="contact-row">
					<span class="icon-circle ic-email"><i class="fas fa-envelope"></i></span>
					info@greenlinepro.co.za
				</div>
				<div class="contact-row">
					<span class="icon-circle ic-email2"><i class="fas fa-envelope"></i></span>
					sales@greenlinepro.co.za
				</div>
			</div>
			<?php if ( isset( $_GET['contact'] ) && 'success' === $_GET['contact'] ) : ?>
				<div class="contact-success" role="alert">
					Thank you! We will contact you within 24 hours.
				</div>
			<?php endif; ?>
			<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" novalidate>
				<?php wp_nonce_field( 'greenline_contact', 'greenline_contact_nonce' ); ?>
				<input type="hidden" name="action" value="greenline_contact">
				<div class="form-group">
					<label for="contact_name">Full Name</label>
					<input type="text" id="contact_name" name="contact_name" required>
				</div>
				<div class="form-group">
					<label for="contact_email">Email Address</label>
					<input type="email" id="contact_email" name="contact_email" required>
				</div>
				<div class="form-group">
					<label for="contact_phone">Phone Number</label>
					<input type="tel" id="contact_phone" name="contact_phone">
				</div>
				<div class="form-group">
					<label for="contact_service">Service Interested In</label>
					<select id="contact_service" name="contact_service" required>
						<option value="">Select a service</option>
						<option value="Solar Installations">Solar Installations</option>
						<option value="Green Building Solutions">Green Building Solutions</option>
						<option value="Electrical Installations">Electrical Installations</option>
						<option value="Renovation Services">Renovation Services</option>
						<option value="Project Management">Project Management</option>
						<option value="Maintenance Services">Maintenance Services</option>
					</select>
				</div>
				<div class="form-group">
					<label for="contact_message">Message</label>
					<textarea id="contact_message" name="contact_message" rows="4" required></textarea>
				</div>
				<button type="submit" class="btn-submit">Send Message</button>
			</form>
		</div>
		<div class="map-placeholder">
			<iframe
				src="https://maps.google.com/maps?q=56+Bardia+Ave,+Reservoir+Hills,+Durban,+4090&output=embed"
				allowfullscreen
				loading="lazy"
				title="<?php esc_attr_e( 'Greenline Projects location', 'greenline-projects' ); ?>">
			</iframe>
		</div>
	</div>
</section>

<button type="button" class="back-to-top" aria-label="<?php esc_attr_e( 'Back to top', 'greenline-projects' ); ?>" hidden>
	<i class="fas fa-chevron-up"></i>
</button>

<?php
get_footer();
