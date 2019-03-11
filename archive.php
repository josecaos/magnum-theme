<?php

get_header();

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
        <div class="broadcast-container row">
          <div class="broadcast-titles col-3">
            <ul>
              <?php if (get_locale() == 'es_MX'): ?>

                <li><a href="<?php echo get_category_link(2);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-LiveU.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(17);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-lawo.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(3);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-aws-elemental.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(4);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-yamaha.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(5);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-decimator.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(6);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-shure.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(20);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-abonair.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(124);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-point.source.audio.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(126);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-cedar.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(19);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sennheiser.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(128);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-brainstorm.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(130);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-vimeo.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(11);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-telos.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(15);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-omnia.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(230);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-infinity.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(12);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-linear-acoustic.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(234);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-minnetonka-audio.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(14);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-25-seven-systems.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(7);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-kramer.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(238);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-on-stage.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(10);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-video-devices.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(9);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sound-devices.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(242);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-jutel.png" alt=""></a></li>

              <?php elseif (get_locale() == 'en_US'):?>

                <li><a href="<?php echo get_category_link(77);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-LiveU.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(73);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-lawo.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(65);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-aws-elemental.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(87);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-yamaha.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(69);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-decimator.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(85);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-shure.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(63);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-abonair.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(159);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-point.source.audio.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(157);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-cedar.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(83);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sennheiser.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(155);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-brainstorm.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(161);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-vimeo.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(96);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-telos.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(79);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-omnia.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(232);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-infinity.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(75);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-linear-acoustic.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(236);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-minnetonka-audio.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(58);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-25-seven-systems.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(71);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-kramer.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(240);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-on-stage.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(90);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-video-devices.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(98);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-sound-devices.png" alt=""></a></li>
                <li><a href="<?php echo get_category_link(244);?>"> <img src="<?php echo get_template_directory_uri();?>/images/sections/broadcast/brands/magnum-broadcast-jutel.png" alt=""></a></li>

              <?php endif; ?>
            </ul>
          </div>
          <div id="broadcast-cats" class="broadcast-elements col-9">
            <ul class="active">
              <div class="col-12">
                <h1 class="cat-title"><?php echo single_cat_title(); ?></h1>
              </div>
              <?php
              $category = get_category( get_query_var( 'cat' ) );
              $cat_id = $category->cat_ID;
              $cat_link = get_option("category_$cat_id");
              $args = array(
                'post_type' => 'broadcast-cpt',
                'cat' => $cat_id,
                'posts_per_page' => -1
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
            <li>
              <a href="<?php echo $cat_link['extra1'] ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-plus.png" alt="">
                <p><?php echo $idioma;?></p>
              </a>
            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();
