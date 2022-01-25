<?php get_header(); ?>
    <main>
      <section class="topsection relativecontainer mb-5">
        <div>
          <div class="absoluteicon1">
            <img
              src="<?php echo get_theme_file_uri( "assets/images/backgroundorangeicons.png" )?>"
              alt=""
              class="img-fluid"
            />
          </div>

          <div class="absoluteimage1">
            <div class="imgcontain">
              <img
                src="<?php echo get_theme_file_uri( "assets/images/topheaderimages2.png" )?>"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
          
          <div class="absoluteimage4">
            <div class="imgcontain">
              <img src="<?php echo get_theme_file_uri( "assets/images/topheaderimages4.png"); ?>" alt="" class="img-fluid" />
            </div>
          </div>

          <div class="absoluteicon2">
            <div class="imgcontain">
              <img src="<?php echo get_theme_file_uri( "assets/images/bgicons.png" ); ?>" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="absoluteimage2">
            <div class="imgcontain">
              <img src="<?php echo get_theme_file_uri("assets/images/topheaderimages1.png"); ?>" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="absoluteimage2">
            <div class="imgcontain">
              <img src="<?php echo get_theme_file_uri("assets/images/topheaderimages1.png"); ?>" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="absoluteimage3">
            <div class="imgcontain">
              <img src="<?php echo get_theme_file_uri("assets/images/topheaderimages1.png"); ?>" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center verticalmargincenter z4">
          <div class="contentwidth">
            <h1 class="text-center bluecolor mainmerriheader">
              <?php echo rwmb_meta('hs_header'); ?>
            </h1>
            <p class="biggerparagraph text-center px-md-5 my-4">
              <?php echo rwmb_meta('hs_snippet'); ?>
            </p>
          </div>
        </div>

        <!-- hero section features -->
        <div class="greyboxcontainer px-3 px-md-0">
          <?php
            $features = rwmb_meta('features');
            if(!empty($features)){
              $var = 1;
              foreach($features as $feature){ ?>
<<<<<<< HEAD
                  <div class="greybox<?php echo $var; ?> rounded20 greyboxes text-center p-3">
=======
                  <div class="greybox<?php echo $var; ?> greyboxes text-center p-3">
>>>>>>> 15f3c73649b913631f56b26009cd817e97b8b282
                    <i class="fa fa-bolt boltyellow" aria-hidden="true"></i>

                    <h2 class="mainmerriheader2 my-1 py-1"><?php echo $feature['title'] ?? ''; ?></h2>

                    <p class="medparagraph">
                      <?php echo $feature['description'] ?? ''; ?>
                    </p>
                  </div>
              <?php $var += 1; }
            }
          ?>
        </div>
        <!-- end-hero section features -->
      </section>
      
      <?php
        $btn_grp = rwmb_meta('hms_button_group');
      ?>
      <section class="lightbluecolorbg" id="classesSection">
        <div class="d-flex justify-content-center py-5">
          <div class="">
            <div class="d-flex justify-content-center">
              <div class="width75">
                <h2 class="mainmerriheader3 text-center"><?php echo rwmb_meta('cs_section_label'); ?></h2>
                <p class="medparagraph text-center mb-1 pb-4">
                  <?php echo rwmb_meta('cs_section_summary'); ?>
                </p>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <div>
                <!-- learning product group -->
