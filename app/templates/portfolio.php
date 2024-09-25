<?php
include('common/header.php') ?>
  
  <style>
    .cs-isotop_item {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;
    }
  </style>
  
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Portfolio</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="<?= base_url('home/index') ?>">Home</a></li>
          <li class="breadcrumb-item active">Portfolio</li>
        </ol>
      </div>
    </div>
  </div>
  
  <div class="cs-height_150 cs-height_lg_80"></div>
 
  <div class="container">
    <div class="cs-portfolio_1_heading">
      <div class="cs-section_heading cs-style1">
        <h3 class="cs-section_subtitle">Featured Projects</h3>
        <h2 class="cs-section_title">Spotlight on Our Portfolio</h2>
      </div>
      <div class="cs-isotop_filter cs-style1">
        <ul class="cs-mp0 cs-center">
          <!-- <li class="active"><a href="#" data-filter="*">All</a></li>
          <li><a href="#" data-filter=".web_design">Web Design</a></li>
          <li><a href="#" data-filter=".ui_ux_design">UI/UX Design</a></li>
          <li><a href="#" data-filter=".mobile_apps">Mobile Apps</a></li>
          <li><a href="#" data-filter=".logo_design">Logo Design</a></li> -->
        </ul>
      </div>
    </div>
       <div class="cs-height_90 cs-height_lg_15"></div>

    <div class="cs-isotop_item cs-w66 logo_design">
    <?php foreach ($portfolio_items as $item): ?>
        <a href="#" class="cs-portfolio cs-style1 cs-type1">
        <!-- <a href="<?= base_url('home/portfolio_details/') . $portfolio_item->id ?>">View Details</a> -->
            <div class="cs-portfolio_hover"></div>
            <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('uploads/imeage/' . $item->image2) ?>"></div>

            <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                <h2 class="cs-portfolio_title"><?= $item->name1 ?></h2>
                <div class="cs-portfolio_subtitle">See Details</div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>


  </div>
  <div class="cs-height_90 cs-height_lg_15"></div>

<!-- <div class="cs-isotop_item cs-w66 logo_design">
    <?php foreach ($portfolio_items as $item): ?>
        <a href="<?= base_url('home/portfolio_details/') . $item->id ?>" class="cs-portfolio cs-style1 cs-type1">
            <div class="cs-portfolio_hover"></div>
            <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('uploads/image/' . $item->image1) ?>"></div>

            <div class="cs-portfolio_info">
                <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                <h2 class="cs-portfolio_title"><?= $item->name1 ?></h2>
                <div class="cs-portfolio_subtitle">See Details</div>
            </div>
        </a>
    <?php endforeach; ?>
</div> -->



    <!-- <div class="cs-height_90 cs-height_lg_15"></div>
    <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_24">
      <div class="cs-grid_sizer"></div>
      <div class="cs-isotop_item ui_ux_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_4.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item logo_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_5.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item web_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_6.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item cs-w66 mobile_apps">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_7.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item ui_ux_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_8.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item web_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_9.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div> -->
      <!-- <div class="cs-isotop_item cs-w66 logo_design">
        <a href="<?= base_url('home/portofoliodetails') ?>" class="cs-portfolio cs-style1 cs-type1">
          <div class="cs-portfolio_hover"></div>
          <div class="cs-portfolio_bg cs-bg" data-src="<?= base_url('assets_life') ?>/img/portfolio_10.jpeg"></div>
          <div class="cs-portfolio_info">
            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
            <h2 class="cs-portfolio_title">Colorful Art Work</h2>
            <div class="cs-portfolio_subtitle">See Details</div>
          </div>
        </a>
      </div>
    </div> -->
    <div class="cs-height_90 cs-height_lg_40"></div>
    <div class="text-center">
      <a href="#" class="cs-text_btn">
        <span>Load More</span>
        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
        </svg>                
      </a>
    </div>
  </div>
  <!-- End Portfolio -->
  <div class="cs-height_145 cs-height_lg_80"></div>
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
          <a href="contact.html" class="cs-text_btn">
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
 