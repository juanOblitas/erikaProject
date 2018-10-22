<?php 
get_header();

$colmain = (is_active_sidebar( 'sidebar-1' )) ? 'col-md-12 col-lg-12' : 'col-md-12 col-lg-12';
$layout = get_theme_mod( 'corporate_landing_page_homepage_layout_style', 'default');?>
<div id="content" class="site-content blog-two">
  <div class="container">
    <div class="row">
      <div class="<?php echo esc_attr($colmain); ?>">
        <div id="primary" class="content-area">
          <main id="main" class="site-main">
          <!-- Carrusel dinamico -->
          <?php
            $args = array(
            'post_type' => 'jc_slider',
            'posts_per_page' => 3
            );
            $loop = new WP_Query( $args );

            if ($loop->have_posts()) : 
            ?>
            <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
              <!-- <ol class="carousel-indicators jc-boton-carousel"> -->
              <ol class="jc-boton-carousel">
                <?php
                  $l = $loop->post_count;
                  for ($i = 0; $i < $l; $i++) { 
                ?>
                <li data-target="#carousel"
                data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) { echo 'active'; } ?>"
                ></li>
                <?php
                  }
                ?>
              </ol>
              <div class="carousel-inner w-100 jc-filter space-after-carousel" role="listbox">
              <?php
                $n = 0;
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="carousel-item <?php if($n == 0) { echo 'active'; } ?>">
                  <?php echo get_the_post_thumbnail( $loop->ID, 'jc-featured-image' ); ?>
                  <div class="overlay">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-md-6 offset-md-3">
                          <?php the_content(); ?>
                        </div>
                      </div> 
                    </div>  
                  </div>
                </div>
              <?php
                $n++;
                endwhile;
              ?>
                
              </div>
              <!-- Estos a hacen referencia a las flechas de los costados -->
              <!-- <a class="carousel-control-prev jc-arrow" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next jc-arrow" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>
            <?php
              endif;
            ?>
          <!-- Fin carrusel dinamico -->

          <!-- Cards -->
          <div class="rounded caja">
            <h2 class="mb-3 mt-3 service">
            <div class="container">Nuestros Servicios</div>
            </h2>
          <?php
            $args = array(
            'post_type' => 'jc_image',
            'posts_per_page' => 4,
            'orderby'=>'date&order=DESC'
            );
            $image = new WP_Query( $args );

            if ($image->have_posts()) : 
            ?>
          <div class="container">

          <div class="row mb-3">
            <?php
                while ( $image->have_posts() ) : $image->the_post(); 
            ?>
            <div class="mb-3 col-sm-6 col-md-6 col-lg-3 col-xl-3">
              <div class="card">
                <!-- <img class="card-img-top" src="<?php /*echo get_the_post_thumbnail( $image->ID, 'jc-service-image' );*/ ?>" alt="Foto"> -->
                <?php echo get_the_post_thumbnail( $image->ID, 'jc-service-image' ); ?>
                
                  <?php the_content(); ?>
                
              </div>
            </div>
            <?php
                endwhile;
              ?>
          </div>
          </div>
          <?php
            endif;
          ?>
          </div>
          <!-- /Cards -->
          <!-- Video -->
          <div class="rounded caja">
            <h2 class="mb-3 mt-3 service">
            <div class="container">Nosotros en acción</div>
            </h2>
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <?php 
                  dynamic_sidebar('sidebar');
                ?>
              </div>
            </div>
          </div>
          </div>
          <!-- /Video -->
            

          <!-- <?php  
          /*if(have_posts()):
            while(have_posts()): the_post();
                get_template_part( 'template-parts/content' ); 
            endwhile;
        else:
            get_template_part('template-parts/content' , 'none' );        
            endif*/;?> -->
            <!-- <div class="clearfix"></div> -->
        </main>
        <?php corporate_landing_page_pagination(); ?> 
    </div>
</div>
<?php 
 /*get_sidebar(); */
?>
</div>
</div>
</div>
<?php get_footer();?>
