<?php
namespace Dotenv;

class Dotenv {
    public static $data;

    protected $path;
    protected $filename;

    public function __construct($path, $filename = '.env.php') {
        $this->path = $path;
        $this->filename = $filename;
    }

    public function load() {
        self::$data = require($this->path . DIRECTORY_SEPARATOR . $this->filename);
    }
}
