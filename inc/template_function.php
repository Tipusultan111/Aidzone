<?php

function header_logo(){
    $logo_url = get_theme_mod('logo_url', get_template_directory_uri().'/assets/img/logo/logo.png');
    ?>
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($logo_url);?>" alt=""></a>
    <?php
}
// header search logo
function header_search_logo(){
    $search_logo = get_theme_mod('search_logo', get_template_directory_uri().'/assets/img/logo/logo-white.png');
    ?>
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($search_logo);?>" alt=""></a>
    <?php
}

function aidzone_social(){
        $fb_id = get_theme_mod('fb_id', '#');
        $ins_id = get_theme_mod('ins_id', '#');
        $tw_id = get_theme_mod('tw_id', '#');
        $pin_id = get_theme_mod('pin_id', '#');
    ?>
        <?php if(!empty($fb_id)): ?>
            <a href="<?php echo esc_url($fb_id); ?>"><i class="fa-brands fa-facebook"></i></a>
        <?php endif; ?>

        <?php if(!empty($ins_id)): ?>
            <a href="<?php echo esc_url($ins_id); ?>"><i class="fa-brands fa-instagram"></i></a>
        <?php endif; ?>

        <?php if(!empty($tw_id)): ?>
            <a href="<?php echo esc_url($tw_id); ?>"><i class="fa-brands fa-twitter"></i></a>
        <?php endif; ?>

        <?php if(!empty($pin_id)): ?>
            <a href="<?php echo esc_url($pin_id); ?>"><i class="fa-brands fa-pinterest"></i></a>
        <?php endif; ?>
    <?php
}

// aidzone menu walker
function aidzone_menu(){

    wp_nav_menu( 
        array( 
            'theme_location'  => 'main-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'container'      => '',
            'fallback_cb'     => 'Aidzone_Nav_Walker_Menu::fallback',
            'walker'     => new Aidzone_Nav_Walker_Menu,
        ) 
    ); 

}