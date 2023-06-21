<?php

namespace Http\Requests;

/**
 * Żądanie HTTP
 */
class Request
{
    protected $rules = [];
    protected $path = '';
    protected $method = '';

    public function __construct()
    {
        $this->path = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function path()
    {
        return $this->path;
    }

    public function method()
    {
        return $this->method;
    }

    public function get(string $name, $default = null)
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }

    public function post(string $name, $default = null)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }
}
