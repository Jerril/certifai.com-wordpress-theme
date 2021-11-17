<?php
    $header_footer = get_posts(array("name"=>"page-header-footer", "post_type"=>"page", "numberposts"=>-1));
    $header_footer = $header_footer[0];

    $logos = $header_footer->logo_group ?? '';
    $pre_footer = $header_footer->pre_footer ?? '';
    $footer_info = $header_footer->footer_info ?? '';
    $social_media_handles =  $header_footer->sm_handles ?? '';
?>

      <section class="horizontalspacing pt-4 my-5 dottedbordertop">
        <div class="row">
            <?php
                if(!empty($pre_footer)){
                    foreach($pre_footer as $key => $content){ ?>
                        <div class="col-md-3 dottedborderbottommobile py-3 py-md-0">
                            <div class="d-flex">
                              <i class="fas fa-check-double mr-2 mt-2 mt-2 fa-xs d-block d-md-none"></i>
                              <div class="">
                                <h2 class="bold700 medparagraph d-flex align-items-center">
                                  <?php echo $content['pfi_label'] ?? ''; ?>
                                </h2>
                                <p class="medparagraph my-2 heightfooterp">
                                  <?php echo $content['pfi_summary'] ?? ''; ?>
                                </p>

                                <?php
                                  $btn_grp = $content['pfi_btn_group'] ?? '';
                                  $is_popup = $btn_grp['pfi_btn_popup'] ?? '';
                                  $pixel_grp = $btn_grp['pfi_fb_pixel'] ?? '';

                                  if($is_popup == 'yes'){ ?>
                                    <a href="#" class="bluecolor generalparagraph bold900" onclick="fbq('trackCustom', '<?php echo $pixel_grp['pfi_event']??''; ?>', {scenario:<?php echo $pixel_grp['pfi_scenario']??''; ?>})" data-toggle="modal" data-target="#prefooterModal<?php echo $key; ?>">
                                      <u><?php echo $btn_grp['button_label'] ?? ''; ?></u>
                                    </a>
                                    <!-- modal form -->
                                    <div class="modal fade modal-full-screen" id="prefooterModal<?php echo $key; ?>" data-backdrop="static" data-keyboard="false">
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
                                    <a href="<?php echo $btn_grp['button_url'] ?? ''; ?>" class="bluecolor generalparagraph bold900" onclick="fbq('trackCustom', '<?php echo $pixel_grp['pfi_event']??''; ?>', {scenario:<?php echo $pixel_grp['pfi_scenario']??''; ?>})" target="<?php echo (($btn_grp['button_new_tab']??'') == "yes")?"_blank":""; ?>">
                                      <u><?php echo $btn_grp['button_label'] ?? ''; ?></u>
                                    </a>
                                  <?php }
                                ?>
                              </div>
                            </div>
                        </div>
                    <?php }
                }
            ?>
        </div>
      </section>

      <footer class="medgreybg py-5">
        <div class="horizontalspacing">
          <div class="d-flex justify-content-between footerflex">
            <div class="flex1">
              <img src="<?php echo wp_get_attachment_image_url($logos['header_logo'] ?? '', 'full'); ?>" alt="certifai logo" class="img-fluid" />
            </div>
            
            <div class="flex2">
              <div class="d-none d-md-block">
                <div class="d-flex justify-content-centern flex-wrap">
                  <div>
                    <div class="d-flex justify-content-center">
                      <div class="">
                        <a href="#" class="text-dark generalparagraph mr-3">
                          <!-- TERMS OF USE -->
                        </a>
                      </div>
                      <span class=""> | </span>
                      <div class="">
                        <a href="<?php echo site_url("/teach"); ?>" onclick="fbq('trackCustom', 'teachwithcertifai', {scenario:'menu_click'})" class="text-dark generalparagraph mx-3">
                          Teach with us
                        </a>
                      </div>
                      <span class=""> | </span>
                      <div class="">
                        <a href="#" class="text-dark generalparagraph ml-3">
                          <!-- COOKIES -->
                        </a>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center flex-wrap mt-4">
                      <div class="">
                        <a href="#" class="text-dark generalparagraph text-center">
                          <?php echo $footer_info['fi_title'] ?? ''; ?>
                        </a>
                      </div>

                      <p class="mt-3 d-block text-dark generalparagraph text-center">
                        <?php echo $footer_info['fi_summary'] ?? ''; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between flex3 mr-3 mr-md-0">
                <?php
                    if(!empty($social_media_handles)){
                        foreach($social_media_handles as $smh){ 
                            $pixel_grp = $smh['smh_fb_pixel'] ?? '';
                          ?>
                            <a href="<?php echo $smh['smh_url'] ?? ''; ?>" onclick="fbq('trackCustom', '<?php echo $pixel_grp['smh_event']??''; ?>', {scenario:<?php echo $pixel_grp['smh_scenario']??''; ?>})" class="ml-2">
                                <i class="fa <?php echo $smh['smh_icon'] ?? ''; ?> bluecolor fa-x" aria-hidden="true"></i>
                            </a>
                        <?php }
                    }
                ?>
            </div>
          </div>
          <div class="d-block d-md-none mt-4">
            <div class="d-flex justify-content-centern flex-wrap">
              <div class="">
                <div class="dottedbordertop dottedborderbottom py-3">
                  <div class="mx-2 d-flex justify-content-between">
                    <div class="">
                      <a href="#" class="text-dark generalparagraph">
                        <!-- TERMS OF USE -->
                      </a>
                    </div>
                    <span class=""> | </span>
                    <div class="">
                        <a href="<?php echo site_url("/teach"); ?>" onclick="fbq('trackCustom', 'teachwithcertifai', {scenario:'menu_click'})" class="text-dark generalparagraph mx-3">
                          Teach with us
                        </a>
                    </div>
                    <span class=""> | </span>
                    <div class="">
                      <a href="#" class="text-dark generalparagraph">
                        <!-- COOKIES -->
                      </a>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-center flex-wrap mt-4">
                  <div class="">
                    <a href="#" class="text-dark generalparagraph text-center">
                      <?php echo $footer_info['fi_title'] ?? ''; ?>
                    </a>
                  </div>

                  <p class="mt-3 d-block text-dark generalparagraph text-center">
                    <?php echo $footer_info['fi_summary'] ?? ''; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- <script src="script.js"></script> -->

  <?php wp_footer(); ?>
</html>