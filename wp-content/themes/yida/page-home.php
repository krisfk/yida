<?php get_header();?>

<main class="l-main">

    <div class="slide-container">


        <div id="js-index-slider1" class="p-index-slider" data-slide-time="7000">


            <?php
                        $work_id_arr = get_field('home_banners_delicate_work');

                        for($i=0;$i<count($work_id_arr);$i++)
                        {

                            $img_id = get_field( "large_banner_image", $work_id_arr[$i] );
                            $img_arr =wp_get_attachment_image_src($img_id,'full');
                            $img_url = $img_arr[0];
                            $work_link = get_permalink($work_id_arr[$i]);
                            
                            ?>
            <div class="p-index-slider__item p-index-slider__item--1 has-button has-link-button">
                <div href="<?php echo $work_link;?>" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo $img_url; ?>" alt="">
                    </div>
                </div>

            </div>
            <?php
                        }

                        ?>




        </div>


        <!-- <div id="js-index-slider2" class="p-index-slider" data-slide-time="7000">

            <?php
                        $work_id_arr = get_field('home_banners_practical_work');

                        for($i=0;$i<count($work_id_arr);$i++)
                        {

                            $img_id = get_field( "large_banner_image", $work_id_arr[$i] );
                            $img_arr =wp_get_attachment_image_src($img_id,'full');
                            $img_url = $img_arr[0];
                            $work_link = get_permalink($work_id_arr[$i]);
                            
                            ?>
            <div class="p-index-slider__item p-index-slider__item--1 has-button has-link-button">
                <div href="<?php echo $work_link;?>" class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <img src="<?php echo $img_url; ?>" alt="">
                    </div>
                </div>

            </div>
            <?php
                        }

                        ?>

        </div> -->
    </div>


    <div class="l-inner position-relative pt-4 pt-sm-4 pt-md-5 pt-lg-5">


        <ul class="portfolio-filter-ul">
            <li><a class="active" href="javascript:void(0);"> 我們是⋯ <span class="arrow">&gt;</span></a></li>
            <li><a href="javascript:void(0);">工程案例 <span class="arrow">&gt;</span></a></li>
        </ul>


        <div class="l-inner">


            <table class="mt-5 content-table">
                <tbody>
                    <tr>
                        <td class="subtitle-bar-td">
                            <div class="subtitle-bar"></div>
                        </td>
                        <td class="mb-5">
                            <h3 class="subtitle">重要的不是佈局，而是生活方式。</h3>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pt-3 pb-5">在繁囂的生活中，我們究竟想要什麼。
                            我們提供的不是建築物和佈局，而是每個人的生活方式。
                            有些人想保持客廳清潔整潔，而另一些人則想放很多其他物品，給自己喜歡的東西包圍住。
                            “我想邀請很多朋友來家中聚會”“我想有個空間讓兩夫妻過一些緩慢而平靜的生活”
                            即使使用相同的佈局，要選擇的傢俱和室內裝飾也會發生很大變化。</td>
                    </tr>
                </tbody>
            </table>

            <table class="mb-5 content-table">
                <tbody>
                    <tr>
                        <td class="subtitle-bar-td">
                            <div class="subtitle-bar"></div>
                        </td>
                        <td>
                            <h3 class="subtitle">全科工程，一條龍服務。</h3>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pt-3">本公司成立超過十年，承接各類室內裝修全科工程，由設計出圖，上門洽談度尺，工程展開，
                            跟進直至完工，為客人提供一條龍服務，亦可按客人要求提供各類局部裝修工程服務。 </td>
                    </tr>
                </tbody>
            </table>


        </div>

        <!-- <div class="container g-0 portfolio-thumbnail portfolio-thumbnail-1">

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
    $img_arr =wp_get_attachment_image_src($img_id,'full');
    $img_url = $img_arr[0];
    echo ' <div class="col-lg-6 mb-4">

    <a href="'.get_permalink().'">
        <img class="w-100" src="'.$img_url.'" alt="">
                </a>

            </div>';

            endwhile;

            ?>



            </div>
        </div>


        <div class="container g-0 portfolio-thumbnail portfolio-thumbnail-2">

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
    $img_arr =wp_get_attachment_image_src($img_id,'full');
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

<script type="text/javascript">
$(function() {
    // var viewing_idx = 1;
    // $('.portfolio-filter-ul li a').click(function() {
    //     $('.portfolio-filter-ul li a').removeClass('active');
    //     $(this).toggleClass('active');

    //     viewing_idx = $(this).parent('li').index() + 1;

    //     $('.portfolio-thumbnail').fadeOut(0);
    //     $('.portfolio-thumbnail-' + viewing_idx).fadeIn(0);

    //     // $('.p-index-slider').fadeOut(0);

    //     $('.p-index-slider').css({
    //         'z-index': '0'
    //     });

    //     $('.p-index-slider#js-index-slider' + viewing_idx).css({
    //         'z-index': '100'
    //     })
    // })
})
</script>
<?php 
get_footer();?>