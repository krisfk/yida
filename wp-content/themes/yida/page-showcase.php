<?php get_header();?>


<main class="l-main">

    <!-- <div class="slide-container">
        <div id="js-index-slider1" class="p-index-slider" data-slide-time="7000">
            <div class="p-index-slider__item p-index-slider__item--1 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide_01.jpg" alt="">
                    </div>
                </a>

            </div>
            <div class="p-index-slider__item p-index-slider__item--2 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide_02.jpg" alt="">
                    </div>
                </a>

            </div>
            <div class="p-index-slider__item p-index-slider__item--3 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide_03.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>


        <div id="js-index-slider2" class="p-index-slider" data-slide-time="7000">
            <div class="p-index-slider__item p-index-slider__item--1 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/test-banner.jpg" alt="">
                    </div>
                </a>

            </div>
            <div class="p-index-slider__item p-index-slider__item--2 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/test-banner.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="p-index-slider__item p-index-slider__item--3 has-button has-link-button">
                <a href="javascript:void(0);" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/test-banner.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div> -->

    <div class="l-inner-wrapper">
        <div class="l-inner">
            <p id="breadcrumbs"><span><span>

                        <a class="home-a" href="<?php echo get_site_url();?>">

                            <i class="fas fa-home"></i>
                        </a>
                        &gt;
                        <span class="breadcrumb_last" aria-current="page">Works</span></span></span></p>
        </div>
    </div>
    <div class="l-inner">

        <ul class="portfolio-filter-ul mt-3 mb-3">
            <li><a class="active" href="javascript:void(0);"> 精緻作品 <span class="arrow">&gt;</span></a></li>
            <li><a href="javascript:void(0);">實用作品 <span class="arrow">&gt;</span></a></li>
        </ul>


        <div class="container g-0 portfolio-thumbnail portfolio-thumbnail-1">

            <div class="row">

                <?php

$the_query = new WP_Query( array(
'post_type' => 'work',
'orderby' => 'menu_order',
'tax_query' => array(
array (
'taxonomy' => 'work_type',
'field' => 'slug',
'terms' => 'delicated-work',
)
),
) );

while ( $the_query->have_posts() ) :
$the_query->the_post();
$img_id = get_field('small_rectangle_image');
$img_arr =wp_get_attachment_image_src($img_id,'medium');
$img_url = $img_arr[0];
echo ' <div class="col-lg-3 mb-4">

<a href="'.get_permalink().'">
<img class="w-100" src="'.$img_url.'" alt="">
    </a>

</div>';

endwhile;

?>

                <?php

$the_query = new WP_Query( array(
'post_type' => 'work',
'orderby' => 'menu_order',
'tax_query' => array(
array (
'taxonomy' => 'work_type',
'field' => 'slug',
'terms' => 'practical-work',
)
),
) );

while ( $the_query->have_posts() ) :
$the_query->the_post();
$img_id = get_field('small_rectangle_image');
$img_arr =wp_get_attachment_image_src($img_id,'thumbnail');
$img_url = $img_arr[0];
echo '  <div class="col-lg-3 mb-4">

<a href="'.get_permalink().'">

<div class="caption">'.get_the_title().'</div>
<img class="w-100" src="'.$img_url.'" alt="">
</a>

</div>';
endwhile;

?>




            </div>
        </div>


        <!-- <div class="container g-0 portfolio-thumbnail portfolio-thumbnail-2">

            <div class="row">



                <?php

$the_query = new WP_Query( array(
'post_type' => 'work',
'orderby' => 'menu_order',
'tax_query' => array(
array (
'taxonomy' => 'work_type',
'field' => 'slug',
'terms' => 'practical-work',
)
),
) );

while ( $the_query->have_posts() ) :
$the_query->the_post();
$img_id = get_field('small_rectangle_image');
$img_arr =wp_get_attachment_image_src($img_id,'medium');
$img_url = $img_arr[0];
echo '  <div class="col-lg-6 mb-4">

<a href="'.get_permalink().'">

<div class="caption">'.get_the_title().'</div>
<img class="w-100" src="'.$img_url.'" alt="">
</a>

</div>';
endwhile;

?>






            </div>
        </div> -->





    </div>
</main>
<?php 
get_footer();?>