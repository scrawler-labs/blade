<?php
/*
 * This file is part of the Scrawler package.
 *
 * (c) Pranjal Pandey <its.pranjalpandey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Scrawler\Blade;

use eftec\bladeone\BladeOne;

class TemplateEngine extends BladeOne
{
    private string $asset;

    /**
     * Create a new Blade instance.
     *
     * @param string $view  path
     * @param string $cache path
     * @param string $asset path
     */
    public function __construct(string $view, string $cache, string $asset)
    {
        parent::__construct($view, $cache, BladeOne::MODE_AUTO);
        $this->asset = $asset;
    }

    /**
     * Render the template.
     *
     * @param string       $view      to render
     * @param array<mixed> $variables to pass to view
     */
    public function render(string $view, array $variables = []): string
    {
        return $this->run($view, $variables);
    }

    /**
     * Add path to template.
     */
    public function addPath(string $path): void
    {
        array_push($this->templatePath, $path);
    }

    /**
     * Strips ('')  to  get the variable passed.
     */
    private function strip(string $expression): string
    {
        return substr($expression, 2, -2);
    }

    /**
     * Include css file from assets.
     */
    public function compileCss(string $file): string
    {
        $file = $this->strip($file);
        if (function_exists('url')) {
            return '<link rel="stylesheet" type="text/css" href="'.url('/'.$this->asset.'//css/'.$file.'.css').'">';
        }

        return '<link rel="stylesheet" type="text/css" href="/'.$this->asset.'//css/'.$file.'.css">';
    }

    /**
     * Include js file from assets.
     */
    public function compileJs(string $file): string
    {
        $file = $this->strip($file);
        if (function_exists('url')) {
            return '<script src="'.url('/'.$this->asset.'//js/'.$file.'.js').'"></script>';
        }

        return '<script src="/'.$this->asset.'//js/'.$file.'.js"></script>';
    }

    /**
     * Get url of asset.
     */
    protected function compileAsset(mixed $file): string
    {
        $file = $this->strip($file);
        if (function_exists('url')) {
            return url('/'.$this->asset.'/'.$file);
        }

        return '/'.$this->asset.'/'.$file;
    }
}
