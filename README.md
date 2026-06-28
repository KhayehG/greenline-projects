# Greenline Projects — WordPress Theme

A custom, fully responsive WordPress theme for **Greenline Projects**, a South African solar energy and renewable solutions company. Built as part of the **Dotcom Africa Practical Assessment**, matching the official mockup with additional UX and performance enhancements.

**Live demo:** [greenlineprojects.infinityfreeapp.com](http://greenlineprojects.infinityfreeapp.com)

---

## Preview

| Desktop | Mobile |
|---------|--------|
| Full-width hero slideshow, benefits grid, services, testimonials, contact form | Responsive navigation, stacked sections, touch-friendly layout |

---

## Features

### Core sections (mockup)
- Sticky header with logo and navigation
- Hero area with headline and **Go Solar!** CTA
- **Solar Energy – Benefits** — 4-column card grid
- **Our Services** — dark 3×2 service grid
- **Who We Are** — company story with logo
- **Anti-Loadshedding Formula** — 3-step process flow
- CTA banners and contact section with Google Maps
- Footer with navigation, contact, and social links

### Enhancements beyond mockup
- **Hero slideshow** — 3 slides, auto-rotate, Ken Burns effect, dot + arrow navigation
- **Scroll animations** — Intersection Observer, `prefers-reduced-motion` safe
- **Stats counters** — animated “Our Track Record” section
- **Service hover cards** — lift, green border, icon scale, description reveal
- **Testimonials** — 3 client review cards
- **Contact form** — HTML5 validation + `wp_mail()` handler
- **Back to top** button
- **Mobile nav** — slide-down menu with close icon
- **Performance** — lazy-loaded images, font preconnect, Open Graph meta tags
- **Footer upgrade** — logo, operating hours, copyright bar, social tooltips

---

## Brand

| Token | Value |
|-------|-------|
| Primary green | `#1B9D44` |
| Dark gray | `#333333` |
| Typography | Montserrat, Open Sans |

---

## Tech stack

- WordPress 6.x
- PHP 8.x
- HTML5, CSS3, Vanilla JavaScript (no jQuery)
- MySQL
- Font Awesome 6
- Google Fonts

---

## Installation

### Requirements
- WordPress 6.0+
- PHP 7.4+
- MySQL / MariaDB

### Local setup (XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** + **MySQL**.
2. Create a MySQL database named `greenline`.
3. Install WordPress into your `htdocs` folder (e.g. `htdocs/greenline/`).
4. Copy this theme folder to:
   ```
   wp-content/themes/greenline-projects/
   ```
5. In **WordPress Admin → Appearance → Themes**, activate **Greenline Projects**.
6. Create pages: Home, About, Installations, Contact, Shop.
7. Go to **Settings → Reading** → set **Homepage displays** to **A static page** → select **Home**.
8. Upload media assets (`src1.png`–`src16.png`, logo) via **Media Library** to `wp-content/uploads/2026/06/`.
9. Visit your local site (e.g. `http://localhost/greenline/`).

### Contact form
Submissions are sent via `wp_mail()` to `info@greenlinepro.co.za`. On local XAMPP, configure mail (SMTP plugin recommended) for delivery to work.

---

## Theme structure

```
greenline-projects/
├── style.css           # Theme header
├── functions.php       # Setup, assets, contact form handler
├── header.php          # Navigation
├── footer.php          # Footer + copyright
├── front-page.php      # Homepage template
├── page.php            # Inner pages
├── index.php           # Fallback template
└── assets/
    ├── css/main.css    # All styles
    ├── js/main.js      # Slideshow, animations, counters
    └── images/         # Theme fallbacks (logo, hero)
```

---

## Author

**Khayelihle Genius Dlamini**

- GitHub: [@KhayehG](https://github.com/KhayehG)
- Email: [www.mrdlamini321@gmail.com](mailto:www.mrdlamini321@gmail.com)
- Phone: 074 842 4792

---

## License

GNU General Public License v2 or later — same as WordPress.
