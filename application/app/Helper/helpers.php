<?php

if(!function_exists('d_asset')) {
    /**
     * Generate an asset path for the application by using define url in .env.
     *
     * @param  string  $path
     * @return string
     */
    function d_asset($path)
    {
        return d_url($path);
    }
}

if(!function_exists('d_url')) {
    /**
     * Generate an path for the application by using define url in .env.
     *
     * @param  string  $path
     * @return string
     */
    function d_url($path)
    {
        if(substr($path, 0, 1) === '/') {
            $path = substr($path, 1, strlen($path) - 1);
        }
        return config('app.url').'/'.$path;
    }
}