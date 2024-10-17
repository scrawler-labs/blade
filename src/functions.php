<?php
/*
 * This file is part of the Scrawler package.
 *
 * (c) Pranjal Pandey <its.pranjalpandey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('template')) {
    function template(): Scrawler\Blade\Template
    {
        $template = new Scrawler\Blade\Template();

        if (class_exists('Scrawler\App')) {
            if (!Scrawler\App::engine()->has('template')) {
                Scrawler\App::engine()->register('template', $template);
            }

            return Scrawler\App::engine()->template();
        }

        return $template;
    }
}

if (!function_exists('view')) {
    /**
     * Render the view.
     *
     * @param array<mixed> $variables to pass to view
     */
    function view(string $view, array $variables = []): string
    {
        return template()->render($view, $variables);
    }
}
