<?php

namespace Happycode\Stencil;

class Stencil
{
    public function parse(string $template, array $context = []): string
    {
        $tokenizer = new Tokenizer($template);
        return $tokenizer->apply($context, new StencilFunctions());
    }

}