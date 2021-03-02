<?php get_header();?>
<main class="l-main">

    <div class="l-inner-wrapper">
        <div class="l-inner">
            <p id="breadcrumbs"><span><span>

                        <a class="home-a" href="<?php echo get_site_url();?>">

                            <i class="fas fa-home"></i>
                        </a>
                        &gt;
                        <span class="breadcrumb_last" aria-current="page">聯絡我們</span></span></span></p>
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
                        <h3 class="subtitle">聯絡我們</h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-3 pb-5">


                        裝修工程種類繁多 , 不能盡錄 , 本公司提供免費報價及上門度尺 , 歡迎聯絡洽談 , 客戶亦可電郵圖則等資料查詢報價 <br><br>


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.81477434848!2d114.16055751528096!3d22.322843847716413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400b73904bceb%3A0x5e1be8061fbfd494!2z5aSn6KeS5ZKA5ZCI5qGD6KGXMeiZn-emj-aYjOW3peW7oOWkp-W7iA!5e0!3m2!1szh-TW!2shk!4v1614694761106!5m2!1szh-TW!2shk"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        <table class="d-inline-block">
                            <tr>
                                <td class="pe-2">電話:</td>
                                <td>9316 6606 李 生</td>
                            </tr>
                            <tr>
                                <td class="pe-2">傳真:</td>
                                <td>8147 1279</td>
                            </tr>
                            <tr>
                                <td class="pe-2">電郵:</td>
                                <td> <a href="mailto:bun@interiordecorationshome.com"
                                        target="_blank">bun@interiordecorationshome.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">地址:</td>
                                <td>大角咀合桃街一號6A5室</td>
                            </tr>

                        </table>


                    </td>
                </tr>
            </tbody>
        </table>






    </div>
</main>
<?php 
get_footer();?>