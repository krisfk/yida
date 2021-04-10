<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="依達貿易有限公司">
    <meta name="viewport" content="width=device-width">

    <!-- <title>依達貿易有限公司</title> -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />



    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>style.min.css?ver=5.5.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>styles.css?ver=5.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='chld_thm_cfg_parent-css'
        href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>style.css?ver=5.5.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='iconic-style-css'
        href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>style.css?ver=1.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='iconic-slick-css'
        href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>slick.min.css?ver=5.5.3' type='text/css'
        media='all' />
    <script type='text/javascript'
        src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>jquery.js?ver=1.12.4-wp' id='jquery-core-js'>
    </script>

    <link rel="icon" href="http://167.71.95.220/wp-content/uploads/2021/02/yida-ico@150x150.jpg" sizes="32x32" />
    <link rel="icon" href="http://167.71.95.220/wp-content/uploads/2021/02/yida-ico@300x300.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://167.71.95.220/wp-content/uploads/2021/02/yida-ico@300x300.jpg" />
    <meta name="msapplication-TileImage"
        content="http://167.71.95.220/wp-content/uploads/2021/02/yida-ico@300x300.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel='stylesheet' href='<?php echo 
get_template_directory_uri().'/style.css'; ?>' type='text/css' media='all' />



    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css"
        integrity="sha512-aB3UdGCt+QZdSlPCgDsJBJ+JytRb8oq/cdMEpLTaypINSyom0h5vcw2HsF1m0eZtWsetJllPtQOfCPM9UrdKYw=="
        crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"
        integrity="sha512-IB7NSySDRedVEsYsOVuzN5O5jwRjV2ewVVmkDFIgE0yNu11GreBCOMv07i7hlQck41T+sTXSL05/cG+De4cZDw=="
        crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="<?php echo 
get_template_directory_uri().'/magnific-popup.css'; ?>">


    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="<?php echo 
get_template_directory_uri().'/jquery.magnific-popup.js'; ?>"></script>

    <script type="text/javascript" src="<?php echo 
get_template_directory_uri().'/common.js'; ?>"></script>

    <script src="https://kit.fontawesome.com/64716b40d8.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="js-header" class="l-header">

        <div class="top-grey-bar"></div>
        <div class="l-header__bar p-header__bar">
            <div class="p-header__bar__inner l-inner">
                <h1 class="p-logo p-header__logo">
                    <a href="<?php echo get_site_url();?>">

                        <img class="yida-logo" src="<?php echo 
get_template_directory_uri().'/images/logo.png'; ?>" alt="">
                    </a>
                </h1>
                <div class="p-logo p-header__logo--mobile">
                    <a href="<?php echo get_site_url();?>">


                        <img class="yida-logo" src="<?php echo 
get_template_directory_uri().'/images/logo.png'; ?>" alt="">
                    </a>
                </div>
                <a href="#" id="js-menu-button" class="p-menu-button c-menu-button"></a>
                <nav class="p-global-nav__container">
                    <?php
					 global $post;
					 $slug = $post->post_name;
					 ?>
                    <ul id="js-global-nav" class="p-global-nav">
                        <li id="menu-item-809"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $slug=='home' ?  'current-menu-item' :'';?> page_item page-item-68  menu-item-809">
                            <a href="<?php echo get_site_url();?>" aria-current="page">主頁<span></span></a>
                        </li>
                        <li id="menu-item-809"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $slug=='showcase' || get_post_type() =='work' ?  'current-menu-item' :'';?> page_item page-item-68  menu-item-809">
                            <a href="<?php echo get_site_url();?>/showcase" aria-current="page">工程案例<span></span></a>
                        </li>
                        <li id="menu-item-809"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $slug=='flow' ?  'current-menu-item' :'';?>  page_item page-item-68  menu-item-809">
                            <a href="<?php echo get_site_url();?>/flow" aria-current="page">裝修流程<span></span></a>
                        </li>
                        <!-- <li id="menu-item-809"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $slug=='place' ?  'current-menu-item' :'';?>  page_item page-item-68  menu-item-809">
                            <a href="<?php echo get_site_url();?>/place" aria-current="page">施工現場<span></span></a>
                        </li> -->
                        <li id="menu-item-809"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $slug=='contact' ?  'current-menu-item' :'';?> page_item page-item-68  menu-item-809">
                            <a href="<?php echo get_site_url();?>/contact" aria-current="page">聯絡我們<span></span></a>
                        </li>

                    </ul>
                </nav>
                <ul class="sns-ul">

                    <li> <a target="_blank" href="https://wa.me/85293166606"><img
                                src="<?php echo get_template_directory_uri();?>/images/wts-icon.png" alt=""></a></li>
                    <li class="position-relative">

                        <a href="javascript:void(0);" class="wechat-icon-a"><img
                                src="<?php echo get_template_directory_uri();?>/images/wechat-icon.png" alt=""></a>

                        <img class="yida-qrcode" src="<?php echo get_template_directory_uri();?>/images/yida-qrcode.jpg"
                            alt="">
                    </li>
                    <li>

                        <a href="mailto:bun@interiorshk.com" target="_blank">

                            <img src="<?php echo get_template_directory_uri();?>/images/email-icon.png" alt=""></a>
                    </li>
                </ul>

            </div>
        </div>

    </header>

    <script type="text/javascript">
    $(function() {

        $('.wechat-icon-a').mouseenter(function() {
            $('.yida-qrcode').fadeIn(0);

        })

        $('.wechat-icon-a').click(function() {

            $(this).toggleClass('active');
            if (!$('.wechat-icon-a').hasClass('active')) {

                $('.yida-qrcode').fadeOut(0);
            }

        })

        $('.l-header__bar.p-header__bar').mouseleave(function() {
            $('.yida-qrcode').fadeOut(0);

        })

    })
    </script>