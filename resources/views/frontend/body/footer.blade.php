<footer class="site-footer" role="contentinfo">
  <div class="site-footer__container">
    <div class="site-footer__grid">
      <!-- Brand / About / Newsletter -->
      <div class="site-footer__brand">
        <a class="site-footer__brand-link" href="{{ url('/') }}" aria-label="{{ config('app.name', 'Portfolio') }} home">
          <span class="site-footer__logo" aria-hidden="true">
            <svg viewBox="0 0 32 32" width="28" height="28" xmlns="http://www.w3.org/2000/svg" fill="none">
              <defs>
                <linearGradient id="g" x1="0" y1="0" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#22d3ee"/>
                  <stop offset="1" stop-color="#38bdf8"/>
                </linearGradient>
              </defs>
              <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#g)"/>
              <path d="M10 20.5c0-4.418 3.582-8 8-8h4v3h-4a5 5 0 0 0 0 10h4v3h-4c-4.418 0-8-3.582-8-8Z" fill="#0b1220"/>
            </svg>
          </span>
          <span class="site-footer__brand-name">{{ config('app.name', 'Portfolio') }}</span>
        </a>
        <p class="site-footer__brand-desc">
          Full‑stack developer crafting fast, accessible web experiences. Delivering clean code, elegant UX, and measurable results.
        </p>

        <ul class="site-footer__social" aria-label="Social links">
          <li><a href="https://github.com/yourusername" target="_blank" rel="noopener" aria-label="GitHub">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M12 2C6.476 2 2 6.486 2 12.026c0 4.425 2.865 8.18 6.839 9.504.5.095.682-.218.682-.485 0-.24-.009-.876-.014-1.72-2.782.605-3.369-1.343-3.369-1.343-.454-1.156-1.11-1.464-1.11-1.464-.908-.623.069-.61.069-.61 1.004.071 1.532 1.032 1.532 1.032.892 1.53 2.341 1.088 2.91.833.091-.649.35-1.088.636-1.339-2.22-.254-4.555-1.114-4.555-4.956 0-1.094.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.027A9.563 9.563 0 0 1 12 6.844a9.55 9.55 0 0 1 2.505.337c1.91-1.297 2.749-1.027 2.749-1.027.545 1.378.202 2.397.1 2.65.64.7 1.028 1.594 1.028 2.688 0 3.852-2.339 4.699-4.566 4.948.36.31.68.92.68 1.856 0 1.34-.012 2.421-.012 2.751 0 .269.18.583.688.484A10.03 10.03 0 0 0 22 12.026C22 6.486 17.523 2 12 2Z"/></svg>
          </a></li>
          <li><a href="https://www.linkedin.com/in/yourusername" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4V23h-4V8zm7.5 0h3.8v2.05h.05c.53-1 1.83-2.05 3.77-2.05C20.6 8 23 10.42 23 14.61V23h-4v-7.23c0-1.72-.03-3.93-2.39-3.93-2.4 0-2.77 1.87-2.77 3.81V23h-4V8z"/></svg>
          </a></li>
          <li><a href="https://twitter.com/yourusername" target="_blank" rel="noopener" aria-label="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M19.633 7.997c.013.176.013.353.013.53 0 5.387-4.1 11.602-11.602 11.602-2.309 0-4.457-.676-6.262-1.84.322.037.63.05.965.05a8.2 8.2 0 0 0 5.09-1.753 4.1 4.1 0 0 1-3.827-2.84c.253.038.506.063.772.063.372 0 .744-.05 1.092-.139A4.093 4.093 0 0 1 2.8 9.436v-.05c.547.303 1.18.493 1.854.518A4.09 4.09 0 0 1 2.788 6.3a11.62 11.62 0 0 0 8.43 4.279 4.616 4.616 0 0 1-.101-.94A4.09 4.09 0 0 1 15.2 5.554a8.037 8.037 0 0 0 2.594-.987 4.106 4.106 0 0 1-1.802 2.257 8.206 8.206 0 0 0 2.36-.63 8.829 8.829 0 0 1-1.72 1.803Z"/></svg>
          </a></li>
          <li><a href="https://instagram.com/yourusername" target="_blank" rel="noopener" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M12 2.162c3.204 0 3.584.012 4.85.07 1.17.055 1.97.24 2.43.401a4.92 4.92 0 0 1 1.78 1.158 4.92 4.92 0 0 1 1.159 1.78c.16.46.345 1.26.4 2.43.059 1.266.071 1.646.071 4.85s-.012 3.584-.07 4.85c-.056 1.17-.241 1.97-.402 2.43a4.92 4.92 0 0 1-1.158 1.78 4.92 4.92 0 0 1-1.78 1.159c-.46.16-1.26.345-2.43.4-1.266.059-1.646.071-4.85.071s-3.584-.012-4.85-.07c-1.17-.056-1.97-.241-2.43-.402a4.92 4.92 0 0 1-1.78-1.158 4.92 4.92 0 0 1-1.159-1.78c-.16-.46-.345-1.26-.4-2.43C2.174 15.584 2.162 15.204 2.162 12s.012-3.584.07-4.85c.056-1.17.241-1.97.402-2.43a4.92 4.92 0 0 1 1.158-1.78 4.92 4.92 0 0 1 1.78-1.159c.46-.16 1.26-.345 2.43-.4C8.416 2.174 8.796 2.162 12 2.162Zm0 1.838c-3.16 0-3.53.012-4.774.07-1.028.047-1.585.22-1.955.366-.492.19-.843.417-1.212.786-.37.369-.597.72-.786 1.212-.146.37-.319.927-.366 1.955-.058 1.245-.07 1.615-.07 4.775s.012 3.53.07 4.774c.047 1.028.22 1.585.366 1.955.19.492.417.843.786 1.212.369.37.72.597 1.212.786.37.146.927.319 1.955.366 1.245.058 1.615.07 4.775.07s3.53-.012 4.774-.07c1.028-.047 1.585-.22 1.955-.366.492-.19.843-.417 1.212-.786.37-.369.597-.72.786-1.212.146-.37.319-.927.366-1.955.058-1.245.07-1.615.07-4.775s-.012-3.53-.07-4.774c-.047-1.028-.22-1.585-.366-1.955a3.08 3.08 0 0 0-.786-1.212 3.08 3.08 0 0 0-1.212-.786c-.37-.146-.927-.319-1.955-.366-1.245-.058-1.615-.07-4.775-.07Zm0 3.62a4.38 4.38 0 1 1 0 8.76 4.38 4.38 0 0 1 0-8.76Zm0 1.8a2.58 2.58 0 1 0 0 5.16 2.58 2.58 0 0 0 0-5.16Zm5.58-2.8a1.02 1.02 0 1 1 0 2.04 1.02 1.02 0 0 1 0-2.04Z"/></svg>
          </a></li>
        </ul>

        <form class="site-footer__newsletter" action="#" method="post" novalidate>
          @csrf
          <label class="sr-only" for="newsletter-email">Email address</label>
          <input id="newsletter-email" name="email" type="email" inputmode="email" autocomplete="email" placeholder="Your email" required />
          <button type="submit">Subscribe</button>
          <small class="site-footer__note">No spam. Unsubscribe any time.</small>
        </form>
      </div>

      <!-- Quick Links -->
      <nav class="site-footer__links" aria-label="Quick links">
        <h4 class="site-footer__title">Quick Links</h4>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Resources -->
      <nav class="site-footer__links" aria-label="Resources">
        <h4 class="site-footer__title">Resources</h4>
        <ul>
          <li><a href="/faq">FAQs</a></li>
          <li><a href="/privacy-policy">Privacy Policy</a></li>
          <li><a href="/terms">Terms of Service</a></li>
          <li><a href="/sitemap.xml">Sitemap</a></li>
          <li><a href="/rss.xml">RSS</a></li>
        </ul>
      </nav>

      <!-- Contact -->
      <div class="site-footer__contact">
        <h4 class="site-footer__title">Contact</h4>
        <ul class="site-footer__contact-list">
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7Zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5Z"/></svg>
            <span>Kabul, Afghanistan</span>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.1.37 2.28.57 3.58.57a1 1 0 0 1 1 1v3.49a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.3.2 2.48.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z"/></svg>
            <a href="tel:+1234567890">+93 799 064 435</a>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5L4 8V6l8 5 8-5v2Z"/></svg>
            <a href="mailto:hello@example.com">hello@example.com</a>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2Zm1 14.93V19h-2v-2.07a8.001 8.001 0 0 1-5.93-5.93H4v-2h1.07A8.001 8.001 0 0 1 11 4.07V2h2v2.07A8.001 8.001 0 0 1 18.93 11H20v2h-1.07A8.001 8.001 0 0 1 13 16.93Z"/></svg>
            <span>Available Mon–Fri, 9am–6pm</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="site-footer__bottom">
      <p class="site-footer__copyright">© {{ date('Y') }} {{ config('app.name', 'Portfolio') }}. All rights reserved.</p>
      <ul class="site-footer__legal">
        <li><a href="/privacy-policy">Privacy</a></li>
        <li><a href="/terms">Terms</a></li>
        <li><a href="/sitemap.xml">Sitemap</a></li>
      </ul>
    </div>
  </div>

  <style>



    @media (max-width: 768px) {

    }

  </style>
</footer>
