<?php
include('common/header.php');
?>
<style>
  /* Mobile view styles */
  /* @media (max-width: 767.98px) { 
    img {
      border: 0;
      max-width: fit-content;
      object-fit: cover;
    }
  } */

  /* Ensure proper scaling and styling for other viewports */
 
</style>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_details_bg.jpeg">
  <div class="container">
    <div class="cs-page_heading_in">
      <h1 class="cs-page_title cs-font_50 cs-white_color">Portfolio Details</h1>
      <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
        <li class="breadcrumb-item active">Portfolio Details</li>
      </ol>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- Portfolio Details Section -->
<div class="cs-height_150 cs-height_lg_80"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="cs-portfolio_details">
        <img src="<?= base_url('uploads/imeage/' . $portfoileo_post['image']) ?>" alt="<?= htmlspecialchars($portfoileo_post['name'], ENT_QUOTES, 'UTF-8'); ?>" class="cs-radius_15 w-100">
      </div>
    </div>
    <div class="col-lg-5 offset-lg-1">
      <div class="cs-height_60 cs-height_lg_40"></div>
      <h2 class="cs-font_30 cs-font_26_sm cs-m0">Project Info -</h2>
      <div class="cs-height_50 cs-height_lg_30"></div>
      <div class="row">
        <div class="col-6">
          <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Category:</h3>
          <p class="cs-m0"><?= htmlspecialchars($portfoileo_post['category'], ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-6">
          <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Location:</h3>
          <p class="cs-m0"><?= htmlspecialchars($portfoileo_post['location'], ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-6">
          <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Software:</h3>
          <p class="cs-m0"><?= htmlspecialchars($portfoileo_post['software'], ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-6">
          <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Date:</h3>
          <p class="cs-m0"><?= date('d-M-Y', strtotime($portfoileo_post['date'])); ?></p>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-6">
          <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Client:</h3>
          <p class="cs-m0"><?= htmlspecialchars($portfoileo_post['client'], ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="cs-height_90 cs-height_lg_40"></div>

  <div class="row">
    <div class="col-lg-8">
      <div class="cs-section_heading cs-style1">
        <h2 class="cs-section_title"><?= htmlspecialchars($portfoileo_post['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <div class="cs-height_40 cs-height_lg_20"></div>
        <p><?= nl2br(htmlspecialchars($portfoileo_post['description'], ENT_QUOTES, 'UTF-8')); ?></p>
      </div>
    </div>
  </div>

  <div class="cs-height_65 cs-height_lg_10"></div>

  <div class="cs-page_navigation cs-center">
    <!-- Add page navigation if needed -->
  </div>
</div>

<div class="cs-height_145 cs-height_lg_80"></div>

<!-- Start CTA -->
<section>
  <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1 rounded-0" data-src="<?= base_url('assets/img/cta_bg_2.jpeg') ?>">
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="cs-cta_in">
      <h2 class="cs-cta_title cs-semi_bold cs-m0">info@evoxign.com</h2>
    </div>
  </div>
</section>

<?php
include('common/footer.php');
?>
