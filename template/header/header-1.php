<?php

$header_btn_text = get_theme_mod('header_btn_text', __('Explore More','aidzone'));
$header_btn_url = get_theme_mod('header_btn_url', __('#'), 'aidzone');

$address = get_theme_mod('address_text', __('The queens walk, TSV 3456','aidzone'));
$address_url = get_theme_mod('address_url', __('#'), 'aidzone');
$email_address = get_theme_mod('email_address', __('needhelp@mail.com'), 'aidzone');

$top_hader_switch = get_theme_mod('top_hader_switch', true);

?>

<header class="tp-header-height">
<!-- header area start -->
<div class="tp-header-area tp-header-style-2 tp-header-style-3">
   <div class="tp-header-wrapp">

      <?php if($top_hader_switch == 'on') : ?>
      <div class="tp-header-top-area black-bg d-none d-md-block">
         <div class="container">
            <div class="tp-header-top-wrapp">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6">
                     <div class="tp-header-info d-flex align-items-center">
                        <div class="tp-header-info-social">
                           <?php aidzone_social(); ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-8 col-md-8 d-none d-md-block">
                     <div class="tp-header-info tp-header-info-bg d-flex align-items-center justify-content-end">
                        <?php if(!empty($address)) : ?>
                        <h3 class="tp-header-info-text tp-header-info-center">
                           <a href="<?php echo esc_url($address_url); ?>"><i class="fa-light fa-location-dot"></i> <?php echo esc_html($address); ?></a>
                        </h3>
                        <?php endif; ?>

                        <?php if(!empty($email_address)) : ?>
                        <h3 class="tp-header-info-text">
                           <a href="mailto:<?php echo esc_url($email_address); ?>">
                              <i class="fa-light fa-envelope"></i> <?php echo esc_html($email_address); ?>
                           </a>
                        </h3>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>             
         </div>
      </div>
      <?php endif; ?>  
      
      <div class="tp-header-bottom-area white-bg">
         <div id="header-sticky" class="tp-header-bottom-area header-3">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-6 col-md-5 col-sm-6 col-6">
                     <div class="tp-main-logo">
                           <?php echo header_logo(); ?>
                     </div>
                  </div>
                  <div class="col-xl-7 d-none d-xl-block">
                     <div class="tp-main-menu d-flex justify-content-end">
                        <nav class="tp-main-menu-content tp-mobile-menu-active">
                           <?php aidzone_menu(); ?>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-7 col-sm-6 col-6">
                     <div class="tp-header-bottom-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-bottom-icon d-none d-xl-block">
                           <ul>
                              <li>
                                 <div class="tp-header-icon">
                                    <button class="search-open-btn">
                                       <span>
                                          <i class="flaticon-search"></i>
                                       </span>
                                    </button>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="tp-header-bottom-action d-flex align-items-center">

                           <?php if(!empty($header_btn_text)) : ?>
                           <div class="tp-header-bottom-btn">
                              <a href="<?php echo esc_url($header_btn_url); ?>" class="tp-theme-btn btn-black"><?php echo esc_html($header_btn_text); ?></a>
                           </div>
                           <?php endif; ?>

                        </div>
                        <div class="tp-main-menu-bars d-block d-xl-none">
                           <button class="tp-offcanvas-toogle">
                              <i class="far fa-bars"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- header area end -->
</header>