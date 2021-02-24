<?php get_header();?>
<main class="l-main">

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
                        <h3 class="subtitle">工程案例</h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-3 pb-5">XXXXXXX</td>
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
                        <h3 class="subtitle">相片</h3>
                    </td>
                </tr>
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

                            <a href="<?php echo $img_url_full ?>" class="work-photo-a"><img
                                    src="<?php echo $img_url_thumb;?>" alt=""></a>
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


})
</script>
<?php 
get_footer();?>