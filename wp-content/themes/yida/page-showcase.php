<?php get_header();?>
<main class="l-main">

    <div class="slide-container">
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
                    <td class="pt-3 pb-5">XXXX</td>
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
                    <td></td>
                    <td class="pt-3 pb-5">
                        <!-- fdsf -->
                        <?php
                        the_content();
                        
                //    echo  do_shortcode('[woowgallery id="16"]');
                    ?>

                    </td>
                </tr>
            </tbody>
        </table>





    </div>
</main>
<?php 
get_footer();?>