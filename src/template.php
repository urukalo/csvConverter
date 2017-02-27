<?php

namespace csvConverter;

use Twig_Environment;
use Twig_Loader_Filesystem;

class template
{
    /**
     * @param $filename
     * @param array $array
     * @return string
     */
    public function render($filename, array $array)
    {
        $loader = new Twig_Loader_Filesystem('./templates');
        $twig   = new Twig_Environment($loader);

        return $twig->render($filename, ['content' => $array]);
    }
}