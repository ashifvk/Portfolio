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
    <div class="cs-height_150 cs-height_lg_80"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if (!empty($blog_post)): ?>
                    <div class="cs-post cs-style2">
                    <h2 class="cs-post_title"><?= $blog_post['title'] ?></h2>
                        <img src="<?= base_url('uploads/imeage/'.$blog_post['image']) ?>" alt="Post" class="w-100 cs-radius_15"style=" object-fit: cover;">
                        <div class="cs-post_info">
                            <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                                <span class="cs-posted_by"><?= date('d M Y', strtotime($blog_post['date'])) ?></span>
                                
                            </div>
                           
                            <div class="cs-post_sub_title">
                                <?= nl2br(htmlspecialchars($blog_post['description'], ENT_QUOTES, 'UTF-8')) ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Blog post not found.</p>
                <?php endif; ?>
            </div>
            <div class="col-xl-3 col-lg-4 offset-xl-1">
    <div class="cs-height_0 cs-height_lg_80"></div>
    <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
        <div class="cs-sidebar_item">
            <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
            <ul class="cs-recent_posts">
                <?php if (!empty($recent_blog_posts)): ?>
                    <?php foreach ($recent_blog_posts as $recent_post): ?>
                        <li>
                            <div class="cs-recent_post">
                                <a href="<?= site_url('home/blogdetail/'.$recent_post['id']) ?>" class="cs-recent_post_thumb">
                                    <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('uploads/imeage/'.$recent_post['image']) ?>"></div>
                                </a>
                                <div class="cs-recent_post_info">
                                    <h3 class="cs-recent_post_title">
                                        <a href="<?= site_url('home/blogdetail/'.$recent_post['id']) ?>"><?= $recent_post['title'] ?></a>
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
</div>

        </div>
    </div>
</section>

<div class="cs-height_150 cs-height_lg_80"></div>
    
    <?php
include('common/footer.php') ?>

