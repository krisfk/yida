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
                        <h3 class="subtitle">免費諮詢。上門度尺。</h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-3 pb-5">我們會用心聆聽，根據您所關注和要求，並為您提供建議。</td>
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
                        <h3 class="subtitle">裝修流程</h3>
                    </td>
                </tr>
                <tr>

                    <td colspan="2" class="pt-3 pb-5">

                        <div class="container-fluid flow-step-div">

                            <div class="row">
                                <div class="col-12"><img src="<?php echo 
get_template_directory_uri().'/images/step-1.png'; ?>"></div>
                            </div>
                            <div class="row g-0">

                                <div class="col step-col step-col-1">
                                    <div class="num"> 01</div>
                                    <div class="txt_under_num">現場洽談</div>
                                </div>
                                <div class="col step-col step-col-2">
                                    <div class="num"> 02</div>
                                    <div class="txt_under_num">快速報價</div>
                                </div>
                                <div class="col step-col step-col-3">
                                    <div class="num"> 03</div>
                                    <div class="txt_under_num">經相議後<br>
                                        雙方簽訂合約</div>
                                </div>
                                <div class="col step-col step-col-4">
                                    <div class="num"> 04</div>
                                    <div class="txt_under_num">工程展開</div>
                                </div>
                                <div class="col step-col step-col-5">
                                    <div class="num"> 05</div>
                                    <div class="txt_under_num">清拆</div>

                                </div>

                            </div>
                        </div>


                        <div class="step-grey-line mt-5 mb-5"></div>

                        <div class="container-fluid flow-step-div">

                            <div class="row">
                                <div class="col-12"><img src="<?php echo 
get_template_directory_uri().'/images/step-2.png'; ?>"></div>
                            </div>
                            <div class="row g-0">

                                <div class="col step-col step-col-1">
                                    <div class="num"> 06</div>
                                    <div class="txt_under_num">來去水工程</div>
                                </div>
                                <div class="col step-col step-col-2">
                                    <div class="num"> 07</div>
                                    <div class="txt_under_num">電力工程</div>
                                </div>
                                <div class="col step-col step-col-3">
                                    <div class="num"> 08</div>
                                    <div class="txt_under_num">泥水工程<br>
                                        雙方簽訂合約</div>
                                </div>
                                <div class="col step-col step-col-4">
                                    <div class="num"> 09</div>
                                    <div class="txt_under_num">傢俬度尺/出圖</div>
                                </div>
                                <div class="col step-col step-col-5">
                                    <div class="num"> 10</div>
                                    <div class="txt_under_num">油漆工程</div>

                                </div>

                            </div>
                        </div>


                        <div class="step-grey-line mt-5 mb-5"></div>

                        <div class="container-fluid flow-step-div">

                            <div class="row">
                                <div class="col-12"><img src="<?php echo 
get_template_directory_uri().'/images/step-3.png'; ?>"></div>
                            </div>
                            <div class="row g-0">

                                <div class="col step-col step-col-1">
                                    <div class="num"> 11</div>
                                    <div class="txt_under_num">傢俬組裝</div>
                                </div>
                                <div class="col step-col step-col-2">
                                    <div class="num"> 12</div>
                                    <div class="txt_under_num">安裝潔具、燈飾</div>
                                </div>
                                <div class="col step-col step-col-3">
                                    <div class="num"> 13</div>
                                    <div class="txt_under_num">執漏、測試</div>
                                </div>
                                <div class="col step-col step-col-4">
                                    <div class="num"> 14</div>
                                    <div class="txt_under_num">完工</div>
                                </div>
                                <div class="col step-col step-col-5">
                                    <div class="num"> 15</div>
                                    <div class="txt_under_num">完工後<br>
                                        一年免費保養<br>
                                        (不包人為損壞)</div>

                                </div>

                            </div>
                        </div>


                    </td>
                </tr>
            </tbody>
        </table>




    </div>
</main>

<?php 
get_footer();?>