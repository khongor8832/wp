<?php get_header(); ?>
<!-- slider -->
<div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
        <!--  Энэний гадна давталт эхлэх болно -->
        <?php 
            $args = array( 'post_type' => 'slider', 'angilal' => 'test-angilal-2', 'post_per_page' => 5, 'order' => 'ASC',);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <div class="swiper-slide">
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                ?>
                <img src="<?php echo $thumb_url[0] ?>">
            </div>
         <!--  Энд давталт төгсөх болно. -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>

<div class="news">
        <div class="container">
            <h2 class="title">Мэдээ мэдэээлэл</h2>
            <div class="divider"></div>
            <div class="row">

<?php 
    query_posts('cat=3&posts_per_page=4&offset=0');
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>
                <div class="col-md-3 col-sm-3">
                    <div class="n1">
                        <div class="n1-image">
                            <a href="<?php the_permalink(); ?>">
                       
                                <?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                                ?>
                                <img src="<?php echo $thumb_url[0] ?>">
                            </a>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="date"><i class="mdi mdi-calendar-blank"></i><?php echo get_the_date('Y/m/d H:i');?></div>
                        <p>
                          <?php 
                          $content = get_the_content();
                          $content = strip_tags($content);
                          echo mb_substr($content, 0, 100). '...';
                        ?>
                        </p>
                    </div>
                </div>
              <?php 
              endwhile;
            endif;
            wp_reset_query();
            ?>  
<?php 
    query_posts('page_id=14');
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>

<div class="n1-image">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php the_permalink(); ?>">
                       
                                <?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
                                ?>
                                <img src="<?php echo $thumb_url[0] ?>">
                            </a>
                        </div>
                    
                        
                        <p>
                          <?php 
                          $content = get_the_content();
                          $content = strip_tags($content);
                          echo mb_substr($content, 0, 300). '...';
                        ?>
                        </p>

<?php 
              endwhile;
            endif;
            wp_reset_query();
            ?>  
            </div>
        </div>
    </div>
<?php get_footer(); ?>