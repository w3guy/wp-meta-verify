<?php

class WP_Meta_Verify
{
    public function __construct()
    {
        add_action('wp_head', [$this, 'header_code']);
    }

    public function header_code()
    {
        $google_code = '';
        $bing_code = '';

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