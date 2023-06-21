<?php

namespace Helpers;

/**
 * Generowanie bezwzględnych adresów URL
 */
class AbsoluteUrl
{
    /**
     * Zwraca bezwzględny adres URL na podstawie adresu względnego
     *
     * @param string|null $relativeUrl
     * @return void
     */
    public static function get(string $relativeUrl = null)
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https://'
            : 'http://';
        $hostWithPort = $_SERVER['HTTP_HOST'];
        return $protocol . $hostWithPort . '/' . $relativeUrl;
    }
}
