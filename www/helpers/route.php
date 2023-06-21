<?php

use Helpers\AbsoluteUrl;

if (!function_exists('route')) {
    /**
     * Tworzy bezwzględny adres URL na podstawie adresu względnego
     *
     * @param string|null $relativeUrl
     * @return void
     */
    function route(string $relativeUrl = null)
    {
        return AbsoluteUrl::get($relativeUrl);
    }
}
