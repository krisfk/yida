<?php get_header();?>


<main class="l-main">


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

        <ul class="portfolio-filter-ul mt-5 mb-5">
            <li><a class="active" href="javascript:void(0);"> 全部作品 </a></li>

            <li><a class="" href="javascript:void(0);"> 精緻作品 </a></li>
            <li><a href="javascript:void(0);">實用作品 </a></li>
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
echo ' <div class="col-6 col-lg-3 work-thumb-div ">

<a href="'.get_permalink().'">

<img class="w-100" src="'.$img_url.'" alt="">
    </a>
    <div class="caption">'.get_the_title().'</div>

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
$img_arr =wp_get_attachment_image_src($img_id,'medium');
$img_url = $img_arr[0];
echo '  <div class="col-6 col-lg-3 work-thumb-div">

<a href="'.get_permalink().'">

<img class="w-100" src="'.$img_url.'" alt="">
</a>
<div class="caption">'.get_the_title().'</div>


</div>';
endwhile;

?>




            </div>
        </div>






    </div>
</main>
<?php 
get_footer();?>