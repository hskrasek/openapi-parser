<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI;

use HSkrasek\OpenAPI\Loader\YAMLLoader;
use HSkrasek\OpenAPI\Parser\InfoParser;

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

        foreach ($data as $key => $datum) {
            if (!array_key_exists($key, $this->parsers)) {
                continue;
            }

            $data[$key] = $this->parsers[$key]($datum);
        }

        return new Specification($data['openapi'], $data['info']);
    }

    private function defaultParsers(): array
    {
        return [
            'openapi' => function (string $data) {
                return $data;
            },
            'info' => new InfoParser,
        ];
    }
}