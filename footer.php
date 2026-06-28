<?php
/**
 * Footer template.
 *
 * @package Greenline_Projects
 */
?>
<footer>
	<div class="footer-grid">
		<div class="footer-col-nav">
			<img class="footer-logo" src="<?php echo esc_url( greenline_media( 'GREENLINE-PROJECTS-LOGO-1.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="120" height="44" loading="lazy">
			<h4>Navigate</h4>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
				<li><a href="<?php echo esc_url( greenline_page_link( 'about', 'about' ) ); ?>"><i class="fas fa-chevron-right"></i> About</a></li>
				<li><a href="<?php echo esc_url( greenline_page_link( 'installations', 'services' ) ); ?>"><i class="fas fa-chevron-right"></i> Installations</a></li>
				<li><a href="<?php echo esc_url( greenline_page_link( 'contact', 'contact' ) ); ?>"><i class="fas fa-chevron-right"></i> Contact</a></li>
				<li><a href="<?php echo esc_url( greenline_page_link( 'shop', 'shop' ) ); ?>"><i class="fas fa-chevron-right"></i> Shop</a></li>
			</ul>
		</div>
		<div>
			<h4>Contact</h4>
			<ul>
				<li><a href="tel:0662664880"><i class="fas fa-phone"></i> 066 266 4880</a></li>
				<li><a href="mailto:info@greenlinepro.co.za"><i class="fas fa-envelope"></i> info@greenlinepro.co.za</a></li>
				<li><a href="mailto:sales@greenlinepro.co.za"><i class="fas fa-envelope"></i> sales@greenlinepro.co.za</a></li>
			</ul>
			<div class="footer-hours">
				<p><strong>Operating Hours</strong></p>
				<p>Mon–Fri: 08:00–17:00</p>
				<p>Saturday: 09:00–13:00</p>
				<p>Sunday: Closed</p>
			</div>
		</div>
		<div>
			<h4>Social</h4>
			<div class="social-row">
				<a href="#" aria-label="Facebook" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
				<a href="#" aria-label="Twitter" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
				<a href="#" aria-label="Instagram" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
</footer>
<div class="footer-copyright">
	<p>&copy; 2025 Greenline Projects. All rights reserved. Designed by Khayelihle Dlamini</p>
</div>

<?php wp_footer(); ?>
</body>
</html>
