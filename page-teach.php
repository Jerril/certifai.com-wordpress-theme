<?php get_header(); ?>
    <main>

    <section class="topsection relativecontainer mb-5">
      <div class="verticalmargincenter z4 horizontalspacing">
        <div class="width75">
          <h1 class="mainmerriheader3"><?php echo rwmb_meta('page_title'); ?></h1>
          <p class="biggerparagraph my-md-4">
            <?php echo rwmb_meta('page_snippet'); ?>
          </p>
        </div>
      </div>

      <?php
        $faq_section = rwmb_meta('faq_section');
      ?>
      <div class="infobg">
        <div class="horizontalspacing py-5">
          <div class="width75 mt-2">
            <h1 class="robotoheader">
              <?php echo $faq_section['faq_section_header'] ?? ''; ?>
            </h1>
            <p class="medparagraph2 my-md-4">
              <?php echo $faq_section['faq_section_summary'] ?? ''; ?>
            </p>
          </div>

          <div class="py-3 py-md-0">
            <div>
              <div class="">
                <div>
                  <div class="accordion" id="accordionteachwithus">
                    <?php
                      $faqs = $faq_section['add_faq'] ?? '';

                      if(!empty($faqs)){
                        foreach($faqs as $i => $faq){ ?>
                          <div class="dottedborderbottom <?php if($i == array_key_first($faqs)) echo "dottedbordertop"; ?> py-3">
                            <div class="">
                              <div class="" id="headingTeachwithus<?php echo $i; ?>">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                  data-toggle="collapse"
                                  data-target="#collapseTeachwithus<?php echo in_words($i); ?>"
                                  aria-expanded="true"
                                  aria-controls="collapseTeachwithus<?php echo in_words($i); ?>">
                                  <div class="d-flex align-items-center">
                                    <div>
                                      <h2 class="smallmerriheader2 graycolor mb-0">
                                        <?php echo $faq['faq_question']??''; ?>
                                      </h2>
                                    </div>
                                  </div>
                                  <div class="ml-4 ml-md-0">
                                    <i class="fa fa-chevron-down fa-xs" aria-hidden="true"></i>
                                  </div>
                                </div>
                              </div>

                              <div id="collapseTeachwithus<?php echo in_words($i); ?>" class="collapse py-3" aria-labelledby="headingTeachwithus<?php echo $i; ?>" data-parent="#accordionteachwithus">
                                <div>
                                  <p class="generalparagraph mb-0"><?php echo $faq['faq_answer']??''; ?></p>
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
      </div>
      
      <?php
        $form_section = rwmb_meta('form_section');
      ?>
      <div class="horizontalspacing teach-form">
        <div class="width65">
          <div class="mt-5">
            <h1 class="robotoheader"><?php echo $form_section['form_section_header']??''; ?></h1>
            <p class="medparagraph2 my-md-4"><?php echo $form_section['form_section_summary']??''; ?></p>
          </div>
          <?php
            $form_id = $form_section['form_id'] ?? ''; 
            echo do_shortcode("[gravityform id='".$form_id."' title='false' description='false' ajax='false']");
          ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