<<<<<<< HEAD
                <div class="accordion horizontalpadding3" id="accordionFeaturesOne">
                  <?php
                    $learning_product_groups = rwmb_meta('learning_product_group');
                    if(!empty($learning_product_groups)){
                      foreach($learning_product_groups as $i => $item){ ?>
                        <div class="my-3 py-1 bg-white rounded20">
                          <div class="">
                            <div class="" id="heading<?php echo in_words($i+1); ?>">
                              <div class="d-flex justify-content-between align-items-center px-md-4 px-3 py-3" data-toggle="collapse" data-target="#collapse<?php echo in_words($i+1); ?>" aria-expanded="true" aria-controls="collapse<?php echo in_words($i+1); ?>">
                                <div class="d-flex align-items-center">
                                  <div class="accordionlogo d-flex align-items-center mr-3">
                                    <img src="<?php echo wp_get_attachment_image_url($item['lpg_image']??'', 'full'); ?>" alt="" class="img-fluid" />
                                  </div>
                                  <div>
                                    <h2 class="mainmerriheader4 graycolor mb-0">
                                      <?php echo $item['lpg_title'] ?? ''; ?>
                                    </h2>
                                    <p class="generalparagraph mb-0">
                                      <?php echo $item['lpg_title'] ?? ''; ?>
                                    </p>
                                  </div>
                                </div>
                                <div class="ml-4 ml-md-0">
                                  <i class="fa fa-arrow-down fa-xs" aria-hidden="true"></i>
                                </div>
                              </div>
                            </div>

                            <div id="collapse<?php echo in_words($i+1); ?>" class="collapse border-top pb-3 px-md-4 px-3 <?php if(array_key_first($learning_product_groups) == $i) echo "show"; ?>" aria-labelledby="heading<?php echo in_words($i+1); ?>" data-parent="#accordionFeaturesOne">
                              <div class="row mt-3">
                                <!-- product programs -->
                                <?php
                                  $programs = $item['programs'] ?? '';
                                  if(!empty($programs)){
                                    foreach($programs as $inner_in => $program){ 
                                      $program_id = $program['select_program'] ?? '';
                                      $program_tags = $program['tags'] ?? '';
                                      $is_popup = $program['program_is_popup'] ?? ''; ?>
                                      <div class="col-lg-6 my-2">
                                        <div class="boxlink2 p-0 m-0 bg-gray rounded20">
                                          <div class="">
                                            <div class="grayboxlinkheader d-flex justify-content-between px-3 py-3">
                                              <div>
                                                <div class="smallbtn px-2 py-1 mb-2" style="background-color:<?php echo ($program['highlight_info_color'] ?? '')?$program['highlight_info_color']:'#167C1A'; ?>;border-color:<?php echo ($program['highlight_info_color'] ?? '')?$program['highlight_info_color']:'#167C1A'; ?>">
                                                  <?php echo $program['highlight_info'] ?? ''; ?>
                                                </div>

                                                <h4 class="smallmerriheader mb-0">
                                                  <?php echo $program['programs_title'] ?? ''; ?>
                                                </h4>
                                              </div>

                                              <!-- <div>
                                                <div class="logocontainer">
                                                  <img src="images/icanboxlogo.png" alt="" class="img-fluid" />
                                                </div>
                                              </div> -->
                                            </div>

                                            <div class="mt-2 p-3">
                                              <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                <?php
                                                  if(!empty($program_tags)){
                                                    foreach($program_tags as $ti => $tag){ ?>
                                                      <div class="mr-3 <?php if($ti == array_key_last($program_tags)) echo 'mr-0'; ?>">
                                                        <p class="smallparagraph mb-2">
                                                          <?php echo $tag['tag_label']??''; ?>
                                                        </p>
                                                        <div class="roundedgreycontainer p-2">
                                                          <p class="generalparagraph mb-0">
                                                            <?php echo $tag['tag_content']??''; ?>
                                                          </p>
                                                        </div>
                                                      </div>
                                                    <?php }
                                                  }
                                                ?>
                                                </div>

                                                <!--new changes. changed here -->
                                                
                                                <?php
                                                  $pixel_grp = $program['programs_fb_pixel'] ?? '';

                                                  if($is_popup == "yes"){ ?>
                                                    <a href="" data-toggle="modal" onclick="fbq('trackCustom', '<?php echo $pixel_grp['programs_event']??''; ?>', {scenario:<?php echo $pixel_grp['programs_scenario']??''; ?>})" data-target="#programsModal<?php echo $i."-".$inner_in; ?>">
                                                      <div class="bluecolorbg rounded px-3 py-2">
                                                        <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>
                                                      </div>
                                                    </a>
                                                    <div class="modal fade modal-full-screen" id="programsModal<?php echo $i."-".$inner_in; ?>" data-backdrop="static" data-keyboard="false">
                                                      <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                        <div class="modal-content mb-5">
                                                          <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                                            <div class="mx-1 ml-auto">
                                                              <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                                                close
                                                              </button>
                                                            </div>
                                                          </div>
                                                          <div class="d-block">
                                                            <div class="med-grey-bg2 p-3 pl-md-5">
                                                              <h4 class="mainmerriheader2">
                                                              <?php echo $program['form_title'] ?? ''; ?>
                                                              </h4>
                                                              <p class="generalparagraph mb-0 pb-md-2">
                                                                <?php echo $program['form_snippet'] ?? ''; ?>
                                                              </p>
                                                            </div>
                                                          </div>
                                                          <div class="modal-body p-0 m-0 px-md-4">
                                                            <?php
                                                              $form_id = $program['form_id']??'';
                                                              echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                            ?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  <?php }else{ ?>
                                                    <a href="<?php echo get_permalink($program_id); ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['programs_event']??''; ?>', {scenario:<?php echo $pixel_grp['programs_scenario']??''; ?>})">
                                                      <div class="bluecolorbg rounded px-3 py-2">
                                                          <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                  <?php }
                                                ?>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php }
                                  }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php }
                    }
                  ?>
                  
                  
