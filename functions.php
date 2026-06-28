<?php
/**
 * Greenline Projects theme functions.
 *
 * @package Greenline_Projects
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GREENLINE_VERSION', '2.1.0' );
define( 'GREENLINE_DIR', get_template_directory() );
define( 'GREENLINE_URI', get_template_directory_uri() );

/**
 * Uploaded media base URL (2026/06 folder).
 *
 * @param string $file Filename.
 */
function greenline_media( $file ) {
	return content_url( 'uploads/2026/06/' . ltrim( $file, '/' ) );
}

/**
 * Theme setup.
 */
function greenline_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'greenline-projects' ),
			'footer'  => __( 'Footer Menu', 'greenline-projects' ),
		)
	);
}
add_action( 'after_setup_theme', 'greenline_setup' );

/**
 * Meta description and Open Graph tags.
 */
function greenline_meta_tags() {
	$title       = 'Greenline Projects | Solar Energy Solutions South Africa';
	$description = "South Africa's trusted solar installation experts. Save money, beat loadshedding, and go green with Greenline Projects.";
	$url         = home_url( '/' );
	$image       = greenline_media( 'GREENLINE-PROJECTS-LOGO-1.png' );

	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
}
add_action( 'wp_head', 'greenline_meta_tags', 1 );

/**
 * Preconnect for Google Fonts.
 */
function greenline_resource_hints() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'greenline_resource_hints', 0 );

/**
 * Enqueue scripts and styles.
 */
function greenline_enqueue_assets() {
	wp_enqueue_style(
		'greenline-google-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
		array(),
		'6.5.0'
	);

	wp_enqueue_style(
		'greenline-main',
		GREENLINE_URI . '/assets/css/main.css',
		array( 'greenline-google-fonts', 'font-awesome' ),
		GREENLINE_VERSION
	);

	wp_enqueue_script(
		'greenline-main',
		GREENLINE_URI . '/assets/js/main.js',
		array(),
		GREENLINE_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'greenline_enqueue_assets' );

/**
 * Page permalink or home anchor link.
 *
 * @param string $slug Page slug.
 * @param string $anchor Optional anchor without #.
 */
function greenline_page_link( $slug, $anchor = '' ) {
	if ( is_front_page() && $anchor ) {
		return '#' . $anchor;
	}

	$page = get_page_by_path( $slug );
	if ( $page ) {
		$url = get_permalink( $page );
		if ( $anchor ) {
			$url .= '#' . $anchor;
		}
		return $url;
	}

	return $anchor ? home_url( '/#' . $anchor ) : home_url( '/' );
}

/**
 * Nav link active class helper.
 *
 * @param string $slug Page slug or 'home'.
 */
function greenline_nav_active( $slug ) {
	if ( 'home' === $slug && is_front_page() ) {
		return ' is-active';
	}
	$page = get_page_by_path( $slug );
	if ( $page && is_page( $page->ID ) ) {
		return ' is-active';
	}
	return '';
}

/**
 * Handle contact form submission via wp_mail().
 */
function greenline_handle_contact_form() {
	if ( ! isset( $_POST['greenline_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['greenline_contact_nonce'] ) ), 'greenline_contact' ) ) {
		wp_safe_redirect( home_url( '/#contact' ) );
		exit;
	}

	$name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
	$email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
	$phone   = isset( $_POST['contact_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_phone'] ) ) : '';
	$service = isset( $_POST['contact_service'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_service'] ) ) : '';
	$message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

	if ( empty( $name ) || empty( $email ) || empty( $message ) || ! is_email( $email ) ) {
		wp_safe_redirect( home_url( '/?contact=error#contact' ) );
		exit;
	}

	$to      = 'info@greenlinepro.co.za';
	$subject = 'New contact form submission – Greenline Projects';
	$body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
	$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );

	wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( home_url( '/?contact=success#contact' ) );
	exit;
}
add_action( 'admin_post_nopriv_greenline_contact', 'greenline_handle_contact_form' );
add_action( 'admin_post_greenline_contact', 'greenline_handle_contact_form' );
