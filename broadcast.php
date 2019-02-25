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
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-lawo.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-aws-elemental.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-yamaha.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-decimator.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-shure.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-abonair.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-point.source.audio.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-cedar.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sennheiser.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-brainstorm.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-vimeo.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-telos.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-omnia.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-infinity.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-linear-acoustic.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-minnetonka-audio.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-25-seven-systems.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-kramer.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-on-stage.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-video-devices.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sound-devices.png" alt=""></a></li>
              <li><a href=""> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-jutel.png" alt=""></a></li>
            </ul>
          </div>
          <div class="slider-elements col-9">
            <!-- live u -->
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
            <!-- lawo -->
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
            <li><a href="http://www.lawo.com" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!--  aws -->
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
            <li><a href="http://www.elemental.com" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- yamaha -->
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
            <li><a href="http://mx.yamaha.com/es/products/proaudio/index.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- decimator -->
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
            <li><a href="https://www.decimator.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- shure -->
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
            <li><a href="https://mx.shure.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- AB on air -->
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
            <li><a href="https://www.abonair.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- point source -->
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
            <li><a href="http://www.point-sourceaudio.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- cedar -->
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
            <li><a href="https://www.cedar-audio.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- sennheiser -->
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
            <li><a href="https://es-mx.sennheiser.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- brainstorm -->
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
            <li><a href="http://www.brainstorm3d.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- vimeo -->
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
            <li><a href="https://vimeo.com" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- telos -->
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
            <li><a href="https://www.telosalliance.com/Telos" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- omnia -->
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
            <li><a href="https://www.telosalliance.com/Omnia" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- infinity -->
            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 230,
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
            <li><a href="https://www.telosalliance.com/Telos-Infinity" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- linear acoustic -->
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
            <li><a href="https://www.telosalliance.com/Linear" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- minetoka audio -->
            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 234,
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
            <li><a href="https://www.telosalliance.com/MinnetonkaAudio" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- 25 -->
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
            <li><a href="https://www.telosalliance.com/25-Seven" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- kramer -->
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
            <li><a href="https://www.kramerav.com/mx/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- on stage -->
            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 238,
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
            <li><a href="https://on-stage.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- video devices -->
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
            <li><a href="https://www.videodevices.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- sound devices -->
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
            <li><a href="https://www.sounddevices.com/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>
            <!-- jutel -->
            <ul class="">
              <?php
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => 242,
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
            <li><a href="https://jutel.fi/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
              <p><?php echo $idioma;?></p></a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php

  get_footer();
