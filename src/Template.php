<?php

namespace Scrawler\Blade;


class Template {
    private $engine;

    public function registerDir($view, $cache, $assets) {
        $this->engine = new TemplateEngine($view, $cache,$assets);
    }


    public function __call($name, $arguments) {
        if(is_null($this->engine)) {
            throw new \Exception('Please register view and cache directory first using registerDir() method');
        }
        return $this->engine->$name($arguments);
    }
}