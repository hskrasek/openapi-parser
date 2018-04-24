<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI;

use HSkrasek\OpenAPI\Loader\YAMLLoader;
use HSkrasek\OpenAPI\Parser\InfoParser;
use HSkrasek\OpenAPI\Parser\ServersParser;

class Parser
{
    /**
     * @var array
     */
    private $parsers;

    public function __construct(?array $parsers = null)
    {
        $this->parsers = $parsers ?: $this->defaultParsers();
    }

    public function parse(string $specPath): Specification
    {
        $data = (new YAMLLoader)->load($specPath);

        foreach ($this->parsers as $key => $parser) {
            $data[$key] = $parser($data[$key] ?? null);
        }

        return new Specification($data['openapi'], $data['info'], $data['servers']);
    }

    private function defaultParsers(): array
    {
        return [
            'info' => new InfoParser,
            'servers' => new ServersParser,
        ];
    }
}