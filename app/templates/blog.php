
<?php
include('common/header.php') ?>
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?= base_url('assets_life') ?>/img/contact_hero_bg.jpeg">
      <div class="container">
        <div class="cs-page_heading_in">
          <h1 class="cs-page_title cs-font_50 cs-white_color">Our Blog</h1>
          <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Blog</li>
          </ol>
        </div>
      </div>
    </div>
    
    <div class="cs-height_150 cs-height_lg_80"></div>
  
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if (!empty($blog_posts)): ?>
                    <?php foreach ($blog_posts as $post): ?>
                        <div class="cs-post cs-style2">
                        <h2 class="cs-post_title">
                                    <a href="<?= base_url('home/blogdetail/'.$post['id']) ?>"><?= $post['title'] ?></a>
                                </h2>
                            <a href="<?= base_url('home/blogdetail/'.$post['id']) ?>" class="cs-post_thumb cs-radius_15">
                                <img src="<?= base_url('uploads/imeage/'.$post['image']) ?>" alt="Post" class="w-100 cs-radius_15"style="height: auto; object-fit: cover;">
                            </a>
                            <div class="cs-post_info">
                                <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                                    <span class="cs-posted_by"><?= date('d M Y', strtotime($post['date'])) ?></span>
                                </div>
                               
                                <div class="cs-post_sub_title">
                                    <?php 
                                    $words = explode(' ', $post['description']);
                                    $limited_words = array_slice($words, 0, 40); 
                                    $limited_description = implode(' ', $limited_words) . (count($words) > 40 ? '...' : ''); 
                                    echo nl2br(htmlspecialchars($limited_description, ENT_QUOTES, 'UTF-8'));
                                    ?>
                                    <?php if (count($words) > 40) : ?>
                                        <a href="<?= base_url('home/blogdetail/'.$post['id']) ?>" class="read-more" style="font-size: 14px;"><b>Read more</b></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_95 cs-height_lg_60"></div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No blog posts found.</p>
                <?php endif; ?>
            </div>
            <!-- <div class="col-xl-3 col-lg-4 offset-xl-1">
                <div class="cs-height_0 cs-height_lg_80"></div>
                <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
                    <div class="cs-sidebar_item">
                        <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
                        <ul class="cs-recent_posts">
                            <?php if (!empty($recent_blog_posts)): ?>
                                <?php foreach ($recent_blog_posts as $recent_post): ?>
                                    <li>
                                        <div class="cs-recent_post">
                                            <a href="<?= base_url('home/blogdetail/'.$recent_post['id']) ?>" class="cs-recent_post_thumb">
                                                <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('uploads/imeage/'.$recent_post['image']) ?>"></div>
                                            </a>
                                            <div class="cs-recent_post_info">
                                                <h3 class="cs-recent_post_title">
                                                    <a href="<?= base_url('home/blogdetail/'.$recent_post['id']) ?>"><?= $recent_post['title'] ?></a>
                                                </h3>
                                                <div class="cs-recent_post_date cs-primary_40_color"><?= date('d M Y', strtotime($recent_post['date'])) ?></div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No recent posts found.</p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

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
    <div class="cs-height_150 cs-height_lg_80"></div>
    
    <?php
include('common/footer.php') ?>

    