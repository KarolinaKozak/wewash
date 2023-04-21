<?php
// Template Name: Strona główna
get_header(); ?>
<main>
  <div class="first-section">
      <div class="row">
        <?php
          if( have_rows('first_section') ):
            while ( have_rows('first_section') ) : the_row();
              $text = get_sub_field('text');
              $link = get_sub_field('link');
              $image = get_sub_field('image'); ?>
              <div class="col-12 col-lg-6">
                <div class="first-section-content">
                  <?php
                      echo $text; ?>
                      <a href="<?php echo $link; ?>"><img src="<?php echo get_template_directory_uri() ?>/template/img/arrow.svg" alt="arrow" /></a>
                </div>
                <div class="img-container">
                  <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                </div>
              </div>
            <?php endwhile;
          endif;?>
      </div>
  </div>
  <div class="second-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="left-col">
            <?php if( get_field('second_section_left_col') ): the_field('second_section_left_col'); endif; ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="accordion" id="accordionExample">
              <?php if( have_rows('second_section_right_col') ):
                $i = 0;
                while ( have_rows('second_section_right_col') ) : the_row();
                  $i ++;
                  $title = get_sub_field('title'); 
                  $text = get_sub_field('text'); ?>
                  <div class="accordion-item">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>"><?php echo $title; ?></button>
                    <div id="collapse<?php echo $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i ?>" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <?php echo $text; ?>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
              endif;?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="fourth-section">
    <div class="container">
      <div class="fourth-section-slider">
        <?php if( have_rows('fourth_section') ):
          while ( have_rows('fourth_section') ) : the_row();
            $text = get_sub_field('text');
            $image = get_sub_field('image'); ?>
            <div class="single-slide">
              <div class="fourth-section-content"><?php echo $text; ?></div>
              <div class="img-container">
                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
              </div>
            </div>
          <?php endwhile;
        endif;?>
      </div>
    </div>
  </div>
  <div class="fifth-section">
    <div class="container">
      <h2 class="h2"><?php echo $GLOBALS['cgv']['fifth_title'] ?></h2>
      <div class="row">
        <?php $args = array(  
          'post_type' => 'wewash_projects',
          'post_status' => 'publish',
          'posts_per_page' => 3, 
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-12 col-lg-4">
            <div class="img-container">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="fifth-section-tile">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <a href="<?php the_permalink()?>"><img src="<?php echo get_template_directory_uri() ?>/template/img/arrow.svg" alt="arrow" class="arrow" /><?php echo $GLOBALS['cgv']['mehr_lesen'] ?></a>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="sixth-section">
    <div class="container">
      <div class="sixth-section-top">
        <?php if( get_field('sixth_section_top') ): the_field('sixth_section_top'); endif; ?>
      </div>
    </div>
  </div>
  <div class="seventh-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5">          
          <?php $image = get_field('seventh_section_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="col-12 col-lg-7"><?php if( get_field('seven_section_text') ): the_field('seven_section_text'); endif; ?></div>
      </div>
    </div>
  </div>
  <div class="eight-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <?php if( get_field('eight_section_text') ): the_field('eight_section_text'); endif; ?>
        </div>
        <div class="col-12 col-lg-6">
          <?php 
          $image = get_field('eight_section_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>



<?php get_footer();
