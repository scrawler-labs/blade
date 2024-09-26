<?php

if(!function_exists('template')) {
    function template() {
        $template = new \Scrawler\Blade\Template();

        if(class_exists('Scrawler\App')) {
            if(!\Scrawler\App::engine()->has('template')) {
                 \Scrawler\App::engine()->set('template', $template);
            }
            return \Scrawler\App::engine()->get('template');  
        }
        return $template;

    }
}

if(!function_exists('view')) {
    function view($view, $variables = []) {
        return template()->render($view, $variables);
    }
}