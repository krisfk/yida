<?php get_header();?>
<main class="l-main">
    <div class="l-inner-wrapper">
        <div class="l-inner">
            <p id="breadcrumbs"><span><span>

                        <a class="home-a" href="<?php echo get_site_url();?>">

                            <i class="fas fa-home"></i>
                        </a>
                        &gt;
                        <a href="<?php echo get_site_url()?>/showcase" class="breadcrumb_last" aria-current="page">
                            工程案例
                        </a></span></span>
                &gt;
                <span class="breadcrumb_last" aria-current="page"><?php echo get_the_title();?></span></span></span>
            </p>


        </div>
    </div>

    <div class="slide-container">
        <div id="js-index-slider1" class="p-index-slider" data-slide-time="7000">
            <div class="p-index-slider__item p-index-slider__item--1 has-button has-link-button">
                <div class="p-index-slider__item__inner">
                    <div class="p-index-slider__item-content">
                        <div class="p-index-slider__item-content__inner l-inner">
                        </div>
                    </div>
                    <div class="p-index-slider__item-image">

                        <?php
                    $img_id = get_field( "large_banner_image" );
                    $img_arr =wp_get_attachment_image_src($img_id,'full');
                    $img_url = $img_arr[0];
                    ?>
                        <img src="<?php echo $img_url;?>" alt="">
                    </div>
                </div>

            </div>

        </div>



    </div>


    <div class="l-inner">


        <table class="mt-5 content-table">
            <tbody>
                <tr>
                    <td class="subtitle-bar-td">
                        <div class="subtitle-bar"></div>
                    </td>
                    <td class="mb-5">
                        <h3 class="subtitle">
                            <?php echo get_the_title();?>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-3 pb-5"><?php echo get_field('work_description');?></td>
                </tr>
            </tbody>
        </table>


        <table class="content-table">
            <tbody>
                <tr>
                    <td class="subtitle-bar-td">
                        <div class="subtitle-bar"></div>
                    </td>
                    <td class="mb-5">
                        <h3 class="subtitle"><?php echo get_field('work_description') ? '工作流程':'相片';?></h3>
                    </td>
                </tr>
                <?php
                if(get_field('work_flow'))
                {
                    ?>
                <tr>
                    <td class="subtitle-bar-td">
                    </td>
                    <td class="pt-3 pb-5"><?php echo get_field('work_flow');?>
                    </td>
                </tr>
                <?php
                }
                ?>


                <tr>
                    <!-- <td></td> -->
                    <td colspan="2" class="pt-3 pb-5">

                        <div class="gallery-container">
                            <?php
                    $img_id_arr=get_field('photo_gallery');
                        

                    for($i=0;$i<count($img_id_arr);$i++)
                        {
                         
                            
                            $img_arr =wp_get_attachment_image_src($img_id_arr[$i],'medium');
                            $img_url_thumb = $img_arr[0];
                            $img_arr =wp_get_attachment_image_src($img_id_arr[$i],'full');
                            $img_url_full = $img_arr[0];

                            ?>

                            <a href="<?php echo $img_url_full ?>" class="work-photo-a">
                                <div class="black"></div>
                                <img src="<?php echo $img_url_thumb;?>" alt="">
                            </a>
                            <?php
                         
                        }
                    ?>
                        </div>


                    </td>
                </tr>
            </tbody>
        </table>





    </div>
</main>

<script type="text/javascript">
var $ = jQuery;


$(function() {

    $('.gallery-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        },

        gallery: {
            enabled: true, // set to true to enable gallery

            preload: [0, 2], // read about this option in next Lazy-loading section

            navigateByImgClick: true,

            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button

            tPrev: 'Previous (Left arrow key)', // title for left button
            tNext: 'Next (Right arrow key)', // title for right button
            tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
        }
        // other options
    });




    $(window).on('resize scroll', function() {
        if ($('.gallery-container').isInViewport() && !$('.gallery-container').hasClass('animate')) {
            $('.gallery-container').addClass('animate');
            start_animation();

        }
    });

    function start_animation() {


        for (i = 0; i < $('.work-photo-a').length; i++) {
            $('.work-photo-a').eq(i).delay(500 + 50 * i).queue(function(next) {
                $(this).addClass('animate');
            });;
        }

    }

})
</script>
<?php 
get_footer();?>