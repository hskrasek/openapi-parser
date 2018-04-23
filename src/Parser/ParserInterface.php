<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

interface ParserInterface
{
    /**
     * Parses an array into a specification object
     *
     * @param array|null $data
     *
     * @return mixed
     */
    public function __invoke(?array $data);
}