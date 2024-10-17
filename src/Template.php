<?php

namespace Scrawler\Blade;

/*
 * This file is part of the Scrawler package.
 *
 * (c) Pranjal Pandey <its.pranjalpandey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @mixin \Scrawler\Blade\TemplateEngine
 */
class Template
{
    private ?TemplateEngine $engine = null;

    public function registerDir(string $view, string $cache, string $assets): void
    {
        $this->engine = new TemplateEngine($view, $cache, $assets);
    }

    public function __call(string $name, mixed $arguments): mixed
    {
        if (is_null($this->engine)) {
            throw new \Exception('Please register view and cache directory first using registerDir() method');
        }

        return $this->engine->$name(...$arguments);
    }
}
