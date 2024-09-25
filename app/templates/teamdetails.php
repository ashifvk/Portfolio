
<?php
include('common/header.php') ?>
  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?= base_url('assets_life') ?>/img/team_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Our Team </h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="<?= base_url('home/index') ?>">Home</a></li>
          <li class="breadcrumb-item active">Our Team </li>
        </ol>
      </div>
    </div>
  </div>
 
  <div class="cs-height_150 cs-height_lg_80"></div>
  
  <section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <img src="<?= base_url('uploads/imeage/' . $member_details->image) ?>" alt="<?= $member_details->name ?>" class="cs-radius_15 w-100">
            </div>
            <div class="col-lg-6 offset-xl-1">
                <div class="cs-height_0 cs-height_lg_45"></div>
                <div class="cs-section_heading cs-style1">
                    <h2 class="cs-section_title"><?= $member_details->name ?></h2>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <h3 class="cs-section_subtitle"><?= $member_details->designation ?></h3>
                    <div class="cs-height_5 cs-height_lg_5"></div>
                    <div class="cs-separator cs-accent_bg"></div>
                    <div class="cs-height_45 cs-height_lg_25"></div>
                    <p class="cs-m0"><?= $member_details->description ?></p>
                    <div class="cs-height_25 cs-height_lg_20"></div>
                    <div class="cs-social_btns cs-style1">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- End Team Section -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <!-- Start CTA -->
  <section>
    <div class="container">
      <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?= base_url('assets_life') ?>/img/cta_bg.jpeg" >
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-cta_in">
          <h2 class="cs-cta_title cs-semi_bold cs-m0">Let's Team Up for Something Amazing!</h2>
          <div class="cs-height_70 cs-height_lg_30"></div>
          <a href="<?= base_url('contact') ?>" class="cs-text_btn">
            <span>Get In Touch</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor"/>
            </svg>            
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php
include('common/footer.php') ?>
  