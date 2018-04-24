<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

abstract class AbstractParser
{
    protected $parsers = [];

    protected function mapDataToParsers(array $data): array
    {
        foreach ($this->parsers as $key => $parser) {
            $data[$key] = $parser($data[$key] ?? null);
        }

        return $data;
    }
}