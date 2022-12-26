<?php 

// append custom headers
function add_headers() {
    ?>
    <meta property="og:site_name" content="<?php echo get_bloginfo('name');?>">
    <link rel="preconnect" href="https://cdn.dragoncloud.win">
    <link rel="dns-prefetch" href="https://cdn.dragoncloud.win">
    <style>
        #post_comment {
            overflow-x: clip !important;
        }
    </style>
    <?php
		if ( !is_user_logged_in() ) { ?>
			<script async defer data-website-id="0a96dd1e-75a2-49e4-90ec-3a575b3eb12c" src="https://stats.dragoncloud.win/umami.js"></script>
            <!-- Matomo -->
            <script>
            var _paq = window._paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="https://matomo.yingmoy.com/";
                _paq.push(['setTrackerUrl', u+'matomo.php']);
                _paq.push(['setSiteId', '3']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
            })();
            </script>
            <noscript><p><img src="https://matomo.yingmoy.com/matomo.php?idsite=3&amp;rec=1" style="border:0;" alt="" /></p></noscript>
            <!-- End Matomo Code -->
	<?php
    } 
}
add_action( 'wp_head', 'add_headers' );

// append mastodon verification script
function verify_mastodon() {
    ?>
    <div style='display: none !important'><a rel="me" href="https://mast.dragon-fly.club/@holgerhuo">Mastodon Verification</a></div>
    <?php
}
add_action('wp_footer', 'verify_mastodon');
