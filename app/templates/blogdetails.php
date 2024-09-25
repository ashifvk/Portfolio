<style>
  .imgblog{
    height: 432px !important;
    width:70%;
    object-fit: cover;
  }
</style>

<?php


include('common/header.php') ?>
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?= base_url('assets_life') ?>/img/blog_details_hero_bg.jpeg">
      <div class="container">
        <div class="cs-page_heading_in">
          <h1 class="cs-page_title cs-font_50 cs-white_color">Blog Single</h1>
          <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Blog Single</li>
          </ol>
        </div>
      </div>
    </div>
  
    <div class="cs-height_150 cs-height_lg_80"></div>
   
     <section>
     <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php if (!empty($blog_posts)): ?>
                        <?php foreach ($blog_posts as $post): ?>
                            <div class="col-md-12"> 
                                <div class="cs-post cs-style2 ">
                                    <a href="blog-details.html" class="cs-post_thumb cs-radius_15">
                                        <img src="<?= base_url('uploads/imeage/' . $post['image']) ?>" alt="Post" class="w-1 cs-radius_15 img-fluid imgblog ">
                                    </a>
                                    <div class="cs-post_info">
                                        <h2 class="cs-post_title">
                                            <a href="#"><?= $post['title'] ?></a> <!-- Assuming 'title' is the column for post title -->
                                        </h2>
                                        <div class="cs-post_sub_title"><?= $post['description'] ?></div> <!-- Assuming 'description' is the column for post description -->
                                        <a href="<?= base_url('home/blogdetails') ?>"class="cs-text_btn">
                                            <span>See More</span><br><br><br>
                                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-md-12">
                            <p>No blog posts found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
      
    
         
        
          <div class="col-xl-3 col-lg-3 offset-xl-1">
            <!-- <div class="cs-height_0 cs-height_lg_80"></div>
            <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
              <div class="cs-sidebar_item author_search text-center">
                <div class="cs-author_card">
                  <img src="<?= base_url('assets_life') ?>/img/avatar_1.png" alt="Aauthor">
                  <h3>Kuber Jontra</h3>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
              </div>
              <div class="cs-sidebar_item widget_search">
                <h4 class="cs-sidebar_widget_title">Search</h4>
                <form class="cs-sidebar_search" action="#">
                  <input type="text" placeholder="Search...">
                  <button class="cs-sidebar_search_btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z" fill="currentColor" />
                    </svg>
                  </button>
                </form>
              </div>
              <div class="cs-sidebar_item widget_categories">
                <h4 class="cs-sidebar_widget_title">Categories</h4>
                <ul>
                  <li class="cat-item">
                    <a href="#">Corporate</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Company</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Search Engine</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Information</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Painting</a>
                  </li>
                </ul>
              </div>
              <div class="cs-sidebar_item">
                <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
                <ul class="cs-recent_posts">
                  <li>
                    <div class="cs-recent_post">
                      <a href="#" class="cs-recent_post_thumb">
                        <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('assets_life') ?>/img/recent_post_1.jpeg"></div>
                      </a>
                      <div class="cs-recent_post_info">
                        <h3 class="cs-recent_post_title">
                          <a href="#">How to studio setup...</a>
                        </h3>
                        <div class="cs-recent_post_date cs-primary_40_color">15 Aug 2022</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs-recent_post">
                      <a href="#" class="cs-recent_post_thumb">
                        <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('assets_life') ?>/img/recent_post_2.jpeg"></div>
                      </a>
                      <div class="cs-recent_post_info">
                        <h3 class="cs-recent_post_title">
                          <a href="#">Creative people mind...</a>
                        </h3>
                        <div class="cs-recent_post_date cs-primary_40_color">15 Aug 2022</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs-recent_post">
                      <a href="#" class="cs-recent_post_thumb">
                        <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('assets_life') ?>/img/recent_post_3.jpeg"></div>
                      </a>
                      <div class="cs-recent_post_info">
                        <h3 class="cs-recent_post_title">
                          <a href="#">AI take over human...</a>
                        </h3>
                        <div class="cs-recent_post_date cs-primary_40_color">15 Aug 2022</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs-recent_post">
                      <a href="#" class="cs-recent_post_thumb">
                        <div class="cs-recent_post_thumb_in cs-bg" data-src="<?= base_url('assets_life') ?>/img/recent_post_4.jpeg"></div>
                      </a>
                      <div class="cs-recent_post_info">
                        <h3 class="cs-recent_post_title">
                          <a href="#">You should now add...</a>
                        </h3>
                        <div class="cs-recent_post_date cs-primary_40_color">15 Aug 2022</div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="cs-sidebar_item widget_archive">
                <h4 class="cs-sidebar_widget_title">Archives</h4>
                <ul>
                  <li>
                    <a href="#">Archives</a>
                  </li>
                  <li>
                    <a href="#">15 Aug 2022</a>
                  </li>
                  <li>
                    <a href="#">20 Sep 2021</a>
                  </li>
                  <li>
                    <a href="#">11 Dec 2020</a>
                  </li>
                  <li>
                    <a href="#">25 jun 2020</a>
                  </li>
                </ul>
              </div>
              <div class="cs-sidebar_item widget_tag_cloud">
                <h4 class="cs-sidebar_widget_title">Tags</h4>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Business</a>
                  <a href="#" class="tag-cloud-link">Agency</a>
                  <a href="#" class="tag-cloud-link">Artwork</a>
                  <a href="#" class="tag-cloud-link">Marketing</a>
                  <a href="#" class="tag-cloud-link">Information</a>
                  <a href="#" class="tag-cloud-link">Design</a>
                  <a href="#" class="tag-cloud-link">Wordpress</a>
                </div>
              </div>
            </div>
          </div> -->
          </div>
        </div>
      </div>
    </section> 
    <section>
   
</section>



    
    <div class="cs-height_150 cs-height_lg_80"></div>
   
    <section>
      <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?= base_url('assets_life') ?>/img/cta_bg.jpeg">
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-cta_in">
            <h2 class="cs-cta_title cs-semi_bold cs-m0">Let's disscuse make <br>something <i>cool</i> together </h2>
            <div class="cs-height_70 cs-height_lg_30"></div>
            <a href="contact.html" class="cs-text_btn">
              <span>Get In Touch</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php
include('common/footer.php') ?>
    