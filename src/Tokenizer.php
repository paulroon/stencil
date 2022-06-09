<?php

namespace Happycode\Stencil;

class Tokenizer
{

    public const TEXT = 'text';
    public const FUNC = 'function';

    private array $tokens = [];

    public function __construct(private string $template = '')
    {
        $pattern = "/". Syntax::$TOK_OPEN_TAG . "\S?[^}]*\S?" . Syntax::$TOK_CLOSE_TAG . "/";
        preg_match_all($pattern, $this->template, $matches, PREG_OFFSET_CAPTURE);

        foreach ($matches[0] as $matchData) {
            $token = trim(str_replace([Syntax::$TOK_OPEN_TAG, Syntax::$TOK_CLOSE_TAG], '', $matchData[0]), ' ');
            $this->tokens[$token] = [
                'type' => str_contains($token, Syntax::$TOK_F_SEP) ? self::FUNC : self::TEXT,
                'offset' => $matchData[1],
                'len' => strlen($matchData[0])
            ];
        }
    }

    public function getTokens(): array
    {
        return $this->tokens;
    }

    public function apply(array $context, StencilFunctions $stencilFunctions): string
    {
        $out = $this->template;
        foreach ($this->getTokens() as $token => $tData) {
            $tag = substr($this->template, $tData['offset'], $tData['len']);
            switch ($tData['type']) {
                case self::TEXT:
                    $out = $this->replaceTagWithValue(
                        $tag,
                        $context[$token] ?? $tag,
                        $out
                    );
                    break;
                case self::FUNC:
                    $out = $this->replaceTagWithValue(
                        $tag,
                        $this->applyFunction($token, $stencilFunctions),
                        $out
                    );
                    break;
                default: break;
            }
        }
        return $out;
    }

    private function replaceTagWithValue(string $tag, string $value, string $current): string
    {
        return str_replace($tag, $value, $current);
    }

    private function applyFunction(string $token, StencilFunctions $stencilFunctions): ?string
    {
        $fDefinition = explode(Syntax::$TOK_F_SEP, $token, 2);
        $fArguments = array_splice($fDefinition, 1);

        $method = $fDefinition[0];
        $args = $fArguments[0];

        if (is_callable([$stencilFunctions, $method], true)) {
            return $stencilFunctions->$method($args);
        }
        return null;
    }

}