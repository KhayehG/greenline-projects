(function () {
	'use strict';

	var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ── Mobile navigation ───────────────────────────────────── */
	var hamburger = document.querySelector('.hamburger');
	var navLinks  = document.getElementById('navLinks');

	if (hamburger && navLinks) {
		hamburger.addEventListener('click', function () {
			var isOpen = navLinks.classList.toggle('open');
			hamburger.classList.toggle('is-open', isOpen);
			hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
		});

		navLinks.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				navLinks.classList.remove('open');
				hamburger.classList.remove('is-open');
				hamburger.setAttribute('aria-expanded', 'false');
			});
		});
	}

	/* ── Hero slideshow ─────────────────────────────────────── */
	var hero = document.querySelector('.hero');
	if (hero) {
		var slides   = hero.querySelectorAll('.hero-slide');
		var dots     = hero.querySelectorAll('.hero-dot');
		var prevBtn  = hero.querySelector('.hero-nav--prev');
		var nextBtn  = hero.querySelector('.hero-nav--next');
		var current  = 0;
		var interval = null;
		var duration = 5000;

		function goToSlide(index) {
			if (!slides.length) return;
			current = (index + slides.length) % slides.length;
			slides.forEach(function (slide, i) {
				slide.classList.toggle('is-active', i === current);
			});
			dots.forEach(function (dot, i) {
				dot.classList.toggle('is-active', i === current);
			});
		}

		function nextSlide() { goToSlide(current + 1); }
		function prevSlide() { goToSlide(current - 1); }

		function startAutoplay() {
			if (prefersReducedMotion || slides.length < 2) return;
			stopAutoplay();
			interval = setInterval(nextSlide, duration);
		}

		function stopAutoplay() {
			if (interval) {
				clearInterval(interval);
				interval = null;
			}
		}

		if (slides.length > 1) {
			startAutoplay();

			dots.forEach(function (dot) {
				dot.addEventListener('click', function () {
					stopAutoplay();
					goToSlide(parseInt(dot.getAttribute('data-slide'), 10));
					startAutoplay();
				});
			});

			if (prevBtn) {
				prevBtn.addEventListener('click', function () {
					stopAutoplay();
					prevSlide();
					startAutoplay();
				});
			}

			if (nextBtn) {
				nextBtn.addEventListener('click', function () {
					stopAutoplay();
					nextSlide();
					startAutoplay();
				});
			}
		}
	}

	/* ── Scroll animations (Intersection Observer) ───────────── */
	if (!prefersReducedMotion && 'IntersectionObserver' in window) {
		var animateEls = document.querySelectorAll('.animate-on-scroll');
		if (animateEls.length) {
			var animObserver = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						var el = entry.target;
						var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
						setTimeout(function () {
							el.classList.add('is-visible');
						}, delay);
						animObserver.unobserve(el);
					}
				});
			}, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

			animateEls.forEach(function (el) { animObserver.observe(el); });
		}
	} else {
		document.querySelectorAll('.animate-on-scroll').forEach(function (el) {
			el.classList.add('is-visible');
		});
	}

	/* ── Stats counter ───────────────────────────────────────── */
	var statsSection = document.querySelector('.stats-section');
	if (statsSection && 'IntersectionObserver' in window) {
		var statsAnimated = false;
		var statsObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting && !statsAnimated) {
					statsAnimated = true;
					statsSection.querySelectorAll('.stat-number').forEach(function (el) {
						var target = parseInt(el.getAttribute('data-target'), 10);
						var suffix = el.getAttribute('data-suffix') || '';
						var start  = 0;
						var dur    = prefersReducedMotion ? 0 : 2000;
						var startTime = null;

						function step(timestamp) {
							if (!startTime) startTime = timestamp;
							var progress = dur === 0 ? 1 : Math.min((timestamp - startTime) / dur, 1);
							var value = Math.floor(progress * target);
							el.textContent = value + suffix;
							if (progress < 1) {
								requestAnimationFrame(step);
							} else {
								el.textContent = target + suffix;
							}
						}

						requestAnimationFrame(step);
					});
					statsObserver.unobserve(statsSection);
				}
			});
		}, { threshold: 0.3 });

		statsObserver.observe(statsSection);
	}

	/* ── Back to top ─────────────────────────────────────────── */
	var backToTop = document.querySelector('.back-to-top');
	if (backToTop) {
		window.addEventListener('scroll', function () {
			if (window.scrollY > 400) {
				backToTop.removeAttribute('hidden');
				backToTop.classList.add('is-visible');
			} else {
				backToTop.setAttribute('hidden', '');
				backToTop.classList.remove('is-visible');
			}
		}, { passive: true });

		backToTop.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
		});
	}

	/* ── Contact form client validation feedback ─────────────── */
	var contactForm = document.querySelector('.contact-form');
	if (contactForm) {
		contactForm.addEventListener('submit', function (e) {
			if (!contactForm.checkValidity()) {
				e.preventDefault();
				contactForm.reportValidity();
			}
		});
	}
})();
