<?php

// active class
if (!function_exists('setActive')) {
    /**
     * active class helpers
     *
     * @param mixed $path
     * @param string $active
     *
     * @return [type]
     */
    function setActive($path, $active = 'active')
    {
        return call_user_func_array('Request::is', (array) $path) ? $active : '';
    }
}
