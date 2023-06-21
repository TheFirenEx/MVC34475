<?php

namespace Http\Controllers;

abstract class Controller
{
    public function redirect(string $url)
    {
        // TODO: uwzględnić adresy względne
        header('Location: ' . $url);
    }
}
