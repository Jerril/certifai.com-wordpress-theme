<?php
    $header_footer = get_posts(array("name"=>"page-header-footer", "post_type"=>"page", "numberposts"=>-1));
    $header_footer = $header_footer[0];

    $logos = $header_footer->logo_group ?? '';

    $login_btn_grp = $header_footer->login_button_group ?? '';
    $login_url = $login_btn_grp['login_url'] ?? '';
    $login_new_tab = $login_btn_grp['login_new_tab'] ?? '';

    $signup_btn_grp = $header_footer->signup_button_group ?? '';
    $signup_url = $signup_btn_grp['signup_url'] ?? '';
    $signup_new_tab = $signup_btn_grp['signup_new_tab'] ?? '';

    $fb_tracking_code_script = $header_footer->general_fb_tracking_code_script ?? '';
    $fb_tracking_code_noscript = $header_footer->general_fb_tracking_code_noscript ?? '';

    $seo_pixel_grp = rwmb_meta('seo_fb_pixel');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo rwmb_meta('page_meta_description') ?? ''; ?>">
    <meta name="keywords" content="<?php echo rwmb_meta('page_meta_keywords') ?? ''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo get_theme_file_uri( "assets/images/favicon.png" ); ?>" type="image/gif" sizes="16x16">
    <meta property="og:image" content="<?php echo rwmb_meta('sm_feature_image') ?? ''; ?>">
    <title>
      <?php echo rwmb_meta('page_meta_title') ? rwmb_meta('page_meta_title') : "Certifai Program - ".rwmb_meta('program_title'); ?>
    </title>

    <script src="https://kit.fontawesome.com/0da91a7850.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css" /> -->
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet" />

    <!-- Analytics code -->
    <script><?php echo $fb_tracking_code_script; ?></script>
    <noscript><?php echo $fb_tracking_code_noscript; ?></noscript>

    <script>
      fbq('trackCustom', '<?php echo $seo_pixel_grp['seo_event']??''; ?>', {scenario:<?php echo $seo_pixel_grp['seo_scenario']??''; ?>});
    </script>
  </head>

  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-md p-0 m-0 mobilenavigation pb-3 pb-md-0 secondaryheader darkborderbottom <?php if(is_single()) echo 'boldbordertopbig'; ?>">
      <div class="d-flex justify-content-between width100">
        <div class="d-block d-md-none">
          <div class="d-flex align-items-center">
            <a class="navbar-brand logo-icon-mobile borderright pr-2 mr-2" href="<?php echo site_url(); ?>">
            
              <img src="<?php echo wp_get_attachment_image_url($logos['header_logo'] ?? '', 'full'); ?>" alt="certifai logo" class="img-fluid" />
            </a>
            <p class="smallparagraph mb-0">For High Flyers</p>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
          <i class="fas fa-bars torquise"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse horizontalspacing my-4" id="navbarSupportedContent" >
        <div class=" d-flex flex-column flex-md-row justify-content-md-between w-100 navigationflexspacing">
          <div class="firstcontent d-none d-md-block">
            <div class="d-flex align-items-center">
              <a class="navbar-brand logo-icon-mobile borderright pr-2 mr-2" href="<?php echo site_url(); ?>">
                <img src="<?php echo wp_get_attachment_image_url($logos['header_logo'] ?? '', 'full'); ?>" alt="certifai logo" class="img-fluid" />
              </a>
              <p class="smallparagraph mb-0">For High Flyers</p>
            </div>
          </div>
          <div class="secondcontent p-0 m-0">
            <a href="<?php echo site_url(); ?>" class="maincolor largetext"></a>
          </div>

          <!-- Navigation Links -->
          <ul class="thirdcontent d-flex flex-md-row justify-content-between flex-column">
            <?php
              $nav_links = $header_footer->nav_links ?? '';

              if(!empty($nav_links)){
                foreach($nav_links as $link){ 
                    $pixel_grp = $link['nav_fb_pixel'] ?? '';
                  ?>
                  <li class="nav-item mb-0">
                    <a class="nav-link text-dark" href="<?php echo $link['link_url']??''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['nav_event']??''; ?>', {scenario:<?php echo $pixel_grp['nav_scenario']??''; ?>})" target="<?php echo (($link['nav_link_new_tab']??'') == "yes")?"_blank":""; ?>">
                      <?php echo $link['link_label']??''; ?>
                    </a>
                  </li>
                <?php }
              }
            ?>
          </ul>
          <!-- Navigation Links -->
          
          <?php
            // if(is_user_logged_in()){ ?>
              <!-- <ul class="forthcontent mb-0">
                <a href="https://lms.certifai.com/school-dashboard/">
                  <button class="btn loginbtncertifai px-4 py-2 mx-2">Go to dashboard</button>
                </a>
              </ul> -->
            <?php 
          // }else{ 
            ?>
              <!-- <ul class="forthcontent mb-0">
                <a href="<?php echo $login_url; ?>" target="<?php echo ($login_new_tab == "yes")?"_blank":""; ?>">
                  <button class="btn loginbtncertifai px-4 py-2 mx-2">Login</button>
                </a>
                <a href="<?php echo $signup_url; ?>" target="<?php echo ($signup_new_tab == "yes")?"_blank":""; ?>">
                  <button class="btn genbtncertifai px-4 py-2 mx-2">Sign Up</button>
                </a>
              </ul> -->
            <?php 
            // }
          ?>
          <ul class="forthcontent mb-0">
            <a href="<?php echo site_url('#classesSection'); ?>" onclick="fbq('trackCustom', 'joinClass', {scenario: 'null'});">
              <button class="btn genbtncertifai px-4 py-2 mx-2">Join a class</button>
            </a>
          </ul>
        </div>
      </div>
    </nav>
