<?php
if (!function_exists('image')):
    function image($src = '', $class = 'img-responsive', $alt = '') {
        return '<img src="'.site_url($src).'" class="'.$class.'" alt="'.$alt.'" />';
    }
endif;