=======
                <div class="accordion" id="accordionFeaturesOne">
                  <?php
                      $learning_product_groups = rwmb_meta('learning_product_group');
                      if(!empty($learning_product_groups)){
                        foreach($learning_product_groups as $i => $item){ ?>
                            <div class="dottedborderbottom py-2 <?php if($i == array_key_first($learning_product_groups)) echo 'dottedbordertop'; ?>">
                              <div class="horizontalpadding">
                                <div class="" id="heading<?php echo in_words($i+1); ?>">
                                  <div
                                    class=" d-flex justify-content-between align-items-center"
                                    data-toggle="collapse"
                                    data-target="#collapse<?php echo in_words($i+1); ?>"
                                    aria-expanded="true"
                                    aria-controls="collapse<?php echo in_words($i+1); ?>">
                                    <div class="d-flex align-items-center">
                                      <div class="accordionlogo mr-3 overflow-hidden">
                                        <img
                                          src="<?php echo wp_get_attachment_image_url($item['lpg_image']??'', 'full'); ?>"
                                          alt=""
                                          class="img-fluid"
                                        />
                                      </div>
                                      <div>
                                        <h2 class="classes mainmerriheader4 graycolor mb-0" style="font-family:Roboto">
                                          <?php echo $item['lpg_title'] ?? ''; ?>
                                        </h2>
                                        <p class="generalparagraph mb-0">
                                          <?php echo $item['lpg_snippet'] ?? ''; ?>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="ml-4 ml-md-0">
                                      <i class="fa fa-arrow-down fa-xs" aria-hidden="true"></i>
                                    </div>
                                  </div>
                                </div>

                                <div
                                  id="collapse<?php echo in_words($i+1); ?>"
                                  class="collapse pb-3"
                                  aria-labelledby="heading<?php echo in_words($i+1); ?>"
                                  data-parent="#accordionFeaturesOne">
                                  <div class="row mt-4">
                                    <!-- product programs -->
                                    <?php
                                      $programs = $item['programs'] ?? '';
                                      if(!empty($programs)){
                                        foreach($programs as $inner_in => $program){ 
                                          $program_id = $program['select_program'] ?? '';
                                          $program_tags = $program['tags'] ?? '';
                                          $is_popup = $program['program_is_popup'] ?? '';
                                        ?>
                                          <div class="col-lg-6 my-2">
                                              <div class="bg-white p-3">
                                                <button class="smallbtn btn p-1 highlight_btn" 
                                                  style="background-color:<?php echo ($program['highlight_info_color'] ?? '')?$program['highlight_info_color']:'#167C1A'; ?>;border-color:<?php echo ($program['highlight_info_color'] ?? '')?$program['highlight_info_color']:'#167C1A'; ?>"><?php echo $program['highlight_info'] ?? ''; ?></button>

                                                <h4 class="smallmerriheader mb-0 my-1 special-header">
                                                  <?php echo $program['programs_title'] ?? ''; ?>
                                                </h4>

                                                <div class="mt-4">
                                                  <div class="d-flex justify-content-between align-items-center">
                                                    <!-- tags -->
                                                    <div class="d-flex">
                                                      <?php
                                                        if(!empty($program_tags)){
                                                          foreach($program_tags as $ti => $tag){ ?>
                                                              <div class="mr-3 <?php if($ti == array_key_last($program_tags)) echo 'mr-0'; ?>">
                                                                <p class="smallparagraph mb-2">
                                                                  <?php echo $tag['tag_label'] ?? ''; ?>
                                                                </p>
                                                                <div class="roundedgreycontainer p-2">
                                                                  <p class="generalparagraph mb-0">
                                                                    <?php echo $tag['tag_content'] ?? ''; ?>
                                                                  </p>
                                                                </div>
                                                              </div>
                                                          <?php }
                                                        }
                                                      ?> 
                                                    </div>
                                                    <!-- end-tags -->
                                                    
                                                    <?php
                                                      $pixel_grp = $program['programs_fb_pixel'] ?? '';

                                                      if($is_popup == "yes"){ ?>
                                                        <a href="" data-toggle="modal" onclick="fbq('trackCustom', '<?php echo $pixel_grp['programs_event']??''; ?>', {scenario:<?php echo $pixel_grp['programs_scenario']??''; ?>})" data-target="#programsModal<?php echo $i."-".$inner_in; ?>">
                                                          <div class="bluecolorbg rounded px-3 py-2">
                                                            <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>
                                                          </div>
                                                        </a>
                                                        <div class="modal fade modal-full-screen" id="programsModal<?php echo $i."-".$inner_in; ?>" data-backdrop="static" data-keyboard="false">
                                                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                            <div class="modal-content mb-5">
                                                              <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                                                <div class="mx-1 ml-auto">
                                                                  <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                                                    close
                                                                  </button>
                                                                </div>
                                                              </div>
                                                              <div class="d-block">
                                                                <div class="med-grey-bg2 p-3 pl-md-5">
                                                                  <h4 class="mainmerriheader2">
                                                                  <?php echo $program['form_title'] ?? ''; ?>
                                                                  </h4>
                                                                  <p class="generalparagraph mb-0 pb-md-2">
                                                                    <?php echo $program['form_snippet'] ?? ''; ?>
                                                                  </p>
                                                                </div>
                                                              </div>
                                                              <div class="modal-body p-0 m-0 px-md-4">
                                                                <?php
                                                                  $form_id = $program['form_id']??'';
                                                                  echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                                ?>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      <?php }else{ ?>
                                                        <a href="<?php echo get_permalink($program_id); ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['programs_event']??''; ?>', {scenario:<?php echo $pixel_grp['programs_scenario']??''; ?>})">
                                                          <div class="bluecolorbg rounded px-3 py-2">
                                                              <i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>
                                                            </div>
                                                        </a>
                                                      <?php }
                                                    ?>
                                                      
                                                  </div>
                                                </div>
                                              </div>
                                          
                                          </div>
                                        <?php }
                                      }
                                    ?>
                                    <!-- end-product programs -->
                                  </div>
                                </div>
                                </div>
                            </div>
                        <?php }
                      }
                  ?>
