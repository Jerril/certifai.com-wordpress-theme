<?php
    $program_type = rwmb_meta('course_type');

    if($program_type == 'multi-segment-program'){ 
        $segments = rwmb_meta('multi_segment_courses');
        if(!empty($segments)){
            foreach($segments as $ind => $segment){
                $segment_courses = $segment['add_course_group'] ?? '';
                if(!empty($segment_courses)){
                    foreach($segment_courses as $in => $course){ 
                        $course_id = $course['msc_course'] ?? '';
                        $pixel_grp = $course['msc_course_fb_pixel']??'';
                        
                        if(($course['msc_open_popup']??'') === "yes"){ ?>
                            <div class="modal fade modal-full-screen" id="modalMSCEnrollment<?php echo $ind.$in; ?>" data-backdrop="static" data-keyboard="false">
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
                                                <a href="<?php echo $btn_url; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['msc_course_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['msc_course_scenario'] ?? ''; ?>'});">
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
                        <?php 
                        }
                    }
                }
            }
        }  
    }elseif($program_type == 'multi-course-program'){ 
        $mcp_courses = rwmb_meta('multi_course_group');
        if(!empty($mcp_courses)){
            foreach($mcp_courses as $in => $course){ 
                $course_id = $course['mc_course'] ?? '';
                if(!empty($course_id)){ ?>
                    <!-- modal -->
                    <div class="modal fade modal-full-screen" id="modalMCEnrollment<?php echo $in; ?>" data-backdrop="static" data-keyboard="false">
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
                                        <a href="<?php echo $btn_url; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['mc_event'] ?? ''; ?>', {scenario: '<?php echo $pixel_grp['mc_scenario'] ?? ''; ?>'});">
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
                <?php }
            }
        }
    }
?>