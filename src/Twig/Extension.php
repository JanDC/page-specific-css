<?php

namespace JanDC\PageSpecificCss\Twig;

use JanDC\PageSpecificCss\Twig\TokenParsers\FoldTokenParser;
use Twig_Extension;
use Twig_ExtensionInterface;

class Extension extends Twig_Extension implements Twig_ExtensionInterface
{

    public function getTokenParsers()
    {
        return [
            new FoldTokenParser(),
        ];
    }

}