>>>>>>> 15f3c73649b913631f56b26009cd817e97b8b282
                </div>
                <!-- end-learning product group -->

                <div class="horizontalpadding mt-5 py-md-5 py-3">
                  <p class="text-center biggestparagraph">
                    <span class="bold900 d-block"><?php echo rwmb_meta('cs_section_footer')['title'] ?? ''; ?></span>
                    <?php echo rwmb_meta('cs_section_footer')['description'] ?? ''; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-5">
        <div class="my-5">
          <div class="d-flex justify-content-center text-center">
            <div class="px-md-5 width75">
              <h2 class="mainmerriheader3 mb-2">
                <?php echo rwmb_meta('fs_label'); ?>
              </h2>
              <p class="biggerparagraph">
                <?php echo rwmb_meta('fs_snippet'); ?>
              </p>
            </div>
          </div>

          <div class="mt-md-5">
            <?php
              $features = rwmb_meta('add_features');

              if(!empty($features)){
                foreach($features as $feature){ ?>
                  <div class="verticalmargincenter potential">
                    <div class="relativecontainer">
                      <?php
                        if(($feature['image_position'] ?? '') == 'left'){ ?>
                            <div class="d-block d-md-none">
                              <h2 class="col-12 horizontalspacing mainmerriheader5 darkyellowcolor">
                                <?php echo $feature['title'] ?? ''; ?>
                              </h2>
                            </div>
                            <div class="horizontalspacing d-flex flex-md-row flex-column">
                              <div class="col-md-6">
                                <img
                                  src="<?php echo wp_get_attachment_image_url( $feature['image'] ?? '', 'full'); ?>"
                                  alt=""
                                  class="img-fluid"
                                />
                              </div>
                              <div class="col-md-6 mt-md-5">
                                <div>
                                  <div class="d-none d-md-block">
                                    <h2 class="mainmerriheader5 darkyellowcolor">
                                      <?php echo $feature['title'] ?? ''; ?>
                                    </h2>
                                  </div>

                                  <p class="medparagraph">
                                    <?php echo $feature['description'] ?? ''; ?>
                                  </p>

                                  <ul class="ml-4 liststyle">
                                    <?php
                                      if(!empty($feature['feature_points'] ?? '')){
                                        foreach($feature['feature_points'] as $point){ ?>
                                          <li class="medparagraph my-2">
                                            <i class="fa fa-arrow-right fa-xs mr-2" aria-hidden="true"></i>
                                            <?php echo $point; ?>
                                          </li>
                                        <?php }
                                      }
                                    ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                        <?php }else{ ?>
                          <div class="d-block d-md-none">
                            <h2 class="col-12 horizontalspacing mainmerriheader5 darkyellowcolor">
                              <?php echo $feature['title'] ?? ''; ?>
                            </h2>
                          </div>
                          <div class="horizontalspacing d-flex flex-md-row flex-column-reverse potential">
                            <div class="col-md-6 mt-md-5">
                              <div>
                                <div class="d-none d-md-block">
                                  <h2 class="mainmerriheader5 darkyellowcolor">
                                    <?php echo $feature['title'] ?? ''; ?>
                                  </h2>
                                </div>
                                <p class="medparagraph">
                                  <?php echo $feature['description'] ?? ''; ?>
                                </p>

                                <ul class="ml-4 liststyle">
                                  <?php
                                    if(!empty($feature['feature_points'])){
                                      foreach($feature['feature_points'] as $point){ ?>
                                        <li class="medparagraph my-2">
                                          <i class="fa fa-arrow-right fa-xs mr-2" aria-hidden="true"></i>
                                          <?php echo $point; ?>
                                        </li>
                                      <?php }
                                    }
                                  ?>
                                </ul>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <img
                                src="<?php echo wp_get_attachment_image_url( $feature['image'] ?? '', 'full'); ?>"
                                alt=""
                                class="img-fluid"
                              />
                            </div>
                          </div>
                        <?php }
                      ?>

                      <?php if(($feature['image_position']??'') == 'right'){ ?>
                        <div class="mt-2">
                          <div class="absolutesvg2">
                            <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
                          </div>
                        </div>
                      <?php }else{ ?>
                        <div class="absolutesvg">
                          <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
                        </div>
                      <?php } ?>
  
                      </div>
                    </div>
                  </div>
                <?php }
              }
            ?>
          </div>
        </div>
      </section>

      <section class="mt-5">
        <div class="mt-md-5">
          <div class="d-flex justify-content-center text-center mt-5">
            <div class="mt-md-5 px-md-5 width75">
              <h2 class="mainmerriheader3 mb-2"><?php echo rwmb_meta('es_section_header'); ?></h2>
              <p class="biggerparagraph">
                <?php echo rwmb_meta('es_section_snippet'); ?>
              </p>
            </div>
          </div>
            
          <?php
            $engage1 = rwmb_meta('call_to_engage1');
            $engage2 = rwmb_meta('call_to_engage2');
          ?>
          <div class="horizontalspacing">
            <div class="row mt-md-4">
              <div class="col-md-6 my-2">
                <div class="greybgmed2 py-4 height50">
                  <div class="pl-md-4 px-4 ml-md-3">
                    <h2 class="mainmerriheader5 bold700 mt-4"><?php echo $engage1['cte1_header'] ?? ''; ?></h2>

                    <div class="mt-md-1 mt-2">
                      <p class="medparagraph2">
                        <?php echo $engage1['cte1_snippet'] ?? ''; ?>
                      </p>
                    </div>
                  </div>

                  <div class="">
                    <img
                      src="<?php echo wp_get_attachment_image_url( $engage1['cte1_featured_image']??'', 'full' ); ?>"
                      alt=""
                      class="img-fluid teachsectionimg"
                    />
                  </div>

                  <div class="px-md-5 px-3 largemobilebtn pb-3">
                  <?php 
                    $btn_grp = $engage1['cte1_button_group'] ?? '';
                    $cte1_is_popup = $btn_grp['cte1_btn_popup'] ?? '';
                    $pixel_grp = $btn_grp['cte1_fb_pixel'] ?? '';

                    if($cte1_is_popup == "yes"){ ?>
                      <a href="#" data-toggle="modal" data-target="#cte1Modal" onclick="fbq('trackCustom', '<?php echo $pixel_grp['cte1_event']??''; ?>', {scenario:<?php echo $pixel_grp['cte1_scenario']??''; ?>})" data-toggle="modal" data-target="#prefooterModal<?php echo $key; ?>">
                        <button class="btn genbtncertifai rounded10">
                          <?php echo $btn_grp['cte1_button_label'] ?? ''; ?>
                        </button>
                      </a>
                      <div class="modal fade modal-full-screen" id="cte1Modal" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content mb-5">
                            <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                              <div class="mx-1 ml-auto">
                                <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                  close
                                </button>
                              </div>
                            </div>
                            <div class="d-block">
                              <div class="med-grey-bg2 p-3 pl-md-5">
                                <h4 class="mainmerriheader2">
                                <?php echo $btn_grp['cte1_form_title'] ?? ''; ?>
                                </h4>
                                <p class="generalparagraph mb-0 pb-md-2">
                                  <?php echo $btn_grp['cte1_form_snippet'] ?? ''; ?>
                                </p>
                              </div>
                            </div>
                            <div class="modal-body p-0 m-0 px-md-4">
                              <?php
                                $form_id = $btn_grp['cte1_form_id']??'';
                                echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }else{ ?>
                      <a href="<?php echo $btn_grp['cte1_button_url'] ?? ''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['cte1_event']??''; ?>', {scenario:<?php echo $pixel_grp['cte1_scenario']??''; ?>})" data-toggle="modal" data-target="#prefooterModal<?php echo $key; ?> target="<?php echo (($btn_grp['cte1_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                        <button class="btn genbtncertifai rounded10">
                          <?php echo $btn_grp['cte1_button_label'] ?? ''; ?>
                        </button>
                      </a>
                    <?php }
                  ?>
                  </div>
                </div>
              </div>
              <div class="col-md-6 my-2">
                <div class="medbluecolorbg py-4 height50">
                  <div class="pl-md-4 px-4 ml-md-3">
                    <h2 class="mainmerriheader5 bold700  mt-4"><?php echo $engage2['cte2_header'] ?? ''; ?></h2>

                    <div class="mt-md-1 mt-2">
                      <p class="medparagraph2">
                        <?php echo $engage2['cte2_snippet'] ?? ''; ?>
                      </p>
                    </div>
                  </div>

                  <div class="">
                    <img
                      src="<?php echo wp_get_attachment_image_url( $engage2['cte2_featured_image']??'', 'full' ); ?>"
                      alt=""
                      class="img-fluid teachsectionimg"
                    />
                  </div>

                  <div class="px-md-5 px-3 largemobilebtn pb-3">
                    <?php 
                      $btn_grp = $engage2['cte2_button_group'] ?? '';
                      $cte2_is_popup = $btn_grp['cte2_btn_popup'] ?? '';
                      $pixel_grp = $btn_grp['cte2_fb_pixel'] ?? '';

                      if($cte2_is_popup == "yes"){ ?>
                        <a href="#" data-toggle="modal" data-target="#cte2Modal" onclick="fbq('trackCustom', '<?php echo $pixel_grp['cte2_event']??''; ?>', {scenario:<?php echo $pixel_grp['cte2_scenario']??''; ?>})">
                          <button class="btn genbtncertifai rounded10">
                            <?php echo $btn_grp['cte2_button_label'] ?? ''; ?>
                          </button>
                        </a>
                        <div class="modal fade modal-full-screen" id="cte2Modal" data-backdrop="static" data-keyboard="false">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content mb-5">
                              <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                <div class="mx-1 ml-auto">
                                  <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                    close
                                  </button>
                                </div>
                              </div>
                              <div class="d-block">
                                <div class="med-grey-bg2 p-3 pl-md-5">
                                  <h4 class="mainmerriheader2">
                                  <?php echo $btn_grp['cte2_form_title'] ?? ''; ?>
                                  </h4>
                                  <p class="generalparagraph mb-0 pb-md-2">
                                    <?php echo $btn_grp['cte2_form_snippet'] ?? ''; ?>
                                  </p>
                                </div>
                              </div>
                              <div class="modal-body p-0 m-0 px-md-4">
                                <?php
                                  $form_id = $btn_grp['cte2_form_id']??'';
                                  echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php }else{ ?>
                        <a href="<?php echo $btn_grp['cte2_button_url'] ?? ''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['cte2_event']??''; ?>', {scenario:<?php echo $pixel_grp['cte2_scenario']??''; ?>})" target="<?php echo (($btn_grp['cte2_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                          <button class="btn genbtncertifai rounded10">
                            <?php echo $btn_grp['cte2_button_label'] ?? ''; ?>
                          </button>
                        </a>
                      <?php }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="medyellow2bg horizontalspacing  people">
          <div class="my-md-5 mt-5 mt-md-0 py-md-5 py-3">
            <div class="d-flex justify-content-center text-center">
              <div class="verticalmargincenter width75">
                <h3 class="smallmerriheader text-uppercase bluecolor"><?php echo rwmb_meta('hms_section_label'); ?></h3>
                <h2 class="mainmerriheader3 mb-1">
                  <?php echo rwmb_meta('hms_section_title'); ?>
                </h2>
                <p class="biggerparagraph">
                  <?php echo rwmb_meta('hms_section_snippet'); ?>
                </p>
              </div>
            </div>

            <div class="row mt-0 px-5 ml-md-5 relativecontainer people">
              <div class="absolutepeople absolutesvgpeople1">
                <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
              </div>
              <div class="absolutepeople absolutesvgpeople2">
                <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
              </div>
              <div class="absolutepeople absolutesvgpeople3">
                <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
              </div>
              <div class="absolutepeople absolutesvgpeople4">
                <img src="<?php echo get_theme_file_uri( "assets/images/svg-vector.svg" ); ?>" alt="" class="img-fluid" />
              </div>
              <?php
                  $images = rwmb_meta('hms_image');
                  if(!empty($images)){
                    foreach($images as $image){ ?>
                      <div class="col-4">
                        <img src="<?php echo $image['full_url']; ?>" alt="" class="img-fluid" />
                      </div>
                    <?php }
                  }
              ?>
            </div>

            <div class="horizontalpadding mt-5 z4">
              <p class="text-center biggestparagraph">
                <span class="bold900 d-block"><?php echo rwmb_meta('hms_body_title'); ?></span>
                <?php echo rwmb_meta('hms_body_snippet'); ?>.
              </p>
            </div>
            
            <div class="d-flex justify-content-center my-5 largemobilebtn px-3 px-md-0">
            <?php 
              $btn_grp = rwmb_meta('hms_button_group');
              $hms_is_popup = $btn_grp['hms_btn_popup'] ?? '';

              if($hms_is_popup == "yes"){ ?>
                <a href="#" class="genbtncertifai rounded10 px-5" data-toggle="modal" data-target="#hmsModal">
                  <?php echo $btn_grp['hms_button_label'] ?? ''; ?>
                </a>
                <!-- modal form -->
                <div class="modal fade modal-full-screen" id="hmsModal" data-backdrop="static" data-keyboard="false">
                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content mb-5">
                      <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                        <div class="mx-1 ml-auto">
                          <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                            close
                          </button>
                        </div>
                      </div>
                      <div class="d-block">
                        <div class="med-grey-bg2 p-3 pl-md-5">
                          <h4 class="mainmerriheader2">
                          <?php echo $btn_grp['form_title'] ?? ''; ?>
                          </h4>
                          <p class="generalparagraph mb-0 pb-md-2">
                            <?php echo $btn_grp['form_snippet'] ?? ''; ?>
                          </p>
                        </div>
                      </div>
                      <div class="modal-body p-0 m-0 px-md-4">
                        <?php
                          $form_id = $btn_grp['form_id']??'';
                          echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }else{ ?>
                <a href="#classesSection" class="genbtncertifai rounded10 px-5" target="<?php echo (($btn_grp['hms_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                  <?php echo $btn_grp['hms_button_label'] ?? ''; ?>
                </a>
              <?php }
            ?>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
