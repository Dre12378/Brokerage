<?php

/**
 * Template Name: About Page (Brokerage)
 */
get_header();
?>

<!-- HERO -->
<section class="bg-light border-bottom">
  <div class="container-fluid py-5 py-lg-6">
    <div class="wrapper">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <span class="badge text-bg-primary mb-3">Brokerage Test Branch Environment</span>
          <h1 class="display-5 fw-bold lh-tight mb-3">
            About Us
          </h1>
          <p class="lead text-secondary mb-4">
            Powerful tools, transparent pricing, and institutional-grade security—
            all in a simple dashboard your team will love.
          </p>
          <div class="d-flex gap-3">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg px-4">
              Request a Demo
            </a>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-outline-secondary btn-lg px-4">
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
  </div>
</section>
<!--  -->
<nav class="container-fluid">
  <div class="wrapper">
    <div class="row gx-0">
      <div class="col-12">
        <div class="nav nav-tabs border-0 border-bottom w-100" id="nav-tab" role="tablist">
          <!-- <button class="nav-link active flex-fill text-center border-0 border-bottom border-primary"  -->
          <button class="nav-link active flex-fill text-center border-0 border-bottom"
            id="nav-home-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-home"
            type="button" role="tab"
            aria-controls="nav-home"
            aria-selected="true">
            <h6>Who We Are</h6>
          </button>

          <button class="nav-link flex-fill text-center border-0 border-bottom"
            id="nav-profile-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-profile"
            type="button" role="tab"
            aria-controls="nav-profile"
            aria-selected="false">
            <h6>Our Commitment</h6>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- TRUST STRIP -->
<section class="bg-white about-tabs">
  <div class="container-fluid">
    <div class="wrapper">

      <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="content">
                <h2>
                  Building Trust Through Transparency
                </h2>
                <p class="text-secondary">
                  At Gold Group Limited, our priority is protecting and growing our clients' investments with integrity.
                  We maintain a strong, debt-free balance sheet and keep sufficient reserves to operate without reliance on leverage.
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="rounded-4 shadow-sm overflow-hidden">
                <img src="http://localhost:8881/wp-content/uploads/2025/08/Building-Trust-Through-Transparency-scaled.jpg"
                  alt="About Image">
              </div>
            </div>
          </div>
        </div>


        <div class="tab-pane fade py-2 py-md-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="row">
            <div class="col-sm-12 col-lg-6 content">
              <h2>
                Investing in Growth, Together
              </h2>
              <p class="text-secondary mb-0">
                Gold Group Limited believes in more than just financial returns—we are committed to building stronger, more resilient communities. Through sustainable practices, forward-thinking strategies, and active participation in local initiatives, we help shape a future that benefits everyone.

                Our people play a central role in this mission. We encourage our team to make a positive difference both in the workplace and beyond, fostering a culture of responsibility and care. For our clients, this means working with a firm that is not only focused on markets, but also on long-term impact and shared success.
              </p>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="rounded-4 shadow-sm overflow-hidden">
                <img src="http://localhost:8881/wp-content/uploads/2025/08/Building-Trust-Through-Transparency-scaled.jpg"
                  alt="About Image">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="bg-primary text-white">
  <div class="container-fluid py-5">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h3 class="fw-bold mb-2">Ready to modernize your brokerage?</h3>
        <p class="mb-0 opacity-75">Talk to our team and see a tailored demo in minutes.</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-light btn-lg">
          Get Started
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>


<section class="testimonial">
  <div class="container-fluid">
    <div class="wrapper">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <div class="d-flex flex-column gap-20">

          </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <div class="">

          </div>
        </div>

      </div>
    </div>
  </div>
</section>