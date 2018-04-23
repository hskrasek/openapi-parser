<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Loader;

use Symfony\Component\Yaml\Yaml;

class YAMLLoader implements LoaderInterface
{
    /**
     * @inheritdoc
     */
    public function load(string $path): array
    {
        return Yaml::parseFile(
            $path,
            Yaml::PARSE_CUSTOM_TAGS | Yaml::PARSE_OBJECT | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE
        );
    }
}
