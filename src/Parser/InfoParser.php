<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

use HSkrasek\OpenAPI\Specification\Info;

class InfoParser implements ParserInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(?array $data): Info
    {
        return new Info(
            $data['title'],
            $data['description'] ?? null,
            $data['termsOfService'] ?? null,
            (new ContactParser)($data['contact'] ?? null),
            (new LicenseParser)($data['license'] ?? null),
            $data['version']
        );
    }
}