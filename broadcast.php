<?php
/*
Template Name: Broadcast
*/
get_header();
?>

<section class="our-brands">
  <div class="container">
    <div class="row">
      <h2>Nuestras Marcas</h2>
      <p>Principales productos de cada marca</p>
      <div class="slider-container row">
        <div class="slider-titles col-3">
          <ul>
            <li class=""><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-LiveU.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-aws-elemental.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-yamaha.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-decimator.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-shure.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-kramer.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-360-systems.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sound-devices.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-video-devices.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-telos.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-linear-acoustic.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-axia.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-25-seven-systems.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-omnia.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-ooyala.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-lawo.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sony.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sennheiser.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-abonair.png" alt=""></a></li>
            <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-teracue.png" alt=""></a></li>
          </ul>
        </div>
        <div class="slider-elements col-9">
          <!--  -->
          <ul class="active">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 2
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 3
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 4
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 5
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 6
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 7
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 8
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 9
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 10
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' =>11
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 12
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 13
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 14
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 15
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 16
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 17
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 18
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 19
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 20
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
          <!--  -->
          <ul class="">
            <?php
            $args = array(
              'post_type' => 'broadcast-cpt',
              'cat' => 21
            );
            $q = new WP_Query($args);
            while ($q->have_posts()):$q->the_post();
            ?>
            <li>
              <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                <p><?php echo get_the_title();?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
            <p>Conoce más productos de la línea</p></a></li>
          </ul>
          <!--  -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();
