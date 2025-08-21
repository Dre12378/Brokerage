<?php
/**
 * Header template for Brokerage (Bootstrap 5, hardcoded nav)
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="visually-hidden-focusable position-absolute top-0 start-0 m-2 p-2 bg-white border rounded"
   href="#content"><?php esc_html_e('Skip to content', 'brokerage'); ?></a>

<header class="site-header sticky-top bg-white border-bottom">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <!-- Brand -->
      <div class="d-flex align-items-center">
        <?php if (has_custom_logo()) : ?>
          <div class="navbar-brand m-0"><?php the_custom_logo(); ?></div>
        <?php else : ?>
          <a class="navbar-brand fw-semibold text-decoration-none" href="<?php echo esc_url( home_url('/') ); ?>">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#primaryNav"
              aria-controls="primaryNav" aria-expanded="false"
              aria-label="<?php esc_attr_e('Toggle navigation', 'brokerage'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Hardcoded Nav -->
      <div class="collapse navbar-collapse" id="primaryNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url('/platform/') ); ?>">Platform</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
              Solutions
            </a>
            <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
              <li><a class="dropdown-item" href="<?php echo esc_url( home_url('/solutions/execution/') ); ?>">Execution</a></li>
              <li><a class="dropdown-item" href="<?php echo esc_url( home_url('/solutions/risk/') ); ?>">Risk</a></li>
              <li><a class="dropdown-item" href="<?php echo esc_url( home_url('/solutions/reporting/') ); ?>">Reporting</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path('about') ) ); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( get_permalink( get_page_by_path('contact us') ) ); ?>">Contact Us</a>
          </li>
        </ul>

        <!-- Right-side actions -->
        <div class="d-flex ms-lg-3">
          <a class="btn btn-outline-secondary me-2" href="<?php echo esc_url( home_url('/login/') ); ?>">Log in</a>
          <a class="btn btn-primary" href="<?php echo esc_url( home_url('/contact/') ); ?>">Request a Demo</a>
        </div>
      </div>

    </div>
  </nav>
</header>

<main id="content" class="site-content">
