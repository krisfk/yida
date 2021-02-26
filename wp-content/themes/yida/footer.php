<footer class="l-footer">

    <?php

$footer = get_page_by_path( 'footer' );
// echo get_the_content( $footer );
$post   = get_post( $footer );

$output =  apply_filters( 'the_content', $post->post_content );

echo $output;
?>


</footer>


<link rel='stylesheet' id='insta-gallery-css'
    href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>frontend.css?ver=3.1.0' type='text/css'
    media='all' />
<link rel='stylesheet' id='magnific-popup-css'
    href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>magnific-popup.min.css?ver=3.1.0' type='text/css'
    media='all' />
<link rel='stylesheet' id='swiper-css'
    href='<?php echo get_template_directory_uri().'/yida-assets/'; ?>swiper.min.css?ver=3.1.0' type='text/css'
    media='all' />
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {
    "apiSettings": {
        "root": "https:\/\/design-halue.com\/wp-json\/contact-form-7\/v1",
        "namespace": "contact-form-7\/v1"
    }
};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>scripts.js?ver=5.3'
    id='contact-form-7-js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>front-page.js?ver=1.6'
    id='iconic-front-page-js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>functions.js?ver=1.6'
    id='iconic-script-js'>
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>slick.min.js?ver=1.6'
    id='iconic-slick-js'>
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>header-fix.js?ver=1.6'
    id='iconic-header-fix-js'></script>
<script type='text/javascript'
    src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>wp-embed.min.js?ver=5.5.3' id='wp-embed-js'>
</script>
<script type='text/javascript' id='insta-gallery-js-extra'>
/* <![CDATA[ */
var qligg = {
    "ajax_url": "https:\/\/design-halue.com\/wp-admin\/admin-ajax.php"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>frontend.js?ver=75cfaa425a2687569e77100aa3d2c489'
    id='insta-gallery-js'></script>
<script type='text/javascript'
    src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>jquery.magnific-popup.min.js?ver=3.1.0'
    id='magnific-popup-js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri().'/yida-assets/'; ?>swiper.min.js?ver=5.3.6'
    id='swiper-js'>
</script>
<script>
jQuery(function($) {
    var initialized = false;
    var initialize = function() {
        if (initialized) return;
        initialized = true;

        $(document).trigger('js-initialized');
        $(window).trigger('resize').trigger('scroll');
    };

    initialize();




});
</script>


</body>


</html>