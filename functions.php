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
			<script async defer data-website-id="0a96dd1e-75a2-49e4-90ec-3a575b3eb12c" src="https://stats.dragon-fly.club/umami.js"></script>
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
