<?php
/**
 * Index – Corporate Landing (Bootstrap 5)
 */
get_header();
?>

<!-- HERO -->
<section class="bg-light border-bottom">
  <div class="container py-5 py-lg-6">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="badge text-bg-primary mb-3">Brokerage Try Test</span>
        <h1 class="display-5 fw-bold lh-tight mb-3">
          Trade with confidence on a secure, modern platform
        </h1>
        <p class="lead text-secondary mb-4">
          Powerful tools, transparent pricing, and institutional-grade security—
          all in a simple dashboard your team will love.
        </p>
        <div class="d-flex gap-3">
          <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn-primary btn-lg px-4">
            Request a Demo
          </a>
          <a href="<?php echo esc_url( home_url('/about') ); ?>" class="btn btn-outline-secondary btn-lg px-4">
            Learn More
          </a>
        </div>
        <div class="text-muted small mt-3">No commitment. Quick onboarding.</div>
      </div>
      <div class="col-lg-5">
        <div class="ratio ratio-16x9 rounded-4 shadow-sm bg-white d-flex align-items-center justify-content-center">
          <div class="text-center p-4">
            <i class="bi bi-graph-up-arrow display-3 text-primary"></i>
            <p class="mt-3 mb-0">Real-time insights & risk controls</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<section class="bg-white">
  <div class="container py-4">
    <div class="row row-cols-2 row-cols-md-4 g-4 text-center align-items-center opacity-75">
      <div class="col"><span class="fw-semibold">ISO 27001</span></div>
      <div class="col"><span class="fw-semibold">SOC 2</span></div>
      <div class="col"><span class="fw-semibold">PCI DSS</span></div>
      <div class="col"><span class="fw-semibold">SLA 99.9%</span></div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="bg-light">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Built for serious teams</h2>
      <p class="text-secondary mb-0">Everything you need to execute, manage risk, and report—fast.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-4">
            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
            <h5 class="mt-3 mb-2">Low-latency Order Entry</h5>
            <p class="text-secondary mb-0">FIX-ready OMS with pre-trade risk checks and kill switch.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-4">
            <i class="bi bi-shield-lock fs-1 text-primary"></i>
            <h5 class="mt-3 mb-2">Enterprise-grade Security</h5>
            <p class="text-secondary mb-0">SSO, MFA, audit trails, and WORM logging built-in.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-4">
            <i class="bi bi-clipboard-data fs-1 text-primary"></i>
            <h5 class="mt-3 mb-2">Real-time Analytics</h5>
            <p class="text-secondary mb-0">Positions, PnL, and exposure with export-ready reports.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS / VALUE PROPS -->
<section class="bg-white">
  <div class="container py-5">
    <div class="row text-center g-4">
      <div class="col-6 col-lg-3">
        <div class="display-6 fw-bold text-primary">99.95%</div>
        <div class="text-secondary">Uptime</div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="display-6 fw-bold text-primary">&lt;30ms</div>
        <div class="text-secondary">Median Latency</div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="display-6 fw-bold text-primary">50+</div>
        <div class="text-secondary">Markets</div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="display-6 fw-bold text-primary">24/5</div>
        <div class="text-secondary">Support</div>
      </div>
    </div>
  </div>
</section>

<!-- LATEST POSTS (BLOG/NEWS) -->
<section class="bg-light border-top">
  <div class="container py-5">
    <div class="d-flex align-items-end justify-content-between mb-4">
      <div>
        <h3 class="fw-bold mb-0">Latest insights</h3>
        <div class="text-secondary">News, product updates, and market notes</div>
      </div>
      <a class="btn btn-outline-primary" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">
        View all
      </a>
    </div>

    <div class="row g-4">
      <?php
      $q = new WP_Query(['posts_per_page' => 3]);
      if ($q->have_posts()) :
        while ($q->have_posts()) : $q->the_post(); ?>
          <div class="col-md-6 col-lg-4">
            <article <?php post_class('card h-100 shadow-sm'); ?>>
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="ratio ratio-16x9">
                  <?php the_post_thumbnail('large', ['class' => 'card-img-top object-fit-cover']); ?>
                </a>
              <?php endif; ?>
              <div class="card-body">
                <h5 class="card-title mb-2">
                  <a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <p class="card-text text-secondary mb-3"><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                <a href="<?php the_permalink(); ?>" class="stretched-link">Read more</a>
              </div>
            </article>
          </div>
        <?php endwhile; wp_reset_postdata();
      else : ?>
        <p class="text-secondary">No posts yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="bg-primary text-white">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h3 class="fw-bold mb-2">Ready to modernize your brokerage?</h3>
        <p class="mb-0 opacity-75">Talk to our team and see a tailored demo in minutes.</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn-light btn-lg">
          Get Started
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
