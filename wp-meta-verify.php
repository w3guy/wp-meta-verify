<?php

/*
Plugin Name: WP Meta Verify
Plugin URI: https://w3guy.com
Description: Google and Bing webmaster verification.
Version: 1.0.0
Author: Collins Agbonghama
Author URI: https://w3guy.com
License: GPL2
*/

class WP_Meta_Verify
{
    public function __construct()
    {
        add_action('wp_head', [$this, 'header_code']);
    }

    public function header_code()
    {
        $google_code = get_option('wpmv_google_code'); // typically retrieved from plugin settings page
        $bing_code   = get_option('wpmv_bing_code');   // typically retrieved from plugin settings page

        echo $this->google_site_verification($google_code);
        echo $this->bing_site_verification($bing_code);
    }

    public function google_site_verification($code)
    {
        return "<meta name=\"google-site-verification\" content=\"$code\">";
    }

    public function bing_site_verification($code)
    {
        return "<meta name=\"msvalidate.01\" content=\"$code\">";
    }
}

new WP_Meta_Verify();
