<?php

$header_btn_text = get_theme_mod('header_btn_text', __('Explore More','aidzone'));
$header_btn_url = get_theme_mod('header_btn_url', __('#'), 'aidzone');

$address = get_theme_mod('address_text', __('The queens walk, TSV 3456','aidzone'));
$address_url = get_theme_mod('address_url', __('#'), 'aidzone');
$email_address = get_theme_mod('email_address', __('needhelp@mail.com'), 'aidzone');

$top_hader_switch = get_theme_mod('top_hader_switch', true);

?>



<div class="tp-offcanvas">
      <div class="tp-offcanvas-wrapper">
         <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="tp-offcanvas-logo">
              <?php header_logo(); ?>
            </div>
            <div class="tp-offcanvas-close">
               <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="tp-offcanvas-menu d-xl-none mb-50">
            <nav></nav>
         </div>
         <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
            <h2 class="tp-offcanvas-title">Hello There!</h2>
            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
         </div>
         <div class="tp-offcanvas-gallery mb-50">
            <?php aidzone_social(); ?>
         </div>
         <div class="tp-offcanvas-info mb-50">
            <h3 class="tp-offcanvas-sm-title">Information</h3>
            <span><a href="#">+ 4 20 7700 1007</a></span>
            <span><a href="#">hello@exdos.com</a></span>
            <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
         </div>
         <div class="tp-offcanvas-social mb-50">
            <h3 class="tp-offcanvas-sm-title">Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>