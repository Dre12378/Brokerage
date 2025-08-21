<?php
/**
 * Template Name: Contact Us (Brokerage)
 */
get_header();
?>

<!-- HERO -->
<section class="bg-light border-bottom">
  <div class="container py-5 py-lg-6">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="badge text-bg-primary mb-3">Brokerage Test Branch Environment</span>
        <h1 class="display-5 fw-bold lh-tight mb-3">
          Contact Us.
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


<?php get_footer(); ?>
