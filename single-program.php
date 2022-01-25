<?php get_header(); ?>

    <main>
      <!-- hero section -->
      <section class="topsection2 relativecontainer bg-white">
        <div class="verticalmargincenter d-flex justify-content-between">
          <div class="horizontalspacing col-lg-6 px-0 z4">
            <div class="icanmainlogo">
              <img 
              src="<?php
                $learning_product_group = rwmb_meta('learning_product_group');
                $image_id = get_term_meta($learning_product_group->term_id, 'image', true);
                echo wp_get_attachment_image_url( $image_id, 'full' );
              ?>" alt="" class="img-fluid" />
            </div>
            <h1 class="mainmerriheader3 my-3">
              <?php echo rwmb_meta('program_title'); ?>
            </h1>
            <p class="biggerparagraph my-md-4">
              <?php echo rwmb_meta('program_summary'); ?>
            </p>

            <div class="mt-3">
              <div class="roundedborder d-flex flex-wrap mt-5">
                <?php
                  $tags = rwmb_meta('program_tags');
                  if(!empty($tags)){
                    foreach($tags as $tag){ ?>
                      <div class="roundedbordercircle px-md-3 px-2 py-2 mr-3 my-1">
                        <p class="smallmerriheader mb-0"><?php echo $tag; ?></p>
                      </div>
                    <?php }
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="absoluteflex">
            <img src="<?php echo rwmb_meta('hero_bg_image')['full_url']; ?>" alt="" class="img-fluid" />
          </div>
        </div>
      </section>
      <!-- end-hero section -->
      
      <!-- program info grid section -->
      <?php
        $program_info_group = rwmb_meta("program_info_group");

        if(!empty($program_info_group)){
          foreach($program_info_group as $block){
          
          }
        }
      ?>
      <div class="">
        <div class="horizontalspacing d-flex justify-content-center relativecontainer">
          <div class="w-100 mb-5">
            <div class="accordion w-100" id="accordiongreenbox">
              <?php
                $program_info_group = rwmb_meta("program_info_group");

                if(!empty($program_info_group)){
                  foreach($program_info_group as $index => $block){ ?>
                    <div class="my-3 greenbg" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                      <div class="w-100" id="headinggreenbox<?php echo in_words($index); ?>">
                        <div class="py-3 w-100"
                          data-toggle="collapse"
                          data-target="#collapsegreenbox<?php echo in_words($index); ?>"
                          aria-expanded="true"
                          aria-controls="collapsegreenbox<?php echo in_words($index); ?>">
                          <div
                            class=" d-flex align-items-center justify-content-between w-100 " >
                            <div class="d-flex align-items-center">
                              <i class="fa fa-calendar mx-3 text-white" aria-hidden="true" ></i>
                              <h1 class="merriparagraph bold900 mb-0 mr-4 text-white">
                                <?php echo $block['program_info_title'] ?? ''; ?>
                              </h1>

                              <?php
                                if(!empty($block['program_info_badge'] ?? '')){ ?>
                                  <div class="rounded10 py-2 px-3 lightgreenbg">
                                    <h3 class="generalparagraph bold900 mb-0">
                                      <?php echo $block['program_info_badge'] ?? ''; ?>
                                    </h3>
                                  </div>
                                <?php }
                              ?>
                            </div>

                            <div class="px-3">
                              <i class="fa fa-chevron-down text-white fa-xs" aria-hidden="true" ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        id="collapsegreenbox<?php echo in_words($index); ?>"
                        class="collapse border-top <?php if($index == array_key_first($program_info_group)) echo "show"; ?>"
                        aria-labelledby="headinggreenbox<?php echo in_words($index); ?>"
                        data-parent="#accordiongreenbox">
                        <div>
                          <div class="greenboxcontainer" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                            <div class="greenbox1 whiteborderright">
                              <?php
                                $program_info = $block['program_info1'] ?? '';
                              ?>
                              <div class="absoluteheight">
                                <div class="p-lg-5 p-3 mobilewhiteborderbottom greenbg d-flex flex-column justify-content-between" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                                    <div>
                                    <h5 class="merriparagraph bold900 text-white pt-1 mb-0">
                                        <?php echo $program_info['pi1_title'] ?? ''; ?>
                                    </h5>

                                    <p class="generalparagraph text-white py-md-4 py-1">
                                        <?php echo $program_info['pi1_summary'] ?? ''; ?>
                                    </p>
                                    </div>

                                    <?php
                                    $btn_grp = $program_info['pi1_button_group'] ?? '';

                                    if(!empty($btn_grp['pi1_button_label'])){
                                        $btn_type = $btn_grp['pi1_button_type'] ?? '';
                                        if($btn_type == 'popup'){ ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi1FormModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi1_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal form -->
                                        <div class="modal fade modal-full-screen" id="pi1FormModal" data-backdrop="static" data-keyboard="false">
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
                                                    <?php echo $btn_grp['pi1_form_title'] ?? ''; ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                    <?php echo $btn_grp['pi1_form_snippet'] ?? ''; ?>
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 px-md-4">
                                                <?php
                                                    $form_id = $btn_grp['pi1_form_id']??'';
                                                    echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                ?>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }elseif($btn_type == 'url'){ ?>
                                        <div class="">
                                            <a href="<?php echo $btn_grp['pi2_button_url'] ?? ''; ?>"  target="<?php if(($btn_grp['pi2_btn_new_tab']??'') == 'yes') echo "_target"; ?>">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <?php }elseif($btn_type == 'class'){ 
                                        $course_id = $btn_grp['pi2_select_class'] ?? ''; ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi2ClassModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal -->
                                        <div class="modal fade modal-full-screen" id="pi2ClassModal" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content mb-5">
                                                <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                                <div class="mx-1 ml-auto">
                                                    <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                                    close
                                                    </button>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 mb-5 pb-5">
                                                <div class="d-block">
                                                    <div class="med-grey-bg2 p-3 pl-md-5">
                                                    <h4 class="mainmerriheader2">
                                                        <?php echo get_post_meta($course_id, 'course_title', true); ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                        <?php echo get_post_meta($course_id, 'course_summary', true); ?>
                                                    </p>
                                                    </div>
                                                </div>
                                                <?php
                                                    $course_tags = get_post_meta($course_id, 'course_tags', true);
                                                    if(!empty($course_tags)){ ?>
                                                    <div class="mt-md-4 mt-2 px-md-5 px-3">
                                                        <div class="roundedborder d-flex flex-wrap my-md-2 my-2">
                                                        <?php
                                                            foreach($course_tags as $tag){ ?>
                                                                <div class="roundedbordercircle px-md-3 px-2 py-2 mr-3 my-2">
                                                                <p class="smallmerriheader mb-0">
                                                                    <?php echo $tag; ?>
                                                                </p>
                                                                </div>
                                                            <?php }
                                                        ?>
                                                        </div>
                                                    </div>
                                                    <?php }
                                                ?>
                                                <div class="px-md-5 px-3">
                                                    <div class="accordion mt-3 mt-md-0" id="accordionInnerModal">
                                                    <?php
                                                        $course_features = get_post_meta($course_id, 'course_features', true);
                                                        if(!empty($course_features)){
                                                        foreach($course_features as $i => $feature){ ?>
                                                            <div class="my-md-2 my-2">
                                                                <div class="dottedbordertop <?php if($i == array_key_last($course_features)) echo "dottedborderbottom"; ?> pt-md-2 pt-2 pb-md-0 pb-0">
                                                                <div class="" id="headingOne">
                                                                    <div
                                                                    class="d-flex justify-content-between align-items-center"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapseOneModal<?php echo $in.$i; ?>"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOneModal<?php echo $in.$i; ?>">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                        <h2 class="merriparagraph bold900 bluecolor mb-0">
                                                                            <?php echo $feature['feature_title'] ?? ''; ?>
                                                                        </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-4 ml-md-0">
                                                                        <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    id="collapseOneModal<?php echo $in.$i; ?>"
                                                                    class="collapse py-3"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionInnerModal">
                                                                    <div>
                                                                    <p class="generalparagraph mb-0">
                                                                        <?php echo $feature['feature_description'] ?? ''; ?>
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        }
                                                    ?>

                                                    <div class="my-md-1 mt-5 mb-md-1">
                                                        <div class="py-md-4 py-2">
                                                        <div class="" id="headingModalFour">
                                                            <div
                                                            class="d-flex justify-content-between align-items-center"
                                                            data-toggle="collapse"
                                                            data-target="#collapseFourModal"
                                                            aria-expanded="true"
                                                            aria-controls="collapseFourModal">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                <h2 class="merriparagraph bold900 mb-0">
                                                                    Lesson Plan
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div class="ml-4 ml-md-0">
                                                                <!-- <i
                                                                class="fa fa-chevron-down fa-xs"
                                                                aria-hidden="true"
                                                                ></i> -->
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            id="collapseFourModal"
                                                            class="collapse show py-3"
                                                            aria-labelledby="headingModalFour"
                                                            data-parent="#accordionInnerModal2">
                                                            <div>
                                                            <div class="accordion" id="accordionInnerModal2">
                                                                <?php
                                                                $course_plans = get_post_meta($course_id, 'course_plan_group', true);
                                                                if(!empty($course_plans)){
                                                                    foreach($course_plans as $p => $plan){ ?>
                                                                    <div class="my-3">
                                                                        <div class="med-grey-bg2 p-md-3 p-3 pb-md-0">
                                                                        <div class="" id="headingInnerOne">
                                                                            <div
                                                                            class="d-flex justify-content-between align-items-center"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseInnerOne2<?php echo $in.$p; ?>">
                                                                            <div class="d-flex align-items-center px-2">
                                                                                <div class="mr-md-3 mr-2">
                                                                                <h2 class="merriparagraph bold900 mb-0" style="font-size: 12px">
                                                                                    <?php echo $plan['plan_title'] ?? ''; ?>
                                                                                </h2>
                                                                                </div>

                                                                                <?php if(!empty($plan['plan_badge'] ?? '')){ ?>
                                                                                <div class="px-md-3 px-2 py-2 med-grey-bg3 borderradius20">
                                                                                    <p class="mb-0 generalparagraph bold700 text-white">
                                                                                    <?php echo $plan['plan_badge'] ?? ''; ?>
                                                                                    </p>
                                                                                </div>
                                                                                <?php }
                                                                                ?>
                                                                            </div>
                                                                            <div class="ml-4 ml-md-0">
                                                                                <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                            </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            id="collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            class="collapse mt-3 mb-0 dottedbordertop py-md-0"
                                                                            aria-labelledby="headingInnerOne"
                                                                            data-parent="#accordionInnerModal2">
                                                                            <div>
                                                                            <div class="py-2">
                                                                                <p class="generalparagraph mb-0">
                                                                                <?php echo $plan['plan_description'] ?? ''; ?>
                                                                                </p>

                                                                                <?php
                                                                                $plan_tags = $plan['plan_tags'] ?? '';
                                                                                if(!empty($plan_tags)){ ?>
                                                                                    <div class="mt-4 d-flex flex-wrap mb-md-0">
                                                                                    <?php foreach($plan_tags as $tag){ ?>
                                                                                        <div class="bg-white borderradius20 px-3 py-2 my-1 my-md-2 mr-3">
                                                                                            <p class="generalparagraph mb-0">
                                                                                            <?php echo $tag; ?>
                                                                                            </p>
                                                                                        </div>
                                                                                        <?php }
                                                                                    ?>
                                                                                    </div>
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
                                                    </div>
                                                    </div>

                                                    <div>
                                                    <div>
                                                        <h2 class="merriparagraph bold900 mb-0">Facilitators</h2>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <?php
                                                        $facilitators = get_post_meta($course_id, 'add_facilitators', true);
                                                        if(!empty($facilitators)){
                                                            foreach($facilitators as $facilitator){ ?>
                                                            <div class="col-lg-12 my-2 mt-lg-0">
                                                                <div class="border row mx-0 p-3">
                                                                <div class="col-4">
                                                                    <img
                                                                    src="<?php echo rwmb_meta('image', array(), $facilitator)['full_url']; ?>"
                                                                    alt=""
                                                                    class="img-fluid"
                                                                    />
                                                                </div>
                                                                <div class="col-8 pl-0">
                                                                    <h4 class="smallmerriheader"><?php echo get_post_meta($facilitator, 'name', true); ?></h4>
                                                                    <p class="generalparagraph mb-0">
                                                                    <?php echo get_post_meta($facilitator, 'description', true); ?>
                                                                    </p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <?php }
                                                        }
                                                        ?>
                                                    </div>
                                                    </div>
                                                    
                                                    <?php
                                                    $btn_label = get_post_meta($course_id, 'button_label', true);
                                                    $btn_url = get_post_meta($course_id, 'button_url', true);

                                                    if(!empty($btn_label) && !empty($btn_url)){ ?>
                                                        <div class="mt-4">
                                                        <div class="mt-5">
                                                            <a href="<?php echo $btn_url; ?>">
                                                            <button
                                                                class="btn genbtncertifai rounded10 px-4 py-2 w-100"
                                                                class="modalEnrollment">
                                                                <?php echo $btn_label; ?>
                                                            </button>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="bg-white p-2 p-md-2 p-1 col-md-9 col-sm-6 col-4 datewhite d-flex align-items-center justify-content-center">
                                            <div class="">
                                            <p class="smallmerriheader mb-0"><?php echo $btn_grp['pi1_button_label'] ?? ''; ?></p>
                                            </div>
                                        </div>
                                        <?php }
                                    }
                                    ?>
                                </div>
                              </div>
                            </div>
                            <div class="greenbox2 whiteborderright">
                              <?php
                                $program_info = $block['program_info2'] ?? '';
                              ?>
                              <div class="absoluteheight">
                                <div
                                    class=" p-lg-5 p-3 mobilewhiteborderbottom greenbg d-flex flex-column justify-content-between" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                                    <div>
                                    <h5 class="merriparagraph bold900 text-white pt-1 mb-0">
                                    <?php echo $program_info['pi2_title'] ?? ''; ?>
                                    </h5>

                                    <p class="generalparagraph text-white py-md-4 py-1">
                                    <?php echo $program_info['pi2_summary'] ?? ''; ?>
                                    </p>
                                    </div>

                                    <?php
                                    $btn_grp = $program_info['pi2_button_group'] ?? '';

                                    if(!empty($btn_grp['pi2_button_label'])){
                                        $btn_type = $btn_grp['pi2_button_type'] ?? '';
                                        if($btn_type == 'popup'){ ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi2FormModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal form -->
                                        <div class="modal fade modal-full-screen" id="pi2FormModal" data-backdrop="static" data-keyboard="false">
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
                                                    <?php echo $btn_grp['pi2_form_title'] ?? ''; ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                    <?php echo $btn_grp['pi2_form_snippet'] ?? ''; ?>
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 px-md-4">
                                                <?php
                                                    $form_id = $btn_grp['pi2_form_id']??'';
                                                    echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                ?>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }elseif($btn_type == 'url'){ ?>
                                        <div class="">
                                            <a href="<?php echo $btn_grp['pi2_button_url'] ?? ''; ?>"  target="<?php if(($btn_grp['pi2_btn_new_tab']??'') == 'yes') echo "_target"; ?>">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <?php }elseif($btn_type == 'class'){ 
                                        $course_id = $btn_grp['pi2_select_class'] ?? ''; ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi2ClassModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal -->
                                        <div class="modal fade modal-full-screen" id="pi2ClassModal" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content mb-5">
                                                <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                                <div class="mx-1 ml-auto">
                                                    <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                                    close
                                                    </button>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 mb-5 pb-5">
                                                <div class="d-block">
                                                    <div class="med-grey-bg2 p-3 pl-md-5">
                                                    <h4 class="mainmerriheader2">
                                                        <?php echo get_post_meta($course_id, 'course_title', true); ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                        <?php echo get_post_meta($course_id, 'course_summary', true); ?>
                                                    </p>
                                                    </div>
                                                </div>
                                                <?php
                                                    $course_tags = get_post_meta($course_id, 'course_tags', true);
                                                    if(!empty($course_tags)){ ?>
                                                    <div class="mt-md-4 mt-2 px-md-5 px-3">
                                                        <div class="roundedborder d-flex flex-wrap my-md-2 my-2">
                                                        <?php
                                                            foreach($course_tags as $tag){ ?>
                                                                <div class="roundedbordercircle px-md-3 px-2 py-2 mr-3 my-2">
                                                                <p class="smallmerriheader mb-0">
                                                                    <?php echo $tag; ?>
                                                                </p>
                                                                </div>
                                                            <?php }
                                                        ?>
                                                        </div>
                                                    </div>
                                                    <?php }
                                                ?>
                                                <div class="px-md-5 px-3">
                                                    <div class="accordion mt-3 mt-md-0" id="accordionInnerModal">
                                                    <?php
                                                        $course_features = get_post_meta($course_id, 'course_features', true);
                                                        if(!empty($course_features)){
                                                        foreach($course_features as $i => $feature){ ?>
                                                            <div class="my-md-2 my-2">
                                                                <div class="dottedbordertop <?php if($i == array_key_last($course_features)) echo "dottedborderbottom"; ?> pt-md-2 pt-2 pb-md-0 pb-0">
                                                                <div class="" id="headingOne">
                                                                    <div
                                                                    class="d-flex justify-content-between align-items-center"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapseOneModal<?php echo $in.$i; ?>"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOneModal<?php echo $in.$i; ?>">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                        <h2 class="merriparagraph bold900 bluecolor mb-0">
                                                                            <?php echo $feature['feature_title'] ?? ''; ?>
                                                                        </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-4 ml-md-0">
                                                                        <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    id="collapseOneModal<?php echo $in.$i; ?>"
                                                                    class="collapse py-3"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionInnerModal">
                                                                    <div>
                                                                    <p class="generalparagraph mb-0">
                                                                        <?php echo $feature['feature_description'] ?? ''; ?>
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        }
                                                    ?>

                                                    <div class="my-md-1 mt-5 mb-md-1">
                                                        <div class="py-md-4 py-2">
                                                        <div class="" id="headingModalFour">
                                                            <div
                                                            class="d-flex justify-content-between align-items-center"
                                                            data-toggle="collapse"
                                                            data-target="#collapseFourModal"
                                                            aria-expanded="true"
                                                            aria-controls="collapseFourModal">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                <h2 class="merriparagraph bold900 mb-0">
                                                                    Lesson Plan
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div class="ml-4 ml-md-0">
                                                                <!-- <i
                                                                class="fa fa-chevron-down fa-xs"
                                                                aria-hidden="true"
                                                                ></i> -->
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            id="collapseFourModal"
                                                            class="collapse show py-3"
                                                            aria-labelledby="headingModalFour"
                                                            data-parent="#accordionInnerModal2">
                                                            <div>
                                                            <div class="accordion" id="accordionInnerModal2">
                                                                <?php
                                                                $course_plans = get_post_meta($course_id, 'course_plan_group', true);
                                                                if(!empty($course_plans)){
                                                                    foreach($course_plans as $p => $plan){ ?>
                                                                    <div class="my-3">
                                                                        <div class="med-grey-bg2 p-md-3 p-3 pb-md-0">
                                                                        <div class="" id="headingInnerOne">
                                                                            <div
                                                                            class="d-flex justify-content-between align-items-center"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseInnerOne2<?php echo $in.$p; ?>">
                                                                            <div class="d-flex align-items-center px-2">
                                                                                <div class="mr-md-3 mr-2">
                                                                                <h2 class="merriparagraph bold900 mb-0" style="font-size: 12px">
                                                                                    <?php echo $plan['plan_title'] ?? ''; ?>
                                                                                </h2>
                                                                                </div>

                                                                                <?php if(!empty($plan['plan_badge'] ?? '')){ ?>
                                                                                <div class="px-md-3 px-2 py-2 med-grey-bg3 borderradius20">
                                                                                    <p class="mb-0 generalparagraph bold700 text-white">
                                                                                    <?php echo $plan['plan_badge'] ?? ''; ?>
                                                                                    </p>
                                                                                </div>
                                                                                <?php }
                                                                                ?>
                                                                            </div>
                                                                            <div class="ml-4 ml-md-0">
                                                                                <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                            </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            id="collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            class="collapse mt-3 mb-0 dottedbordertop py-md-0"
                                                                            aria-labelledby="headingInnerOne"
                                                                            data-parent="#accordionInnerModal2">
                                                                            <div>
                                                                            <div class="py-2">
                                                                                <p class="generalparagraph mb-0">
                                                                                <?php echo $plan['plan_description'] ?? ''; ?>
                                                                                </p>

                                                                                <?php
                                                                                $plan_tags = $plan['plan_tags'] ?? '';
                                                                                if(!empty($plan_tags)){ ?>
                                                                                    <div class="mt-4 d-flex flex-wrap mb-md-0">
                                                                                    <?php foreach($plan_tags as $tag){ ?>
                                                                                        <div class="bg-white borderradius20 px-3 py-2 my-1 my-md-2 mr-3">
                                                                                            <p class="generalparagraph mb-0">
                                                                                            <?php echo $tag; ?>
                                                                                            </p>
                                                                                        </div>
                                                                                        <?php }
                                                                                    ?>
                                                                                    </div>
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
                                                    </div>
                                                    </div>

                                                    <div>
                                                    <div>
                                                        <h2 class="merriparagraph bold900 mb-0">Facilitators</h2>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <?php
                                                        $facilitators = get_post_meta($course_id, 'add_facilitators', true);
                                                        if(!empty($facilitators)){
                                                            foreach($facilitators as $facilitator){ ?>
                                                            <div class="col-lg-12 my-2 mt-lg-0">
                                                                <div class="border row mx-0 p-3">
                                                                <div class="col-4">
                                                                    <img
                                                                    src="<?php echo rwmb_meta('image', array(), $facilitator)['full_url']; ?>"
                                                                    alt=""
                                                                    class="img-fluid"
                                                                    />
                                                                </div>
                                                                <div class="col-8 pl-0">
                                                                    <h4 class="smallmerriheader"><?php echo get_post_meta($facilitator, 'name', true); ?></h4>
                                                                    <p class="generalparagraph mb-0">
                                                                    <?php echo get_post_meta($facilitator, 'description', true); ?>
                                                                    </p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <?php }
                                                        }
                                                        ?>
                                                    </div>
                                                    </div>
                                                    
                                                    <?php
                                                    $btn_label = get_post_meta($course_id, 'button_label', true);
                                                    $btn_url = get_post_meta($course_id, 'button_url', true);

                                                    if(!empty($btn_label) && !empty($btn_url)){ ?>
                                                        <div class="mt-4">
                                                        <div class="mt-5">
                                                            <a href="<?php echo $btn_url; ?>">
                                                            <button
                                                                class="btn genbtncertifai rounded10 px-4 py-2 w-100"
                                                                class="modalEnrollment">
                                                                <?php echo $btn_label; ?>
                                                            </button>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="bg-white p-2 p-md-2 p-1 col-md-9 col-sm-6 col-4 datewhite d-flex align-items-center justify-content-center">
                                            <div class="">
                                            <p class="smallmerriheader mb-0"><?php echo $btn_grp['pi2_button_label'] ?? ''; ?></p>
                                            </div>
                                        </div>
                                        <?php }
                                    }
                                    ?>
                                </div>
                              </div>
                            </div>
                            <div class="greenbox3 whiteborderright">
                              <?php
                                $program_info = $block['program_info_timing'] ?? '';
                              ?>
                              <div class="absoluteheight">
                                <div class="p-lg-5 p-3 greenbg mobilewhiteborderbottom" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                                    <h5 class="merriparagraph bold900 text-white mb-0"><?php echo $program_info['pi_timing_info'] ?? ''; ?></h5>

                                    <div class="d-flex flex-column flex-md-column justify-content-between resetmobilebottom">
                                    <?php
                                        $timing_content = $program_info['pi_timing_content_group'] ?? '';

                                        if(!empty($timing_content)){
                                        foreach($timing_content as $i => $content){ 
                                            if($i == array_key_first($timing_content)){
                                            echo '<div class="d-flex flex-md-row flex-column align-items-md-center border-bottom px-2 px-md-0 pt-3 pb-3 " >';
                                            }elseif($i == array_key_last($timing_content)){
                                            echo '<div class="d-flex flex-md-row flex-column align-items-md-center border-bottom px-2 px-md-0 pt-3 pb-3 " >';
                                            }else{
                                            echo '<div class=" d-flex flex-md-row flex-column align-items-md-center border-bottom px-2 px-md-0 pt-3 pb-3 " >';
                                            } ?>
                                            <!-- <div class=" d-flex flex-md-row flex-column align-items-center border-bottom mobileborderright pr-4 pr-md-0 pt-3 pb-3 " > -->
                                            <p class="generalparagraph bold700 text-white mb-0 mr-3">
                                                <?php echo $content['pi_timing_content_title'] ?? ''; ?>
                                            </p>

                                            <p class="generalparagraph mb-0 text-white">
                                                <?php echo $content['pi_timing_content_content'] ?? ''; ?>
                                            </p>
                                            </div>
                                        <?php }
                                        }
                                    ?>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="greenbox4">
                              <?php
                                $program_info = $block['program_info3'] ?? '';
                              ?>
                              <div class="absoluteheight">
                                <div class="p-lg-5 p-3 greenbg" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                                    <h5 class="merriparagraph bold900 text-white mb-0">
                                    <?php echo $program_info['pi3_title'] ?? ''; ?>
                                    </h5>

                                    <p class="generalparagraph text-white py-md-4 py-1">
                                    <?php echo $program_info['pi3_summary'] ?? ''; ?>
                                    </p>
                                    
                                    <?php
                                    $btn_grp = $program_info['pi3_button_group'] ?? '';

                                    if(!empty($btn_grp['pi3_button_label'])){
                                        $btn_type = $btn_grp['pi3_button_type'] ?? '';
                                        if($btn_type == 'popup'){ ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi3FormModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi3_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal form -->
                                        <div class="modal fade modal-full-screen" id="pi3FormModal" data-backdrop="static" data-keyboard="false">
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
                                                    <?php echo $btn_grp['pi3_form_title'] ?? ''; ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                    <?php echo $btn_grp['pi3_form_snippet'] ?? ''; ?>
                                                    </p>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 px-md-4">
                                                <?php
                                                    $form_id = $btn_grp['pi3_form_id']??'';
                                                    echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                ?>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }elseif($btn_type == 'url'){ ?>
                                        <div class="">
                                            <a href="<?php echo $btn_grp['pi3_button_url'] ?? ''; ?>"  target="<?php if(($btn_grp['pi3_btn_new_tab']??'') == 'yes') echo "_target"; ?>">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi3_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <?php }elseif($btn_type == 'class'){ 
                                        $course_id = $btn_grp['pi3_select_class'] ?? ''; ?>
                                        <div class="">
                                            <a href="" data-toggle="modal" data-target="#pi3ClassModal">
                                            <button class="btn downloadbtn py-2 px-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>"><?php echo $btn_grp['pi3_button_label'] ?? ''; ?></button>
                                            </a>
                                        </div>
                                        <!-- modal -->
                                        <div class="modal fade modal-full-screen" id="pi3ClassModal" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content mb-5">
                                                <div class="modal-header headerbg px-md-5 px-3 py-md-1 py-1">
                                                <div class="mx-1 ml-auto">
                                                    <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal" style="padding:5px 30px">
                                                    close
                                                    </button>
                                                </div>
                                                </div>
                                                <div class="modal-body p-0 m-0 mb-5 pb-5">
                                                <div class="d-block">
                                                    <div class="med-grey-bg2 p-3 pl-md-5">
                                                    <h4 class="mainmerriheader2">
                                                        <?php echo get_post_meta($course_id, 'course_title', true); ?>
                                                    </h4>
                                                    <p class="generalparagraph mb-0 pb-md-2">
                                                        <?php echo get_post_meta($course_id, 'course_summary', true); ?>
                                                    </p>
                                                    </div>
                                                </div>
                                                <?php
                                                    $course_tags = get_post_meta($course_id, 'course_tags', true);
                                                    if(!empty($course_tags)){ ?>
                                                    <div class="mt-md-4 mt-2 px-md-5 px-3">
                                                        <div class="roundedborder d-flex flex-wrap my-md-2 my-2">
                                                        <?php
                                                            foreach($course_tags as $tag){ ?>
                                                                <div class="roundedbordercircle px-md-3 px-2 py-2 mr-3 my-2">
                                                                <p class="smallmerriheader mb-0">
                                                                    <?php echo $tag; ?>
                                                                </p>
                                                                </div>
                                                            <?php }
                                                        ?>
                                                        </div>
                                                    </div>
                                                    <?php }
                                                ?>
                                                <div class="px-md-5 px-3">
                                                    <div class="accordion mt-3 mt-md-0" id="accordionInnerModal">
                                                    <?php
                                                        $course_features = get_post_meta($course_id, 'course_features', true);
                                                        if(!empty($course_features)){
                                                        foreach($course_features as $i => $feature){ ?>
                                                            <div class="my-md-2 my-2">
                                                                <div class="dottedbordertop <?php if($i == array_key_last($course_features)) echo "dottedborderbottom"; ?> pt-md-2 pt-2 pb-md-0 pb-0">
                                                                <div class="" id="headingOne">
                                                                    <div
                                                                    class="d-flex justify-content-between align-items-center"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapseOneModal<?php echo $in.$i; ?>"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOneModal<?php echo $in.$i; ?>">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                        <h2 class="merriparagraph bold900 bluecolor mb-0">
                                                                            <?php echo $feature['feature_title'] ?? ''; ?>
                                                                        </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-4 ml-md-0">
                                                                        <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    id="collapseOneModal<?php echo $in.$i; ?>"
                                                                    class="collapse py-3"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionInnerModal">
                                                                    <div>
                                                                    <p class="generalparagraph mb-0">
                                                                        <?php echo $feature['feature_description'] ?? ''; ?>
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        }
                                                    ?>

                                                    <div class="my-md-1 mt-5 mb-md-1">
                                                        <div class="py-md-4 py-2">
                                                        <div class="" id="headingModalFour">
                                                            <div
                                                            class="d-flex justify-content-between align-items-center"
                                                            data-toggle="collapse"
                                                            data-target="#collapseFourModal"
                                                            aria-expanded="true"
                                                            aria-controls="collapseFourModal">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                <h2 class="merriparagraph bold900 mb-0">
                                                                    Lesson Plan
                                                                </h2>
                                                                </div>
                                                            </div>
                                                            <div class="ml-4 ml-md-0">
                                                                <!-- <i
                                                                class="fa fa-chevron-down fa-xs"
                                                                aria-hidden="true"
                                                                ></i> -->
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            id="collapseFourModal"
                                                            class="collapse show py-3"
                                                            aria-labelledby="headingModalFour"
                                                            data-parent="#accordionInnerModal2">
                                                            <div>
                                                            <div class="accordion" id="accordionInnerModal2">
                                                                <?php
                                                                $course_plans = get_post_meta($course_id, 'course_plan_group', true);
                                                                if(!empty($course_plans)){
                                                                    foreach($course_plans as $p => $plan){ ?>
                                                                    <div class="my-3">
                                                                        <div class="med-grey-bg2 p-md-3 p-3 pb-md-0">
                                                                        <div class="" id="headingInnerOne">
                                                                            <div
                                                                            class="d-flex justify-content-between align-items-center"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseInnerOne2<?php echo $in.$p; ?>">
                                                                            <div class="d-flex align-items-center px-2">
                                                                                <div class="mr-md-3 mr-2">
                                                                                <h2 class="merriparagraph bold900 mb-0" style="font-size: 12px">
                                                                                    <?php echo $plan['plan_title'] ?? ''; ?>
                                                                                </h2>
                                                                                </div>

                                                                                <?php if(!empty($plan['plan_badge'] ?? '')){ ?>
                                                                                <div class="px-md-3 px-2 py-2 med-grey-bg3 borderradius20">
                                                                                    <p class="mb-0 generalparagraph bold700 text-white">
                                                                                    <?php echo $plan['plan_badge'] ?? ''; ?>
                                                                                    </p>
                                                                                </div>
                                                                                <?php }
                                                                                ?>
                                                                            </div>
                                                                            <div class="ml-4 ml-md-0">
                                                                                <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                                            </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            id="collapseInnerOne2<?php echo $in.$p; ?>"
                                                                            class="collapse mt-3 mb-0 dottedbordertop py-md-0"
                                                                            aria-labelledby="headingInnerOne"
                                                                            data-parent="#accordionInnerModal2">
                                                                            <div>
                                                                            <div class="py-2">
                                                                                <p class="generalparagraph mb-0">
                                                                                <?php echo $plan['plan_description'] ?? ''; ?>
                                                                                </p>

                                                                                <?php
                                                                                $plan_tags = $plan['plan_tags'] ?? '';
                                                                                if(!empty($plan_tags)){ ?>
                                                                                    <div class="mt-4 d-flex flex-wrap mb-md-0">
                                                                                    <?php foreach($plan_tags as $tag){ ?>
                                                                                        <div class="bg-white borderradius20 px-3 py-2 my-1 my-md-2 mr-3">
                                                                                            <p class="generalparagraph mb-0">
                                                                                            <?php echo $tag; ?>
                                                                                            </p>
                                                                                        </div>
                                                                                        <?php }
                                                                                    ?>
                                                                                    </div>
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
                                                    </div>
                                                    </div>

                                                    <div>
                                                    <div>
                                                        <h2 class="merriparagraph bold900 mb-0">Facilitators</h2>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <?php
                                                        $facilitators = get_post_meta($course_id, 'add_facilitators', true);
                                                        if(!empty($facilitators)){
                                                            foreach($facilitators as $facilitator){ ?>
                                                            <div class="col-lg-12 my-2 mt-lg-0">
                                                                <div class="border row mx-0 p-3">
                                                                <div class="col-4">
                                                                    <img
                                                                    src="<?php echo rwmb_meta('image', array(), $facilitator)['full_url']; ?>"
                                                                    alt=""
                                                                    class="img-fluid"
                                                                    />
                                                                </div>
                                                                <div class="col-8 pl-0">
                                                                    <h4 class="smallmerriheader"><?php echo get_post_meta($facilitator, 'name', true); ?></h4>
                                                                    <p class="generalparagraph mb-0">
                                                                    <?php echo get_post_meta($facilitator, 'description', true); ?>
                                                                    </p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <?php }
                                                        }
                                                        ?>
                                                    </div>
                                                    </div>
                                                    
                                                    <?php
                                                    $btn_label = get_post_meta($course_id, 'button_label', true);
                                                    $btn_url = get_post_meta($course_id, 'button_url', true);

                                                    if(!empty($btn_label) && !empty($btn_url)){ ?>
                                                        <div class="mt-4">
                                                        <div class="mt-5">
                                                            <a href="<?php echo $btn_url; ?>">
                                                            <button
                                                                class="btn genbtncertifai rounded10 px-4 py-2 w-100"
                                                                class="modalEnrollment">
                                                                <?php echo $btn_label; ?>
                                                            </button>
                                                            </a>
                                                        </div>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="bg-white p-2 p-md-2 p-1 col-md-9 col-sm-6 col-4 datewhite d-flex align-items-center justify-content-center">
                                            <div class="">
                                            <p class="smallmerriheader mb-0"><?php echo $btn_grp['pi3_button_label'] ?? ''; ?></p>
                                            </div>
                                        </div>
                                        <?php }
                                    }
                                    ?>
                                </div>
                              </div>
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
      <!-- end-program info grid section -->
      
      <!-- courses section -->
      <section class="lightgreenbg" style="background-color:<?php $bg_color = rwmb_meta('light_color'); echo $bg_color?$bg_color:"#d0ebd1"; ?>">
        <div class="">
          <div class="py-3 py-md-5 horizontalpadding2">
            <div class="mt-md-3">
              <div class="mt-3 mt-md-0">
                <div class="col-md-9 px-0">
                  <h2 class="mainmerriheader3 mb-3 mt-md-2">
                    <?php echo rwmb_meta('course_section_label'); ?>
                  </h2>
                  <p class="medparagraph">
                    <?php echo rwmb_meta('course_section_summary'); ?>
                  </p>
                </div>

                <div class="">
                  <div>
                    <?php
                      $program_type = rwmb_meta('course_type');

                      if($program_type == 'multi-segment-program'){ 
                        $segments = rwmb_meta('multi_segment_courses');
                        if(!empty($segments)){
                          foreach($segments as $ind => $segment){ ?>
                            <div class="accordion" id="accordionFeatures<?php echo in_words($ind); ?>">
                              <div class="my-3">
                                <div class="bg-white py-md-3 px-md-5 p-3 px-4">
                                  <div class="" id="heading<?php echo in_words($ind); ?>">
                                    <div class="d-flex justify-content-between align-items-center py-3"
                                      data-toggle="collapse"
                                      data-target="#collapse<?php echo in_words($ind); ?>"
                                      aria-expanded="true"
                                      aria-controls="collapse<?php echo in_words($ind); ?>">
                                      <div class="d-flex flex-md-row flex-column justify-content-md-between align-items-md-center collapsewidth1">
                                        <div class="inner1">
                                          <h2 class="merriparagraph bold900 mb-0">
                                            <?php echo $segment['segment_title'] ?? ''; ?>
                                          </h2>
                                        </div>
                                        <div class="ml-md-5 inner2">
                                          <h2 class="generalparagraph mb-0">
                                            <?php echo $segment['segment_snippet'] ?? ''; ?>
                                          </h2>
                                        </div>
                                      </div>
                                      <div class="ml-4 ml-md-0">
                                        <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                      </div>
                                    </div>
                                  </div>

                                  <div id="collapse<?php echo in_words($ind); ?>" class="collapse py-3 border-top" aria-labelledby="heading<?php echo in_words($ind); ?>" data-parent="#accordionFeatures<?php echo in_words($ind); ?>">
                                    <div>
                                      <p class="generalparagraph mb-0">
                                        Click on a course to view curriculum and
                                        timetable
                                      </p>

                                      <div class="row mt-4 px-0">
                                        <?php
                                            $segment_courses = $segment['add_course_group'] ?? '';
                                            if(!empty($segment_courses)){
                                              foreach($segment_courses as $in => $course){ 
                                                $course_id = $course['msc_course'] ?? '';
                                                $pixel_grp = $course['msc_course_fb_pixel']??'';  
                                              ?>
                                                <div class="col-lg-3 col-md-6 my-2">
                                                  <a data-toggle="modal" data-target="#modalMSCEnrollment<?php echo $ind.$in; ?>" class="boxlink">
                                                    <div class="p-3 med-grey-bg3">
                                                      <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="smallmerriheader text-white mb-0 my-3 w-75 height25">
                                                          <?php echo $course['msc_course_title'] ?? ''; ?>
                                                        </h4>
                                                        <div>
                                                          <i class="fa fa-arrow-right fa-xs text-white" aria-hidden="true"></i>
                                                        </div>
                                                      </div>

                                                      <?php
                                                        if(!empty($course['msc_course_highlight'] ?? '') || !empty($course['msc_course_fee'] ?? '')){ ?>
                                                          <div class="mt-4">
                                                            <div class=" d-flex justify-content-between align-items-center">
                                                              <?php
                                                                if(!empty($course['msc_course_highlight'] ?? '')){ ?>
                                                                  <div class="roundedgreycontainer p-2">
                                                                    <p class="generalparagraph mb-0">
                                                                      <?php echo $course['msc_course_highlight'] ?? ''; ?>
                                                                    </p>
                                                                  </div>
                                                                <?php }
                                                              ?>
 
                                                              <?php
                                                                if(!empty($course['msc_course_fee'] ?? '')){ ?>
                                                                  <div class="smallmerriheader text-white">
                                                                    <?php echo $course['msc_course_fee'] ?? ''; ?>
                                                                  </div>
                                                                <?php }
                                                              ?>
                                                            </div>
                                                          </div>
                                                        <?php }
                                                      ?>
                                                    </div></a>
                                                </div>
                                                <!-- modal -->
                                                
                                              <?php }
                                            }
                                        ?>
                                      </div>

                                      <div class="mt-4">
                                        <?php
                                          $msc_hightlight_info = $segment['msc_highlight_info'] ?? '';

                                          if(!empty($msc_hightlight_info)){ ?>
                                            <div class="infobg p-md-3 p-2 d-flex align-items-center">
                                              <i class="fa fa-info-circle mr-3" aria-hidden="true"></i>

                                              <p class="generalparagraph mb-0">
                                                <?php echo $msc_hightlight_info; ?>
                                              </p>
                                            </div>
                                          <?php }
                                        ?>

                                        <?php
                                          $btn_grp = $segment['msc_button_group'] ?? '';
                                          $is_popup = $btn_grp['msc_btn_popup'] ?? '';
                                          $pixel_grp = $btn_grp['msc_fb_pixel'] ?? '';
                                          
                                          if(!empty($btn_grp['msc_button_label'] ?? '')){

                                            if($is_popup == "yes"){ ?>
                                              <div class="mt-4 largemobilebtn">
                                                <a href="#" data-toggle="modal" data-target="#segmentModal<?php echo $ind; ?>"  onclick="fbq('trackCustom', '<?php echo $pixel_grp['msc_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['msc_scenario'] ?? ''; ?>'});">  
                                                  <button
                                                    class="btn genbtncertifai modalEnrollment">
                                                    <?php echo $btn_grp['msc_button_label'] ?? ''; ?>
                                                  </button>
                                                </a>
                                              </div>
                                              <!-- modal form -->
                                              <div class="modal fade modal-full-screen" id="segmentModal<?php echo $ind; ?>" data-backdrop="static" data-keyboard="false">
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
                                                        <?php echo $btn_grp['msc_form_title'] ?? ''; ?>
                                                        </h4>
                                                        <p class="generalparagraph mb-0 pb-md-2">
                                                          <?php echo $btn_grp['msc_form_snippet'] ?? ''; ?>
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <div class="modal-body p-0 m-0 px-md-4">
                                                      <?php
                                                        $form_id = $btn_grp['msc_form_id']??'';
                                                        echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                      ?>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <?php }else{ ?>
                                              <div class="mt-4 largemobilebtn" onclick="fbq('trackCustom', '<?php echo $pixel_grp['msc_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['msc_scenario'] ?? ''; ?>'});">
                                                <a href="<?php echo $btn_grp['msc_button_url'] ?? ''; ?>" target="<?php echo (($btn_grp['msc_btn_new_tab']??'') == "yes")?"_blank":""; ?>">  
                                                  <button
                                                    class="btn genbtncertifai modalEnrollment">
                                                    <?php echo $btn_grp['msc_button_label'] ?? ''; ?>
                                                  </button>
                                                </a>
                                              </div>
                                            <?php }
                                          } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php }
                        }  
                      }elseif($program_type == 'multi-course-program'){ 
                          $mcp_courses = rwmb_meta('multi_course_group');
                          if(!empty($mcp_courses)){
                            foreach($mcp_courses as $in => $course){ 
                              $course_id = $course['mc_course'] ?? ''; ?>
                              <div class="accordion" id="accordionFeaturesOne">
                                <div class="my-3">
                                  <div class="bg-white py-md-3 px-md-5 p-3 px-4">
                                    <div class="">
                                      <?php
                                        $highlight_info = $course['mc_highlight_info'] ?? '';
                                        if(!empty($highlight_info)){ ?>
                                          <div class="mt-4">
                                            <div class="infobg p-md-3 p-2 d-flex align-items-center">
                                              <i class="fa fa-info-circle mr-3" aria-hidden="true"></i>

                                              <p class="generalparagraph mb-0">
                                                <?php echo $highlight_info; ?>
                                              </p>
                                            </div>
                                          </div>
                                        <?php }
                                      ?>
                                      <div class="d-flex flex-md-row flex-column justify-content-between align-items-md-center py-3">
                                        <div>
                                          <h2 class="merriparagraph bold900 mb-0">
                                              <?php echo $course['mc_course_title'] ?? ''; ?>
                                          </h2>
                                        </div>

                                        <div class="mx-md-5 my-3 my-md-0">
                                          <h2 class="generalparagraph mb-0">
                                            <?php
                                              echo $course['mc_course_snippet'] ?? '';
                                            ?>
                                          </h2>
                                          
                                          <div class="d-flex flex-wrap mt-3">
                                            <?php
                                              if(!empty($course['mc_course_higlight']??'')){ ?>
                                                <div class="borderradius20 med-grey-bg4 py-2 px-3 mr-3">
                                                  <p class="generalparagraph bold900 text-dark mb-0">
                                                    <?php
                                                      echo $course['mc_course_higlight'] ?? '';
                                                    ?>
                                                  </p>
                                                </div>
                                              <?php }

                                              if(!empty($course['mc_course_fee']??'')){ ?>
                                                <div class="borderradius20 med-grey-bg4 py-2 px-3 mr-3">
                                                  <p class="generalparagraph bold900 text-dark mb-0">
                                                    <?php
                                                      echo $course['mc_course_fee'] ?? '';
                                                    ?>
                                                  </p>
                                                </div>
                                              <?php }
                                            ?>

                                            <?php
                                              if(!empty($course_id)){ ?>
                                                <div>
                                                  <a href="#" data-toggle="modal" data-target="#modalMCEnrollment<?php echo $in; ?>" class="generalparagraph mb-0 bluecolor bold700">
                                                    <u>View Curriculum</u>
                                                  </a>
                                                </div>
                                              <?php }
                                            ?>
                                          </div>
                                        </div>

                                        <?php
                                          $btn_grp = $course['mc_button_group'] ?? '';
                                          $is_popup = $btn_grp['mc_btn_popup'] ?? '';
                                          $pixel_grp = $btn_grp['mc_fb_pixel'] ?? '';
                                          
                                          if(!empty($btn_grp['mc_button_label'] ?? '')){
                                            if($is_popup == "yes"){ ?>
                                              <div class="largemobilebtn">
                                                <button
                                                  class="btn genbtncertifai py-2"
                                                  data-toggle="modal"
                                                  data-target="#modalMCForm<?php echo $in; ?>"
                                                  class="modalEnrollment"
                                                  onclick="fbq('trackCustom', '<?php echo $pixel_grp['mc_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['mc_scenario'] ?? ''; ?>'});"
                                                >
                                                  <?php echo $btn_grp['mc_button_label'] ?? ''; ?>
                                                </button>
                                              </div>
                                              <!-- modal form -->
                                              <div class="modal fade modal-full-screen" id="modalMCForm<?php echo $in; ?>" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                  <div class="modal-content mb-5">
                                                    <div class="modal-header headerbg px-md-5 py-md-3 py-2">
                                                      <!-- <h5 class="modal-title">
                                                        <div class="d-none d-md-block">
                                                          <h4 class="mainmerriheader2"><?php echo $btn_grp['mc_form_title'] ?? ''; ?></h4>
                                                          <p class="generalparagraph my-md-3">
                                                            <?php echo $btn_grp['mc_form_snippet'] ?? ''; ?>
                                                          </p>
                                                        </div>
                                                      </h5> -->
                                                      <div class="mx-1 ml-auto">
                                                        <button type="button" class="closemodalbtn btn px-4" data-dismiss="modal">
                                                          close
                                                        </button>
                                                      </div>
                                                    </div>
                                                    <div class="d-block">
                                                      <div class="med-grey-bg2 p-3">
                                                        <h4 class="mainmerriheader2">
                                                        <?php echo $btn_grp['mc_form_title'] ?? ''; ?>
                                                        </h4>
                                                        <p class="generalparagraph mb-0">
                                                          <?php echo $btn_grp['mc_form_snippet'] ?? ''; ?>
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <div class="modal-body p-0 m-0 px-md-4">
                                                      <?php
                                                        $form_id = $btn_grp['mc_form_id']??'';
                                                        echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                                      ?>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <?php }else{ ?>
                                              <a href="<?php echo $btn_grp['mc_button_url'] ?? ''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['mc_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['mc_scenario'] ?? ''; ?>'});" target="<?php if(($btn_grp['mc_btn_new_tab']??'') == "yes") echo "_blank"; ?>">
                                                <div class="largemobilebtn">
                                                  <button
                                                    class="btn genbtncertifai py-2"
                                                    class="modalEnrollment">
                                                    <?php echo $btn_grp['mc_button_label'] ?? ''; ?>
                                                  </button>
                                                </div>
                                              </a>
                                            <?php }
                                          } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal -->
                            <?php }
                          }
                      }elseif($program_type == 'single-course-program'){ 
                        $sc_course = rwmb_meta('sc_course');
                        if(!empty($sc_course)){ ?>
                          <div class="accordion" id="accordionFeaturesOne">

                            <?php
                              $course_features = get_post_meta($sc_course, 'course_features', true);
                              if(!empty($course_features)){
                                foreach($course_features as $ind => $feature){ ?>
                                  <div class="my-3">
                                    <div class="bg-white p-md-4 p-3">
                                      <div class="" id="heading<?php echo in_words($ind); ?>">
                                        <div class="d-flex px-2 justify-content-between align-items-center"
                                          data-toggle="collapse"
                                          data-target="#collapse<?php echo in_words($ind); ?>"
                                          aria-expanded="true"
                                          aria-controls="collapse<?php echo in_words($ind); ?>">
                                          <div class="d-flex align-items-center">
                                            <div>
                                              <h2 class="merriparagraph bold900 bluecolor mb-0">
                                                <?php echo $feature['feature_title'] ?? ''; ?>
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="ml-4 ml-md-0">
                                            <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                          </div>
                                        </div>
                                      </div>

                                      <div
                                        id="collapse<?php echo in_words($ind); ?>"
                                        class="collapse py-3 px-2"
                                        aria-labelledby="heading<?php echo in_words($ind); ?>"
                                        data-parent="#accordionFeaturesOne">
                                        <div>
                                          <p class="generalparagraph mb-0">
                                            <?php echo $feature['feature_description'] ?? ''; ?>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php }
                              }
                            ?>
                            <div class="my-3">
                              <div class="bg-white p-md-4 p-3">
                                <div class="" id="headingTen">
                                  <div
                                    class="d-flex justify-content-between align-items-center px-2"
                                    data-toggle="collapse"
                                    data-target="#collapseTen"
                                    aria-expanded="true"
                                    aria-controls="collapseTen">
                                    <div class="d-flex align-items-center">
                                      <div>
                                        <h2 class="merriparagraph bold900 mb-0">
                                          Lesson Plan
                                        </h2>
                                      </div>
                                    </div>
                                    <div class="ml-4 ml-md-0">
                                      <!-- <i
                                    class="fa fa-chevron-down fa-xs"
                                    aria-hidden="true"
                                  ></i> -->
                                    </div>
                                  </div>
                                </div>

                                <div
                                  id="collapseTen"
                                  class="collapse show py-3 px-2"
                                  aria-labelledby="headingTen"
                                  data-parent="#accordionFeaturesOne">
                                  <div>
                                    <div class="accordion" id="accordionInner">
                                      <?php
                                        $course_plans = get_post_meta($sc_course, 'course_plan_group', true);
                                        if(!empty($course_plans)){
                                          foreach($course_plans as $i => $plan){ ?>
                                            <div class="my-3">
                                              <div class="med-grey-bg2 p-md-4 p-3">
                                                <div class="pb-3" id="headingInnerOne<?php echo $i; ?>">
                                                  <div
                                                    class="d-flex justify-content-between align-items-center"
                                                    data-toggle="collapse"
                                                    data-target="#collapseInnerOne<?php echo $i; ?>"
                                                    aria-expanded="true"
                                                    aria-controls="collapseInnerOne<?php echo $i; ?>">
                                                    <div class="d-flex align-items-center">
                                                      <div class="mr-md-3 mr-2">
                                                        <h2 class="merriparagraph bold900 mb-0">
                                                          <?php echo $plan['plan_title'] ?? ''; ?>
                                                        </h2>
                                                      </div>

                                                      <div class="px-md-3 px-2 py-2 med-grey-bg3 borderradius20">
                                                        <p class="mb-0 generalparagraph bold700 text-white">
                                                          <?php echo $plan['plan_badge'] ?? ''; ?>
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <div class="ml-4 ml-md-0">
                                                      <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div
                                                  id="collapseInnerOne<?php echo $i; ?>"
                                                  class="collapse my-3 dottedbordertop show py-3"
                                                  aria-labelledby="headingInnerOne<?php echo $i; ?>">
                                                  <div>
                                                    <div class="py-3 dottedbordertop">
                                                      <p class="generalparagraph mb-0">
                                                        <?php echo $plan['plan_description'] ?? ''; ?>
                                                      </p>

                                                      <div class="mt-4 d-flex flex-wrap">
                                                        <?php
                                                          $plan_tags = $plan['plan_tags'] ?? '';
                                                          if(!empty($plan_tags)){
                                                            foreach($plan_tags as $tag){ ?>
                                                              <div class="bg-white borderradius20 px-3 py-2 my-1 my-md-2 mr-3">
                                                                <p class="generalparagraph mb-0">
                                                                  <?php echo $tag; ?>
                                                                </p>
                                                              </div>
                                                            <?php }
                                                          }
                                                        ?>
                                                      </div>
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
                            </div>
                          </div>
                        <?php }
                      }else{
                        echo "<div class=''></div>";
                      }
                      
                    ?>
                    <div class="mt-4">
                      <?php
                        $highlight_info = rwmb_meta('highlight_info');
                        if(!empty($highlight_info)){ ?>
                          <div class="infobg p-md-3 p-2 d-flex align-items-center">
                            <i class="fa fa-info-circle mr-3" aria-hidden="true"></i>

                            <p class="generalparagraph mb-0">
                              <?php echo $highlight_info; ?>
                            </p>
                          </div>
                        <?php }
                      ?>

                      <?php
                        $btn_grp = rwmb_meta('program_button_group');
                        $is_popup = $btn_grp['program_btn_popup'] ?? '';
                        $pixel_grp = $btn_grp['fb_pixel']??'';
                        
                        if(!empty($btn_grp['button_label'] ?? '')){
                          if($is_popup == "yes"){ ?>
                            <a href="#" data-toggle="modal" data-target="#programModal" onclick="fbq('trackCustom', '<?php echo $pixel_grp['event']??''; ?>', {scenario:<?php echo $pixel_grp['scenario']??''; ?>})">
                              <div class="mt-4 largemobilebtn">
                                <button class="btn genbtncertifai modalEnrollment">
                                  <?php echo $btn_grp['button_label'] ?? ''; ?>
                                </button>
                              </div>
                            </a>
                            <!-- modal form -->
                            <div class="modal fade modal-full-screen" id="programModal" data-backdrop="static" data-keyboard="false">
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
                                    <div class="px-4 d-flex justify-content-between">
                                      <div>
                                        <a class="medparagraph px-4 text-dark text-center" data-dismiss="modal">
                                          <u> close</u>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php }else{ ?>
                            <a href="<?php echo $btn_grp['button_url'] ?? ''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['event']??''; ?>', {scenario:<?php echo $pixel_grp['scenario']??''; ?>})" target="<?php echo (($btn_grp['program_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                              <div class="mt-4 largemobilebtn">
                                <button class="btn genbtncertifai modalEnrollment">
                                  <?php echo $btn_grp['button_label'] ?? ''; ?>
                                </button>
                              </div>
                            </a>
                          <?php }  
                        } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end-courses section -->
      
      <!-- program features section -->
      <div class="medgreybg dottedborderbottom py-5">
        <?php
          $program_features = rwmb_meta('program_features');
        ?>
        <div class="horizontalspacing">
          <div>
            <h2 class="mainmerriheader3 mb-0">
              <?php echo $program_features['features_section_header'] ?? ''; ?>
            </h2>
          </div>

          <div class="row mt-5">
            <?php
              $feature_group = $program_features['add_feature_group'] ?? '';

              if(!empty($feature_group)){
                foreach($feature_group as $feature){ ?>
                  <div class="col-6 col-md-3 my-md-3 my-2 text-center">
                    <div class="whitebg box p-md-3 p-2">
                      <i class="fa fa-bolt bluecolor fa-xs" aria-hidden="true"></i>

                      <h2 class="mainmerriheader2 my-md-3 my-1">
                        <?php echo $feature['feature_title'] ?? ''; ?>
                      </h2>

                      <p class="medparagraph">
                        <?php echo $feature['feature_snippet'] ?? ''; ?>
                      </p>
                    </div>
                  </div>
                <?php }
              }
            ?>
          </div>
        </div>
      </div>
      <!-- end-program features section -->
      
      <!-- program timeline section -->
      <section class="dottedborderbottom">
        <?php
          $program_timeline = rwmb_meta('program_timeline');
        ?>
        <div class="py-4">
          <div class="bluecolorbg horizontalspacing p-md-5 p-4" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
            <div>
              <div>
                <h2 class="mainmerriheader3 text-white">
                  <?php echo $program_timeline['timeline_section_header'] ?? ''; ?>
                </h2>
              </div>

              <div class="deskhorizontalline row mt-5">
                <?php
                  $timeline_content = $program_timeline['add_timeline_content'] ?? '';
                  foreach($timeline_content as $tc){ ?>
                    <div class="col-md-3 py-3 py-md-0">
                      <div class="d-flex flex-row flex-md-column align-items-center align-items-md-start icandiet">
                        <div class="numbercircle circles d-flex align-items-center justify-content-center align-content-center">
                          <p class="smallmerriheader mb-0"><?php echo $tc['timeline_sn'] ?? ''; ?></p>
                        </div>

                        <div class="ml-3 ml-md-0 maindiet">
                          <p class="smallmerriheader text-white mb-1 pb-1 mt-4">
                            <?php echo $tc['timeline_title'] ?? ''; ?>
                          </p>
                          <p class="generalparagraph text-white mb-0">
                            <?php echo $tc['timeline_description'] ?? ''; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php }
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end-program timeline section -->
      
      <!-- facilitators section -->
      <?php
        $facilitator_section = rwmb_meta('facilitators_section');
        if(($facilitator_section['show_facilitators'] ?? '') == "yes"){ ?>
          <section class="my-5 dottedborderbottom pb-3">
            <div class="horizontalspacing">
              <div class="col-md-9 px-0">
                <h2 class="mainmerriheader3"><?php echo $facilitator_section['facilitators_section_header'] ?? ''; ?></h2>
                <p class="medparagraph mt-3">
                  <?php echo $facilitator_section['facilitators_section_snippet'] ?? ''; ?>
                </p>
              </div>

              <div class="relativecontainer2">
                <div class="absolutefacilators absolutesvgpeople1">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople2">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople3">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople4">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>

                <div class="absolutefacilators absolutesvgpeople5">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople6">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople7">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
                <div class="absolutefacilators absolutesvgpeople8">
                  <img src="<?php echo get_theme_file_uri( 'assets/images/svg-vector.svg' ); ?>" alt="" class="img-fluid" />
                </div>
              </div>
              <div class="mt-5">
                <div class="row mt-3">
                  <?php
                    $facilitators = $facilitator_section['select_facilitator'] ?? '';
                    if(!empty($facilitators)){
                      foreach($facilitators as $fac_in => $facilitator){ ?>
                        <div class="my-md-3 col-6 col-md-3">
                          <div class="d-flex justify-content-center">
                            <a data-toggle="modal" data-target="#modalFacilitator<?php echo $fac_in; ?>">
                              <img
                                src="<?php echo rwmb_meta('image', array(), $facilitator)['full_url']; ?>"
                                alt=""
                                class="img-fluid facilatorperson"
                              />

                              <p class="smallmerriheader text-center my-3 mb-0">
                                <?php echo get_post_meta($facilitator, 'name', true); ?>
                              </p>
                            </a>
                          </div>
                        </div>
                        <div class="modal fade modal-full-screen" id="modalFacilitator<?php echo $fac_in; ?>" data-backdrop="static" data-keyboard="false">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content mb-5">
                              <div class="modal-body p-0 m-0 mb-5 py-5">
                                <div class="px-md-5 px-3 py-5">
                                  <div class="d-flex justify-content-center">
                                    <div class="text-center">
                                      <img
                                        src="<?php echo rwmb_meta('image', array(), $facilitator)['full_url']; ?>"
                                        alt=""
                                        class="img-fluid facilatorperson"
                                      />

                                      <p class="mainmerriheader2 text-center my-3 mb-0">
                                        <?php echo get_post_meta($facilitator, 'name', true); ?>
                                      </p>

                                      <div class="mt-5 text-center">
                                        <p class="generalparagraph">
                                          <?php echo get_post_meta($facilitator, 'description', true); ?>
                                        </p>
                                      </div>

                                      <a class="medparagraph px-4 text-dark text-center" data-dismiss="modal">
                                        <u> close</u>
                                      </a>
                                    </div>
                                  </div>
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
          </section>
        <?php }
      ?>
      <!-- end-facilitators section -->
      
      <!-- faq section -->
      <section class="med-grey-bg horizontalspacing people p-md-5 mt-md-5">
        <?php
          $faq_section = rwmb_meta('faq_section');
        ?>
        <div class="px-3 py-3 py-md-0">
          <div>
            <div>
              <h2 class="mainmerriheader3"><?php echo $faq_section['faq_section_header'] ?? ''; ?></h2>
              <p class="medparagraph mt-4">
                <?php echo $faq_section['faq_section_summary'] ?? ''; ?>
              </p>
            </div>

            <div class="">
              <?php 
                $faq_tabs = $faq_section['faq_tabs'] ?? '';

                if(!empty($faq_tabs)){ ?>
                  <div class="firstnav">
                    <ul
                      class="nav nav-pills mb-3 d-flex flex-nowrap"
                      id="pills-tab"
                      role="tablist">
                      <?php
                        foreach($faq_tabs as $idx => $tab){ ?>
                          <li class="nav-item mr-3" role="presentation">
                            <a
                              class="nav-link generalparagraph <?php if($idx == array_key_first($faq_tabs)) echo 'active px-4'; ?>"
                              id="pills-<?php echo in_words($idx); ?>-tab"
                              data-toggle="pill"
                              href="#pills-<?php echo in_words($idx); ?>"
                              role="tab"
                              aria-controls="pills-<?php echo in_words($idx); ?>"
                              aria-selected="true"><?php echo $tab['tab_title'] ?? ''; ?></a>
                          </li>
                        <?php }
                      ?>
                    </ul>
                  </div>
                <?php }
              ?> 
            </div>
            <div class="tab-content" id="pills-tabContent">
              <?php
                if(!empty($faq_tabs)){
                  foreach($faq_tabs as $idx => $tab){ ?>
                    <div
                      class="tab-pane fade <?php if($idx == array_key_first($faq_tabs)) echo 'show active'; ?>"
                      id="pills-<?php echo in_words($idx); ?>"
                      role="tabpanel"
                      aria-labelledby="pills-<?php echo in_words($idx); ?>-tab">
                      <div class="">
                        <div>
                          <div class="accordion" id="accordionFeaturesOne">
                            <?php
                              $faqs = $tab['add_faq'] ?? '';
                              if(!empty($faqs)){
                                foreach($faqs as $in => $faq){
                                  if($in == array_key_first($faqs)){ ?>
                                    <div class="my-4 border-bottom border-top py-3">
                                      <div class="">
                                        <div class="" id="heading<?php echo in_words($in); ?>Faq">
                                          <div class="d-flex justify-content-between align-items-center"
                                            data-toggle="collapse"
                                            data-target="#collapse<?php echo in_words($in); ?>Faq"
                                            aria-expanded="true"
                                            aria-controls="collapse<?php echo in_words($in); ?>Faq">
                                            <div class="d-flex align-items-center">
                                              <div>
                                                <h2 class="smallmerriheader2 graycolor mb-0">
                                                  <?php echo $faq['faq_question'] ?? ''; ?>
                                                </h2>
                                              </div>
                                            </div>
                                            <div class="ml-4 ml-md-0">
                                              <i class="fa fa-arrow-down bluecolor fa-xs" aria-hidden="true"></i>
                                            </div>
                                          </div>
                                        </div>
          
                                        <div
                                          id="collapse<?php echo in_words($in); ?>Faq"
                                          class="collapse py-3"
                                          aria-labelledby="heading<?php echo in_words($in); ?>Faq"
                                          data-parent="#accordionFeaturesOne">
                                          <div class="faq-answer">
                                            <p class="generalparagraph mb-0">
                                              <?php echo $faq['faq_answer'] ?? ''; ?>
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  <?php }else{ ?>
                                    <div class="mb-4 mt-3 border-bottom pb-3">
                                      <div class="">
                                        <div class="" id="heading<?php echo in_words($in); ?>Faq">
                                          <div class="d-flex justify-content-between align-items-center"
                                            data-toggle="collapse"
                                            data-target="#collapse<?php echo in_words($in); ?>Faq"
                                            aria-expanded="true"
                                            aria-controls="collapse<?php echo in_words($in); ?>Faq">
                                            <div class="d-flex align-items-center">
                                              <div>
                                                <h2 class="smallmerriheader2 graycolor mb-0">
                                                  <?php echo $faq['faq_question'] ?? ''; ?>
                                                </h2>
                                              </div>
                                            </div>
                                            <div class="ml-4 ml-md-0">
                                              <i class="fa fa-arrow-down bluecolor fa-xs" aria-hidden="true"></i>
                                            </div>
                                          </div>
                                        </div>
          
                                        <div
                                          id="collapse<?php echo in_words($in); ?>Faq"
                                          class="collapse py-3"
                                          aria-labelledby="heading<?php echo in_words($in); ?>Faq"
                                          data-parent="#accordionFeaturesOne">
                                          <div class="faq-answer">
                                            <p class="generalparagraph mb-0">
                                              <?php echo $faq['faq_answer'] ?? ''; ?>
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <?php }
                                }
                              }
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                  } ?>
                  <?php
                    $btn_grp = $faq_section['faq_button_group'] ?? '';

                    if(!empty($btn_grp)){ ?>
                      <div class="largemobilebtn mt-3 mt-md-0">
                        <?php 
                          $faq_is_popup = $btn_grp['faq_btn_popup'] ?? '';

                          if($faq_is_popup == "yes"){ ?>
                            <a href="#" data-toggle="modal" data-target="#faqModal">
                              <button class="btn genbtncertifai rounded10">
                                <?php echo $btn_grp['faq_button_label'] ?? ''; ?>
                              </button>
                            </a>
                            <div class="modal fade modal-full-screen" id="faqModal" data-backdrop="static" data-keyboard="false">
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
                                  <div class="modal-body p-0 m-0">
                                    <?php
                                      $form_id = $btn_grp['form_id']??'';
                                      echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php }else{ ?>
                            <a href="<?php echo $btn_grp['faq_button_url'] ?? ''; ?>" target="<?php echo (($btn_grp['faq_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                              <button class="btn genbtncertifai rounded10">
                                <?php echo $btn_grp['faq_button_label'] ?? ''; ?>
                              </button>
                            </a>
                          <?php }
                        ?>
                      </div>
                    <?php }
                  ?>
                <?php } 
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- end-faq section -->
      
      <!-- offer/bundle section -->
      <section class="my-5">
        <?php
          $bundle_section = rwmb_meta('bundle_section');
        ?>
        <div class="horizontalspacing">
          <div class="col-md-7 px-0">
            <h2 class="mainmerriheader3"><?php echo $bundle_section['bundle_section_header'] ?? ''; ?></h2>
            <p class="medparagraph mt-4">
              <?php echo $bundle_section['bundle_section_snippet'] ?? ''; ?>
            </p>
          </div>

          <div class="mt-4">
            <?php
              $bundles = $bundle_section['offer_group'] ?? '';
              if(!empty($bundles)){
                foreach($bundles as $in => $bundle){ ?>      
                  <div class="greenbg p-4 my-3" style="background-color:<?php $bg_color = rwmb_meta('dark_color'); echo $bg_color?$bg_color:"#167c1a"; ?>">
                    <div class="d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                      <h3 class="text-white mainmerriheader2 mb-0">
                        <?php echo $bundle['offer_title'] ?? ''; ?>
                      </h3>
                      
                      <?php
                        $btn_grp = $bundle['offer_button_group'] ?? '';

                        if(!empty($btn_grp)){ ?>
                          <div class="largemobilebtn mt-3 mt-md-0">
                            <?php
                              $btn_grp = $bundle['offer_button_group'] ?? '';
                              $offer_is_popup = $btn_grp['offer_btn_popup'] ?? '';
          
                              if($offer_is_popup == "yes"){ ?>
                                <a href="#" data-toggle="modal" data-target="#bundleModal<?php echo $in; ?>">
                                  <button class="btn whitebtn bluecolor px-4 py-2">
                                    <?php echo $btn_grp['offer_button_label'] ?? ''; ?>
                                  </button>
                                </a>
                                <div class="modal fade modal-full-screen" id="bundleModal<?php echo $in; ?>" data-backdrop="static" data-keyboard="false">
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
                                          <?php echo $btn_grp['offer_form_title'] ?? ''; ?>
                                          </h4>
                                          <p class="generalparagraph mb-0 pb-md-2">
                                            <?php echo $btn_grp['offer_form_snippet'] ?? ''; ?>
                                          </p>
                                        </div>
                                      </div>
                                      <div class="modal-body p-0 m-0">
                                        <?php
                                          $form_id = $btn_grp['offer_form_id']??'';
                                          echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <?php }else{ ?>
                                <a href="<?php echo $btn_grp['offer_button_url'] ?? ''; ?>" target="<?php echo (($btn_grp['offer_btn_new_tab']??'') == "yes")?"_blank":""; ?>">
                                  <button class="btn whitebtn bluecolor px-4 py-2">
                                    <?php echo $btn_grp['offer_button_label'] ?? ''; ?>
                                  </button>
                                </a>
                              <?php }
                            ?>
                          </div>
                        <?php }
                      ?>
                    </div>
                  </div>
                <?php }
              }
            ?>
          </div>
        </div>
      </section>
      <!-- end-offer/bundle section -->

      <!-- include courses modal -->
      <?php include "programs-modal.php"; ?>
<?php get_footer(); ?>
