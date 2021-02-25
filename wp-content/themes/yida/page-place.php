<?php get_header();?>
<main class="l-main">
    <div class="l-inner-wrapper">
        <div class="l-inner">
            <p id="breadcrumbs"><span><span>

                        <a class="home-a" href="<?php echo get_site_url();?>">

                            <i class="fas fa-home"></i>
                        </a>
                        &gt;
                        <span class="breadcrumb_last" aria-current="page">施工現場</span></span></span></p>
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
                    $img_id = get_field( "banner" );
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
                        <h3 class="subtitle">施工現場</h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-3 pb-5">XXXX</td>
                </tr>
            </tbody>
        </table>





    </div>
</main>
<?php 
get_footer();?>