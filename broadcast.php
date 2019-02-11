<?php
/*
Template Name: Broadcast
*/

get_header();

?>

<?php
if (get_locale() == 'es_MX' ):

  $idioma = 'Conoce más productos de la línea';
  $textos = '      <h2>Nuestras Marcas</h2>
  <p>Principales productos de cada marca</p>';
  ?>
  <?php
  elseif (get_locale() == 'en_US' ):
    $idioma = 'Learn More about the product line';
    $textos = '      <h2>Our Brands</h2>
    <p>Main products from each brand</p>';
    ?>
    <?php
  endif;
  ?>
  <section class="our-brands">
    <div class="container">
      <div class="row">

        <?php echo $textos; ?>
        <!--  -->
        <div class="slider-container row">
          <div class="slider-titles col-3">
            <ul>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-LiveU.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-aws-elemental.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-yamaha.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-decimator.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-shure.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-kramer.png" alt=""></a></li>
              <!-- <li><a href=""> <img src="<?php //echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-360-systems.png" alt=""></a></li> -->
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-brainstorm.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sound-devices.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-video-devices.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-telos.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-linear-acoustic.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-axia.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-25-seven-systems.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-omnia.png" alt=""></a></li>
              <!-- <li><a href=""> <img src="<?php //echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-ooyala.png" alt=""></a></li> -->
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-cedar.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-lawo.png" alt=""></a></li>
              <!-- <li><a href=""> <img src="<?php //echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sony.png" alt=""></a></li> -->
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-point.source.audio.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sennheiser.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-abonair.png" alt=""></a></li>
              <!-- <li><a href=""> <img src="<?php //echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-teracue.png" alt=""></a></li> -->
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-vimeo.png" alt=""></a></li>
            </ul>
          </div>
          <div class="slider-elements col-9">
            <ul class="active">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 2,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 3,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 4,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 5,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 6,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 7,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 128,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 9,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 10,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' =>11,
                'posts_per_page'   =>-1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 12,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 13,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 14,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 15,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 126,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 17,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 124,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 19,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 20,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 130,
                'posts_per_page'   => -1
              );
              $q = new WP_Query($args);
              while ($q->have_posts()):$q->the_post();
              ?>
              <li class="col-12 col-md-4">
                <a href="<?php echo get_the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  <p><?php echo get_the_title();?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <li><a href="http://www.liveu.tv/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php

  get_footer();
